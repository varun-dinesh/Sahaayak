<?php
session_start();
include('config.php');
if(!isset($_SESSION['hid'])){
  header("Location:login.php");
}
error_reporting(0);
?>



<?php
$ran = key($_POST);
echo "<script>alert('$ran');</script>";
$uefa = $_POST[$ran];
print_r($_POST); 
echo "<script>alert('$uefa');</script>";
if(isset($_POST[$ran])){
	$query = "SELECT * FROM service_request where request_id = '$ran'";
	$data = mysqli_query($conn, $query) or die('error');
	if(mysqli_num_rows($data) > 0){
		echo "<script>alert('Hello World 1');</script>";
		while($row = mysqli_fetch_assoc($data)){
			echo "<script>alert('Hello World 2');</script>";
			$name = $row['name'];
			$email = $row['email'];
			$req = $row['request_id'];
		}
	}
	else{
		echo "<script>alert('Going to hell');</script>";
	}
	$HID1=$_SESSION['hid'];
	echo $HID1;
	$query1 = "SELECT * FROM helper where hid = '$HID1'";
	$data1 = mysqli_query($conn, $query1) or die('error');
	if(mysqli_num_rows($data) > 0){
		echo "<script>alert('Hello World 3');</script>";
		while($row = mysqli_fetch_assoc($data1)){
			echo "<script>alert('Hello World 4');</script>";
			$fname = $row['fname'];
			$lname = $row['lname'];
			$email1 = $row['email'];
		}
	}
	else{
		echo "<script>alert('Going to hell 2');</script>";
	}
	
	$to=$email;
	$subject="Service Confirmation-SAHAYAAK";
	$message="Dear ".$name." We Are Pleased To hear that the helper ".$fname." ".$lname." has completed your service. Kindly fill out the feedback form to confirm the same.";
	$headers="From: ".$my_email;
	if(mail($to,$subject,$message,$headers)){
	echo "<script>alert('We Have sent your consent To the {$name} with request id {$req} ');</script>";
	$update = "UPDATE service_request SET temp = 'D' WHERE request_id = '$req'";
	$data2 = mysqli_query($conn, $update) or die('error');
	}
	else{
		
		echo "<script>alert('Email Verification Went Wrong Please Enter The Correct Email-{$email}. ');</script>";
		
	}
}else {
    echo "<script>alert('Something Wrong went .')</script>";
} 

header('location:request.php');

?>
