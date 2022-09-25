

<?php
  include('config.php');
  error_reporting(0);

  session_start();

  if(isset($_SESSION['fname'])) {
    header("Location: login.php");
}

  if(isset($_POST['submit'])) 
  {
	  $a=1;
      $fname = $_POST['fname'];
	  $lname = $_POST['lname'];
      $email = $_POST['email'];
      $password = ($_POST['password']);
	  $cpassword = ($_POST['confirm_pwd']);
      $phone = $_POST['phone'];
	  $age = $_POST['age'];
      $gender = $_POST['gender'];
      $job = $_POST['job'];
	  $exp = $_POST['exp'];
	  $address = $_POST['address'];
      //$files = $_FILES['profileUpload'];
     // $profileImage = upload_profile('./', $files);
	  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	  $extensions_arr = array("jpg","jpeg","png","gif");
      if($password == $cpassword) {
          $sql="SELECT * FROM helpers WHERE email='$email'";
          $result=mysqli_query($conn,$sql);
		  if( in_array($imageFileType,$extensions_arr) ){
            
            // Convert to base64 
            $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
		  $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;}
          if(!$result->num_rows>0){
			$sql="INSERT INTO helper (fname,lname,email,password,age,phone,gender,job,profileImage,address,exp) VALUES ('$fname','$lname','$email','$password','$age','$phone','$gender','$job','$image','$address','$exp')";
            $result = mysqli_query($conn,$sql);
            if($result) {
                echo "<script>alert('Registration Successful.')</script>";
                $name="";
                $email="";
                $_POST['password']="";
                $_POST['confirm_pwd']="";
                $phone = "";
                $gender = "";
				header("Refresh:3; url=helper_dashboard.php");
            } 
            else {
              echo "<script>alert('Something Wrong went .')</script>";
            } 
          } 
          else  {
            echo "<script>alert('Email Already Exists')</script>";
          }
      } 
      else  {
          echo "<script>alert('Password and Confirm Password not Matched')</script>";
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!--<link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">-->
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <!--<link rel="stylesheet" href="assets/socicon/css/styles.css"> -->
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <!-- <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript> -->
  <!-- <link rel="preload" as="style" href="assets/css/mbr-additional.css"> -->
  <link rel="stylesheet" href="assets/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style2.css">
    <style>
        #error{
            color: red;
            font-size- 20px;
        }
    </style>
</head>
<body  style="background-color:#efefef;">
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
        <!--<div class="row m-0">
            <div class="col-lg-4 offset-lg-2">-->
			<!--<section id="register">
                <div class="upload-profile-image d-flex justify-content-center pb-5">
                    <div class="text-center">
                        <div class="d-flex justify-content-center">
                            <img class="camera-icon" src="camera-solid.svg" alt="camera">
                        </div>
                        <img src="beard.png" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                        <small class="form-text text-black-50">Choose Image</small>
                        <input type="file" form="reg-form" class="form-control-file" name="profileUpload" id="upload-profile">
                    </div>
                </div>
				</section>-->
            <!-- </div>-->
			<center><strong><h1>Helper Registration</h1></strong></center>
            <div class="upload-profile-image d-flex justify-content-center pb-5" style="margin-top:1%;margin-bottom:-2%;">
                <div class="text-center">
                    <img src="<?php echo isset($_SESSION['profileImage']) ? $_SESSION['profileImage'] : 'beard.png' ; ?>" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                </div>
            </div>
                <div class="d-flex justify-content-center" style="margin-bottom:10%;">
                    <form action="" method="post" enctype="multipart/form-data" id="reg-form">
					<!--<div class="form-row my-4">
                            <div class="col">
							<img src="beard.png" <input type="file"  name="file"/>
                                
                            </div>
                        </div>-->
					
					
                        <div class="form-row my-4">
                            <div class="col">
                                <input type="text"  name="fname" id="fname" class="form-control" value = "<?php echo $name; ?>" placeholder="First Name" style="background-color:#ffffff;" required autocomplete="off">
                                <!-- <span id = "error"> <?php echo $firstnameerr;?></span> -->
                            </div>
                        </div>

						
						<div class="form-row my-4">
                            <div class="col">
                                <input type="text"  name="lname" id="lname" class="form-control" value = "<?php echo $name; ?>" placeholder="Last Name" style="background-color:#ffffff;" required autocomplete="off">
                                <!-- <span id = "error"> <?php echo $firstnameerr;?></span> -->
                            </div>
                        </div>
						
                        <div class="form-row my-4">
                            <div class="col">
                                <input type="email"  required name="email" id="email" class="form-control" value = "<?php echo $email; ?>" placeholder="Email" style="background-color:#ffffff;" required autocomplete="off">
                                <!-- <span id = "error"> <?php echo $emailerr;?></span> -->
                            </div>
                        </div>


                        
                        <div class="form-row my-4">
                            <div class="col">
                                <input type="text" required   name="phone" id="phone" class="form-control" value = "<?php echo $phone; ?>" placeholder="Phone Number" style="background-color:#ffffff;" required autocomplete="off">
                                <!-- <span id = "error"> <?php echo $phoneerr;?></span> -->

                            </div>
                        </div>


                        <div class="form-row my-4">
                            <div class="col">
                                <input type="password"   required name="password" id="password" class="form-control" value = "<?php echo $_POST['password']; ?>" placeholder="Password"  style="background-color:#ffffff;" required autocomplete="off">
                                <!-- <span id = "error"> <?php echo $phoneerr;?></span> -->
                            </div>
                        </div>

                        <div class="form-row my-4">
                            <div class="col">
                                <input type="password"  name="confirm_pwd" id="confirm_pwd" class="form-control" value = "<?php echo $_POST['confirm_pwd']; ?>" placeholder="Confirm Password"  style="background-color:#ffffff;" required autocomplete="off">
                                <small id="confirm_error" class="text-danger"></small>
                                <!-- <span id = "error"> <?php echo $confirm_pwd_err;?></span> -->
                            </div>
                        </div>
						
						<div class="form-row my-4">
                            <div class="col">
                                <input type="text"  name="address" id="address" class="form-control" value = "<?php echo $_POST['confirm_pwd']; ?>" placeholder="Address"  style="background-color:#ffffff;" required autocomplete="off">
                                <small id="confirm_error" class="text-danger"></small>
                                <!-- <span id = "error"> <?php echo $confirm_pwd_err;?></span> -->
                            </div>
                        </div>
						
						<div class="form-row">
                            <div class="col">
                              
					
								<select name="age" class="form-control">
								<option>Age</option>
								<option value="16">16&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</option>								
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
								<option value="32">32</option>
								<option value="33">33</option>
								<option value="34">34</option>
								<option value="35">35</option>
								<option value="36">36</option>
								<option value="37">37</option>
								<option value="38">38</option>
								<option value="39">39</option>
								<option value="40">40</option>
								<option value="41">41</option>
								<option value="42">42</option>
								<option value="43">43</option>
								<option value="44">44</option>
								<option value="45">45</option>
								<option value="46">46</option>
								<option value="47">47</option>
								<option value="48">48</option>
								<option value="49">49</option>
								<option value="50">50</option>
								<option value="51">51</option>
								<option value="52">52</option>
								<option value="53">53</option>
								<option value="54">54</option>
								<option value="55">55</option>
								<option value="56">56</option>
								<option value="57">57</option>
								<option value="58">58</option>
								<option value="59">59</option>
								<option value="60">60</option>
								</select>
                               
                            </div>
                        </div>

						<div class="form-row" style="margin-top:8%;">
                            <div class="col">
                              <!--<input type="radio" name="job" id="cooking" value="cooking">
                              &nbsp;
                              <span id="cook">Cooking</span>
                              &nbsp;&nbsp;&nbsp;&nbsp;
                              <input type="radio" name="job" id="plumb" value="Plumbing">
                               &nbsp;
                              <span id="plumb">Plumbing</span>
                              &nbsp;&nbsp;&nbsp;&nbsp;
                              <input type="radio" name="job" id="carp" value="Carpentary">
                               &nbsp;
                              <span id="carpe">Carpentary</span>
                              &nbsp;&nbsp;&nbsp;&nbsp;
                              <input type="radio" name="job" id="ele" value="Other">
                               &nbsp;
                              <span id="ele">Electrician</span>-->
					
								<select name="job" class="form-control">
								<option>Select Service</option>
								<option value="Plumbing">Plumbing&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</option>								
								<option value="Carpentary">Carpentary</option>
								<option value="Electrician">Electrician</option>
								<option value="Cooking">Cooking</option>
								</select>
                               
                            </div>
                        </div>
						

						<div class="form-row my-4">
                            <div class="col">
                                <textarea name="exp" id="exp" class="form-control" value = "<?php echo $name; ?>" placeholder="Experience" style="background-color:#ffffff;height:10em;resize:none;" required autocomplete="off"></textarea>
                                <!-- <span id = "error"> <?php echo $firstnameerr;?></span> -->
                            </div>
                        </div>

                        <div class="form-row my-4">
                            <div class="col">
                              <input type="radio" name="gender" id="male" value="m">
                              &nbsp;
                              <span id="male">Male</span>
                              &nbsp;&nbsp;&nbsp;&nbsp;
                              <input type="radio" name="gender" id="female" value="f">
                               &nbsp;
                              <span id="female">Female</span>
                              <!-- &nbsp;<span id = "error"> <?php echo $gendererr;?></span> -->
                               <br><br>
                               <!-- <span id = "error"> <?php echo $gendererr;?></span> -->
                            </div>
                        </div>
						
						<div class="form-row my-4">
                            <div class="col">
                              <input type='file' name='file' />
                            </div>
                        </div>
						

                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="agreement" class="form-check-input" required>
                            <label for="agreement" class="form-check-label font-ubuntu text-black-50">I agree <a href="#">all terms and conditions</a></label>
                        </div>


                        <div class="submit-btn text-center my-5">
                            <center><button type="submit" name="submit" class="btn btn-warning rounded-pill text-dark px-5">Register</button></center>
                        </div>
						<center><p class="message" style="font-size:1.15em;">Already registered? <a href="login.php" onMouseOver="this.style.color='#009688'" onMouseOut="this.style.color='#4CAF50'">Sign-In</a></p>
					</center>

                    </form>
                </div>
            <!--</div>-->
        <!--</div>-->
		
		
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

