

<?php
  include('config.php');
  include('helper.php');
  error_reporting(0);

  session_start();

  if(isset($_SESSION['fname'])) {
    header("Location: login.php");
}

  if(isset($_POST['sumbrit'])) 
  {
      $fname = $_POST['firstName'];
      $lname = $_POST['LastName'];
      $email = $_POST['email'];
      $password = md5($_POST['password']);
      $cpassword = md5($_POST['confirm_pwd']);
      $phone = $_POST['phone'];
      $gender = $_POST['gender'];
      $job = $_POST['job'];
      $files = $_FILES['profileUpload'];
      $profileImage = upload_profile('./', $files);

      if($password == $cpassword) {
          $sql="SELECT * FROM helpers WHERE email='$email'";
          $result=mysqli_query($conn,$sql);
          if(!$result->num_rows>0){
            $sql="INSERT INTO helpers (fname,lname,email,phn,password,confirm,gender,job,profileImage) VALUES ('$fname','$lname','$email','$phone','$password','$cpassword','$gender','$job','$profileImage')";
            $result = mysqli_query($conn,$sql);
            if($result) {
                echo "<script>alert('Wow! Registration Successful .')</script>";
                $fname="";
                $lname="";
                $email="";
                $_POST['password']="";
                $_POST['confirm_pwd']="";
                $phone = "";
                $gender = "";
            } 
            else {
              echo "<script>alert('Woops! Something Wrong went .')</script>";
            } 
          } 
          else  {
            echo "<script>alert('Woops ! Email Already Exists')</script>";
          }
      } 
      else  {
          echo "<script>alert('Password Not Matched')</script>";
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
    <style>
        #error{
            color: red;
            font-size- 20px;
        }
    </style>
<body>
<main id="main-area">  
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
    <!-- registration area -->
    <section id="register" style="padding-left:5%;">
        <div class="row m-0">
            <div class="col-lg-4 offset-lg-2">
                <div class="text-center pb-5">
                    <h1 class="login-title text-dark">Register</h1>
                    <p class="p-1 m-0 font-ubuntu text-black-50">Register as a Helper</p>
                    <span class="font-ubuntu text-black-50">I already have <a href="login.php">Login</a></span>
                </div>
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
                <div class="d-flex justify-content-center">
                    <form action="" method="post" enctype="multipart/form-data" id="reg-form">
                        <div class="form-row">
                            <div class="col">
                                <input type="text"  name="firstName" id="firstName" class="form-control" value = "<?php echo $fname; ?>" placeholder="First Name">
                                <!-- <span id = "error"> <?php echo $firstnameerr;?></span> -->
                            </div>
                            <div class="col">
                                <input type="text"  name="LastName" id="LastName" class="form-control" value = "<?php echo $lname; ?>" placeholder="Last Name">
                                <!-- <span id = "error"> <?php echo $LastNameerr;?></span> -->
                            </div>
                        </div>


                        <div class="form-row my-4">
                            <div class="col">
                                <input type="email"  required name="email" id="email" class="form-control" value = "<?php echo $email; ?>" placeholder="Email*">
                                <!-- <span id = "error"> <?php echo $emailerr;?></span> -->
                            </div>
                        </div>


                        
                        <div class="form-row my-4">
                            <div class="col">
                                <input type="text" required   name="phone" id="phone" class="form-control" value = "<?php echo $phone; ?>" placeholder="Phone Number*">
                                <!-- <span id = "error"> <?php echo $phoneerr;?></span> -->

                            </div>
                        </div>


                        <div class="form-row my-4">
                            <div class="col">
                                <input type="password"   required name="password" id="password" class="form-control" value = "<?php echo $_POST['password']; ?>" placeholder="password*">
                                <!-- <span id = "error"> <?php echo $phoneerr;?></span> -->
                            </div>
                        </div>

                        <div class="form-row my-4">
                            <div class="col">
                                <input type="password"  name="confirm_pwd" id="confirm_pwd" class="form-control" value = "<?php echo $_POST['confirm_pwd']; ?>" placeholder="Confirm Password*">
                                <small id="confirm_error" class="text-danger"></small>
                                <!-- <span id = "error"> <?php echo $confirm_pwd_err;?></span> -->
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
                              <input type="radio" name="job" id="cooking" value="cooking">
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
                              <input type="radio" name="job" id="oth" value="Other">
                               &nbsp;
                              <span id="ot">Other</span>
                             <br><br>
                             <!-- <span id = "error"> <?php echo $joberr;?></span> -->

                               
                            </div>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="agreement" class="form-check-input" required>
                            <label for="agreement" class="form-check-label font-ubuntu text-black-50">I agree <a href="#">term, conditions, and policy </a>(*) </label>
                        </div>


                        <div class="sumbrit-btn text-center my-5">
                            <button type="sumbrit" name="sumbrit" class="btn btn-warning rounded-pill text-dark px-5">Continue</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- #registration area -->
    </main>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3umbJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="main.js"></script>
</body>
</html>

