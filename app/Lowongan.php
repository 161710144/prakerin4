<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    protected $fillable = ['nama_low','lokasi','pers_id'];
    public $timestamps = true;

    public function Perusahaan(){
        return $this->belongstoMany('App\Perusahaan','pers_id');
    }
    public function Daftarlowongan(){
        return $this->HasOne('App\Daftarlowongan','low_id');
    }
}
