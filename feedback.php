<style>
<?php include 'style1.css'; ?>
</style>
<?php
if(isset($_POST['submit'])){
	if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['feedback'])){
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$feedback = $_POST['feedback'];
		$date = date("Y-m-d");
		
		$conn = mysqli_connect("localhost", "root","", "login_sys");
		
		$query ="insert into feedback(name ,email, feedback, date)values('$name', '$email', '$feedback', '$date')";
		$result = mysqli_query($conn, $query);
		if($result)
			echo "<div class='form'><p>Thank you for your feedback. We appreciate your feedback...</p></div>";
		else
			die("Something went wrong. Please try again.");
		header("Refresh:5; url=about_us.html");
	}
	else
		die("Something went wrong. Please try again.");
}
else{
    echo "Submit button is not set";
}
?>