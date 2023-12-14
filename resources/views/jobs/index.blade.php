@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-4">
                <h2>Administrator.</h2>
            </div>

            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <div>Jobs</div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('jobs.send.email.to.active.users') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" name="sendRequest" id="sendRequest" required>
                                    <label class="form-check-label" for="sendRequest">
                                        Check to send email to active users
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

