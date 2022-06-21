<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>VideoClub "FARAÓN & PRIMITIVE"</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container text-center flex">
                <a class="navbar-brand" style="color: red" href="{{ url('/') }}">
                    <img src={{url("img/primitive.png")}} alt="" width="150" height="75">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a href="{{url("actores")}}" class="nav-link @yield("actores_active")" data-toggle="tooltip" title="Ir a la seccion de Actores">Actores</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{url("cintas")}}" class="nav-link @yield("cintas_active")" data-toggle="tooltip" title="Ir a la seccion de Cintas">Cintas</a>
                            </li>

                            {{--<li class="nav-item">
                                <a href="{{url("devoluciones")}}" class="nav-link @yield("devoluciones_active")" data-toggle="tooltip" title="Ir a la seccion de Devoluciones">Devoluciones</a>
                            </li>--}}

                            <li class="nav-item">
                                <a href="{{url("directores")}}" class="nav-link @yield("directores_active")" data-toggle="tooltip" title="Ir a la seccion de Directores">Directores</a>
                            </li>
                            {{--
                            <li class="nav-item">
                                <a href="{{url("esperas")}}" class="nav-link @yield("esperas_active")" data-toggle="tooltip" title="Ir a la seccion de Esperas">Esperas</a>
                            </li>
                            --}}
                            <li class="nav-item">
                                <a href="{{url("peliculas")}}" class="nav-link @yield("peliculas_active")" data-toggle="tooltip" title="Ir a la seccion de Peliculas">Peliculas</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{url("registro_genero")}}" class="nav-link @yield("generos_active")" data-toggle="tooltip" title="Ir a la seccion de Generos">Generos</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{url("personas")}}" class="nav-link @yield("personas_active")" data-toggle="tooltip" title="Ir a la seccion de Personas">Personas</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{url("prestamos")}}" class="nav-link @yield("prestamos_active")" data-toggle="tooltip" title="Ir a la seccion de Prestamos">Prestamos</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{url("socios")}}" class="nav-link @yield("socios_active")" data-toggle="tooltip" title="Ir a la seccion de socios">Socios</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
