@extends('layout')

@section('news')

    <!-- Show Specific Users Profile Page ref: web.php > ProfileController > 'show' method -->

<div class="wrapper">
        <div id="userProfileView" >

                <div id="profileCard" class="card col-sm p-5" style="width: 18rem; left: 40%;">
                    <img id="avatar" src="/images/avatar/{{ $profile->avatar }}" class="card-img-top" alt="...">
                        <form>
                            <div class="form-group">
                                <h3 style="color: black;">@ {{ $profile->name }}</h3>
                                <small id="emailHelp" class="form-text text-muted">I am a certified member of The Reds family.</small>
                            </div>

                            <div class="form-group">
                                <p style="color: black;">UserID: {{ $profile->id }}</p>
                            </div>

                            <div class="form-group">
                                <p style="color: black;">Location: {{ $profile->location }}</p>
                            </div>

                            <div class="form-group">
                                <p style="color: black;">Gender: {{ $profile->gender }}</>
                            </div>

                            <div class="form-group">
                                <p style="color: black;">Favourite Player: {{ $profile->favouriteplayer }}</>
                            </div>

                    </form>
{{--                    <div class="card-body">--}}

{{--                        <h1 style="color: #2C383B;"> @ {{$profile->name}}</h1>--}}

{{--                        <br>--}}
{{--                        <p><strong>Email: </strong> {{ $profile->email }}</p>--}}
{{--                        <p> <strong>Location:</strong> {{$profile->location}}  </p>--}}
{{--                        <p> <strong>Gender:</strong> {{ $profile->gender }} </p>--}}
{{--                        <p> <strong> Favourite Player:</strong> {{ $profile->favouriteplayer }}</p>--}}

{{--                    </div>--}}


                    </div>



                </div>

</div>


















@endsection






