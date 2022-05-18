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
<div id="riksdag" style="margin-bottom:2%;">

<h3 class="d-block"> All about riksdagen</h3>
<p class="d-block">
One of the most important tasks of the Riksdag is to decide on laws. Proposals for a new law, or an amendment to a law that already applies, usually come from the government in a bill. But a bill can also come in a motion from one or more members of parliament.

All bills are prepared in committee before the Riksdag makes a decision. In order for the proposal to go through, it is required that a majority of those who vote say yes to the proposal. The Riksdag announces its decision to the Government, which issues the new law and ensures that it is as decided by the Riksdag.
</p>
<img src="bilder/riksdag.jpg" class="img-fluid d-block" style="margin-left:auto; margin-right:auto; margin-bottom:2%; width:30%; height:30%;" alt="Riksdagen">
<p class="d-block">
The Riksdag decides on central government expenditure and revenue in the central government budget. The Riksdag does this after the government in the budget bill has submitted proposals on how the state should use its money. When the Riksdag has decided on the state budget, the government is responsible for implementing the Riksdag's decision.
</p>
<img src="bilder/lag.jpg" class="img-fluid d-block" style="margin-left:auto; margin-right:auto; margin-bottom:2%; width:30%; height:30%;" alt="Beslut">
<p class="d-block">
The Riksdag controls in several ways how the government and the authorities carry out their work.

The Constitution Committee, KU, reviews that the government follows the rules.
Members can ask questions to the government.
If the Riksdag does not have confidence in a minister or the Prime Minister, the Riksdag can decide on a motion of censure.
Citizens who are dissatisfied with the authorities' handling can turn to the Ombudsman.
The National Audit Office examines how the state uses its money.
</p>
<img src="bilder/riks.jpg" class="img-fluid d-block" style="margin-left:auto; margin-right:auto; margin-bottom:2%; width:30%; height:30%;" alt="Riksdagen">
<br>
</div>
</body>
</html>