<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Request;
use App\User;
use App\mobilisasi;
use Auth;
use Hash;
use DB;

class relawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update()
    {


        $user = Auth::user();
        $user->namaDepan = Request::input('namaDepan');
        $user->namaBelakang = Request::input('namaBelakang');
        $user->profesi = Request::input('profesi');
        $user->tanggalLahir = Request::input('tanggalLahir');
        $user->jenisKelamin = Request::input('jenisKelamin');
        $user->noHp = Request::input('noHp');
        $user->namaDepan = Request::input('namaDepan');
        $user->provinsi = Request::input('provinsi');
        $user->kota = Request::input('kota');
        $user->kecamatan = Request::input('kecamatan');
        $user->kelurahan = Request::input('kelurahan');
        $user->kodepos = Request::input('kodepos');
        $user->alamat = Request::input('alamat');
        $user->save();
        return redirect('/');

    }

    // public function masukTim(Request $request){
    //     if ($request->has('formtim')) {
    //     $relawan = User::find(Request::input('id'));
    //     $relawan->idTim=Request::input('idTim');
    //     $relawan->save();
    //     return redirect('/admin/relawan');
    //     }
       
    // }

    public function lihatTim(){

        return view('relawan.tim');
    }

     public function lihatMobilisasi(){
        $user = Auth::user();
        $mobilisasi = mobilisasi::where('idTim', $user->idTim)->first();
        return view('relawan.mobilisasi',compact('mobilisasi'));
    }

    public function laporan(){
        return view('relawan.laporan');
    }

    public function isiLaporan(){
        $user = Auth::user();
        $mobilisasi = mobilisasi::where('idTim', $user->idTim)->first();
        $mobilisasi->laporan = Request::input('laporan');
        $mobilisasi->save();
        return redirect('/laporan');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
