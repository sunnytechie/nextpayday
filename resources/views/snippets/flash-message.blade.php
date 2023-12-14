@if(session('error'))
    <div class="rounded-0 alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if(session('success'))
    <div class="rounded-0 alert alert-success">
        {{ session('success') }}
    </div>
@endif
