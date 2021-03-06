﻿<?php
include '../scripts/db_connection.php';
session_start();
ob_start();
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
    <title>2D Market | منتج رقـم : <?php echo $_GET['ad_id'];?></title>
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
    <!-- =-=-=-=-=-=-= Bootstrap Rtl Style =-=-=-=-=-=-= -->
    <link href="css/bootstrap-rtl.css" rel="stylesheet">
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
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <!-- JavaScripts -->
    <script src="js/modernizr.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <style>

        /* external css: flickity.css */

        * { box-sizing: border-box; }

        body { font-family: sans-serif; }

        .carousel {
            background: #EEE;
        }

        .carousel img {
            display: block;
            height: 200px;
        }

        @media screen and ( min-width: 768px ) {
            .carousel img {
                height: 400px;
            }
        }
    </style>
    <!--[endif]-->
</head>
<body class="rtl">
<!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
<div id="loader-wrapper">
    <div id="loader"><img class="img-responsive"  src="images/logo_files/design.gif">
        <h4 class="text-center" style="color: #00a9da">جاري التحميل.. </h4> </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- =-=-=-=-=-=-= Light Header =-=-=-=-=-=-= -->
<div class="colored-header">
    <!-- Top Bar -->
    <?php include 'topbar-ar.php';?>
    <!-- Top Bar End -->
    <!-- Navigation Menu -->
    <?php include 'nav_bar_ar.php';?>
</div>
<!-- Navigation Menu End -->
<!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="header-page">
                    <h1 style="direction: rtl">اعـلان رقــم : <?php echo $_GET['ad_id']; ?></h1>
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
    <!-- =-=-=-=-=-=-= Ads أرشيف End =-=-=-=-=-=-= -->
    <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
   <?php include 'footer.php'; ?>
    <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
</div>
<!-- Main Content Area End -->
<!-- Post Ad Sticky -->
<!--<a href="new_advertisement.php" class="sticky-post-button hidden-xs">-->
<!--         <span class="sell-icons">-->
<!--         <i class="flaticon-transport-9"></i>-->
<!--         </span>-->
<!--    <h4>يبيع</h4>-->
<!--</a>-->
<!-- Back To Top -->
<a href="#0" class="cd-top">Top</a>

<!-- =-=-=-=-=-=-= Quote Modal =-=-=-=-=-=-= -->
<div class="modal fade price-quote" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">اغـلاق</span></button>
                <h3 class="modal-title" id="lineModalLabel">ارسـل رسـالة لـ :  <?php echo $user_username;?> </h3>
            </div>
            <div class="modal-body">
                <div class="recent-ads">
                    <div class="recent-ads-list">
                        <div class="recent-ads-container">
                            <div class="recent-ads-list-image">
                                <a href="#" class="recent-ads-list-image-inner">
                                    <img src="<?php echo  $picture_url . $picture_name;?>" alt="">
                                </a><!-- /.recent-ads-list-image-inner -->
                            </div>
                            <!-- /.recent-ads-list-image -->
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="#"><?php echo $title;?></a>
                                </h3>
                                <ul class="recent-ads-list-location">
                                    <li><a href="#"><?php echo $user_region . " | " . $user_country; ?></a></li>
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
                        <label>الرسـالة:</label>
                        <textarea name="message" placeholder="هل يمكنـك ارسـال المزيد من الصـور للمنتج؟" rows="3" class="form-control"></textarea>
                    </div>
<!--                    <div class="col-md-12  col-sm-12"> <img src="images/captcha.gif" alt="" class="img-responsive"> </div>-->
                    <div class="clearfix"></div>
                    <div class="col-md-12  col-sm-12 margin-bottom-20 margin-top-20">
                        <button type="submit" class="btn btn-theme btn-block" name="submit">ارسـال</button>
                    </div>
                </form>
                <?php }else {?>
                <div role="alert" class="alert alert-warning alert-dismissible" style="direction: rtl">
                    <button aria-label="Close" data-dismiss="alert" class="close" type="button"></button>
                    <strong>تحذير</strong> - لكي تتمكن من التواصل مع <?php echo $user_username;?> <b>الرجـاء قم بتسجيل الدخول اولاً</b>
                </div>
                <form action="#" name="login" id="login_form" method="post" data-toggle="validator">
                    <div class="form-group">
                        <label>البريد الالكتروني</label>
                        <input id="email_field" placeholder="قم بادخال البريد الالكتروني" class="form-control" name="email" type="email">
                    </div>
                    <div class="form-group">
                        <label>كلمة السر</label>
                        <input id="password_field" placeholder="قم بادخال كلمة السر" class="form-control" name="password" type="password">
                    </div>

                    <button type="submit" class="btn btn-theme btn-lg btn-block" name="Log_in">تسجيـل الدخول</button>
                </form>
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
                <h3 class="modal-title">شارك</h3>
            </div>
            <div class="modal-body">
                <div class="recent-ads">
                    <div class="recent-ads-list">
                        <div class="recent-ads-container">
                            <div class="recent-ads-list-image">
                                <a href="#" class="recent-ads-list-image-inner">
                                    <img src="images/car.png" alt="">
                                </a><!-- /.recent-ads-list-image-inner -->
                            </div>
                            <!-- /.recent-ads-list-image -->
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="#">هوندا سيفيك اوريل 1.8 I-VTEC CVT 2017</a>
                                </h3>
                                <ul class="recent-ads-list-location">
                                    <li><a href="#">نيويورك</a>,</li>
                                    <li><a href="#">بروكلين</a></li>
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
                </div>
                <h3>Key Features</h3>
                <p>Alarm, Alloy Wheels, Anti-Lock Brakes, Automatic Air Conditioning, Bluetooth Interface Telephone Equipment, Body Coloured Bumpers, Centre Console, Centre Rear Seat Belt, Cloth interior, Cruise Control, Driver Information System</p>
                <h3>Link</h3>
                <p><a href="https://themeforest.net/user/scriptsbundle/portfolio">https://themeforest.net/user/scriptsbundle/portfolio</a></p>
            </div>
            <div class="modal-footer">
                <a href="" class="btn btn-fb btn-md"><i class="fa fa-facebook"></i></a>
                <a class="btn btn-twitter btn-md"><i class="fa fa-twitter"></i></a>
                <a class="btn btn-gplus btn-md"><i class="fa fa-google-plus"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- =-=-=-=-=-=-= تقرير الإعلان Modal =-=-=-=-=-=-= -->
<div class="modal fade report-quote" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title">لماذا تقوم بالتبليغ عن هذا الإعلان؟</h3>
            </div>
            <div class="modal-body">
                <!-- content goes here -->
                <form>
                    <div class="skin-minimal">
                        <div class="form-group col-md-6 col-sm-6">
                            <ul class="list">
                                <li >
                                    <input type="radio" id="spam" name="minimal-radio">
                                    <label for="spam">اعلان وهمـي</label>
                                </li>
                                <li>
                                    <input  type="radio" id="duplicated" name="minimal-radio" >
                                    <label for="duplicated">متكرر</label>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group  col-md-6 col-sm-6">
                            <ul class="list">
                                <li >
                                    <input  type="radio" id="offensive" name="minimal-radio">
                                    <label for="offensive">مؤذي</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group  col-md-12 col-sm-12">
                        <label>السبب</label>
                        <textarea placeholder="This ad not belong to me" rows="3" class="form-control">قم بكتابة السبب وراء قيامك بعملية التبليغ</textarea>
                    </div>
                    <div class="col-md-12 col-sm-12"> <img src="images/captcha.gif" alt="" class="img-responsive"> </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 col-sm-12 margin-bottom-20 margin-top-20">
                        <button type="submit" class="btn btn-theme btn-block">بلـغ</button>
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
                <h3><?php echo $title; ?></h3>
                <div class="short-history">
                    <ul>
                        <li>منشور منذ: <b>  <?php echo $date;?> </b></li>
                        <li>مكان الاعلان: <b><?php echo $user_region. " | ". $user_country; ?></b></li>
                        <li>التصنيف: <b><a href="#"><?php echo $cat_name; ?></a></b></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-sm-12 col-xs-12 no-padding">
            <div class="pull-left row">
                <div class="col-md-12 col-sm-6 col-xs-12">
                    <a data-toggle="modal" data-target=".price-quote"  href="javascript:void(0)" class="btn btn-block pull-left btn-message"><i class="icon-envelope"></i> تواصـل مع البـائع</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
<script src="js/jquery.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

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


