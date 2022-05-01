<?php
session_start();
include 'registrationdb.php';

$LOGIN_NO = $_SESSION['mobileNo'];

//Used for displaying the vaccination status of dose-1
$sql2 = "SELECT * FROM `details` WHERE `mobileno` = '$LOGIN_NO' AND `dose_no` = '1' AND `vaccinated` = '1' ";
$result2 = mysqli_query($conn_details,$sql2);

//Used for displaying the vaccination status of dose-2
$sql3 = "SELECT * FROM `details` WHERE `mobileno` = '$LOGIN_NO' AND `dose_no` = '2' AND `vaccinated` = '1' ";
$result3 = mysqli_query($conn_details,$sql3);

//Used for displaying the appointment slip for dose 2 
$sql4 = "SELECT * FROM `details` WHERE `mobileno` = '$LOGIN_NO' AND `dose_no` = '2' ";
$result4 = mysqli_query($conn_details,$sql4);

//Displaying data of the user
$sql1 = "SELECT * FROM `details` WHERE `mobileno` = '$LOGIN_NO' AND `dose_no` = '1'";
$result = mysqli_query($conn_details,$sql1);

?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <title>Dashboard</title>
    <style>
        .outer-container{
            display: flex;
            flex-direction: column;
        }
        .container{
            display: grid;
            grid-template-areas:
            'image details'
            'footer footer';
            border: 2px solid black;
            width: 75%;
            margin-left: 12.5%;
            margin-top: 25px;
        }
        .heading{
            display: flex;
            justify-content: center;
        }
        .symbol{
            margin-right: 10px;
        }
        .navBar{
        width: 100%;
        background: linear-gradient(rgba(142, 248, 223, 0.8), rgba(69, 223, 234, 0.8)), url();
        text-align: center;
        }
        .navBar ul{
            overflow: auto;
        }
        .navBar ul li {
            float: left;
            list-style: none;
            padding: 5px 5px ;
            margin: 10px 30px;
            position: relative;
        }
        .navBar li{
            display: inline-block;
        }
        .navBar li a{
            text-decoration: none;
            padding: 5px 10px;
            font-family: 'Source Serif 4', sans-serif;
            font-size: 16px;
            text-transform: uppercase;
            color: rgb(19, 19, 18);
            cursor: pointer;
            transition: all 0.9 ease-in-out 0.5;
        }
        .navBar li a:hover{
            /* transform: scale(3); */
            background: #fff;
            color: #333;
            border-radius: 10px;
            border-color:blueviolet;
        }
        .image{
            grid: image;
            width: auto;
            padding-left: 25px;
            padding-top: 10px;
        }
        .details{
            grid: details;
            display: flex;
            flex-direction: column;
        }
        .box1{
            justify-content: left;
            padding: 20px;
        }
        .box2{
            display: flex;
            justify-content: left;
        }
        .inbox1{
            display: flex;
            flex-direction: column;
            align-items: left;
            margin-right: 35px;
            margin-left: 5px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .box3{
            display: flex;
            justify-content: center;
            padding: 10px;
            margin-top: 10px;
        }
        .inbox2{
            display: flex;
            width: 50%;
            flex-direction: column;
            height: fit-content;
            border: 2px solid rgb(149, 144, 144);
            margin-right: 10px;
            margin-bottom: 15px;
        }
        .div1{
            display: flex;
            flex-direction: row;
            align-items: left;
            padding-bottom: 10px;
            padding-right: 10px;
        }    
        #dose1{
            margin-right: 15px;
        }    
        #dose2{
            margin-right: 15px;
        }
        .div2{
            display: flex;
        }
        .footer{
            grid-area: footer;
            width: 100%;
            background: linear-gradient(rgba(142, 248, 223, 0.8), rgba(69, 223, 234, 0.8)), url();
        }
        #appoint-1{
            text-decoration: none;
           color: black;
           background-color: yellow;
           padding: 10px;
           border-radius: 5px;
        }
        #appoint-1:hover{
           text-decoration: none;
           color: black;
           background-color: white;
           border-radius: 5px;
       }
        #appoint-2{
            text-decoration: none;
           color: black;
           background-color: yellow;
           padding: 10px;
           border-radius: 5px;
        }
        #appoint-2:hover{
           text-decoration: none;
           color: black;
           background-color: white;
           border-radius: 5px;
       }
    </style>
</head>
<body>
    <div class="outer-container">
        <div class="heading">
            <div class="symbol">
                <img src="images/symbol1.png" alt="loading">
            </div>
            <h1 style="color: rgb(18, 226, 170);">IMMUNOVAX</h1>

        </div>
        <div class="header">
            <nav class="navBar">
                <ul>
                    <li><a href="front_page.php">Home</a></li>
                    <li><a href="About_us.html">About Us</a></li>
                    <li><a href="FAQ.html">FAQ's</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href ="registration2.php" id="slot">BOOK YOUR SLOT</a></li>
                    <li><a href="appointment1.php" id="appoint-1">Appointment Slip Slot-1</a></li>
                    <li><a href="appointment2.php" id="appoint-2">Appointment Slip Slot-2</a></li>
                </ul>
            </nav>
            <?php
            if($result4->num_rows==0){
                echo'
                <script>
                var x = document.getElementById("appoint-2");
                x.style.visibility = "hidden";
                </script>';
            }
            else{
                echo'
                <script>
                var x = document.getElementById("appoint-2");
                x.style.visibilty = "visible";
                document.getElementById("slot").style.display = "none";
                </script>';
            }
            ?>
        </div>
        <div class="container">
            <div class="image">
                <img src="images/man.png" alt="Loading">
            </div>

            <?php $data = mysqli_fetch_assoc($result); ?>
            <?php $data2 = mysqli_fetch_assoc($result4); ?>

            <div class="details">
                <div class="box1">
                    <h3> <?php echo $data['name']; ?> </h3>
                    <br>
                    <hr>
                </div>
                
                <div class="box2">
                    <div class="inbox1">
                        <div style="color: rgb(91, 88, 88);">Ref id</div>
                        <div id="id"><?php echo "36985214".$data['id']; ?> </div>
                    </div>

                    <div class="inbox1">
                        <div style="color: rgb(91, 88, 88);">Ref Code</div>
                        <div id="code"><?php echo "14".$data['id']; ?></div>
                    </div>

                    <div class="inbox1">
                        <div style="color: rgb(91, 88, 88);">Photo Id</div>
                        <div id="card">Aadhar Card</div>
                    </div>

                    <div class="inbox1">
                        <div style="color: rgb(91, 88, 88);">Id No</div>
                        <div id="id_no"><?php echo $data['aadhar']; ?></div>
                    </div>

                    <div class="inbox1">
                        <div style="color: rgb(91, 88, 88);">Date Of Birth</div>
                        <div><?php echo $data['dob']; ?></div>
                    </div>
                </div>
                <div class="box3">
                    <div class="inbox2" id="dose-1">
                        <div class="div1">
                            <img id="dose1" src="images/dose1.png" alt="Loading">
                            <div style="font-size: 20px;"><?php echo $data['vaccine_name']; ?></div>
                        </div>
                        
                        <div class="div2">
                            <div style="color: rgb(16, 242, 91);""><?php echo $data['vacc_center']; ?></div>
                            <div id="date"><?php echo $data['preferred_date']; ?></div>
                        </div>
                    </div>

                    <div class="inbox2" id="dose-2">
                        <div class="div1">
                            <img id="dose2" src="images/dose2.png" alt="Loading">
                            <div id="vacc_name1" style="font-size: 20px;"><?php echo $data2['vaccine_name']; ?></div>
                        </div>

                        <div class="div2">
                            <div class="div2">
                                <div style="color: rgb(16, 242, 91);"><?php echo $data2['vacc_center'];?></div>
                                <div id="date"> <?php echo $data2['preferred_date']; ?> </div>
                            </div>
                        </div>
                    </div>

                    <!-- Displaying the Vaccination Status of Dose-1 -->
                    <?php
                        if($result2->num_rows==0){
                            echo'
                            <script>
                            var x = document.getElementById("dose-1");
                            x.style.display = "none";
                            </script>';
                        }
                        else{
                            echo'
                            <script>
                            var x = document.getElementById("dose-1");
                            x.style.display = "visible";
                            </script>';
                        }
                    ?>

                    <!-- Displaying the vaccination Status of Dose-2 -->
                    <?php
                        if($result3->num_rows==0){
                            echo'
                            <script>
                            var x = document.getElementById("dose-2");
                            x.style.display = "none";
                            </script>';
                        }
                        else{
                            echo'
                            <script>
                            var x = document.getElementById("dose-2");
                            x.style.display = "visible";
                            </script>';
                        }
                        ?>

                </div>
            </div>
            <div class="footer">
                |
            </div>

        </div>
    </div>
</body>
</html>