<nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #ffc433">
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
                    <li class="nav-item"><a href="/admin" class="nav-link">Admin langas</a></li>
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

                @if(auth()->user()->status == 'admin')
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                @elseif(auth()->user()->status == 'vip')
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
                        <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
                        <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                    </svg>
                @endif
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
