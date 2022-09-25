<?php

session_start();

if(!isset($_SESSION['fname'])) {
    header("Location: login.php");
}
$img=$_SESSION['profileImage']
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/beard-153x153.png" type="image/x-icon">
  <meta name="description" content="">
  <title>SAHAAYAK</title>
  <link rel="stylesheet" href="assets/web/assets/icons2/2.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/page/css/additional.css">
  <link rel="stylesheet" href="assets/page/css/additional.css" type="text/css">
</head>
<body>
<section class="menu menu2 header" once="menu" id="menu2-o">
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="#">
                        <img src="assets/images/beard-153x153.png" alt="Sahaayak" style="height: 4.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-5" href="#">SAHAAYAK</a></span>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black display-4" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="#">About Us</a>
                    </li></ul>                             
            </div>
        </div>
    </nav>
</section>
    <?php echo "<h1>Welcome " . $_SESSION['fname'] . "</h1>"; ?>
    <img src="<?php echo $_SESSION['profileImage']; ?>">
  <br>
    <a href="logout.php">Logout</a>
</body>
</html>