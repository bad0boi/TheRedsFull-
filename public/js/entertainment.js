$(document).ready(function () {

                        // Toggle Effects //

    //entertainment.blade.php


    $('#yt-list').hide();


    $( ".show-yt-list" ).click(function() {
        $( "#yt-list" ).toggle( "slow", function() {
            // Animation complete.
        });
    });
    //home.blade.php > Snippet News section

    $('#snippetNews').hide();

    $('#snippet-btn').click(function () {
        $('#snippetNews').toggle("slow", function () {

        });
    });


                            // Modal Effect //

    $('#modal-btn').on('shown.bs.modal', function () {
        $('#next-game').trigger('focus')
    })

    //(squads)index.blade.php

    $('#index-modal-btn').on('shown.bs.modal', function () {
        $('.indexNextGame').trigger('focus')
    })









});
