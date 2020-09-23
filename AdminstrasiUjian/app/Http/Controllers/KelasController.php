<?php

namespace App\Http\Controllers;
use DB;
use App\Kelas;
use App\Prodi;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::all();
        $prodi = Prodi::all();
        return view('Admin.DataKelas',compact('kelas'),compact('prodi'));
        
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'namaKelas' => 'required|string|unique:kelas,NamaKelas',
            'prodi'  => 'required',
        ],[
            'namaKelas.required'=>"Nama Matakuliah Tidak Boleh Kosong",
            'namaKelas.unique'=>"Data Yang Anda Masukkan Sudah ada",
            'prodi.required' => "silahkan pilih prodi anda"
    
        ]);

       $data= DB::table('kelas')->insert([
            'NamaKelas' => $request->namaKelas,
            'prodi_id'  => $request ->prodi
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
        
         $this->validate($request, [
            'namaKelas' => 'required|string',
            'prodi'  => 'required',
        ],[
            'namaKelas.required'=>"Nama Matakuliah Tidak Boleh Kosong",
            'namaKelas.unique'=>"Data Yang Anda Masukkan Sudah ada",
            'prodi.required' => "silahkan pilih prodi anda"
    
        ]);
        $data = Kelas::where('id',$request->id)           
            ->update([
                'NamaKelas' => $request->namaKelas,
                'prodi_id'     => $request->prodi                
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
        $data = Kelas::where('id',$idReq)->delete();
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
