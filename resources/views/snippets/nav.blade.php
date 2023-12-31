<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="/">
        <img src="https://cdn.pixabay.com/photo/2018/11/13/22/01/avatar-3814081_1280.png" alt="Logo" width="30" height="30">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin') }}">Import CSV</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('api.records') }}">API Records</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('jobs') }}">Jobs</a>
            </li>
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                </form>
            </li>
        </ul>
    </div>
    </div>
</nav>
