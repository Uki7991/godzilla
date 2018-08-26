<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="canonical" href="{{ URL::current() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>

    <header class="sticky-top">
        <nav class="navbar navbar-expand-md navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/images/logo_transparent.png" class="logo" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a href="" class="nav-link text-capitalize">главная</a>
                        </li>
                        <li class="nav-item">
                            <a href="#pizza" class="nav-link text-capitalize">пицца</a>
                        </li>
                        <li class="nav-item">
                            <a href="#sushi" class="nav-link text-capitalize">суши</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-capitalize">меню</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-capitalize">контакты</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">0(550) 131-122</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">0(709) 551-122</a>
                        </li>
                        @auth

                            <li class="nav-item dropdown">


                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="{{ route('options') }}" class="dropdown-item">Admin panel</a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-dark text-white">
        <div class="container">
            <div class="row py-5 justify-content-around">
                <div class="col-auto">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light text-capitalize underline-link">главная</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light text-capitalize underline-link">пицца</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light text-capitalize underline-link">суши</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light text-capitalize underline-link">меню</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light text-capitalize underline-link">контакты</a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light text-capitalize underline-link">главная</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light text-capitalize underline-link">пицца</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light text-capitalize underline-link">суши</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light text-capitalize underline-link">меню</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light text-capitalize underline-link">контакты</a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light text-capitalize underline-link">главная</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light text-capitalize underline-link">пицца</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light text-capitalize underline-link">суши</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light text-capitalize underline-link">меню</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light text-capitalize underline-link">контакты</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row justify-content-center">
                <a href="https://mount.kg" class="nav-link card-product transition-500 small text-light mb-4">Made with <span class="text-danger">&hearts;</span> by Mount</a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/smoothscroll.min.js') }}"></script>

    @stack('scripts')
</body>
</html>
