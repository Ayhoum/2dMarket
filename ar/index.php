<?php
session_start();
ob_start();
require_once '../scripts/db_connection.php';
require_once "scripts/time_elapse.php";
?>

<!DOCTYPE html>
<html lang="ar">
   <head>
       <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
       <script>
           (adsbygoogle = window.adsbygoogle || []).push({
               google_ad_client: "ca-pub-5850194650079393",
               enable_page_level_ads: true
           });
       </script>
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
   <body class="rtl">
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
      <!-- =-=-=-=-=-=-= Listing Map =-=-=-=-=-=-= -->
      <section class="clearfix">
<!--         <div class="map">-->
<!--            <div id="map"></div>-->
<!--         </div>-->

          <div id="myCarousel" class="carousel slide" data-ride="carousel">

              <!-- Wrapper for slides -->
              <div class="carousel-inner" >

                  <div class="itemFill imgLiquid item active" style="width:100%; height:600px;">
                      <img src="../slider/2.jpg" alt="Chicago">
                  </div>

                  <div class="itemFill imgLiquid item" style="width:100%; height:600px;">
                      <img src="../slider/3.jpg" alt="New York">
                  </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-triangle-left" style="position: absolute;top: 50%;z-index: 5;display: inline-block;margin-top: -10px;"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-triangle-right" style="position: absolute;top: 50%;z-index: 5;display: inline-block;margin-top: -10px;"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
          <!-- end map -->
      </section>
      <!-- =-=-=-=-=-=-= Listing Map End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Advance Search =-=-=-=-=-=-= -->
      <section class="search-2">
         <div class="container">
            <!-- Title -->
            <div class="col-md-12 col-sm-12 col-xs-12 no-padding">
               <div class="search-title">استعرض الإعلانات</div>
            </div>
             <div class="row" style="margin-left: 0;margin-right: 0;">
               <form method="post" class="search-form">
                  <!-- Category -->
                  <div class="col-md-3 col-xs-12 col-sm-3">
                      <select name="cat" class="category form-control" id="catSelect" required>
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
                      <input type="text" name="query" id="querySearch" class="form-control" placeholder="عن ماذا تريد البحث..." required/>
                  </div>
                  <!-- Price Range SLider -->
                   <div class="col-md-3 col-xs-12 col-sm-6">
                       <span class="price-slider-value">المسافة (Km) - <input type="text" name="dis" id="dis-min" style="width:110px;color: #fff;background: #363c48;border: 0;" readonly="true" required> </span>
                       <input type="text" id="example_id" name="example_name" value="" />
                   </div>
                  <!-- Search Button -->
                  <div class="col-md-3 col-xs-12 col-sm-3">
                      <button type="button" name="submit" onclick="submitBut();" id="submitSearch" class="btn btn-light">بحث</button>
                  </div>
                  <!-- end .item -->
             </div>
             <div class="row">
                   <div class="hero-form-sub">
                       <strong class="hidden-sm-down">أشهر عمليات البحث</strong>
                       <ul>
                           <li><a href="pop_search.php?tag=Iphone 7">Iphone 7</a></li>
                           <li><a href="pop_search.php?tag=سيارات">سيارات</a></li>
                           <li><a href="pop_search.php?tag=سامسونج S8">سامسونج S8</a></li>
                           <li><a href="pop_search.php?tag=غسالة">غسالة</a></li>
                           <li><a href="pop_search.php?tag=شاشة">شاشة</a></li>
                           <li><a href="pop_search.php?tag=دراجات">دراجات</a></li>
                           <li><a href="pop_search.php?tag=لابتوب">لابتوب</a></li>
                           <li><a href="pop_search.php?tag=ألعاب إكسبوكس">ألعاب إكسبوكس</a></li>
                       </ul>
                   </div>
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
                      <ul class="category-list-style">
                          <!-- Category -->
                          <!-- Category List -->
                          <?php

                          $query = "SELECT * FROM `CATEGORY` WHERE `lang` = 'AR' LIMIT 8";
                          $result = mysqli_query($mysqli, $query);
                          While($row = mysqli_fetch_assoc($result)){
                              $id = $row['id'];
                              $name = $row['name'];
                              $icon = $row['icon_name'];

                              $count_query = "SELECT COUNT(*) AS 'CAT_count' FROM `ADVERTISEMENT` WHERE CATEGORY_id = '{$id}' ";
                              $count_result = mysqli_query($mysqli,$count_query);
                              while ($row = mysqli_fetch_assoc($count_result)){
                                  $cat_count = $row['CAT_count'];
                              }
                              ?>

                              <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                  <a href="ad_per_cat.php?cat_id=<?php echo $id; ?>"><?php echo $name;?><span>(<?php echo $cat_count; ?> إعلانات)</span>
                                      <i class="<?php echo $icon;?>"></i>
                                  </a>
                              </li>

                          <?php }?>
                      </ul>
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
                     <div class="parallex-button"> <a href="login.php" class="btn btn-theme">انشر إعلانك مجانا <i class="fa fa-angle-double-left "></i></a> </div>
                     <!-- end parallex-button -->
                  </div>
                  <!-- end col-md-4 -->
               </div>
               <!-- end row -->
            </div>
            <!-- end container -->
         </div>
         <!-- =-=-=-=-=-=-= Call to Action =-=-=-=-=-=-= -->
          <!-- =-=-=-=-=-=-= Abs By Countries =-=-=-=-=-=-= -->
          <?php include 'scripts/index_ads_per_cont.php';?>
          <!-- =-=-=-=-=-=-= Abs By Countries End =-=-=-=-=-=-= -->
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
      <a href="<?php if (isset($_SESSION['id'])){echo "new_advertisement.php";  } else { echo "login.php"; }?>" class="sticky-post-button hidden-xs">
         <span class="sell-icons">
         <i class="flaticon-transport-9"></i>
         </span>
          <h4>قم بالبيع الان</h4>
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


          var latVal;
          var lonVal;

          function setCookie(cname, cvalue, exdays) {
              var d = new Date();
              d.setTime(d.getTime() + (exdays*60*60*24*1000));
              var expires = "expires="+ d.toUTCString();
              document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
          }

          navigator.geolocation.getCurrentPosition(function(position) {
              latVal = position.coords.latitude;
              lonVal = position.coords.longitude;
              setCookie("longC",lonVal,2);
              setCookie("latiC",latVal,2);
          });



      </script>
      <script>
          var stepSliderValueElement = document.getElementById('dis-min');
          stepSliderValueElement.value = 10;
          $("#example_id").ionRangeSlider({
              grid: false,
              min: 10,
              max: 100,
              from: 0,
              step: 10,
              hide_min_max: true,
              prettify_enabled: false,
              onChange: function (data) {
                  stepSliderValueElement.value = data.from;
              }
          });


          var cat;
          var query;
          var dis;
          var order;
          var price;

          var submitBut = function () {
              cat   = $("#catSelect").val();
              query = $("#querySearch").val();
              dis   = $("#price-min").val();
              order = "latest";
              price = "all";
              if(cat == null || cat == "dis"){
                  $(".select2Class").addClass('shadow');
              }
              if(query == ""){
                  $("#querySearch").addClass('shadow');
              }
              if(dis == 0.00){
                  $(".noUi-connects").addClass('shadow');
              }
              if(cat != null && cat != "dis" && query != "" && dis != 0.00){



                  window.open("search_result.php?order=" + order + "&dis=" + dis + "&query=" + query + "&cat=" + cat + "&price=" + price,"_self");
              }
          };

      </script>
   </body>
</html>

