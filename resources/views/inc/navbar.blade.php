<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" >
    <div class="container">
        <p class="navbar-brand">
            {{ config('app.name', 'Emocija.smile') }}
        </p>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

@auth
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/dashboard" class="nav-link active">Pagrindinis puslapis</a></li>
                <li class="nav-item"><a href="/posts" class="nav-link">Irašai</a></li>
                <li class="nav-item"><a href="#" class="nav-link">----</a></li>
                <li class="nav-item"><a href="/first" class="nav-link">Apie mus</a></li>
                <li class="nav-item"><a href="/profile" class="nav-link">Mano profilis</a></li>
                <li class="nav-item"><a href="/posts/create" class="nav-link btn-success">Sukurti įrašą</a></li>
            </ul>
        @endauth
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Prisijungti') }}</a>
                        </li>
                    @endif

                {{--
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registruotis') }}</a>
                        </li>
                    @endif
                --}}
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Atsijungti') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
