<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestDosen extends Model
{
    protected $table = 'request_dosen';
    protected $fillable = ['kode_mk','matakuliah','nama_dosen','durasi','jenis_ujian','ruangan','jlh_mahasiswa'];
}
