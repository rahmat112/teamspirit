<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
use App\tim;
use App\User;
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

    public function daftarRelawan()
    {
        $relawans = User::all();
        //$relawans = DB::table('relawans')->get();
        $tims = tim::all();
        return view('admin.relawan',compact('relawans','tims'));
    }





}
