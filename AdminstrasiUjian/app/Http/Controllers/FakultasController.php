<?php

namespace App\Http\Controllers;

use App\Fakultas;
use App\Prodi;
use App\Kelas;
use App\Matakuliah;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;


class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fakultas = Fakultas::all();
      return view('Admin.DataFakultas',compact('fakultas'));
        
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
     * @param  \Illuminate\Http\
     * 
     * uest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'namaFakultas' => 'required|string|unique:fakultas,NamaFakultas',
        ],[
            'namaFakultas.required'=>"Nama Fakultas Tidak Boleh Kosong",
            'namaFakultas.unique'=>"Data Yang Anda Masukkan Sudah ada"
    
        ]);

       $data= DB::table('fakultas')->insert([
            'NamaFakultas' => $request->namaFakultas
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
     * @param  \App\Fakultas  $fakultas
     * @return \Illuminate\Http\Response
     */
    public function show(Fakultas $fakultas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fakultas  $fakultas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $edit = Fakultas::find($id);
        return view('Admin.UpdateFakultas',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fakultas  $fakultas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
            
        $data = Fakultas::where('id',$request->id)           
            ->update([
                'NamaFakultas' => $request->namaFakultas,                
              ]);
              if ($data) {
                $notif = array(
                    'message'    => 'Data Berhasil Di Tambahkan',
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
     * @param  \App\Fakultas  $fakultas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        $idReq = $req->id;
        $pengguna = Prodi::all();
        foreach ($pengguna as $key ):
            if ($key->fakultas_id == $idReq) {
                $id_prodi = $key->id;
                $data = Prodi::where('fakultas_id',$idReq)->delete();
                $data = Kelas::where('prodi_id',$id_prodi)->delete();
                $data = Matakuliah::where('prodi_id',$id_prodi)->delete();  
            }
        endforeach;
        $data = Fakultas::where('id',$idReq)->delete();        
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
