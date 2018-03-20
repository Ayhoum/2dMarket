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
<html lang="ar">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="author" content="ScriptsBundle">
    <title>2D Market | تعديـل الاعلان رقم: <?php echo $_GET['ad_id'];?></title>
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
<!-- Small Breadcrumb -->
<div class="small-breadcrumb">
    <div class="container">
        <div class=" breadcrumb-link">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">الصفحات</a></li>
                <li><a class="active" href="#">الملف الشخصي</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Small Breadcrumb -->
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
                        <a href="profile.php"><img src="<?php echo $user_pic; ?>" alt=""></a>
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
                            <li ><a href="profile.php">الصفـحة الشخـصية</a></li>
                            <li  class="active"  ><a href="personal_ads.php">اعلانـاتي <span class="badge"><?php echo $ad_count; ?> </span></a></li>
                            <li><a href="favourite_ads.php">الاعـلانات المفضلـة <span class="badge"><?php echo $fav_count; ?></span></a></li>
                            <li><a href="personal_bids.php">المزيادات الخاصة بي <span class="badge"></span></a></li>
                            <li ><a href="messages.php">المحـادثـات</a></li>
                            <li><a href="logout.php">تسجيـل الخروج</a></li>
                        </ul>
                    </div>
                    <!-- الفئات -->
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
                                             تعديـل معلومات الاعـلان رقـم :  <span style="color: red">( <?php echo $ad_id; ?> )</span>
                                        </h3>
                                    </div>
                                    <ul class="accordion">
                                        <li>
                                            <h5 class="accordion-title"><a href="#">تعديــل الحالة الخاصة بالاعلان</a></h5>
                                            <div class="accordion-content">
                                                <form method="post" name="update_status" action="scripts/edit_ad_script.php?ad_id=<?php echo $ad_id;?>" class="submit-form">
                                                    <div class="row">
                                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                                            <label  class="control-label">حالة الاعـلان : <small style="color: red">( <?php echo $status; ?> )</small></label>
                                                            <div class="skin-minimal">
                                                                <select name="status" class="category form-control">
                                                                    <option value=""> Select an option</option>
                                                                    <option value="SOLD"> مبــاع </option>
                                                                    <option value="RESERVED"> محجـوز</option>
                                                                    <option value="AVAILABLE"> متــاح </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <button type="submit" name="status_submit" class="btn btn-theme pull-right">عدل الحـالة الان</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="accordion">
                                        <li>
                                            <h5 class="accordion-title"><a href="#">تعديـل المعلومات المتلعقة بالاعـلان</a></h5>
                                            <div class="accordion-content">
                                                <form method="post" name="update_form" action="scripts/edit_ad_script.php?ad_id=<?php echo $ad_id;?>" class="submit-form">
                                                    <!-- Title  -->
                                                    <div class="row">
                                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                                            <label  class="control-label">عنـوان الاعـلان : <small style="color: red">( <?php echo $title; ?> )</small></label>

                                                            <input name="title" class="form-control" placeholder="<?php echo $title; ?>" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <!-- Category  -->
                                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                            <label class="control-label">الصنـف :
                                                                <small style="color: red">( <?php echo $cat_name; ?> )</small>
                                                            </label>
                                                            <select name="category" class="category form-control">
                                                                <option label="Select Option"></option>
                                                                <?php
                                                                // GET ALL CATEGORIES from DB
                                                                $cat_query= "SELECT * FROM `CATEGORY` WHERE `lang` = 'AR' ORDER BY `name` ASC  ";
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
                                                            <label class="control-label">السـعر : <small style="color: red">( <?php echo $price; ?> )</small> </label>

                                                            <input name="price" class="form-control" placeholder="<?php echo $price; ?>" type="text">
                                                        </div>
                                                    </div>
                                                    <!-- end row -->
                                                    <!-- Ad Description  -->
                                                    <div class="row">
                                                        <div class="col-md-12 col-lg-12 col-xs-12  col-sm-12">
                                                            <label class="control-label">وصـف المنتـج : </label>
                                                            <textarea name="description" id="editor1" rows="12" class="form-control"
                                                                      placeholder="<?php echo $description; ?>"></textarea>
                                                        </div>
                                                    </div>
                                                    <!-- end row -->
                                                    <!-- Ad Type  -->
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                            <label  class="control-label">كيفية البيـع : <small style="color: red">( <?php echo $selling_type; ?> )</small></label>
                                                            <div class="skin-minimal">
                                                                <select name="selling_type" class="category form-control">
                                                                    <option value=""> Select an option</option>
                                                                    <option value="BID"> مـزاد</option>
                                                                    <option value="FIXED_PRICE"> سعـر ثـابت</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- Ad Condition  -->
                                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                            <label class="control-label">حـالة المنتـج  : <small style="color: red">(<?php echo $condition; ?>)</small></label>
                                                            <div class="skin-minimal">
                                                                <select name="condition" class="category form-control">
                                                                    <option value=""> Select an option</option>
                                                                    <option value="NEW"> جديـد</option>
                                                                    <option value="USED"> مستعمـل</option>
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
                                                                <option value="PICK_UP"> الـتقاط من المنزل</option>
                                                                <option value="DELIVERY"> ارسـال كطرد بريدي</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                                            <label class="control-label">Ad Type  <small style="color: red">( <?php echo $ad_type;  ?> )</small></label>
                                                            <select name="ad_type" class="category form-control">
                                                                <option value=""> Select an option</option>
                                                                <option value="NORMAL"> عــادي</option>
                                                                <option value="PREMIUM"> مدفــوع</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <button type="submit" name="submit" class="btn btn-theme pull-right">انشــر الاعـلان</button>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <?php
                            }
                        }
                        ?>
                        <!-- Listing Ad Grid -->

                    </div>
                    <!-- Row End -->
                </div>
                <!-- Middle Content Area  End -->
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




