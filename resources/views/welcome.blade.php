@extends('welcome-layout')
@section('welcome')


<!-- LOGIN SECTION @ The top right of the screen  -->
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Become an LFC speaker</a>
                @endif
            @endauth
        </div>
@endif



<!--BODY-->

    <div class="content">

        <div class=" m-b-md p-5">
            <div class="container">
            <img src="/svg/TheRedsLogo.svg" style="max-height: 300px; max-width: 200px;" alt="">
            </div>
            <br>
            <!-- User logged-in information -->

            <div class="alert alert-success" role="alert">
                @auth
                    Alright, {{Auth::user()->name }} mate.
                @else
                    Welcome, you must register to see content.
                @endauth
            </div>



            <div id="welcomeInfo" class="container">
                <div class="row alert alert-light" role="alert">
                    <div class="col-sm">
                        The home of the most exclusive LFC family

                    </div>
                    <div class="col-sm">
                        Ensuring to accommodate the most passionate LFC family
                    </div>
                    <div class="col-sm">
                        Enjoy entertaining and informative content exclusively
                    </div>



                </div>


            </div>
        </div>












    </div>

    @endsection
