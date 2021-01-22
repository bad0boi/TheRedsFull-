@extends('layout')

@section('news')



    <div id="wrapper" class="p-5">

        <div class="container">

            <h1>The Reds Squad</h1>
            <small>Internal Database</small>
            <p>Admin: {{ Auth::user()->name }}</p>
            <br>

            <form method="POST" action="/squads">
            @csrf <!--cross site request forgery ref: 419 error-->


                <div class="form-group">
                    <label for="title">Name</label>
                    <input
                        class="form-control"
                        id="name"
                        name="name"
                        placeholder="Players Name"
                        value="{{old('name')}}"> <!--ID and name essential-->

                    @error('name')
                    <p style="color: red;"> {{$errors->first('name')}}</p>  <!--:error is Laravels very own validation component, though you can add 'required'
                                                            in the input markup to also enable validation via browser-->
                    @enderror
                </div>

                <div class="form-group">
                    <label for="excerpt">Age</label>

                    <input class="form-control"
                           type="number"
                           id="age"
                           name="age"
                           placeholder="Age"
                           value="{{old('age')}}"> <!-- 'old' is Laravels function of keeping the input in the form when
                                                               the form isn't completed / keeping the previous input value-->

                    @error('age')
                    <p style="color: red;"> {{$errors->first('age')}}</p>  <!--:error is Laravels very own validation component, though you can add 'required'
                                                            in the input markup to also enable validation via browser-->
                    @enderror

                </div>


                <div class="form-group">

                    <label for="body">Nationality</label>

                    <input class="form-control"
                           name="nationality"
                           id="nationality"
                           placeholder="Players Nationality"
                           value="{{old('nationality')}}">

                    @error('nationality')
                    <p style="color: red;"> {{$errors->first('nationality')}}</p>  <!--:error is Laravels very own validation component, though you can add 'required'
                                                            in the input markup to also enable validation via browser-->
                    @enderror

                </div>

                <div class="form-group">

                    <label for="body">Position</label>

                    <input class="form-control"
                           name="position"
                           id="position"
                           placeholder="Players Position"
                           value="{{old('position')}}">

                    @error('position')
                    <p style="color: red;"> {{$errors->first('position')}}</p>  <!--:error is Laravels very own validation component, though you can add 'required'
                                                            in the input markup to also enable validation via browser-->
                    @enderror

                </div>

                <div class="form-group">

                    <label for="body">Height</label>

                    <input class="form-control"
                           name="height"
                           id="height"
                           placeholder="Players height"
                           value="{{old('height')}}">

                    @error('height')
                    <p style="color: red;"> {{$errors->first('height')}}</p>  <!--:error is Laravels very own validation component, though you can add 'required'
                                                            in the input markup to also enable validation via browser-->
                    @enderror

                </div>

                <div class="form-group">

                    <label for="body">Jersey Number</label>

                    <input type="number" class="form-control"
                           name="jersey"
                           id="jersey"
                           placeholder="Jersey Number"
                           value="{{old('jersey')}}">

                    @error('jersey')
                    <p style="color: red;"> {{$errors->first('jersey')}}</p>  <!--:error is Laravels very own validation component, though you can add 'required'
                                                            in the input markup to also enable validation via browser-->
                    @enderror

                </div>

                <div class="form-group">

                    <label for="body">Goals</label>

                    <input type="number" class="form-control"
                           name="goals"
                           id="goals"
                           placeholder="Players Goals"
                           value="{{old('goals')}}">

                    @error('goals')
                    <p style="color: red;"> {{$errors->first('goals')}}</p>  <!--:error is Laravels very own validation component, though you can add 'required'
                                                            in the input markup to also enable validation via browser-->
                    @enderror

                </div>

                <div class="form-group">

                    <label for="body">Assists</label>

                    <input type="number" class="form-control"
                           name="assists"
                           id="assists"
                           placeholder="Players assists"
                           value="{{old('assists')}}">

                    @error('assists')
                    <p style="color: red;"> {{$errors->first('assists')}}</p>  <!--:error is Laravels very own validation component, though you can add 'required'
                                                            in the input markup to also enable validation via browser-->
                    @enderror

                </div>

                <div class="form-group">

                    <label for="body">Players Social Links</label>

                    <textarea type="text" class="form-control"
                           name="social"
                           id="social"
                           placeholder="Players social"
                              value="{{old('assists')}}"> </textarea>

                    @error('social')
                    <p style="color: red;"> {{$errors->first('social')}}</p>  <!--:error is Laravels very own validation component, though you can add 'required'
                                                            in the input markup to also enable validation via browser-->
                    @enderror

                </div>







                <!-- Submit Button -->

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>




        </div>
    </div>





@endsection
