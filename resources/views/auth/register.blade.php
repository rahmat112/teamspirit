@extends('master')

@section('content')
<div class="container shadow">
<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
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
      <option value="Dokter Umum">Dokter Umum</option>
      <option value="Dokter Anak">Dokter Anak</option>
      <option value="Dokter Bedah">Dokter Bedah</option>
       <option value="Psikiatri">Psikiatri</option>
        <option value="Epidemiologis">Epidemiologis</option>
      <option value="Bidan">Bidan</option>
      <option value="Perawat">Perawat</option>
      <option value="Sanitarian">Sanitarian</option>
      <option value="Ahli Gizi">Ahli Gizi</option>
      <option value="Apoteker">Apoteker</option>
      <option value="Transporter">Transporter</option>
       <option value="Staf komunikasi">Staf komunikasi</option>
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
    <input required=""type="number" name="noHp" class="form-control" placeholder="No telepon">
  </div>
    </div>
</div>
<div class="row">
    <div class="col-sm">
      <div class="form-group">
        <label>Foto</label>
      <div class="form-group" >
  <input type="file" name="file" required="">

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
    {!! Form::select('id_province',[''=>'--- Pilih ---']+$provinces,null,['class'=>'form-control','required']) !!}
  </div>
  <div class="col-sm">
    <label>Kota</label>
    {!! Form::select('id_regency',[''=>'--- Pilih ---'],null,['class'=>'form-control','required']) !!}
  </div>
</div>

<div class="row">
  <div class="col-sm">
    <label>Kecamatan</label>
     {!! Form::select('id_district',[''=>'--- Pilih ---'],null,['class'=>'form-control','required']) !!}
  </div>
  <div class="col-sm">
    <label>Kelurahan</label>
    {!! Form::select('id_villages',[''=>'--- Pilih ---'],null,['class'=>'form-control','required']) !!}

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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script type="text/javascript">
    $("select[name='id_province']").change(function(){
        var id_province = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "<?php echo route('select-ajax') ?>",
            method: 'POST',
            data: {id_province:id_province, _token:token},
            success: function(data) {
              $("select[name='id_regency'").html('');
              $("select[name='id_regency'").html(data.options);
            }
        });
    });

     $("select[name='id_regency']").change(function(){
        var id_regency = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "<?php echo route('select-ajax') ?>",
            method: 'POST',
            data: {id_regency:id_regency, _token:token},
            success: function(data) {
              $("select[name='id_district'").html('');
              $("select[name='id_district'").html(data.options);
            }
        });
    });

      $("select[name='id_district']").change(function(){
        var id_district = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "<?php echo route('select-ajax') ?>",
            method: 'POST',
            data: {id_district:id_district, _token:token},
            success: function(data) {
              $("select[name='id_villages'").html('');
              $("select[name='id_villages'").html(data.options);
            }
        });
    });
  </script>

@endsection