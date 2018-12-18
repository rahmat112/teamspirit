@extends('masteradmin')

@section('content')
<div class="container shadow">
	<div class="row">
		<div class="col-2"><a class ="btn btn-primary btn-spirit" style="color: white;" href="/admin/tim">Back</a>
    </div>
    <div class="col-10">
      <form method="post" class="form-group form-inline" style="float: right;">
        @csrf
      <select name="idprov" class="form-control">
        <option selected="selected">Pilih Provinsi</option>
        <option value="0">SEMUA</option>
        @foreach($provinces as $province)
        <option value="{{$province->id}}">{{$province->name}}</option>
        @endforeach
      </select>
      <button type="submit" class="btn btn-primary btn-spirit" name="formfilter" style="margin-left: 10px;">FILTER</button>
      </form>
      <form method="post" class="form-group form-inline" style="float: right;">
        @csrf
      <select name="urut" class="form-control">
        <option selected="selected" value="id">Pilih Urutan</option>
        <option value="id">ID</option>
        <option value="baru">Terbaru</option>
        <option value="nama">Nama</option>
        <option value="profesi">Profesi</option>
        <option value="tim">Tim</option>
      </select>
      <button type="submit" class="btn btn-primary btn-spirit" name="formurut" style="margin-left: 10px;margin-right: 10px;">URUTKAN</button>
      </form>
    </div>
	</div>
	<div class="dash_r">
		<table class="table table-striped">
  <thead class="thead-spirit">
    <tr>
      <th scope="col" style="color: white;">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Profesi</th>
      <th scope="col">Kota</th>
      <th scope="col">Provinsi</th>
      <th scope="col">Tim</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($relawans as $relawan)
    <tr style="text-transform: lowercase;text-transform: capitalize;"> 
      <th scope="row">{{$relawan->id}}</th>
      <td>{{$relawan->namaDepan}} {{$relawan->namaBelakang}}</td>
      <td>{{$relawan->profesi}}</td>
      <td>{{$relawan->kot['name']}}</td>
      <td>{{$relawan->prov['name']}}</td>
      <td>
          @if(is_null($relawan->idTim))
            <button type="button" style="margin: 0px;" class="btn btn-primary btn-spirit" data-toggle="modal" data-target="#tim{{$relawan->id}}">
            Pilih tim </button>
        
          @else
            {{$relawan->tim['nama']}}
    
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
        <div class="row" style="margin-bottom: 20px">
         <div class="col">
          <div class="cropfoto"><img src="{{ url('uploads/file/'.$relawan->file) }}" class="foto" ></div>
         </div>
        </div>
        <div class="row">
          <div class="col">
            Nama
          </div>
          <div class="col" style="text-transform: capitalize;">
            : {{$relawan->namaDepan}} {{$relawan->namaBelakang}}
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
            : {{$relawan->prov['name']}}
          </div>
        </div>
        <div class="row">
          <div class="col">
            Kota
          </div>
          <div class="col">
            : {{$relawan->kot['name']}}
          </div>
        </div>
        <div class="row">
          <div class="col">
            Kecamatan
          </div>
          <div class="col">
            : {{$relawan->kec['name']}}
          </div>
        </div>
        <div class="row">
          <div class="col">
            Kelurahan
          </div>
          <div class="col">
            : {{$relawan->kel['name']}}
          </div>
        </div>
        <div class="row">
          <div class="col">
            Waktu daftar
          </div>
          <div class="col">
            : {{$relawan->created_at}}
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
        <div class="form-group">
          
        <form method="POST">
                        @csrf
        <input type="hidden" name="id" value="{{$relawan->id}}">
       <select name="idTim" class="form-control">
         @foreach($timsiap as $tim)
          <option value={{$tim->id}}>{{$tim->nama}}</option>
         @endforeach
       </select>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary btn-spirit" name="formtim">Simpan</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
   

    @endforeach
  </tbody>
</table>
{{ $relawans->links() }}
	</div>
</div>

@endsection