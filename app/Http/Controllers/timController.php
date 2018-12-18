<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
use App\tim;
class timController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function showTim()
    {
        $tims = tim::paginate(10);
        if(!Session::get('/admin')){
      return redirect('/admin')->with('alert','Kamu harus login dulu');
    } else{
      return view('admin.showTim',compact('tims'));
    }
    }

    public function pilihKetua(Request $request){
        $tim = tim::find($request->get('id'));
        $tim->idKetua = $request->get('idKetua');
        $tim->save();
        return redirect()->back();
    }

    public function index()
    {
            if(!Session::get('/admin')){
      return redirect('/admin')->with('alert','Kamu harus login dulu');
    } else{
      return view('admin.tim');
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tims = tim::all();
        return view('admin.registerTim');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $tim = new tim([
            'nama'    =>  $request->get('nama')
        ]);
        $tim->save();
        return redirect('/admin/tim/data');
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
