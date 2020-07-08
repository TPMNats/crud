@extends('parent')

@section('main')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
	</div>
	<br />
	<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" /><br><br>
	
<!-- 		<h3>Engineer - {{ $data->first_name }} </h3>
		<h3>Tetra Model - {{ $data->last_name }}</h3>
		<h3>Memory Size - {{ $data->Memory Size }}</h3>
		<h3>Serial Number - {{ $data->Serial Number }}</h3>
		<h3>Batch Number - {{ $data->Batch Number }}</h3>
		<h3>Quantity - {{ $data->Quantity }}</h3>
 -->
<table style="width:100%" class="table table-dark">
  <tr>
    <td><h2>Engineer</h2></td>
    <td><h2>{{ $data->engineer }} </h2></td>
  </tr>
  <tr>
    <td><h2>Memory Size</h2></td>
    <td><h2>{{ $data->memsize }} </h2></td>
  </tr>
  <tr>
    <td><h2>Serial Number</h2></td>
    <td><h2>{{ $data->sernum }} </h2></td>
  </tr>
  <tr>
    <td><h2>Batch Number</h2></td>
    <td><h2>{{ $data->bchnum }} </h2></td>
  </tr>
  <tr>
    <td><h2>Quantity</h2></td>
    <td><h2>{{ $data->qty }} </h2></td>
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
