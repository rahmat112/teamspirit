<option hidden value="">--- Pilih ---</option>
@if(!empty($regencies))
  @foreach($regencies as $key => $value)
    <option value="{{ $key }}">{{ $value }}</option>
  @endforeach
@endif
<option hidden value="">--- Pilih ---</option>
@if(!empty($districts))
  @foreach($districts as $key => $value)
    <option value="{{ $key }}">{{ $value }}</option>
  @endforeach
@endif
<option hidden value="">--- Pilih ---</option>
@if(!empty($villages))
  @foreach($villages as $key => $value)
    <option value="{{ $key }}">{{ $value }}</option>
  @endforeach
@endif
