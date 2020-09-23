<?php

namespace App\Http\Controllers;

use App\Jadwal;
use Illuminate\Http\Request;
use App\Imports\JadwalImport;
use Maatwebsite\Excel\Facades\Excel;
use Session;


class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = Jadwal::all();
        return view('Staff.ImportJadwal', compact('jadwal'));
    }
    private $error = [];

    public function collection(Collection $rows)
    {
        $i = 1;
        foreach ($rows as $row) 
        {
            $cek_campaign = CampaignH::where('kode_campaign', trim($row[0]))->where('active' , 1)->count();
            $cek_user = UserAvex::where('reldag', trim($row[1]))->count();
            $cek = CustomerOmzet::where('kode_campaign', trim($row[0]))->where('kode_customer', trim($row[1]))->where('active',1)->count();
            if ($cek_campaign == 0){
                $text = "Baris ".$i." : Kode Campaign tidak ditemukan";
                array_push($this->error,$text);
            } else 
            if ($cek_user == 0){
                $text = "Baris ".$i." : Kode Customer tidak ditemukan";
                array_push($this->error,$text);
            } else
            if ($cek > 0){
                //kembar
                $text = "Baris ".$i." : Data sudah ada";
                array_push($this->error,$text);
            } else
            if ($row[3] < $row[2]){
                //periode akhir < periode awal
                $text = "Baris ".$i." : Tanggal periode akhir lebih kecil dari periode awal";
                array_push($this->error,$text);
            } else {
                $data = new CustomerOmzet;
                $data->kode_campaign = trim($row[0]);
                $data->kode_customer = trim($row[1]);
                $data->periode_awal = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[2]);
                $data->periode_akhir = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[3]);
                $data->omzet_tepat_waktu = $row[4] / 1;
                $data->disc_pembelian = $row[5] / 1;
                $data->disc_penjualan = $row[6] / 1;
                $data->omzet_netto = $row[7] / 1;
                $data->poin = $row[8] / 1;
                $data->active = 1;
                $data->user_modified = Session::get('userinfo')['uname'];
                $data->save();
            }
            $i++;
        }
    }

    public function importJadwal(Request $request)
    {
        if($request->hasFile('file')){
            $file = $request->file('file');
            $file = $request->file('file');
            $nama_file = rand().$file->getClientOriginalName();
            $file->move('file_jadwal',$nama_file);
            $data=Excel::import(new JadwalImport, public_path('/file_jadwal/'.$nama_file));
            if (!empty($data)) {         
                    $notif = array(
                        'message'    => 'Data Berhasil di Tambahkan',
                        'alert-type' => 'success'
                        
                    );  
                    return redirect()->back()->with($notif);
                       
                
            } else {
                dd("konnnntollll");
            
        }
    }
    
    
}
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        $id = $req->id;
        $data = Jadwal::where('id',$id)->delete();
        if ($data) {
            $notif = array(
                'message'    => 'Data Berhasil Hapus',
                'alert-type' => 'success'
            );      
        } else {
            $notif = array(
                'message'    => 'Data Yang anda Masukkan Salah',
                'alert-type' => 'error'
            );  
        }
        return redirect()->back()->with($notif); 
    }
}
