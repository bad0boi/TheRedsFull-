$(document).ready(function () {

    $.ajax({
        headers: {
            'X-Auth-Token': '6be1de5daba1462cae2e5297263f2aa0'
        },
        url: 'https://api.football-data.org/v2/competitions/PL/standings?standingType=HOME',
        dataType: 'json',
        type: 'GET'
    }).done(function (data) {
        console.log(data);
        data.standings.forEach(standing => {
            console.log(standing);
            standing.table.forEach(table => {
                console.log(table);
            });
        });

        $('.league-table').append(resultTemplate(data));
    });

    function resultTemplate(data) {
        return `
            <table class="table p-5">
                <thead>
                    <tr>

                        <th scope="col">Rank</th>
                        <th scope="col">Team</th>
                        <th scope="col">Played Games</th>
                            <th scope="col">Won</th>
                            <th scope="col">Drawn</th>
                            <th scope="col">Lost</th>
                            <th scope="col">Points</th>

                    </tr>
                </thead>
                <tbody>


                    <tr>

                        <td>${data.standings[0].table[0].position}</td>
                        <td>${data.standings[0].table[0].team.name}</td>
                        <td>${data.standings[0].table[0].playedGames}</td>
                        <td>${data.standings[0].table[0].won}</td>
                        <td>${data.standings[0].table[0].draw}</td>
                        <td>${data.standings[0].table[0].lost}</td>
                        <td>${data.standings[0].table[0].points}</td>
                    </tr>

                    <tr>

                        <td>${data.standings[0].table[1].position}</td>
                        <td>${data.standings[0].table[1].team.name}</td>
                        <td>${data.standings[0].table[1].playedGames}</td>
                        <td>${data.standings[0].table[1].won}</td>
                        <td>${data.standings[0].table[1].draw}</td>
                        <td>${data.standings[0].table[1].lost}</td>
                        <td>${data.standings[0].table[1].points}</td>

                    </tr>

                     <tr>

                        <td>${data.standings[0].table[2].position}</td>
                        <td>${data.standings[0].table[2].team.name}</td>
                        <td>${data.standings[0].table[2].playedGames}</td>
                        <td>${data.standings[0].table[2].won}</td>
                        <td>${data.standings[0].table[2].draw}</td>
                        <td>${data.standings[0].table[2].lost}</td>
                        <td>${data.standings[0].table[2].points}</td>

                    </tr>

                </tbody>
            </table>
            `;
    }
});








