<?php

namespace App\Http\Controllers;
use App\Exports\RekapExcel;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jadwal;

class RekapitulasiController extends Controller
{
    public function index()
    {
        $jadwal = Jadwal::all();
        return view('Staff.RekapUjian',compact('jadwal'));
    }
    public function export_excel()
	{
		return Excel::download(new RekapExcel, 'Rekapitulasi.xlsx');
    }
    
    public function edit_pengawas(Request $request){
        $this->validate($request, [
            'namaPengawas1' => 'required',
            'namaPengawas2'  => 'required',
        ],[
            'namaPengawas1.required'=>"Nama Pengawas Tidak Boleh Kosong",
            'namaPengawas2.required'=>"Nama Pengawas Tidak Boleh Kosong"
    
        ]);

        $data = Jadwal::where('id',$request->id)           
            ->update([
                'pengawas1'     => $request->namaPengawas1,
                'pengawas2'     => $request->namaPengawas2                
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

   
}
