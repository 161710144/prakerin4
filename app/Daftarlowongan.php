<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftarlowongan extends Model
{
    protected $fillable = ['nama','pendidikan','keahlian','telepon','cv','low_id'];
    public $timestamps = true;

    public function Lowongan(){
        return $this->belongsto('App\Lowongan','low_id');
    }
}
