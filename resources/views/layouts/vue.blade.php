<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vue Js</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  {{-- vite --}}
  {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

  {{-- using only the js via vite so I can still retain bootstrap styling --}}
  @vite(['resources/js/app.js'])
  
</head>
<body>
    @include('snippets.nav')
    @include('snippets.flash-message')
    <div id="app">
        {{-- content --}}
        @yield('content')
    </div>
</body>
</html>
