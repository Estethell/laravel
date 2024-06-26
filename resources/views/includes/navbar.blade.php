<nav class="navbar navbar-expand-lg bg-secondary-subtle">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">EpiFlex</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Attività
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('palestra.reservation.show') }}">Lista iscrizioni</a></li>
                       
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">About us</a>
                </li>
                @auth
                    {{-- se utente loggato --}}
                    <li class="nav-item">
                        <a href="{{ route('palestra.activities') }}" class="nav-link">
                            Lista corsi
                        </a>
                    </li>
                @endauth
  
                {{-- @guest
                    se utente non loggato
                @endguest --}}
            </ul>
  
            <ul class="navbar-nav mb-2 mb-lg-0">
                @auth
                    {{-- se utente loggato --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    {{-- altrimenti, se l'utente non è loggato --}}
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">
                            Log in
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">
                            Register
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
  </nav>

  <div class="container">





