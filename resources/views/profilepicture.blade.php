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

            <!-- Avatar Section -->

            <div id="profile-sidebar" class="col-sm">
                <div class="card">
                    <div style="color: indianred; text-align: center;" class="card-header font-weight-bold"> Avatar</div>
                    <br>

                    <img src="/images/avatar/{{ Auth::user()->avatar }}" alt="profile_picture" style="height: 100px;
                            border-radius: 50%; margin: 20px;">


                </div>

                <br>

                <!-- Sidebar -->

                <div class="card">
                    <div style="color: indianred; text-align: center;" class="card-header font-weight-bold"> Username: {{Auth::user()->name}}</div>
                    <br>
                    <a href="/home" class="btn btn-primary btn-block">Home</a>
                    <a href="{{ route('changepassword') }}" class="btn btn-primary btn-block">Change Password</a>
                    <a href="/news" class="btn btn-primary btn-block">News</a>
                    <a href="/home" class="btn btn-primary btn-block">Next Game</a>
                    <a href="/articles/create" class="btn btn-primary btn-block">Shout</a>



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

                         <!-- User Profile Picture/Avatar upload -->

                            <form enctype="multipart/form-data" action="{!! route('profileavatar') !!}" method="post">


                                <div class="form-group">
                                    <input type="file" name="avatar" class="form-control">
                                    <input type="hidden" class="form-control"  name="_token" value="{{ csrf_token () }}" >

                                <!-- Update Button -->

                                    <br>

                                <button class="btn btn-primary" type="submit">Upload Avatar</button>


                            </form>
                        </div>


                    </div>
                </div>




            </div>



        </div>
    </div>
    </div>
    </div>










@endsection
