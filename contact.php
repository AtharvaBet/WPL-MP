<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    // //Connecting to the database 
    // $dbServername ="localhost";
    // $dbUsername = "root";
    // $dbPassword = "";
    // $dbname = "queries";
    
    

    // $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbname);
    // if (!$conn){
    //     die('<div class="alert alert-danger" role="alert">
    //     There is a issue in the database connectivity!
    //   </div>');
    // }
    $sql = "INSERT INTO `queries` (`name`,`email`,`message`) VALUES ('$name','$email','$message')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo'<div class="alert alert-success" role="alert">
        Response has been submitted successfully!
      </div>';
    }
    else{
        echo'<div class="alert alert-danger" role="alert">
       System Connectivity Error. Please try submitting again!
      </div> ';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Contact</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Comfortaa', cursive;
}
.contact-wrapper{
    display: flex;
    justify-content: flex-start;
    align-items: center;
    flex-direction: column;
    width: 100%;
    min-height: 100vh;
}
.heading{
    padding: 30px 0px;
    font-size: 35px;
}
.contact-box{
    display: flex;
    width: 90%;
    min-height: 80vh;
    background-color: rgb(238, 238, 238);
    padding: 20px;
    box-shadow: 15px 15px 15px rgb(211, 208, 208);
    border-radius: 10px;
}
.contact{
    background-color: #1454b4;
    flex: 1;
    position: relative;
    overflow: hidden;
    color: white;
    padding: 50px;
    border-radius: 10px;
}
.contact h1{
    font-size: 50px;
    padding: 10px 0px;
}
.contact p{
    font-size: 20px;
    padding: 20px 0px;
}
.icon{
    padding: 20px 0px;
    display: flex;
    justify-content: flex-start;
    align-items: center;
}
.icon h3{
    z-index: 10;
   font-size: 30px;
}
.las{
    padding: 0px 10px;
    font-size: 50px;
}
.right-contact,.form-container{
    flex: 2;
    display: flex;
    justify-content: center;
    align-items: center;
}
.input{
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-direction: column;
}
form{
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-direction: column;
    margin: 20px;
}
input,textarea{
    width: 450px;
    border: none;
    border-bottom: 2px solid transparent;
    background-color: rgb(190, 187, 187);
    padding: 10px;
    border-radius: 5px;
    font-size: 20px;
    margin: 10px;
}
label{
    font-size: 22px;
    padding: 10px 0px;
}
select{
    width: 450px;
    border-radius: 5px;
    padding: 10px;
    background-color: rgb(190, 187, 187);
    border: 2px solid transparent;
    font-size: 18px;
    margin: 10px;
}
input[type=submit]{
    padding: 15px 40px;
    border: none;
    background-color:  #7785eb;
    font-size: 20px;
    margin: 30px 10px;
    border-radius: 5px;
    color: white;
    transition: .5s all ease-in-out;
    border: 2px solid transparent;
}
input[type=submit]:hover{
    background-color: transparent;
    border: 2px solid #eb77c4;
    color: black;
}
.social-icons{
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-direction: column;
}
.lab{
    padding: 20px 100px;
    font-size: 50px;
    color: rgb(33, 16, 50);
}
</style>
<body>
    <section class="contact-wrapper">

        <div class="heading">
            <h1>Contact us</h1>
        </div>

        <div class="contact-box">
            <div class="contact">
                <h1>Contact Information</h1>
                <p>Any Question? just write us a message</p>
                <div class="phone  icon">
                    <i class="las la-phone"></i>
                    <h3>+91 516 165 5624</h3>
                </div>

                <div class="email icon">
                    <i class="las la-envelope"></i>
                    <h3>MAH@gmail.com</h3>
                </div>

                <div class="location icon">
                    <i class="las la-map-marker-alt"></i>
                    <h3>Mumbai, India</h3>
                </div>

            </div>
            <div class="right-contact">
               <div class="form-container">
                   <form action="/Web_mini_Project/contact.php" method="post" onsubmit="return validation()">
                       <input name="name" type="text" placeholder="Name" required>
                       
                       <input name="email" type="email" placeholder="Email" required>
              
                       <textarea name="message" placeholder="Message" id="" cols="30" required></textarea>

                       <input type="submit">
                    </form>

                </div>
                
            </div>
        </div>
    </section>
    <script>
        function validate(){
            var name = document.getElementById('name').value;
            name_valid = /[^a-zA-Z]/;
            if(!name_valid.test(name)){
                alert("Name could only contain alphabets");
                return false;
            }
        }
    </script>
</body>
</html>





























