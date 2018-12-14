@extends('masteradmin')

@section('content')
<div class="container shadow">
	<div class="row">
		<div class="col"><a class ="btn btn-primary btn-spirit" style="color: white;" href="/admin/dashboard">Back</a></div>
	</div>
	<div class="dash_r">
		<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Depan</th>
      <th scope="col">Nama Belakang</th>
      <th scope="col">Tanggal lahir</th>
      <th scope="col">Profesi</th>
      <th scope="col">Kota</th>
      <th scope="col">Provinsi</th>
      <th scope="col">Tim</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($relawans as $relawan)
    <tr> 
      <th scope="row">{{$relawan->id}}</th>
      <td>{{$relawan->namaDepan}}</td>
      <td>{{$relawan->namaBelakang}}</td>
      <td>{{$relawan->tanggalLahir}}</td>
      <td>{{$relawan->profesi}}</td>
      <td>{{$relawan->kota}}</td>
      <td>{{$relawan->provinsi}}</td>
      <td>
          @if(is_null($relawan->idTim))
            <button type="button" style="margin: 0px;" class="btn btn-primary btn-spirit" data-toggle="modal" data-target="#tim{{$relawan->id}}">
            Pilih tim </button>
        
          @else
            {{$relawan->idTim}}
    
          @endif
      </td>
      <td> <button type="button" style="margin: 0px;" class="btn btn-primary btn-spirit" data-toggle="modal" data-target="#detail{{$relawan->id}}">
  Details
</button></td>
    </tr>
    <div class="modal fade" id="detail{{$relawan->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding: 30px">
        <div class="row">
          <div class="col">
            Nama Depan
          </div>
          <div class="col">
            : {{$relawan->namaDepan}}
          </div>
        </div>
        <div class="row">
          <div class="col">
            Nama Belakang
          </div>
          <div class="col">
            : {{$relawan->namaBelakang}}
          </div>
        </div>
        <div class="row">
          <div class="col">
            Tanggal Lahir
          </div>
          <div class="col">
            : {{$relawan->tanggalLahir}}
          </div>
        </div>
        <div class="row">
          <div class="col">
            Jenis Kelamin
          </div>
          <div class="col">
            : {{$relawan->jenisKelamin}}
          </div>
        </div>
        <div class="row">
          <div class="col">
            Profesi
          </div>
          <div class="col">
            : 
            {{$relawan->profesi}}
          </div>
        </div>
        <div class="row">
          <div class="col">
            Jenis Kelamin
          </div>
          <div class="col">
            : {{$relawan->noHp}}
          </div>
        </div>
        <div class="row">
          <div class="col">
            Email
          </div>
          <div class="col">
            : {{$relawan->email}}
          </div>
        </div>
        <div class="row">
          <div class="col">
            Provinsi
          </div>
          <div class="col">
            : {{$relawan->provinsi}}
          </div>
        </div>
        <div class="row">
          <div class="col">
            Kota
          </div>
          <div class="col">
            : {{$relawan->kota}}
          </div>
        </div>
        <div class="row">
          <div class="col">
            Kecamatan
          </div>
          <div class="col">
            : {{$relawan->kecamatan}}
          </div>
        </div>
        <div class="row">
          <div class="col">
            Kelurahan
          </div>
          <div class="col">
            : {{$relawan->kelurahan}}
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-spirit" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="tim{{$relawan->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding: 30px">
        <form method="POST">
                        @csrf
        <input type="hidden" name="id" value="{{$relawan->id}}">
       <select name="idTim">
         @foreach($tims as $tim)
          <option value={{$tim->id}}>{{$tim->nama}}</option>
         @endforeach
       </select>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary btn-spirit">Simpan</button>
        </form>
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