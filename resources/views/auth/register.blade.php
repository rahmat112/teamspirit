@extends('master')

@section('content')
<div class="container shadow">
<form method="POST" action="{{ route('register') }}">
                        @csrf
<div class="row">
@if(count($errors) > 0)
  <div class="alert alert-danger" role="alert">
   @foreach($errors->all() as $error)
   {{$error}}
   @endforeach
  </div>
  @endif
  @if(\Session::has('success'))
  
  @endif
</div>

<div class="row">
  <div class="col-sm" style="padding-top: 10px; padding-bottom: 10px; font-weight: bolder;">
    Data Diri
  </div>
  
</div>
<div class="row">
    <div class="col-sm">
      <div class="form-group">
    <label>Nama Depan</label>
    <input required="" type="text" name="namaDepan" class="form-control" placeholder="Nama depan">
  </div>
    </div>
    <div class="col-sm">
      <div class="form-group">
    <label>Nama Belakang</label>
    <input required=""type="text" name="namaBelakang" class="form-control" placeholder="Nama belakang">
  </div>
    </div>
</div>
<div class="row">
    <div class="col-sm">
      <div class="form-group">
    <label>Profesi</label>
    <select required="" name="profesi" class="form-control">
      <option value="" selected disabled hidden>Pilih</option>
      <option value="dokter">Dokter</option>
      <option value="perawat">Perawat</option>
    </select>
  </div>
    </div>
    <div class="col-sm">
      <div class="form-group">
    <label>Tanggal lahir</label>
    <input required=""type="date" name="tanggalLahir" class="form-control" placeholder="Tanggal lahir">
  </div>
    </div>
</div>
<div class="row">
    <div class="col-sm">
      <div class="form-group">
    <label>Jenis kelamin</label>
    <select required=""name="jenisKelamin" class="form-control">
      <option value="" selected disabled hidden>Pilih</option>
      <option value="Laki-Laki">Laki-Laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
  </div>
    </div>
    <div class="col-sm">
      <div class="form-group">
    <label>No Telepon</label>
    <input required=""type="text" name="noHp" class="form-control" placeholder="No telepon">
  </div>
    </div>
</div>
<div class="row">
    <div class="col-sm">
      <div class="form-group">
        <label>Foto</label>
      <div class="form-group" >
  <input type="file" name="foto">

</div>
    </div>
    </div>
    <div class="col-sm">
    <div class="form-group">
    <label>Email</label>
    <input required=""type="email" name="email" class="form-control" placeholder="Email">
  </div>
    </div>
</div>
<div class="row">
  <div class="col-sm">
      <div class="form-group">
    <label>Password</label>
    <input required=""type="password" name="password" class="form-control" placeholder="Password">
  </div>
    </div>
    <div class="col-sm">
      <div class="form-group">
    <label>Confirm Password</label>
   <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required>
  </div>
    </div>
</div>
<div class="row">
  <div class="col-sm" style="padding-top: 10px; padding-bottom: 10px; font-weight: bolder;">
    Alamat
  </div>
</div>
<div class="row">
  <div class="col-sm">
    <label>Provinsi</label>
    <select required=""name="provinsi" class="form-control">
      <option value="" selected disabled hidden>Pilih</option>
      <option value="1" >test</option>
    </select>
  </div>
  <div class="col-sm">
    <label>Kota</label>
    <select required=""name="kota" class="form-control">
      <option value="" selected disabled hidden>Pilih</option>
      <option value="1" >test</option>
    </select>
  </div>
</div>

<div class="row">
  <div class="col-sm">
    <label>Kecamatan</label>
    <select required=""name="kecamatan" class="form-control">
      <option value="" selected disabled hidden>Pilih</option>
      <option value="1" >test</option>
    </select>
  </div>
  <div class="col-sm">
    <label>Kelurahan</label>
    <select required=""name="kelurahan" class="form-control">
      <option value="" selected disabled hidden>Pilih</option>
      <option value="1" >test</option>
    </select>
  </div>
</div>

<div class="row">
  <div class="col-sm">
     <label>Kedepos</label>
    <input required=""type="text" name="kodepos" class="form-control">
  </div>
  <div class="col-sm">
    <label>Alamat</label>
    <textarea required=""name="alamat" class="form-control"></textarea>
  </div>
</div>
<div class="row">
    <div class="col-sm">
  
    </div>
    <div class="col-sm">
    <input type="submit" class="btn btn-primary btn-spirit"  style="float: right; width: 150px;">
    </div>
</div>


</form>

</div>


@endsection