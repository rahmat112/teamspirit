@extends('master')

@section('content')
<div class="container shadow">
	<div class="row">
		<div class="col"><a class ="btn btn-primary btn-spirit" style="color: white;" href="/dashboard">Back</a></div>
	</div>
	@if(is_null(Auth::user()->idTim))

		<div class="row">
			<div class="col" style="text-align: center;">
				Kamu belum punya tim, tunggu update dari admin.
			</div>
		</div>

	@elseif(is_null(Auth::user()->tim['idKetua']))
	<div class="row" style="font-size: 150%">
		<div class="col" style="text-align: center;font-weight: bolder; text-transform: uppercase;">Tim : {{Auth::user()->tim['nama']}}</div>
	</div><div class="row" style="margin-top: 5px;">
		<div class="col" style="text-align: center;font-weight: bolder; font-size: 120%;">
		Ketua tim: -
		</div>
	</div>
	<div class="dash_r">
		@php
          $members = DB::table('relawans')->where('idTim', Auth::user()->idTim)->get();
          $i=0;
        @endphp
        <div class="row" style="margin-bottom: 20px;">
        @foreach($members as $member)
          <div class="col-sm-4"><div class="cropfoto2"><img src={{ url('uploads/file/'.$member->file) }} class="foto"></div><label style="display: block; text-align: center; margin: 30px;text-transform: capitalize;">{{$member->namaDepan}} {{$member->namaBelakang}} <br/>{{$member->profesi}} <br/> {{$member->noHp}}</label></div> 
        @endforeach
        </div>
	</div>
	@else
	<div class="row" style="font-size: 150%">
		<div class="col" style="text-align: center;font-weight: bolder; text-transform: uppercase;">Tim : {{Auth::user()->tim['nama']}}</div>
	</div><div class="row" style="margin-top: 5px;">
		<div class="col" style="text-align: center;font-weight: bolder; font-size: 120%; text-transform: capitalize;">
		Ketua tim : 
		@php
		$ketua = DB::table('relawans')->where('id', Auth::user()->tim['idKetua'])->first();
		@endphp
			{{$ketua->namaDepan}} {{$ketua->namaBelakang}}
		</div>
	</div>
	<div class="dash_r">
		@php
          $members = DB::table('relawans')->where('idTim', Auth::user()->idTim)->get();
          $i=0;
        @endphp
        <div class="row" style="margin-bottom: 20px;">
        @foreach($members as $member)
          <div class="col-sm-4"><div class="cropfoto2"><img src={{ url('uploads/file/'.$member->file) }} class="foto"></div><label style="display: block; text-align: center; margin: 30px;text-transform: capitalize;"><b>{{$member->namaDepan}} {{$member->namaBelakang}} </b><br/>{{$member->profesi}} <br/> {{$member->noHp}}</label></div> 
        @endforeach
        </div>
	</div>
	@endif
</div>
@endsection