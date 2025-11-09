<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title', 'Admin')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Admin CSS (put admin assets in public/theme/admin/) -->
  <link href="{{ asset('theme/admin/css/admin.css') }}" rel="stylesheet">
  @stack('styles')
</head>
<body>
  <div class="admin-app">
    @yield('content')
  </div>

  <script src="{{ asset('theme/admin/js/admin.js') }}"></script>
  @stack('scripts')
</body>
</html>
