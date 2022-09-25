<?php
session_start();
include('config.php');
if(!isset($_SESSION['hid'])){
  header("Location:login.php");
}
error_reporting(0);
?>

<!--php
$ran = key($_POST);
echo "<script>alert('$ran');</script>";
$uefa = $_POST['$ran'];
echo "<script>alert('$uefa');</script>";
if(isset($_POST[$ran])){
	$query = "SELECT * FROM service_request where request_id = '$ran'";
	$data = mysqli_query($conn, $query) or die('error');
	if(mysqli_num_rows($data) > 0){
		while($row = mysqli_fetch_assoc($data)){
			$name = $row['name'];
			$email = $row['email'];
			$req = $row['request_id'];
		}
	}
	$HID1=$_SESSION('hid');
	
	$query1 = "SELECT * FROM helper where hid = '$HID1'";
	$data1 = mysqli_query($conn, $query1) or die('error');
	if(mysqli_num_rows($data) > 0){
		while($row = mysqli_fetch_assoc($data)){
			$fname = $row['fname'];
			$lname = $row['lname'];
			$email1 = $row['email'];
		}
	}
	
	
	$to=$email;
	$subject="Service Confirmation-SAHAYAAK";
	$message="Dear ".$name." We Are Pleased To inform you that the helper ".$fname." ".$lname." has accepted your request";
	$headers="From: ".$my_email;
	if(mail($to,$subject,$message,$headers)){
	echo "<script>alert('We Have sent your consent To the {$name} with request id {$req} ');</script>";
	$update = "UPDATE service_request SET temp = 'Y' WHERE request_id = '$req'";
	}
	else{
		
		echo "<script>alert('Email Verification Went Wrong Please Enter The Correct Email-{$email}. ');</script>";
		
	}
}else {
    echo "<script>alert('Something Wrong went .')</script>";
} 


?>-->




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

<style>
        table{
            border-collapse: collapse;
            width: 75%;
            /* color: blueviolet;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; */
            font-size: 25px;
            text-align: left;
			margin-left: 12.5%;
        }
        th{
            background-color: grey;
            color: cyan;
        }
        tr:nth-child(even) {
            background-color: #efefef;
        }
		#Div2 {
		  display: none;
		}
		#Button1{
			background:red;
		}
    </style>

</head>

<body style="background-color:white;">

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
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="helper_dashboard.php">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="about_us.html">About Us</a>
                    </li></ul>               
            </div>
        </div>
    </nav>
</section>
<br><br><br>


<center><button id="Button1" type="button" value="Click" onclick="switchVisible();" style="">Requests</button>
<button id="Button2" type="button" value="Click" onclick="switchVisible1();">Accpeted</button></center>










<div id="Div1" style="width:100%;"><?php

 

//$result = mysql_query("SELECT * FROM service_request where hid='{$_SESSION["hid"]}' AND temp='N'");


$mysql = "SELECT * from service_request where HID = '{$_SESSION["hid"]}' and temp='N'";
$data = mysqli_query($conn , $mysql);
 

echo "<table border='1'>

<tr>

<th>Id</th>

<th>Name</th>

<th>Phone</th>

<th>Email</th>

<th>Address</th>

<th>From Date</th>

<th> Accept </th>

</tr>";

 
if ($data->num_rows > 0) {
  //output data of each row
  while($row = $data->fetch_assoc()) {
//while($row = mysql_fetch_array($result))


  echo "<tr>";

  echo "<td>" . $row['request_id'] . "</td>";

  echo "<td>" . $row['name'] . "</td>";

  echo "<td>" . $row['phone'] . "</td>";

  echo "<td>" . $row['email'] . "</td>";

  echo "<td>" . $row['address'] . "</td>";
  
  echo "<td>" . $row['from_date'] . "</td>";?>
  
  <td><center><!--<form action="try.php" method="post" enctype="multipart/form-data"><button type="submit" name="<php echo $row['request_id'];?>" style="margin-top:1.5%;margin-left:10%;background-color: grey !important;
    border-color: #ffe161 !important;
    color: cyan !important;
    box-shadow: 0 2px 2px 0 rgb(0 0 0 / 20%);border-radius:15px;min-height: 40px;width:55px;" >Yes</button></form>-->
                         <form class="form-inline" action="try.php" method = "POST">
                <button type="submit"  value="<?php echo $row['request_id'];?>" id="mybutton" name = "<?php echo $row['request_id'];?>" class="btn btn-default" style="margin-top:4%;margin-left:10%;background-color: #efefef !important;
    border-color: #ffe161 !important;
    color: black !important;
    box-shadow: 0 2px 2px 0 rgb(0 0 0 / 20%);border-radius:15px;">Yes</button>
                </form></center></td>;
<?php
  echo "</tr>";

  }}else{echo"No data";}
echo "</table>";


 

//mysql_close($con);

?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>







<div id="Div2" style="width:100%;"><?php

 

//$result = mysql_query("SELECT * FROM service_request where hid='{$_SESSION["hid"]}' AND temp='N'");


$mysql = "SELECT * from service_request where HID = '{$_SESSION["hid"]}' and temp='Y'";
$data = mysqli_query($conn , $mysql);
 

echo "<table border='1'>

<tr>

<th>Id</th>

<th>Name</th>

<th>Phone</th>

<th>Email</th>

<th>Address</th>

<th>From Date</th>

<th> Done </th>

</tr>";

 
if ($data->num_rows > 0) {
  //output data of each row
  while($row = $data->fetch_assoc()) {
//while($row = mysql_fetch_array($result))


  echo "<tr>";

  echo "<td>" . $row['request_id'] . "</td>";

  echo "<td>" . $row['name'] . "</td>";

  echo "<td>" . $row['phone'] . "</td>";

  echo "<td>" . $row['email'] . "</td>";

  echo "<td>" . $row['address'] . "</td>";
  
  echo "<td>" . $row['from_date'] . "</td>";?>
  
  <td><center><!--<form action="" method="post" enctype="multipart/form-data"><!--<button type="submit" name="<php echo $row['request_id'];?>" style="margin-top:1.5%;margin-left:10%;background-color: grey !important;
    border-color: #ffe161 !important;
    color: cyan !important;
    box-shadow: 0 2px 2px 0 rgb(0 0 0 / 20%);border-radius:15px;min-height: 40px;width:55px;" >Yes</button>
	</form>-->
	
	<form class="form-inline" action="try1.php" method = "POST">
                <button type="submit" id="mybutton" name = "<?php echo $row['request_id'];?>" class="btn btn-default" style="margin-top:4%;margin-left:10%;background-color: #efefef !important;
    border-color: #ffe161 !important;
    color: black !important;
    box-shadow: 0 2px 2px 0 rgb(0 0 0 / 20%);border-radius:15px;" >Yes</button>
                </form>
                         </center></td>;
<?php
  echo "</tr>";

  }}else{echo"No data";}
echo "</table>";


 

//mysql_close($con);

?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>



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
function switchVisible() {
			document.getElementById('Div1').style.display = 'block';
			document.getElementById('Div2').style.display = 'none';
			document.getElementById('Button1').style.backgroundColor = 'Red'; 
			document.getElementById('Button2').style.backgroundColor = '#efefef'; 
		}

function switchVisible1() {

			document.getElementById('Div1').style.display = 'none';
			document.getElementById('Div2').style.display = 'block';
			document.getElementById('Button2').style.backgroundColor = 'Red'; 
			document.getElementById('Button1').style.backgroundColor = '#efefef'; 
}
</script>
</html>
