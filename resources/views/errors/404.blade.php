@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h1>404</h1>
                <h2>Page not found</h2>
                <p>Sorry, the page you are looking for could not be found.</p>
                <a href="{{ url()->previous() }}" class="btn btn-primary">Go to Home</a>
            </div>
        </div>
    </div>
@endsection
