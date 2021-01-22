$(document).ready(function ()
{
    $.getJSON("http://api.openweathermap.org/data/2.5/weather?q=Liverpool&units=metric&appid=19a93a56a2ed7d49eb06d7d26f65ca4a",
        function(data) { // (data) inside function will determine name for detecting api input.

        console.log(data);

        var icon = "http://openweathermap.org/img/w/" + data.weather[0].icon + ".png";
        var temp = data.main.temp;
        var weather = data.weather[0].description;
        var location = data.name;

        // console.log(icon);
            $('.icon').attr('src', icon); // attr because it's an image
            $('.temp').append(temp);  // append because it's implementing on markdown
            // $('.temp').append(weather);
            $('.weather-location').append(location);


    });

});
