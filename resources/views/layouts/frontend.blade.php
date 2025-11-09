<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title', 'Fruits Store')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Frontend (Fruits) CSS (assets should be copied to public/theme/fruits/) -->
  <link href="{{ asset('theme/fruits/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('theme/fruits/css/style.css') }}" rel="stylesheet">
  @stack('styles')
</head>
<body>
  <div class="fruits-app">
    @includeIf('partials.fruits_navbar')

    <main>
      @yield('content')
    </main>

    @includeIf('partials.fruits_footer')
  </div>

  <!-- Frontend (Fruits) JS -->
  <script src="{{ asset('theme/fruits/js/jquery.min.js') }}"></script>
  <script src="{{ asset('theme/fruits/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('theme/fruits/js/main.js') }}"></script>
  @stack('scripts')
</body>
</html>
