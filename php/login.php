<?php
  include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/login.css">
  <link rel="shortcut icon" href="assets/img/logocoffee1.png"> <!--title icon-->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> <!--import icons-->
  <title>Coffee-Login</title>
</head>
<body>

      <div class="container">

        <div class="left">
            <img src="../assets/img/login.png" alt="">
        </div>

        <div class="right">
          <div class="right-container">
              <div><h2>Login</h2></div> 
              <div><p>Dont have an account? <a href="http://127.0.0.1:8012/finalProject/php/sign-up.php">Create account</a> its will not take more than one minute.</p></div>
              <div class="div-form">
                <form action="">
                  <div class="form-comp">
                    <input type="text" placeholder="Username">
                  </div>
                  <div class="form-comp">
                    <input type="password" placeholder="Password">
                  </div>
                  <div class="form-comp">
                    <input type="submit" value="Login">
                  </div>
                </form>
              </div>
          </div>
        </div>


      </div>




<script src="js/login-script.js"></script>
</body>
</html>