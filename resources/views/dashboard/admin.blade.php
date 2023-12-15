@extends('layouts.vue')
@section('content')
    {{-- <div class="container">
        <div class="row">
            <div class="col-md-12 my-4">
                <h2>Administrator.</h2>
            </div>

            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>CSV Records</div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary rounded-0" data-bs-toggle="modal" data-bs-target="#uploadCSV">
                                Add new CSV User
                            </button>
                        </div>
                    </div>


                    <div class="modal fade" id="uploadCSV" tabindex="-1" aria-labelledby="uploadCSVLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="uploadCSVLabel">Import CSV File</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('import.csv') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="modal-body">
                                    <input type="file" class="form-control @error('csv_file') is-invalid @enderror" name="csv_file" id="csv_file" accept=".csv" required>

                                    @error('csv_file')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary rounded-0">Import csv</button>
                                </div>

                            </form>
                        </div>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($records as $record)
                                    <tr>
                                        <td>{{ $record->name }}</td>
                                        <td>{{ $record->email }}</td>
                                        <td>{{ $record->phone }}</td>
                                        <td>{{ $record->address }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <csv-component></csv-component>
@endsection

