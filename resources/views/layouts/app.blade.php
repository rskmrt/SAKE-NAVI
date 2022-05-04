<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/home.css') }}" rel="stylesheet">
  <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
  <link href="{{ asset('css/ingredients.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>


<body>
  
<div class="sticky-top" >
  <header class="bg-light">
    @yield('search')
  </header>

  @yield('navbar')
</div>


<header class="py-2  ">
  @yield('header')
</header>


<main>
  @if(session('store'))
    <div class="alert alert-success" role="alert">
      {{ session('store') }}
    </div>
  @endif

  @if(session('update'))
    <div class="alert alert-success" role="alert">
      {{ session('update') }}
    </div>
  @endif

  @if(session('delete'))
    <div class="alert alert-danger" role="alert">
      {{ session('delete') }}
    </div>
  @endif

  @yield('content')
</main>


<footer class="my-5 pt-5 text-muted text-center text-small">
  @include('components.footer') 

</footer>

</body>
</html>
