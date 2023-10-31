<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
    <link rel="icon" href="logo/logo1-r.png" type="image">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!-- Topbar Page Link -->
    <?php include_once 'topbar.php';?>

    <!-- Header Page Link -->
    <?php include_once 'header.php';?>
    <!--Start About Us -->
    <div class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="aboutus">
                        <div class="col-6">
                            <div class="About order-2">
                                <h1>UK-Bangla Hospital Ltd.</h1>
                                <h3>Your 24/7 health partner</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type
                                    specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged.<span id="dotsa">...</span><span id="abouts">

                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                    Ipsum passages,
                                    and more recently with desktop publishing software like Aldus PageMaker including
                                    versions of Lorem Ipsum.</span></p>
                                    <button onclick="aFunction()" id="myBtna">Read more</button><button onclick="myFunction()" id="myBtn">Chairman Msg</button>
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
    
    <?php include_once 'footer.php';?>
    <!--End About Us-->
    <script src="js/btn.js"></script>
</body>
</html>