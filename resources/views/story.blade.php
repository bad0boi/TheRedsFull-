@extends('layout')

@section('story')

<div class="wrapper">
    <!--Two Columns Main+Sidebar-->

    <div class="container">

        <div class="row">
            <!--1st Column // Our very own exclusive story // Hard-coded section -->

            <div id="exclusiveNews" class="col-sm">
                <h1 style="color: black;">Todays Exclusive news:
                    Premier League set to start by June 30th</h1>
                <h2 style="color: indianred;"> Author: The Reds</h2>
                <div class="news-img">
                    <img src="https://i.dailymail.co.uk/1s/2020/04/30/11/27836166-0-image-a-3_1588241728593.jpg" style="width: 634; height: 423; " alt="">
                </div>
                <br>
                <p> With the recent reports of other European major leagues being cancelled,
                many speculations has been spoken about what the outcome for the Premier League will be.
                Ligue 1 being cancelled sees PSG being crowned champions on each three scenarios that are being published online. </p>

                <p>This outcome will be a massive relief for many Liverpool fans out there as the daunting suggestion of having the EPL null and void
                has been spoken about it for months. Though, the English Premier League is a completely different calibre compared to other major leagues
                due to its massive income of nearly 900 million euros projected to be lost if the league were to be cancelled. This gigantic sum of money
                will without a doubt be a major factor as to why the league will most likely not be cancelled and instead be resumed one way or another. </p>

                <p> The news of PSG being awarded the title will 100% allow many Liverpool fans around the world to relax, given the financial status of the
                Premier League, as well as its prestige status, it will just be a matter of when Liverpool become the Premier League champions for the first time.</p>
            </div>

            <!--2nd Column // Shouts area from users -->

            <div class="col-sm p-5">
                <h3 style="color: #1b1e21;">Top 3 most recent Shouts</h3>
                    <br>
                        <ul class="style1">

                    @foreach($articles as $article) <!--References back to App\Article + articles table -->
                        <li class="first">
                            <h3>
                                <a href="/articles/{{$article->id}}"> {{$article->title}} </a>
                            </h3>
                                <p><a href="/articles/{{$article->id}}">{{$article->excerpt}}</a></p>
                                     <p>{{$article->body}}</p>
                            <br>
                            <!--News Author-->
                            <a href="/profile/{{ $article->user_id }}"> <p>By user: {{ $article->user_id }}</p> </a> <img style="width: 80px; height: 50px;" src="svg/TheRedsLogo.svg" alt="The Reds logo">
                            <br>
                            <small>Shouted at {{ $article->created_at }}</small>
                        </li>
                        @endforeach

                    </ul>


            </div>
        </div>
    </div>
</div>













@endsection
