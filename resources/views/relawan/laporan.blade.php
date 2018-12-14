@extends('master')

@section('content')
<div class="container shadow">
	<div class="row">
		<div class="col"><a class ="btn btn-primary btn-spirit" style="color: white;" href="/relawan/dashboard">Back</a></div>
	</div>
	<div class="row">
		<div class="col" style="text-align: center;">Tulis Laporan</div>
	</div>
	<div class="dash_r">
		<form method="post">
  			{{csrf_field()}}
  			<div class="row">
  				<div class="col">
  				<div class="form-group">
    			<label>Judul</label>
    			<input required="" type="text" name="laporan" class="form-control" placeholder="Judul">
  				</div>
  				</div>
			</div>

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
		
	</div>
</div>
@endsection