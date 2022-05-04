<div class="container py-3" style="display: flex">

  <div>
    <a href="/home" class="me-lg-auto text-dark text-decoration-none" >
      <svg class="bi me-1" width="10" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-2">{{ config('app.name', 'Laravel') }}</span>
    </a>
  </div>

  <ul class="nav" style="margin-right: 5%; margin-left: auto;">
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

