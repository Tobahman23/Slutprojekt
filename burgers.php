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
<div id="burgers" style="margin-bottom:2%;">
<h1 class="d-block" style="text-align:center; margin-bottom:3%;">Best burger places in Stockholm</h1>

<img src="bilder/bastard.jpeg" class="img-fluid d-block" style="margin-left:auto; margin-right:auto; width:30%; height:30%;" alt="BastardBurgers">
<h3 class="d-block" style="text-align:center; margin-bottom:2%; margin-top:2%;">*Bastard Burgers</h3>
<img src="bilder/flippin.jpg" class="img-fluid d-block" style="margin-left:auto; margin-right:auto; width:30%; height:30%;" alt="FlippinBurgers">
<h3 class="d-block" style="text-align:center; margin-bottom:2%; margin-top:2%;">*Flippin Burgers</h3>
<img src="bilder/frankys.jpg" class="img-fluid d-block" style="margin-left:auto; margin-right:auto; width:30%; height:30%;" alt="FrankysBurgers">
<h3 class="d-block" style="text-align:center; margin-bottom:2%; margin-top:2%;">*Frankys Burgers</h3>
<img src="bilder/barrels.jpg" class="img-fluid d-block" style="margin-left:auto; margin-right:auto; width:30%; height:30%;" alt="Barrels">
<h3 class="d-block" style="text-align:center; margin-bottom:2%; margin-top:2%;">*Barrels</h3>
<img src="bilder/lilys.jpg" class="img-fluid d-block" style="margin-left:auto; margin-right:auto; width:30%; height:30%;" alt="LilysBurgers">
<h3 class="d-block" style="text-align:center; margin-bottom:2%; margin-top:2%;">*Lilys Burger</h3>
<img src="bilder/primeburger.jpg" class="img-fluid d-block" style="margin-left:auto; margin-right:auto; width:30%; height:30%;" alt="Primeburgers">
<h3 class="d-block" style="text-align:center; margin-bottom:2%; margin-top:2%;">*Prime Burger City</h3>
<img src="bilder/phils.jpg" class="img-fluid d-block" style="margin-left:auto; margin-right:auto; width:30%; height:30%;" alt="PhilsBurgers">
<h3 class="d-block" style="text-align:center; padding-bottom:2%; margin-top:2%;">*Phils Burger</h3>
</div>
</body>
</html>