<?php 
session_start();

 include('key.php');
$num=rand(1000,9999);
$_SESSION['otp']=$num;
$msg="Your Login OTP is ".$num;
require_once 'Twilio/autoload.php'; 
 
use Twilio\Rest\Client; 
 
$sid    = $sid_key;
$token  = $token_key;
$twilio = new Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create($number, // to 
                           array( 
                               "from" => "+15074787932",       
                               "body" => $msg
                           ) 
                  ); 
 



 header("Location:verify.php");

?>
