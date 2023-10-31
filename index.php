<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uk-Bangla Hospital Ltd</title>
    <link rel="icon" href="logo/logo1-r.png" type="image">
    <!-- FONT AWSOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- OWl Carousal slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <!--CSS Link -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!-- Topbar Start -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="name iconn">
                        <a class="phone" href=""><i class="fa-solid fa-phone"> </i> +8801713-361734</a>
                        <span class="line">|</span>
                        <a class="email" href=""><i class="fa-solid fa-envelope-open-text"> </i> ukbanglagroup@gmail.com
                        </a>
                        <?php if(isset($_SESSION['phone'])){
                            ?>
                        <a class="email" href="logout.php"><button style="padding:3px; background: green; color:white; border:none;">logout</button></a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-2">
                    <marquee>
                        <h3>UK-Bangla Hospital Ltd Your 24/7 health partner</h3>
                    </marquee>
                </div>
                <div class="col-4">
                    <div class="socialicon">
                        <a class="text-body px-2"
                            href="https://www.facebook.com/people/Uk-Bangla-Hospital-Ltd/100077043632446/?mibextid=ZbWKwL"
                            target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-body px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-body px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-body px-2" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-body ps-2" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!-- Topbar End -->

    <!--Header Start-->

    <div class="header" id="myHeader">
        <div class="container">
            <div class="row">
                <div class="manu">
                    <div class="col-2">
                        <div class="logo">
                            <a href="index.php"><img src="logo/right.png" alt="logo image"></a>
                        </div>
                    </div>

                    <button type="button" class="mobileIcon"><i class="fa-solid fa-bars"></i></i></button>

                    <div class="col-8 main-manu">
                        <div class="nav ">
                            <ul>
                                <li><a href="index.php" style="color: black;">Home</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="department.php">Department</a></li>
                                <li><a href="service.php">Our Service</a></li>
                                <li><a href="doctors.php">Find Doctors</a></li>
                                <li><a href="contact.php">Contuct Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="button">
                            <ul>
                                <li><a href="add-patients.php" target="">Booking Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- End Header Start-->

    <!-- Start Mobile Manu -->
    <div class="hovermanu Mobile">
        <div class="click container">
            <div class="col-8" id="mobile-manu" onclick="togglemenu()">
                <div class="nav mob">
                    <ul>
                        <li><a href="index.php" style="color: black;">Home</a></li>
                        <li><a href="about.php" target="">About Us</a></li>
                        <li><a href="department.php">Department</a></li>
                        <li><a href="service.php">Our Service</a></li>
                        <li><a href="doctors.php">Find Doctors</a></li>
                        <li><a href="contact.php">Contuct Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mobile Manu -->

    <!--Start Slider Content-->
    

    <div class="slideshow">

        <div class="mySlides fade">
            <!-- <div class="numbertext">1 / 3</div>-->
            <img src="img/s1.png" style="width:100%">
            <div class="text">
            
            </div>
        </div>

        <div class="mySlides fade">
            <!--<div class="numbertext">2 / 3</div>-->
            <img src="img/se.png" style="width:100%">
            <div class="text">
              
            </div>
        </div>

        <div class="mySlides fade">
            <!--<div class="numbertext">3 / 3</div>-->
            <img src="img/7.jpg" style="width:100%">
            <div class="text">
            </div>
        </div>

    </div>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 3000); // Change image every 2 seconds
        }
    </script>

    </div>

    <!-- Slider jquesy CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--End Slider Content-->
    <div class="backend">
    <div class="container">
    <div class="text">
             <button><a href="add-patients.php"> Online Appointment <i class="fa-solid fa-right-long"></i></a></button>
            <button><a href="patient-list.php"> Patient Serial List <i class="fa-solid fa-right-long"></i></a></button>
            <button> <a href="doctors-work-list.php"> Doctor Work List <i class="fa-solid fa-right-long"></i></a></button>
            <button> <a href="doctors.php"> Find A Doctors <i class="fa-solid fa-right-long"></i></a></button>
        </div>
    </div>
    </div> <div class="clearfix"></div>
    <!--Start About Us -->
    <div class="about" id="about"> 
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="aboutus">
                        <div class="col-6">
                            <div class="About order-2">
                                <h1>UK-Bangla Hospital Ltd</h1>
                                <h3>Your 24/7 health partner</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type
                                    specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged.<span id="dotsa">...</span><span
                                        id="abouts">

                                        It was popularised in the 1960s with the release of Letraset sheets containing
                                        Lorem
                                        Ipsum passages,
                                        and more recently with desktop publishing software like Aldus PageMaker
                                        including
                                        versions of Lorem Ipsum.</span></p>
                                <button onclick="aFunction()" id="myBtna">Read more</button><button
                                    onclick="yFunction()" id="myBtny">Chairman Msg</button>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="slideshow order-1">
                                <img src="img/hp.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!--End About Us-->

    <!--Start Department -->
    <div class="department" id="department">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="ment">
                        <h1>Our Department</h1>
                        <div class="col-3">
                            <div class="web">
                                <i class="fa-solid fa-x-ray"></i>
                                <h2>Cardiology</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum<span id="dots">...</span><span id="more"> has been the industry's
                                        standard dummy text ever since
                                    </span></p><button onclick="iFunction()" id="myBtn">Read more</button>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="web">
                                <i class="fa-solid fa-user-doctor"></i>
                                <h2>Neurology</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum<span id="dot">...</span><span id="mor"> has been the industry's standard
                                        dummy text ever since
                                    </span></p><button onclick="jFunction()" id="myBt">Read more</button>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="web">
                                <i class="fa-solid fa-stethoscope"></i>
                                <h2>Diagnostics</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum <span id="do">...</span><span id="mo">has been the industry's standard
                                        dummy text ever since
                                    </span> </p><button onclick="kFunction()" id="myB">Read more</button>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="web">
                                <i class="fa-solid fa-tooth"></i>
                                <h2>Dental</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum<span id="dotsd">...</span><span id="mored"> has been the industry's
                                        standard dummy text ever since
                                    </span> </p>
                                <button onclick="dFunction()" id="myBtnd">Read more</button>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="web">
                                <i class="fa-solid fa-hospital-user"></i>
                                <h2>Emergency</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum<span id="dotse">...</span><span id="moree"> has been the industry's
                                        standard dummy text ever since
                                    </span></p><button onclick="eFunction()" id="myBtne">Read more</button>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="web">
                                <i class="fa-solid fa-hospital"></i>
                                <h2>ICU Department</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum<span id="dotsi">...</span><span id="morei"> has been the industry's
                                        standard dummy text ever since
                                    </span> </p><button onclick="icFunction()" id="myBtni">Read more</button>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="web">
                                <i class="fa-solid fa-house-chimney-medical"></i>
                                <h2> Orthopedics</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum<span id="dotso">...</span><span id="moreo"> has been the industry's
                                        standard dummy text ever since
                                    </span></p>
                                <button onclick="oFunction()" id="myBtno">Read more</button>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="web">
                                <i class="fa-solid fa-syringe"></i>
                                <h2>Laboratory Medicine </h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum<span id="dotsl">...</span><span id="morel"> has been the industry's
                                        standard dummy text ever.
                                    </span></p>
                                <button onclick="lFunction()" id="myBtnl">Read more</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <!--End Department-->

    <!-- Start Our Service -->
    <div class="service" id="service">
        <div class="container">
            <div class="row">
                <div class="help">
                    <h2>Our Services</h2>
                    <div class="col-3">
                        <h1><i class="fa-solid fa-hand-holding-droplet"></i> 24/7 Health Service</h1>
                    </div>

                    <div class="col-3">
                        <h1><i class="fa-solid fa-hand-holding-droplet"></i> </i> Emergency Service</h1>
                    </div>

                    <div class="col-3">
                        <h1><i class="fa-solid fa-hand-holding-droplet"></i> </i> Online Appointment</h1>
                    </div>

                    <div class="col-3">
                        <h1><i class="fa-solid fa-hand-holding-droplet"></i> Qualified Doctors</h1>
                    </div>

                    <div class="col-3">
                        <h1><i class="fa-solid fa-hand-holding-droplet"></i> </i>Emergency Service</h1>
                    </div>

                    <div class="col-3 bottom">
                        <h1><i class="fa-solid fa-hand-holding-droplet"></i> </i> Qualified Doctors</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- End Our Service -->


    <!-- Start Our Doctors -->
    <div class="doctors">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="team">
                        <h1>Our Doctors</h1>
                        <div class="owl-carousel owl-theme">
                            <div class="col-3 item">
                                <img src="img/dc4.jpg" alt="">
                                <div class="text">
                                    <h2>Dr. Md. Abdul Momin</h2>
                                    <h3>MBBS, BCS (Health), FCPS</h3>
                                    <h4>Medicare Diagnostic Center, Pabna</h4>
                                    <h4> Appointment: +8801713998199</h4>
                                </div>

                            </div>
                            <div class="col-3 item">
                                <img src="img/dc.jpg" alt="">
                                <div class="text">
                                    <h2>Dr. Fahmida Alam</h2>
                                    <h3>MBBS, BCS (Health), FCPS </h3>
                                    <h4>Medicine, Diabetes & Hormone Specialist</h4>
                                    <h4> Appointment: +8809666787817</h4>
                                </div>
                            </div>
                            <div class="col-3 item">
                                <img src="img/dc3.jpg" alt="">
                                <div class="text">
                                    <h2>Dr. Shahana Ferdous</h2>
                                    <h3>MBBS, FCPS (Radiotherapy)</h3>
                                    <h4>Chattogram Maa-O-Shishu Hospital Medical College</h4>
                                    <h4> Appointment: +8801976022333</h4>
                                </div>
                            </div>
                            <div class="col-3 item">
                                <img src="img/dc2.jpg" alt="">
                                <div class="text">
                                    <h2>Dr. Nasir Uddin Mahmud (Shuvo)</h2>
                                    <h3>MBBS, BCS (Health), FCPS </h3>
                                    <h4>Chittagong Medical College & Hospital</h4>
                                    <h4>Appointment: +8801896094552</h4>
                                </div>
                            </div>

                        </div>
                        <script>
                            $('.owl-carousel').owlCarousel({
                                loop: true,
                                margin: 15,
                                nav: false,
                                dots: true,
                                autoplay: true,
                                autoplayTimeout: 2000,
                                //stagePadding:40,
                                responsive: {
                                    0: {
                                        items: 1
                                    },
                                    550: {
                                        items: 2
                                    },
                                    600: {
                                        items: 2
                                    },
                                    850: {
                                        items: 3
                                    },
                                    900: {
                                        items: 3
                                    },
                                    1000: {
                                        items: 3
                                    },
                                    1200: {
                                        items: 4
                                    }
                                }
                            })
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- End Our Doctors -->

    <!--Start Contact page -->
    <?php  include('common/connection.php'); 
          error_reporting(0);
    ?>
    <div class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="cont">
                    <div class="col-6 conts">
                        <h3>Get In Touch</h3>
                        <h1>Contact Us For Support</h1>
                        <form action="#contact" method="POST">
                            <input type="text" name="name" placeholder="Enter Your Name*">
                            <input type="number" name="phone" placeholder="Enter Phone Number*"><br>
                            <input type="email" name="email" placeholder="Your Email">
                            <input type="date" name="date" placeholder="Enter Date"><br>
                            <div class="msg">
                                <input type="subject" name="subject" placeholder="Message">
                            </div>
                            <input type="submit" name="submit">

                            <?php

                            if (isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['date'])) {

                                $name = $_POST['name'];
                                $phone = $_POST['phone'];
                                $email = $_POST['email'];
                                $date = $_POST['date'];
                                $subject = $_POST['subject'];

                                // Insert Data into Table
                                $sql = "INSERT INTO patientserial (name, phone, email, date, subject) VALUES
                             ('$name','$phone', '$email', '$date', '$subject')";

                                if ($conn->query($sql) === TRUE) {
                                    echo "Submit data";
                                } else {
                                    echo "error:" . $conn->error;
                                }
                            }
                            ?>
                        </form>
                    </div>
                    <div class="col-6">
                        <div class="address">
                            <h3><i class="fa-solid fa-location-dot"></i> 381/28-New DOHS, Mohakhali,Dhaka</h3>
                            <h3><i class="fa-solid fa-phone"></i> +8801679 252595</h3>
                            <h3><i class="fa-solid fa-envelope"></i> ukbanglagroup@gmail.com</h3>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <div class="clearfix"></div>
    <!--End Contact page -->
    <!--Start Footer-->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="foot">
                        <div class="nono">
                            <div class="footabout">
                                <div class="col-3">
                                    <h1>Our Service</h1>
                                    <p>24/7 Health Service</p>
                                    <p>Emergency Service</p>
                                    <p>Online Appointment</p>
                                    <p> Qualified Doctors</p><br><br>
                                </div>
                            </div>

                            <div class="social">
                                <div class="col-3">
                                    <h1>Follow US</h1>
                                    <p><i class="fa-brands fa-facebook"></i> <a
                                            href="https://www.facebook.com/people/Uk-Bangla-Hospital-Ltd/100077043632446/?mibextid=ZbWKwL"
                                            target="_blank"> Facebook.com</a><br>
                                        <i class="fa-brands fa-twitter"> </i><span> Twitter</span><br>
                                        <i class="fa-brands fa-twitter"> </i><span> Instagram</span><br>
                                        <i class="fa-brands fa-linkedin"> </i><span> Linkdin</span><br>
                                        <i class="fa-brands fa-youtube"> </i><span> Youtube</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="onno">
                            <div class="address">
                                <div class="col-3">
                                    <h1>Contact Info</h1>
                                    <p>
                                        <i class="fa-solid fa-location-dot"></i> <span> Road No-28, House No-381,<br>
                                            New DOHS, Mohakhali,<br> Dhaka, Bangladesh</span><br>
                                        <i class="fa-regular fa-envelope"></i> <span>
                                            ukbanglagroup01@<br>gmail.com</span><br>
                                        <i class="fa-solid fa-phone"></i> <span>+880000000000</span><br>
                                    </p>
                                </div>
                            </div>
                            <div class="opentime">
                                <div class="col-3">
                                    <h1>Live Services</h1>
                                    <p><a href="patient-list.php" target="#">Patient Serial List </a></p>
                                    <p><a href="doctors-work-list.php" target="" rel="noopener noreferrer">Doctors Work list</a></p>
                                    <p><a href="login.php" target="" rel="noopener noreferrer">Login </a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <hr>
                    <h4>Copyright © 2023 UK-Bangla Hospital Ltd.</h4>
                    <button onclick="topFunction()" id="myonBtn" title="Go to top"><i class="fa-solid fa-circle-up"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

    <!--End Footer-->

    <!-- toggle Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.mobileIcon').click(function () {
                $('#mobile-manu').slideToggle(400);
            });
        });
    </script>

    <!-- Slider and Sticky script -->
    <script>
        window.onscroll = function () { myFunction() };

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>
    <!-- Java Script page link -->


 <!-- OnClick Top Start -->
<script>
// Get the button
let mybutton = document.getElementById("myonBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

    <script src="js/btn.js"></script>

</body>

</html>