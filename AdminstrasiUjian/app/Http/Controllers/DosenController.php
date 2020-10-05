<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\RequestDosen;
use App\Fakultas;
use App\Ruangan;
class DosenController extends Controller
{
    public function index(){
        if(!Session::get('login')){
            return redirect('/')->with('alert','Kamu harus login dulu');
        }
        else{
            
            $req = RequestDosen::where('status_pesan',1)->get();
            $data = RequestDosen::all()->sortByDesc('created_at');
            $ruangan = Ruangan::all();

            $array_ruangan = [];
            $kapasitas = [];
            $count = 0;
            foreach ($ruangan as $ruang) {
                $array_ruangan[] = $ruang->nama;    
            }
            foreach ($ruangan as $ruang) {
                $kapasitas [] = $ruang->kapasitas;
            }
            // dd(count($ruangan));
            
            return view('Dosen.index',compact('req','data','array_ruangan','kapasitas'));
        }
    }

    public function request_dosen(){
        $fakultas = Fakultas::all();
        $req = RequestDosen::where('status_pesan',1)->get();
        return view('Dosen.req_dosen',compact('fakultas','req'));
    }
   
}
