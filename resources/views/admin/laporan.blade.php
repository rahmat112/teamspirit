@extends('masteradmin')

@section('content')
<div class="container shadow">
	<div class="row">
		<div class="col"><a class ="btn btn-primary btn-spirit" style="color: white;" href="/admin/dashboard">Back</a></div>
	</div>
	<div class="dash_r">
		<table class="table table-striped">
  <thead class="thead-spirit">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nama Tim</th>
      <th scope="col">Posko Tujuan</th>
      <th scope="col">Tanggal mulai</th>
      <th scope="col">Tanggal berakhir</th>
      <th scope="col">Laporan</th>
    </tr>
  </thead>
  <tbody>
    @foreach($mobilisasis as $mobilisasi)
    <tr>
        <td>{{$mobilisasi->id}}</td>
        <td>{{$mobilisasi->tim['nama']}}</td>
        <td>{{$mobilisasi->posko['nama']}}</td>
        <td>{{$mobilisasi->tanggalMulai}}</td>
        <td>{{$mobilisasi->tanggalBerakhir}}</td>
        <td><button type="button" class="btn btn-primary btn-spirit" data-toggle="modal" data-target="#laporan{{$mobilisasi->id}}">
  Lihat laporan
</button></td>
    </tr>
<div class="modal fade" id="laporan{{$mobilisasi->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Laporan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col"> <p align="justify">
            @if(is_null($mobilisasi->laporan))
            Belum ada laporan.
            @else
            {{$mobilisasi->laporan}}
            @endif
          </p></div>
        </div>
   
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-spirit" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    @endforeach
  </tbody>
</table>
	</div>
</div>

@endsection