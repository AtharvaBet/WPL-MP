<?php

//Connecting to the database 
$dbServername ="localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "queries";
$conn_queries = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbname);

           
if (!$conn_queries){
    die('<div class="alert alert-danger" role="alert">
    System connectivity Failed. Please register again!
                  </div>');
    exit();
}

?>