<?php

namespace App\Http\Controllers;

use App\Pengguna;
use Illuminate\Http\Request;
use DB;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengguna = Pengguna::all();
        return view('Admin.Pengguna',compact('pengguna'));

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

    public function dosen($role){
        $data = $role;
        $pengguna = Pengguna::where('role','dosen')->get();
        return view('Admin.DataDosen',compact('data'),compact('pengguna'));
    }

    public function staff($role){
        $data = $role;
        $pengguna = Pengguna::where('role','staff')->get();
        return view('Admin.DataStaff',compact('data'), compact('pengguna'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'namaPengguna' => 'required',
            'username' => 'required|string|unique:pengguna,username',
            'role' => 'required',
            'password' => 'required',
            'confirmation' => 'required|same:password',

        ],[
            'namaPengguna.required' => "Nama Pengguna Tidak Boleh Kosong",
            'username.required'=>"username Tidak Boleh Kosong",
            'username.unique'=>"Data Yang Anda Masukkan Sudah ada",
            'role.required' => "Tidak Boleh Kosong",
            'password.required'=> "Tidak Boleh Kosong",
            'confirmation.required' => "Tidak Boleh Kosong",
            'confirmation.same' => "Password tidak sesuai"
    
        ]);
        $data =  new Pengguna();
        $data->name = $request->namaPengguna;
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        $data->role = $request->role;
        $data->save();

        if ($data) {
            $notif = array(
                'message'    => 'Data Berhasil Di Tambah',
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function show(Pengguna $pengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengguna $pengguna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = Pengguna::where('id',$request->id)           
            ->update([
                'name' => $request->namaPengguna,
                'username' => $request->username,
                'role' => $request->role,
                'password'=>bcrypt($request->password),                
              ]);
              if ($data) {
                $notif = array(
                    'message'    => 'Data Berhasil Di Edit',
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        $idReq = $req->id;
        $data = Pengguna::where('id',$idReq)->delete();
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
