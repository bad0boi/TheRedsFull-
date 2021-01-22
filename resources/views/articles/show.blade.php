@extends('layout')

@section('news')



    <!--Single specific ID Article VIEW page-->

    <div id="wrapper" class="p-5">

        <div class="container">
            <div id="shoutView">
                <h1 style="color: #2C383B;">{{$article->title}}</h1>
                    <h2>{{$article->excerpt}}</h2>
                         <p> {{$article->body}}  </p>
                              <a href="/profile/{{$article->user_id}}"> <p> Shouted by userID: {{ $article->user_id  }} </a> </p>
                                    <small>Created at {{ $article->created_at }}</small>
                                <br>

                                         <!-- Tags section-->
                                <h3> Tags</h3>
                                    <p>
                                        @foreach($article->tags as $tag)

                                            <a href="/articles?tag={{ $tag->name }}"> ,{{ $tag->name }}</a>

                                        @endforeach
                                    </p>

        </div>
    </div>







@endsection






