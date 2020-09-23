<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KRS extends Model
{
    protected $table = 'krs';
    protected $fillable = ['kode_mk','nama_matakuliah','nama_matakuliah','nim_mahasiswa', 'nama_mahasiswa'];
}
