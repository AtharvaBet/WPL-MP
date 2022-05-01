<?php
session_start();

if (isset($_POST['verify'])) {
 
 $user_otp=$_POST['otp'];

 $otp=$_SESSION['otp'];

 if ($otp==$user_otp) {
    ?>
          
          <script>
            alert('Login Successful')
          </script>
    <?php
 }

  else{
?>
          <script>
            alert('Wrong OTP')
          </script>
    <?php

  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>OTP LOGIN SYSTEM USING TWILION API</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">OTP LOGIN SYSTEM </a>
    </div>
   
</nav>

<div class="jumbotron">
  <div class="container text-center">
     
    <form method="post" action="verify.php" >

      <input type="number" name="otp">

      <button type="submit" name="verify" class="btn btn-success">VERIFY</button>
      
    </form>


  </div>
</div>
  


</body>
</html>


