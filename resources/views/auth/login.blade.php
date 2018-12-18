@extends('masterlogin')
@section('content')
  <div class="container-fluid h-100">
    <div class="row h-100">
    <div class="col-sm left">
      <img class="logo" src="/image/spirit.svg">
      <hr>
      <h1><b> Sistem Pengelolaan <br/>Tim Penanggulangan Bencana </b></h1>
    </div>
    <div class="col-sm right">
      <h5>LOGIN RELAWAN</h5>
      <div class="login-box shadow">
        <form method="POST" action="{{ route('login') }}">
            @csrf
          <table class="form-group">
            <tr>
              <td>
                 <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
              </td>
            </tr>
            <tr>
              <td>
               <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
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