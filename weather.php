<?php

?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>
    <link rel="stylesheet" href="style.css">

    <script src="jquery-3.6.0.min.js"></script>


    <style>
        h1 {text-align: center;}
        h2 {text-align: center;}
        div {text-align: center;}
    </style>

</head>

<body>
        <div  id="weatherboi"style=" border:5px double black;">
        <h1>Stockholm</h1>
        <h2>Temp:<span id="temp"></span>°C</h2>
        <h2>Min Temp:<span id="mintemp"></span>°C</h2>
        <h2>Max Temp:<span id="maxtemp"></span>°C</h2>
        <h2>Humidity:<span id="humidity"></span>%</h2>
        </div>

<script>
$.get('https://api.openweathermap.org/data/2.5/weather?q=Stockholm&appid=6519f819dad2fa09be9840533c05c3e1&units=metric', function(data){
    let temp = Math.floor(data.main.temp);      
    let mintemp = Math.floor(data.main.temp_min);
    let maxtemp = Math.floor(data.main.temp_max);
    let humidity = Math.floor(data.main.humidity);
    let iconimg = " http://openweathermap.org/img/wn/%22+data.weather[0].icon+%22.png";
    $("#temp").html(temp);
    $("#mintemp").html(mintemp);
    $("#maxtemp").html(maxtemp);
    $("#humidity").html(humidity);
    $("#iconImg").attr("src", iconimg);

}); </script>


</body>



</html>