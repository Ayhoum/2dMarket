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
    <script src="dist/geodatasource-cr.min.js"></script>
    <link rel="stylesheet" href="dist/geodatasource-countryflag.css">


</head>
<body>
<!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
<div id="loader-wrapper">
    <div id="loader"><img class="img-responsive"  src="images/logo_files/design.gif">
        <h4 class="text-center" style="color: #00a9da"> Loading..</h4> </div>
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
                            <li><a href="personal_bids.php">My Bids <span class="badge"></span></a></li>
                            <li ><a href="../messages/index.php?l=en">Messages</a></li>
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
    <?php include "footer.php";?>
    <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
</div>
<!-- Main Content Area End -->
<!-- Post Ad Sticky -->
<!--<a href="--><?php //if (isset($_SESSION['id'])){echo "new_advertisement.php";  } else { echo "login.php"; }?><!--" class="sticky-post-button hidden-xs">-->
<!--         <span class="sell-icons">-->
<!--         <i class="flaticon-transport-9"></i>-->
<!--         </span>-->
<!--    <h4>SELL</h4>-->
<!--</a>-->
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
<script src="js/jquery.flexslider-min.js"></script>

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


