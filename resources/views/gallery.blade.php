@extends('layout')


@section('gallery')

    <!--TITLE-->
        <!-- Image source: source.unsplash.com api -->

    <div class="wrapper">
            <div style="-webkit-font-smoothing: antialiased; text-align: center;" class="p-5" >
                <h1> The Reds Gallery</h1>
                 <small> Random Images that represents what this community loves</small>
                     <p>Here you will find images that represents this community </p>
                        <small>Let them speak for themselves</small>
            </div>


        <!-- Grid row -->

    <div class="gallery" id="gallery">

        <!-- Grid column -->
        <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="https://source.unsplash.com/collection/3695942/" alt="Card image cap">
        </div>
        <!-- Grid column -->

            <!-- Grid column -->
            <div class="mb-3 pics animation all 1">
                <img class="img-fluid" src="https://source.unsplash.com/collection/2239977/" alt="Card image cap">
            </div>
            <!-- Grid column -->

                <!-- Grid column -->
                <div class="mb-3 pics animation all 1">
                    <img class="img-fluid" src="https://source.unsplash.com/collection/9278470/" alt="Card image cap">
                </div>
                <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="mb-3 pics animation all 2">
                        <img class="img-fluid" src="https://source.unsplash.com/collection/4592814/" alt="Card image cap">
                    </div>
                    <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="mb-3 pics animation all 2">
                            <img class="img-fluid" src="https://source.unsplash.com/collection/856079/" alt="Card image cap">
                        </div>
                        <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="mb-3 pics animation all 1">
                                <img class="img-fluid" src="https://source.unsplash.com/collection/9738495/" alt="Card image cap">
                            </div>
                            <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="mb-3 pics animation all 1">
                                        <img class="img-fluid" src="https://source.unsplash.com/collection/9738495/" alt="Card image cap">
                                    </div>
                                    <!-- Grid column -->
                                            <!-- Grid column -->
                                            <div class="mb-3 pics animation all 1">
                                                <img class="img-fluid" src="https://source.unsplash.com/collection/9738495/" alt="Card image cap">
                                            </div>
                                            <!-- Grid column -->
                                                    <!-- Grid column -->
                                                    <div class="mb-3 pics animation all 1">
                                                        <img class="img-fluid" src="https://source.unsplash.com/collection/5016038/" alt="Card image cap">
                                                    </div>
                                                    <!-- Grid column -->

    </div>

    </div>


    @endsection
