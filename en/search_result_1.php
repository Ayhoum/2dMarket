<?php
include '../scripts/db_connection.php';

//ob_start();
//session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="author" content="2D Market">
    <title>AdForest | Largest Classifieds Portal</title>
    <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
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
    <!-- JavaScripts -->
    <script src="js/modernizr.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .img-responsive img {
            height:250px;
            width:100%;
        }

    </style>
</head>
<body>
<!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
<div id="loader-wrapper">
    <div id="loader"><img class="img-responsive"  src="images/logo_files/design.gif">
        <h4 class="text-center" style="color: #00a9da">Loading..</h4> </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>

<div class="colored-header">
    <!-- Top Bar -->
    <?php include "topbar-en.php";?>
    <!-- Top Bar End -->
    <!-- Navigation Menu -->
    <?php include "nav_bar_en.php";?>
</div>
<!-- Navigation Menu End -->
<!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
<!-- Small Breadcrumb -->
<div class="bread-2 page-header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-5 col-xs-12">
                <div class="header-page">
                    <h1>All Advertisements </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
<div class="main-content-area clearfix">
    <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
    <section class="section-padding gray">
        <!-- Main Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Middle Content Area -->
                <div class="col-md-8 col-md-push-4 col-lg-8 col-sx-12 white-bg">
                    <!-- Row -->
                    <div class="row">
                        <!-- Sorting Filters -->
                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                            <!-- Sorting Filters Breadcrumb -->
                            <div class="filter-brudcrums">
                                <span>Showing <span class="showed">1 - 20</span> of <span class="showed">42211</span> results</span>
                                <div class="filter-brudcrums-sort">
                                    <ul>
                                        <li><span>Sort by:</span></li>
                                        <li><a href="ads_per_country.php?updatedate=recent">Updated date</a></li>
                                        <li><a href="ads_per_country.php?price=higtolow">Price</a></li>
                                        <li><a href="#">New</a></li>
                                        <li><a href="#">Used</a></li>
                                        <li><a href="#">Warranty</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sorting Filters Breadcrumb End -->
                        </div>
                        <!-- Sorting Filters End-->
                        <div class="clearfix"></div>
                        <!-- Ads Archive -->
                        <div class="posts-masonry">
                            <!-- Listing Ad Grid -->
                            <?php include 'scripts/select_all_ads_premium.php';?>
                            <!-- Advertizing -->
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <section class="advertising">
                                    <a href="<?php if(isset($_SESSION['id'])) {echo "new_advertisement.php" ;} else {echo "login.php";}  ?>">
                                        <div class="banner">
                                            <div class="wrapper">
                                                <span class="title">Do you want your property to be listed here?</span>
                                                <span class="submit">Submit it now! <i class="fa fa-plus-square"></i></span>
                                            </div>
                                        </div>
                                        <!-- /.banner-->
                                    </a>
                                </section>
                            </div>
                            <!-- Advertizing End -->
                            <?php include 'scripts/select_all_ads_normal.php'; ?>
                        </div>
                        <!-- Ads Archive End -->
                        <div class="clearfix"></div>
                        <!-- Pagination -->
                        <div class="text-center margin-bottom-30">
                            <ul class="pagination ">
                                <li class=""><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- Pagination End -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Middle Content Area  End -->
                <!-- Left Sidebar -->
                <div class="col-md-4 col-md-pull-8 col-sx-12">
                    <!-- Sidebar Widgets -->
                    <div class="sidebar">
                        <!-- Panel group -->
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <!-- Categories Panel -->
                            <div class="panel panel-default">
                                <!-- Heading -->
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <!-- Title -->
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="more-less glyphicon glyphicon-plus"></i>
                                            Categories
                                        </a>
                                    </h4>
                                    <!-- Title End -->
                                </div>
                                <!-- Content -->
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body categories">
                                        <ul>
                                        <?php include 'scripts/category.php';?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Categories Panel End -->
                            <!-- Condition Panel -->
                            <div class="panel panel-default">
                                <!-- Heading -->
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="more-less glyphicon glyphicon-plus"></i>
                                            Condition
                                        </a>
                                    </h4>
                                </div>
                                <!-- Content -->
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <div class="skin-minimal">
                                            <ul class="list">
                                                <li>
                                                    <input tabindex="7" type="radio" id="minimal-radio-1" name="minimal-radio">
                                                    <label for="minimal-radio-1">New</label>
                                                </li>
                                                <li>
                                                    <input tabindex="8" type="radio" id="minimal-radio-2" name="minimal-radio" checked>
                                                    <label for="minimal-radio-2">Used</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Condition Panel End -->
                            <!-- Pricing Panel -->
                            <div class="panel panel-default">
                                <!-- Heading -->
                                <div class="panel-heading" role="tab" id="headingfour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                            <i class="more-less glyphicon glyphicon-plus"></i>
                                            Price
                                        </a>
                                    </h4>
                                </div>
                                <!-- Content -->
                                <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                                    <div class="panel-body">
                                        <span class="price-slider-value">Price ($) <span id="price-min"></span> - <span id="price-max"></span></span>
                                        <div id="price-slider"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pricing Panel End -->
                            <!-- Featured Ads Panel -->
                            <div class="panel panel-default">
                                <!-- Heading -->
                                <div class="panel-heading" >
                                    <h4 class="panel-title">
                                        <a>
                                            Featured Ads
                                        </a>
                                    </h4>
                                </div>
                                <!-- Content -->
                                <?php include 'scripts/featured_ads.php';?>
                            </div>
                            <!-- Featured Ads Panel End -->
                            <!-- Latest Ads Panel -->
                            <div class="panel panel-default">
                                <!-- Heading -->
                                <div class="panel-heading" >
                                    <h4 class="panel-title">
                                        <a>
                                            Recent Ads
                                        </a>
                                    </h4>
                                </div>
                                <!-- Content -->
                                <div class="panel-collapse">
                                    <div class="panel-body recent-ads">
                                        <!-- Ads -->
                                        <div class="recent-ads-list">
                                            <div class="recent-ads-container">
                                                <div class="recent-ads-list-image">
                                                    <a href="#" class="recent-ads-list-image-inner">
                                                        <img src="images/posting/thumb-1.jpg" alt="">
                                                    </a><!-- /.recent-ads-list-image-inner -->
                                                </div>
                                                <!-- /.recent-ads-list-image -->
                                                <div class="recent-ads-list-content">
                                                    <h3 class="recent-ads-list-title">
                                                        <a href="#">Sony Xperia Z1</a>
                                                    </h3>
                                                    <ul class="recent-ads-list-location">
                                                        <li><a href="#">New York</a>,</li>
                                                        <li><a href="#">Brooklyn</a></li>
                                                    </ul>
                                                    <div class="recent-ads-list-price">
                                                        $ 17,000
                                                    </div>
                                                    <!-- /.recent-ads-list-price -->
                                                </div>
                                                <!-- /.recent-ads-list-content -->
                                            </div>
                                            <!-- /.recent-ads-container -->
                                        </div>
                                        <!-- Ads -->
                                        <div class="recent-ads-list">
                                            <div class="recent-ads-container">
                                                <div class="recent-ads-list-image">
                                                    <a href="#" class="recent-ads-list-image-inner">
                                                        <img src="images/posting/thumb-2.jpg" alt="">
                                                    </a><!-- /.recent-ads-list-image-inner -->
                                                </div>
                                                <!-- /.recent-ads-list-image -->
                                                <div class="recent-ads-list-content">
                                                    <h3 class="recent-ads-list-title">
                                                        <a href="#">2017 BMW i8</a>
                                                    </h3>
                                                    <ul class="recent-ads-list-location">
                                                        <li><a href="#">New York</a>,</li>
                                                        <li><a href="#">Brooklyn</a></li>
                                                    </ul>
                                                    <div class="recent-ads-list-price">
                                                        $ 66,000
                                                    </div>
                                                    <!-- /.recent-ads-list-price -->
                                                </div>
                                                <!-- /.recent-ads-list-content -->
                                            </div>
                                            <!-- /.recent-ads-container -->
                                        </div>
                                        <!-- Ads -->
                                        <div class="recent-ads-list">
                                            <div class="recent-ads-container">
                                                <div class="recent-ads-list-image">
                                                    <a href="#" class="recent-ads-list-image-inner">
                                                        <img src="images/posting/thumb-3.jpg" alt="">
                                                    </a><!-- /.recent-ads-list-image-inner -->
                                                </div>
                                                <!-- /.recent-ads-list-image -->
                                                <div class="recent-ads-list-content">
                                                    <h3 class="recent-ads-list-title">
                                                        <a href="#">Dell Latitude e7440</a>
                                                    </h3>
                                                    <ul class="recent-ads-list-location">
                                                        <li><a href="#">New York</a>,</li>
                                                        <li><a href="#">Brooklyn</a></li>
                                                    </ul>
                                                    <div class="recent-ads-list-price">
                                                        $ 37,000
                                                    </div>
                                                    <!-- /.recent-ads-list-price -->
                                                </div>
                                                <!-- /.recent-ads-list-content -->
                                            </div>
                                            <!-- /.recent-ads-container -->
                                        </div>
                                        <!-- Ads -->
                                        <div class="recent-ads-list">
                                            <div class="recent-ads-container">
                                                <div class="recent-ads-list-image">
                                                    <a href="#" class="recent-ads-list-image-inner">
                                                        <img src="images/posting/thumb-4.jpg" alt="">
                                                    </a><!-- /.recent-ads-list-image-inner -->
                                                </div>
                                                <!-- /.recent-ads-list-image -->
                                                <div class="recent-ads-list-content">
                                                    <h3 class="recent-ads-list-title">
                                                        <a href="#">Sport Stylish Steering</a>
                                                    </h3>
                                                    <ul class="recent-ads-list-location">
                                                        <li><a href="#">New York</a>,</li>
                                                        <li><a href="#">Brooklyn</a></li>
                                                    </ul>
                                                    <div class="recent-ads-list-price">
                                                        $ 11,000
                                                    </div>
                                                    <!-- /.recent-ads-list-price -->
                                                </div>
                                                <!-- /.recent-ads-list-content -->
                                            </div>
                                            <!-- /.recent-ads-container -->
                                        </div>
                                        <!-- Ads -->
                                        <div class="recent-ads-list">
                                            <div class="recent-ads-container">
                                                <div class="recent-ads-list-image">
                                                    <a href="#" class="recent-ads-list-image-inner">
                                                        <img src="images/posting/thumb-5.jpg" alt="">
                                                    </a><!-- /.recent-ads-list-image-inner -->
                                                </div>
                                                <!-- /.recent-ads-list-image -->
                                                <div class="recent-ads-list-content">
                                                    <h3 class="recent-ads-list-title">
                                                        <a href="#">Apple Wrist Watches</a>
                                                    </h3>
                                                    <ul class="recent-ads-list-location">
                                                        <li><a href="#">New York</a>,</li>
                                                        <li><a href="#">Brooklyn</a></li>
                                                    </ul>
                                                    <div class="recent-ads-list-price">
                                                        $ 20,000
                                                    </div>
                                                    <!-- /.recent-ads-list-price -->
                                                </div>
                                                <!-- /.recent-ads-list-content -->
                                            </div>
                                            <!-- /.recent-ads-container -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Latest Ads Panel End -->
                        </div>
                        <!-- panel-group end -->
                    </div>
                    <!-- Sidebar Widgets End -->
                </div>
                <!-- Left Sidebar End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Main Container End -->
    </section>
    <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
    <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
    <footer class="footer-area">
        <!--Footer Upper-->
        <div class="footer-content">
            <div class="container">
                <div class="row ">
                    <!--Two 4th column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            <div class="col-lg-7 col-sm-6 col-xs-12 column">
                                <div class="footer-widget about-widget">
                                    <div class="logo">
                                        <a href="index.html"><img alt="" class="img-responsive" src="images/logo-1.png"></a>
                                    </div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, eu me.</p>
                                    </div>
                                    <ul class="contact-info">
                                        <li><span class="icon fa fa-map-marker"></span> 60 Link Road Lhr. Pakistan 54770</li>
                                        <li><span class="icon fa fa-phone"></span> (042) 1234567890</li>
                                        <li><span class="icon fa fa-envelope-o"></span> contant@scriptsbundle.com</li>
                                        <li><span class="icon fa fa-fax"></span> (042) 1234 7777</li>
                                    </ul>
                                    <div class="social-links-two clearfix">
                                        <a class="facebook img-circle" href="#"><span class="fa fa-facebook-f"></span></a>
                                        <a class="twitter img-circle" href="#"><span class="fa fa-twitter"></span></a>
                                        <a class="google-plus img-circle" href="#"><span class="fa fa-google-plus"></span></a>
                                        <a class="linkedin img-circle" href="#"><span class="fa fa-pinterest-p"></span></a>
                                        <a class="linkedin img-circle" href="#"><span class="fa fa-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Footer Column-->
                            <div class="col-lg-5 col-sm-6 col-xs-12 column">
                                <div class="heading-panel">
                                    <h3 class="main-title text-left">Our Services</h3>
                                </div>
                                <div class="footer-widget links-widget">
                                    <ul>
                                        <li><a href="#">Web Development</a></li>
                                        <li><a href="#">Web Designing</a></li>
                                        <li><a href="#">Android Development</a></li>
                                        <li><a href="#">Theme Development</a></li>
                                        <li><a href="#">IOS Development</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Two 4th column End-->
                    <!--Two 4th column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            <!--Footer Column-->
                            <div class="col-lg-7 col-sm-6 col-xs-12 column">
                                <div class="footer-widget news-widget">
                                    <div class="heading-panel">
                                        <h3 class="main-title text-left"> Latest News</h3>
                                    </div>
                                    <!--News Post-->
                                    <div class="news-post">
                                        <div class="icon"></div>
                                        <div class="news-content">
                                            <figure class="image-thumb"><img alt="" src="images/blog/popular-2.jpg"></figure>
                                            <a href="#">If you need a crown or lorem an implant you will pay it gap it</a>
                                        </div>
                                        <div class="time">July 2, 2014</div>
                                    </div>
                                    <!--News Post-->
                                    <div class="news-post">
                                        <div class="icon"></div>
                                        <div class="news-content">
                                            <figure class="image-thumb"><img alt="" src="images/blog/popular-1.jpg"></figure>
                                            <a href="#">If you need a crown or lorem an implant you will pay it gap it</a>
                                        </div>
                                        <div class="time">July 2, 2014</div>
                                    </div>
                                </div>
                            </div>
                            <!--Footer Column-->
                            <div class="col-lg-5 col-sm-6 col-xs-12 column">
                                <div class="footer-widget links-widget">
                                    <div class="heading-panel">
                                        <h3 class="main-title text-left"> Quick Links</h3>
                                    </div>
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="#">Our Team</a></li>
                                        <li><a href="#">Our Services</a></li>
                                        <li><a href="index-7.html">One Page</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Two 4th column End-->
                </div>
            </div>
        </div>
        <!--Footer Bottom-->
        <div class="footer-copyright">
            <div class="container clearfix">
                <!--Copyright-->
                <div class="copyright text-center">Copyright 2017 © Theme Created By <a href="http://themeforest.net/user/scriptsbundle/portfolio" target="_blank">Scriptsbundle</a> All Rights Reserved</div>
            </div>
        </div>
    </footer>
    <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
</div>
<!-- Main Content Area End -->
<!-- Post Ad Sticky -->
<!--<a href="#" class="sticky-post-button hidden-xs">-->
<!--         <span class="sell-icons">-->
<!--         <i class="flaticon-transport-9"></i>-->
<!--         </span>-->
<!--    <h4>SELL</h4>-->
<!--</a>-->
<!-- Back To Top -->
<a href="#0" class="cd-top">Top</a>
<!-- =-=-=-=-=-=-= Quote Modal =-=-=-=-=-=-= -->
<div class="modal fade price-quote" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" id="lineModalLabel">Email for Price</h3>
            </div>
            <div class="modal-body">
                <!-- content goes here -->
                <form>
                    <div class="form-group  col-md-6">
                        <label>Your Name</label>
                        <input type="text" class="form-control" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group  col-md-6">
                        <label>Email Address</label>
                        <input type="email" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="form-group  col-md-12">
                        <label>Contact No</label>
                        <input type="text" class="form-control" placeholder="Contact No">
                    </div>
                    <div class="form-group  col-md-12">
                        <label>Comments</label>
                        <textarea placeholder="What is the price of the Honda Civic 2017 you have in your inventory?" rows="3" class="form-control">What is the price of the 2015 Honda Accord EX-L you have in your inventory?</textarea>
                    </div>
                    <div class="col-md-12"> <img src="images/captcha.gif" alt="" class="img-responsive"> </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 margin-bottom-20 margin-top-20">
                        <button type="submit" class="btn btn-theme btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
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