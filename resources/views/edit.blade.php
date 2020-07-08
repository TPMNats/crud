@extends('parent')

@section('main')
<div align="right">
  <a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
</div>
<br />

<form method="post" action="{{ route('crud.update', $data->id) }}" enctype="multipart/form-data">

  @csrf
  @method('PATCH')
  <div class="form-group">
    <label class="col-md-4 text-right">First Name</label>
    <div class="col-md-8">
      <input type="text" name="first_name" value="{{ $data->first_name }}" class="form-control input-lg" />
    </div>
  </div>
  <br />
  <br />
  <br />
  <div class="form-group">
    <label class="col-md-4 text-right">Last Name</label>
    <div class="col-md-8">
      <input type="text" name="last_name" value="{{ $data->last_name }}" class="form-control input-lg" />
    </div>
  </div>
  <br />
  <br />
  <br />
  <div class="form-group">
    <label class="col-md-4 text-right">Company</label>
    <div class="col-md-8">
      <input type="text" name="company" value="{{ $data->company }}" class="form-control input-lg" />
    </div>
  </div>
  <br />
  <br />
  <br />
  <div class="form-group">
    <label class="col-md-4 text-right">Issue</label>
    <div class="col-md-8">
      <input type="text" name="issue" value="{{ $data->issue }}" class="form-control input-lg" />
    </div>
  </div>
  <br />
  <br />
  <br />
  <div class="form-group">
    <label class="col-md-4 text-right">Solution</label>
    <div class="col-md-8">
      <input type="text" name="solution" value="{{ $data->solution }}" class="form-control input-lg" />
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
  <div class="form-group">
    <label class="col-md-4 text-right">Select Image</label>
    <div class="col-md-8">
      <input type="file" name="image" />
      <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
      <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
    </div>
  </div>
  <br /><br /><br />
  <div class="form-group text-center">
    <input type="submit" name="edit" class="btn btn-primary input-lg" value="Submit Changes" />
  </div>
</form>
@endsection



