<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
    <div class="container-fluid">
      <span class="navbar-toggler-icon mr-3 pointer" @click="toggleMenu"></span>
      <a class="navbar-brand" href="/">
        <h3 class="mb-0">
          <b><span class="text-primary">Agro</span><span class="text-muted">Sword</span></b>
        </h3 class="mb-0">
      </a>

      <div class="ml-auto">
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
      </div>
    </div>
  </nav>