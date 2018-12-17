@extends('master')

@section('content')
<div class="container shadow">
	<div class="row">
		<div class="col"><a class ="btn btn-primary btn-spirit" style="color: white;" href="/dashboard">Back</a></div>
	</div>
	@php
	$mobilisasi=DB::table('mobilisasis')->where('idTim', Auth::user()->idTim)->first();
	@endphp
	<div class="dash_r">
		@if(Auth::user()->id == Auth::user()->tim['idKetua'])

				@if(Auth::user()->tim['status']=="SIAP")

					<div class="row">
							<div class="col" style="text-align: center;">
				Tim kamu belum mendapat perintah.
						</div>
						</div>
				@elseif(is_null($mobilisasi->laporan))
				<div class="row">
		<div class="col" style="text-align: center;">Tulis Laporan</div>
	</div>
					<form method="post">
  						{{csrf_field()}}
  			

						<div class="row">
  					<div class="col">
  					<div class="form-group">
    					<label>Isi laporan</label>
    					<textarea required="" type="text" name="laporan" class="form-control" placeholder="Isi" rows="10"></textarea>
  						</div>
  						</div>
							</div>
							<div class="row">
  							<div class="col">
  									<div class="form-group">
    					<input type="submit" name="Kirim" class="btn btn-primary btn-spirit " style="float: right;">
  								</div>
  							</div>
						</div>

						</form>
				@else
				<div style="text-align: center;"> Anda sudah mengirim laporan.</div>
				@endif

		@else
		
			<div style="text-align: center;"> Hanya ketua yang dapat menulis laporan. </div>
		@endif
	</div>
</div>
@endsection