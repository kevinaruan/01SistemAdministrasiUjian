<?php

namespace App\Imports;

use App\KRS;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;

class ImportKRS implements ToModel
{
   
    public function model(array $row)
    {
        return new KRS([
            'kode_mk' => $row[0], 
            'nama_matakuliah' =>$row[1],
            'nim_mahasiswa' => $row[2],
            'nama_mahasiswa' => $row[3],
        ]);
    }
}
