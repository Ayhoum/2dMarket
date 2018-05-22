<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 13-2-2018
 * Time: 18:44
 */
ob_start();
session_start();
include 'scripts/sessions.php';
require_once '../scripts/db_connection.php' ;
if(!isset($_GET['ad_id'])){
header("Location: personal_ads.php");
}
$address_query = "SELECT  * FROM `ADDRESS` WHERE `USER_id` = {$id}";
$address_result = mysqli_query($mysqli, $address_query);
if (mysqli_num_rows($address_result) > 0) {
    while ($row = mysqli_fetch_assoc($address_result)) {
        $user_street_name = $row['street_name'];
        $user_postcode = $row['postcode'];
        $user_house_number = $row['house_number'];
        $user_region = $row['region'];
        $user_city = $row['city'];

    }
    $location = $user_postcode . ", ". $user_city;
} else {
    $location = "Location unknown ";
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
    <title>2D Market | Edit Ad No. <?php echo $_GET['ad_id']; ?></title>
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
</head>
<body>
<!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
<div id="loader-wrapper">
    <div id="loader"><img class="img-responsive"  src="images/logo_files/design.gif">
        <h4 class="text-center" style="color: #00a9da"> Loading..</h4> </div>
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
                        <a href="personal_ads.php"><img src="<?php echo $profile_pic; ?>" alt=""></a>
                        <div class="profile-detail">
                            <h6><?php echo $full_name;?></h6>
                            <ul class="contact-details">
                                <li>
                                    <i class="fa fa-map-marker"></i> <?php echo $location ;?>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i><?php echo $email; ?>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i> <?php echo $phone; ?>
                                </li>
                            </ul>
                        </div>
                        <ul>
                            <li class=""><a href="profile.php">Profile</a></li>
                            <li  ><a href="personal_ads.php">My Ads <span class="badge"></span></a></li>
                            <li><a href="favourite.html">Favourites Ads <span class="badge">15</span></a></li>
                            <li ><a href="messages/index.php">Messages</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <!-- Row -->
                    <div class="row">
                        <!-- Sorting Filters -->
                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                            <!-- Sorting Filters Breadcrumb -->
                            <!-- Sorting Filters Breadcrumb End -->
                        </div>
                        <!-- Sorting Filters End-->
                        <div class="clearfix"></div>
                        <!-- Ads Archive -->
                        <?php $ad_id = $_GET['ad_id'];
                        $ad_query  = "SELECT * FROM `ADVERTISEMENT` WHERE `id` = '{$ad_id}'";
                        $ad_result = mysqli_query($mysqli, $ad_query);

                        if (mysqli_num_rows($ad_result) > 0 ) {
                            while ($row = mysqli_fetch_assoc($ad_result)) {
                                $ad_id = $row['id'];
                                $title = $row['title'];
                                $date = $row['date'];
                                $price = $row['price'];
                                $description = $row['description'];
                                $condition = $row['condition'];

                                $status = $row['status'];
                                $selling_type = $row['selling_type'];
                                $delivery_type = $row['delivery_type'];
                                $ad_type = $row['ad_type'];

                                $user_id = $row['USER_id'];
                                $category_id = $row['CATEGORY_id'];

// Category_info
                                $cat_query = "SELECT * FROM `CATEGORY` WHERE `id` = '{$category_id}'";
                                $cat_result = mysqli_query($mysqli, $cat_query);
                                if (mysqli_num_rows($cat_result) > 0) {
                                    while ($row = mysqli_fetch_assoc($cat_result)) {
                                        $cat_name = $row['name'];
                                    }
                                }

                                ?>
                                <div class="post-ad-form postdetails">
                                    <div class="heading-panel">
                                        <h3 class="main-title text-left">
                                            Edit advertisement NO. <span style="color: red">( <?php echo $ad_id; ?> )</span>
                                        </h3>
                                    </div>
                                    <ul class="accordion">
                                        <li>
                                            <h5 class="accordion-title"><a href="#">Edit the Status</a></h5>
                                            <div class="accordion-content">
                                                <form method="post" name="update_status" action="scripts/edit_ad_script.php?ad_id=<?php echo $ad_id;?>" class="submit-form">
                                                    <div class="row">
                                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                                <label  class="control-label">Ad's Status : <small style="color: red">( <?php echo $status; ?> )</small></label>
                                                <div class="skin-minimal">
                                                    <select name="status" class="category form-control">
                                                        <option value=""> Select an option</option>
                                                        <option value="SOLD"> SOLD</option>
                                                        <option value="RESERVED"> RESERVED</option>
                                                        <option value="AVAILABLE"> AVAILABLE </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                                    <div class="row">
                                                         <button type="submit" name="status_submit" class="btn btn-theme pull-right">Update Ad's status</button>
                                                    </div>
                                                 </form>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="accordion">
                                        <li>
                                            <h5 class="accordion-title"><a href="#">Edit the information</a></h5>
                                            <div class="accordion-content">
                                                <form method="post" name="update_form" action="scripts/edit_ad_script.php?ad_id=<?php echo $ad_id;?>" class="submit-form">
                                                    <!-- Title  -->
                                                    <div class="row">
                                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                                            <label  class="control-label">AD Title : <small style="color: red">( <?php echo $title; ?> )</small></label>

                                                            <input name="title" class="form-control" placeholder="<?php echo $title; ?>" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <!-- Category  -->
                                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                            <label class="control-label">Category :
                                                                <small style="color: red">( <?php echo $cat_name; ?> )</small>
                                                            </label>
                                                            <select name="category" class="category form-control">
                                                                <option label="Select Option"></option>
                                                                <?php
                                                                // GET ALL CATEGORIES from DB
                                                                $cat_query= "SELECT * FROM `CATEGORY` WHERE `lang` = 'EN' ORDER BY `name` ASC  ";
                                                                $cat_result= mysqli_query($mysqli, $cat_query);
                                                                if (mysqli_num_rows($cat_result) > 0 ) {
                                                                    while ($row = mysqli_fetch_assoc($cat_result)) {
                                                                        $id = $row['id'];
                                                                        $name = $row['name'];
                                                                        // GET ALL RELATED SUB_CATEGORIES from DB
                                                                        $sub_cat_query = "SELECT * FROM `SUB_CATEGORY`  WHERE `CATEGORY_id` = '{$id}'  ";
                                                                        $sub_cat_result = mysqli_query($mysqli, $sub_cat_query);
                                                                        if (mysqli_num_rows($sub_cat_result) > 0) {
                                                                            while ($row = mysqli_fetch_assoc($sub_cat_result)) {
                                                                                $sub_id = $row['id'];
                                                                                $sub_name = $row['name'];
                                                                                ?>
                                                                                <option value="<?php echo $id; ?>"><?php echo $name . " | " . $sub_name; ?></option>
                                                                                <?php
                                                                            }
                                                                        } else {
                                                                            ?>
                                                                            <option value="<?php echo $id; ?>"><?php echo $name ; ?></option>
                                                                            <?php
                                                                        }
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <!-- Price  -->
                                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                            <label class="control-label">Price : <small style="color: red">( <?php echo $price; ?> )</small> </label>

                                                            <input name="price" class="form-control" placeholder="<?php echo $price; ?>" type="text">
                                                        </div>
                                                    </div>
                                                    <!-- end row -->
                                                    <!-- Ad Description  -->
                                                    <div class="row">
                                                        <div class="col-md-12 col-lg-12 col-xs-12  col-sm-12">
                                                            <label class="control-label">Ad Description : </label>
                                                            <textarea name="description" id="editor1" rows="12" class="form-control"
                                                                      placeholder="<?php echo $description; ?>"></textarea>
                                                        </div>
                                                    </div>
                                                    <!-- end row -->
                                                    <!-- Ad Type  -->
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                            <label  class="control-label">Selling Type : <small style="color: red">( <?php echo $selling_type; ?> )</small></label>
                                                            <div class="skin-minimal">
                                                                <select name="selling_type" class="category form-control">
                                                                    <option value=""> Select an option</option>
                                                                    <option value="BID"> Bid</option>
                                                                    <option value="FIXED_PRICE"> Fixed Price</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- Ad Condition  -->
                                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                            <label class="control-label">Condition : <small style="color: red">(<?php echo $condition; ?>)</small></label>
                                                            <div class="skin-minimal">
                                                                <select name="condition" class="category form-control">
                                                                    <option value=""> Select an option</option>
                                                                    <option value="NEW"> New</option>
                                                                    <option value="USED"> Used</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end row -->
                                                    <div class="row">
                                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                                            <label class="control-label">Delivery Type : <small style="color: red">( <?php echo $delivery_type;?> )</small></label>
                                                            <select name="delivery_type" class="category form-control">
                                                                <option value=""> Select an option</option>
                                                                <option value="PICK_UP"> Pick Up</option>
                                                                <option value="DELIVERY"> Post Delivery</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                                            <label class="control-label">Ad Type  <small style="color: red">( <?php echo $ad_type;  ?> )</small></label>
                                                            <select name="ad_type" class="category form-control">
                                                                <option value=""> Select an option</option>
                                                                <option value="NORMAL"> Normal</option>
                                                                <option value="PREMIUM"> Premium</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <button type="submit" name="submit" class="btn btn-theme pull-right">Publish My Ad</button>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <?php
                            }
                        }
                        ?>
                        <!-- Ads Archive End -->
                        <div class="clearfix"></div>
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Middle Content Area  End -->
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

