@extends('layout')

@section('allusers')



    <!-- Search Bar -->
{{--    <div class="search-container">--}}
{{--        <form action="/">--}}
{{--            <input type="text" placeholder="Search.." name="search">--}}
{{--            <button type="submit"><i class="fa fa-search"></i></button>--}}
{{--        </form>--}}



    @foreach($profiles as $profile)

        <div class="wrapper">
            <div id="allUsersSection" class="container" style="background-color: #f7f7f7;">
                <div id="userSection" class="p-2">
                    <img id="avatar" style="height: 50px; width: 50px;" src="/images/avatar/{{ $profile->avatar }}">
                        <a href="/profile/{{ $profile->id }}"> <h1 style="color: #2C383B;"> @ {{$profile->name}}</h1> </a>


                </div>
            </div>
        </div>








    @endforeach

    @endsection
