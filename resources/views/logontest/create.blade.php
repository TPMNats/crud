@extends('parent')

@section('main')
@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<div align="right">
  <a href="{{ route('logon.index') }}" class="btn btn-default">Back</a>
</div>

<form method="post" action="{{ route('logon.store') }}" enctype="multipart/form-data">

  @csrf
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
    </div>
  </div> -->
  <br /><br /><br />
  <div class="form-group text-center">
    <input type="submit" name="add" class="btn btn-primary input-lg" value="Submit" />
  </div>

</form>

@endsection
