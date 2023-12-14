@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h1>500</h1>
                <h2>Internal Server Error</h2>
                <p>Sorry, something went wrong.</p>
                <a href="{{ url()->previous() }}" class="btn btn-primary">Go to Home</a>
            </div>
        </div>
    </div>
@endsection
