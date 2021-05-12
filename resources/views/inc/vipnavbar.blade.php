<nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #a2f7a4">
    <div class="container">
        <p class="navbar-brand">

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
                    <li class="nav-item"><a href="/dashboard" class="nav-link">Pagrindinis langas</a></li>
                    <li class="nav-item"><a href="/vip" class="nav-link">Moderatoriaus langas</a></li>
                    <li class="nav-item"><a href="/vipMutes" class="nav-link">Atitildymo prašymai</a></li>
                    <li class="nav-item"><a href="/vipBans" class="nav-link">Atblokavimo prašymai</a></li>
                    <li class="nav-item"><a href="/vipPosts" class="nav-link">Ispėti įrašai</a></li>
                    <li class="nav-item"><a href="/posts/create" class="nav-link">Sukurti įrašą</a></li>
                    @if(auth()->user()->status == 'admin')
                        <li class="nav-item"><a href="/admin" class="nav-link">Admin panelė</a></li>
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
