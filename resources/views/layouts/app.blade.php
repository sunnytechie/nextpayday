<!DOCTYPE html>
<html lang="en">
<head>
  <title>NextPayDay</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    @include('snippets.nav')
    @include('snippets.flash-message')
    <main>
        {{-- content --}}
        @yield('content')
    </main>
</body>
</html>

