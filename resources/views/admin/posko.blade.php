@extends('masteradmin')

@section('content')
<div class="container shadow">
	<div class="row">
		<div class="col"><a class ="btn btn-primary btn-spirit" style="color: white;" href="/admin/mobilisasi">Back</a></div>
	</div>
	<div class="dash_r">
		<table class="table table-striped">
  <thead class="thead-spirit">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama Posko</th>
      <th scope="col">Alamat</th>
      <th scope="col">Map</th>
    </tr>
  </thead>
  <tbody>
    @foreach($poskos as $posko)
    <tr>
      <th scope="row">{{$posko->id}}</th>
      <td>{{$posko->nama}}</td>
      <td>{{$posko->alamat}}</td>
      <td><button type="button" class="btn btn-primary btn-spirit" data-toggle="modal" data-target="#myModal{{$posko->id}}">
      Map
    </button></td>
    </tr>
<div class="modal fade" id="myModal{{$posko->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
             <h4 class="modal-title" id="myModalLabel">Map</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <iframe src="{{$posko->embed}}}" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
    @endforeach
  </tbody>
</table>
	</div>
</div>

{{-- <script>

$('.modal').on('shown.bs.modal',function(){      //correct here use 'shown.bs.modal' event which comes in bootstrap3
  $(this).find('iframe')
})
    </script> --}}

@endsection