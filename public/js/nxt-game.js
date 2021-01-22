$(document).ready(function () {

    // For loops practicing and testing

    $.ajax({
        headers: {
            'X-Auth-Token': '6be1de5daba1462cae2e5297263f2aa0'
        },
        url: 'http://api.football-data.org/v2/teams/64/matches',
        dataType: 'json',
        type: 'GET'
    }).done(function (data) {
        console.log(data);
        var getNextGame = $('.nextGameBody');


        getNextGame.append(`
            <div class="container p-3">
            <h2>${data.matches[33].homeTeam.name} vs ${data.matches[33].awayTeam.name}</h2>
             <h3>When: ${data.matches[33].utcDate}</h3>
                <h4>Matchday${data.matches[33].matchday}</h4>
                 <h4>Referees</h4>
                <ul>
                    <li>${data.matches[33].referees[0].name}</li>
                    <li>${data.matches[33].referees[1].name}</li>
                    <li>${data.matches[33].referees[2].name}</li>
</ul>

            </div>


    `);





    });









});
