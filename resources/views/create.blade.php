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
  <a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
</div>

<form method="post" action="{{ route('crud.store') }}" enctype="multipart/form-data">

  @csrf
  <div class="form-group">
    <label class="col-md-4 text-right">First Name</label>
    <div class="col-md-8">
      <input type="text" name="first_name" class="form-control input-lg" />
    </div>
  </div>
  <br />
  <br />
  <br />
  <div class="form-group">
    <label class="col-md-4 text-right">Last Name</label>
    <div class="col-md-8">
      <input type="text" name="last_name" class="form-control input-lg" />
    </div>
  </div>
  <br />
  <br />
  <br />
  <div class="form-group">
    <label class="col-md-4 text-right">Company</label>
    <div class="col-md-8">
      <input type="text" name="company" class="form-control input-lg" />
    </div>
  </div>
  <br />
  <br />
  <br />
  <div class="form-group">
    <label class="col-md-4 text-right">Issue</label>
    <div class="col-md-8">
      <input type="text" name="issue" class="form-control input-lg" />
    </div>
  </div>
  <br />
  <br />
  <br />
  <div class="form-group">
    <label class="col-md-4 text-right">Solution</label>
    <div class="col-md-8">
      <input type="text" name="solution" class="form-control input-lg" />
    </div>
  </div>
  <br />
  <br />
  <br />
  <div class="form-group">
    <label class="col-md-4 text-right">Comments</label>
    <div class="col-md-8">
      <input type="text" name="comments" class="form-control input-lg" />
    </div>
  </div>
  <br />
  <br />
  <br />
  <div class="form-group">
    <label class="col-md-4 text-right">Select Image</label>
    <div class="col-md-8">
      <input type="file" name="image" />
    </div>
  </div>
  <br /><br /><br />
  <div class="form-group text-center">
    <input type="submit" name="add" class="btn btn-primary input-lg" value="Submit" />
  </div>

</form>

@endsection
