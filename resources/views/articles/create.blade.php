@extends('layout')

@section('news')



    <div id="wrapper" class="p-5">

        <div class="container">

            <h1>Shout your opinion: How you feeling? </h1>
            <p>User: {{ Auth::user()->name }}</p>
        <br>

            <form method="POST" action="/articles">
                @csrf <!--cross site request forgery ref: 419 error-->


                <div class="form-group">
                    <label for="title">Title</label>
                    <input
                        class="form-control"
                        id="title"
                        name="title"
                        placeholder="Name of title"
                        value="{{old('title')}}"> <!--ID and name essential-->

                    @error('title')
                    <p style="color: red;"> {{$errors->first('title')}}</p>  <!--:error is Laravels very own validation component, though you can add 'required'
                                                            in the input markup to also enable validation via browser-->
                    @enderror
                </div>

                <div class="form-group">
                    <label for="excerpt">Excerpt</label>

                    <input class="form-control"
                           type="text"
                           id="excerpt"
                           name="excerpt"
                           placeholder="Reference"
                            value="{{old('excerpt')}}"> <!-- 'old' is Laravels function of keeping the input in the form when
                                                               the form isn't completed / keeping the previous input value-->

                    @error('excerpt')
                    <p style="color: red;"> {{$errors->first('excerpt')}}</p>  <!--:error is Laravels very own validation component, though you can add 'required'
                                                            in the input markup to also enable validation via browser-->
                    @enderror

                </div>


                <div class="form-group">

                    <label for="body">Body</label>

                    <textarea class="form-control"
                              name="body"
                              id="body"
                              rows="3"
                              placeholder="Hows the team and the players?"
                    value="{{old('body')}}"></textarea>

                    @error('body')
                    <p style="color: red;"> {{$errors->first('body')}}</p>  <!--:error is Laravels very own validation component, though you can add 'required'
                                                            in the input markup to also enable validation via browser-->
                    @enderror

                </div>

                    <!-- Tags section -->

                    <div class="form-group">

                        <label for="body" class="mr-5">Select Tags</label>

                        <select class="form-control" name="tags[]" multiple> <!-- The tags[] input allows selected tags to be stored in an Array as opposed to individually
                                                                  as well as 'multiple' allowing users to select number of tag -->
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}"> {{ $tag->name }} </option>
                                @endforeach
                        </select>

                        @error('tags')
                        <p style="color: red;"> {{$errors->first('tags')}}</p>  <!--:error is Laravels very own validation component, though you can add 'required'
                                                            in the input markup to also enable validation via browser-->
                        @enderror

                    </div>



                    <!-- Submit Button -->

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>




        </div>
    </div>





    @endsection
