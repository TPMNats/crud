@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <br>
                    <h2>Dashboard | {{ Auth::user()->name }}</h2>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<!--                     <h1>Welcome {{ Auth::user()->name }} !</h1> -->
                    <br>
                    <a href="{{ url('/crud') }}" class="btn btn-primary">Master File</a>
                    <br>
                    <br>
                    <a href="{{ url('/crud') }}" class="btn btn-primary">Log On Test List</a>
                    <br>
                    <br>
                    <a href="{{ url('/crud') }}" class="btn btn-primary"></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
