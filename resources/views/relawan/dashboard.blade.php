@extends('master')

@section('content')

<div class="container shadow">
    <div>
        @if(\Session::has('success'))
  <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <table class="confirm">
            <tr >
                <td>
                    <h4 style="margin-top: 20px;margin-bottom: 20px;">KONFIRMASI</h4>
                </td>
            </tr>
  <tr>
    <td><img src="/image/confirm.svg" width="80" style="margin-bottom: 20px;"></td>
  </tr>
  <tr>
    <td>Selamat {{" ".Auth::user()->namaDepan." ".Auth::user()->namaBelakang.", "}} pendaftaran anda berhasil!</td>
  </tr>
  <tr>
    <td><a href="/dashboard" class="btn btn-primary btn-spirit" style="width: 150px;margin-top: 20px;margin-bottom: 20px;">Tutup</a></td>
  </tr>
</table>
      </div>
    </div>
  </div>
</div>
  @endif
    </div>

    <div class="row">
        <div class="col">
          <div class="dropdown">
  <button class="btn btn-info btn-spirit dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius: 8px; padding-right: 15px;padding-left: 15px;">
    {{ Auth::user()->namaDepan." ".Auth::user()->namaBelakang }}
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter">Edit Data</a>
  </div>
          </div>

</div>
    </div>
    
    <div class="dash_r">
        <div class="row img_r">
        <div class="col"><a href="/relawan/tim"><img src="/image/tim.svg" width="250px"></a></div>
        <div class="col"><a href="/relawan/mobilisasi"><img src="/image/mobilisasi.svg"width="250px"></a></div>
        <div class="col"><a href="/relawan/laporan"><img src="/image/evaluasi.svg"width="250px"></a></div>
        </div>
        <div class="row text_r">
        <div class="col">Lihat Tim</div>
        <div class="col">Mobilisasi Tim</div>
        <div class="col">Tulis Laporan</div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Edit data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding-right: 40px;padding-left: 40px;">
        <form method="POST">
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
  <div class="col-sm" style="padding-bottom: 10px; font-weight: bolder;">
    Data Diri
  </div>
  
</div>
<div class="row">
    <div class="col-sm">
      <div class="form-group">
    <label>Nama Depan</label>
    <input required="" type="text" name="namaDepan" class="form-control" value ="{{Auth::user()->namaDepan}}">
  </div>
    </div>
    <div class="col-sm">
      <div class="form-group">
    <label>Nama Belakang</label>
    <input required=""type="text" name="namaBelakang" class="form-control" value ="{{Auth::user()->namaBelakang}}">
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
    <input required=""type="date" name="tanggalLahir" class="form-control">
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
    <input required=""type="text" name="noHp" class="form-control" value="{{Auth::user()->noHp}}">
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
    <input required=""type="text" name="kodepos" class="form-control" value="{{Auth::user()->kodepos}}">
  </div>
  <div class="col-sm">
    <label>Alamat</label>
    <textarea required=""name="alamat" class="form-control">{{Auth::user()->alamat}}</textarea>
  </div>
</div>
<div class="row">
    <div class="col-sm">
  
    </div>
    <div class="col-sm">
    <input type="submit" class="btn btn-primary btn-spirit" value="Edit" style="float: right; width: 150px;">
    </div>
</div>


</form>
      </div>
    </div>
  </div>
</div>
@endsection