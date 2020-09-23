<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';
    protected $fillable = ['tanggal','sesi','kode_mk','matakuliah','jenis','pengawas1', 'pengawas2','ruangan'];
}
