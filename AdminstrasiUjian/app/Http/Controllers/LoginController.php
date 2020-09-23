<?php

namespace App\Http\Controllers;

use App\Pengguna;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function auth(Request $req)
    {
        $this->validate($req, [
            'username' => 'required',
            'password' => 'required',
        ],[
            'username.required'=>"Masukkan Username Anda",
            'password.required'=>"Masukkan Password Anda"
    
        ]);

        $username = $req->username;
        $password = $req->password;        
        $data = Pengguna::where('username',$username)->first();   
        if($data){
            if(Hash::check($password,$data->password)){                
            if($data->role =='dosen'){
                Session::put('id',$data->ID);
                Session::put('nama',$data->name);
                Session::put('login',TRUE);
                return redirect('Dosen');
            }
            elseif ($data->role =='Admin') {
                Session::put('id',$data->ID);
                Session::put('nama',$data->name);
                Session::put('login',TRUE);
                return redirect('Admin');    
            }
            elseif ($data->role =='staff') {
                Session::put('id',$data->ID);
                Session::put('nama',$data->name);
                Session::put('login',TRUE);
                return redirect('Staff');    
            }
            
        }
            else{
            return redirect('/')->with('alert1','Password yang Anda Masukkan Salah, Salah !');
            }
        }
        else{
            return redirect('/')->with('alert2','Username yang Anda Masukkan Salah, Salah !');
        }

    }

        public function logout(){
            Session::flush();
            return redirect('/')->with('alert','Kamu sudah logout');
        }
}
