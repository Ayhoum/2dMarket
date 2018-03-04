<?php
/**
 * Created by PhpStorm.
 * User: sulim
 * Date: 13-2-2018
 * Time: 16:31
 */

session_start();
ob_start();
require_once "../scripts/db_connection.php";
include 'scripts/sessions.php';
include 'scripts/user_profile.php';

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
    <title>2D Market | <?php echo $user_full_name; ?></title>
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
    <script src="dist/geodatasource-cr.min.js"></script>
    <link rel="stylesheet" href="dist/geodatasource-countryflag.css">


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
    <?php include "topbar-en.php";?>
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
                                <a href="index.php"><img src="images/logo.png" alt="logo"> </a>
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
<!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
<div class="main-content-area clearfix">
    <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
    <section class="section-padding gray">
        <!-- Main Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Middle Content Area -->
                <div class="col-md-4 col-sm-12 col-xs-12 leftbar-stick blog-sidebar">
                    <!-- Sidebar Widgets -->
                    <div class="user-profile">
                        <a href="profile.php"><img id="img_preview" class="center-block" style="margin-top: 20px;border-radius: 50%;width: 128px;height: 128px; " src="<?php echo $user_pic; ?>" alt=""></a>
                        <div class="profile-detail">
                            <h6><?php echo $user_full_name ;?></h6>
                            <ul class="contact-details">
                                <li>
                                    <i class="fa fa-map-marker"></i> <?php echo $location ;?>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i><?php echo $user_email; ?>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i> <?php echo $user_phone; ?>
                                </li>
                            </ul>
                        </div>
                        <ul>
                            <li class="active"><a href="profile.php">Profile</a></li>
                            <li  ><a href="personal_ads.php">My Ads <span class="badge"><?php echo $ad_count; ?> </span></a></li>
                            <li><a href="favourite_ads.php">Favourites Ads <span class="badge"><?php echo $fav_count; ?></span></a></li>
                            <li ><a href="messages.php">Messages</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <!-- Row -->
                    <div class="profile-section margin-bottom-20">
                        <div class="profile-tabs">
                            <ul class="nav nav-justified nav-tabs">
                                <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                                <li><a href="#edit" data-toggle="tab">Edit Profile</a></li>

                            </ul>
                            <div class="tab-content">
                                <div class="profile-edit tab-pane fade in active" id="profile">
                                    <h2 class="heading-md">Your Personal info.</h2>
                                    <dl class="dl-horizontal">
                                        <dt><strong>Your name </strong></dt>
                                        <dd>
                                            <?php echo  $user_full_name ;?>
                                        </dd>
                                        <dt><strong>Email Address </strong></dt>
                                        <dd>
                                            <?php echo  $user_email ;?>
                                        </dd>
                                        <dt><strong>Phone Number </strong></dt>
                                        <dd>
                                            <?php echo $user_phone ;?>
                                        </dd>
                                        <dt><strong>You are a </strong></dt>
                                        <dd>
                                            <?php echo $user_username ;?>
                                        </dd>
                                        <dt><strong>Address </strong></dt>
                                        <dd>
                                            <?php echo $user_street_name." ".$user_house_number."<br> ".$user_postcode . " ". $user_city." / ".$user_country ;?>
                                        </dd>
                                    </dl>
                                </div>
                                <div class="profile-edit tab-pane fade" id="edit">
                                    <h2 class="heading-md">Change your account information.</h2>
                                    <p>Manage Your Account</p>
                                    <div class="clearfix"></div>
                                    <form method="post" action="scripts/edit_profile_info.php" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label>First Name </label>
                                                <input type="text" name="first_name" placeholder="<?php echo $user_first_name;?>" class="form-control margin-bottom-20">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label>Last Name </label>
                                                <input type="text" name="last_name" placeholder="<?php echo $user_last_name;?>" class="form-control margin-bottom-20">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label>Your Photo </label>
                                                <input type="file" id="upload_img" name="profile_img" class="form-control margin-bottom-20">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label>Phone Number </label>
                                                <input type="text" name="phone_number" placeholder="<?php echo $user_phone;?>" class="form-control margin-bottom-20">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12" style="clear: left;">
                                                <label>Country </label>
                                                <select name="country" class="gds-cr gds-countryflag margin-bottom-20" country-data-region-id="gds-cr-four"></select>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label>Region </label>
                                                <select name="region" class="form-control margin-bottom-20" id="gds-cr-four"></select>
                                            </div>

                                            <div class="col-md-6 col-sm-6 col-xs-12 ">
                                                <label>City </label>
                                                <input type="text" name="city" placeholder="<?php echo $user_city;?>" class="form-control margin-bottom-20">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label>Postcode</label>
                                                <input type="text" name="postcode" placeholder="<?php echo $user_postcode;?>" class="form-control margin-bottom-20">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label>Street Name</label>
                                                <input type="text" name="street_name" placeholder="<?php echo $user_street_name;?>" class="form-control margin-bottom-20">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label>House Number</label>
                                                <input type="text" name="house_number" placeholder="<?php echo $user_house_number;?>" class="form-control margin-bottom-20">
                                            </div>
                                            <div class="row ">
                                            <div class="col-md-12 col-sm-12 col-xs-12" >
                                                <button style="width: 100%" type="submit" class="btn btn-theme btn-sm" name="update">Update My Info</button>
                                            </div>
                                        </div>
                                    </form>
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
<!-- Post Ad Sticky -->
<a href="#" class="sticky-post-button hidden-xs">
         <span class="sell-icons">
         <i class="flaticon-transport-9"></i>
         </span>
    <h4>SELL</h4>
</a>
<!-- Back To Top -->
<a href="#0" class="cd-top">Top</a>
<!-- Back To Top -->





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
<script>
    $('#upload_img').change(function(){
        readImgUrlAndPreview(this);
        function readImgUrlAndPreview(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#img_preview').attr('src', e.target.result);
                }
            };
            reader.readAsDataURL(input.files[0]);
        }
    });
</script>
</body>
</html>


