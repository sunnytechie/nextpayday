@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-4">
                <h2>Administrator.</h2>
            </div>

            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>CSV Records</div>

                    </div>

                    <div class="card-body">
                        <form action="{{ route('import.csv') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="csv_file" class="form-label">Import CSV File</label>
                                <input type="file" class="form-control @error('csv_file') is-invalid @enderror" name="csv_file" id="csv_file" accept=".csv" required>

                                @error('csv_file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <button type="submit" class="btn btn-primary rounded-0">Import csv</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

