@extends('layout')

@section('news')

    <!-- Shows ALL articles VIEW page-->

    <div id="wrapper" class="p-5">

        <div class="index-container ">

            <!-- Shouts introduction alert display -->

            <div class="alert alert-primary" role="alert">
                <h4> Welcome to Shouts {{ Auth::user()->name }}</h4>
                    <p> This is where you will find all other users recent opinions and thoughts regarding LFC activities and games</p>
                    <p> Let us know how you feel :) </p>
            </div>

            <!-- Shouts feed introduction -->

            <div id="shoutheader">
                <h1>Shouts Feed: How are the fans feeling?</h1>
                <button style="float: right; height: 50px; width: 150px;"  type="button"class="btn btn-warning">
                    <a href="/articles/create">SHOUT!</a>
                </button>

            </div>

            <div>
                <p class="joined-text"> Total Shouts: </p>

            </div>




        @forelse ($articles as $article)  <!-- forelse is just like foreach but with an Else function -->
            <h1 class="pt-5">
                <a href="/articles/{{$article->id}}">
                     {{$article->title}}
            </a>
             </h1>
                <h2> {{$article->excerpt}}</h2>
                     <p> {{$article->body}} </p>

            <br>

        <!-- Footer information: Logo, UserID#, ArticleID#, User's favourite player -->

            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">
                        <img src="/svg/TheRedsLogo.svg" style="width: 50px; height: 50px;" alt="Thumbnail example">
                    </th>
                    <th><img src="" alt=""></th>
                    <th scope="col">
                        <a href="/profile/{{ $article->user_id }}"> <small>By user:</small> {{ $article->user_id }}  </a>
                    </th>
                    <th scope="col"><small>Article:</small> {{ $article->id }}</th>
                    <th scope="col"><small>Created at </small>   {{ $article->created_at }}</th>

                        <!-- Liked/Disliked Display // ** issue ** -->

                        <!-- Like -->

                        <form method="POST" action="/articles/{{ $article->id }}/like">
                            @csrf
                        <div class="flex align-items-center">

                            <img class src="/svg/like.svg" style="width: 100px; height: 80px;" alt="like">
                            <button type="submit"> {{ $article->likes->count() }}
                            </button> <!-- Like count from database -->

                        </div>
                        </form>


                        <!-- Dislike -->


                        <form method="POST" action="/articles/{{ $article->id }}/like">
                            @csrf
                            @method('DELETE')


                        <div class="flex align-items-center">
                            <!-- Dislike -->
                            <img src="/svg/dislike.svg" style="width: 100px; height: 80px;" alt="like">
                            <button type="submit"> {{ $article->dislikes->count() }}
                            </button> <!-- Like count from database -->
                          </div>
                        </form>


                </tr>
                </thead>

            </table>


        @empty

            <p> No relevant articles yet ...</p>



    @endforelse


        </div>
    </div>





@endsection






