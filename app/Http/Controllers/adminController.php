<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
use App\tim;
use App\User;
use App\mobilisasi;
use App\provinces;
class adminController extends Controller
{
    
    // login

    public function index(){
    if(!Session::get('/admin')){
      return redirect('/admin')->with('alert','Kamu harus login dulu');
    } else{
      return view('admin.dashboard');
    }
        
  }

  public function login(){
    return view('admin.login');
  }

  public function loginPost(Request $request){
    $email = $request->email;
    $password = $request->password;
    if($email=="admin@gmail.com"){
      if($password=="spirit"){
        Session::put('email',$email);
        Session::put('/admin',TRUE);
        return redirect('admin/dashboard');
      } else if($email=="admin@gmail.com") {
        return redirect('/admin')->with('alert','Email atau password salah');
      }
      } else {
        return redirect('/admin')->with('alert','Email atau password salah');
      }
  }

  public function logout(){
    Session::flush();
    return redirect('/admin');
  }

  // end login
    // public function showRelawan(){
    //   $relawans = User::paginate(10);
    //   return view('admin.relawan');
    // }


    public function daftarRelawan(Request $request)
    {

      if(!Session::get('/admin')){
      return redirect('/admin')->with('alert','Kamu harus login dulu');
    } else{

      if ($request->has('formtim')) {
          $relawan = User::find($request->id);
          $relawan->idTim=$request->idTim;
          $relawan->save();
          return redirect()->back();
      }
      elseif ($request->has('formfilter')) {
        if (($request->idprov)=="0") {
        $relawans=User::paginate(20);
        }
        else{
        $relawans = User::where('provinsi',$request->idprov)->paginate(20);
        }
      }
      elseif ($request->has('formurut')) {
        if (($request->urut)=="nama") {
        $relawans=User::orderBy('namaDepan')->paginate(20);
        }
        elseif (($request->urut)=="baru") {
          $relawans=User::orderBy('id','desc')->paginate(20);
        }
        elseif (($request->urut)=="id") {
          $relawans=User::orderBy('id')->paginate(20);
        }
        elseif (($request->urut)=="profesi") {
          $relawans=User::orderBy('profesi')->paginate(20);
        }
        elseif (($request->urut)=="tim") {
          $relawans=User::orderBy('idTim')->paginate(20);
        }
        else{
          $relawans=User::paginate(20);
        }
        }
      else{
        $relawans=User::paginate(20);
      }

      }
        $provinces=provinces::all();
        $tims = tim::all();
        $timsiap=tim::where('status', "SIAP")->get();
        return view('admin.relawan',compact('tims','timsiap','provinces','relawans'));
    }
        //$relawans = User::sortable()->paginate(10);
        //$relawans = DB::table('relawans')->get();
      
    //  public function masukTim(Request $request){
    //       $relawans=User::all();
    //     if ($request->has('formtim')) {
    //     $relawan = User::find($request->id);
    //     $relawan->idTim=$request->idTim;
    //     $relawan->save();
    //     }
    //     if($request->has('formfilter')) {
    //     $relawans = User::where('provinsi',$request->idprov)->get();
    //     }
    //    return redirect('/admin/relawan',compact('relawans'));
    // }
    public function lihatLaporan()
    { 
        if(!Session::get('/admin')){
      return redirect('/admin')->with('alert','Kamu harus login dulu');
    } else{
$mobilisasis = mobilisasi::all();
        return view('admin.laporan',compact('mobilisasis'));
    }
    }




}
