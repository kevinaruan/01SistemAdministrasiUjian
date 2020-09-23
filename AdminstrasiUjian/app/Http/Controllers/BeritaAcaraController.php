<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodi;
use App\KRS;
use App\Jadwal;
use PDF;
use App\RequestDosen;
class BeritaAcaraController extends Controller
{
    public function show($id)
    {
        $prodi = prodi::find($id);
        $req = RequestDosen::where(function($q){
            $q->where('status',0);
            $q->orwhere('status',1);
        })->get();
        return view('Staff.daftarBeritaAcara',compact('prodi','req'));  
    }

    public function reqBeritaAcara(Request $req){
        $this->validate($req, [
            'radio' => 'required'
            
        ],[
            'radio.required' => "Silahkan Pilih Matakuliah"
    
        ]);
        $kode_mk = $req->radio;       
        $daftar = Jadwal::where('kode_mk',$kode_mk)->get();
        $req = RequestDosen::where(function($q){
            $q->where('status',0);
            $q->orwhere('status',1);
        })->get();
        return view('Staff.formBeritaAcara',compact('daftar','req'),['kode' => $kode_mk]);    
    }
    public function cetak_BeritaAcara($kode)
    {
        
        $daftar = KRS::where('kode_mk', $kode)->get();
        $jadwal = Jadwal::where('kode_mk',$kode)->first();
        if(empty($jadwal)){
            dd("kontl");
        }
        $pdf = PDF::loadview('Staff.pdf_BeritaAcara',compact('daftar'),compact('jadwal'));
        return $pdf->stream();
    }
}
