<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'matakuliah';

    public function prodi(){
        return $this->belongsTo(Prodi::class);
    }
   
}
