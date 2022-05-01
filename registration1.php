<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        include 'registrationdb.php';

        $f_name = $_POST['f_name'];
        $m_name = $_POST['mid_name'];
        $l_name = $_POST['l_name'];

        //Concatenating all the strings of name together
        $name = $f_name." ".$m_name." ".$l_name;

        $dob = $_POST['dob'];
        $vaccine_name = $_POST['vaccine_name'];
        $address = $_POST['address'];
        $gender = $_POST['optradio'];
        $comorbid = $_POST['comorbid'];

        session_start();
        $mobileno = $_SESSION['mobileNo'];

        $AadharCard = $_POST['aadhar_card'];
        $dose_no = "1";
        $vacc_center = $_POST['vaccination_center'];
        $appoint_date = $_POST['appoint_date'];
        $preferred_slot = $_POST['time_slot'];
        $vaccinated = "NA";
    
        $sql = "INSERT INTO `details` (`name`,`dob`,`gender`,`vaccine_name`,`address`,`comorbid`,`mobileno`,`aadhar`,`dose_no`,`vacc_center`,`preferred_date`,`preferred_slot`,`vaccinated`) VALUES ('$name','$dob','$gender','$vaccine_name','$address','$comorbid','$mobileno','$AadharCard','$dose_no','$vacc_center','$appoint_date','$preferred_slot','$vaccinated')";
    
        $result = mysqli_query($conn_details,$sql);
    
        if($result){
          header("Location:/Web_mini_Project/dashboard.php");
        }
        else{
            echo'<div class="alert alert-danger" role="alert">
                            System connectivity Failed. Please register again!
                          </div> ';
        }
    }
    
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300&display=swap" rel="stylesheet">
    
    <title> Form </title>
    <style>
        h1{
            text-align: center;
            font-family: FontAwesome;
        }
        .name,.dob,.vaccine_name,.address,.gender,.comorbid,.mob_num,.aadhar_num,.button,.appointment_date,.num_of_dose,.vaccine_center,.preferred-slot{
           margin-left: 50px;
           padding-bottom: 18px;
        }
        h1 {
           color: #084594;
           font-weight: bold;
        }
        label{
           font-weight: bold;
        }
        .radio-inline{
           padding-left:50px;
           font-weight: normal;
        }
    </style>
</head>

<body style="background-color:#ecfff1">
   
     <h1>Vaccination Registration for Dose-1</h1>
    <form action ="/Web_mini_Project/registration1.php" method="post" >
      
        <div class="row name" >
            <label for ="name" style>Name:</label>
            <div class="col col-md-3 f_name">
                <input type="text" class="form-control " name="f_name" placeholder="First name" required>
            </div>
            <div class="col col-md-3 mid_name">
                <input type="text" class="form-control " name="mid_name"  placeholder="Middle name" >
            </div>
            <div class="col col-md-3 l_name">
                <input type="text" class="form-control " name = "l_name"placeholder="Last name" required>
            </div>
        </div>
  
        <div class="col-md-3 dob">
            <label for="dob" class="form-label"> Date of birth: </label>
            <input type="date" id="Date" name="dob" class="form-control" required >
        </div>
      
        <div class="col-md-4 vaccine_name">
            <label for="name_vaccine" class="form-label">Name of the vaccine:</label>
            <select name="vaccine_name" class="form-select" " id="" required>
                <option value="">Choose..</option>
                <option value="Covidshield">Covidshield</option>
                <option value="Covaxin">Covaxin</option>
                <option value="Covavax">Covavax</option>
                <option value="Corbevax">Corbevax </option>
                <option value="Sputnik">Sputnik </option>
                <option value ="Moderna"> Moderna</option>
            </select>
        </div>

        <div class="form-group col-md-6 address">
            <label for="address">Current Address:</label>
            <textarea class="form-control" name ="address"id="address" rows="3" required></textarea>
        </div>
                
        <div class="radio gender">
            <label for ="gender" required>Gender:</label>
            <label class="radio-inline pop"><input type="radio" name="optradio" checked>Male</label>
            <label class="radio-inline" pop><input type="radio" name="optradio">Female</label>
            <label class="radio-inline" pop><input type="radio" name="optradio">Others</label>
        </div>
   
        <div class="radio comorbid" >
            <label for ="comorbid_check " required>Comorbidity(e.g. diabetes , allergy or any other disease): </label>
            <label class="radio-inline"><input type="radio" name="comorbid" value="yes">Yes</label>
            <label class="radio-inline"><input type="radio" name="comorbid" value="no" checked>No</label>
        </div>

        <div class="form-group col-md-4 aadhar_num">
            <label for ="aadhar_card" required>Aadhar Card Number:</label>
            <input type="text" name="aadhar_card" class="form-control item" id="adhar_num" placeholder="e.g. 123465678965">
         </div>
         
         <div class="col-md-4 vaccine_center">
            <label for="vaccination_center" class="form-label">Preferable Vaccination Centre;</label>
            <select name="vaccination_center" class="form-select" id="vaccination_center" required>
                <option>Choose..</option>
                <option name="vaccination_center">Aarey Check Naka Gymkhana</option>
                <option name="vaccination_center">Abhuyday Nagar School P 205 </option>
                <option name="vaccination_center">Acworth Municipal Hosp Wadala</option>
                <option name="vaccination_center">Adharika Bhawan Gorai</option>
                <option name="vaccination_center">Alica Hall</option>
                <option name="vaccination_center">Anand Nagar HP ANDHERI W</option>
            </select>
        </div>

         <div class="col-md-3 preferred-slot">
            <label for="preferred_time_slot" class="form-label">Preferable Vaccination Slot</label>
            <select name="time_slot" class="form-select"  id="time_slot" required>
                <option>Choose..</option>
                <option name="time_slot">9:30AM - 11:30AM</option>
                <option name="time_slot">1:30PM - 3:30PM</option>
                <option name="time_slot">5:30PM - 7:30PM</option>
            </select>
        </div>
      
        <div class="col-md-3 appointment_date">
            <label for="dob" class="form-label"> Prefered Appointment Date: </label>
            <input type="date" id="appoint_date" name="appoint_date" class="form-control" required >
        </div>

        <div class="d-flex justify-content-center button">
            <button type="submit" class="btn btn-outline-primary col-md-1"  > Submit</button>
        </div>

    </div>
    </form>

    <script>
    
     function validation(){
         var result = true;
         var m = document.getElementsByName("mobile_num")[0].value;
         var m_id = document.getElementById("mob_num").value;
         var a = document.getElementsByName("aadhar_card")[0].value;
//           const letters = /^[A-Za-z]/;
//         var f_name = document.getElementsByName("f_name")[0].value;
//         var mid_name = document.getElementsByName("mid_name")[0].value;
//         var l_name = document.getElementsByName("l_name")[0].value;

    
// if((f_name.value.match(letters)) && (mid_name.value.match(letters))&& (l_name.value.match(letters)))
// {
//  alert("okay");}
 
         if(m.length !=10 ){
             
             alert("Mobile Number Must be of only 10 digits"); 
               
         } 
         if ( a.length !=12 ){
             alert("Invalid Aadhar Card Number");
            
         }
         if(isNaN(m_id)){
             alert("Invalid number");
         }
       return result;
     }
</script>

</body>

</html>
 
