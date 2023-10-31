<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctos Page</title>
    <link rel="icon" href="logo/logo1-r.png" type="image">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
<!-- Topbar Page Link -->
    <?php include_once 'topbar.php';?>
    
    <!-- Header Page Link -->
    <?php include_once 'header.php';?>
    <style>
@media (max-width:1200px){.doctors .col-3 { width: 342px;}} 
@media (max-width:1120px){.doctors .col-3 {width: 301px;}}
@media (max-width:1004px){.doctors .col-3 {width: 316px;}}
@media (max-width:778px){.doctors .col-3 {width: 332px;}}
@media (max-width:756px){.doctors .col-3 {width: 275px;}}
@media (max-width:731px){.doctors .col-3 {width: 300px;}}
@media (max-width:600px){.doctors .col-3 {width: 266px;}}
@media (max-width:546px){.doctors .col-3 {width: 249px;}}
</style>

</head>
<body>

    <!-- Start Our Doctors -->
    <div class="doctors" style="">
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
    
    <?php include_once 'footer.php';?>
    <!-- End Our Doctors -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- <script>
    $(document).ready(function () {
        $('.mobileIcon').click(function () {
            $('#mobile-manu').slideToggle(400);
        });
    });
</script> -->
<!-- Slider and Sticky script -->
<!-- <script>
    window.onscroll = function() {myFunction()};
    
    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
    </script> -->
    <!-- Java Script page link -->
<script src="js/btn.js"></script>
</body>
</html>