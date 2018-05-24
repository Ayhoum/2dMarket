<?php
include '../scripts/db_connection.php';
session_start();
ob_start();
?>

<?php
if (isset($_POST['Log_in'])){
    $email = $_POST['email'];
    $pass  = $_POST['password'];

    $query = "SELECT * FROM USER WHERE email='$email'";
    $results = mysqli_query($mysqli, $query);
    if (mysqli_num_rows($results) == 1) {
        while ($row = mysqli_fetch_assoc($results)) {
            $hash = $row['password'];
            if ((password_verify($pass, $hash))){
                $username                   = $row['username'];
                $_SESSION['username']       = $username;
                $email                      = $row['email'];
                $_SESSION['email']          = $email;
                $id                         = $row['id'];
                $_SESSION['id']             = $id;
                $profile_pic                = $row['profile_picture'];
                $_SESSION['profile_pic']    = $profile_pic;
                $phone                      = $row['phone_number'];
                $_SESSION['phone']          = $phone;
                $fName                      = $row['first_name'];
                $lName                      = $row['last_name'];
                $full_name                  = $fName . " " . $lName;
                $_SESSION['full_name']      = $full_name;
                echo "done";


                $update_status_query = "UPDATE `USER`  SET `online_status` = 'ONLINE' WHERE `id` = '{$id}'";
                $update_status_result = mysqli_query($mysqli,$update_status_query);

            }else{
                echo "error_password";
            }

        }
    } else {
        echo "error_username";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-5850194650079393",
            enable_page_level_ads: false
        });
    </script>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!--[if IE]-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--[endif]-->
    <meta name="description" content="">
    <meta name="author" content="ScriptsBundle">

    <title>2D Market | Ad Page</title>
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
    <!--[if lt IE 9]-->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!--[endif]-->
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
    <?php include 'nav_bar_en.php';?>
</div>
<!-- Navigation Menu End -->
<!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="header-page">
                    <h1>Ad Number : <?php echo $_GET['ad_id'];?></h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
<div class="main-content-area clearfix">
    <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
    <section class="section-padding error-page pattern-bgs gray ">
        <!-- Main Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- =-=-=-=-=-=-= Advertizing Sidebar =-=-=-=-=-=-= -->
                <div class="col-md-2 col-sm-2  hidden-xs hidden-sm  leftbar-stick">
                    <div class="theiaStickySidebar">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- Ad Page Ad -->
                        <ins class="adsbygoogle"
                             style="display:inline-block;width:160px;height:600px"
                             data-ad-client="ca-pub-5850194650079393"
                             data-ad-slot="4993104984"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </div>

                <!-- Middle Content Area -->
                <div class="col-md-8 col-xs-12 col-sm-12">
                    <!-- Single Ad -->
                    <?php include 'scripts/ad_page_script.php'?>
                </div>
                <!-- Middle Content Area  End -->

                <!-- =-=-=-=-=-=-= Advertizing Sidebar =-=-=-=-=-=-= -->
                <div class="col-md-2 col-sm-2 hidden-xs hidden-sm rightbar-stick">
                    <div class="theiaStickySidebar">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- Ad Page Ad -->
                        <ins class="adsbygoogle"
                             style="display:inline-block;width:160px;height:600px"
                             data-ad-client="ca-pub-5850194650079393"
                             data-ad-slot="4993104984"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </div>
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
                <h3 class="modal-title" id="lineModalLabel">Send <?php echo $user_username;?> a message </h3>
            </div>
            <div class="modal-body">
                <div class="recent-ads">
                    <div class="recent-ads-list">
                        <div class="recent-ads-container">
                            <div class="recent-ads-list-image">
                                <a href="#" class="recent-ads-list-image-inner">
                                    <img src="<?php// echo  $picture_url . $picture_name;;?>" alt="">
                                </a><!-- /.recent-ads-list-image-inner -->
                            </div>
                            <!-- /.recent-ads-list-image -->
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="#"><?php echo $title;?></a>
                                </h3>
                                <ul class="recent-ads-list-location">
                                    <li><a href="#"><?php echo $user_region . " | " . $user_country; ?></a>,</li>
                                </ul>
                                <div class="recent-ads-list-price">
                                    € <?php echo $price; ?>
                                </div>
                                <!-- /.recent-ads-list-price -->
                            </div>
                            <!-- /.recent-ads-list-content -->
                        </div>
                        <!-- /.recent-ads-container -->
                    </div>
                </div>
                <!-- content goes here -->
                <?php if (isset($_SESSION['username'])){ ?>
                <form action="scripts/send_message.php?user_id=<?php echo $user_userid;?>&ad_id=<?php echo $ad_id; ?>" method="post">
                    <div class="form-group  col-md-12  col-sm-12">
                        <label>Your message</label>
                        <textarea name="message" placeholder="What is the price of the Honda Civic 2017 you have in your inventory?" rows="3" class="form-control"></textarea>
                    </div>
<!--                    <div class="col-md-12  col-sm-12"> <img src="images/captcha.gif" alt="" class="img-responsive"> </div>-->
                    <div class="clearfix"></div>
                    <div class="col-md-12  col-sm-12 margin-bottom-20 margin-top-20">
                        <button type="submit" class="btn btn-theme btn-block" name="submit">Send</button>
                    </div>
                </form>
                <?php }else {?>
                <div role="alert" class="alert alert-warning alert-dismissible">
                    <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
                    <strong>Warning</strong> - To be able to chat with <?php echo $user_username;?> <b>please login first</b>
                </div>
                <form action="#" name="login" id="login_form" method="post" data-toggle="validator">
                <div class="form-group">
                    <label>Email</label>
                    <input id="email_field" placeholder="Your Email" class="form-control" name="email" type="email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input id="password_field" placeholder="Your Password" class="form-control" name="password" type="password">
                </div>

                <button type="submit" class="btn btn-theme btn-lg btn-block" name="Log_in">Log In</button>

                </form>
            </div>
        </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>

<!-- =-=-=-=-=-=-= Share Modal =-=-=-=-=-=-= -->
<div class="modal fade share-ad" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title">Send a message</h3>
            </div>
            <div class="modal-body">
                <div class="recent-ads">
                    <div class="recent-ads-list">
                        <div class="recent-ads-container">
                            <div class="recent-ads-list-image">
                                <a href="#" class="recent-ads-list-image-inner">
                                    <img src="<?php// echo  $picture_url . $picture_name;;?>" alt="">
                                </a><!-- /.recent-ads-list-image-inner -->
                            </div>
                            <!-- /.recent-ads-list-image -->
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="#"><?php echo $title;?></a>
                                </h3>
                                <ul class="recent-ads-list-location">
                                    <li><a href="#"><?php echo $user_region . " | " . $user_country; ?></a>,</li>
                                </ul>
                                <div class="recent-ads-list-price">
                                    € <?php echo $price; ?>
                                </div>
                                <!-- /.recent-ads-list-price -->
                            </div>
                            <!-- /.recent-ads-list-content -->
                        </div>
                        <!-- /.recent-ads-container -->
                    </div>
                </div>
                <!-- content goes here -->
                <?php if (isset($_SESSION['username'])){ ?>
                <form action="scripts/send_message.php?user_id=<?php echo $user_userid;?>&ad_id=<?php echo $ad_id; ?>" method="post">
                    <div class="form-group  col-md-12  col-sm-12">
                        <label>Your message</label>
                        <textarea name="message" placeholder="What is the price of the Honda Civic 2017 you have in your inventory?" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12  col-sm-12 margin-bottom-20 margin-top-20">
                        <button type="submit" class="btn btn-theme btn-message" name="submit">Send</button>
                    </div>
                </form>
                <?php }else {?>
                <div role="alert" class="alert alert-warning alert-dismissible">
                    <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
                    <strong>Warning</strong> - To be able to chat with <?php echo $user_username;?> <b>please login first</b>
                </div>
                <form action="#" name="login" id="login_form" method="post" data-toggle="validator">
                    <div class="form-group">
                        <label>Email</label>
                        <input id="email_field" placeholder="Your Email" class="form-control" name="email" type="email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input id="password_field" placeholder="Your Password" class="form-control" name="password" type="password">
                    </div>

                    <button type="submit" class="btn btn-theme btn-lg btn-block" name="Log_in">Log In</button>

                </form>
            </div>

        </div>

        <?php }?>
            </div>
        </div>
    </div>
</div>

<!-- =-=-=-=-=-=-= Report Ad Modal =-=-=-=-=-=-= -->
<div class="modal fade report-quote" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title">Why are you reporting this ad?</h3>
            </div>
            <div class="modal-body">
                <!-- content goes here -->
                <form>
                    <div class="skin-minimal">
                        <div class="form-group col-md-6 col-sm-6">
                            <ul class="list">
                                <li >
                                    <input type="radio" id="spam" name="minimal-radio">
                                    <label for="spam">Spam</label>
                                </li>
                                <li>
                                    <input  type="radio" id="duplicated" name="minimal-radio" >
                                    <label for="duplicated">Duplicated</label>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group  col-md-6 col-sm-6">
                            <ul class="list">
                                <li >
                                    <input  type="radio" id="offensive" name="minimal-radio">
                                    <label for="offensive">Offensive</label>
                                </li>
                                <li>
                                    <input  type="radio" id="expired" name="minimal-radio" checked>
                                    <label for="expired">Expired</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group  col-md-12 col-sm-12">
                        <label>Comments</label>
                        <textarea placeholder="This ad not belong to me" rows="3" class="form-control">This ad not belong to me</textarea>
                    </div>
                    <div class="col-md-12 col-sm-12"> <img src="images/captcha.gif" alt="" class="img-responsive"> </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 col-sm-12 margin-bottom-20 margin-top-20">
                        <button type="submit" class="btn btn-theme btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- =-=-=-=-=-=-= Ad Detail Modal =-=-=-=-=-=-= -->
<div class="sticky-ad-detail">
    <div class="container">
        <div class="col-md-7 col-sm-12 col-xs-12 no-padding">
            <div class="">
                <h3><?php echo $title;?></h3>
                <div class="short-history">
                    <ul>
                        <li>Published on: <b><?php echo $date;?></b></li>
                        <li>Location: <b><?php echo $user_region. " | ". $user_country; ?></b></li>
                        <li>Category: <b><a href="#"><?php echo $cat_name;?></a></b></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-5  col-sm-12 col-xs-12 no-padding">
            <div class="pull-left row">
<!--                <div class="col-md-6 col-sm-6 col-xs-12 ">-->
<!--                    <a href="javascript:void(0)" class="btn btn-block pull-left btn-phone number " data-last="111111X"><i class="fa fa-phone"></i> --><?php //echo $user_phone;?><!--</a>-->
<!--                </div>-->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <a data-toggle="modal" data-target=".price-quote"  href="javascript:void(0)" class="btn btn-block pull-left btn-message"><i class="icon-envelope"></i> Message Seller</a>
                </div>
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
<!-- For This Page Only -->
<script type="text/javascript">
    (function($) {
        "use strict";

        /* ======= Show Number ======= */
        $('.number').click(function() {
            $(this).find('span').text( $(this).data('last') );
        });

        /* ======= Ad Detail On Scroll ======= */
        //caches a jQuery object containing the header element
        var header = $(".sticky-ad-detail");
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 500) {
                header.addClass("show-sticky-ad-detail");
            } else {
                header.removeClass("show-sticky-ad-detail");
            }
        });
    })(jQuery);

</script>

</body>
</html>

