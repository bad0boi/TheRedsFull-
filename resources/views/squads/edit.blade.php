@extends('layout')

@section('news')



    <div id="wrapper" class="p-5">

        <div class="container">

            <h1>The Reds Squad: Update database</h1>
            <small>Internal Database</small>
            <p>Admin: {{ Auth::user()->name }}</p>
            <br>

            <form method="POST" action="/squads/{{ $squad->id }}">
            @csrf <!--cross site request forgery ref: 419 error-->
                @method('PUT')


                <div class="form-group">
                    <label for="title">Name</label>
                    <input
                        class="form-control"
                        id="name"
                        name="name"
                        placeholder="Players Name"
                        value="{{ $squad->name }} "> <!--ID and name essential-->


                </div>

                <div class="form-group">
                    <label for="excerpt">Age</label>

                    <input class="form-control"
                           type="number"
                           id="age"
                           name="age"
                           placeholder="Age"
                           value="{{ $squad->age }}"> <!-- 'old' is Laravels function of keeping the input in the form when
                                                               the form isn't completed / keeping the previous input value-->



                </div>


                <div class="form-group">

                    <label for="body">Nationality</label>

                    <input class="form-control"
                           name="nationality"
                           id="nationality"
                           placeholder="Players Nationality"
                           value="{{ $squad->nationality }}">



                </div>

                <div class="form-group">

                    <label for="body">Position</label>

                    <input class="form-control"
                           name="position"
                           id="position"
                           placeholder="Players Position"
                           value="{{ $squad->position }}">



                </div>

                <div class="form-group">

                    <label for="body">Height</label>

                    <input class="form-control"
                           name="height"
                           id="height"
                           placeholder="Players height"
                           value="{{ $squad->height }}">



                </div>

                <div class="form-group">

                    <label for="body">Jersey Number</label>

                    <input type="number" class="form-control"
                           name="jersey"
                           id="jersey"
                           placeholder="Jersey Number"
                           value="{{ $squad->jersey }}">


                </div>

                <div class="form-group">

                    <label for="body">Goals</label>

                    <input type="number" class="form-control"
                           name="goals"
                           id="goals"
                           placeholder="Players Goals"
                           value="{{ $squad->goals }}">


                </div>

                <div class="form-group">

                    <label for="body">Assists</label>

                    <input type="number" class="form-control"
                           name="assists"
                           id="assists"
                           placeholder="Players assists"
                           value="{{ $squad->assists }}">


                </div>

                <div class="form-group">

                    <label for="body">Players Social Links</label>

                    <textarea type="text" class="form-control"
                              name="social"
                              id="social"
                              placeholder="Players social"
                              value="{{ $squad->social }}"> {{ $squad->social }} </textarea>



                </div>







                <!-- Submit Button -->

                <button type="submit" class="btn btn-primary">Update</button>

            </form>




        </div>
    </div>





@endsection
