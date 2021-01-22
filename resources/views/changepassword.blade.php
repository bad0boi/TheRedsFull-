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

        <!-- Password Error flash -->

            @if (session('error'))

                <div class="alert alert-danger" role="alert">
                    {{ session ('error') }}
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

            {{--                <div class="class-sm">--}}
            {{--                    <h1 style="color: indianred;"> Avatar Section: </h1>--}}
            {{--                </div>--}}


            <div id="profile-sidebar" class="col-sm">


                <!-- Sidebar -->

                <div class="card">
                    <div style="color: indianred; text-align: center;" class="card-header font-weight-bold"> Username: {{Auth::user()->name}}</div>
                    <br>
                    <a href="/home" class="btn btn-primary btn-block">Home</a>
                    <a href="/profile" class="btn btn-primary btn-block">Profile</a>
                    <a href="/news" class="btn btn-primary btn-block">News</a>
                    <a href="/home" class="btn btn-primary btn-block">Next Game</a>
                    <a href="/articles/create" class="btn btn-primary btn-block">Shout</a>



                </div>

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

                            <!-- FORM -->

                            <form action="{!! route('changepassword') !!}" method="post">
                                @csrf


                                <!-- Current Password -->

                                <div class="form-group">
                                    <label for="current_password"> <strong>Current Password </strong></label>
                                    <input type="password" class="form-control" id="current_password" name="current_password">

                                </div>

                                    <!-- New Password -->

                                    <div class="form-group">
                                        <label for="new_password"> <strong>New Password: </strong></label>
                                        <input type="password" class="form-control" id="new_password" name="new_password">

                                    </div>

                                    <!-- Confirm New Password -->

                                    <div class="form-group">
                                        <label for="new_password_confirmation"> <strong>Confirm New Password </strong></label>
                                        <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation">

                                    </div>

                                <!-- Change Password Update Button -->

                                <button class="btn btn-primary" type="submit">Change Password </button>


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
