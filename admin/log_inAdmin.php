﻿<?php
session_start();
require_once "../scripts/db_connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="author" content="ScriptsBundle">
    <title>AdForest | Largest Classifieds Portal</title>
    <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
    <link rel="icon" href="../en/images/favicon.ico" type="image/x-icon"/>
    <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="../en/css/bootstrap.css">
    <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="../en/css/style.css">
    <!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="../en/css/font-awesome.css" type="text/css">
    <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
    <link href="../en/css/flaticon.css" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="../en/css/et-line-fonts.css" type="text/css">
    <!-- =-=-=-=-=-=-= Menu Drop Down =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="../en/css/forest-menu.css" type="text/css">
    <!-- =-=-=-=-=-=-= Animation =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="../en/css/animate.min.css" type="text/css">
    <!-- =-=-=-=-=-=-= Select Options =-=-=-=-=-=-= -->
    <link href="../en/css/select2.min.css" rel="stylesheet"/>
    <!-- =-=-=-=-=-=-= noUiSlider =-=-=-=-=-=-= -->
    <link href="../en/css/nouislider.min.css" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Listing Slider =-=-=-=-=-=-= -->
    <link href="../en/css/slider.css" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
    <link rel="stylesheet" type="text/css" href="../en/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="../en/css/owl.theme.css">
    <!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
    <link href="../en/skins/minimal/minimal.css" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Responsive Media =-=-=-=-=-=-= -->
    <link href="../en/css/responsive-media.css" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Template Color =-=-=-=-=-=-= -->
    <link rel="stylesheet" id="color" href="../en/css/colors/defualt.css">
    <!-- =-=-=-=-=-=-= For Style Switcher =-=-=-=-=-=-= -->
    <link rel="stylesheet" id="theme-color" type="text/css" href="#"/>
    <!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
    <link href="../en/skins/minimal/minimal.css" rel="stylesheet">
    <!-- JavaScripts -->
    <script src="../en/js/modernizr.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>

<!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>

<!-- =-=-=-=-=-=-= Light Header =-=-=-=-=-=-= -->

<!-- Navigation Menu End -->
<!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="header-page text-center">
                    <h1>ADMIN Sign In</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
<div class="main-content-area clearfix">
    <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
    <section class="section-padding-140 error-page pattern-bg " style="margin-top: -60px;">
        <!-- Main Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Middle Content Area -->
                <div class="col-sm-offset-0 col-sm-12 col-md-offset-3 col-md-6">
                    <!--  Form -->
                    <div class="form-grid">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label>Email</label>
                                <input  placeholder="Your Email" class="form-control"
                                       name="email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input  placeholder="Your Password" class="form-control"
                                       type="password" name="password">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-theme btn-lg btn-block" type="submit" name="Log_in"
                                       value="Log in As Admin">
                            </div>

                        </form>

                        <?php



                        if (isset($_POST['Log_in'])) {
                            $adminEmail = mysqli_real_escape_string($mysqli, $_POST['email']);
                            $password = mysqli_real_escape_string($mysqli, $_POST['password']);
                            $query = "SELECT * FROM  `ADMIN` WHERE `admin_user`='{$adminEmail}'  AND `admin_password`='{$password}' ";
                            $result = mysqli_query($mysqli, $query);
                            if (mysqli_num_rows($result) > 1) {
                                echo "gggggggggggggggggggggg";
                                header('location:../en/index.php');
                            } else {
                                echo "<h4 style='color: red'>log in with your admin account!</h4>";
                            }
                        }
                        ?>
                    </div>

                    <!-- Form -->
                </div>
                <!-- Middle Content Area  End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Main Container End -->
    </section>
    <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
    <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
    <footer>
        <!-- Footer Content -->
    </footer>
    <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
</div>
<!-- Main Content Area End -->

<div class="custom-modal">
    <div id="modalPassError" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header rte">
                    <h2 class="modal-title text-center">You entered a wrong password!</h2>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Try again</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="custom-modal">
    <div id="modalUserError" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header rte">
                    <h2 class="modal-title text-center">Maybe you entered a wrong email</h2>
                    <h2 class="modal-title text-center">Please, check it or make a new account!</h2>
                </div>
                <div class="modal-footer">
                    <a href="register.php" type="button" class="btn btn-warning">Register</a>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Try again</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="custom-modal">
    <div id="fieldsError" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header rte">
                    <h2 class="modal-title text-center">You left something empty!</h2>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Try again</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Back To Top -->
<a href="#0" class="cd-top">Top</a>
<!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
<script src="../en/js/jquery.min.js"></script>
<!-- Bootstrap Core Css  -->
<script src="../en/js/bootstrap.min.js"></script>
<!-- Jquery Easing -->
<script src="../en/js/easing.js"></script>
<!-- Menu Hover  -->
<script src="../en/js/forest-megamenu.js"></script>
<!-- Jquery Appear Plugin -->
<script src="../en/js/jquery.appear.min.js"></script>
<!-- Numbers Animation   -->
<script src="../en/js/jquery.countTo.js"></script>
<!-- Jquery Smooth Scroll  -->
<script src="../en/js/jquery.smoothscroll.js"></script>
<!-- Jquery Select Options  -->
<script src="../en/js/select2.min.js"></script>
<!-- noUiSlider -->
<script src="../en/js/nouislider.all.min.js"></script>
<!-- Carousel Slider  -->
<script src="../en/js/carousel.min.js"></script>
<script src="../en/js/slide.js"></script>
<!-- Image Loaded  -->
<script src="../en/js/imagesloaded.js"></script>
<script src="../en/js/isotope.min.js"></script>
<!-- CheckBoxes  -->
<script src="../en/js/icheck.min.js"></script>
<!-- Jquery Migration  -->
<script src="../en/js/jquery-migrate.min.js"></script>
<!-- Sticky Bar  -->
<script src="../en/js/theia-sticky-sidebar.js"></script>
<!-- Style Switcher -->
<script src="../en/js/color-switcher.js"></script>
<!-- Template Core JS -->
<script src="../en/js/custom.js"></script>


</body>
</html>

