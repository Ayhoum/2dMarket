<?php
session_start();
ob_start();
require_once '../scripts/db_connection.php';
require_once "scripts/time_elapse.php";
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
       <link href="css/ion.rangeSlider.css" rel="stylesheet">
       <link href="css/ion.rangeSlider.skinRound.css" rel="stylesheet">
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
       <style>
           .shadow{
               box-shadow: 0 0 12px red;
           }
           .carousel-control.left, .carousel-control.right {
               background-image: none
           }
       </style>
       <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
       <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
       <script>
           window.addEventListener("load", function(){
               window.cookieconsent.initialise({
                   "palette": {
                       "popup": {
                           "background": "#252e39"
                       },
                       "button": {
                           "background": "#14a7d0"
                       }
                   },
                   "theme": "edgeless",
                   "position": "bottom-right",
                   "type": "opt-in",
                   "content": {
                       "message": "هذا الموقع يستخدم الكوكيز لتأمين افضل خدمة ممكنة لكم",
                       "dismiss": "حسنـاً",
                       "allow": "السمـاح للكوكيز",
                       "link": "مشاهدة المزيـد",
                       "href": "www.2dmarket.com/ar/cookies.php"
                   }
               })});
       </script>
   </head>
   <body class="rtl loaded">
      <!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
      <div id="loader-wrapper">
          <div id="loader"><img class="img-responsive"  src="images/design.gif">
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

          <?php include "nav_bar_ar.php";?>
      </div>
      <!-- Navigation Menu End -->
      <!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <section class="custom-padding white categories">
              <!-- Main Container -->
              <div class="container">
                  <div class="row">
                      <script type="text/javascript">
                          google_ad_client = "ca-pub-5850194650079393";
                          google_ad_slot = "4488709505";
                          google_ad_width = 970;
                          google_ad_height = 250;
                      </script>
                      <!-- H -->
                      <script type="text/javascript"
                              src="//pagead2.googlesyndication.com/pagead/show_ads.js">
                      </script>
                  </div>
              </div>
              <!-- Main Container End -->
          </section>
         <!-- =-=-=-=-=-=-= الفئات =-=-=-=-=-=-= -->

          <section class="section-padding gray">
              <!-- Main Container -->
              <div class="container" style="direction: rtl">
                  <!-- Row -->
                  <div class="row">
                      <!-- Heading Area -->
                      <div class="heading-panel">
                          <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                              <!-- Main Title -->
                              <h1> كيفية العمل على موقعنـا <span class="heading-color"> 2Dmarket </span></h1>
                              <!-- Short Description -->
                              <p class="heading-text">استخدام موقعنا سهل جداً وسلس!</p>
                          </div>
                      </div>
                      <!-- Middle Content Box -->
                      <div class="col-xs-12 col-md-12 col-sm-12 ">
                          <div class="row">
                              <div class="how-it-work text-center">
                                  <div class="how-it-work-icon"> <i class="flaticon-people"></i> </div>
                                  <h4>أنشئ حسابك</h4>
                                  <p> يمكنك انشاء حساب على موقعنا من خلال الذهاب الى صفحة<a href="login.php"> تسجيل الدخول والضغط على تبوبية حساب جديد </a>  </p>
                              </div>
                              <div class="how-it-work text-center ">
                                  <div class="how-it-work-icon"> <i class="flaticon-people-2"></i> </div>
                                  <h4>انشر إعلانك مجانا</h4>
                                  <p>بعد انتهائك من تسجيل الدخول يمكنك البدء بعملية بيع المنتجات من خلال الضغط على <a href="new_advertisement.php"> اضافة اعلان جديد</a> ومن ثم يمكنك ملئ الحقول ومن ثم نشر الاعلان. </p>
                              </div>
                              <div class="how-it-work text-center">
                                  <div class="how-it-work-icon "> <i class="flaticon-heart-1"></i> </div>
                                  <h4>تم البيـع</h4>
                                  <p>بعد انتهائك من نشر اعلاناتك يمكنك التواصل مع المستخدمية الاخرين من خلال استخدام خاصية الراسائل ومن ثم الاتفاق على عملية البيع.</p>
                              </div>
                          </div>
                      </div>
                      <!-- Middle Content Box End -->
                  </div>
                  <!-- Row End -->
              </div>
              <!-- Main Container End -->
          </section>

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
                           أخر الاعلانـات
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
                      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                      <!-- AD Index -->
                      <ins class="adsbygoogle"
                           style="display:block"
                           data-ad-client="ca-pub-5850194650079393"
                           data-ad-slot="9864365708"
                           data-ad-format="auto"></ins>
                      <script>
                          (adsbygoogle = window.adsbygoogle || []).push({});
                      </script>
                  </div>
                  <!-- Middle Content Box End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= إعلانات مميزة End =-=-=-=-=-=-= -->
          <?php include "scripts/index_3.php";?>
          <!-- =-=-=-=-=-=-= Abs By Countries =-=-=-=-=-=-= -->
          <?php include 'scripts/index_ads_per_cont.php';?>
          <!-- =-=-=-=-=-=-= Abs By Countries End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Statistics Counter =-=-=-=-=-=-= -->
         <div class="funfacts custom-padding parallex">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                     <div class="number"><span class="timer" data-from="0" data-to="1238" data-speed="1500" data-refresh-interval="5">0</span>+</div>
                     <h4>عدد لاعلانات <span>في 2D Market </span></h4>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                     <div class="number"><span class="timer" data-from="0" data-to="820" data-speed="1500" data-refresh-interval="5">0</span>+</div>
                     <h4> عدد المستخدمين<span> المسجلين </span></h4>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                     <div class="number"><span class="timer" data-from="0" data-to="1042" data-speed="1500" data-refresh-interval="5">0</span>+</div>
                     <h4>اعلانـات <span> السيارات </span></h4>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                     <div class="number"><span class="timer" data-from="0" data-to="34" data-speed="1500" data-refresh-interval="5">0</span>+</div>
                     <h4>اعلانــات<span> الهواتف </span></h4>
                  </div>
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container -->
         </div>
         <!-- /.funfacts -->
         <!-- =-=-=-=-=-=-= Statistics Counter End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Blog Section =-=-=-=-=-=-= -->
<!--          <section class="custom-padding">-->
<!--              <!-- Main Container -->
<!--              <div class="container">-->
<!--                  <!-- Row -->
<!--                  <div class="row">-->
<!--                      <!-- Heading Area -->
<!--                      <div class="heading-panel">-->
<!--                          <div class="col-xs-12 col-md-12 col-sm-12">-->
<!--                              <h3 class="main-title text-left">-->
<!--                                  الاعلانات المضافة حديثاً-->
<!--                              </h3>-->
<!--                          </div>-->
<!--                      </div>-->
<!--                      <!-- Middle Content Box -->
<!--                      <div class="col-md-12 col-xs-12 col-sm-12">-->
<!--                          <div class="row">-->
<!--                              <div class="featured-slider owl-carousel owl-theme">-->
<!--                                  --><?php //include "scripts/index_2.php";?>
<!--                              </div>-->
<!--                          </div>-->
<!--                      </div>-->
<!--                      <!-- Middle Content Box End -->
<!--                  </div>-->
<!--                  <!-- Row End -->
<!--              </div>-->
<!--              <!-- Main Container End -->
<!--          </section>-->
         <!-- =-=-=-=-=-=-= Blog Section End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Partner Section =-=-=-=-=-=-= -->
<!--         <section class="section-padding" id="partner">-->
<!--            <div class="container">-->
<!--               <!-- Row -->
<!--               <div class="row">-->
<!--                  <div class="col-sm-12 col-md-12 col-xs-12  no-padding">-->
<!--                     <ul>-->
<!--                        <!-- Partners -->
<!--                        <li class="col-sm-2 col-xs-6 col-md-2">-->
<!--                           <a href="#"><img class="img-responsive" alt="" src="images/clients/client_5.png"></a>-->
<!--                        </li>-->
<!--                        <!-- Partners -->
<!--                        <li class="col-sm-2 col-xs-6 col-md-2">-->
<!--                           <a href="#"><img class="img-responsive" alt="" src="images/clients/client_6.png"></a>-->
<!--                        </li>-->
<!--                        <!-- Partners -->
<!--                        <li class="col-sm-2 col-xs-6 col-md-2">-->
<!--                           <a href="#"><img class="img-responsive" alt="" src="images/clients/client_7.png"></a>-->
<!--                        </li>-->
<!--                        <!-- Partners -->
<!--                        <li class="col-sm-2 col-xs-6 col-md-2">-->
<!--                           <a href="#"><img class="img-responsive" alt="" src="images/clients/client_8.png"></a>-->
<!--                        </li>-->
<!--                        <!-- Partners -->
<!--                        <li class="col-sm-2 col-xs-6 col-md-2">-->
<!--                           <a href="#"><img class="img-responsive" alt="" src="images/clients/client_9.png"></a>-->
<!--                        </li>-->
<!--                        <!-- Partners -->
<!--                        <li class="col-sm-2 col-xs-6 col-md-2">-->
<!--                           <a href="#"><img class="img-responsive" alt="" src="images/clients/client_10.png"></a>-->
<!--                        </li>-->
<!--                     </ul>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <!-- Row End -->
<!--            </div>-->
<!--            <!-- end container -->
<!--         </section>-->
         <!-- =-=-=-=-=-=-= Partner Section  End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
         <?php include 'footer.php';?>
         <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
      </div>
      <!-- =-=-=-=-=-=-= Main Content Area End =-=-=-=-=-=-= -->
      <!-- Post Ad Sticky -->
<!--      <a href="--><?php //if (isset($_SESSION['id'])){echo "new_advertisement.php";  } else { echo "login.php"; }?><!--" class="sticky-post-button hidden-xs">-->
<!--         <span class="sell-icons">-->
<!--         <i class="flaticon-transport-9"></i>-->
<!--         </span>-->
<!--          <h4>قم بالبيع الان</h4>-->
<!--      </a>-->
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
      <script src="js/ion.rangeSlider.js"></script>
      <script src="js/ion.rangeSlider.min.js"></script>
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
      <script>
          $(function() {

              $(".itemFill").imgLiquid({
                  fill: true,
                  horizontalAlign: "center",
                  verticalAlign: "center"
              });

          });


          var lonVal;
          var latVal;

          function setCookie(cname, cvalue, exdays) {
              var d = new Date();
              d.setTime(d.getTime() + (exdays*60*60*24*1000));
              var expires = "expires="+ d.toUTCString();
              document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
          }


          function getCookie(name) {
              var dc = document.cookie;
              var prefix = name + "=";
              var begin = dc.indexOf("; " + prefix);
              if (begin == -1) {
                  begin = dc.indexOf(prefix);
                  if (begin != 0) return null;
              }
              else
              {
                  begin += 2;
                  var end = document.cookie.indexOf(";", begin);
                  if (end == -1) {
                      end = dc.length;
                  }
              }
              // because unescape has been deprecated, replaced with decodeURI
              //return unescape(dc.substring(begin + prefix.length, end));
              return decodeURI(dc.substring(begin + prefix.length, end));
          }



          navigator.geolocation.getCurrentPosition(function(position) {
              latVal = position.coords.latitude;
              lonVal = position.coords.longitude;
              setCookie("longC",lonVal,2);
              setCookie("latiC",latVal,2);
          });

          var myLat = getCookie("latiC");
          var myLon = getCookie("longC");

          if ((myLat === undefined && myLon === undefined) || (myLat === null && myLon === null)) {
              lonVal = 5.9447851;
              latVal = 52.2114194;
              setCookie("longC",lonVal,2);
              setCookie("latiC",latVal,2);
          }

          myLat = getCookie("latiC");
          myLon = getCookie("longC");



      </script>
   </body>
</html>

