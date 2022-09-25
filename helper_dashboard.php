<?php
session_start();
include('config.php');
if(!isset($_SESSION['hid'])){
  header("Location:login.php");
}
error_reporting(0);
?>
<doctype html>
<html>
<head>
<title>DASHBOARD</title>




<script src="https://kit.fontawesome.com/f9f835e742.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAHAYAAK</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="assets/css/mbr-additional.css" type="text/css">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="undefined" crossorigin="anonymous">-->
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Kaushan Script' rel='stylesheet'>
<link rel='stylesheet' href="style3.php">


<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
</head>
<!-- <body>



<div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Home</a>
            <a href="#">Services</a>
            <a href="#">Login</a>
            <a href="#">About Us</a>
        </div>
          <span class="sid" onclick="openNav()"><img src="https://i.ibb.co/HrfVRcx/menu.png"></span> -->


<body style="background-color:#efefef;">
  <section class="menu menu2 header" once="menu" id="menu2-o" style="margin-bottom:2.2%;background-color:white;">
    
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
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="phpfilters/index11.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="request.php">Requests</a></li>
					<li class="nav-item"><a class="nav-link link text-black display-4" href="logout.php">Logout</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="about_us.html">About Us</a>
                    </li></ul>               
            </div>
        </div>
    </nav>
</section>






<section class = "out_sect">
<div class = "head">
HELPER DASHBOARD
</div>
<br>
<br>
<br>
<br>
<br>
<div>



<section class = "in-sect">
<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "sahaayak";




   //include CSS Style Sheet
   // echo "<link rel='stylesheet' type='text/css' href=style.php />";




//image 
 $mysql = "SELECT profileImage from helper where HID = '{$_SESSION["hid"]}'";
  $data = mysqli_query($conn , $mysql);
// // $imggg = $imagg->fetch_assoc();
// //  echo $imggg['profileImage']; 
 $immgg = mysqli_fetch_assoc($data);
 $image = $immgg['profileImage'];
 echo "<img style = 'height:250px;width:250px;border-radius:100%; margin: auto;display: block;margin-left:12%;'src =".$image."><br>";

$sql = "SELECT * FROM helper where hid='{$_SESSION["hid"]}' AND password='{$_SESSION["password"]}'";
// $sql1 = "SELECT * FROM service_request where hid='{$_SESSION["hid"]}'";
$result = mysqli_query($conn ,$sql);
// $result1 = mysqli_query($conn ,$sql1);
if ($result->num_rows > 0) {
  //output data of each row
  while($row = $result->fetch_assoc()) {
     $HID = $row['hid'];
    $firstname = $row['fname'];
    $Lastname= $row['lname'];
    $age = $row['age'];
   $gender = $row['gender'];
   $job = $row['job'];
   $experience = $row['exp'];
   $mail_id = $row['email'];
   $password = $row['password'];
  }
} else {
  echo "0 results";
}


// if ($result1->num_rows > 0) {
  // //output data of each row
  // while($row = $result->fetch_assoc()) {
     // $HID = $row['hid'];
    // $firstname = $row['fname'];
    // $Lastname= $row['lname'];
    // $age = $row['age'];
   // $gender = $row['gender'];
   // $job = $row['job'];
   // $experience = $row['exp'];
   // $mail_id = $row['email'];
   // $password = $row['password'];
  // }
// } else {
  // echo "0 requests;
// }

?>
<div class = "query">
First Name  <?php  echo "<div class = 'ans ans_box'><div class = 'sign'>:</div>".$firstname."</div>"; ?>
</div>
<br><br><br>
<div class = "query">
Last Name  <?php  echo "<div class = 'ans ans_box'><div class = 'sign'>:</div>".$Lastname."</div>"; ?>
</div>
<br><br><br>
<div class = "query">
Age  <?php  echo "<div class = 'ans ans_box'><div class = 'sign'>:</div>".$age."</div>"; ?>
</div>
<br><br><br>
<div class = "query">
Job  <?php  echo "<div class = 'ans ans_box'><div class = 'sign'>:</div>".$job."</div>"; ?>
</div>
<br><br><br>

<div class = "query">
MAIL  <?php  echo "<div class = 'ans ans_box'><div class = 'sign'>:</div>".$mail_id."</div>"; ?>
</div>
<br><br><br>


<div class = "query">
Helper ID  <?php  echo "<div class = 'ans ans_box'><div class = 'sign'>:</div>".$HID."</div>"; ?>
</div>
<br><br><br>

<div class = "query">
Services Done <?php   ?>
</div>
<br>


<?php
//$services = "select * from service_request where HID = 'hid'";
$services = "select * from service_request where HID = '$HID' and temp='D'";
$result_service = mysqli_query($conn , $services);

if ($result_service->num_rows > 0) {
  // output data of each row
  
  while($row12 = $result_service->fetch_assoc()) {
     
    $rid = $row12["request_id"];

    $hid =$row12["hid"];
    // $id = $row12["UID"];
    $from_date = $row12["from_date"];
    $usrname = $row12["name"];
    $phone_no = $row12["phone"];
	$req = $row12["temp"];
  //  $to_date = $row12["to_date"];
  //  $rating = $row12["rating"];
   echo "<div class = 'services '><div class = 'sign'>:</div>";
   echo "<div >Service id:".$rid."</div>";
  //  echo  "<div >Helper Name:".$hid."</div>";
   echo  "<div >User Name:".$usrname."</div>";
  //  echo  "<div >From date:". $to_date."</div>";
   echo  "<div >From Date:".$from_date."</div>";
  //  echo  "<div >Rated: " .$rating." out of 5</div>";
  echo  "<div >Phone no.:".$phone_no."</div>"; 
  echo "</div><br>";
  }
} else{
  //echo "0 results";
   //echo "<div class = 'services '><div class = 'sign'>:</div>";
   //echo "<div >Null</div>";
}


?>
<br>
<br>

<div class = "query">
Experience  <?php  echo "<div class = 'ans ans_box' style = 'font-size:20px;line-height:25px;'><div class = 'sign'>:</div>".$experience."</div>"; ?>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
</section>


</section>
<section>
<br>
<br>
<br>
<div > </div>
</section>

<section id="footer" style="background-color:#224;color:white;">
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
                <p>shreeharim7@gmail.com<i class="fa fa-paper-plane"></i></p>
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



</body>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}


function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</html>