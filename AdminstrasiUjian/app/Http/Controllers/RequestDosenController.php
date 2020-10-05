<?php

namespace App\Http\Controllers;

use App\RequestDosen;
use App\Fakultas;
use App\Prodi;
use App\Matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
use PDF;

class RequestDosenController extends Controller
{
    
    public function index()
    {
        $fakultas = Fakultas::all();
      return view('Dosen.req_dosen',compact('fakultas'));
    }
    
    public function reqMatakuliah(Request $req){
        $this->validate($req, [
            'radio' => 'required'
            
        ],[
            'radio.required' => "Silahkan Pilih Matakuliah"
    
        ]);
        $namaMatakuliah = $req->radio;   
        $data = Matakuliah::where('NamaMatakuliah',$namaMatakuliah)->first();
        Session::put('kode_mk',$data->kode_mk);
        Session::put('nama_matakuliah',$data->NamaMatakuliah);  
        $req = RequestDosen::where('status_pesan',1)->get();

       return view('Dosen.FormRequest',compact('req'));

    }
        
    public function form(){
        
        if(!Session::get('login')){
            return redirect('/')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('Admin.index');
        }
        return view('Dosen.RequestDosen');
    }

    public function tampil(){
        $request = RequestDosen::all();
        return view('Staff.RequestDosen',compact('request'));
    }
    
    public function store(Request $request)
    {   
        $this->validate($request, [
           'durasi'=>'required|integer',
           'jenis' =>'required',
           'ruang' =>'required',
           'Ecourse' =>'required',
           'catatan' =>'required',
           'jumlahMahasiswa' =>'required|integer',
        ],[
            'durasi.required'=>" Tidak Boleh Kosong",
            'durasi.integer' =>"Hanya Boleh dalam Bentuk angka",
            'jenis.required'=>" Tidak Boleh Kosong",
            'ruang.required'=>" Tidak Boleh Kosong",
            'Ecourse.required'=>" Tidak Boleh Kosong",
            'catatan.required'=>" Tidak Boleh Kosong",
            'jumlahMahasiswa.required'=>" Tidak Boleh Kosong",
            'jumlahMahasiswa.integer' =>"Hanya Boleh dalam Bentuk angka",
                
        ]);
       
        $data= DB::table('request_dosen')->insert([

            'durasi'         => $request->durasi,
            'kode_mk'        => $request->kode_mk,
            'matakuliah'     => $request->matakuliah,
            'nama_dosen'     => $request->namaDosen,
            'jenis_ujian'    => $request->jenis,
            'ruangan'        => $request->ruang,
            'ecourse'        => $request->Ecourse,
            'catatan'        => $request->catatan,
            'jlh_mahasiswa'  => $request->jumlahMahasiswa,

        ]);

        if ($data) {
            $notif = array(
                'message'    => 'Request Anda Berhasil di Kirimkan',
                'alert-type' => 'success'
            );      
        } else {
            $notif = array(
                'message'    => 'Data Yang anda Masukkan Salah',
                'alert-type' => 'error'
            );  
        }
        
        
        return redirect('requestDosen')->with($notif);
    }

    public function show($id)
    {
        $prodi = prodi::find($id);
        $req = RequestDosen::where('status_pesan',1)->get();
        return view('Dosen.daftarMatakuliah',compact('prodi','req')); 
    }

    public function detail($id){
        $req = RequestDosen::where('status',0)->get();
        $request = RequestDosen::where('id',$id)->first();
        return view('Staff.detailReqDosen',compact('request'),compact('req'));
    }

    public function cetak_detail($id){
        
        $req = RequestDosen::where('id',$id)->first();
        $pdf = PDF::loadview('Staff.pdf_RequestDosen',compact('req'));
        return $pdf->stream();
    }

    public function konfirmasi_diterima($id){
        $data = RequestDosen::where('id',$id)
        ->update([
            'status' => 2,
            'status_pesan' =>1,
        ]);
        if ($data) {
            $notif = array(
                'message'    => 'Request Anda Berhasil di Kirimkan',
                'alert-type' => 'success'
            );      
        } else {
            $notif = array(
                'message'    => 'Data Yang anda Masukkan Salah',
                'alert-type' => 'error'
            );  
        }
        return redirect('requestDosenStaff')->with($notif);
    }
    public function konfirmasi_ditolak(Request $req){
        $this->validate($req, [
            'pesan' => 'required',
        ],[
            'pesan.required'=>"Masukkan pesan",    
        ]);
        $data = RequestDosen::where('id',$req->id)
        ->update([
            'status' => 3,
            'status_pesan' => 1,
            'pesan' => $req->pesan,
        ]);
        if ($data) {
            $notif = array(
                'message'    => 'Request Anda Berhasil di Kirimkan',
                'alert-type' => 'success'
            );      
        } else {
            $notif = array(
                'message'    => 'Data Yang anda Masukkan Salah',
                'alert-type' => 'error'
            );  
        }
        return redirect('requestDosenStaff')->with($notif);
    }

    public function status(){
        $req = RequestDosen::where('status_pesan',1)->get();
        $ditolak = RequestDosen::where('status',3)
                ->limit(4)
                ->get();
        $diterima = RequestDosen::where('status',2)
                ->limit(4)
                ->get();
        return view('Dosen.Status',compact('req','diterima','ditolak'));
    }

    public function notifpesanStaff($id){
            $data = RequestDosen::where('id',$id)           
            ->update([
                'status_pesan' => 2,   
                
              ]);
              $request = RequestDosen::all();
              return redirect('statusRequest');
        
    }

    public function cetak_all_request(){
        $req = RequestDosen::all();
        $pdf = PDF::loadview('Staff.pdf_cetakAllrequest',compact('req'));
        return $pdf->stream();
    }

    public function hapus_requestdosenStaff($id){
            $request = RequestDosen::where('id',$id)           
            ->update([
                'req_status_staff' => 1,      
              ]);
              $req = RequestDosen::where('status',0)->get();
              if ($request) {
                $notif = array(
                    'message'    => 'Data Berhasil Dihapus',
                    'alert-type' => 'success'
                );      
            } else {
                $notif = array(
                    'message'    => 'Data Gagal Di hapus',
                    'alert-type' => 'error'
                );  
            }
            return redirect()->back()->with($notif);
           
        
    }
}
