<div class="container">
  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <span class="fs-4">{{config('app.name', 'LSAPP')}}</span>
    </a>


    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="/" class="nav-link px-2 link-dark">Home</a></li>
      <li><a href="/about" class="nav-link px-2 link-dark">About</a></li>
      <li><a href="/services" class="nav-link px-2 link-dark">Services</a></li>
      <li><a href="/posts" class="nav-link px-2 link-dark">Posts</a></li>
    </ul>
    

    <div class="col-md-3 text-end">
      @guest
        <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
        @if (Route::has('register'))
          <a class="btn btn-success" href="{{ route('register') }}">{{ __('Register') }}</a>
        @endif
        @else
          <li class="nav-item dropdown float-end">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/home">Dashoboard</a>
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
      @endguest
    </div>
  </header>
</div>