<nav class="py-2 bg-info border-bottom">
  <div class="container" style="display: flex">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
      <span class="material-symbols-rounded">search</span>
    </button>

    <div style="overflow: auto">
      <ul class="nav me-auto" style="width: 14em">
        <li class="nav-item"><a href="/admin" class="nav-link link-dark px-2 active" aria-current="page">カクテル一覧</a></li>
        <li class="nav-item"><a href="/admin/users" class="nav-link link-dark px-2">ユーザ一覧</a></li>
      </ul>
    </div>

    <ul class="nav" style="margin: 0; margin-left: auto;">
      @guest
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link link-dark px-2 dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          guest<span class="caret"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('login') }}">
            {{ __('Login') }}
          </a>
          @if (Route::has('register'))
          <a class="dropdown-item" href="{{ route('register') }}">
            {{ __('register') }}
          </a>
          @endif
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </li>

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