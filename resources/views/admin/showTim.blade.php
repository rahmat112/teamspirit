@extends('masteradmin')

@section('content')
<div class="container shadow">
	<div class="row">
		<div class="col"><a class ="btn btn-primary btn-spirit" style="color: white;" href="/admin/tim">Back</a></div>
	</div>
	<div class="dash_r">
		<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Tim</th>
      <th scope="col">Jenis</th>
      <th scope="col">Status</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tims as $tim)
    <tr>
      <th scope="row">{{$tim->id}}</th>
      <td>{{$tim->nama}}</td>
      <td>{{$tim->jenis}}</td>
      <td>{{$tim->status}}</td>
      <th scope="col">#</th>
    </tr>
    @endforeach
  </tbody>
</table>
	</div>
</div>

@endsection