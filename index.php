<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/f9f835e742.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAHAAYAK</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="undefined" crossorigin="anonymous">-->
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Kaushan Script' rel='stylesheet'>
<style>
    /*.footer{

        background: #000;
        color: #8a8a8a;
        font-size: 17px;
        padding: 60px 0 20px;
    }

    .footer p{
        color: #8a8a8a;

    }
    .footer h3{
        color: #fff;
        margin-bottom: 20px;
    }

    .footer-col-1,
    .footer-col-2,
    .footer-col-3,
    .footer-col-4
    {
        min-width: 250px;
        margin-bottom: 20px;

    }

    .footer-col-1{
        flex-basis: 30%;
    }
    .footer-col-2{
        flex: 1;
        text-align: center;
    }
    .footer-col-3{
        width: 180px;
        margin-bottom: 20px;
    }
    .footer-col-4{
        flex-basis: 30%;
    }

    .footer-col-3,
    .footer-col-4{
        flex-basis: 12%;
        text-align: center;
    }

    ul{
        list-style-type: none;   
    }

    .app-logo{
        margin: 20px;

    }
    .app-logo img{
        width: 140px;
    }

    .footer hr{
        border: none;
        background: #b5b5b5;
        height: 1px;
        margin: 20px 0;
    }
    .copyright{
        text-align: center;
    }

.container
{
    margin-right: auto;
    margin-bottom: auto;
}
.row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
    width: 100%;
    margin: 0 auto;
}*/
.image{
    float: right;

}
.slider figure img {
    width: 100%;
    float: right;
}
.slider{
    overflow: hidden;
    width:540px;
    height: 426px
}
.slider figure div{
    float: right;
    width: 20%;
}

.slider figure img{
    width: 100%;
    float: right;
}


.slider figure{
    position: relative;
    width: 500%;
    margin: 0px;
    animation: 30s hari infinite;
}

@keyframes hari{
    0%{
        left: 0%;

    }

    10%{
        left: 0%;
    }

    12%{
        left: -100%;
    }

    22%{
        left: -100%;
    }

    24%{
        left: -200%;
    }

    34%{
        left: -200%;
    }
    36%{
        left: -300%;
    }

    46%{
        left: -300%;
    }
    
    48%{
        left: -400%;
    }

    58%{
        left: -400%;
    }
    60%{
        left: -300%;
    }
    70%{
        left: -300%;
    }
    72%{
        left: -200%;
    }

    82%{
        left: -200%;

    }
    84%{
        left: -100%;
    }
    94%{
        left: -100%;
    }
    96%{
        left: 0%;
    }
}

</style>
</head>
<body>
    <section id="banner" class="showcase">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php">Home</a>
            <a href="phpfilters/index11.php">Services</a>
            <a href="login.php">Login as Helper</a>
            <a href="about_us.html">About Us</a>
        </div>
          <span class="sid" onclick="openNav()"><img src="https://i.ibb.co/HrfVRcx/menu.png"></span>
        <img src="ss.png" class="logo">
        <div class="banner-text">
            <h1>Sahaayak</h1>
            <p>Repair,Service And Maintainence</p>
            <div class="banner-btn">
                <a href="phpfilters/index11.php"><span></span>Find Out</a>
                <a href="about_us.html"><span></span>Read More</a>
            </div>
        </div>
    </section>

    <section id="feature">
        <div class="title-text">
            <p>FEATURES</p>
            <h1>Why Choose Us</h1>
        </div>
        <div class="feature-box">
            <div class="features">
                <h1>Experienced Staff</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-shield"></i>
                    </div>
                    <div class="feature-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quam ad placeat corrupti iste laudantium soluta ratione hic quia commodi.</p>
                    </div>
                </div>
                <h1>Pre Booking Online</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-check-square-o"></i>
                    </div>
                    <div class="feature-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quam ad placeat corrupti iste laudantium soluta ratione hic quia commodi.</p>
                    </div>
                </div>
                <h1>Affordable Cost</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-inr"></i>
                    </div>
                    <div class="feature-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quam ad placeat corrupti iste laudantium soluta ratione hic quia commodi.</p>
                    </div>
                </div>
            </div>
            <div class="features-img">
                <!-- <img src="barber1.jpg"> -->
                <div class="image slider">
                <figure>
                    <div class="slide">
                       <img src="barber1.jpg" alt="Image">
                    </div>
                    <div class="slide">
                        <img src="cook1.jpg" alt="Image">
                    </div>
                    <div class="slide">
                        <img src="carpenter1.jpg" alt="Image">
                    </div>
                    <div class="slide">
                        <img src="electrician1.jpg" alt="Image">
                    </div>
                    <div class="slide">
                        <img src="old1.jpg" alt="Image">
                    </div>
                </figure>
                </div>
            </div>
        </div>
    </section>

    <!--Service-->
    <section id="service">
        <div class="title-text">
            <p>SERVICES</p>
            <h1>We Provide Better</h1>
        </div>
        <div class="service-box">
            <div class="single-service">
                <img src="job1-cook.jpg">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Cook</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet similique consequatur voluptate ipsam provident nihil voluptas dicta fugiat esse aliquid.</p>
                </div>
            </div>
            <div class="single-service">
                <img src="job2-electrcian.jpg">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Electrcian</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet similique consequatur voluptate ipsam provident nihil voluptas dicta fugiat esse aliquid.</p>
                </div>
            </div>
            <div class="single-service">
                <img src="job-3 carpenter.jpg">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Carpenter</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet similique consequatur voluptate ipsam provident nihil voluptas dicta fugiat esse aliquid.</p>
                </div>
            </div>
            <div class="single-service">
                <img src="job-4 plumber.jpg">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Plumber</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet similique consequatur voluptate ipsam provident nihil voluptas dicta fugiat esse aliquid.</p>
                </div>
            </div>
        </div>
    </section>
    <!--Footer-->

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
    <!--<div class="footer">
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
            </div> -->

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




<?php

include("config.php");

if(isset($_POST['but_upload']))
{
    
    //<!-- echo "<br><br><br><br><br><br><br><br><br>"; -->
    print_r($_POST);
    //echo "hello world  this is daniel sams";
//    echo "<br><br><br><br><br><br><br><br><br>";
  //  echo $hid;
    //echo $hid;echo $hid;echo $hid;
//    echo "<br><br><br><br><br><br><br><br><br>";
    $hid = $_POST['custId'];
  //  echo "<br><br><br><br><br><br><br><br><br>";
    //echo $hid;
    //echo "<br><br><br><br><br><br><br><br><br>";
    
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $from_date = $_POST['from_date'];
    //echo "<br>";
//    print_r($_POST);
//    echo "hello world<br><br><br><br>";
 //       echo key($_POST);
//    echo "<br><br><br><br>hello world<br>";
//    echo $name;
//    echo $from_date;
    $query = "INSERT into service_request (`name`,`phone`,`email`,`address`,`from_date`,`hid`,`temp`) 
    VALUES ('$name',$phone,'$email','$address','$from_date', $hid,'N')";
    // $query = "INSERT into `sahaayak`.`service_request` (name,phone,email,address,from_date,hid) VALUES ('abdul kalam',782156,'abcdef','ghijk','123',2)";
 //   echo "<br><br>";
   // echo $query;
    $result = mysqli_query($conn,$query); 
  
    // or die(mysqli_error($conn));

   // echo $result;
   if($result){
	   echo '<script>alert("We will contact you soon");</script>'; 
   }
}

?>