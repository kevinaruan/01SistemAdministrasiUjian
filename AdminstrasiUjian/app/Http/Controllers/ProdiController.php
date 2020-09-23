<?php

namespace App\Http\Controllers;

use App\Prodi;
use App\Fakultas;
use App\Matakuliah;
use App\Kelas;
use Illuminate\Http\Request;
use DB;
class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodi = Prodi::all();
        $fakultas = Fakultas::all();
      return view('Admin.DataProdi',compact('prodi'),compact('fakultas'));
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
        $this->validate($request, [
            'namaProdi' => 'required|string|unique:prodi,NamaProdi',
            'fakultas'  => 'required'
        ],[
            'namaProdi.required'=>"Nama Fakultas Tidak Boleh Kosong",
            'namaProdi.unique'=>"Data Yang Anda Masukkan Sudah ada",
            'fakultas.required' => "Pilih Fakultas"
    
        ]);
        $data= DB::table('prodi')->insert([
            'NamaProdi' => $request->namaProdi,
            'fakultas_id' => $request->fakultas
        ]);
        if ($data) {
            $notif = array(
                'message'    => 'Data Berhasil Ditambah',
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
     * @param  \App\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function edit(Prodi $prodi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = Prodi::where('id',$request->id)           
            ->update([
                'NamaProdi' => $request->namaProdi,   
                'fakultas_id' => $request->fakultas             
              ]);
              if ($data) {
                $notif = array(
                    'message'    => 'Data Berhasil Di Update',
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
     * @param  \App\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        $idReq = $req->id;
        $data  = Matakuliah::where('prodi_id',$idReq)->delete();
        $data  = Kelas::where('prodi_id',$idReq)->delete();
        $data  = Prodi::where('id',$idReq)->delete();
        
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
