<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodi;
use App\Fakultas;
use App\Matakuliah;
use App\KRS;
use App\RequestDosen;
use PDF;
use App\Jadwal;
class DaftarHadirControlller extends Controller
{
    public function reqDaftarHadir(Request $req){
        $this->validate($req, [
            'radio' => 'required'
            
        ],[
            'radio.required' => "Silahkan Pilih Matakuliah"
    
        ]);
        $kode_mk = $req->radio;       
        
        $daftar = KRS::where('kode_mk',$kode_mk)->get();
        $req = RequestDosen::where('status',0)->get();
        return view('Staff.formDaftarHadir',compact('daftar','req'),['kode' => $kode_mk]);    

    }

    public function cetak_DafatarHadir($kode)
    {

        $daftar = KRS::where('kode_mk', $kode)->get();
        $jadwal = Jadwal::where('kode_mk',$kode)->first();
        if(empty($jadwal)){
            $notif = array(
                'message'    => 'Jadwal Untuk yang anda pilih belum tersedia',
                'alert-type' => 'error'
            );  
           return redirect()->back()->with($notif);
        }else{
            $pdf = PDF::loadview('Staff.pdf_daftarHadir',compact('daftar'),compact('jadwal'));
        return $pdf->stream();
        }
        
    }

    public function cetak_All_DafatarHadir(Request $req)
    {       
        $kode= $req->prodi;
        $prodi = prodi::find($kode);
        $daftar = KRS::all();
        $jadwal = Jadwal::all();
        if(empty($jadwal)){
            $notif = array(
                'message'    => 'Data Yang anda Masukkan Salah',
                'alert-type' => 'error'
            );  
            redirect()->back()->with($notif);   
        }
        $pdf = PDF::loadview('Staff.pdf_daftar_all_Hadir',compact('daftar','jadwal','prodi'));
        return $pdf->stream();
      
    }

    public function show($id)
    {
        $prodi = prodi::find($id);
        $nama_prodi = prodi::where('id',$id)->first(); 
        $req = RequestDosen::where('status',0)->get();
        return view('Staff.daftarMatakuliah',compact('prodi'),compact('req','nama_prodi'));
    }

   
}
