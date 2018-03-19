﻿<?php

include '../scripts/db_connection.php';
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
      <title>2D Market | الصفحـة الرئيسيـة</title>
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
                                             <li><a href="index-4.php">الرئيسية 5 (مع قائمة خريطة)</a></li>
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
      <!-- =-=-=-=-=-=-= Listing Map =-=-=-=-=-=-= -->
      <section class="clearfix">
         <div class="map">
            <div id="map"></div>
         </div>
         <!-- end map -->
      </section>
      <!-- =-=-=-=-=-=-= Listing Map End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Advance Search =-=-=-=-=-=-= -->
      <section class="search-2">
         <div class="container">
            <!-- Title -->
            <div class="col-md-12 col-sm-12 col-xs-12 no-padding">
               <div class="search-title">Browse Ads</div>
            </div>
            <div class="row">
               <form method="post" class="search-form">
                  <!-- Category -->
                  <div class="col-md-3 col-xs-12 col-sm-3">
                     <select class="category form-control">
                        <option label="">اختر من القائمة</option>
                         <?php
                         // GET ALL CATEGORIES from DB
                         $cat_query= "SELECT * FROM `CATEGORY` WHERE `lang` = 'AR' ORDER BY `id` ASC  ";
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
                                         <option value="<?php echo $id."-".$sub_id; ?>"><?php echo $name . " | " . $sub_name; ?></option>
                                         <?php
                                     }
                                 } else {
                                     ?>
                                     <option value="<?php echo $id."-".$sub_id; ?>"><?php echo $name ; ?></option>
                                     <?php
                                 }
                             }
                         }
                         ?>
                     </select>
                  </div>
                  <!-- Search Field -->
                  <div class="col-md-3 col-xs-12 col-sm-3">
                     <input type="text" class="form-control" placeholder="عن ماذا تريد البحث..." />
                  </div>
                  <!-- Price Range SLider -->
                  <div class="col-md-3 col-xs-12 col-sm-3">
                     <span class="price-slider-value">Price ($) <span id="price-min"></span> - <span id="price-max"></span></span>
                     <div id="price-slider"></div>
                  </div>
                  <!-- Search Button -->
                  <div class="col-md-3 col-xs-12 col-sm-3">
                     <button type="submit" class="btn btn-block btn-light">Search</button>
                  </div>
                  <!-- end .item -->
               </form>
               <!-- end .search-form -->
            </div>
            <!-- end .tab-panel -->
         </div>
         <!-- end .container -->
      </section>
      <!-- =-=-=-=-=-=-= Advance Search End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= الفئات =-=-=-=-=-=-= -->
         <section class="custom-padding gray categories">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Category -->
                  <div class="col-md-3 col-sm-6">
                     <div class="box">
                        <img alt="img" src="images/category/cars.png">
                        <h4><a href="#">سيارات و دراجات</a></h4>
                        <strong>1,265 وظائف</strong> 
                     </div>
                  </div>
                  <!-- Category -->
                  <div class="col-md-3 col-sm-6">
                     <div class="box">
                        <img alt="img" src="images/category/mobile-1.png">
                        <h4><a href="#">الهواتف النقالة</a></h4>
                        <strong>1,265 Ads</strong> 
                     </div>
                  </div>
                  <!-- Category -->
                  <div class="col-md-3 col-sm-6">
                     <div class="box">
                        <img alt="img" src="images/category/applinces.png">
                        <h4><a href="#">الأجهزة المنزلية</a></h4>
                        <strong>6,213 Ads</strong> 
                     </div>
                  </div>
                  <!-- Category -->
                  <div class="col-md-3 col-sm-6">
                     <div class="box">
                        <img alt="img" src="images/category/cloths.png">
                        <h4><a href="#">ملابس</a></h4>
                        <strong>3,750 Ads</strong> 
                     </div>
                  </div>
                  <!-- Category -->
                  <div class="col-md-3 col-sm-6">
                     <div class="box">
                        <img alt="img" src="images/category/education.png">
                        <h4><a href="#">التعليم & Art</a></h4>
                        <strong>5,913 Ads</strong> 
                     </div>
                  </div>
                  <!-- Category -->
                  <div class="col-md-3 col-sm-6">
                     <div class="box">
                        <img alt="img" src="images/category/computer-1.png">
                        <h4><a href="#"> أجهزة الكمبيوتر المحمولة</a></h4>
                        <strong>9,942 Ads</strong> 
                     </div>
                  </div>
                  <!-- Category -->
                  <div class="col-md-3 col-sm-6">
                     <div class="box">
                        <img alt="img" src="images/category/pets.png">
                        <h4><a href="#">الحيوانات الأليفة و الحيوانات</a></h4>
                        <strong>3,891 Ads</strong> 
                     </div>
                  </div>
                  <!-- Category -->
                  <div class="col-md-3 col-sm-6">
                     <div class="box">
                        <img alt="img" src="images/category/newspaper.png">
                        <h4><a href="#">Newspaper وظائف</a></h4>
                        <strong>7,418 Ads</strong> 
                     </div>
                  </div>
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= الفئات =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Call to Action =-=-=-=-=-=-= -->
         <div class="parallex bg-img-3  section-padding">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 col-sm-12">
                     <div class="call-action">
                        <i class="flaticon-shapes"></i>
                        <h4>قـم الان بالانضـمام الى موقعنا واستفد من المزايا الكثيرة </h4>
                        <p>كن متأكداً دوماً بأن اعلانك سيصل الى اكبر عدد ممكن من المتصفحين</p>
                     </div>
                     <!-- end subsection-text -->
                  </div>
                  <!-- end col-md-8 -->
                  <div class="col-md-4 col-sm-12">
                     <div class="parallex-button"> <a href="login.php" class="btn btn-theme">انشر إعلانك مجانا <i class="fa fa-angle-double-right "></i></a> </div>
                     <!-- end parallex-button -->
                  </div>
                  <!-- end col-md-4 -->
               </div>
               <!-- end row -->
            </div>
            <!-- end container -->
         </div>
         <!-- =-=-=-=-=-=-= Call to Action =-=-=-=-=-=-= -->

         <!-- =-=-=-=-=-=-= إعلانات مميزة =-=-=-=-=-=-= -->
         <section class="custom-padding">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Heading Area -->
                  <div class="heading-panel">
                     <div class="col-xs-12 col-md-12 col-sm-12">
                        <h3 class="main-title text-left">
                           إعلانات مميزة
                        </h3>
                        <!-- Style Switcher -->
                        <div class="switcher pull-right flip">
                           <a href="#" id="list" class="btn btn-theme">
                           <span class="fa fa-list"></span>
                           قائمـة
                           </a> 
                           <a href="#" id="grid" class="btn active btn-theme">
                           <span class="fa fa-th"></span>
                           شبكـة
                           </a>
                        </div>
                        <!-- Style Switcher End -->
                     </div>
                  </div>
                  <!-- Middle Content Box -->
                  <div class="col-md-12 col-xs-12 col-sm-12">
                     <div id="products" class=" list-group">
                        <div class="row">
                           <!-- Listing Ad Grid -->
                          <?php include 'scripts/index_1.php';?>
                        </div>
                     </div>
                  </div>
                  <!-- Middle Content Box End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= إعلانات مميزة End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Statistics Counter =-=-=-=-=-=-= -->
         <div class="funfacts custom-padding parallex">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                     <div class="number"><span class="timer" data-from="0" data-to="1238" data-speed="1500" data-refresh-interval="5">0</span>+</div>
                     <h4>عدد لاعلانات <span>في 2D Market</span></h4>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                     <div class="number"><span class="timer" data-from="0" data-to="820" data-speed="1500" data-refresh-interval="5">0</span>+</div>
                     <h4>عدد المستخدمين<span>المسجلين</span></h4>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                     <div class="number"><span class="timer" data-from="0" data-to="1042" data-speed="1500" data-refresh-interval="5">0</span>+</div>
                     <h4>اعلانـات <span>السيارات </span></h4>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                     <div class="number"><span class="timer" data-from="0" data-to="34" data-speed="1500" data-refresh-interval="5">0</span>+</div>
                     <h4>اعلانــات<span>الهواتف</span></h4>
                  </div>
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container -->
         </div>
         <!-- /.funfacts -->
         <!-- =-=-=-=-=-=-= Statistics Counter End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Blog Section =-=-=-=-=-=-= -->
          <section class="custom-padding">
              <!-- Main Container -->
              <div class="container">
                  <!-- Row -->
                  <div class="row">
                      <!-- Heading Area -->
                      <div class="heading-panel">
                          <div class="col-xs-12 col-md-12 col-sm-12">
                              <h3 class="main-title text-left">
                                  الاعلانات المضافة حديثاً
                              </h3>
                          </div>
                      </div>
                      <!-- Middle Content Box -->
                      <div class="col-md-12 col-xs-12 col-sm-12">
                          <div class="row">
                              <div class="featured-slider owl-carousel owl-theme">
                                  <?php include "scripts/index_2.php";?>
                              </div>
                          </div>
                      </div>
                      <!-- Middle Content Box End -->
                  </div>
                  <!-- Row End -->
              </div>
              <!-- Main Container End -->
          </section>
         <!-- =-=-=-=-=-=-= Blog Section End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Partner Section =-=-=-=-=-=-= -->
         <section class="section-padding" id="partner">
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-xs-12  no-padding">
                     <ul>
                        <!-- Partners -->
                        <li class="col-sm-2 col-xs-6 col-md-2">
                           <a href="#"><img class="img-responsive" alt="" src="images/clients/client_5.png"></a>
                        </li>
                        <!-- Partners -->
                        <li class="col-sm-2 col-xs-6 col-md-2">
                           <a href="#"><img class="img-responsive" alt="" src="images/clients/client_6.png"></a>
                        </li>
                        <!-- Partners -->
                        <li class="col-sm-2 col-xs-6 col-md-2">
                           <a href="#"><img class="img-responsive" alt="" src="images/clients/client_7.png"></a>
                        </li>
                        <!-- Partners -->
                        <li class="col-sm-2 col-xs-6 col-md-2">
                           <a href="#"><img class="img-responsive" alt="" src="images/clients/client_8.png"></a>
                        </li>
                        <!-- Partners -->
                        <li class="col-sm-2 col-xs-6 col-md-2">
                           <a href="#"><img class="img-responsive" alt="" src="images/clients/client_9.png"></a>
                        </li>
                        <!-- Partners -->
                        <li class="col-sm-2 col-xs-6 col-md-2">
                           <a href="#"><img class="img-responsive" alt="" src="images/clients/client_10.png"></a>
                        </li>
                     </ul>
                  </div>
               </div>
               <!-- Row End -->
            </div>
            <!-- end container -->
         </section>
         <!-- =-=-=-=-=-=-= Partner Section  End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
         <footer class="footer-area">
            <!--Footer Upper-->
            <div class="footer-content">
               <div class="container">
                  <div class="row clearfix">
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
      <!-- =-=-=-=-=-=-= Main Content Area End =-=-=-=-=-=-= -->
      <!-- Post Ad Sticky -->
      <a href="#" class="sticky-post-button">
         <span class="sell-icons">
         <i class="flaticon-transport-9"></i>
         </span>
         <h4>يبيع</h4>
      </a>
      <a href="#0" class="cd-top">Top</a>
      <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
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
      <!-- Googgle map For THis Page Only -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVj6yChAfe1ilA4YrZgn_UCAnei8AhQxQ&sensor=false"></script>      <script src="js/infobox.js"></script>
      <!-- Parallax -->
      <script src="js/data.json"></script>
      <script src="js/markerclusterer.js"></script>
      <script src="js/markers-map.js"></script>
      <script type="text/javascript">
	      "use strict";
         google.maps.event.addDomListener(window, 'load', speedTest.init);
		 (jQuery);
      </script>
   </body>
</html>

