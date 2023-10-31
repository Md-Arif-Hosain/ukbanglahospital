<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department Page</title>
    <link rel="icon" href="logo/logo1-r.png" type="image">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <!-- Topbar Page Link -->
    <?php include_once 'topbar.php';?>
    
    <!-- Header Page Link -->
    <?php include_once 'header.php';?>
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
                                    Lorem Ipsum<span id="dots">...</span><span id="more"> has been the industry's standard dummy text ever since
                                    </span></p><button onclick="iFunction()" id="myBtn">Read more</button>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="web">
                                <i class="fa-solid fa-user-doctor"></i>
                                <h2>Neurology</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum<span id="dot">...</span><span id="mor"> has been the industry's standard dummy text ever since
                                </span></p><button onclick="jFunction()" id="myBt">Read more</button>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="web">
                                <i class="fa-solid fa-stethoscope"></i>
                                <h2>Diagnostics</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum <span id="do">...</span><span id="mo">has been the industry's standard dummy text ever since
                                </span> </p><button onclick="kFunction()" id="myB">Read more</button>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="web">
                                <i class="fa-solid fa-tooth"></i>
                                <h2>Dental</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum<span id="dotsd">...</span><span id="mored"> has been the industry's standard dummy text ever since
                                </span> </p>
                                <button onclick="dFunction()" id="myBtnd">Read more</button>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="web">
                                <i class="fa-solid fa-hospital-user"></i>
                                <h2>Emergency</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum<span id="dotse">...</span><span id="moree"> has been the industry's standard dummy text ever since
                                    </span></p><button onclick="eFunction()" id="myBtne">Read more</button>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="web">
                                <i class="fa-solid fa-hospital"></i>
                                <h2>ICU Department</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum<span id="dotsi">...</span><span id="morei"> has been the industry's standard dummy text ever since
                                    </span> </p><button onclick="icFunction()" id="myBtni">Read more</button>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="web">
                                <i class="fa-solid fa-house-chimney-medical"></i>
                                <h2> Orthopedics</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum<span id="dotso">...</span><span id="moreo"> has been the industry's standard dummy text ever since
                                    </span></p>
                                    <button onclick="oFunction()" id="myBtno">Read more</button>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="web">
                                <i class="fa-solid fa-syringe"></i>
                                <h2>Laboratory Medicine </h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum<span id="dotsl">...</span><span id="morel"> has been the industry's standard dummy text ever.
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
    <?php include_once 'footer.php';?>
    <!--End Department-->

    <script src="js/btn.js"></script>
</body>
</html>