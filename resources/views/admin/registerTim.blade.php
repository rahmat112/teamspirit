@extends('masteradmin')

@section('content')
<div class="container shadow">
	<div class="row">
		<div class="col"><a class ="btn btn-primary btn-spirit" style="color: white;" href="/admin/tim">Back</a></div>
	</div>
	<div class="row">
    <form method="POST" action="{{ url('admin/tim') }}">
                        @csrf

<div class="row">
  <div class="col-sm" style="padding-top: 10px; padding-bottom: 10px; font-weight: bolder;">
    Data Diri
  </div>
  
</div>
<div class="row">
    <div class="col-sm">
      <div class="form-group">
    <label>Nama</label>
    <input required="" type="text" name="nama" class="form-control" placeholder="Nama tim">
  </div>
    </div>
    <div class="col-sm">
      <div class="form-group">
    <label>Status</label>
    <input required=""type="text" name="status" class="form-control" placeholder="Jenis tim">
  </div>
    </div>
    <div class="col-sm">
      <div class="form-group">
    <label>Jenis</label>
    <input required=""type="text" name="jenis" class="form-control" placeholder="Status tim">
  </div>
    </div>
    <div class="col-sm">
    <input type="submit" class="btn btn-primary btn-spirit"  style="float: right; width: 150px;">
    </div>

</div>


</form>
  </div>
</div>

@endsection