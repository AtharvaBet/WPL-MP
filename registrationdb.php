<?php

    //Connecting to the database 
    $dbServername ="localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "registration";
    
    $conn_details = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbname);
            
   if (!$conn_details){
    die('<div class="alert alert-danger" role="alert">
    System connectivity Failed. Please register again!
                  </div>');
    exit();
}
?>