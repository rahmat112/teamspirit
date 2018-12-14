@extends('master')

@section('content')
<div class="container shadow"> 
  <div class="row">
    <div class="col home-left" >
      <table>
        <tr>
          <td>
            <h3>Sistem Pengelolaan Tim Rawan Bencana</h3>
          </td>
        </tr>
        @guest
        <tr>
          <td>
            <a href="/register" class="btn btn-primary btn-spirit" style="width: 70%; margin-top: 30px"><b>Daftar</b></a>
          </td>
        </tr>
        <tr>
          <td>
            <a href="/login" class="btn btn-primary btn-spirit" style="width: 70%"><b>Login</b></a>
          </td>
        </tr>
        @endguest
      </table>
    </div>
    <div class="col col-7">
      <img src="image/home.svg" width=100%>
    </div>
  </div>
</div>

<div class="container shadow">
  <h4>Apa itu spirit?</h2>
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
</div>


@endsection