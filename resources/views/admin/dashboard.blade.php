@extends('masteradmin')

@section('content')
<div class="container shadow">
	<div class="row">
		<div class="col">Admin</div>
	</div>
	<div class="dash_r">
		<div class="row img_r">
		<div class="col"><a href="/admin/relawan"><img src="/image/relawan.svg" width="80%"></a></div>
		<div class="col"><a href="/admin/tim"><img src="/image/tim.svg" width="80%"></a></div>
		<div class="col"><a href="/admin/mobilisasi"><img src="/image/mobilisasi.svg" width="80%"></a></div>
		<div class="col"><a href="/admin/evaluasi"><img src="/image/evaluasi.svg" width="80%"></a></div>
		</div>
		<div class="row text_r">
		<div class="col">Pengelolaan relawan</div>
		<div class="col">Pengelolaan tim</div>
		<div class="col">Mobilisasi tim</div>
		<div class="col">Evaluasi tim</div>
		</div>
	</div>
</div>

@endsection