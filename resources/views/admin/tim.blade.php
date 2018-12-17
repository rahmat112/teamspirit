@extends('masteradmin')

@section('content')
<div class="container shadow">
	<div class="row">
		<div class="col"><a class ="btn btn-primary btn-spirit" style="color: white;" href="/admin/dashboard">Back</a>
    </div>
  </div>

  <div class="dash_r">
     <div class="row img_r">
        <div class="col"><a href="/admin/relawan"><img src="/image/relawan.svg"height="250px"></a><label style="display: block; text-align: center;margin-top: 20px">Pengelolaan relawan</label></div>
        <div class="col"><a href="/admin/tim/data"><img src="/image/tim.svg"height="250px"></a><label style="display: block; text-align: center;margin-top: 20px">Pengelolaan tim</label></div>
        </div>
  </div>

</div>

@endsection