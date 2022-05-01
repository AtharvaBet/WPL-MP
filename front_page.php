<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>
<style>
    .body{
        font-family: 'Source Serif 4';
        background-color: #8fe946;
    }
    .container{
        grid-template-areas: 
        'header'
        'heading'
        'slide-box'
        'box-2'
        'box-3';
    }
    .logo-header{
        grid-area: header;
        display: flex;
        justify-content: center;
    }
    .symbol{
        margin-right: 10px;
    }
    .heading{
        grid: heading;
        margin-right: 50%;
    }
    .navbar{
        width: 100%;
        display: grid;
        grid-template-areas:
        'options admin';
        background: linear-gradient(rgba(142, 248, 223, 0.8), rgba(69, 223, 234, 0.8)), url();
        border-radius: 15px;
        margin-bottom: 20px;
    }
    .options{
        grid: options;
        display: flex;
        width: 100vh;
        align-items: left;
        padding: 20px 30px;
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
        padding-right: 10px;
        margin-right: 20px;
    }
    .options div a:hover{
        transform: scale(1.5);
        background: rgb(243, 243, 242);
        color: rgb(170, 34, 229);
        border-radius: 10px;
    } 
    .admin{
        grid: admin;
        display: flex;
        justify-content: center;
        width: auto;
        margin-left: 50px;
    }
    .admin div a{
        text-decoration: none;
    }
    #admin1{
        border-radius: 50%;
        margin-top: 5px;
    }
    .admin-window{
        display: flex;
        align-items: center;
        border: 2px solid black;
        height: fit-content;
        margin-top: 17px;
        margin-left: 5px;
        padding: 7px;
        background-color: azure;
        transition: all 0.9 ease-in-out 0.5s;
    }
    .admin-window a{
        text-decoration: none;
    }
    .admin-window :hover{
        transform: scale(1.1);
        transition: all 0.9 ease-in-out 0.5s;
    }
    .slideshow-box{
        grid: slide-box;
        width: 100%;
        position: relative;
        border-radius: 10px;
        margin: auto;
        height: auto;
    }
    .slide{
        display: none;
    }
    .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: rgb(137, 241, 219);
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }
    .active, .dot:hover {
        background-color: #8fe946;
    }
    .fade {
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }

    .text{
        color: black;
        font-family: 'Source Serif 4', sans-serif;
        font-size: small;
        width: 35%;
        display: inline-block;
        background-color:white;
        margin-top: 180px;
    }
    .box-2{
        grid: box-2;
        display: flex;
        justify-content: center;
        background-color: #cef8f5c7;
    }
    .box-3{
        grid: box-3;
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    .inbox{
        display: flex;
        flex-direction: column;
        margin: 25px;
        border: 4px solid rgba(231, 152, 245, 0.863);
        width: 20%;
        border-radius: 25px;
        box-shadow: red;
        transition: all 0.9 ease-in-out 0.5;
    }
    .inbox:hover{
        transform: scale(1.1);
        margin: 25px;
        border: 4px solid rgba(231, 152, 245, 0.863);
        width: 20%;
        border-radius: 25px;
    }
    .in-text{
        background-color: rgb(33, 236, 202);
        margin-top: 15px;
        margin-bottom: 25px;
        padding: 5px;
        text-align: center;
    }
    h4{
        text-align: center;
    }
</style>
<body>

    <div class="container">
        <div class="logo-header">
            <div class="symbol">
                <img src="images/symbol1.png" alt="loading">
            </div>
            <h1 style="color: rgb(18, 226, 170);">IMMUNOVAX</h1>
        </div> 
        <div class="header">

            <div class="navbar">
                <div class="options">
                    <div>
                        <a href="FAQ.html">FAQ'S</a>
                    </div>
                    <div>
                        <a href="About_us.html">ABOUT US</a>
                    </div>
                    <div>
                        <a href="contact.php">CONTACT US</a>
                    </div>
                    <div >
                        <a href="/Web_mini_Project/index.php">LOGIN</a>
                    </div>
                </div>
                <div class="admin">
                    <img id="admin1" src="images/admin1.png" alt="loading">
                    <div class="admin-window">
                        <a href="admin.php">ADMIN</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="slideshow-box">

            <div class="slide fade">
                <img style="width: 100%;" src="images/megaCamp.jpeg" alt="Loading">

            </div>

            <div class="slide fade">

                <img style="width: 100%;" src="images/slide1.jpg" alt="Loading">

            
            </div>

            <div class="slide fade">

                <img style="width: 100%;" src="images/slide2.jpeg" alt="Loading">

            </div>

            <br>
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>

        </div>
        <div class="box-2">
            <h2>3 Steps to book your slots</h2>
        </div>
        <div class="box-3">

            <div class="inbox">

                <h4>Step-1</h4>
                <img src="images/pic-1.png" alt="Loading">

                <div class="in-text">

                    Get yourself registered and enter your credential and the vaccine type and submit all the details

                </div>


            </div>
            <div class="inbox">

                <h4>Step-2</h4>
                <img src="images/pic-2.png" alt="Loading">

                <div class="in-text">

                    Download the appointment certificate and read all the instructions carefully

                </div>

            </div>

            <div class="inbox">

                <h4>Step-3</h4>
                <img src="images/pic-3.png" alt="Loading">

                <div class="in-text">
                    Get yourself vaccinated at the vaccination center and download the certificate
                </div>

            </div>

        </div>
        <script>

            var slideIndex = 0;
            carousel();
            
            function carousel() {
              var i;
              var x = document.getElementsByClassName("slide");
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
              }
              slideIndex++;
              if (slideIndex > x.length) {slideIndex = 1}
              x[slideIndex-1].style.display = "block";
              setTimeout(carousel, 3500); // Change image every 3.5 seconds
            }
            
        </script>
    </body>
    </div>
</html>