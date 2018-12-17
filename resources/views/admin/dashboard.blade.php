@extends('masteradmin')

@section('content')
<div class="container shadow">
	<div class="row">
		<div class="col"><b>ADMIN</b></div>
	</div>

	<div class="dash_r">
		 <div class="row img_r">
        <div class="col"><a href="/admin/tim"><img src="/image/tim.svg" height="200px"></a> <label style="display: block; text-align: center; margin-top: 20px">Pengelolaan tim dan relawan</label></div>
        <div class="col"><a href="/admin/mobilisasi"><img src="/image/mobilisasi.svg"height="200px"></a><label style="display: block; text-align: center;margin-top: 20px">Posko dan mobilisasi tim</label></div>
        <div class="col"><a href="/admin/laporan"><img src="/image/evaluasi.svg"height="200px"></a><label style="display: block; text-align: center;margin-top: 20px">Lihat laporan</label></div>
        </div>
	</div>
</div>

@endsection