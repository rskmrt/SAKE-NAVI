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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<div class="sticky-top">
  <nav class="py-2 bg-light border-bottom">
    <div class="container d-flex flex-wrap">
      <ul class="nav me-auto">
        <li class="nav-item"><a href="/home" class="nav-link link-dark px-2 active" aria-current="page">カクテル一覧</a></li>
        @auth
        <li class="nav-item"><a href="/home/can" class="nav-link link-dark px-2">作れる</a></li>
        <li class="nav-item"><a href="/home/original" class="nav-link link-dark px-2">オリジナルカクテル</a></li>
        <li class="nav-item"><a href="/home/favolite" class="nav-link link-dark px-2">お気に入り</a></li
        @endauth
        <li class="nav-item"><a href="/home/faq" class="nav-link link-dark px-2">お問い合わせ</a></li>
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
      <a href="" class="Footer-Inner-Logo"><img src="ロゴ画像のURL" alt=""></a>
      <div class="Footer-Inner-List">
        <a href="" class="Footer-Inner-List-Item">HOME</a>
        <a href="" class="Footer-Inner-List-Item">COMPANY</a>
        <a href="" class="Footer-Inner-List-Item">SERVICE</a>
        <a href="" class="Footer-Inner-List-Item">RECRUIT</a>
      </div>
      <div class="Footer-Inner-CopyRight">
        ©2022 Example,Inc.
      </div>
    </div>
  </div>
</div>

</html>
