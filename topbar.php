<?php session_start(); ?>
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
    <!-- <hr> -->
    <!-- Topbar End -->

  