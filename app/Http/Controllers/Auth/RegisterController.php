<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
        //    'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:relawans'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
         Session()->flash('success', 'User successfully created.');
         
         $file = $data['file'];
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/file',$newName);
        $data['file'] = $newName;
        
        return User::create([
            'namaDepan' => $data['namaDepan'],
            'namaBelakang' => $data['namaBelakang'],
            'tanggalLahir' => $data['tanggalLahir'],
            'jenisKelamin' => $data['jenisKelamin'],
            'noHp' => $data['noHp'],
            'alamat' => $data['alamat'],
            'file' => $data['file'],
            'provinsi' => $data['id_province'],
            'kota' => $data['id_regency'],
            'kecamatan' => $data['id_district'],
            'kelurahan' => $data['id_villages'],
            'kodepos' => $data['kodepos'],
            'profesi' => $data['profesi'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
