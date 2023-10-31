<?php include('common/connection.php');
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="icon" href="logo/logo1-r.png" type="image">
    <!-- FONT AWSOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css link -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <style>
        .map {
            margin: 10px 15px;
        }
    </style>
</head>

<body>
    <!-- Topbar Page Link -->
    <?php include_once 'topbar.php'; ?>

    <!-- Header Page Link -->
    <?php include_once 'header.php'; ?>

    <!--Start Contact page -->

    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="cont">
                    <div class="col-6 conts">
                        <h3>Get In Touch</h3>
                        <h1>Contact Us For Support</h1>
                        <form action="contact.php" method="POST">
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
        <div class="container">
            <div class="row">
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3593.486955951796!2d89.22845827610166!3d25.754474608902363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e333a482b73e85%3A0xdb5727d7dad66983!2sSJS%20Freelancing%20%26%20IT%20Institute!5e0!3m2!1sen!2sbd!4v1689055121574!5m2!1sen!2sbd"
                        width="100%" height="450" style="border:5;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="clearfix"></div>


    <?php include_once 'footer.php'; ?>
    <!--End Contact page -->
    <script src="js/btn.js"></script>
</body>

</html>