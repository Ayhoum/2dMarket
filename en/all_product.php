﻿<?php
include '../scripts/db_connection.php';

//ob_start();
//session_start();

?>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="author" content="ScriptsBundle">
    <title>AdForest | Largest Classifieds Portal</title>
    <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
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
<!-- =-=-=-=-=-=-= Color Switcher =-=-=-=-=-=-= -->
<div class="color-switcher" id="choose_color">
    <a href="#." class="picker_close"><i class="fa fa-gear"></i></a>
    <h5>STYLE SWITCHER</h5>
    <div class="theme-colours">
        <p> Choose Colour style </p>
        <ul>
            <li>
                <a href="#." class="defualt" id="defualt"></a>
            </li>
            <li>
                <a href="#." class="green" id="green"></a>
            </li>
            <li>
                <a href="#." class="blue" id="blue"></a>
            </li>
            <li>
                <a href="#." class="red" id="red"></a>
            </li>

            <li>
                <a href="#." class="sea-green" id="sea-green"></a>
            </li>

        </ul>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- =-=-=-=-=-=-= Light Header =-=-=-=-=-=-= -->
<div class="colored-header">
    <!-- Top Bar -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <!-- Header Top Left -->
                <div class="header-top-left col-md-8 col-sm-6 col-xs-12 hidden-xs">
                    <ul class="listnone">
                        <li><a href="about.html"><i class="fa fa-heart-o" aria-hidden="true"></i> About</a></li>
                        <li><a href="faqs.html"><i class="fa fa-folder-open-o" aria-hidden="true"></i> FAQS</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe" aria-hidden="true"></i> Language <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Swedish</a></li>
                                <li><a href="#">Arabic</a></li>
                                <li><a href="#">Russian</a></li>
                                <li><a href="#">chinese</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Header Top Right Social -->
                <div class="header-right col-md-4 col-sm-6 col-xs-12 ">
                    <div class="pull-right">
                        <ul class="listnone">
                            <li><a href="login.html"><i class="fa fa-sign-in"></i> Log in</a></li>
                            <li><a href="register.html"><i class="fa fa-unlock" aria-hidden="true"></i> Register</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-profile-male" aria-hidden="true"></i> Umair <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="profile.html">User Profile</a></li>
                                    <li><a href="profile-2.html">User Profile 2</a></li>
                                    <li><a href="archives.html">Archives</a></li>
                                    <li><a href="active-ads.html">Active Ads</a></li>
                                    <li><a href="favourite.html">Favourite Ads</a></li>
                                    <li><a href="messages.html">Message Panel</a></li>
                                    <li><a href="deactive.html">Account Deactivation</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->
    <!-- Navigation Menu -->
    <nav id="menu-1" class="mega-menu">
        <!-- menu list items container -->
        <section class="menu-list-items">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <!-- menu logo -->
                        <ul class="menu-logo">
                            <li>
                                <a href="index.html"><img src="images/logo.png" alt="logo"> </a>
                            </li>
                        </ul>
                        <!-- menu links -->
                        <ul class="menu-links">
                            <!-- active class -->
                            <li>
                                <a href="javascript:void(0)"> Home <i class="fa fa-angle-down fa-indicator"></i></a>
                                <div class="drop-down grid-col-8">
                                    <!--grid row-->
                                    <div class="grid-row">
                                        <!--grid column 3-->
                                        <div class="grid-col-4">
                                            <ul>
                                                <li><a href="index.html">Home 1 - Default </a></li>
                                                <li><a href="index-transparent.html">Home 2 (Transparent)</a></li>
                                                <li><a href="index-2.html">Home 3 (Variation)</a></li>
                                                <li><a href="index-3.html">Home 4 (Master Slider)</a></li>
                                            </ul>
                                        </div>
                                        <div class="grid-col-4">
                                            <ul>
                                                <li><a href="index-4.html">Home 5 (With Map Listing)</a></li>
                                                <li><a href="index-5.html">Home 6 (Modern Style)</a></li>
                                                <li><a href="index-6.html">Home 7 (Variation)</a></li>
                                                <li><a href="index-7.html">Home 8 (Category Slider)</a></li>
                                            </ul>
                                        </div>
                                        <div class="grid-col-4">
                                            <ul>
                                                <li><a href="index-10.html">Home 11 (Modern Home)</a></li>
                                                <li><a href="index-8.html">Home 9 (Landing Page)</a></li>
                                                <li><a href="index-9.html">Home 10 (Variation)</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Listing <i class="fa fa-angle-down fa-indicator"></i></a>
                                <!-- drop down multilevel  -->
                                <ul class="drop-down-multilevel">
                                    <li>
                                        <a href="javascript:void(0)">Grid Style<i class="fa fa-angle-right fa-indicator"></i> <span class="label label-info">New</span></a>
                                        <!-- drop down second level -->
                                        <ul class="drop-down-multilevel">
                                            <li><a href="listing.html">Listing Grid 1</a></li>
                                            <li><a href="listing-1.html">Listing Grid 2</a></li>
                                            <li><a href="listing-2.html">Listing Grid 3</a></li>
                                            <li><a href="listing-7.html">Listing Featured <span class="label label-info">New</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">List Style<i class="fa fa-angle-right fa-indicator"></i> </a>
                                        <!-- drop down second level -->
                                        <ul class="drop-down-multilevel">
                                            <li><a href="listing-3.html">List View 1</a></li>
                                            <li><a href="listing-4.html">List View 2</a></li>
                                            <li><a href="listing-5.html">List View 3</a></li>
                                            <li><a href="listing-6.html">List View 4</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Single Ad<i class="fa fa-angle-right fa-indicator"></i> <span class="label label-info">New</span></a>
                                        <!-- drop down second level -->
                                        <ul class="drop-down-multilevel">
                                            <li><a href="single-page-listing.html">Single Ad Detail</a></li>
                                            <li><a href="single-page-listing-featured.html">Ad (Featured) <span class="label label-info">New</span></a></li>
                                            <li><a href="single-page-listing-2.html">Single Ad 2</a></li>
                                            <li><a href="single-page-listing-3.html">Single Ad (Adsense)</a></li>
                                            <li><a href="single-page-expired.html">Single Ad (Closed)</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="icons.html">Classified Icons </a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Categories <i class="fa fa-angle-down fa-indicator"></i></a>
                                <!-- drop down multilevel  -->
                                <ul class="drop-down-multilevel">

                                    <li><a href="category-2.html">Modern Variation</a></li>
                                    <li><a href="category-3.html">Minimal Variation</a></li>
                                    <li><a href="category-4.html">Fancy Variation</a></li>

                                    <li><a href="category-6.html">Flat Variation</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Dashboard <i class="fa fa-angle-down fa-indicator"></i></a>
                                <!-- drop down multilevel  -->
                                <ul class="drop-down-multilevel">
                                    <li><a href="profile.html">User Profile</a></li>
                                    <li><a href="profile-2.html">User Profile 2</a></li>
                                    <li><a href="archives.html">Archives</a></li>
                                    <li><a href="active-ads.html">Active Ads</a></li>
                                    <li><a href="pending-ads.html">Pending Ads</a></li>
                                    <li><a href="favourite.html">Favourite Ads</a></li>
                                    <li><a href="messages.html">Message Panel</a></li>
                                    <li><a href="deactive.html">Account Deactivation</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Pages <i class="fa fa-angle-down fa-indicator"></i></a>
                                <!-- drop down full width -->
                                <div class="drop-down grid-col-12">
                                    <!--grid row-->
                                    <div class="grid-row">
                                        <!--grid column 2-->
                                        <div class="grid-col-3">
                                            <h4>Blog</h4>
                                            <ul>
                                                <li><a href="blog.html">Blog With Right Sidebar</a></li>
                                                <li><a href="blog-1.html">Blog With Masonry Style</a></li>
                                                <li><a href="blog-2.html">Blog Without Sidebar</a></li>
                                                <li><a href="blog-details.html">Single Blog </a></li>
                                                <li><a href="blog-details-1.html">Single Blog (Adsense) </a></li>
                                            </ul>
                                        </div>
                                        <!--grid column 2-->
                                        <div class="grid-col-3">
                                            <h4>Miscellaneous</h4>
                                            <ul>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="cooming-soon.html">Comming Soon</a></li>
                                                <li><a href="elements.html">Shortcodes</a></li>
                                                <li><a href="error.html">404 Page</a></li>
                                                <li><a href="faqs.html">FAQS</a></li>
                                            </ul>
                                        </div>
                                        <!--grid column 2-->

                                        <div class="grid-col-3">
                                            <h4>Others</h4>
                                            <ul>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="register.html">Register</a></li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                                <li><a href="site-map.html">Site Map</a></li>
                                                <li><a href="post-ad-1.html">Post Ad</a></li>
                                            </ul>
                                        </div>
                                        <!--grid column 2-->
                                        <div class="grid-col-3">
                                            <h4>Detail Page</h4>
                                            <ul>
                                                <li><a href="post-ad-2.html">Post Ad 2</a></li>
                                                <li><a href="single-page-listing.html">Single Ad Detail</a></li>
                                                <li><a href="single-page-listing-2.html">Single Ad 2</a></li>
                                                <li><a href="single-page-listing-3.html">Single Ad (Adsense)</a></li>
                                                <li><a href="single-page-expired.html">Single Ad (Closed)</a></li>
                                            </ul>
                                        </div>
                                        <!--grid column 2-->
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Drop Down <i class="fa fa-angle-down fa-indicator"></i></a>
                                <!-- drop down multilevel  -->
                                <ul class="drop-down-multilevel">
                                    <li><a href="#">Item one</a></li>
                                    <li>
                                        <a href="javascript:void(0)">Items Right Side <i class="fa fa-angle-right fa-indicator"></i> </a>
                                        <!-- drop down second level -->
                                        <ul class="drop-down-multilevel">
                                            <li>
                                                <a href="javascript:void(0)"> <i class="fa fa-buysellads"></i> Level 2 <i class="fa fa-angle-right fa-indicator"></i></a>
                                                <!-- drop down third level -->
                                                <ul class="drop-down-multilevel">
                                                    <li><a href="#">Level 3</a></li>
                                                    <li><a href="#">Level 3</a></li>
                                                    <li><a href="#">Level 3</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"> <i class="fa fa-dashcube"></i> Level 2 <i class="fa fa-angle-right fa-indicator"></i></a>
                                                <!-- drop down third level -->
                                                <ul class="drop-down-multilevel">
                                                    <li><a href="#">Level 3</a></li>
                                                    <li><a href="#">Level 3</a></li>
                                                    <li><a href="#">Level 3</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"> <i class="fa fa-heartbeat"></i> Level 2 <i class="fa fa-angle-right fa-indicator"></i></a>
                                                <!-- drop down third level -->
                                                <ul class="drop-down-multilevel">
                                                    <li><a href="#">Level 3</a></li>
                                                    <li><a href="#">Level 3</a></li>
                                                    <li><a href="#">Level 3</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"> <i class="fa fa-medium"></i> Level 2 <i class="fa fa-angle-right fa-indicator"></i></a>
                                                <!-- drop down third level -->
                                                <ul class="drop-down-multilevel">
                                                    <li><a href="#">Level 3</a></li>
                                                    <li><a href="#">Level 3</a></li>
                                                    <li><a href="#">Level 3</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"> <i class="fa fa-leanpub"></i> Level 2 <i class="fa fa-angle-right fa-indicator"></i> </a>
                                                <!-- drop down third level -->
                                                <ul class="drop-down-multilevel">
                                                    <li><a href="#">Level 3</a></li>
                                                    <li><a href="#">Level 3</a></li>
                                                    <li><a href="#">Level 3</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Item 2</a></li>
                                    <li>
                                        <a href="javascript:void(0)">Items Left Side <i class="fa fa-angle-left fa-indicator"></i> </a>
                                        <!-- add class left-side -->
                                        <ul class="drop-down-multilevel left-side">
                                            <li>
                                                <a href="#"> <i class="fa fa-forumbee"></i> Level 2</a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fa fa-hotel"></i> Level 2</a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fa fa-automobile"></i> Level 2</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"> <i class="fa fa-heartbeat"></i> Level 2 <i class="fa fa-plus fa-indicator"></i> </a>
                                                <!--drop down second level-->
                                                <ul class="drop-down-multilevel">
                                                    <li><a href="#">Level 3</a></li>
                                                    <li><a href="#">Level 3</a></li>
                                                    <li><a href="#">Level 3</a></li>
                                                    <li><a href="#">Level 3</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fa fa-bookmark"></i> Level 2</a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fa fa-bell"></i> Level 2</a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fa fa-soccer-ball-o"></i> Level 2</a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fa fa-life-ring"></i> Level 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Item 4</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact </a></li>
                        </ul>
                        <ul class="menu-search-bar">
                            <li>
                                <a href="post-ad-1.html" class="btn btn-light"><i class="fa fa-plus" aria-hidden="true"></i> Post Free Ad</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </nav>
</div>
<!-- Navigation Menu End -->
<!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="header-page">
                    <h1>Category Grid - 1</h1>
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
                <li><a href="index.html">Home Page</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="elements.html">Category</a></li>
                <li><a class="active" href="#">Listing</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Small Breadcrumb -->
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
                                <div class="col-md-7 col-xs-12 col-sm-6 no-padding">
                                    <ul class="filterAdType">
                                        <li class="active"><a href="">All ads <small>(1)</small></a> </li>
                                        <li class=""><a href="">Featured <small>(35)</small></a> </li>
                                    </ul>
                                </div>
                                <div class="col-md-5 col-xs-12 col-sm-6 no-padding">
                                    <div class="header-listing">
                                        <h6>Sort by :</h6>
                                        <div class="custom-select-box">
                                            <select name="order" class="custom-select">
                                                <option value="0">Most popular</option>
                                                <option value="1">The latest</option>
                                                <option value="2">The best rating</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sorting Filters End-->
                        <div class="clearfix"></div>

                        <!-- Ads Archive -->
                        <div class="posts-masonry">
                            <!-- Listing Ad Grid -->
                            <?php include  'scripts/all_ads_script.php';?>
                            <!-- Advertizing -->
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <section class="advertising">
                                    <a href="post-ad-1.html">
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
                        </div>
                        <!-- Ads Archive End -->
                        <div class="clearfix"></div>
                        <!-- Pagination -->
                        <div class="text-center margin-top-30">
                            <ul class="pagination ">
                                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
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
                                            <li><a href="#"><i class="flaticon-data"></i>Electronics & Gedget<span>(1029)</span></a></li>
                                            <li><a href="#"><i class="flaticon-transport-6"></i>Cars & Vehicles<span>(1228)</span></a></li>
                                            <li><a href="#"><i class="flaticon-mortgage"></i>Property<span>(178)</span></a></li>
                                            <li><a href="#"><i class="flaticon-technology-8"></i>Mobile & Tablets<span>(2178)</span></a></li>
                                            <li><a href="#"><i class="flaticon-suitcase"></i>Jobs<span>(7178)</span></a></li>
                                            <li><a href="#"><i class="flaticon-search"></i>Home & Garden<span>(7163)</span></a></li>
                                            <li><a href="#"><i class="flaticon-dog"></i>Pets & Animals<span>(8709)</span></a></li>
                                            <li><a href="#"><i class="flaticon-science"></i>Health & Beauty<span>(3129)</span></a></li>
                                            <li><a href="#"><i class="flaticon-game"></i>Hobby, Sport & Kids<span>(2019)</span></a></li>
                                            <li><a href="#"><i class="flaticon-food"></i>Food & Agriculture<span>(323)</span></a></li>
                                            <li><a href="#"><i class="flaticon-blouse"></i>Women & Children Cloths<span>(425)</span></a></li>
                                            <li><a href="#"><i class="flaticon-technology-22"></i>Cameras & Security<span>(3223)</span></a></li>
                                            <li><a href="#"><i class="flaticon-technology-45"></i>Office Product<span>(3283)</span></a></li>
                                            <li><a href="#"><i class="flaticon-wrench"></i>Arts, Crafts & Sewing<span>(3221)</span></a></li>
                                            <li><a href="#"><i class="flaticon-cogwheel-2"></i>Others<span>(3129)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Categories Panel End -->
                            <!-- Brands Panel -->
                            <div class="panel panel-default">
                                <!-- Heading -->
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="more-less glyphicon glyphicon-plus"></i>
                                            Brands
                                        </a>
                                    </h4>
                                </div>
                                <!-- Content -->
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <!-- Search -->
                                        <div class="search-widget">
                                            <input placeholder="search" type="text">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                        <!-- Brands List -->
                                        <div class="skin-minimal">
                                            <ul class="list">
                                                <li>
                                                    <input  type="checkbox" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1">All Brands</label>
                                                </li>
                                                <li>
                                                    <input  type="checkbox" id="minimal-checkbox-2">
                                                    <label for="minimal-checkbox-2">Samsung</label>
                                                </li>
                                                <li>
                                                    <input  type="checkbox" id="minimal-checkbox-3">
                                                    <label for="minimal-checkbox-3">Apple</label>
                                                </li>
                                                <li>
                                                    <input  type="checkbox" id="minimal-checkbox-4">
                                                    <label for="minimal-checkbox-4">Nokia</label>
                                                </li>
                                                <li>
                                                    <input  type="checkbox" id="minimal-checkbox-5">
                                                    <label for="minimal-checkbox-5">Sony</label>
                                                </li>
                                                <li>
                                                    <input  type="checkbox" id="minimal-checkbox-6">
                                                    <label for="minimal-checkbox-6">Blackberry</label>
                                                </li>
                                                <li>
                                                    <input  type="checkbox" id="minimal-checkbox-7">
                                                    <label for="minimal-checkbox-7">HTC</label>
                                                </li>
                                                <li>
                                                    <input  type="checkbox" id="minimal-checkbox-8">
                                                    <label for="minimal-checkbox-8">Motorola</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Brands List End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Brands Panel End -->
                            <!-- Location Panel -->
                            <div class="panel panel-default">
                                <!-- Heading -->
                                <div class="panel-heading" role="tab" id="cities">
                                    <!-- Title -->
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#citiesheading" aria-expanded="true" aria-controls="citiesheading">
                                            <i class="more-less glyphicon glyphicon-plus"></i>
                                            Cities
                                        </a>
                                    </h4>
                                    <!-- Title End -->
                                </div>
                                <!-- Content -->
                                <div id="citiesheading" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="cities">
                                    <div class="panel-body categories">
                                        <ul>
                                            <li><a href="#"><i class="flaticon-signs-1"></i> London </a></li>
                                            <li><a href="#"><i class="flaticon-signs-1"></i> Birmingham </a></li>
                                            <li><a href="#"><i class="flaticon-signs-1"></i> Leeds </a></li>
                                            <li><a href="#"><i class="flaticon-signs-1"></i> Glasgow </a></li>
                                            <li><a href="#"><i class="flaticon-signs-1"></i> Sheffield </a></li>
                                            <li><a href="#"><i class="flaticon-signs-1"></i> Bradford </a></li>
                                            <li><a href="#"><i class="flaticon-signs-1"></i> Liverpool </a></li>
                                        </ul>
                                        <h5><a class="pull-right" data-target=".cat_modal" data-toggle="modal"  href="#">View All</a></h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Location Panel End -->

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
                                <div class="panel-collapse">
                                    <div class="panel-body recent-ads">
                                        <div class="featured-slider-3">
                                            <!-- Featured Ads -->
                                            <div class="item">
                                                <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                                                    <!-- Ad Box -->
                                                    <div class="category-grid-box">
                                                        <!-- Ad Img -->
                                                        <div class="category-grid-img">
                                                            <img class="img-responsive" alt="" src="images/posting/car-3.jpg">
                                                            <!-- Ad Status -->
                                                            <!-- User Review -->
                                                            <div class="user-preview">
                                                                <a href="#"> <img src="images/users/2.jpg" class="avatar avatar-small" alt=""> </a>
                                                            </div>
                                                            <!-- View Details --><a href="" class="view-details">View Details</a>
                                                        </div>
                                                        <!-- Ad Img End -->
                                                        <div class="short-description">
                                                            <!-- Ad Category -->
                                                            <div class="category-title"> <span><a href="#">Cars</a></span> </div>
                                                            <!-- Ad Title -->
                                                            <h3><a title="" href="single-page-listing.html">2017 Honda Civic EX</a></h3>
                                                            <!-- Price -->
                                                            <div class="price">$18,200 <span class="negotiable">(Negotiable)</span></div>
                                                        </div>
                                                        <!-- Addition Info -->
                                                        <div class="ad-info">
                                                            <ul>
                                                                <li><i class="fa fa-map-marker"></i>London</li>
                                                                <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- Ad Box End -->
                                                </div>
                                            </div>
                                            <!-- Featured Ads -->
                                            <div class="item">
                                                <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                                                    <!-- Ad Box -->
                                                    <div class="category-grid-box">
                                                        <!-- Ad Img -->
                                                        <div class="category-grid-img">
                                                            <img class="img-responsive" alt="" src="images/posting/fur-3.jpg">
                                                            <!-- Ad Status -->
                                                            <!-- User Review -->
                                                            <div class="user-preview">
                                                                <a href="#"> <img src="images/users/2.jpg" class="avatar avatar-small" alt=""> </a>
                                                            </div>
                                                            <!-- View Details --><a href="" class="view-details">View Details</a>
                                                        </div>
                                                        <!-- Ad Img End -->
                                                        <div class="short-description">
                                                            <!-- Ad Category -->
                                                            <div class="category-title"> <span><a href="#">Cameras & Accessories</a></span> </div>
                                                            <!-- Ad Title -->
                                                            <h3><a title="" href="single-page-listing.html">Office Furniture For Sale </a></h3>
                                                            <!-- Price -->
                                                            <div class="price">$250 <span class="negotiable">(Negotiable)</span></div>
                                                        </div>
                                                        <!-- Addition Info -->
                                                        <div class="ad-info">
                                                            <ul>
                                                                <li><i class="fa fa-map-marker"></i>London</li>
                                                                <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- Ad Box End -->
                                                </div>
                                            </div>
                                            <!-- Featured Ads -->
                                            <div class="item">
                                                <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                                                    <!-- Ad Box -->
                                                    <div class="category-grid-box">
                                                        <!-- Ad Img -->
                                                        <div class="category-grid-img">
                                                            <img class="img-responsive" alt="" src="images/posting/mob-6.jpg">
                                                            <!-- Ad Status -->
                                                            <!-- User Review -->
                                                            <div class="user-preview">
                                                                <a href="#"> <img src="images/users/2.jpg" class="avatar avatar-small" alt=""> </a>
                                                            </div>
                                                            <!-- View Details --><a href="" class="view-details">View Details</a>
                                                        </div>
                                                        <!-- Ad Img End -->
                                                        <div class="short-description">
                                                            <!-- Ad Category -->
                                                            <div class="category-title"> <span><a href="#">Cameras & Accessories</a></span> </div>
                                                            <!-- Ad Title -->
                                                            <h3><a title="" href="single-page-listing.html">Sony Xperia Z5 </a></h3>
                                                            <!-- Price -->
                                                            <div class="price">$250 <span class="negotiable">(Negotiable)</span></div>
                                                        </div>
                                                        <!-- Addition Info -->
                                                        <div class="ad-info">
                                                            <ul>
                                                                <li><i class="fa fa-map-marker"></i>London</li>
                                                                <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- Ad Box End -->
                                                </div>
                                            </div>
                                            <!-- Featured Ads -->
                                            <div class="item">
                                                <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                                                    <!-- Ad Box -->
                                                    <div class="category-grid-box">
                                                        <!-- Ad Img -->
                                                        <div class="category-grid-img">
                                                            <img class="img-responsive" alt="" src="images/posting/cam-2.jpg">
                                                            <!-- Ad Status -->
                                                            <!-- User Review -->
                                                            <div class="user-preview">
                                                                <a href="#"> <img src="images/users/2.jpg" class="avatar avatar-small" alt=""> </a>
                                                            </div>
                                                            <!-- View Details --><a href="" class="view-details">View Details</a>
                                                        </div>
                                                        <!-- Ad Img End -->
                                                        <div class="short-description">
                                                            <!-- Ad Category -->
                                                            <div class="category-title"> <span><a href="#">Cameras & Accessories</a></span> </div>
                                                            <!-- Ad Title -->
                                                            <h3><a title="" href="single-page-listing.html">Sony Xperia Z5 </a></h3>
                                                            <!-- Price -->
                                                            <div class="price">$250 <span class="negotiable">(Negotiable)</span></div>
                                                        </div>
                                                        <!-- Addition Info -->
                                                        <div class="ad-info">
                                                            <ul>
                                                                <li><i class="fa fa-map-marker"></i>London</li>
                                                                <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- Ad Box End -->
                                                </div>
                                            </div>
                                            <!-- Featured Ads -->
                                            <div class="item">
                                                <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                                                    <!-- Ad Box -->
                                                    <div class="category-grid-box">
                                                        <!-- Ad Img -->
                                                        <div class="category-grid-img">
                                                            <img class="img-responsive" alt="" src="images/posting/cam-2.jpg">
                                                            <!-- Ad Status -->
                                                            <!-- User Review -->
                                                            <div class="user-preview">
                                                                <a href="#"> <img src="images/users/2.jpg" class="avatar avatar-small" alt=""> </a>
                                                            </div>
                                                            <!-- View Details --><a href="" class="view-details">View Details</a>
                                                        </div>
                                                        <!-- Ad Img End -->
                                                        <div class="short-description">
                                                            <!-- Ad Category -->
                                                            <div class="category-title"> <span><a href="#">Cameras & Accessories</a></span> </div>
                                                            <!-- Ad Title -->
                                                            <h3><a title="" href="single-page-listing.html">Sony Xperia Z5 </a></h3>
                                                            <!-- Price -->
                                                            <div class="price">$250 <span class="negotiable">(Negotiable)</span></div>
                                                        </div>
                                                        <!-- Addition Info -->
                                                        <div class="ad-info">
                                                            <ul>
                                                                <li><i class="fa fa-map-marker"></i>London</li>
                                                                <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- Ad Box End -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
<a href="#" class="sticky-post-button hidden-xs">
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
