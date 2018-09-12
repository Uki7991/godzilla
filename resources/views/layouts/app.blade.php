<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}"/>
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('images/logo.png') }}"/>
    <meta name="msapplication-square70x70logo" content="{{ asset('images/logo.png') }}"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ $option->description }}">
    <meta name="keys" content="{{ $option->keys }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="canonical" href="{{ URL::current() }}">
    <link rel="icon" href="{{ asset('images/cropped-1-32x32.png') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>

    <header class="sticky-top shadow-sm">
        <nav class="navbar navbar-expand-md navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/images/logo_transparent.png" class="logo" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a href="" class="nav-link text-capitalize">главная</a>
                        </li>
                        @if(count($types) > 4)
                            <li class="nav-item dropdown">
                                <a href="" class="nav-link text-capitalize dropdown-toggle" data-toggle="dropdown">меню <span class="caret"></span></a>

                                <div class="dropdown-menu">
                                    @foreach($types as $type)
                                        @if(count($type->products) > 0)
                                            <a href="/#{{ $type->slug }}" class="dropdown-item text-capitalize">{{ $type->name }}</a>
                                        @endif
                                    @endforeach
                                </div>
                            </li>
                        @else
                            @foreach($types as $type)
                                @if(count($type->products) > 0)
                                    <li class="nav-item">
                                        <a href="/#{{ $type->slug }}" class="nav-link text-capitalize">{{ $type->name }}</a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                        <li class="nav-item">
                            <a href="#contacts" class="nav-link text-capitalize">контакты</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">
                        <li class="nav-item d-md-none d-lg-block">
                            <a class="nav-link font-weight-bold text-danger h5" href="tel:{{ $option->tel1 }}">{{ $option->tel1 }}</a>
                        </li>
                        <li class="nav-item d-md-none d-lg-block">
                            <a class="nav-link font-weight-bold text-danger h5" href="tel:{{ $option->tel2 }}">{{ $option->tel2 }}</a>
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

    <footer id="contacts" class="bg-dark text-white font-weight-light">
        <div class="container">
            <div class="row py-5 justify-content-around">
                <div class="col-12 col-md-auto text-center">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light text-capitalize underline-link">главная</a>
                        </li>
                        @foreach($types as $type)
                            @if(count($type->products) > 0)
                            <li class="nav-item">
                                <a href="#{{ $type->slug }}" class="nav-link text-capitalize text-light">{{ $type->name }}</a>
                            </li>
                            @endif
                        @endforeach
                        <li class="nav-item">
                            <a href="#contacts" class="nav-link text-light text-capitalize underline-link">контакты</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-auto text-center">
                    @if($option->tel1 || $option->tel2)

                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a href="tel:{{ $option->tel1 }}" class="nav-link text-light underline-link">{{ $option->tel1 }}</a>
                            </li>
                            <li class="nav-item">
                                <a href="tel:{{ $option->tel2 }}" class="nav-link text-light underline-link">{{ $option->tel2 }}</a>
                            </li>
                        </ul>

                    @endif
                    @if($option->tel3 || $option->tel4)

                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a href="tel:{{ $option->tel3 }}" class="nav-link text-light underline-link">{{ $option->tel3 }}</a>
                            </li>
                            <li class="nav-item">
                                <a href="tel:{{ $option->tel4 }}" class="nav-link text-light underline-link">{{ $option->tel4 }}</a>
                            </li>
                        </ul>

                    @endif
                    @if($option->email)

                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a href="mailto:{{ $option->email }}" class="nav-link text-light underline-link">{{ $option->email }}</a>
                            </li>
                        </ul>

                    @endif
                    @if($option->instagram || $option->whatsapp)

                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="{{ $option->instagram }}" target="_blank" class="nav-link text-light underline-link"><i class="fab fa-lg fa-instagram"></i> {{ $option->instagram }}</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ $option->whatsapp }}" target="_blank" class="nav-link text-light underline-link"><i class="fab fa-lg fa-whatsapp"></i> {{ $option->whatsapp }}</a>
                            </li>
                        </ul>

                    @endif
                </div>
            </div>

            <div class="row justify-content-center">
                <a target="_blank" href="https://mount.kg" class="nav-link card-product transition-500 small text-light mb-4">Made with <span class="text-danger">&hearts;</span> by Mount</a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/smoothscroll.min.js') }}"></script>

    @stack('scripts')
</body>
</html>
