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
        <div class="col-sm-1">
    <div class="cropavatar"><img src="{{ url('uploads/file/'.Auth::user()->file) }}" class="avatar" align="left" >
    </div>
        </div>
        <div class="col-sm" style="padding-top: 10px; font-weight: bold; text-transform: capitalize;">
          {{ Auth::user()->namaDepan." ".Auth::user()->namaBelakang }}
        </div>
      </div>
    
    <div class="dash_r">
        <div class="row img_r">
        <div class="col"><a href="/tim"><img src="/image/tim.svg" height="200px"></a> <label style="display: block; text-align: center; margin-top: 20px">Lihat Tim</label></div>
        <div class="col"><a href="/mobilisasi"><img src="/image/mobilisasi.svg"height="200px"></a><label style="display: block; text-align: center;margin-top: 20px">Mobilisasi Tim</label></div>
        <div class="col"><a href="/laporan"><img src="/image/evaluasi.svg"height="200px"></a><label style="display: block; text-align: center;margin-top: 20px">Tulis laporan</label></div>
        </div>
    </div>
</div>

@endsection