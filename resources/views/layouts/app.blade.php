<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Pronto - Client Management Software</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="client management, consultant management software, pronto app" name="keywords">
    <meta content="" name="description">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    @yield('meta')

</head>

<body>

<!--==========================
Header
============================-->
<header id="header" class="fixed-top">
    <div class="container">

        <div class="logo float-left">
            <h1 class="text-light"><a href="/" class="scrollto"><img src="img/logo-small-color.png" alt=""
                                                                     class="img-fluid mr-2 mt-1"><span style="letter-spacing: 2px; text-transform: none !important;">Pronto</span></a>
            </h1>

        </div>

        <nav class="main-nav float-right d-none d-lg-block">
            <ul>
                <li class="active"><a href="#intro">Home</a></li>
                <li><a href="#about">Overview</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#clients">Demo</a></li>
                <li><a href="#pricing">Pricing</a></li>

                @guest
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="btn-sign-up">{{ __('Register') }}</a></li>
                    @endif
                    <li><a href="{{ route('login') }}" class="btn-login">{{ __('Login') }}</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/dashboard">Dashboard</a>
                            <div class="dropdown-divider"></div>
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
                @endguest

            </ul>
        </nav><!-- .main-nav -->
    </div>
</header><!-- #header -->

@yield('content')


@yield('bottom-meta')


</body>
</html>
