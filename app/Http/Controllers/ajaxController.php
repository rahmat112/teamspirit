<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\provinces;
use App\regencies;
use App\districts;
use App\villages;
use DB;

class ajaxController extends Controller
{

	public function index()
	{
              $regencie = regencies::all();
      $district = districts::all();
  $provinces = DB::table('provinces')->pluck("name","id")->all();   
      $regencies = DB::table('regencies')->pluck("name","id")->all();
      $districts = DB::table('districts')->pluck("name","id")->all();
      $villages = DB::table('villages')->pluck("name","id")->all();
    	return view('/auth/register',compact('regencies','provinces','districts','villages'));
	}
public function selectAjax(Request $request)
    {
        if($request->ajax()){
            $regencies = DB::table('regencies')->where('province_id',$request->id_province)->pluck("name","id")->all();
            $districts = DB::table('districts')->where('regency_id',$request->id_regency)->pluck("name","id")->all();
            $villages = DB::table('villages')->where('district_id',$request->id_district)->pluck("name","id")->all();
            $data = view('ajax-select',compact('regencies','districts','villages'))->render();
            return response()->json(['options'=>$data]);
        }
    }

}

