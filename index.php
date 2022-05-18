<?php
$conn = mysqli_connect('localhost', 'Tobahm', 'pogwog', 'slutprojekt');

if($conn->connect_error)
{
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
}
else {
   
    
}
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="bootstrap.min.css">
</head>
<?php
include('bas.php');
include('guideutloggad.php');
include('weather.php');
?>
<body>
<style>
<?php 
include('index.css');
?>
</style>
</body>
</html>
