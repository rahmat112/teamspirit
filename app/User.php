<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use Kyslik\ColumnSortable\Sortable;

class User extends Authenticatable
{
    use Notifiable;


    public function tim(){
    return $this->belongsTo('App\tim','idTim','id');
    }
    public function prov(){
    return $this->belongsTo('App\provinces','provinsi','id');
    }
    public function kot(){
    return $this->belongsTo('App\regencies','kota','id');
    }
    public function kec(){
    return $this->belongsTo('App\districts','kecamatan','id');
    }
    public function kel(){
    return $this->belongsTo('App\villages','kelurahan','id');
    }

    protected $table ='relawans';
    /**
     * The attributes that are mass assignable.
     *
     * @var array

     */
    //use Sortable;

    protected $fillable = ['namaDepan','namaBelakang','tanggalLahir','jenisKelamin','noHp','email','password','profesi','file','alamat','provinsi','kota','kecamatan','idTim','kelurahan','kodepos'];
    
    //public $sortable = ['namaDepan','namaBelakang','tanggalLahir','jenisKelamin','noHp','email','password','profesi','file','alamat','provinsi','kota','kecamatan','idTim','kelurahan','kodepos'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
