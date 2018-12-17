<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tim extends Model
{	
	public function ketua(){
    return $this->hasOne('App\User', 'idKetua', 'id');
    }
    protected $fillable = ['nama','status','idKetua'];
}
