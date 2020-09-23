<?php

namespace App\Imports;

use App\Jadwal;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;

class JadwalImport implements ToModel, WithValidation
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function rules(): array
{
    return [
        '1' => 'required',
        '2' => 'required',
        '3' => 'required',
        '4' => 'required',
        '5' => 'required',
        '6' => 'required',
        '7' => 'required',
      

    ];

}

public function customValidationMessages()
{
    return [
        '1.required' => 'Data Tidak Bisa Kosong',
        '2.required' => 'Data Tidak Bisa Kosong',
        '3.required' => 'Data Tidak Bisa Kosong',
        '4.required' => 'Data Tidak Bisa Kosong',
        '5.required' => 'Data Tidak Bisa Kosong',
        '6.required' => 'Data Tidak Bisa Kosong',
        '7.required' => 'Data Tidak Bisa Kosong',
      
    ];
}



    public function model(array $row)
    {
        return new Jadwal([
            'tanggal' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[0])->format('Y-m-d'),
            'sesi' => $row[1], 
            'kode_mk' =>$row[2],
            'matakuliah' => $row[3],
            'jenis' => $row[4],
            'pengawas1' => $row[5],
            'pengawas2' => $row[6],
            'ruangan' => $row[7],
        ]);
    }
   
    
}
