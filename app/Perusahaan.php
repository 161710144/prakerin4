<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $fillable = ['nama_pers','telepon','tunjangan','lokasi'];
    public $timestamps = true;

    public function Lowongan(){
        return $this->hasMany('App\Lowongan','pers_id');
    }
}
