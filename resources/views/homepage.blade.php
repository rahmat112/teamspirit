@extends('master')

@section('content')

<div class="container shadow"> 
  <div class="row">
    <div class="col home-left" >
      <table>
        <tr>
          <td>
            <h3 style="font-weight: bold;">Sistem Pengelolaan Tim Penanggulangan Bencana</h3>
          </td>
        </tr>
        @guest
        <tr>
          <td>
            <a href="/auth/register" class="btn btn-primary btn-spirit" style="width: 70%; margin-top: 30px"><b>Daftar</b></a>
          </td>
        </tr>
        <tr>
          <td>
            <a href="/login" class="btn btn-primary btn-spirit" style="width: 70%; margin-top: 10px"><b>Login</b></a>
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
  <h4 style="display: block;text-align: center;font-weight: bolder; margin-bottom: 30px">CARA KERJA</h4>
    <img src="/image/how.svg" style="margin:auto; display: block; width: 60%;">
</div>

<div class="container shadow">

<h4 style="display: block;text-align: center;font-weight: bolder;"> TEAM </h4>
<div class="row" style="margin-top: 30px;">
    <div class="col">
      <div class="cropfoto">
        <img src="/image/boris.png" class="foto">
      </div>
      <label style="text-align: center; display: block; margin-top: 20px; font-weight: bold;">Muhammad Luthfi</label>
    </div>
    <div class="col">
      <div class="cropfoto">
        <img src="/image/rahmad.jpg" class="foto">
      </div>
      <label style="text-align: center; display: block;margin-top: 20px;font-weight: bold;">Rahmad Hidayat</label>
    </div>
    <div class="col">
      <div class="cropfoto">
        <img src="/image/farid.jpg" class="foto">
      </div>
      <label style="text-align: center; display: block;margin-top: 20px;font-weight: bold;">Muhammad Farid</label>
    </div>
</div>
</div>
<nav class="navbar bottom navbar-light bg-light">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
    <a class="nav-link" href="/admin">ADMIN</a>
  </li>
</nav>
@endsection