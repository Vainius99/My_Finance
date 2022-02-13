<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body background="{{ asset('assets/background.jpg') }}" style="background-size: 230vh;">
    {{-- <div class="col-md-4 col-lg-4 col-sm-12">
        @include('layouts.sidebar')
    </div> --}}
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-black shadow-sm">
            <div class="container">
                <div class="logo">
                    <svg  xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="200" height="80" preserveAspectRatio="xMidYMid meet" viewBox="0 0 40 20">
                        <path d="M10.5 6l-2-2H2l.7 9.5L4.2 6h6.3zM5 7L3 17h13l2-10H5z" fill="yellow"/>
                        <text x="27%" y="65%" dominant-baseline="middle" text-anchor="middle" font-size="4" font-weight="bold";>Mano</text>
                        <text x="63%" y="65%" dominant-baseline="middle" text-anchor="middle" font-size="4" fill="#ffffff" >Finansai</text>
                    </svg>
                </div>
                <a style="opacity: 0">home</a>
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
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
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
        @if(Auth::check()) {
            <div class="col-md-4 col-lg-4 col-sm-12">
                @include('layouts.sidebar')
            </div>
        }
        @endif
        <main class="py-4 px-5">
            @yield('content')
        </main>
    </div>
</body>
</html>
