@extends('master')

@section('content')
<div class="container shadow">
	<div class="row">
		<div class="col"><a class ="btn btn-primary btn-spirit" style="color: white;" href="dashboard">Back</a></div>
	</div>
	@if(is_null(Auth::user()->idTim))

		<div class="row">
			<div class="col" style="text-align: center;">
				Kamu belum punya tim, tunggu update dari admin.
			</div>
		</div>

	@elseif(Auth::user()->tim['status']=="SIAP")

		<div class="row">
			<div class="col" style="text-align: center;">
				Tim kamu belum mendapat perintah.
			</div>
		</div>









	@else
	<div class="row" style="font-weight: bold; font-size: 120%;" >
		<div class="col" style="text-align: center;">MOBILISASI</div>
	</div>
	<div class="row" style="font-weight: bold; font-size: 120%;">
		<div class="col" style="text-align: center;">TIM : {{Auth::user()->tim['nama']}}</div>
	</div>
	<div class="dash_r">
		<div class="row img_r">
		<div class="col-7"><iframe src="{{$mobilisasi->posko['embed']}}" width="100%;" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
		<div class="col-5" style="padding: 30px; font-weight: bold;">
			<div class="row">
				<div class="col">Posko tujuan : {{$mobilisasi->posko['nama']}}</div>
			</div>
			<div class="row">
				<div class="col">Alamat posko: {{$mobilisasi->posko['alamat']}}</div>
			</div>
			<div class="row">
				<div class="col">Tanggal mulai : {{$mobilisasi->tanggalMulai}}</div>
			</div>
			<div class="row">
				<div class="col">Tanggal berakhir : {{$mobilisasi->tanggalBerakhir}}</div>
			</div>
		</div>
	</div>
</div>
@endif
</div>
@endsection