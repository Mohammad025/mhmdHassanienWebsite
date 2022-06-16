<?php
  include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/sign-up.css">
  <link rel="shortcut icon" href="assets/img/logocoffee1.png"> <!--title icon-->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> <!--import icons-->
  <title>Coffe-Sign up</title>
</head>
<body>

<div class="container" align="center">
<h1 class="title"> Sign Up</h1>

<!-- <img src="../assets/img/sign-up.png" class="sign-up-img"> -->

<form id="register" action="connection.php" method="post" class="reg-form">

    <input type="text" name="username" placeholder="Username"></br>
    <input type="email" required name="email" placeholder="E-mail"></br>
    <span class="ErrorMsgHolder"></span>
    <input type="password" required name="password" placeholder="Password"></br>
    <input type="password" required name="confirm-password" placeholder="Confirm Password"></br>
  <!-- <label for="DOB" >Date of Birth</label></br> -->
    <input type="date" name="DOB" placeholder="Date of Birth"></br>
    <button type="submit" name="reg" onclick="validate()">Submit</button>
    <!-- <input type='submit' name='Submit' value='Submit' /> -->
  
</form>
</div>

<script src="js/signup-script.js"></script>
</body>
</html>