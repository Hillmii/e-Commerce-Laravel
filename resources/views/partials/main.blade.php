<!doctype html>
<html class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @vite('resources/css/app.css')

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">

</head>
<body style="font-family: 'Karla', sans-serif;" class="bg-second-primary m-0">

<div id="top"></div>

    @include('./partials.notif')
  
    @include('./partials.header')

    @include('./partials.navbar')

    @yield('content')

    @include('./partials.footer')

    @include('./partials.scroll')
  
    @include('./partials.script')
</body>
</html>