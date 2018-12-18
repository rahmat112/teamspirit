@extends('masteradmin')

@section('content')
<div class="container shadow">
	<div class="row">
		<div class="col"><a class ="btn btn-primary btn-spirit" style="color: white;" href="/admin/tim">Back</a></div>
    <div class="col"><a class ="btn btn-primary btn-spirit" style="color: white; float: right;" href="/admin/tim/create">Tambah tim</a></div>
	</div>


	<div class="dash_r">
		<table class="table table-striped">
  <thead class="thead-spirit">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama Tim</th>
      <th scope="col">Status</th>
      <th scope="col">Jumlah Anggota</th>
      <th scope="col">Ketua tim</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tims as $tim)
    <tr>
      <th scope="row">{{$tim->id}}</th>
      <td>{{$tim->nama}}</td>
      <td>{{$tim->status}}</td>
      <td>
        @php
          $count = DB::table('relawans')->where('idTim', $tim->id)->count();
        @endphp
        {{$count}}

      </td>
      <td>
          @if(is_null($tim->idKetua))
            <button type="button" style="margin: 0px;" class="btn btn-primary btn-spirit" data-toggle="modal" data-target="#ketua{{$tim->id}}">
            Pilih ketua </button>
        
          @else
          {{DB::table('relawans')->where('id', $tim->idKetua)->value('namaDepan')}} {{DB::table('relawans')->where('id', $tim->idKetua)->value('namaBelakang')}}
          @endif
      </td>
      <td><button type="button" style="margin: 0px;" class="btn btn-primary btn-spirit" data-toggle="modal" data-target="#tim{{$tim->id}}">
  Details
</button></td>
    </tr>
    <div class="modal fade" id="tim{{$tim->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Detail tim</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div style="font-weight: bold;font-size: 120%;text-align: center;">Anggota Tim</div>
        @php
          $members = DB::table('relawans')->where('idTim', $tim->id)->get();
        @endphp
        @foreach($members as $member)
        <div class="row" style="margin-top: 20px;">
            <div class="col">
              <div class="cropfotomed"><img src="{{ url('uploads/file/'.$member->file) }}" class="foto" ></div>
            </div>
          </div>
          <div class="row"style="margin-top: 10px; text-transform: capitalize;">
            <div class="col" style="text-align: center; font-weight: bold;">{{$member->namaDepan}} {{$member->namaBelakang}}</div>
          </div>
          <div class="row"style="text-transform: capitalize;">
            <div class="col" style="text-align: center;">{{$member->profesi}}</div>
          </div>
        @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-spirit" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="ketua{{$tim->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Pilih ketua tim</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding: 30px">
        <form method="POST">
                        @csrf
        <input type="hidden" name="id" value="{{$tim->id}}">
       <select name="idKetua" class="form-control">
        @php
          $members = DB::table('relawans')->where('idTim', $tim->id)->get();
        @endphp
         @foreach($members as $member)
          <option value={{$member->id}}>{{$member->namaDepan}} {{$member->namaBelakang}}</option>
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
{{ $tims->links() }}
	</div>
</div>

@endsection