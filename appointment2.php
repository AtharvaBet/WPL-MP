<?php

include 'registrationdb.php';
session_start();

$login_no = $_SESSION['mobileNo'];

$sql = "SELECT * FROM `details` WHERE `mobileno` = '$login_no' AND `dose_no` = '2'";

$result = mysqli_query($conn_details,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Slip</title>
    <style>
        .heading{
            text-align: center;
            background-color: rgb(187, 181, 181);
        }
        table, th,td{
            border: 2px solid black; 
            border-collapse: collapse;
            border-color: grey;
        }
        th,td {
            padding: 15px;
            text-align: left;
        }
        .box{
            border: 2px solid grey;
        }
    </style>
</head>
<body>
    <h3 class="heading">Appointment Details</h3>

    <?php $data = mysqli_fetch_assoc($result); ?>
    
    <table style="width:100%">
        <tr>
            <th>Center</th>
            <td colspan="5"><?php echo $data['vacc_center']; ?></td>
        </tr>
        <tr>
            <th>Date</th>
            <td><?php echo $data['preferred_date'] ?></td>
            <th>Time</th>
            <td>09:00AM-02:00PM</td>
            <th>Preferred Time Slot</th>
            <td><?php echo $data['preferred_slot'] ?></td>
        </tr>
    </table>
    <h3 class="heading">Details Of individual</h3>
    <table style="width: 100%;">
        <tr>
           
            <th>Reference Id</th>
            <th>Name</th>
            <th>Vaccine Name</th>
            <th>Dose Type</th>
            <th>Photo id to Carry</th>
            <th>Secret Code</th>
        </tr>
        <tr>
            <td><?php echo "36985214".$data['id']; ?></td>
            <td><?php echo $data['name'];?></td>
            <td><?php echo $data['vaccine_name'] ?></td>
            <td><?php echo $data['dose_no']; ?></td>
            <td>Aadhaar Card</td>
            <td><?php echo "214".$data['id']; ?></td>
        </tr>
    </table>
    <br>
    <h3 class="heading">Instructions</h3>
    <div class="box">
        <p>1.  Please carry the registered mobile phone and the requisite documents, including appointment slip, the Photo ID card
        used for registration, Employment Certificate (HCW/FLW) etc. while visiting thevaccination center, for verification at the
        time of vaccination</p>
        <br>
        <p>2.  Please check for additional eligibility conditions such as co-morbidities, BPL, Antyodaya, disability etc. If any, prescribed
        by the respective State/UT Government for vaccination at Government Vaccination Centers,for 18-44 age group, and
        carry the other prescribed documents (e.g. Comorbidity Certificate etc.) as suggested byrespective State/UT (on their
        website).</p>
        <br>
        <p>3. Please arrive at the vaccination center only 15 minutes before the scheduled time to avoid overcrowding.</p>
        <br>
        <p>4. Please confirm from the vaccinator if your details such as name, gender, year of birth, ID card type and ID card number
        is correctly recorded in the system.</p>
        <br>
        <p>5. Last 4 digits of your beneficiary reference ID is your security PIN. Please provide the same to the vaccinator/verifier,
        when asked.</p>
        <br>
        <p>6. If you do not receive the confirmation SMS for vaccination, please do contact the vaccinator/ vaccination center before leaving the vaccination center.</p>
    </div>
</body>
</html>