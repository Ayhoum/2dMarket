
﻿<?php
ob_start();
session_start();
require_once "../scripts/db_connection.php";
require_once 'phpmailer/class.phpmailer.php';



if(isset($_POST['restore'])) {

    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $sql = "SELECT * FROM USER WHERE email='$email' ";
    $getAgent = mysqli_query($mysqli, $sql);


    //checking for available email
    if (mysqli_num_rows($getAgent) == 1) {
        $row = mysqli_fetch_array($getAgent);

        $id = $row['id'];
        $code = $row['code'];


        ///check if the user already has an activation code(NOTE)
        if ($code != "") {
            echo 'pleas check your email we have already sent you an email with Rest-code';
            exit();


        }
        //if not proceed
        else {


            $random_code = time() . rand(5000, 10000);
            $random_code = str_shuffle($random_code);
            $update_note = "UPDATE USER SET  code ='$random_code' WHERE id='$id' AND email = '$email' ";
            $sendTheUpdate=mysqli_query($mysqli, $update_note);
            if ($sendTheUpdate) {



                $mail = new PHPMailer(); // defaults to using php "mail()"

// TCP port to connect to



                $mail->CharSet = 'UTF-8';
                $mail->IsHTML(true);
                $body = "
                        <h1>here is your Code</h1>
                    <p> http:localhost/2dMarket/en/rest_Password.php?_ijt=.
                         $random_note .&email= . $email </p>
                       ";

//
                $mail->AddAddress($email);
                $mail->Subject = "restore password";
                $mail->MsgHTML($body);
//

                if (!$mail->Send()) {

                    echo "het is niet gelukt".$mail->ErrorInfo;

                } else {
                    echo "check your email";
                    header("Location:en/scripts/RestorePassword/insert_code.php");
                }

            }
        }

    }else {
        echo "Your email addres dose not exists";  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="author" content="ScriptsBundle">
    <title>2D Market</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    // <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
    <link rel="icon" href="images/logo_files/logo_png.png" type="image/x-icon" />
        <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
        <link rel="stylesheet" href="css/style.css">
        <!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
        <link rel="stylesheet" href="css/font-awesome.css" type="text/css">
        <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
        <link href="css/flaticon.css" rel="stylesheet">
        <!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
        <link rel="stylesheet" href="css/et-line-fonts.css" type="text/css">
        <!-- =-=-=-=-=-=-= Menu Drop Down =-=-=-=-=-=-= -->
        <link rel="stylesheet" href="css/forest-menu.css" type="text/css">
        <!-- =-=-=-=-=-=-= Animation =-=-=-=-=-=-= -->
        <link rel="stylesheet" href="css/animate.min.css" type="text/css">
        <!-- =-=-=-=-=-=-= Select Options =-=-=-=-=-=-= -->
        <link href="css/select2.min.css" rel="stylesheet" />
        <!-- =-=-=-=-=-=-= noUiSlider =-=-=-=-=-=-= -->
        <link href="css/nouislider.min.css" rel="stylesheet">
        <!-- =-=-=-=-=-=-= Listing Slider =-=-=-=-=-=-= -->
        <link href="css/slider.css" rel="stylesheet">
        <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
        <!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
        <link href="skins/minimal/minimal.css" rel="stylesheet">
        <!-- =-=-=-=-=-=-= Responsive Media =-=-=-=-=-=-= -->
        <link href="css/responsive-media.css" rel="stylesheet">
        <!-- =-=-=-=-=-=-= Template Color =-=-=-=-=-=-= -->
        <link rel="stylesheet" id="color" href="css/colors/defualt.css">
        <!-- =-=-=-=-=-=-= For Style Switcher =-=-=-=-=-=-= -->
        <link rel="stylesheet" id="theme-color" type="text/css" href="#" />
        <!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
        <link href="skins/minimal/minimal.css" rel="stylesheet">
        <!-- JavaScripts -->
        <script src="js/modernizr.js"></script>
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
    <div id="loader"><img class="img-responsive"  src="images/logo_files/design.gif">
        <h4 class="text-center" style="color: #00a9da">Loading..</h4> </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- =-=-=-=-=-=-= Light Header =-=-=-=-=-=-= -->
<div class="colored-header">
    <!-- Top Bar -->
    <?php include "topbar-en.php";?>
    <!-- Top Bar End -->
    <!-- Navigation Menu -->
    <?php include "nav_bar_en.php";?>
</div>
<!-- Navigation Menu End -->
<!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="header-page">
                    <h1>Restore your password!</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Small Breadcrumb -->
<div class="small-breadcrumb">
    <div class="container">
        <div class=" breadcrumb-link">
            <ul>
                <li><a href="index.php">Home Page</a></li>
                <li><a href="#">Pages</a></li>
                <li><a class="active" href="#">Restore</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Small Breadcrumb -->
<!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
<div class="main-content-area clearfix">
    <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
    <section class="section-padding error-page pattern-bg ">
        <!-- Main Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Middle Content Area -->
                <div class="col-md-5 col-md-push-7 col-sm-6 col-xs-12">
                    <!--  Form -->
                    <div class="form-grid">
                        <form  method="post">
                            <div class="form-group">
                                <label>Email</label>
                                <input placeholder="Your Email" class="form-control" type="email" id="email">
                            </div>

                            <button class="btn btn-theme btn-lg btn-block" id="restore">restore</button>
                        </form>
                    </div>
                    <!-- Form -->
                </div>

            <!-- Row End -->
        </div>
        <!-- Main Container End -->
    </section>
    <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
    <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
    <footer>
        <!-- Footer Content -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6 col-xs-12">
                        <!-- Info Widget -->
                        <div class="widget">
                            <div class="logo"> <img alt="" src="images/logo-1.png"> </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et dolor eget erat fringilla port.</p>
                            <ul>
                                <li><img src="images/appstore.png" alt=""></li>
                                <li><img src="images/googleplay.png" alt=""></li>
                            </ul>
                        </div>
                        <!-- Info Widget Exit -->
                    </div>
                    <div class="col-md-3  col-sm-6 col-xs-12">
                        <!-- Follow Us -->
                        <div class="widget socail-icons">
                            <h5>Follow Us</h5>
                            <ul>
                                <li><a class="fb" href=""><i class="fa fa-facebook"></i></a><span>Facebook</span></li>
                                <li><a class="twitter" href=""><i class="fa fa-twitter"></i></a><span>Twitter</span></li>
                                <li><a class="linkedin" href=""><i class="fa fa-linkedin"></i></a><span>Linkedin</span></li>
                                <li><a class="googleplus" href=""><i class="fa fa-google-plus"></i></a><span>Google+</span></li>
                            </ul>
                        </div>
                        <!-- Follow Us End -->
                    </div>
                    <div class="col-md-6  col-sm-6 col-xs-12">
                        <!-- Newslatter -->
                        <div class="widget widget-newsletter">
                            <h5>Singup for Weekly Newsletter</h5>
                            <div class="fieldset">
                                <p>We may send you information about related events, webinars, products and services which we believe.</p>
                                <form>
                                    <input class="" value="Enter your email address" type="text">
                                    <input class="submit-btn" name="submit" value="Submit" type="submit">
                                </form>
                            </div>
                        </div>
                        <!-- Newslatter -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyrights -->
        <div class="copyrights">
            <div class="container">
                <div class="copyright-content">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>© 2017 AForest All rights reserved. Design by <a href="http://themeforest.net/user/scriptsbundle/portfolio" target="_blank">Scriptsbundle</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
</div>
<!-- Main Content Area End -->

<!-- Back To Top -->
<a href="#0" class="cd-top">Top</a>
<!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap Core Css  -->
<script src="js/bootstrap.min.js"></script>
<!-- Jquery Easing -->
<script src="js/easing.js"></script>
<!-- Menu Hover  -->
<script src="js/forest-megamenu.js"></script>
<!-- Jquery Appear Plugin -->
<script src="js/jquery.appear.min.js"></script>
<!-- Numbers Animation   -->
<script src="js/jquery.countTo.js"></script>
<!-- Jquery Smooth Scroll  -->
<script src="js/jquery.smoothscroll.js"></script>
<!-- Jquery Select Options  -->
<script src="js/select2.min.js"></script>
<!-- noUiSlider -->
<script src="js/nouislider.all.min.js"></script>
<!-- Carousel Slider  -->
<script src="js/carousel.min.js"></script>
<script src="js/slide.js"></script>
<!-- Image Loaded  -->
<script src="js/imagesloaded.js"></script>
<script src="js/isotope.min.js"></script>
<!-- CheckBoxes  -->
<script src="js/icheck.min.js"></script>
<!-- Jquery Migration  -->
<script src="js/jquery-migrate.min.js"></script>
<!-- Sticky Bar  -->
<script src="js/theia-sticky-sidebar.js"></script>
<!-- Style Switcher -->
<script src="js/color-switcher.js"></script>
<!-- Template Core JS -->
<script src="js/custom.js"></script>
</body>
</html>


