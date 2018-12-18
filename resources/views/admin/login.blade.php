@extends('masterlogin')
@section('content')
  <div class="container-fluid h-100">
    <div class="row h-100">
    <div class="col-sm left">
      <img class="logo" src="/image/spirit.svg">
      <hr>
      <h1><b>Sistem Pengelolaan <br/>Tim Penanggulangan Bencana</b></h1>
    </div>
    <div class="col-sm right">
      <h5>LOGIN ADMIN</h5>
@if(\Session::has('alert'))
                <div class="alert alert-danger" style="width: 80%;margin: auto;">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif
      <div class="login-box shadow">
        <form action="{{ url('/loginPost') }}" method="post">
          {{ csrf_field() }}
          <table class="form-group">
            <tr>
              <td>
                <input type="email" name="email" placeholder="Email" class="form-control">
              </td>
            </tr>
            <tr>
              <td>
               <input type="password" name="password" placeholder="Password" class="form-control">
               </td>
            </tr>
            <tr>
              <td>
               <button type="submit" class="btn btn-primary btn-block btn-login">
                LOGIN
               </button>
               </td>
            </tr>
          </table>
        </form>
      </div>
      
    </div>
    </div>
  </div>
@endsection