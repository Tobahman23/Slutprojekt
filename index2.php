<?php
session_start();
$conn = mysqli_connect('localhost', 'Tobahm', 'pogwog', 'slutprojekt');

if($conn->connect_error)
{
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
}
else {
    $display = $_SESSION['userid'];
}
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="bootstrap.min.css">
<meta charset="utf-8" name="viewport" content="width-device-width, initial-scale=1">
<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
</head>
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
<body style="color:<?php echo $color;?>">
<style>
<?php 
include('index.css');

?>
</style>
<?php include('basnolog.php');?>
<div id="userdisplay">
<h5 id="use" style="color:<?php echo $color;?>"><?php echo $display ?></h5>
<label class="switch">
<h5>White text:</h5>
<input type="checkbox" id="toggle" <?php if($_COOKIE["theme"] == "white") {echo "checked";}?>>
<span class="slider round"></span> 
</div>
<?php
include('guide1.php');
include('guide2.php');
include('guide3.php');
include('weather.php'); 
?>
<script>
$("#toggle").on('change', function()
{
    if($(this).is(':checked'))
    {
        $(this).attr('value', 'true');
        document.cookie = "theme=white";
        location.reload();
    }
    else{
        $(this).attr('value', 'false');
        document.cookie = 'theme=; Max-Age=0';
        location.reload(); 
    }
})

</script>
</body>
</html>
