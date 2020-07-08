@extends('parent')

@section('main')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
	</div>
	<br />
	<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" /><br><br>
	
<!-- 		<h3>First Name - {{ $data->first_name }} </h3>
		<h3>Last Name - {{ $data->last_name }}</h3>
		<h3>Company - {{ $data->company }}</h3>
		<h3>Issue - {{ $data->issue }}</h3>
		<h3>Solution - {{ $data->solution }}</h3>
		<h3>Comments - {{ $data->comments }}</h3>
 -->
<table style="width:100%" class="table table-dark">
  <tr>
    <td><h2>First Name</h2></td>
    <td><h2>{{ $data->first_name }} </h2></td>
  </tr>
  <tr>
    <td><h2>Company</h2></td>
    <td><h2>{{ $data->company }} </h2></td>
  </tr>
  <tr>
    <td><h2>Issue</h2></td>
    <td><h2>{{ $data->issue }} </h2></td>
  </tr>
  <tr>
    <td><h2>Solution</h2></td>
    <td><h2>{{ $data->solution }} </h2></td>
  </tr>
  <tr>
    <td><h2>Comments</h2></td>
    <td><h2>{{ $data->comments }} </h2></td>
  </tr>
  <tr>
    <td><h2>Created At</h2></td>
    <td><h2>{{ isset(Auth::user()->created_at) ? Auth::user()->created_at->format('d/m/Y') : Auth::user()->email }} </h2></td>
  </tr>
</table>

</div>
@endsection
