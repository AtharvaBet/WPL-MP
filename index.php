<?php

session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $mobile_no = $_POST['mobileNo'];

  //Starting session for storing the mobile number of the user

  $_SESSION['mobileNo'] = $mobile_no;

  include 'registrationdb.php';

  $sql = "SELECT `mobileno` FROM `details` WHERE `mobileno` = '$mobile_no'";
  $result = mysqli_query($conn_details,$sql);

  if($result->num_rows==0){
    header("Location:registration1.php");
  }
  else{
    header("Location:dashboard.php");
  }

  $sqli->close();

  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Brygada+1918:wght@500&family=Source+Serif+4&family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <style>
      body{
        background-color: rgba(193, 253, 253, 0.411);
      }
      .outer-box{
       display: grid;
       /* background-color: rgba(193, 253, 253, 0.411); */
       grid-template-areas:
       'box image';
       font-family: Georgia, 'Times New Roman', Times, serif;
       width: 100%;
       /* border: 2px solid black; */
      }
      .box{
        grid: box;
        display: flex;
        flex-direction: column;
      }
      .image{
        /* background-color: rgba(193, 253, 253, 0.411); */
        grid: image;
        display: flex;
        justify-content: right;
        height: 100vh;
        margin-left: 100px;
        /* border: 2px solid black; */
      }
      .login{
        background-color: white;
        grid-area: login;
        display: flex;
        flex-direction: column;
        margin-top: 75px;
        align-items: center;
        border: 5px solid rgb(70, 234, 215);
        margin-left: 75px;
        border-radius: 20px;
        width: 350px;
        /* border: 2px solid black; */
        margin-left: 25px;
      }
      input{
        font-size: 16px;
        width: 100%;
        border-radius: 4px;
      }
      button{
        background-color: aqua;
        border: 2px solid black;
        border-radius: 4px;
        font-size: 16px;
        width: 100%;
      }
      button:hover{
        cursor: pointer;
      }
    </style>
</head>
<body>
  <div class="outer-box">
    <div class="box">
      <div class="login">
        <div id="image">
          <img src="images/doctor.png" alt="doctor_img">
        </div>
        <br>
        <div>An OTP will be sent to your Mobile No.</div>
        <br>
        <form action="/Web_mini_Project/index.php" method="post">
          
          <div>
            <label for="mobileNo"></label>
            <input id="mobileNo" type="text" placeholder="Enter your Mobile number" required name="mobileNo" maxlength="10">
          </div>
          <br>
          <div>
            <button type="button" onclick="validation">Get OTP</button>
          </div>
          <br>
          <div>
            <input id="otp" type="tel" placeholder=" Enter your OTP" name="OTP" required pattern="[1-9]{1[0-9]{5}" maxlength="6">
          </div>
          <br>
          <div>
            <input type="submit" onclick="validation() "></input>
          </div>
        </form>
        
          <br>
      </div>
       
    </div>
    <div class="image">
      <img src="images/loginphoto.png" alt="Login Pic">
    </div>
  </div>
    
  <script>

    function validation() {

      var p_no = document.getElementById('p_no').value;
      var otp_no = document.getElementById('otp_no').value;

      p_no_format = /[^0-9]/;
      otp_no_format = /[^0-9]/;

      if (p_no.length != 10) {

        alert("Phone number could only contain numbers!");

      }
      else if (opt.length != 6) {

        alert("otp should contain 6 digits");

      }
      else if (otp_no_format.test(otp_no)) {

        alert("otp number should be 6 digits");

      }
      else if (p_no_format.test(p_no)) {

        alert("Phone number could only contain numbers!");

      }
    }
  </script>

</body>
</html>