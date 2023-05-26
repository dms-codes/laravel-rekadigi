<!doctype html>
<html lang="en">
  <head>
    @include('partials.meta')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
    <title>GAS - Welcome to Gas.id</title>
    @include('partials.link')
  </head>
  <body>
    @include('partials.navbar')

<div class="container">
    @yield('beranda')
</div>
@include('partials.script')
</body>
</html>