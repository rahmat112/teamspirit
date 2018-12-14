@extends('masteradmin')

@section('content')
<div class="container shadow">
	<div class="row">
		<div class="col"><a class ="btn btn-primary btn-spirit" style="color: white;" href="/admin/dashboard">Back</a>
    </div>
    <div class="col">
      <a class ="btn btn-primary btn-spirit" style="color: white;" href="/admin/tim/data">Lihat tim</a>
    </div>
    <div class="col">
      <a class ="btn btn-primary btn-spirit" style="color: white;" href="/admin/tim/create">Buat tim</a>
    </div>
	</div>

</div>

@endsection