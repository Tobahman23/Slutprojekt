<?php
session_start();
$error = array('username'=>'', 'pwd'=>'');
$user= '';
$pass= '';
$conn = mysqli_connect('localhost', 'Tobahm', 'pogwog', 'slutprojekt');

if(isset($_POST['submit']))
{
if($conn->connect_error)
{
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
}
else {

    if (empty($_POST['username'])) //Checks If Username is empty
    {
        $error['username'] = 'You need to submit a Username';
    }

    else {
        $user = htmlspecialchars($_POST['username']);
        if (empty($_POST['pwd'])) //Checks If Username is empty
        {
            $error['pwd'] = 'You need to submit a Password';
        } 
     else {
$pass = htmlspecialchars($_POST['pwd']);
   
    $sel = "SELECT Email, Pass, Username, Id FROM users where Username ='$user' && Pass = '$pass'";

$result = mysqli_query($conn, $sel);

$number = mysqli_num_rows($result);

if($number == 1)
{
 $_SESSION['userid'] = $user;
 header('location:index2.php');
}
else {

$error['pwd'] = 'This account does not exist, are you sure that you spelled everything correctly?';
}
     }
    }
}
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
?>
<body>
<style>
<?php include('index.css')?>
</style>
<div id="log">
<section class="container grey-text text-center">
<h4 class="center">Log in </h4>
<form class="white" action="login.php" method="POST">
<div class="d-block">
<label>Username:</label>
<input type="text" name="username" value="<?php echo $user ?>">
<div style="color:red"><?php echo htmlspecialchars($error['username']);?></div>
</div>
<div class="d-block">
<label>Password:</label>
<input type="password" name="pwd" value="<?php echo $pass ?>">
<div style="color:red"><?php echo htmlspecialchars($error['pwd']);?></div>
</div>
<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0" style="border: 2px solid black;">
</form>
</section>
</div>
</body>
</html>