﻿<?php
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
<!-- =-=-=-=-=-=-= Colored Header =-=-=-=-=-=-= -->
<div class="colored-header">
    <!-- Top Bar -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <!-- Header Top Left -->
                <div class="header-top-left col-md-8 col-sm-6 col-xs-12 hidden-xs">
                    <ul class="listnone">
                        <li><a href="about.html"><i class="fa fa-heart-o" aria-hidden="true"></i> حول</a></li>
                        <li><a href="faqs.html"><i class="fa fa-folder-open-o" aria-hidden="true"></i> الأسئلة الأكثر شيوعا</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe" aria-hidden="true"></i> لغة <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">الإنجليزية</a></li>
                                <li><a href="#">اللغة السويدية</a></li>
                                <li><a href="#">العربية</a></li>
                                <li><a href="#">الروسية</a></li>
                                <li><a href="#">الصينية</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Header Top Right Social -->
                <div class="header-right col-md-4 col-sm-6 col-xs-12 ">
                    <div class="pull-right flip">
                        <ul class="listnone">
                            <li><a href="login.html"><i class="fa fa-sign-in"></i> تسجيل الدخول</a></li>
                            <li><a href="register.html"><i class="fa fa-unlock" aria-hidden="true"></i> تسجيل</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-profile-male" aria-hidden="true"></i> عمير <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="profile.html">ملف تعريفي للمستخدم</a></li>
                                    <li><a href="profile-2.html">ملف تعريفي للمستخدم 2</a></li>
                                    <li><a href="archives.html">أرشيف</a></li>
                                    <li><a href="active-ads.html">إعلانات نشطة</a></li>
                                    <li><a href="favourite.html">إعلانات المفضلة</a></li>
                                    <li><a href="messages.html">لوحة رسالة</a></li>
                                    <li><a href="deactive.html">التعطيل حساب</a></li>
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
                                <a href="javascript:void(0)"> الصفحة الرئيسية <i class="fa fa-angle-down fa-indicator"></i></a>
                                <div class="drop-down grid-col-8">
                                    <!--grid row-->
                                    <div class="grid-row">
                                        <!--grid column 3-->
                                        <div class="grid-col-4">
                                            <ul>
                                                <li><a href="index.html">الصفحة 1 - افتراضي </a></li>
                                                <li><a href="index-transparent.html">منزل 2 (شفاف)</a></li>
                                                <li><a href="index-2.html">الصفحة 3 (التغيير)</a></li>
                                                <li><a href="index-3.html">الصفحة 4 (ماجستير المتزلج)</a></li>
                                            </ul>
                                        </div>
                                        <div class="grid-col-4">
                                            <ul>
                                                <li><a href="index-4.html">الرئيسية 5 (مع قائمة خريطة)</a></li>
                                                <li><a href="index-5.html">الرئيسية 6 (مودرن ستايل)</a></li>
                                                <li><a href="index-6.html">الرئيسية 7 (التغيير)</a></li>
                                                <li><a href="index-7.html">الصفحة الرئيسية 8 (الفئة المتزلج)</a></li>
                                            </ul>
                                        </div>
                                        <div class="grid-col-4">
                                            <ul>
                                                <li><a href="index-10.html">منزل 11 (البيت الحديث)</a></li>
                                                <li><a href="index-8.html">الصفحة 9 (الصفحة المقصودة)</a></li>
                                                <li><a href="index-9.html">منزل 10 (التغيير)</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:void(0)">قائمة <i class="fa fa-angle-down fa-indicator"></i></a>
                                <!-- drop down multilevel  -->
                                <ul class="drop-down-multilevel">
                                    <li>
                                        <a href="javascript:void(0)">شبكة نمط<i class="fa fa-angle-left fa-indicator"></i> <span class="label label-info">الجديد</span></a>
                                        <!-- drop down second level -->
                                        <ul class="drop-down-multilevel">
                                            <li><a href="listing.html">قائمة الشبكة 1</a></li>
                                            <li><a href="listing-1.html">قائمة الشبكة 2</a></li>
                                            <li><a href="listing-2.html">قائمة الشبكة 3</a></li>
                                            <li><a href="listing-7.html">متميز الشبكة <span class="label label-info">الجديد</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">قائمة نمط<i class="fa fa-angle-left fa-indicator"></i> </a>
                                        <!-- drop down second level -->
                                        <ul class="drop-down-multilevel">
                                            <li><a href="listing-3.html">عرض قائمة 1</a></li>
                                            <li><a href="listing-4.html">عرض قائمة 2</a></li>
                                            <li><a href="listing-5.html">عرض قائمة 3</a></li>
                                            <li><a href="listing-6.html">عرض قائمة 4</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">إعلان واحد<i class="fa fa-angle-left fa-indicator"></i> <span class="label label-info">الجديد</span></a>
                                        <!-- drop down second level -->
                                        <ul class="drop-down-multilevel">
                                            <li><a href="single-page-listing.html">واحد التفاصيل الإعلان</a></li>
                                            <li><a href="single-page-listing-featured.html">إعلان (مميزة) <span class="label label-info">الجديد</span></a></li>
                                            <li><a href="single-page-listing-2.html">إعلان واحد 2</a></li>
                                            <li><a href="single-page-listing-3.html">إعلان واحد (ادسنس)</a></li>
                                            <li><a href="single-page-expired.html">إعلان واحد (مقفلة)</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="icons.html">الرموز السرية </a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">الفئات <i class="fa fa-angle-down fa-indicator"></i></a>
                                <!-- drop down multilevel  -->
                                <ul class="drop-down-multilevel">

                                    <li><a href="category-2.html">تباين الحديثة</a></li>
                                    <li><a href="category-3.html">تباين الحد الأدنى</a></li>
                                    <li><a href="category-4.html">يتوهم التغيير</a></li>

                                    <li><a href="category-6.html">الاختلاف شقة</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">لوحة القيادة <i class="fa fa-angle-down fa-indicator"></i></a>
                                <!-- drop down multilevel  -->
                                <ul class="drop-down-multilevel">
                                    <li><a href="profile.html">ملف تعريفي للمستخدم</a></li>
                                    <li><a href="profile-2.html">ملف تعريفي للمستخدم 2</a></li>
                                    <li><a href="archives.html">أرشيف</a></li>
                                    <li><a href="active-ads.html">إعلانات نشطة</a></li>
                                    <li><a href="favourite.html">إعلانات المفضلة</a></li>
                                    <li><a href="messages.html">لوحة رسالة</a></li>
                                    <li><a href="deactive.html">التعطيل حساب</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">الصفحات <i class="fa fa-angle-down fa-indicator"></i></a>
                                <!-- drop down full width -->
                                <div class="drop-down grid-col-12">
                                    <!--grid row-->
                                    <div class="grid-row">
                                        <!--grid column 2-->
                                        <div class="grid-col-3">
                                            <h4>مدونة</h4>
                                            <ul>
                                                <li><a href="blog.html">بلوق مع الحق في الشريط الجانبي</a></li>
                                                <li><a href="blog-1.html">بلوق مع الماسونية نمط</a></li>
                                                <li><a href="blog-2.html">بلوق من دون الشريط الجانبي</a></li>
                                                <li><a href="blog-details.html">مدونة واحدة</a></li>
                                                <li><a href="blog-details-1.html">مدونة واحدة (ادسنس) </a></li>
                                            </ul>
                                        </div>
                                        <!--grid column 2-->
                                        <div class="grid-col-3">
                                            <h4>متفرقات</h4>
                                            <ul>
                                                <li><a href="about.html">معلومات عنا</a></li>
                                                <li><a href="cooming-soon.html">قريبا</a></li>
                                                <li><a href="elements.html">الهاتفية القصيرة</a></li>
                                                <li><a href="error.html">404 صفحة</a></li>
                                                <li><a href="faqs.html">الأسئلة الأكثر شيوعا</a></li>
                                            </ul>
                                        </div>
                                        <!--grid column 2-->

                                        <div class="grid-col-3">
                                            <h4>آخرون</h4>
                                            <ul>
                                                <li><a href="login.html">تسجيل الدخول</a></li>
                                                <li><a href="register.html">تسجيل</a></li>
                                                <li><a href="pricing.html">التسعير</a></li>
                                                <li><a href="site-map.html">خريطة الموقع</a></li>
                                                <li><a href="post-ad-1.html">إضافة إعلان</a></li>
                                            </ul>
                                        </div>
                                        <!--grid column 2-->
                                        <div class="grid-col-3">
                                            <h4>التفاصيل صفحة</h4>
                                            <ul>
                                                <li><a href="post-ad-2.html">آخر الإعلان 2</a></li>
                                                <li><a href="single-page-listing.html">واحد التفاصيل الإعلان</a></li>
                                                <li><a href="single-page-listing-2.html">إعلان واحد 2</a></li>
                                                <li><a href="single-page-listing-3.html">إعلان واحد (ادسنس)</a></li>
                                                <li><a href="single-page-expired.html">إعلان واحد (مقفلة)</a></li>
                                            </ul>
                                        </div>
                                        <!--grid column 2-->
                                    </div>
                                </div>
                            </li>

                            <li><a href="contact.html">اتصال </a></li>
                        </ul>
                        <ul class="menu-search-bar">
                            <li>
                                <a href="post-ad-1.html" class="btn btn-light"><i class="fa fa-plus" aria-hidden="true"></i> انشر إعلانك مجانا</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </nav>
</div>
<!-- Navigation Menu End -->
<!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
<!-- Small Breadcrumb -->
<div class="bread-2 page-header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-5 col-xs-12">
                <div class="header-page">
                    <h1>Category Grid - 2</h1>
                </div>
            </div>
            <div class="col-md-4 col-sm-7 col-xs-12">
                <div class="small-breadcrumb">
                    <div class=" breadcrumb-link">
                        <ul>
                            <li><a href="index.html">Home Page</a></li>
                            <li><a href="#">الصفحات</a></li>
                            <li><a href="elements.html">Category</a></li>
                            <li><a class="active" href="#">Listing</a></li>
                        </ul>
                    </div>
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
                                <span>عرض <span class="showed">1 - 20</span> of <span class="showed">42211</span>النتائج</span>
                                <div class="filter-brudcrums-sort">
                                    <ul>
                                        <li><span>ترتيب حسب:</span></li>
                                        <li><a href="#">تاريخ التحديث</a></li>
                                        <li><a href="#">السعر</a></li>
                                        <li><a href="#">جديد</a></li>
                                        <li><a href="#">مستعمل</a></li>
                                        <li><a href="#">ضمان</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sorting Filters Breadcrumb End -->
                        </div>
                        <!-- Sorting Filters End-->
                        <div class="clearfix"></div>
                        <!-- Ads Archive -->
                        <div class="posts-masonry">
                            <?php include 'scripts/select_all_ads_premium.php';?>
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <section class="advertising">
                                    <a href="<?php if(isset($_SESSION['id'])) {echo "new_advertisement.php" ;} else {echo "login.php";}  ?>">
                                        <div class="banner">
                                            <div class="wrapper">
                                                <span class="title">هل تريد ان ترى اعلانـك هنـا؟</span>
                                                <span class="submit">قم بمشاركـة اعلانك الان<i class="fa fa-plus-square"></i></span>
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
                                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
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
                                            <?php include 'scripts/category.php';?>
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
                                <?php include 'scripts/featured_ads.php';?>
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
                                        <li><span class="icon fa fa-map-marker"></span> 60 Link Road Lhr. باكستان 54770</li>
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
                                    <h3 class="main-title text-left">خدماتنا</h3>
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
                                        <h3 class="main-title text-left"> أحدث الأخبار</h3>
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
                                        <h3 class="main-title text-left"> روابط سريعة</h3>
                                    </div>
                                    <ul>
                                        <li><a href="about.html">معلومات عنا</a></li>
                                        <li><a href="#">Our Team</a></li>
                                        <li><a href="#">خدماتنا</a></li>
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
                <div class="copyright text-center">حقوق التأليف والنشر 2017 © موضوع أنشأتها <a href="http://themeforest.net/user/scriptsbundle/portfolio" target="_blank">Scriptsbundle</a> كل الحقوق محفوظة</div>
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
    <h4>يبيع</h4>
</a>
<!-- Back To Top -->
<a href="#0" class="cd-top">Top</a>
<!-- =-=-=-=-=-=-= Quote Modal =-=-=-=-=-=-= -->
<div class="modal fade price-quote" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" id="lineModalLabel">البريد الإلكتروني لمعرفة السعر</h3>
            </div>
            <div class="modal-body">
                <!-- content goes here -->
                <form>
                    <div class="form-group  col-md-6">
                        <label>اسمك</label>
                        <input type="text" class="form-control" placeholder="Enter اسمك">
                    </div>
                    <div class="form-group  col-md-6">
                        <label>عنوان البريد الإلكتروني</label>
                        <input type="email" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="form-group  col-md-12">
                        <label>رقم الاتصال</label>
                        <input type="text" class="form-control" placeholder="رقم الاتصال">
                    </div>
                    <div class="form-group  col-md-12">
                        <label>تعليقات</label>
                        <textarea placeholder="What is the price of the Honda Civic 2017 you have in your inventory?" rows="3" class="form-control">ما هو سعر 2015 هوندا أكورد EX-L لديك في المخزون الخاص بك?</textarea>
                    </div>
                    <div class="col-md-12"> <img src="images/captcha.gif" alt="" class="img-responsive"> </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 margin-bottom-20 margin-top-20">
                        <button type="submit" class="btn btn-theme btn-block">عرض</button>
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
