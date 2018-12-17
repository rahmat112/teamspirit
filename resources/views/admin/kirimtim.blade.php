@extends('masteradmin')

@section('content')
<div class="container shadow">
<div class="row">
   <div class="col"><a class ="btn btn-primary btn-spirit" style="color: white;" href="/admin/mobilisasi">Back</a></div>
</div>
<form method="post">
    @csrf
    <div class="row" style="margin-top: 20px;">
        <div class="col">
        <div class="form-group">
            <label>Nama Tim</label>
            <select class="form-control" name="idTim">
                @foreach($timsiap as $tim)
                <option value="{{$tim->id}}">{{$tim->nama}}</option>
                @endforeach
            </select>
        </div>
          </div>
          <div class="col">
        <div class="form-group">
            <label>Posko tujuan</label>
            <select class="form-control" name="idPosko">
                 @foreach($poskos as $posko)
                <option value="{{$posko->id}}">{{$posko->nama}}</option>
                @endforeach
            </select>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col">
        <div class="form-group">
            <label>Tanggal mulai</label>
            <input type="date" name="tanggalMulai" class="form-control" required="">
        </div>
        </div>
        <div class="col">
        <div class="form-group">
            <label>Tanggal berakhir</label>
            <input type="date" name="tanggalBerakhir" class="form-control" required="">
        </div>
        </div>
    
    </div>
    <div class="row">
      <div class="col"><button type="submit" class="btn btn-primary btn-spirit" style="float: right;"> Submit </button></div>
    </div>
  


</form>


</div>

<div class="container shadow">
<div style="color: black;font-weight: bold;font-size: 120%; margin-bottom: 20px;">Mobilisasi tim</div>
<table class="table table-striped">
  <thead class="thead-spirit">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nama Tim</th>
      <th scope="col">Posko Tujuan</th>
      <th scope="col">Tanggal mulai</th>
      <th scope="col">Tanggal berakhir</th>
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
    </tr>

    @endforeach
  </tbody>
</table>
{{ $mobilisasis->links() }}
</div>
































@endsection