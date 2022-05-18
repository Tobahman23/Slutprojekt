<?php 
session_start();
$conn = mysqli_connect('localhost', 'Tobahm', 'pogwog', 'slutprojekt');

if($conn->connect_error)
{
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charse="utf-8" name="viewport" content="width-device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap.min.css">
</head>
<?php 
include("basnolog.php");

?>
<?php
if($_COOKIE["theme"] == "white")
{
    $color = "white";
}
else
{
    $color = "black";
}
?>
<body style="color:<?php echo $color?>">
<style>
<?php include('index.css')?>
</style>
<div id="bestplace">
<h1 class="d-block" style="text-align:center; margin-bottom:3%;">Best places to visit in Stockholm</h1>

<p style="font-size:large; text-align:center;">Stockholm is a big city with many destinations and places to visit. 
But some of the structures and places within Stockholm stands out in the crowd. </p>

<img src="bilder/gamlastan.jpg" class="img-fluid d-block" style="margin-left:auto; margin-right:auto; width:30%; height:30%;" alt="Gamlastaden">
<h3 style="text-align:center; margin-bottom:3%;">1. Gamla Staden</h3>
<p style="font-size:large; text-align:center;">Gamla staden dating from the 1200's is filled with cafes and souvenir shops. It is a city that reminds many of the medieval times 
with its old school roads and houses that all eventually leads to Stortorget.</p>

<img src="bilder/vasa.jpg" class="img-fluid d-block" style="margin-left:auto; margin-right:auto; width:30%; height:30%;" alt="Gamlastaden">
<h3 style="text-align:center; margin-bottom:3%;">2. The Vasa Museum</h3>
<p style="font-size:large; text-align:center;">The Vasa Museum holds the Vasa battleship which was supposed to be the flagship and the pride of the Swedish fleet.
However the battleship sank at its maiden voyage in 1628. This museum is the most visited in Sweden and righly so since it's a fascianting concept for a museum.</p>

<img src="bilder/royal.jpg" class="img-fluid d-block" style="margin-left:auto; margin-right:auto; width:30%; height:30%;" alt="Gamlastaden">
<h3 style="text-align:center; margin-bottom:3%;">3. The Royal Palace</h3>
<p style="font-size:large; text-align:center;">The Royal Palace in Stockholm is one of the biggest royal palaces within Europe with around 600 rooms and several museums. There is tons of things to see within the royal palace such as the Three Crowns, Queen Kristinas silver throne and the treasury.</p>

<img src="bilder/avicci.jpg" class="img-fluid d-block" style="margin-left:auto; margin-right:auto; width:30%; height:30%;" alt="Gamlastaden">
<h3 style="text-align:center; margin-bottom:3%;">4. Avicci Arena</h3>
<p style="font-size:large; text-align:center;">The Avicci Arena is a incredible structure that usually holds some of the biggest concerts and events. Not onlt that but the formerly called "Globen" has something called SkyView which lets you ride to the top of the structure.</p>

<img src="bilder/cityhall.jpg" class="img-fluid d-block" style="margin-left:auto; margin-right:auto; width:30%; height:30%;" alt="Gamlastaden">
<h3 style="text-align:center; margin-bottom:3%;">5. The City Hall</h3>
<p style="font-size:large; text-align:center;">Located by the water with three crowns topping the building, the City Hall is one of Stockholms most iconic buildings. Housed
within the building are assembly rooms, offices, works of art and machinery of civil democracy.</p>
</div>
</body>
</html>