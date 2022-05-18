<?php

$error = array('email'=>'', 'username'=>'', 'pwd'=>'', 'rpwd'=>'');
$email = '';
$user = '';
$pass = '';
$rep = '';

if(isset($_POST['submit']))
{
   if (empty($_POST['email'])) //Checks if email is empty
   {
       $error['email'] = 'You need to submit a Email ';
   }
   else {
    $email = htmlspecialchars($_POST['email']); //Assigns email to a variable
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) //Checks if email contains the nescessary characters
    {
    $error['email'] = 'Email must be a valid email address ';  
    }
   }

   if (empty($_POST['username'])) //Checks If Username is empty
   {
       $error['username'] = 'You need to submit a Username ';
   }
   else {
    $user = htmlspecialchars($_POST['username']); //Assigns username to a variable
   }

   if (empty($_POST['pwd'])) //Checks if password is empty
   {
       $error['pwd'] = 'You need to submit a Password ';
   }
   else {
    
    $pass = htmlspecialchars($_POST['pwd']); //Assigns password to a variable
   
    if (empty($_POST['rpwd']))  //Checks if the repeated password is empty
   {
       $error['rpwd'] = 'You need to repeat your Password ';
   }
   else {
       $rep = htmlspecialchars($_POST['rpwd']); //Assigns the repeated password to a variable
       if ($_POST["pwd"] === $_POST['rpwd']) //Checks if the repeated password is the same as the password
       {
        
       }
       else 
       {
           $error['rpwd'] = 'You need to repeat the exact password that you set ';
       }
   }
   }
   if (array_filter($error)){
       
   }
   else {
    $conn = mysqli_connect('localhost', 'Tobahm', 'pogwog', 'slutprojekt'); //connects to the database

    if($conn->connect_error) //Checking for errors
    {
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    }
    else {
       
        $setuser = $conn->prepare("insert into users(Email, Username, Pass) values(?, ?, ?)"); 
        $setuser->bind_param("sss", $email, $user, $pass); //inserts mail, username and password into the database
        $execute = $setuser->execute();
        echo $execute;
        $setuser->close();
        $conn->close(); //closes the connection to the database
        
        header('location: login.php'); //sends user to the logged in home page
    }

   }
}

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="bootstrap.min.css">
<meta charset="utf-8" name="viewport" content="width-device-width, initial-scale=1">
</head>
<?php
include('bas.php');
?>
<body>
<style>
<?php include('index.css')?>
</style>
<div id="sign">
<section class="container grey-text text-center">
<h4 class="center">Sign up </h4>
<form class="white" action="signup.php" method="POST">
<div class="d-block">
<label>Your Email:</label>
<input type="text" name="email" value="<?php echo $email ?>">
<div style="color:red"><?php echo htmlspecialchars($error['email']);?></div>
</div>
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
<div class="d-block">
<label>Repeat Password:</label>
<input type="password" name="rpwd" value="<?php echo $rep ?>">
<div style="color:red"><?php echo htmlspecialchars($error['rpwd']);?></div>
</div>
<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0" style="border: 2px solid black;">
</form>
</section>
</div>
</body>
</html>