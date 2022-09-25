<style>
<?php include 'style1.css'; ?>
</style>

<?php
    $con = mysqli_connect("localhost","root","","login_sys");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    session_start();
    if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);
        $query    = "SELECT * FROM `users` WHERE email='$email';
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;
             echo "<div class='form'>
                  <h3>Password sent successfully.</h3><br/>
                  </div>";
			 header("Refresh:5; url=form.html");
        }else {
            echo "<div class='form'>
                  <h3>Incorrect email</h3><br/>
                  <p class='link'>Click here to <a href='form.html'>Login</a> again.</p>
                  </div>";
				  header("Refresh:5; url=forgot.html");
        }
    }
?>