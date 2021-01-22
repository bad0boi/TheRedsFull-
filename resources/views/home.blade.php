@extends('layout')

@section('home-head')

    @endsection

@section('home')

        <!--HEADER-->


        <div id="header-featured">
            <div id="banner-wrapper">
                <div id="banner" class="container p-5">
                    <div class="sponsor">
                        <h3> In Key Association</h3>
                        <div class="row p-3" style="text-align: center; display: inline-block;">
                            <a href="https://www.sc.com/en/" target="_blank" title="Standard Chartered">
                                <img class="m-2" alt="" src="https://d3j2s6hdd6a7rg.cloudfront.net/uploads/page%20thumbnails/standard_chartered_logo.gif"
                                     tyle="width: 203px; height: 70px;"></a>
                            <a href="https://www.newbalance.co.uk/liverpool/?searchSource=liverpool" target="_blank" title="New Balance">
                                <img class="m-2" alt="" src="https://d3j2s6hdd6a7rg.cloudfront.net/uploads/page%20thumbnails/5311__2156__new_balance_small_sponsor_page.jpg"
                                     style="width: 126px; height: 69px;"></a>

                            <a class="" href="https://www.westernunion.com/sponsorships/lfc/?src=lfc_landingwebsitelogo" target="_blank" title="Western Union">
                                <img class="m-2" alt="Western Union Logo"
                                     src="https://d3j2s6hdd6a7rg.cloudfront.net/v2/uploads/media/partnerlogo/0001/83/35c1e3ec90d6d8bfd826a74ef870ec3b4f072d23.png">
                            </a>

                    </div>
                    <h2 style="color: black;">Welcome {{ Auth::user()->name  }} to the <strong style="color: indianred;">LFC</strong> family</h2> <!-- The blade Auth:: will
                                                                                                        automatically display logged-in username -->
                    <p>We <strong>welcome</strong> every passionate
                        Liverpool fans out there from around the world to keep <strong>up-to-date</strong>
                    with the latest news, squad updates, outside LFC news.
                    <p> Check out our Top 3 footballing images below: </p>
                    <div class="weather-container">
                        <p> Current Weather</p>
                         <img src="" alt="" class="icon">
                            <h3 class="weather-location"> </h3>
                                <div class="temp">
                                  °
                                </div>

                    </div>




            </div>

        </div>
        <!--END of Header Banner-->
            </div>

        <!-- MAIN BODY -->

    <div id="home-container">
        <div  id="carouselExampleIndicators"  class="carousel slide m-0" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://source.unsplash.com/collection/4592814/1600x400"  title="Liverpool FC" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/collection/2405078/1600x400"  title="Liverpool FC" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/O4s639KfIQk/1600x400"  title="Liverpool FC" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Covid-19 Update via API -->
        <div class="wrapper">
            <div style="width: 50%; margin: 0 auto; text-align: center; margin-bottom: 30px;" class="alert alert-danger" role="alert">
                <div>
                    <h3>Covid-19 UK Information</h3>
                </div>
                <p class="covid"> Total Deaths: </p>
                <p class="covidDeaths"> </p>

                <p class=""> Critical: </p>
                <p class="covidCritical"> </p>


            </div>
            <!--Snippet News via API -->
            <div class="homeNewsHeader">
                <h1><a href="/news"> Liverpool & Co Snippets: <img src="/images/news-icon.svg" style="width: 60px; height: 60px;" alt=""> </a></h1>
                    <small>via Guardian</small>
                <br>
                <button class="btn btn-primary" id="snippet-btn">SHOW</button>
            </div>
                 <div id="snippetNews" class="row p-5"></div>
            </div>

            <!--2nd Block-->

            <div style="text-align: center;" class="row">
                <div id="social-feed" class="col">
                    <a href="/leaguetable"><h2> TOP 3</h2></a>
                     <a href="#main-navbar"><small>See full league table</small></a>
                        <div class="league-table"></div>
                </div>

                        <div id="pinnedTweets" style="background-color: #A68888;" class="col">
                         <a href="/entertainment"> <h2 style="color: white;">PINNED TWEETS</h2>  </a>  <!-- Tweets pinned by the author and developer -->
                            <div class="container">
                        <blockquote class="twitter-tweet">
                            <p lang="en" dir="ltr">I really said come outside Trent and the guy literally
                                shat all over my face. I feel so violated.</p>&mdash; Ali. (@UtdAlii)
                            <a href="https://twitter.com/UtdAlii/status/1210312862373208084?ref_src=twsrc%5Etfw">
                                December 26, 2019</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                        </div>
            </div>

            <!-- Top Goal Scorers -->
        <div class="wrapper" id="top-goal-scorers">
            <div class="tgsHeader" style="text-align:center;">
            <h2 style="color: black;">Top 3 goal scorers <small>2019/20 Season</small></h2>

                <svg width="130px" height="130px" class="logo" version="1.1"
                     xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 131.1 166.7" style="enable-background:new 0 0 131.1 166.7;"
                     xml:space="preserve">
                <style type="text/css">
                    .st0{fill:#360D3A;}
                </style>
                <path class="st0" d="M28.8,18.8c6.8,3.2,11.3,7.1,12.1,7.7c-0.3-1.8-1.7-10.3-2.6-15.5c3.9,2.7,13.3,9.2,16.3,11.3
                C55.8,18.5,60.2,6,60.2,6s7.8,12.5,9,14.6C70.9,19,80.1,8.6,82.5,6c0.5,5.9,0.9,14.5,1.1,15.7c0.5-0.6,4.1-5.6,10-10.3
                c-2.6,5.1-3.8,12.1-4.4,17.8c-5.9-1.7-12.1-2.6-18.4-2.6c-12.2,0-23.8,3.2-33.8,8.9C35.3,30,32.6,23.2,28.8,18.8z M122.6,126.2
                l-5.4-6c-1.5,16.1-9.5,29.9-24,39.5l-2.3-8.7c-12.4,8.9-33.5,14.6-51.7,4.4c2.3-11.5,4.2-23.2,0-37.2c-10.1,15.5-19,21.7-19,21.7
                c-6.8-11.5-6.2-34.4-4.2-41.2l-11.3,3.5c0-7.7,5.6-24,13.6-33.2l-6.9-1.1c4.8-9.8,11.9-18.2,20.8-24.7c-2.7,4.4-2.7,14.6,5,18.5
                c-3.3-5.7-3.6-12.8-0.3-16.6c3.5-3.8,9.2-2.4,12.8,0.5c-1.1-3.2-4.4-7.2-9-7.5c9-4.7,19.5-7.2,30.3-7.2c2.1,0,4.1,0.2,6,0.3
                c3.2,1.2,7.8,5.7,10,8.6c0,0,0.2-3.3-1.7-7.2c11.8,2.9,17.5,7.7,19.8,10c0.5,5.1,2,8.1,4.1,13c-3.8-4.2-13.4-11.2-18.1-12.8
                c0,0-0.5,4.4-2,6.5c-9.2-6.6-13.6-8.3-13.6-8.3C65.3,42,59,46,55.4,49l3,2.6c-6,1.8-10,7.1-10,7.1c0,0.2,5.4,0.9,5.4,0.9
                s-0.6,6.3,7.4,10.3c6.8,3.3,16.4-0.8,25.6,2.9c-6-6.9-10.1-10.1-10.1-10.1s-2.4-0.5-4.1-0.5c-2.1,0-5.3,0.5-8.6-0.9
                c-1.7-0.6-3.6-1.8-5-2.7c0,0,4.2-4.4,10.4-5.3c0,0,5.6,1.5,10,4.8c2.9-2.9,6-2.7,6-2.7s-3,2.9-2.1,6.2c4.4,3.9,9.2,9.5,9.2,9.5
                c4.8-2.7,15.4-2.1,17.6,0.5c-2.7-3.6-6.8-6.5-9.8-9c-0.3-1.4-3.8-6-4.2-6.5c0,0,3.2,1.1,6,3.5c0.8-1.2,2.4-2.4,4.4-2.9
                c2.1,1.8,2.6,4.5,2.4,5c-0.9,1.2-2,1.7-2,1.7l5.1,5.6l0.5-4.1C124.4,81.8,130.9,101.5,122.6,126.2z M100.2,89.7v-8.7
                c0,0-3.9-1.2-8.1-4.5c-8.4,1.2-18.5,9.7-18.5,9.7s3.5,6.5,7.2,13.6C87.4,100.5,97.2,92.3,100.2,89.7z M108.6,105.5
                c0,0-0.6-3.6-3.6-6.9l-6.5,0.2c0,0-8.9,7.5-14.2,7.7c0,0,3,5.6,4.5,8.4c3-0.6,8.1-3,10.3-5.4c0,0,1.4,4.5,1.1,9.8
                C103.2,117.4,107.3,112.8,108.6,105.5z M111.3,76.7c-3.3,2.7-6,4.4-6,4.4v8.7c2.4,2.6,4.7,4.8,6.5,8.7
                C115.1,92.7,114.3,84,111.3,76.7z"></path>
            </svg>

            </div>

        </div>



            <!--4th Block-->

            <div>
                <div class="row">
                    <div style="background-color:#DFF2E4;" class="col">
                        <h2 id="about-us" style="text-align: center; color: black;"> About Us </h2>
                        <br>
                        <div class="container">

                            <div class="hero-unit">
                                <h1>Our goal is to update, shout and entertain!</h1>
                                <p>We want our members in this LFC community to consume the most relevant and entertaining
                                news/updates. Furthermore, what sets us apart from other LFC outlets is that we focus on what really
                                matters and what's entertaining. We don't posts updates or news as part of a paid promotion. </p>

                                <div class="container">

                                <ul style="list-style-type:disc;">
                                    <li><a href="/articles"> Shouts</a> feature will allow you as a fan to express whatever you feel </li>
                                    <li>Enjoy most up to date news from other news outlets, as well as our very own exclusive stories</li>
                                    <li>View our favourite pinned tweets and funny content e.g. memes, videos etc. </li>

                                </ul>

                                </div>
                                <p>
                                    <a class="btn btn-primary btn-large" href="/about">
                                        Read More
                                    </a>
                                </p>
                            </div>


                        </div>
                    </div>
                </div>
            </div>



</div>

    @section('footer')

        <!-- Footer -->


        <footer class="page-footer font-small mdb-color lighten-3 pt-4">

            <!-- Footer Links -->
            <div class="container text-center text-md-left">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

                        <!-- Content -->
                        <h5 class="font-weight-bold text-uppercase mb-4">Our Promise</h5>
                        <p>Our vision is to always provide entertaining and informative content
                            in the most consistent manner possible.
                        </p>
                        <p>We continue to grow as a brand and family, ensuring to always follow our team
                            through and through.
                        </p>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

                        <!-- Links -->
                        <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

                        <ul class="list-unstyled">
                            <li>
                                <p>
                                    <a href="#mainnews">Main News</a>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <a href="#videos">Videos</a>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <a href="#pinnedTweets">Pinned Tweets</a>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <a href="/articles">Shouts</a>
                                </p>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

                        <!-- Contact details -->
                        <h5 class="font-weight-bold text-uppercase mb-4"> Ulster University Jordanstown</h5>

                        <ul class="list-unstyled">
                            <li>
                                <p>
                                    <i class="fas fa-home mr-3"></i> Jordanstown, Northern Ireland</p>
                            </li>
                            <li>
                                <p>
                                    <i class="fas fa-envelope mr-3"></i> TheReds.com</p>
                            </li>
                            <li>
                                <p>
                                    <i class="fas fa-phone mr-3"></i> 028 955 22 899</p>
                            </li>
                            <li>
                                <p>
                                    <i class="fas fa-print mr-3"></i> 028 977 11 744</p>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

                        <!-- Social buttons -->
                        <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

                        <!-- Facebook -->
                        <a type="button" href="https://www.youtube.com/user/LiverpoolFC" target="_blank" class="btn-floating btn-fb">
                            <img src="/images/youtube.svg" style="width: 50px; height: 50px;" alt="YouTube">
                        </a>
                        <!-- Twitter -->
                        <a type="button" href="https://www.instagram.com/liverpoolfc/" target="_blank" class="btn-floating btn-tw">
                            <img src="/images/instagram.svg" style="width: 50px; height: 50px;" alt="Instagram">
                        </a>
                        <!-- Google +-->
                        <a type="button" href="https://www.facebook.com/LiverpoolFC/" target="_blank" class="btn-floating btn-gplus">
                            <img src="/images/facebook.svg" style="width: 50px; height: 50px;" alt="Facebook">
                        </a>


                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="#"> TheReds | COM559 | Major Project </a> <img src="/svg/TheRedsLogo.svg" style="max-height: 80px; max-width: 80px;" alt="The Reds logo"></p>
            </div>


        </footer>

        @endsection



@endsection
