<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportKRS;
use Illuminate\Http\Request;

class KRSController extends Controller
{
    public function importKRS(Request $request){
        if($request->hasFile('file')){
            $file = $request->file('file');
            $nama_file = rand().$file->getClientOriginalName();
            $file->move('file_jadwal',$nama_file);
            $data=Excel::import(new ImportKRS, public_path('/file_jadwal/'.$nama_file));
            if (!empty($data)) {         
                    $notif = array(
                        'message'    => 'Data berhasil di Tambahkan',
                        'alert-type' => 'success'
                        
                    );  
                    return redirect()->back()->with($notif);
                       
                
            } else {
                $notif = array(
                    'message'    => 'Ada Kesalahan pada Data anda',
                    'alert-type' => 'error'
                    
                );  
                return redirect()->back()->with($notif);
            
        }
    }
    }
}
