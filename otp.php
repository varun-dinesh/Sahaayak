<?php
include('config.php');
error_reporting(0);
session_start();

include('config.php');
error_reporting(0);
session_start();



if(isset($_POST['submit_otp'])) {
    $email= $_POST['email'];
    $password=($_POST['password']);
    $sql= "SELECT randomid FROM helper WHERE email='$email'";
    $row=mysqli_fetch_assoc(mysqli_query($conn,$sql));
    $$row=mysqli_fetch_assoc(mysqli_query($conn,$sql));
    $randomid=$row['randomid'];
    if($randomid==$_POST['otp'])
    {
        echo "<script>alert('You Have Successfully Registered');</script>";
        $update = "UPDATE helper SET status = '1' WHERE email = '$email'";
        $row=mysqli_query($conn,$update);
		header("Refresh:1; url=login.php");
    }
	else
    {
        echo "<script>alert('Enter correct otp..');</script>";
		header("Refresh:1; url=otp.php");
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://kit.fontawesome.com/f9f835e742.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/css/mbr-additional.css">
  <link rel="stylesheet" href="assets/css/mbr-additional.css" type="text/css">
  <!--<link rel ="stylesheet" href="final_css.css">-->

  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="style.css">
    <style>
        #error{
            color: red;
            font-size- 20px;
        }
        /*.bg-modal {
            background-color: rgba(0, 0, 0, 0.8);
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            /*display: none;
            justify-content: center;
            align-items: center;
          }
          .close {
              position: absolute;
              top: 0;
              right: 10px;
              font-size: 42px;
              color: #333;
              transform: rotate(45deg);
              cursor: pointer;
              :hover {
                color: #666;
              }
            }
            .modal-contents {
                height: 600px;
              width: 500px;
              background-color: white;
              text-align: center;
              padding: 20px;
              position: relative;
              border-radius: 4px;
            }
            #error_message{
              margin-bottom: 20px;
              background: #fe8b8e;
              padding: 0px;
              text-align: center;
              font-size: 14px;
              transition: all 0.5s ease;
              }
              .btn23{              background-color: #2ecc71;
              color: #fff;
              font-size: 1.1rem;
              border: none;
              outline: none;
              cursor: pointer;
              transition: .3s;
            }

            .btn23:hover{
                background-color: #27ae60;
            }*/
    </style>
</head>
<body style="background-color:#efefef;">
    <section class="menu menu2 header" once="menu" id="menu2-o" style="margin-bottom:7%;">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html">
                        <img src="sahaayak4.png" alt="SAHAAYAK" style="height: 4.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-5" href="index.php">SAHAAYAK</a></span>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="phpfilters/index11.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="login.php">Login As Helper</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="about_us.html">About Us</a>
                    </li></ul>               
            </div>
        </div>
    </nav>
</section>
            <center><strong><h1>OTP</h1></strong></center>
                       <!-- <div class="bg-modal">
                        <div class="modal-contents">

                        <div class="close">+</div>
                        <h2>Feedback</h2>
                        <div id="error_message">

                        </div>
                        <form action="" method="post" id="myform">
                          <div class="input_field"><input type="text" class="field" name="otp1" placeholder="OTP" id="otp"></div>
                          <div class="btn23">
                            <input type="submit">
                          </div>
                            </form>

                        </div>
                    </div>-->
                    <div class="upload-profile-image d-flex justify-content-center pb-5" style="margin-top:1%;margin-bottom:-2%;">
                <div class="text-center">
                    <img src="beard.png" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                </div>
            </div>
                    <div class="bg-modal">
                        <div class="modal-contents">
                        <center>
                        <div id="error_message">

                        </div>
                    <form  method="post" action="otp.php" id="myform">
                        <div class="input_field"><input style="width:22%;margin-top:0.9%;" class="field form-control" type="email" name="email" id="email" placeholder="Enter your email id" required>
                        <div class="input_field"><input style="width:22%;margin-top:0.8%;" class="field form-control" type="text" name="otp" id="phone" placeholder="Enter the otp"required></center>
                        <div class="btn23"><input type="submit" style="margin-top:1.5%;margin-left:56.5%;background-color: #ffe161 !important;
    border-color: #ffe161 !important;
    color: #614f00 !important;
    box-shadow: 0 2px 2px 0 rgb(0 0 0 / 20%);border-radius:15px;min-height: 40px;width:80px;" name="submit_otp" value="Submit"></div>
                    </form>



            <section id="footer" style="background-color:#224;color:white;margin-top:10%;">
        <img src="footer-img.png" class="footer-img">
        <div class="title-text">
            <p>CONTACT</p>
            <h1>Visit Us Today</h1>
        </div>
        <div class="footer-row">
            <div class="footer-left">
                <h1>Active Hours</h1>
                <p><i class="fa fa-clock-o"></i>Monday To Friday -9am to 9pm</p>
                <p><i class="fa fa-clock-o"></i>Saturday and Sunday 8am to 11pm</p>
            </div>
            <div class="footer-right">
                <h1>Get In Touch</h1>
                <p>#30 abc Colony,xyz City IN<i class="fa fa-map-marker"></i></p>
                <p>sahaayak@gmail.com<i class="fa fa-paper-plane"></i></p>
                <p>+91 9916524828<i class="fa fa-phone"></i></p>
            
            </div>
        </div>
        <div class="social-links">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"> </i>
            <i class="fa fa-youtube-play"></i>
            <p>Copyright &copy; Team Sahayaak</p>
        </div>
    </section>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script src="about_us.js"></script>
  <script src="main_feedback.js"></script>


<script src="main.js"></script> -->
</body>
</html>