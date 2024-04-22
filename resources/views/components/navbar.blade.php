<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Songs</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{route('welcome')}}">Home</a>
                  </li> --}}
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('songs.index') }}">Le tue canzoni</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('songs.create') }}">Inserisci qui la tua canzone preferita!</a>
                </li>
            </ul>
            @auth
                {{ Auth::user()->name }}
                <form method="POST" action="{{ route('logout') }}">@csrf
                    <button type="submit">Logout</button>
                </form>
            @else
                <div>
                    <a class="text-decoration-none" href="{{ route('login') }}">Login</a>
                    <a class="text-decoration-none" href="{{ route('register') }}">Registrati</a>
                </div>
            @endauth
        </div>
    </div>
</nav>


