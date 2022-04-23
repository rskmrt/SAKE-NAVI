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

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/home.css') }}" rel="stylesheet">
  <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
  <link href="{{ asset('css/ingredients.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<div class="sticky-top">

  <header class="bg-light">
    <div class="collapse " id="navbarHeader">
      <div class="container">
        <div class="row">
          <h4 class="text-muted">Search</h4>

          <div class="col-sm-8 col-md-3 py-2">
            <form method="GET" action="{{ route('home') }}">
              <div class="input-group">
                <input type="text" class="form-control input-group-prepend" placeholder="カクテル名、材料で検索" name="text" value="@if (isset($text)) {{ $text }} @endif">
                <button class="btn btn-primary" type="submit">
                  <span class="material-icons">search</span>  
                </button>
              </div>
            </form>
          </div>

          <div class="col-sm-4 offset-md-1 py-4">
            <ul class="list-unstyled">
              <li><a href="#" class="">Twitter でフォローする</a></li>
              <li><a href="#" class="">Facebook でいいねする</a></li>
              <li><a href="#" class="">Email を送る</a></li>
            </ul>
          </div>
      </div>
      </div>
    </div>
  </header>


  <nav class="py-2 bg-light border-bottom">
    <div class="container d-flex flex-wrap">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="material-symbols-rounded">
          search
          </span>
      </button>
      <ul class="nav me-auto">
        <li class="nav-item"><a href="/home" class="nav-link link-dark px-2 active" aria-current="page">カクテル一覧</a></li>
        @auth
        <li class="nav-item"><a href="/favorite" class="nav-link link-dark px-2">お気に入り</a></li>
        <li class="nav-item"><a href="/can-make" class="nav-link link-dark px-2">作れるカクテル</a></li>
        <li class="nav-item"><a href="/original" class="nav-link link-dark px-2">オリジナルカクテル</a></li>
        @endauth
        <li class="nav-item"><a href="/contact" class="nav-link link-dark px-2">お問い合わせ</a></li>
      </ul>
      <ul class="nav">
        @guest
          <li class="nav-item"><a href="{{ route('login') }}" class="nav-link link-dark px-2">{{ __('Login') }}</a></li>
          @if (Route::has('register'))
          <li class="nav-item"><a href="{{ route('register') }}" class="nav-link link-dark px-2">{{ __('Register') }}</a></li>
          @endif
        @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link link-dark px-2 dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
        @endguest 
      </ul>
    </div>
  </nav>
</div>


<header class="py-3 mb-4 ">
  <div class="container d-flex flex-wrap justify-content-center">
    <a href="/home" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
      <svg class="bi me-1" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-2"> <strong>{{ config('app.name', 'Laravel') }}</strong></span>
    </a>
    
  </div>
</header>


<body>
  <div id="app">
    <main class="py-0">
        @yield('content')
    </main>
  </div>
</body>

<div class="FooterSection">
  <div class="Footer">
    <div class="Footer-Inner">
      <div class="Footer-Inner-CopyRight">
        ©2022 Example,Inc.
      </div>
    </div>
  </div>
</div>


</html>
