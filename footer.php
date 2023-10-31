<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="icon" href="logo/logo1-r.png" type="image">
    <!-- FONT AWSOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!--Top Footer-->
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
                                    <p><i class="fa-brands fa-facebook"></i> <a href="https://www.facebook.com/people/Uk-Bangla-Hospital-Ltd/100077043632446/?mibextid=ZbWKwL" target="_blank"> Facebook.com</a><br>
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