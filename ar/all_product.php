<?php

include '../scripts/db_connection.php';
session_start();
ob_start();
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
    <title>2D Market | جميع الاعلانات</title>
    <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
    <link rel="icon" href="images/logo_png.png" type="image/x-icon" />
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
    <!-- JavaScripts -->
    <script src="js/modernizr.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="rtl">
<!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- =-=-=-=-=-=-= Light Header =-=-=-=-=-=-= -->
<div class="colored-header">
    <!-- Top Bar -->
    <?php include 'topbar-ar.php';?>
    <!-- Top Bar End -->
    <!-- Navigation Menu -->
    <?php //include ''; ?>
</div>
<!-- Navigation Menu End -->
<!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="header-page">
                    <h1>جميـــع الاعلانـــات</h1>
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
                        <!-- Sorting Filters Breadcrumb -->
                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                            <div class="clearfix"></div>
                            <div class="listingTopFilterBar">
                                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                    <div class="header-listing">
                                        <h6>ترتيـب حسـب :</h6>
                                        <div class="custom-select-box">
                                            <select name="order" class="custom-select">
                                                <option value="0">تـاريخ النشر</option>
                                                <option value="1">السعر(الأقل-الاكثر)</option>
                                                <option value="2">السعر (الاكثر- الاقل)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sorting Filters Breadcrumb End -->
                        <!-- Sorting Filters End-->
                        <div class="clearfix"></div>
                        <!-- Ads Archive -->
                        <?php include 'scripts/all_ads_script.php';?>
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
                            <!-- الفئات Panel -->
                            <div class="panel panel-default">
                                <!-- Heading -->
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <!-- Title -->
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="more-less glyphicon glyphicon-plus"></i>
                                            الفئات
                                        </a>
                                    </h4>
                                    <!-- Title End -->
                                </div>
                                <!-- Content -->
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body categories">
                                        <ul>
                                            <li><a href="#"><i class="flaticon-data"></i>الالكترونيات و Gedget<span>(1029)</span></a></li>
                                            <li><a href="#"><i class="flaticon-transport-6"></i>السيارات و المركبات<span>(1228)</span></a></li>
                                            <li><a href="#"><i class="flaticon-mortgage"></i>الملكية<span>(178)</span></a></li>
                                            <li><a href="#"><i class="flaticon-technology-8"></i>المحمول وكمبيوتر لوحي<span>(2178)</span></a></li>
                                            <li><a href="#"><i class="flaticon-suitcase"></i>وظائف<span>(7178)</span></a></li>
                                            <li><a href="#"><i class="flaticon-search"></i>المنزل والحديقة<span>(7163)</span></a></li>
                                            <li><a href="#"><i class="flaticon-dog"></i>الحيوانات الأليفة و الحيوانات<span>(8709)</span></a></li>
                                            <li><a href="#"><i class="flaticon-science"></i>الصحة والجمال<span>(3129)</span></a></li>
                                            <li><a href="#"><i class="flaticon-game"></i>هواية، رياضة و الاطفال<span>(2019)</span></a></li>
                                            <li><a href="#"><i class="flaticon-food"></i>الغذاء والزراعة<span>(323)</span></a></li>
                                            <li><a href="#"><i class="flaticon-blouse"></i>الملابس النساء والأطفال<span>(425)</span></a></li>
                                            <li><a href="#"><i class="flaticon-technology-22"></i>كاميرات و الأمن<span>(3223)</span></a></li>
                                            <li><a href="#"><i class="flaticon-technology-45"></i>مكتب المنتج<span>(3283)</span></a></li>
                                            <li><a href="#"><i class="flaticon-wrench"></i>الفنون، الحرف اليدوية والخياطة<span>(3221)</span></a></li>
                                            <li><a href="#"><i class="flaticon-cogwheel-2"></i>آخرون<span>(3129)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- الفئات Panel End -->
                            <!-- Brands Panel -->
                            <div class="panel panel-default">
                                <!-- Heading -->
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="more-less glyphicon glyphicon-plus"></i>
                                            العلامات التجارية
                                        </a>
                                    </h4>
                                </div>
                                <!-- Content -->
                                <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
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
                                                    <label for="minimal-checkbox-1">جميع العلامات التجارية</label>
                                                </li>
                                                <li>
                                                    <input  type="checkbox" id="minimal-checkbox-2">
                                                    <label for="minimal-checkbox-2">سامسونج</label>
                                                </li>
                                                <li>
                                                    <input  type="checkbox" id="minimal-checkbox-3">
                                                    <label for="minimal-checkbox-3">تفاحة</label>
                                                </li>
                                                <li>
                                                    <input  type="checkbox" id="minimal-checkbox-4">
                                                    <label for="minimal-checkbox-4">نوكيا</label>
                                                </li>
                                                <li>
                                                    <input  type="checkbox" id="minimal-checkbox-5">
                                                    <label for="minimal-checkbox-5">سوني</label>
                                                </li>
                                                <li>
                                                    <input  type="checkbox" id="minimal-checkbox-6">
                                                    <label for="minimal-checkbox-6">بلاك بيري</label>
                                                </li>
                                                <li>
                                                    <input  type="checkbox" id="minimal-checkbox-7">
                                                    <label for="minimal-checkbox-7">HTC</label>
                                                </li>
                                                <li>
                                                    <input  type="checkbox" id="minimal-checkbox-8">
                                                    <label for="minimal-checkbox-8">موتورولا</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Brands List End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Brands Panel End -->
                            <!-- Condition Panel -->
                            <div class="panel panel-default">
                                <!-- Heading -->
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="more-less glyphicon glyphicon-plus"></i>
                                            شرط
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
                                                    <label for="minimal-radio-1">جديد</label>
                                                </li>
                                                <li>
                                                    <input tabindex="8" type="radio" id="minimal-radio-2" name="minimal-radio" checked>
                                                    <label for="minimal-radio-2">مستعمل</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Condition Panel End -->
                            <!-- التسعير Panel -->
                            <div class="panel panel-default">
                                <!-- Heading -->
                                <div class="panel-heading" role="tab" id="headingfour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                            <i class="more-less glyphicon glyphicon-plus"></i>
                                            السعر
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
                            <!-- التسعير Panel End -->
                            <!-- إعلانات مميزة Panel -->
                            <div class="panel panel-default">
                                <!-- Heading -->
                                <div class="panel-heading" >
                                    <h4 class="panel-title">
                                        <a>
                                            إعلانات مميزة
                                        </a>
                                    </h4>
                                </div>
                                <!-- Content -->
                                <div class="panel-collapse">
                                    <div class="panel-body recent-ads">
                                        <div class="featured-slider-3">
                                            <!-- إعلانات مميزة -->
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
                                                            <!-- تفاصيل --><a href="" class="view-details">تفاصيل</a>
                                                        </div>
                                                        <!-- Ad Img End -->
                                                        <div class="short-description">
                                                            <!-- Ad Category -->
                                                            <div class="category-title"> <span><a href="#">سيارات</a></span> </div>
                                                            <!-- Ad Title -->
                                                            <h3><a title="" href="single-page-listing.html">2017 هوندا سيفيك EX</a></h3>
                                                            <!-- Price -->
                                                            <div class="price">$18,200 <span class="negotiable">(قابل للتفاوض)</span></div>
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
                                            <!-- إعلانات مميزة -->
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
                                                            <!-- تفاصيل --><a href="" class="view-details">تفاصيل</a>
                                                        </div>
                                                        <!-- Ad Img End -->
                                                        <div class="short-description">
                                                            <!-- Ad Category -->
                                                            <div class="category-title"> <span><a href="#">الكاميرات و ملحقاتها</a></span> </div>
                                                            <!-- Ad Title -->
                                                            <h3><a title="" href="single-page-listing.html">Office أثاث For Sale </a></h3>
                                                            <!-- Price -->
                                                            <div class="price">$250 <span class="negotiable">(قابل للتفاوض)</span></div>
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
                                            <!-- إعلانات مميزة -->
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
                                                            <!-- تفاصيل --><a href="" class="view-details">تفاصيل</a>
                                                        </div>
                                                        <!-- Ad Img End -->
                                                        <div class="short-description">
                                                            <!-- Ad Category -->
                                                            <div class="category-title"> <span><a href="#">الكاميرات و ملحقاتها</a></span> </div>
                                                            <!-- Ad Title -->
                                                            <h3><a title="" href="single-page-listing.html">سوني Xperia Z5 </a></h3>
                                                            <!-- Price -->
                                                            <div class="price">$250 <span class="negotiable">(قابل للتفاوض)</span></div>
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
                                            <!-- إعلانات مميزة -->
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
                                                            <!-- تفاصيل --><a href="" class="view-details">تفاصيل</a>
                                                        </div>
                                                        <!-- Ad Img End -->
                                                        <div class="short-description">
                                                            <!-- Ad Category -->
                                                            <div class="category-title"> <span><a href="#">الكاميرات و ملحقاتها</a></span> </div>
                                                            <!-- Ad Title -->
                                                            <h3><a title="" href="single-page-listing.html">سوني Xperia Z5 </a></h3>
                                                            <!-- Price -->
                                                            <div class="price">$250 <span class="negotiable">(قابل للتفاوض)</span></div>
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
                                            <!-- إعلانات مميزة -->
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
                                                            <!-- تفاصيل --><a href="" class="view-details">تفاصيل</a>
                                                        </div>
                                                        <!-- Ad Img End -->
                                                        <div class="short-description">
                                                            <!-- Ad Category -->
                                                            <div class="category-title"> <span><a href="#">الكاميرات و ملحقاتها</a></span> </div>
                                                            <!-- Ad Title -->
                                                            <h3><a title="" href="single-page-listing.html">سوني Xperia Z5 </a></h3>
                                                            <!-- Price -->
                                                            <div class="price">$250 <span class="negotiable">(قابل للتفاوض)</span></div>
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
                            <!-- إعلانات مميزة Panel End -->
                            <!-- Latest Ads Panel -->
                            <div class="panel panel-default">
                                <!-- Heading -->
                                <div class="panel-heading" >
                                    <h4 class="panel-title">
                                        <a>
                                            الإعلانات الأخيرة
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
                                                        <a href="#">سوني Xperia Z1</a>
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
                                                        <a href="#">2017 بي ام دبليو I8</a>
                                                    </h3>
                                                    <ul class="recent-ads-list-location">
                                                        <li><a href="#">نيويورك</a>,</li>
                                                        <li><a href="#">بروكلين</a></li>
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
                                                        <a href="#">ديل خط العرض e7440</a>
                                                    </h3>
                                                    <ul class="recent-ads-list-location">
                                                        <li><a href="#">نيويورك</a>,</li>
                                                        <li><a href="#">بروكلين</a></li>
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
                                                        <a href="#">الرياضة التوجيهية أنيق</a>
                                                    </h3>
                                                    <ul class="recent-ads-list-location">
                                                        <li><a href="#">نيويورك</a>,</li>
                                                        <li><a href="#">بروكلين</a></li>
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
                                                        <a href="#">تفاحة ساعات اليد</a>
                                                    </h3>
                                                    <ul class="recent-ads-list-location">
                                                        <li><a href="#">نيويورك</a>,</li>
                                                        <li><a href="#">بروكلين</a></li>
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
    <!-- =-=-=-=-=-=-= Ads أرشيف End =-=-=-=-=-=-= -->
    <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
</div>
<!-- Main Content Area End -->
<!-- Post Ad Sticky -->
<a href="#" class="sticky-post-button hidden-xs">
         <span class="sell-icons">
         <i class="flaticon-transport-9"></i>
         </span>
    <h4>يبيع</h4>
</a>
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

