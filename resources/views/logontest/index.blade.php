@extends('parent')

@section('main')

<div align="right">
  <a href="{{ route('logon.create') }}" class="btn btn-success btn-sm">Create Call Log</a>
</div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered table-striped">
  <tr>
    <th width="15%">Engineer</th>
    <th width="15%">Tetra Model</th>
    <th width="15%">Memory Size</th>
    <th width="30%">Serial Number</th>
    <th width="20%">Batch Number</th>
    <th width="20%">Quantity</th>
    <th width="20%">Comments</th>
    <th width="10%">Action</th>
  </tr>
  @foreach($data as $row)
    <tr>
<!--       <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td> -->
      <td>{{ $row->engineer }}</td>
      <td>{{ $row->tetramodel }}</td>
      <td>{{ $row->memsize }}</td>
      <td>{{ $row->sernum }}</td>
      <td>{{ $row->bchnum }}</td>
      <td>{{ $row->qty }}</td>
      <td>{{ $row->comments }}</td>
      <td>
        
        <form action="{{ route('logon.destroy', $row->id) }}" method="post">
          <a href="{{ route('logon.show', $row->id) }}" class="btn btn-primary">Show</a>
          <a href="{{ route('logon.edit', $row->id) }}" class="btn btn-warning">Edit</a>
          @csrf
          @method('DELETE')
          <a href="deletelink" type="submit" class="btn btn-danger" onclick="return confirm('Confirm that you want to continue this action?')">Delete</a>
<!--           <button type="submit" class="btn btn-danger">Delete</button> -->
        </form>
      </td>
    </tr>
  @endforeach
</table>
{!! $data->links() !!}
@endsection