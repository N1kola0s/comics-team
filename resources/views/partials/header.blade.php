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

<body>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{route('home')}}">
                    @include('partials.logo')
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link {{Route::currentRouteName() === 'home' ? 'selected' : ''}}" href="{{route('home')}}">Home <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() === 'characters' ? 'selected' : ''}}" href="{{route('characters.index')}}">Characters</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() === 'comics' ? 'selected' : ''}}" href="{{route('comics')}}">Comics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() === 'movies' ? 'selected' : ''}}" href="{{route('movies')}}">Movies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() === 'tv' ? 'selected' : ''}}" href="{{route('tv')}}">Tv</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() === 'games' ? 'selected' : ''}}" href="{{route('games')}}">Games</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() === 'collectibles' ? 'selected' : ''}}" href="{{route('collectibles')}}">collectibles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() === 'videos' ? 'selected' : ''}}" href="{{route('videos')}}">videos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() === 'fans' ? 'selected' : ''}}" href="{{route('fans')}}">fans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() === 'news' ? 'selected' : ''}}" href="{{route('news')}}">news</a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a class="nav-link {{Route::currentRouteName() === 'shop' ? 'selected' : ''}}" href="{{route('shop')}}">shop</a>
                            <a href="#" class="menu_arrow_down"><i class="fa-solid fa-caret-down text-primary"></i></a>
                        </li>

                    </ul>
                    <form class="d-flex my-2 my-lg-0">
                    <input class="form-control pe-2" type="text" placeholder="Search">
                    <button class="btn my-2 my-sm-0" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
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

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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

</body>

</html>