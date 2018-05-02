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
          <div id="loader"><img class="img-responsive"  src="images/design.gif">
              <h4 class="text-center" style="color: #00a9da"> Loading..</h4> </div>
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
                  <div class="itemFill imgLiquid item active" style="width:100%; height:400px;">
                      <img style="width: 100%; height: 100%; object-fit: cover;" src="images/New%20folder/comprar-e-vender-dolares-e-investimento-933x445.jpeg" alt="">
                  </div>

                  <div class="itemFill imgLiquid item" style="width:100%; height:400px;">
                      <img style="width: 100%; height: 100%; object-fit: cover;" src="images/New%20folder/compraSegura.png" alt="">
                  </div>

                  <div class="itemFill imgLiquid item" style="width:100%; height:400px;">
                      <img style="width: 100%; height: 100%; object-fit: cover;" src="images/New%20folder/comprar-por-internet-barato-y-seguro-800x410.jpg" alt="">
                  </div>

                  <div class="itemFill imgLiquid item" style="width:100%; height:400px;">
                      <img style="width: 100%; height: 100%; object-fit: cover;" src="images/New%20folder/ecommerce-marketing-automation-best-practices-1.jpg" alt="">
                  </div>

                  <div class="itemFill imgLiquid item" style="width:100%; height:400px;">
                      <img style="width: 100%; height: 100%; object-fit: cover;" src="images/New%20folder/shoping-on-line.jpg" alt="">
                  </div>
              </div>

              <!-- Left and right controls -->
<!--              <a class="left carousel-control" href="#myCarousel" data-slide="prev">-->
<!--                  <span class="glyphicon glyphicon-chevron-left"></span>-->
<!--                  <span class="sr-only">Previous</span>-->
<!--              </a>-->
<!--              <a class="right carousel-control" href="#myCarousel" data-slide="next">-->
<!--                  <span class="glyphicon glyphicon-chevron-right"></span>-->
<!--                  <span class="sr-only">Next</span>-->
<!--              </a>-->
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
                     <span class="price-slider-value">المسافة (كـم) <span id="price-min"></span> - <span id="price-max"></span></span>
                     <div id="price-slider"></div>
                  </div>
                  <!-- Search Button -->
                  <div class="col-md-3 col-xs-12 col-sm-3">
                     <button type="submit" class="btn btn-block btn-light">ابحث</button>
                  </div>
                  <!-- end .item -->
                   <div class="hero-form-sub">
                       <strong class="hidden-sm-down">اشهر عمليات البحث</strong>
                       <ul>
                           <li><a href="pop_search.php?tag=Iphone 7">ايفون 7</a></li>
                           <li><a href="pop_search.php?tag=Cars">سيارات</a></li>
                           <li><a href="pop_search.php?tag=Samsung S8">سامسونج اس 8</a></li>
                           <li><a href="pop_search.php?tag=Wash Machine">غسالات</a></li>
                           <li><a href="pop_search.php?tag=Shorts">ملابس رجالية</a></li>
                           <li><a href="pop_search.php?tag=Bike">العاب اطفال</a></li>
                           <li><a href="pop_search.php?tag=Laptop">لابتوب</a></li>
                           <li><a href="pop_search.php?tag=Xbox Games">العاب اكس بوكس</a></li>
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
         <section class="custom-padding gray ">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Category -->
                   <ul class="category-list-style" style="direction: rtl">
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
                               <a href="ad_per_cat.php?cat_id=<?php echo $id; ?>"><?php echo $name;?><span>(<?php echo $cat_count; ?>  اعلان )</span>
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
                     <div class="parallex-button"> <a href="<?php if (isset($_SESSION['username'])) {?>new_advertisement.php<?php } else {echo "login.php"; } ?>" class="btn btn-theme">انشر إعلانك مجانا <i class="fa fa-angle-double-right "></i></a> </div>
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
                           إعلانات جديدة
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
<!--                                  --><?php //include "scripts/index_2.php";?>
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

