@extends('layout')

@section('userprofile')

    <div class="container">

    <div class="col-md">

        <!-- MAIN Profile Card -->

        <div id="profile-card" class="">
            <div class="card">
                <div class="card-header"> {{ Auth::user()->name }}'s Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">  {{ session('status') }}   </div>
                @endif

                <!-- User ID -->

                    <div class="form-group">
                        <label for="name"> <strong>ID: {{ Auth::user()->id }}   </strong></label>
                    </div>

                    <!-- Name -->
                    <form action="{!! route('profileupdate') !!}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name"> <strong>Name: </strong></label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
                        </div>
                        <!-- Email -->
                        <div class="form-group">
                            <label for="name"> <strong>Email:  </strong></label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
                        </div>

                        <!-- Location -->

                        <div class="form-group">
                            <label for="name"> <strong>Location:  </strong></label>
                            <input type="text" class="form-control" id="location" name="location" value=" {{ Auth::user()->location }}" placeholder="Enter your location ">
                        </div>

                        <!-- Gender -->

                        <div class="form-group">
                            <label for="name"> <strong>Gender:  </strong></label>
                            <input type="text" class="form-control" id="gender" name="gender" value="{{ Auth::user()->gender }}" placeholder="Enter your Gender">
                        </div>

                        <!-- Favourite LFC Player -->

                        <div class="form-group">
                            <label for="name"> <strong>Favourite Player:  </strong></label>
                            <input type="text" class="form-control" id="favouriteplayer" name="favouriteplayer" value="{{ Auth::user()->favouriteplayer }}" placeholder="Enter your favourite player">
                        </div>




                    </form>
                </div>

            </div>
        </div>
    </div>

    </div>


    @endsection
