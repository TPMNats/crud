@extends('parent')

@section('main')
<div align="right">
  <a href="{{ route('logon.index') }}" class="btn btn-default">Back</a>
</div>
<br />

<form method="post" action="{{ route('logon.update', $data->id) }}" enctype="multipart/form-data">

  @csrf
  @method('PATCH')
  <div class="form-group">
    <label class="col-md-4 text-right">Engineer</label>
    <div class="col-md-8">
      <input type="text" name="first_name" value="{{ $data->first_name }}" class="form-control input-lg" />
    </div>
  </div>
  <br />
  <br />
  <br />
  <div class="form-group">
    <label class="col-md-4 text-right">Tetra Model</label>
    <div class="col-md-8">
      <input type="text" name="last_name" value="{{ $data->last_name }}" class="form-control input-lg" />
    </div>
  </div>
  <br />
  <br />
  <br />
  <div class="form-group">
    <label class="col-md-4 text-right">Memory Size</label>
    <div class="col-md-8">
      <input type="text" name="memsize" value="{{ $data->memsize }}" class="form-control input-lg" />
    </div>
  </div>
  <br />
  <br />
  <br />
  <div class="form-group">
    <label class="col-md-4 text-right">Serial Number</label>
    <div class="col-md-8">
      <input type="text" name="sernum" value="{{ $data->sernum }}" class="form-control input-lg" />
    </div>
  </div>
  <br />
  <br />
  <br />
  <div class="form-group">
    <label class="col-md-4 text-right">Batch Number</label>
    <div class="col-md-8">
      <input type="text" name="bchnum" value="{{ $data->bchnum }}" class="form-control input-lg" />
    </div>
  </div>
  <br />
  <br />
  <br />
  <div class="form-group">
    <label class="col-md-4 text-right">Quantity</label>
    <div class="col-md-8">
      <input type="text" name="qty" value="{{ $data->qty }}" class="form-control input-lg" />
    </div>
  </div>
  <br />
  <br />
  <br />
  <div class="form-group">
    <label class="col-md-4 text-right">Comments</label>
    <div class="col-md-8">
      <input type="text" name="comments" value="{{ $data->comments }}" class="form-control input-lg" />
    </div>
  </div>
  <br />
  <br />
  <br />
<!--   <div class="form-group">
    <label class="col-md-4 text-right">Select Image</label>
    <div class="col-md-8">
      <input type="file" name="image" />
      <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
      <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
    </div>
  </div>
 -->  <br /><br /><br />
  <div class="form-group text-center">
    <input type="submit" name="edit" class="btn btn-primary input-lg" value="Submit Changes" />
  </div>
</form>
@endsection



