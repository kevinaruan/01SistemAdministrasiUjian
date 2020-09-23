<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fakultas;
use App\Jadwal;
use DB;
use App\RequestDosen;
class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $req = RequestDosen::where('status',0)->get();
        $req = RequestDosen::where(function($q){
            $q->where('status',0);
            $q->orwhere('status',1);
        })->get();
        return view('Staff.index',compact('req'));

    }
    public function notifDosen($id){
        $data = RequestDosen::where('id',$id)           
        ->update([
            'status' => 1,   
            
          ]);
          $req = RequestDosen::where(function($q){
            $q->where('status',0);
            $q->orwhere('status',1);
        })->get();
          $request = RequestDosen::all();
          return view('Staff.RequestDosen',compact('request'),compact('req'));
    }
    public function requestdosen()
    {
        $request = RequestDosen::where('req_status_staff',0)->get();
        $fakultas = Fakultas::where('status',0);
        $req = RequestDosen::where(function($q){
            $q->where('status',0);
            $q->orwhere('status',1);
        })->get();
        
            // $request = RequestDosen::all();
            return view('Staff.RequestDosen',compact('request'),compact('req'));
        }


    public function daftarHadir(){
        $fakultas = Fakultas::all();
        $req = RequestDosen::where(function($q){
            $q->where('status',0);
            $q->orwhere('status',1);
        })->get();
        return view('Staff.DaftarHadir',compact('fakultas','req'));
    }

    
    public function rekapujian(){
        $jadwal = Jadwal::all();
        $req = RequestDosen::where(function($q){
            $q->where('status',0);
            $q->orwhere('status',1);
        })->get();
        return view('Staff.RekapUjian',compact('jadwal'),compact('req'));
    }
    public function labelujian(){
        $jadwal = DB::table('jadwal')
        ->limit(4)
        ->get();
        $req = RequestDosen::where(function($q){
            $q->where('status',0);
            $q->orwhere('status',1);
        })->get();
        return view('Staff.LabelUjian',compact('jadwal'),compact('req'));
    }
    public function beritaAcara(){
        $fakultas = Fakultas::all();
        $req = RequestDosen::where(function($q){
            $q->where('status',0);
            $q->orwhere('status',1);
        })->get();
        return view('Staff.BeritaAcara',compact('fakultas'),compact('req'));
    }
    public function importjadwal()
    {
        $jadwal = Jadwal::all();
        $req = RequestDosen::where(function($q){
            $q->where('status',0);
            $q->orwhere('status',1);
        })->get();
        return view('Staff.ImportJadwal', compact('jadwal'),compact('req'));
    }
   
}
