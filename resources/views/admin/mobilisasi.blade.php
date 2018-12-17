@extends('masteradmin')

@section('content')
<div class="container shadow">
    
	<div class="row">
		<div class="col"><a class ="btn btn-primary btn-spirit" style="color: white;" href="/admin/dashboard">Back</a></div>
	</div>
    <div class="dash_r">
     <div class="row img_r">
        <div class="col"><a href="/admin/mobilisasi/posko"><img src="/image/posko.svg"height="250px"></a><label style="display: block; text-align: center;margin-top: 20px">Lihat Posko</label></div>
        <div class="col"><a href="/admin/mobilisasi/kirimtim"><img src="/image/mobilisasi.svg"height="250px"></a><label style="display: block; text-align: center;margin-top: 20px">Mobilisasi tim</label></div>
        </div>
  </div>
</div>

@endsection