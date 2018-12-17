<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobilisasi extends Model
{

	 public function tim(){
    return $this->belongsTo('App\tim','idTim','id');
    }

     public function posko(){
    return $this->belongsTo('App\posko','idPosko','id');
    }

    protected $fillable = ['idTim','idPosko','tanggalMulai','tanggalBerakhir'];
}

