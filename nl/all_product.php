﻿<?php
include '../scripts/db_connection.php';

ob_start();
session_start();

?>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="author" content="ScriptsBundle">
    <title>2D Market | Alle Advertenties</title>
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
</head>
<body>
<!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- =-=-=-=-=-=-= Light Header =-=-=-=-=-=-= -->
<div class="colored-header">
    <!-- Top Bar -->
    <?php include 'topbar-nl.php';?>
    <!-- Top Bar End -->
    <!-- Navigation Menu -->
    <?php include 'nav_bar_nl.php';?>
</div>
<!-- Navigation Menu End -->
<!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="header-page">
                    <h1>All Advertenties </h1>
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
                <div class="col-md-8 col-md-push-4 col-lg-8 col-sx-12">
                    <!-- Row -->
                    <div class="row">
                        <!-- Sorting Filters -->
                        <!-- Sorting Filters -->
                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                            <div class="clearfix"></div>
                            <div class="listingTopFilterBar">
                                <div class="col-md-5 col-xs-12 col-sm-6 no-padding">
                                    <div class="header-listing">
                                        <h6>Sorteer op:</h6>
                                        <div class="custom-select-box">
                                            <select name="order" class="custom-select">
                                                <option value="1">The latest</option>
                                                <option value="2">Prijs (laag naar hoog) </option>
                                                <option value="3">Price (hoog naar laag) </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sorting Filters End-->
                        <div class="clearfix"></div>
                        <?php include  'scripts/all_ads_script.php';?>
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
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body categories">
                                        <ul>
                                            <?php
                                            $cat_query  = "SELECT * FROM `CATEGORY` WHERE `lang` = 'NL'";
                                            $cat_result = mysqli_query($mysqli, $cat_query);
                                            while ($row = mysqli_fetch_assoc($cat_result)) {
                                                $cat_id     = $row['id'];
                                                $cat_name   = $row['name'];
                                                $icon_name  = $row['icon_name'];

                                                $count_query = "SELECT COUNT(*) AS 'CAT_count' FROM `ADVERTISEMENT` WHERE CATEGORY_id = '{$cat_id}' ";
                                                $count_result = mysqli_query($mysqli,$count_query);
                                                while ($row = mysqli_fetch_assoc($count_result)){
                                                    $cat_count = $row['CAT_count'];
                                                }

                                                ?>

                                                <li><a href="ad_per_cat.php?cat_id=<?php echo $cat_id; ?>&dis=all&price=all&order=latest"><i class="<?php echo $icon_name; ?>"></i><?php echo $cat_name; ?><span style="color: #985f0d">(<?php echo $cat_count;?>)</span></a></li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Categories Panel End -->
                            <!-- Location Panel -->
<!--                            <div class="panel panel-default">-->
<!--                                <!-- Heading -->
<!--                                <div class="panel-heading" role="tab" id="cities">-->
<!--                                    <!-- Title -->
<!--                                    <h4 class="panel-title">-->
<!--                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#citiesheading" aria-expanded="true" aria-controls="citiesheading">-->
<!--                                            <i class="more-less glyphicon glyphicon-plus"></i>-->
<!--                                            Afstand van uw-->
<!--                                        </a>-->
<!--                                    </h4>-->
<!--                                    <!-- Title End -->
<!--                                </div>-->
<!--                                <!-- Content -->
<!--                                <div id="citiesheading" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="cities">-->
<!--                                    <div class="panel-body categories">-->
<!--                                        <ul>-->
<!--                                            <li><a href="#"><i class="flaticon-signs-1"></i> 10 KM </a></li>-->
<!--                                            <li><a href="#"><i class="flaticon-signs-1"></i> 20 KM </a></li>-->
<!--                                            <li><a href="#"><i class="flaticon-signs-1"></i> 30 KM </a></li>-->
<!--                                            <li><a href="#"><i class="flaticon-signs-1"></i> 40 KM </a></li>-->
<!--                                            <li><a href="#"><i class="flaticon-signs-1"></i> 50 KM </a></li>-->
<!--                                            <li><a href="#"><i class="flaticon-signs-1"></i> 60 KM </a></li>-->
<!--                                            <li><a href="#"><i class="flaticon-signs-1"></i> 70 KM </a></li>-->
<!--                                            <li><a href="#"><i class="flaticon-signs-1"></i> 80 KM </a></li>-->
<!--                                            <li><a href="#"><i class="flaticon-signs-1"></i> 90 KM </a></li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <!-- Location Panel End -->
<!--                            <!-- Pricing Panel -->
<!--                            <div class="panel panel-default">-->
<!--                                <!-- Heading -->
<!--                                <div class="panel-heading" role="tab" id="headingfour">-->
<!--                                    <h4 class="panel-title">-->
<!--                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">-->
<!--                                            <i class="more-less glyphicon glyphicon-plus"></i>-->
<!--                                            Prijs-->
<!--                                        </a>-->
<!--                                    </h4>-->
<!--                                </div>-->
<!--                                <!-- Content -->
<!--                                <div id="collapsefour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingfour">-->
<!--                                    <div class="panel-body">-->
<!--                                        <span class="price-slider-value">Prijs (€) <span id="price-min"></span> - <span id="price-max"></span></span>-->
<!--                                        <div id="price-slider"></div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <!-- Pricing Panel End -->
<!--                            <!-- Featured Ads Panel -->
<!--                            <div class="panel panel-default">-->
<!--                                <!-- Heading -->
<!--                                <div class="panel-heading" >-->
<!--                                    <h4 class="panel-title">-->
<!--                                        <a>-->
<!--                                            Featured Advertenties-->
<!--                                        </a>-->
<!--                                    </h4>-->
<!--                                </div>-->
<!--                                <!-- Content -->
<!--                                --><?php //include 'scripts/featured_ads.php';?>
<!--                            </div>-->
                            <!-- Featured Ads Panel End -->
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
    <?php include 'footer.php';?>
    <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
</div>
<!-- Main Content Area End -->
<!-- Post Ad Sticky -->
<a href="<?php if (isset($_SESSION['id'])){echo "new_advertisement.php";  } else { echo "login.php"; }?>" class="sticky-post-button hidden-xs">
         <span class="sell-icons">
         <i class="flaticon-transport-9"></i>
         </span>
    <h4>SELL</h4>
</a>
<!-- Back To Top -->
<a href="#0" class="cd-top">Top</a>

<div class="search-modal modal fade cat_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title text-center"> <i class="icon-gears"></i> Select Your Location </h3>
            </div>
            <div class="modal-body">
                <!-- content goes here -->
                <div class="search-block">
                    <div class="row">
                        <div class="col-md-12 text-box">
                            <input class="form-control" placeholder="Type your city here" type="text">
                            <i class="icon-search icon-magnifying-glass"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12 popular-search">
                            <label>Popular Locations</label>
                            <ul class="city-select-city">
                                <li class="col-sm-4 col-xs-6"><a href="#"> London </a></li>
                                <li class="col-sm-4 col-xs-6"><a href="#"> Birmingham </a></li>
                                <li class="col-sm-4 col-xs-6"><a href="#"> Leeds </a></li>
                                <li class="col-sm-4 col-xs-6"><a href="#"> Glasgow </a></li>
                                <li class="col-sm-4 col-xs-6"><a href="#"> Sheffield </a></li>
                                <li class="col-sm-4 col-xs-6"><a href="#"> Bradford </a></li>
                                <li class="col-sm-4 col-xs-6"><a href="#"> Liverpool </a></li>
                                <li class="col-sm-4 col-xs-6"><a href="#"> Edinburgh </a></li>
                                <li class="col-sm-4 col-xs-6"><a href="#"> Manchester </a></li>
                                <li class="col-sm-4 col-xs-6"><a href="#"> Bristol </a></li>
                                <li class="col-sm-4 col-xs-6"><a href="#"> Kirklees </a></li>
                                <li class="col-sm-4 col-xs-6"><a href="#"> Fife </a></li>
                                <li class="col-sm-4 col-xs-6"><a href="#"> Wirral </a></li>
                                <li class="col-sm-4 col-xs-6"><a href="#"> North Lanarkshire </a></li>
                                <li class="col-sm-4 col-xs-6"><a href="#"> Wakefield </a></li>
                                <li class="col-sm-4 col-xs-6"><a href="#"> Cardiff </a></li>
                                <li class="col-sm-4 col-xs-6"><a href="#"> Dudley </a></li>
                                <li class="col-sm-4 col-xs-6"><a href="#"> Wigan </a></li>
                                <li class="col-sm-4 col-xs-6"><a href="#"> East Riding </a></li>
                                <li class="col-sm-4 col-xs-6"><a href="#"> South Lanarkshire </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-lg btn-block">View All Cities</button>
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
