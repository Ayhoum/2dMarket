﻿<?php
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
      <title>2D Market | الصفحة الشخصيـة</title>
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
                        <a href="profile.html"><img src="<?php echo $user_pic; ?>" alt=""></a>
                        <div class="profile-detail">
                           <h6><?php echo $user_full_name ;?></h6>
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
                           <li  class="active"><a href="profile.html">الملف الشخصي</a></li>
                           <li ><a href="active-ads.html">الإعلانات الخاصة بي <span class="badge"><?php echo $ad_count; ?></span></a></li>
                           <li><a href="favourite.html">إعلانات مفضلة <span class="badge">15</span></a></li>
                           <li ><a href="messages.html">رسائل</a></li>
                           <li><a href="#">تسجيـل الخروج</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-12 col-xs-12">
                     <!-- Row -->
                     <div class="profile-section margin-bottom-20">
                        <div class="profile-tabs">
                           <ul class="nav nav-justified nav-tabs">
                              <li class="active"><a href="#profile" data-toggle="tab">الملف الشخصي</a></li>
                              <li><a href="#edit" data-toggle="tab">تعديل البيانات الشخصية </a></li>
                           </ul>
                           <div class="tab-content">
                              <div class="profile-edit tab-pane fade in active" id="profile">
                                 <h2 class="heading-md">يمكنك الاطلاع على المعلومات الخاصة بك هنـا : </h2>
                                 <dl class="dl-horizontal">
                                    <dt><strong>الاسـم الكـامل : </strong></dt>
                                    <dd>
                                        <?php echo  $user_full_name ;?>
                                    </dd>
                                    <dt><strong>البريد الإلكتروني : </strong></dt>
                                    <dd>
                                        <?php echo  $user_email ;?>
                                    </dd>
                                    <dt><strong>رقم الهاتـف : </strong></dt>
                                    <dd>
                                        <?php echo $user_phone ;?>
                                    </dd>
                                    <dt><strong>اسـم المسـتخدم : </strong></dt>
                                    <dd>
                                        <?php echo $user_username ;?>
                                    </dd>
                                    <dt><strong>العنـوان : </strong></dt>
                                    <dd>
                                        <?php echo $user_street_name." ".$user_house_number."<br> ".$user_postcode . ", ". $user_region;?>
                                    </dd>
                                 </dl>
                              </div>
                               <script>
                                   function populate(s1,s2){
                                       var s1 = document.getElementById(s1);
                                       var s2 = document.getElementById(s2);
                                       s2.innerHTML = "";


                                       if(s1.value == "drenthe"){
                                           var optionArray = ["|","assen|Assen","coevorden|Coevorden","hoogeveen|Hoogeveen","meppel|Meppel",];
                                       } else if(s1.value == "flevoland"){
                                           var optionArray = ["|","almere|Almere","biddinghuizen|Biddinghuizen","emmeloord|Emmeloord","lelystad|Lelystad"];
                                       }else if(s1.value == "friesland") {
                                           var optionArray = ["|", "bolsward|Bolsward", "dokkum|Dokkum", "drachten|Drachten", "franeker|Franeker",
                                               "harlingen|Harlingen", "heerenveen|Heerenveen", "hindeloopen|Hindeloopen", "iJlst|IJlst",
                                               "leeuwarden|Leeuwarden", "sloten|Sloten", "sneek|Sneek", "stavoren|Stavoren", "workum|Workum"];
                                       }

// }else if(s1.value== "gelderland"){
//            var optionArray = [];
//        }else if(s1.value== "groningen"){
//            var optionArray = [];
//        }else if(s1.value== "limburg"){
//            var optionArray = [];
//        }else if(s1.value== "northBrabant"){
//            var optionArray = [];
//        }else if(s1.value== "northHolland"){
//            var optionArray = [];
//        }else if(s1.value== "Overijssel"){
//            var optionArray = [];
//        }else if(s1.value== "southHolland"){
//            var optionArray = [];
//        }else if(s1.value== "utrecht"){
//            var optionArray = [];
//        }else if(s1.value== "zeeland"){
//            var optionArray = [];
//        }

                                       for(var option in optionArray){
                                           var pair = optionArray[option].split("|");
                                           var newOption = document.createElement("option");
                                           newOption.value = pair[0];
                                           newOption.innerHTML = pair[1];
                                           s2.options.add(newOption);
                                       }


                                   }


                               </script>
                               <div class="profile-edit tab-pane fade" id="edit">
                                 <h2 class="heading-md">تعديـل بياناتك الخـاصة : </h2>
                                 <div class="clearfix"></div>
                                  <form method="post" action="scripts/edit_profile_info.php" >
                                      <div class="row">
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                              <label>الاسـم :  </label>
                                              <input type="text" name="first_name" class="form-control margin-bottom-20">
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                              <label>الكنيـة : </label>
                                              <input type="text" name="last_name" class="form-control margin-bottom-20">
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                              <label>كلمة المرور : </label>
                                              <input type="password" name="password" class="form-control margin-bottom-20">
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                              <label>رقم الهاتـف : <span class="color-red">*</span></label>
                                              <input type="text" name="phone_number" class="form-control margin-bottom-20">
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
                                              <label>المحافظـة : <span class="color-red">*</span></label>
                                              <select class="form-control" id="slct1" name="slct1" onchange="populate(this.id,'slct2')">
                                                  <option value="drenthe">Drenthe</option>
                                                  <option value="flevoland">Flevoland</option>
                                                  <option value="friesland">Friesland</option>
                                                  <option value="gelderland">Gelderland</option>
                                                  <option value="groningen">Groningen</option>
                                                  <option value="limburg">Limburg</option>
                                                  <option value="northBrabant">NorthBrabant</option>
                                                  <option value="northHolland">NorthHolland</option>
                                                  <option value="Overijssel">Overijssel</option>
                                                  <option value="southHolland">SouthHolland</option>
                                                  <option value="utrecht">Utrecht</option>
                                                  <option value="zeeland">Zeeland</option>
                                              </select>

                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
                                              <label>المدينـة :  <span class="color-red">*</span></label>
                                              <select class="form-control"   id="slct2" name="slct2">
                                              </select>
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                              <label>صندوق البريـد :</label>
                                              <input type="text" name="postcode" class="form-control margin-bottom-20">
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                              <label>اسم الشـارع :</label>
                                              <input type="text" name="street_name" class="form-control margin-bottom-20">
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                              <label>رقم المنزل : </label>
                                              <input type="text" name="house_number" class="form-control margin-bottom-20">
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                              <label>رقم المنزل الاضافي :</label>
                                              <input type="text" name="extra_house_number" class="form-control margin-bottom-20">
                                          </div>


                                          <div class="row">
                                              <div class="col-md-4 col-sm-4 col-xs-12 text-left">
                                                  <button type="submit" class="btn btn-theme btn-sm" name="update">تحديث بيـاناتي </button>
                                              </div>
                                          </div>
                                  </form>
                              </div>
                              <div class="profile-edit tab-pane fade" id="payment">
                                 <h2 class="heading-md">Manage your Package Settings</h2>
                                 <p>Below are the payment options for your account.</p>
                                 <br>
                                 <form action="#" id="sky-form" class="sky-form" novalidate>
                                    <!--Checkout-Form-->
                                    <dl class="dl-horizontal">
                                       <dt><strong>Current Plan</strong></dt>
                                       <dd>
                                          Premium
                                       </dd>
                                       <dt><strong>Expiration Date </strong></dt>
                                       <dd>
                                          2nd January 2017
                                       </dd>
                                    </dl>
                                    <div class="row">
                                       <div class="col-sm-12 col-md-12 margin-bottom-20">
                                          <label>حدد خطة You Want To Change<span class="color-red">*</span></label>
                                          <select class="form-control">
                                             <option value="0">Free</option>
                                             <option value="1">Premium</option>
                                             <option value="2">Advanced</option>
                                          </select>
                                       </div>
                                    </div>
                                    <button class="btn btn-sm btn-default" type="button">Cancel</button>
                                    <button type="submit" class="btn btn-sm btn-theme">Save Changes</button>
                                    <!--End Checkout-Form-->
                                 </form>
                              </div>
                              <div class="profile-edit tab-pane fade" id="settings">
                                 <h2 class="heading-md">Manage your Notifications.</h2>
                                 <p>Below are the notifications you may manage.</p>
                                 <br>
                                 <form>
                                    <div class="skin-minimal">
                                       <ul class="list">
                                          <li>
                                             <input  type="checkbox" id="minimal-checkbox-1">
                                             <label for="minimal-checkbox-1">Send me email notification when Ad is processed</label>
                                          </li>
                                          <li>
                                             <input  type="checkbox" id="minimal-checkbox-2">
                                             <label for="minimal-checkbox-2">Send me email notification when user comment</label>
                                          </li>
                                          <li>
                                             <input  type="checkbox" id="minimal-checkbox-3">
                                             <label for="minimal-checkbox-3">Send me email notification for the latest update</label>
                                          </li>
                                          <li>
                                             <input  type="checkbox" id="minimal-checkbox-4">
                                             <label for="minimal-checkbox-4"> Receive our monthly newsletter</label>
                                          </li>
                                          <li>
                                             <input  type="checkbox" id="minimal-checkbox-5">
                                             <label for="minimal-checkbox-5">Email notification</label>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="button-group margin-top-20">
                                       <button class="btn btn-sm btn-default" type="button">Reset</button>
                                       <button type="submit" class="btn btn-sm btn-theme">Save Changes</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
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

