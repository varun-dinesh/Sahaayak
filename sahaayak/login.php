<?php
include('config.php');
error_reporting(0);
session_start();



if(isset($_POST['submit'])) {
    $email= $_POST['email'];
    $password=($_POST['password']);

    $sql= "SELECT * FROM helper WHERE email='$email' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    if($result->num_rows>0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['profileImage'] = $row['profileImage'];
        header("Refresh:1; url=helper_dashboard.php");
    } else {
        echo "<script>alert('Email Or Password Incorrect')</script>";
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
    </style>
</head>
<body style="background-color:#efefef;">
	<section class="menu menu2 header" once="menu" id="menu2-o" style="margin-bottom:7%;">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html">
                        <img src="assets/images/beard-153x153.png" alt="SAHAAYAK" style="height: 4.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-5" href="index.html">SAHAAYAK</a></span>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black display-4" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="about_us.html">About Us</a>
                    </li></ul>               
            </div>
        </div>
    </nav>
</section>
			<center><strong><h1>Helper Login</h1></strong></center>
            <div class="upload-profile-image d-flex justify-content-center pb-5" style="margin-top:1%;margin-bottom:-2%;">
                <div class="text-center">
                    <img src="<?php echo isset($_SESSION['profileImage']) ? $_SESSION['profileImage'] : 'beard.png' ; ?>" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                </div>
            </div>
            <div class="d-flex justify-content-center" style="margin-bottom:10%;">
                <form action="" method="POST" enctype="multipart/form-data" id="log-form">

                    <div class="form-row my-4">
                        <div class="col">
                            <input type="text" required name="email" id="email" class="form-control"  value ="<?php echo $name; ?>" placeholder="E-Mail" required autocomplete="off" style="background-color:#ffffff;">
                        </div>
                    </div>

                    <div class="form-row my-4">
                        <div class="col">
                            <input type="password" required name="password" id="password" class="form-control" value="<?php echo $_POST['password']; ?>" placeholder="Password"  required autocomplete="off" style="background-color:#ffffff;">
                        </div>
                    </div>

                    <div class="submit-btn text-center my-5">
                        <center><button type="submit" name="submit" class="btn btn-warning rounded-pill text-dark px-5" style="margin-top:-2%">Login</button></center>
                    </div>
					<center><p class="message" style="font-size:1.15em;">Not have an Account? <a href="register.php" onMouseOver="this.style.color='#009688'" onMouseOut="this.style.color='#4CAF50'">Sign-Up</a></p>
					</center>
                </form>
            </div>
			
			
		
	<!--<div class="footer" style="background-color:black;color:white;">
                <div class="container">
                    <div class="row">
                        <div class="footer-col-1">
                            <h3>Download Our App</h3>
                            <p>Download <strong>AAKRUTI</strong> app for Android And IOS Mobile Phone</p>
                            <div class="app-logo">
                                <img src="app-store.png">
                                <img src="play-store.png">
    
                            </div>
                        </div>
                        <div class="footer-col-2">
                            <img src="logo - Copy.png">
                            <p>Our Vision, Is To Promote the Feeling Of Indianess and support Mahatma Gandhi's Vision Of Swadeshi</p>
                        </div>
                        <div class="footer-col-3">
                            <h3>Useful Links</h3>
                            <ul>
                                <li>Coupons</li>
                                <li>Blog Post</li>
                                <li>Return Policy</li>
                                <li>Join Affiliate</li>
                            </ul>
                        </div>
                        <div class="footer-col-4">
                            <h3>Follow Us</h3>
                            <ul>
                                <li>Facebook</li>
                                <li>Twitter</li>
                                <li>Instagram</li>
                                <li>YouTube</li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <p class="copyright">Copyright &copy; 2020 -Team Annadat</p>
                </div>
            </div>-->
			
			<section id="footer">
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

<script src="main.js"></script>
</body>
</html>