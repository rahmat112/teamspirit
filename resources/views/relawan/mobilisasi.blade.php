@extends('master')

@section('content')
<div class="container shadow">
	<div class="row">
		<div class="col"><a class ="btn btn-primary btn-spirit" style="color: white;" href="/relawan/dashboard">Back</a></div>
	</div>
	<div class="row">
		<div class="col" style="text-align: center;">Mobilisasi</div>
	</div>
	<div class="row">
		<div class="col" style="text-align: center;">Nama tim</div>
	</div>
	<div class="dash_r">
		<div class="row img_r">
		<div class="col"><img src="/image/Mobilisasi.svg" width="100%"></div>
		<div class="col" style="padding: 30px;">
			<div class="row">
				<div class="col">POSKO TUJUAN:</div>
			</div>
			<div class="row">
				<div class="col">ALAMAT POSKO:</div>
			</div>
			<div class="row">
				<div class="col">TANGGAL MULAI:</div>
			</div>
			<div class="row">
				<div class="col">TANGGAL BERAKHIR:</div>
			</div>
		</div>
	</div>
</div>
@endsection