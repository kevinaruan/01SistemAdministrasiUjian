<?php

namespace App\Http\Controllers;

use App\Matakuliah;
use App\Prodi;
use App\Fakultas;
use Illuminate\Http\Request;
use DB;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fakultas = Fakultas::all();
        return view('Admin.Matakuliah',compact('fakultas'));
    }
    public function dataMatakuliah($id){
        $prodi = prodi::find($id);
        $matakuliah = Matakuliah::where('prodi_id',$id)->get();
        return view('Admin.DataMatakuliah',compact('prodi'),compact('matakuliah')); 
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_mk' => 'required|string|unique:matakuliah,kode_mk',
            'namaMatakuliah' => 'required|string|unique:matakuliah,NamaMatakuliah',
            'prodi' =>'required'
        ],[
            'namaMatakuliah.required'=>"Nama Matakuliah Tidak Boleh Kosong",
            'namaMatakuliah.unique'=>"Data Yang Anda Masukkan Sudah ada",
            'kode_mk.unique' => "Kode Matakuliah Sudah Terdaftar",
            'kode_mk.required' => "Kode Matakuliah Tidak Boleh Kosong",
            'prodi.required' => "silahkan pilih Prodi"
    
        ]);

       $data= DB::table('matakuliah')->insert([
            'NamaMatakuliah' => $request->namaMatakuliah,
            'kode_mk' => $request->kode_mk,
            'prodi_id'  =>$request->prodi
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

    public function update(Request $request)
    {
        
        $data = Matakuliah::where('id',$request->id)           
            ->update([
                'NamaMatakuliah' => $request->namaMatakuliah,
                'kode_mk' => $request->kode_mk,                
                'prodi_id'   => $request->prodi
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

 
    public function destroy(Request $req)
    {
        $idReq = $req->id;
        $data = Matakuliah::where('id',$idReq)->delete();
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

