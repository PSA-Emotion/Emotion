@auth()
@if(auth()->user()->status == 'guest')
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" >
    @elseif(auth()->user()->status == 'vip')
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #a2f7a4">
            @else
                <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #ffc433">
@endif
                    @endauth
                    @guest
                    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" >
                        @endguest
                <div class="container">
        <p class="navbar-brand">
            Emocija.smile
        </p>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

@auth
                @if(auth()->user()->banned == 0)
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/dashboard" class="nav-link">Pagrindinis puslapis</a></li>
                <li class="nav-item"><a href="/posts" class="nav-link">Įrašai</a></li>
                <li class="nav-item"><a href="/first" class="nav-link">Apie mus</a></li>
                <li class="nav-item"><a href="/profile" class="nav-link">Mano profilis</a></li>
                @if(auth()->user()->muted == 0)
                <li class="nav-item"><a href="/posts/create" class="nav-link">Sukurti įrašą</a></li>
                @else
                    <li class="nav-item">
                        <a href="#" class="nav-link btn btn-warning">Jūs easate užtildytas</a>
                    </li>
                @endif
                @if(auth()->user()->status == 'admin')
                    <li class="nav-item"><a href="/admin" class="nav-link">Admin panelė</a></li>
                @endif
                @if(auth()->user()->status == 'vip')
                    <li class="nav-item"><a href="/vip" class="nav-link">Moderatoriaus panelė</a></li>
                @endif
                @else
                    <h1>BANNED</h1>
                    @endif
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
                    <img style="width:50px; height:50px; vertical-align: middle; border-radius: 50% " src="/storage/profile_images/{{auth()->user()->profile_image}}">
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
