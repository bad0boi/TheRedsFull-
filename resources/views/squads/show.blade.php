@extends('layout')

@section('playerDetails')



    <!--Single specific ID Article VIEW page-->

    <div id="wrapper" class="p-5">

        <div class="container w-50" style="text-align: center;">
            <div id="shoutView">
                <h1>{{ $squad->name }}</h1>
                <h2>2019/2020 Season</h2>
                    <p>Age: {{ $squad->age }}</p>
                        <p> Nationality: {{ $squad->nationality }}</p>
                            <p>Position: {{ $squad->position }}</p>
                                <p>Height: {{ $squad->height }}</p>
                                    <p>Jersey: {{ $squad->jersey }}</p>
                                <h2>Premier League Record: </h2>
                                        <p>Goals: {{ $squad->goals }}</p>
                                            <p>Assists: {{ $squad->assists }}</p>
                                                <a href="{{ $squad->social }}" target="_blank">{{ $squad->social }}</a>
            </div>
        </div>



@endsection
