<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posko;
use App\mobilisasi;
Use App\tim;
Use DB;
use Illuminate\Support\Facades\Session;
class mobilisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if(!Session::get('/admin')){
      return redirect('/admin')->with('alert','Kamu harus login dulu');
    } else{
       return view('admin.mobilisasi');
    }
       
    }

    public function posko()
    {   
        if(!Session::get('/admin')){
      return redirect('/admin')->with('alert','Kamu harus login dulu');
    } else{
       $poskos = posko::all();
        return view('admin.posko',compact('poskos'));
    }
    }

    public function kirimtim()
    {   
        if(!Session::get('/admin')){
      return redirect('/admin')->with('alert','Kamu harus login dulu');
    } else{
       $mobilisasis = mobilisasi::paginate(10);
        $poskos = posko::all();
        $timsiap = DB::table('tims')->where('status', 'SIAP')->get();
        return view('admin.kirimtim',compact('poskos','mobilisasis','timsiap'));
    }
    }

    public function tambah(Request $request){
            $tim = tim::find($request->get('idTim'));
            $tim->status = "MOBILISASI";
            $tim->save();
          $mobilisasi = new mobilisasi([
            'idTim'    =>  $request->get('idTim'),
            'idPosko'     =>  $request->get('idPosko'),
            'tanggalMulai'     =>  $request->get('tanggalMulai'),
            'tanggalBerakhir'     =>  $request->get('tanggalBerakhir')
        ]);
        $mobilisasi->save();
        return redirect('/admin/mobilisasi/kirimtim');
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
    public function update(Request $request, $id)
    {
        //
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
