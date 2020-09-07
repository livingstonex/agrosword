<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="/">
        <h3 class="mb-0">
          <b><span class="text-primary">Agro</span><span class="text-muted">Sword</span></b>
        </h3 class="mb-0">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item pr-md-3">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item pr-md-3">
            <a class="nav-link" href="{{ route('pages.about') }}">About Us</a>
          </li>
          <li class="nav-item pr-md-3">
            <a class="nav-link" href="{{ route('pages.contact') }}">Contact Us</a>
          </li>
        </ul>
        @guest
          <a href="{{ route('login') }}" class="btn btn-outline-primary mr-3">Login</a>
          <a href="{{ route('register') }}" class="btn btn-primary text-white">Sign Up</a>
        @endguest

        @auth
          <div class="dropdown">
            <span class="dropdown-toggle pointer" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ auth()->user()->name }}
            </span>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
          </div>
        @endauth
      </div>
    </div>
  </nav>