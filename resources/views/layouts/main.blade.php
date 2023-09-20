<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @include('components.style')
  </head>
  <body>
    @include('components.navbar')
    <div class="container">
        @yield('content')
    </div>
    @include('components.footer')
    @include('components.script')
  </body>
</html>