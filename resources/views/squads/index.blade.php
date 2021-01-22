@extends('layout')

@section('news')

    <!-- Shows ALL articles VIEW page-->

    <div id="wrapper" class="p-5">

        <!-- EPL, LFC, Sponsors Logo -->
        <div class="sponsors">
            <h3> Our key partners</h3>
            <div class="row p-3" style="text-align: center;">
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

                <a class="" href="https://www.axa.com/?utm_source=liverpoolfc&amp;utm_medium=logo-partnership&amp;utm_campaign=lfc1819season" target="_blank">
                    <img class="m-2" alt="" src="https://d3j2s6hdd6a7rg.cloudfront.net/v2/uploads/media/partnerlogo/0001/89/329a69b8fb4dae9bbd4a2d9582654c3af6563956.png"
                         style="width: 80px; height: 80px;"></a>

                <a class="" href="http://www.carlsberg.com/" title="Carlsberg" target="_blank">
                    <img class="m-2" src="https://d3j2s6hdd6a7rg.cloudfront.net/v2/uploads/media/partnerlogo/0001/92/thumb_91236_partnerlogo_partner_footer.png" alt="Carlsberg">
                </a>

                <a class="" href="http://www.liverpoolfc.com/partners/partner-redirects/nivea" title="Nivea" target="_blank">
                    <img class="m-2" src="https://d3j2s6hdd6a7rg.cloudfront.net/v2/uploads/media/partnerlogo/0001/33/thumb_32543_partnerlogo_partner_footer.png" alt="Nivea">
                </a>

                <a class="" href="http://www.tcc-chaokoh.com/" title="Chaokoh" target="_blank">
                    <img class="m-2" src="https://d3j2s6hdd6a7rg.cloudfront.net/v2/uploads/media/partnerlogo/0001/28/thumb_27835_partnerlogo_partner_footer.png" alt="Chaokoh">

                </a>

                <a href="https://www.easports.com/" title="EA Sports" target="_blank">
                    <img class="m-2" src="https://d3j2s6hdd6a7rg.cloudfront.net/v2/uploads/media/partnerlogo/0001/91/thumb_90473_partnerlogo_partner_footer.png" alt="EA Sports">
                </a>

                <a href="https://www.nipponham.co.jp/eng/" title="NH Foods" target="_blank">
                    <img class="m-2" src="https://d3j2s6hdd6a7rg.cloudfront.net/v2/uploads/media/partnerlogo/0001/86/thumb_85085_partnerlogo_partner_footer.png" alt="NH Foods">
                </a>

                <a href="https://www.levi.com/GB/en_GB/" title="Levi" target="_blank">
                    <img class="m-2" src="https://d3j2s6hdd6a7rg.cloudfront.net/v2/uploads/media/partnerlogo/0001/73/thumb_72807_partnerlogo_partner_footer.png" alt="Levi">
                </a>


            </div>
        </div>

        <div class="header mb-3" style="text-align: center;">
            <h1 style="text-align: center; font-weight: bolder;">2019/2020 Squad <img src="/images/football.svg" style="width: 60px; height: 60px;" alt=""></h1>
                <small>Premier League records</small>
                    <br>
                     <a style="color: white; width: 50%; margin: 0 auto;" type="button" data-toggle="modal" data-target=".indexNextGame"
                     id="index-modal-btn" class="btn btn-primary btn-block">Next Game</a>
        </div>

        <!-- Modal -->
        <div  class="indexNextGame modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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

        <div class="row p-2">

        @forelse ($squads as $squad)  <!-- forelse is just like foreach but with an Else function -->

        <div class="col-sm-4">
            <h1 class="pt-3">
                <a href="/squads/{{$squad->id}}">
                    {{$squad->name}}
                </a>
            </h1>
                <h2> {{$squad->nationality}}</h2>
                    <p>Position >>  {{ $squad->position }}</p>


        </div>






            @empty

                <p> No relevant articles yet ...</p>



            @endforelse


        </div>

    </div>






@endsection






