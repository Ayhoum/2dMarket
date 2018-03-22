<?php
session_start();
require_once "../scripts/db_connection.php";
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
      <!--login script-->
       <script>
           var logIn = function () {
               var email = $("#email_field").val();
               var password = $("#password_field").val();

               if(email == '' || password == ''){
                   $("#fieldsError").modal();
               }else{
                   $.post('scripts/handle_login.php?email=' + email + '&pass=' + password, function (response) {

                       if (response == "done") {
                           window.location.href = "profile.php";
                       } else if(response == "error_password"){
                           $("#modalPassError").modal();

                       }else if(response == "error_username"){
                           $("#modalUserError").modal();

                       }
                   });
               }

           };
       </script>
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
          <?php include "topbar-ar.php";?>
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
                                             <li><a href="login.php">تسجيل الدخول</a></li>
                                             <li><a href="register.php">تسجيل</a></li>
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
                  <div class="header-page text-center">
                     <h1>تسجيل الدخول</h1>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Small Breadcrumb -->
<!--      <div class="small-breadcrumb">-->
<!--         <div class="container">-->
<!--            <div class=" breadcrumb-link">-->
<!--               <ul>-->
<!--                  <li><a href="index.html">Home Page</a></li>-->
<!--                  <li><a href="#">الصفحات</a></li>-->
<!--                  <li><a class="active" href="#">Sign In</a></li>-->
<!--               </ul>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
      <!-- Small Breadcrumb -->
      <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
          <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
          <section class="section-padding-140 error-page pattern-bg " style="margin-top: -60px;">
              <!-- Main Container -->
              <div class="container">
                  <!-- Row -->
                  <div class="row">
                      <!-- Middle Content Area -->
                      <div class="col-sm-offset-0 col-sm-12 col-md-offset-3 col-md-6">
                          <!--  Form -->
                          <div class="form-grid">
                              <form action="#" name="login" id="login_form" method="post" data-toggle="validator">
                                  <div class="form-group">
                                      <label>Email</label>
                                      <input id="email_field" placeholder="Your Email" class="form-control" type="email" name="email">
                                  </div>
                                  <div class="form-group">
                                      <label>Password</label>
                                      <input id="password_field" placeholder="Your Password" class="form-control" type="password" name="password">

                                      <p><b><a href="scripts/RestorePassowrd/resotre_password.php" target="_blank">Have you forgot your password!</a></b></p>
                                  </div>

                                  <button type="button" onclick="logIn();" class="btn btn-theme btn-lg btn-block" name="Log_in">Log In</button>
                              </form>
                          </div>
                          <!-- Form -->
                      </div>
                      <!-- Middle Content Area  End -->
                  </div>
                  <!-- Row End -->
              </div>
              <!-- Main Container End -->
          </section>
          <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
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
                              <!-- Follow Us -->
                              <div class="widget socail-icons">
                                  <h5>Follow Us</h5>
                                  <ul>
                                      <li><a class="fb" href=""><i class="fa fa-facebook"></i></a><span>Facebook</span></li>
                                      <li><a class="twitter" href=""><i class="fa fa-twitter"></i></a><span>Twitter</span></li>
                                      <li><a class="linkedin" href=""><i class="fa fa-linkedin"></i></a><span>Linkedin</span></li>
                                      <li><a class="googleplus" href=""><i class="fa fa-google-plus"></i></a><span>Google+</span></li>
                                  </ul>
                              </div>
                              <!-- Follow Us End -->
                          </div>
                          <div class="col-md-6  col-sm-6 col-xs-12">
                              <!-- Newslatter -->
                              <div class="widget widget-newsletter">
                                  <h5>Singup for Weekly Newsletter</h5>
                                  <div class="fieldset">
                                      <p>We may send you information about related events, webinars, products and services which we believe.</p>
                                      <form>
                                          <input class="" value="Enter your email address" type="text">
                                          <input class="submit-btn" name="submit" value="Submit" type="submit">
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
                                  <p>© 2017 AForest All rights reserved. Design by <a href="http://themeforest.net/user/scriptsbundle/portfolio" target="_blank">Scriptsbundle</a> </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </footer>
          <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
      </div>


      <div class="custom-modal">
          <div id="modalPassError" class="modal fade" role="dialog">
              <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                      <div class="modal-header rte">
                          <h2 class="modal-title text-center">You entered a wrong password!</h2>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-info" data-dismiss="modal">Try again</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="custom-modal">
          <div id="modalUserError" class="modal fade" role="dialog">
              <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                      <div class="modal-header rte">
                          <h2 class="modal-title text-center">Maybe you entered a wrong email</h2>
                          <h2 class="modal-title text-center">Please, check it or make a new account!</h2>
                      </div>
                      <div class="modal-footer">
                          <a href="register.php" type="button" class="btn btn-warning">Register</a>
                          <button type="button" class="btn btn-info" data-dismiss="modal">Try again</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="custom-modal">
          <div id="fieldsError" class="modal fade" role="dialog">
              <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                      <div class="modal-header rte">
                          <h2 class="modal-title text-center">You left something empty!</h2>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-info" data-dismiss="modal">Try again</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Main Content Area End --> 
      <!-- Post Ad Sticky -->
      <a href="#" class="sticky-post-button hidden-xs">
         <span class="sell-icons">
         <i class="flaticon-transport-9"></i>
         </span>
         <h4>يبيع</h4>
      </a>
      <a href="#" class="sticky-post-button hidden-xs">
         <span class="sell-icons">
         <i class="flaticon-transport-9"></i>
         </span>
          <h4>SELL</h4>
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

