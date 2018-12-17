@extends('masteradmin')

@section('content')
<div class="container shadow">
	<div class="row">
		<div class="col"><a class ="btn btn-primary btn-spirit" style="color: white;" href="/admin/tim/data">Back</a></div>
	</div>
    
<div class="row" style="margin-top: 20px;">
  <form method="POST" action="{{ url('admin/tim') }}" class="form-inline">
                        @csrf
    <div class="col-sm">
      <div class="form-group">
    <label>Nama</label>
    <input required="" type="text" name="nama" class="form-control" placeholder="Nama tim">
  </div>
    </div>
    <div class="col-sm">
    <input type="submit" class="btn btn-primary btn-spirit" style="margin-top: 15px;">
    </div>

</div>


</form>
  </div>
</div>


@endsection