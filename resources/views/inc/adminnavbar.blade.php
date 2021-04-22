<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" >
    <div class="container">
        <p class="navbar-brand">
            Administratoriaus panelė
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
                    <li class="nav-item"><a href="/admin" class="nav-link">Pagrindinis langas</a></li>
                    <li class="nav-item"><a href="/adminUsers" class="nav-link">Vartotojai</a></li>
                    <li class="nav-item"><a href="/adminVip" class="nav-link">Moderatoriai</a></li>
                    <li class="nav-item"><a href="/adminPosts" class="nav-link">Visi įrašai</a></li>
                    <li class="nav-item"><a href="/homepageEdit" class="nav-link">Redaguoti titulinį puslapį</a></li>
                    @if(auth()->user()->status == 'vip' || auth()->user()->status == 'admin')
                        <li class="nav-item"><a href="/posts/create" class="nav-link">Sukurti įrašą</a></li>
                    @endif
                </ul>
        @endauth
        <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->

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
            </ul>
        </div>
    </div>
</nav>
