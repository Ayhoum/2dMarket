﻿<?php
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
<!-- =-=-=-=-=-=-= Light Header =-=-=-=-=-=-= -->
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
<!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="header-page">
                    <h1>إعلان واحد Detial</h1>
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
                <li><a href="#">الصفحات</a></li>
                <li><a class="active" href="#">Ad Detail</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Small Breadcrumb -->
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
                    <div class="theiaStickySidebar"> <img alt="" src="images/160x600.png"> </div>
                </div>

                <div class="col-md-8 col-xs-12 col-sm-12">
                    <!-- Single Ad -->
                    <?php include 'scripts/ad_page_script.php'?>
                </div>
                <!-- Middle Content Area  End -->

                <!-- =-=-=-=-=-=-= Advertizing Sidebar =-=-=-=-=-=-= -->
                <div class="col-md-2 col-sm-2 hidden-xs hidden-sm rightbar-stick">
                    <div class="theiaStickySidebar"> <img alt="" src="images/160x600.png"> </div>
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Main Container End -->
    </section>
    <!-- =-=-=-=-=-=-= Ads أرشيف End =-=-=-=-=-=-= -->
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
                        <!-- تابعنا -->
                        <div class="widget socail-icons">
                            <h5>تابعنا</h5>
                            <ul>
                                <li><a class="fb" href=""><i class="fa fa-facebook"></i></a><span>Facebook</span></li>
                                <li><a class="twitter" href=""><i class="fa fa-twitter"></i></a><span>Twitter</span></li>
                                <li><a class="linkedin" href=""><i class="fa fa-linkedin"></i></a><span>Linkedin</span></li>
                                <li><a class="googleplus" href=""><i class="fa fa-google-plus"></i></a><span>Google+</span></li>
                            </ul>
                        </div>
                        <!-- تابعنا End -->
                    </div>
                    <div class="col-md-6  col-sm-6 col-xs-12">
                        <!-- Newslatter -->
                        <div class="widget widget-newsletter">
                            <h5>Singup عن النشرة الأسبوعية</h5>
                            <div class="fieldset">
                                <p>قد نرسل لك معلومات عن الأحداث، وندوات والمنتجات والخدمات ذات الصلة والتي نعتقد.</p>
                                <form>
                                    <input class="" value="Enter your email address" type="text">
                                    <input class="submit-btn" name="submit" value="عرض" type="submit">
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
                            <p>© 2017 AForest جميع الحقوق محفوظة. تصميم بواسطة <a href="http://themeforest.net/user/scriptsbundle/portfolio" target="_blank">Scriptsbundle</a> </p>
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
                <!-- content goes here -->
                <form>
                    <div class="form-group  col-md-6  col-sm-6">
                        <label>اسمك</label>
                        <input type="text" class="form-control" placeholder="Enter اسمك">
                    </div>
                    <div class="form-group  col-md-6  col-sm-6">
                        <label>عنوان البريد الإلكتروني</label>
                        <input type="email" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="form-group  col-md-12  col-sm-12">
                        <label>رقم الاتصال</label>
                        <input type="text" class="form-control" placeholder="رقم الاتصال">
                    </div>
                    <div class="form-group  col-md-12  col-sm-12">
                        <label>تعليقات</label>
                        <textarea placeholder="What is the price of the Honda Civic 2017 you have in your inventory?" rows="3" class="form-control">ما هو سعر 2015 هوندا أكورد EX-L لديك في المخزون الخاص بك?</textarea>
                    </div>
                    <div class="col-md-12  col-sm-12"> <img src="images/captcha.gif" alt="" class="img-responsive"> </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12  col-sm-12 margin-bottom-20 margin-top-20">
                        <button type="submit" class="btn btn-theme btn-block">عرض</button>
                    </div>
                </form>
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
                        <label>تعليقات</label>
                        <textarea placeholder="This ad not belong to me" rows="3" class="form-control">This ad not belong to me</textarea>
                    </div>
                    <div class="col-md-12 col-sm-12"> <img src="images/captcha.gif" alt="" class="img-responsive"> </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 col-sm-12 margin-bottom-20 margin-top-20">
                        <button type="submit" class="btn btn-theme btn-block">عرض</button>
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
                <h3>هوندا سيفيك اوريل 1.8 I-VTEC CVT 2017</h3>
                <div class="short-history">
                    <ul>
                        <li>منشور على: <b>07 Oct 2017</b></li>
                        <li>موقع: <b>لندن</b></li>
                        <li>فئة: <b><a href="#">السيارات المستعملة</a></b></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-5  col-sm-12 col-xs-12 no-padding">
            <div class="pull-left row">
                <div class="col-md-6 col-sm-6 col-xs-12 ">
                    <a href="javascript:void(0)" class="btn btn-block pull-left btn-phone number " data-last="111111X"><i class="fa fa-phone"></i> 0320<span>XXXXXXX</span></a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
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


