$(document).ready(function () {

    // For loops practicing and testing

    $.ajax({
        headers: {
            'X-Auth-Token': '6be1de5daba1462cae2e5297263f2aa0'
        },
        url: 'http://api.football-data.org/v2/competitions/PL/scorers',
        dataType: 'json',
        type: 'GET'
    }).done(function (data) {
        console.log(data);
    var getTopGoals = $('#top-goal-scorers');

    getTopGoals.append(`

    <div class="row m-3">
    <div class="col-sm p-3">
      <h3>${data.scorers[0].player.name}</h3>
      <li>Nationality: ${data.scorers[0].player.nationality}</li>
       <li><strong>Goals:${data.scorers[0].numberOfGoals}</strong></li>
       <li>Team:${data.scorers[0].team.name}</li>
       <li>Position:${data.scorers[0].player.position}</li>
       <li>Shirtnumber: ${data.scorers[0].player.shirtNumber}</li>
    </div>
    <div class="col-sm p-3">
      <h3>${data.scorers[1].player.name}</h3>
      <li>Nationality: ${data.scorers[1].player.nationality}</li>
       <li><strong>Goals:${data.scorers[1].numberOfGoals}</strong></li>
       <li>Team:${data.scorers[1].team.name}</li>
       <li>Position:${data.scorers[1].player.position}</li>
        <li>Shirtnumber: ${data.scorers[0].player.shirtNumber}</li>
    </div>
    <div class="col-sm p-3">
       <h3>${data.scorers[2].player.name}</h3>
       <li>Nationality: ${data.scorers[2].player.nationality}</li>
        <li><strong>Goals:${data.scorers[2].numberOfGoals}</strong></li>
        <li>Team:${data.scorers[2].team.name}</li>
        <li>Position:${data.scorers[2].player.position}</li>
         <li>Shirtnumber: ${data.scorers[0].player.shirtNumber}</li>
    </div>
  </div>


    `);




    });









});
