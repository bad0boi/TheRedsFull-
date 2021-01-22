@extends('layout')

@section('news')



    <div id="wrapper" class="p-5">

        <div class="container">

        <h1>Update Article: Somethings changed </h1>
        <br>

            @can('edit_article')

        <form method="POST" action="/articles/{{$article->id}}">
        @csrf <!--cross site request forgery ref: 419 error-->
            @method('PUT') <!--Hidden request of telling Laravel + Browser to actually do a PUT request as current web browser only
                                really understand GET and POST atm-->


            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" id="title" name="title" value="{{ $article->title }}"> <!--ID and name essential-->
            </div>

            <div class="form-group">
                <label for="excerpt">Excerpt</label>

                <input class="form-control" type="text" id="excerpt" name="excerpt" value="{{$article->excerpt}}">

            </div>


            <div class="form-group">

                <label for="body">Body</label>

                <textarea class="form-control" name="body" id="body" rows="3"> {{$article->body}}</textarea>

            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>

                @endcan


        </div>
    </div>





@endsection
