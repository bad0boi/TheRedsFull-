@extends('layout')

@section('profile')

    <div class="wrapper p-5">


            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>

                        @foreach($errors->all() as $error)

                            <li> {{ $error  }}</li>

                            @endforeach

                    </ul>
                </div>
                        @endif

        <!-- Sessions flash feature + message -->

            @if(session()->get('message'))
                <div class="alert alert-success" role="alert">
                    <strong>Success:</strong> {{ session()->get('message') }}
                </div>
                @endif


                <!-- Shouts feature banner -->


            <div class="alert alert-primary" role="alert">

                    <a href="/articles"> Check out the latest <strong>Shouts</strong> from other <strong>users</strong> </a>

            </div>

            <div class="row"> <!-- 3 Columns Row-->


                <div id="profile-sidebar" class="col-sm">

                    <!-- Avatar Section -->

                    <div class="card" style="margin: 10px;" >
                        <div style="color: indianred; text-align: center;" class="card-header font-weight-bold">Avatar</div>
                        <br>

                        <img id="avatar" src="/images/avatar/{{ Auth::user()->avatar }}" alt="profile_picture" style="height: 140px;">

                    </div>

                    <br>

                    <!-- Sidebar -->

                    <div class="card">
                        <div style="color: indianred; text-align: center;" class="card-header font-weight-bold"> Username: {{Auth::user()->name}}</div>
                        <br>
                        <a href="/home" class="btn btn-primary btn-block">Home</a>
                        <a href="{{ route('changepassword') }}" class="btn btn-primary btn-block">Change Password</a>
                        <a href="/news" class="btn btn-primary btn-block">News</a>
                        <a style="color: white;" type="button" data-toggle="modal" data-target="#next-game"
                           id="modal-btn" class="btn btn-primary btn-block">Next Game</a>
                        <a href="/articles/create" class="btn btn-warning btn-block">Shout</a>
                        <a href="{{ route ('profileavatar') }}" class="btn btn-primary btn-block"> Upload Avatar </a>
                    </div>

                    <br>


                </div>


                <div class="col-md">

                        <!-- MAIN Profile Card -->

                    <div id="profile-card" class="col-md-9">
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
                                            <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" required>

                                        </div>
                                        <!-- Email -->
                                        <div class="form-group">
                                            <label for="name"> <strong>Email:  </strong></label>
                                            <input type="text" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" required>
                                        </div>

                                        <!-- Location -->

                                        <div class="form-group">
                                            <label for="name"> <strong>Location:  </strong></label>
                                            <input type="text" class="form-control" id="location" name="location" value=" {{ Auth::user()->location }}" placeholder="Enter your location " required>
                                        </div>

                                        <!-- Gender -->

                                        <div class="form-group">
                                            <label for="name"> <strong>Gender:  </strong></label>
                                            <input type="text" class="form-control" id="gender" name="gender" value="{{ Auth::user()->gender }}" placeholder="Enter your Gender">
                                        </div>

                                        <!-- Favourite LFC Player -->

                                        <div class="form-group">
                                            <label for="name"> <strong>Favourite Player:  </strong></label>
                                            <input type="text" class="form-control" id="favouriteplayer" name="favouriteplayer" value="{{ Auth::user()->favouriteplayer }}" placeholder="Enter your favourite player" required>
                                        </div>

                                        <!-- Update Button -->

                                        <button class="btn btn-primary" type="submit">Update Profile </button>


                                    </form>
                                    <!-- Modal -->
                                    <div  class="modal fade" id="next-game" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <!-- Modal Title -->
                                                    <h5 class="modal-title" id="exampleModalLongTitle"> Next Game (2019/20) </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <!-- Next Game View -->
                                                <div class="nextGameBody"></div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>










    @endsection
