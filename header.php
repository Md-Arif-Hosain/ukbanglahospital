<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="icon" href="logo/logo1-r.png" type="image">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
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
    <!--Top Header-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  
<!-- Toggle and Sticky script -->
<script>
    $(document).ready(function () {
        $('.mobileIcon').click(function () {
            $('#mobile-manu').slideToggle(400);
        });
    });
</script>
    <script>
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
    </script>
</body>
</html>