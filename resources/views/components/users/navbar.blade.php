<nav class="py-2 bg-light border-bottom">
  <div class="container d-flex flex-wrap">

    <div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="material-symbols-rounded">search</span>
      </button>
    </div>

    <div style="overflow: scroll">
      <ul class="nav me-auto" style="width: 40em">
        <li class="nav-item"><a href="/home" class="nav-link link-dark px-2 active" aria-current="page">カクテル一覧</a></li>
        <li class="nav-item"><a href="/favorite" class="nav-link link-dark px-2">お気に入り</a></li>
        <li class="nav-item"><a href="/can-make" class="nav-link link-dark px-2">作れるカクテル</a></li>
        <li class="nav-item"><a href="/original" class="nav-link link-dark px-2">オリジナルカクテル</a></li>
      </ul>
    </div>

    <div>
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
    
  </div>
</nav>