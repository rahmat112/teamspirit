@extends('master')

@section('content')
<div class="container shadow">
	<div class="row">
		<div class="col"><a class ="btn btn-primary btn-spirit" style="color: white;" href="/relawan/dashboard">Back</a></div>
	</div>
	<div class="row">
		<div class="col" style="text-align: center;">$namatim</div>
	</div>
	<div class="dash_r">
		<div class="row img_r">
		<div class="col"><img src="/image/user.svg"></div>
		<div class="col"><img src="/image/user.svg" class="rounded-circle"></div>
		<div class="col"><img src="/image/user.svg" class="rounded-circle"></div>
		<div class="col"><img src="/image/user.svg" class="rounded-circle"></div>
		</div>
		<div class="row text_r">
		<div class="col">nama</div>
		<div class="col">nama</div>
		<div class="col">nama</div>
		<div class="col">nama</div>
		</div>
		<div class="row text_r">
		<div class="col">prof</div>
		<div class="col">prof</div>
		<div class="col">prof</div>
		<div class="col">prof</div>
		</div>
	</div>
</div>
@endsection