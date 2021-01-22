<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Ryan Kearney , B00709595 , COM559-->



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">  <!-- Bootstraps Mobile First scaling -->

    <!--STYLING-->

    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="/css/fonts.css" rel="stylesheet"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!--Initially from the layouts.app-->
    <link rel="stylesheet" href="/css/gallery.css"> <!--/gallery-->
    <link rel="stylesheet" href="/css/default.css">
    <link rel="stylesheet" href="/css/profile.css"> <!--/profile-->
    <link rel="stylesheet" href="/css/contact.css"> <!--/contact-->





    <!-- If you want a specific link or CDN to be only appearing on specific page,
    you must :yield('head') on the layout and add new section in the specific page
    called :section('head')-->


    <style>

        /* Main settings for HTML + BODY */

            html, body {
                background-color: #FFFFFF;
                background-repeat: no-repeat;
                position: center;
                background-size: cover;
                color: indianred;
                font-family: 'Open Sans', sans-serif;
                font-weight: 200;

                margin: 0;
                scroll-behavior: smooth;
                max-width: 100%;     /* Max-width 100% and overflowX hidden = Disabling horizontal scroll -_- */
                overflow-x: hidden;
            }

            h1, h2, h3 {
                color:indianred;
            }

    </style>


</head>
<body>

<!-- Custom Navbar via Bootstrap -->
<div id="main-navbar">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Logo on the bar -->
         <a href="/welcome"> <img src="/svg/TheRedsLogo.svg" style="max-height: 70px; height: 70px;"> </a>
        <!-- Toggle Dropdown -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item active">
                    <a class="nav-link" href="/home">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() === 'allusers' ? 'current_page_item' : ''  }}" href="/allusers">THE FAMILY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/profile">PROFILE</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/news">NEWS</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/squads">SQUAD</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/entertainment">ENTERTAINMENT</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/leaguetable">TABLE</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="/story">STORY</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/articles">SHOUTS</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/gallery">GALLERY</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/contact">CONTACT</a>
                </li>


                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <img src="/images/avatar/{{ Auth::user()->avatar }}" alt="profile_picture" style="width: 32px; height:32px; border-radius: 50%;"> <!-- Avatar -->
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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

            </ul>
        </div>
    </nav>
</div>

<!--NAV-BAR-->
<!-- default shipping w/ laravel-->

{{--<div id="app">--}}
{{--    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--        <div class="container">--}}
{{--            <a class="navbar-brand d-flex" href="{{ url('/') }}">--}}
{{--                <img src="/svg/TheRedsLogo.svg" style="max-height: 70px;">--}}

{{--            </a>--}}
{{--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}

{{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                <!-- Left Side Of Navbar -->--}}
{{--                <ul class="navbar-nav mr-auto">--}}

{{--                </ul>--}}

{{--                <!-- Right Side Of Navbar -->--}}
{{--                <ul class="navbar-nav ml-auto">--}}
{{--                    <!-- Authentication Links -->--}}
{{--                    @guest--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                        </li>--}}
{{--                        @if (Route::has('register'))--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                            </li>--}}
{{--                        @endif--}}
{{--                    @else--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                <img src="/images/avatar/{{ Auth::user()->avatar }}" alt="profile_picture" style="width: 32px; height:32px;"> <!-- Avatar -->--}}
{{--                                {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                            </a>--}}

{{--                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                   onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                    {{ __('Logout') }}--}}
{{--                                </a>--}}

{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    @endguest--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}
    <!--END of default navbar from Laravel6 -->

    <div id="header-wrapper">


    <!-- Yields -->

            @yield('home-head')
            @yield('userprofile')
            @yield('allusers')
            @yield('home')
            @yield('about')
            @yield('header')
            @yield('welcome')
            @yield('news')
            @yield('story')
            @yield('gallery')
            @yield('profile')
            @yield('contact')
            @yield('footer')
            @yield('squads')
            @yield('playerDetails')
            @yield('entertainment')
            @yield('league-table')

    <!--COOKIES / LOCAL STORAGE-->

    <div id="termsandconditions">
        <p style="color: white;">This website uses local storage, agree to the Terms and Condition</p>
            <button id="acceptBtn" class="btn btn-primary">Accept</button>
    </div>

        </div> <!-- header-wrapper -->

            <!--SCRIPTS-->

            <script src="{{ asset('js/app.js') }}" ></script> <!--Initially from the layouts.app-->
            <script type="text/javascript" src="{{URL::to('/js/top-goal-scorers.js')}}"> </script>
            <script type="text/javascript" src="{{URL::to('/js/weatherapi.js')}}"> </script>
            <script type="text/javascript" src="{{URL::to('/js/guardian-news-api.js')}}"> </script>
            <script type="text/javascript" src="{{URL::to('/js/liverpoolcity-news.js')}}"> </script>
            <script type="text/javascript" src="{{URL::to('/js/covidApi.js')}}"> </script>
            <script type="text/javascript" src="{{URL::to('/js/top-three.js')}}"> </script>
            <script type="text/javascript" src="{{URL::to('/js/entertainment.js')}}"> </script>
            <script type="text/javascript" src="{{URL::to('/js/full-league-table.js')}}"> </script>
            <script type="text/javascript" src="{{URL::to('/js/nxt-game.js')}}"> </script>

    </body>
</html>
