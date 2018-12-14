<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    protected $table ='relawans';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['namaDepan','namaBelakang','tanggalLahir','jenisKelamin','noHp','email','password','profesi','foto','alamat','provinsi','kota','kecamatan','idTim','kelurahan','kodepos'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
