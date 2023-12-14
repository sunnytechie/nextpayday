@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>User</h2>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">User Information</h5>
                        <p class="card-text">Name: {{ Auth::user()->name }}</p>
                        <p class="card-text">Email: {{ Auth::user()->email }}</p>
                        <p class="card-text">Role: {{ Auth::user()->role }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
