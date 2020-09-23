<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'prodi';

    public function fakultas(){
        return $this->belongsTo(Fakultas::class);
    }

    public function matakuliah(){
        return $this->hasMany(Matakuliah::class);
    }

    public function kelas(){
        return $this->hasMany(Kelas::class);
    }
}
