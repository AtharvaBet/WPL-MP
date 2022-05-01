<?php

include 'registrationdb.php';
include 'queriesdb.php';

if($_SERVER['REQUEST_METHOD']=="POST"){
    $id = $_POST['id'];
    $status = $_POST['status'];

    $sql3 = "UPDATE `details` SET `vaccinated`='$status' WHERE `id` = '$id'";
    $result1 = mysqli_query($conn_details,$sql3);

}

$sql1 = "SELECT * FROM `details`";
$sql2 = "SELECT * FROM `queries`";

$result1 = mysqli_query($conn_details,$sql1);
if(!$result1){
    echo'<div class="alert alert-danger" role="alert">
                            No Result Found. Try Again!
                          </div> ';
}

$result2 = mysqli_query($conn_queries,$sql2);
if(!$result2){
    echo'<div class="alert alert-danger" role="alert">
    No Result Found. Try Again!
  </div> ';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        table, th,td{
            border-collapse: collapse;
        }
       #update{
           text-decoration: none;
           color: black;
           background-color: aqua;
           padding: 10px;
           border-radius: 5px;
       }
       #update:hover{
           text-decoration: none;
           color: black;
           /* padding: 15px; */
           border-radius: 5px;
           border: 1px solid blueviolet;
       }
        .outer-box{
            display: flex;
            flex-direction: column;
            width: 100vw;
            /* border: 2px solid black; */
        } 
        .logo-header{
        display: flex;
        justify-content: center;
        }
        .symbol{
            margin-right: 10px;
        }
        .navbar{
            width: 100vw;
            background: linear-gradient(rgba(142, 248, 223, 0.8), rgba(69, 223, 234, 0.8)), url();
            border-radius: 15px;
            margin-bottom: 20px;
        }
        .options{
            display: flex;
            flex-direction: row;
            width: 100vw;
            justify-content: center;
            padding-top: 15px;
            padding-bottom: 15px;
        }
        .inbox{
            display: flex;
            justify-content: center;
            border: 2px solid black;
            width: 50%;
            padding: 10px;
            border-radius: 15px;
            font-family: 'Source Serif 4', sans-serif;
            font-size: 16px;
            text-transform: uppercase;
            color: rgb(7, 7, 7);
            transition: all 0.9 ease-in-out 0.5s;
            margin: 2px;
        }
        .inbox:hover{
            background-color: white;
            transform: scale(1.1);
            cursor: pointer;
            color: rgb(40, 172, 190);
            border: 2px solid rgb(170, 34, 229);
        }
        .options div a{
            text-decoration: none;
            padding: 5px 10px;
            font-family: 'Source Serif 4', sans-serif;
            font-size: 16px;
            text-transform: uppercase;
            color: rgb(7, 7, 7);
            cursor: pointer;
            transition: all 0.9 ease-in-out 0.5;
        }
        th,td {
            padding-bottom: 20px;
            padding: 15px;
            text-align: left;
        }
        .slide-table{
            border: 2px solid black;
            border-radius: 20px;
            margin-top: 25px;
        }
        .essentials{
            margin-top: 10px;
            transition: all 0.9s ease-in-out 1;
            font-size: medium;
        }
        .heading{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="outer-box">
        <div class="logo-header">
            <div class="symbol">
                <img src="images/symbol1.png" alt="loading">
            </div>
            <h1 style="color: rgb(18, 226, 170);">IMMUNOVAX</h1>
        </div> 
        <div class="navbar">
            <div class="options">
                <div id="Patient" class="inbox" onclick="showTableView('details','Patient')">
                    Patient Details
                </div>
                <div id="Queries" class="inbox" onclick="showTableView('queries','Queries')">
                    Queries
                </div>
            </div>
        </div>
        <div class="box">
            <table id="details" class="slide-table" style="width: 100%;">
                <tr class="heading">
                    <th>Ref id</th>
                    <th>Name</th>
                    <th>Dob</th>
                    <th>Gender</th>
                    <th>Vaccine Name</th>
                    <th>Address</th>
                    <th>Comorbid</th>
                    <th>Mobile No</th>
                    <th>Aadhar Card</th>
                    <th>Dose No</th>
                    <th>Vaccination Center</th>
                    <th>Preferred Date</th>
                    <th>Preferred Slot</th>
                    <th>Vaccination Status</th>
                </tr>
                <?php
                    if (mysqli_num_rows($result1) > 0) {
                        // $sn=1;
                      while($data = mysqli_fetch_assoc($result1)) {
                    ?>
                    <tr>
                       <td><?php echo "36985214".$data['id']; ?> </td>
                       <td><?php echo $data['name']; ?> </td>
                       <td><?php echo $data['dob']; ?> </td>
                       <td><?php echo $data['gender']; ?> </td>
                       <td><?php echo $data['vaccine_name']; ?> </td>
                       <td><?php echo $data['address']; ?> </td>
                       <td><?php echo $data['comorbid']; ?> </td>
                       <td><?php echo $data['mobileno']; ?> </td>
                       <td><?php echo $data['aadhar']; ?> </td>
                       <td><?php echo $data['dose_no']; ?> </td>
                       <td><?php echo $data['vacc_center']; ?> </td>
                       <td><?php echo $data['preferred_date']; ?> </td>
                       <td><?php echo $data['preferred_slot']; ?> </td>

                       <td>
                           <form action="admin.php" method="POST">
                               <label for="status"><input type="radio" name="status" value="1">Vaccinated</label>
                               <input type='hidden' name="id" value=" <?php echo $data['id']; ?> " />
                           <input type="submit" value="Update" id="update">
                           </form>
                       </td>

                     <tr>
                     <?php
                    //   $sn++;
                      }} else { ?>
                        <tr>
                         <td colspan="13">No Data Found</td>
                        </tr>
                <?php } ?>
                
            </table>
            <table id="queries" class="slide-table" style="width: 100%;">
                <tr class="Qheading">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
                <?php
                    if (mysqli_num_rows($result2) > 0) {
                      $sn=1;
                      while($data = mysqli_fetch_assoc($result2)) {
                    ?>
                    <tr>
                       <td><?php echo $sn; ?> </td>
                       <td><?php echo $data['name']; ?> </td>
                       <td><?php echo $data['email']; ?> </td>
                       <td><?php echo $data['message']; ?> </td>
                     <tr>
                     <?php
                      $sn++;}} else { ?>
                        <tr>
                         <td colspan="3">No Queries</td>
                        </tr>
                    <?php } ?>
        
            </table>
        </div>
    </div>
    <script>
        function showTableView(view,tab){
            var i, tables;
            tables = document.getElementsByClassName("slide-table");
            for(i=0;i<tables.length;i++){
                tables[i].style.display = 'none';
            }

            document.getElementById(view).style.display = 'block';

            document.getElementById(tab).style.cssText('background-color: white;transform: scale(1.1);cursor: pointer;color: rgb(40, 172, 190); border: 2px solid rgb(170, 34, 229)');

        }

        document.getElementById("Patient").click();

    </script>

</body>

</html>