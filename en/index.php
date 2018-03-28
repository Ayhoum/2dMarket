
<?php
session_start();
ob_start();
require_once "../scripts/db_connection.php";
require_once "scripts/time_elapse.php";



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
      <title>2D Market | Home Page </title>
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
      <!-- JavaScripts -->
      <script src="js/modernizr.js"></script>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
      <div id="loader-wrapper">
         <div id="loader"></div>
         <div class="loader-section section-left"></div>
         <div class="loader-section section-right"></div>
      </div>
      <!-- =-=-=-=-=-=-= Light Header =-=-=-=-=-=-= -->
      <div class="colored-header">
         <!-- Top Bar -->
          <?php include 'topbar-en.php';?>
         <!-- Top Bar End -->
         <!-- Navigation Menu -->

          <?php include "nav_bar_en.php";?>
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
               <form method="post" class="search-form" action="search_result.php">
                  <!-- Category -->
                  <div class="col-md-3 col-xs-12 col-sm-3">
                     <select name="cat" class="category form-control">
                        <option label="Select Option"></option>
                         <?php
                         // GET ALL CATEGORIES from DB
                         $cat_query= "SELECT * FROM `CATEGORY` WHERE `lang` = 'EN' ORDER BY `name` ASC  ";
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
                     <input type="text" name="query" class="form-control" placeholder="What Are You Looking For..." />
                  </div>
                  <!-- Price Range SLider -->
                  <div class="col-md-3 col-xs-12 col-sm-3">
                     <span class="price-slider-value">Distance (Km) - <input type="text" name="dis" id="price-min" style="width:110px;color: #fff;background: #363c48;border: 0;" readonly="true"> </span>
                     <div id="price-slider"></div>
                  </div>
                  <!-- Search Button -->
                  <div class="col-md-3 col-xs-12 col-sm-3">
                     <button type="submit" name="submit" class="btn btn-light">Search</button>
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
         <!-- =-=-=-=-=-=-= Categories =-=-=-=-=-=-= -->
         <section class="custom-padding gray categories">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Category -->
                  <div class="col-md-3 col-sm-6">
                     <div class="box">
                        <img alt="img" src="images/category/cars.png">
                        <h4><a href="#">Cars & Bikes</a></h4>
                        <strong>1,265 Jobs</strong> 
                     </div>
                  </div>
                  <!-- Category -->
                  <div class="col-md-3 col-sm-6">
                     <div class="box">
                        <img alt="img" src="images/category/mobile-1.png">
                        <h4><a href="#">Mobile Phones</a></h4>
                        <strong>1,265 Ads</strong> 
                     </div>
                  </div>
                  <!-- Category -->
                  <div class="col-md-3 col-sm-6">
                     <div class="box">
                        <img alt="img" src="images/category/applinces.png">
                        <h4><a href="#">Home Appliances</a></h4>
                        <strong>6,213 Ads</strong> 
                     </div>
                  </div>
                  <!-- Category -->
                  <div class="col-md-3 col-sm-6">
                     <div class="box">
                        <img alt="img" src="images/category/cloths.png">
                        <h4><a href="#">Clothing</a></h4>
                        <strong>3,750 Ads</strong> 
                     </div>
                  </div>
                  <!-- Category -->
                  <div class="col-md-3 col-sm-6">
                     <div class="box">
                        <img alt="img" src="images/category/education.png">
                        <h4><a href="#">Education & Art</a></h4>
                        <strong>5,913 Ads</strong> 
                     </div>
                  </div>
                  <!-- Category -->
                  <div class="col-md-3 col-sm-6">
                     <div class="box">
                        <img alt="img" src="images/category/computer-1.png">
                        <h4><a href="#">Computer & Laptops</a></h4>
                        <strong>9,942 Ads</strong> 
                     </div>
                  </div>
                  <!-- Category -->
                  <div class="col-md-3 col-sm-6">
                     <div class="box">
                        <img alt="img" src="images/category/pets.png">
                        <h4><a href="#">Pets & Animals</a></h4>
                        <strong>3,891 Ads</strong> 
                     </div>
                  </div>
                  <!-- Category -->
                  <div class="col-md-3 col-sm-6">
                     <div class="box">
                        <img alt="img" src="images/category/newspaper.png">
                        <h4><a href="#">Newspaper Jobs</a></h4>
                        <strong>7,418 Ads</strong> 
                     </div>
                  </div>
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Categories =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Call to Action =-=-=-=-=-=-= -->
         <div class="parallex bg-img-3  section-padding">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 col-sm-12">
                     <div class="call-action">
                        <i class="flaticon-shapes"></i>
                        <h4>Post featured ad and get great exposure </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                     </div>
                     <!-- end subsection-text -->
                  </div>
                  <!-- end col-md-8 -->
                  <div class="col-md-4 col-sm-12">
                     <div class="parallex-button"> <a href="#" class="btn btn-theme">Post Free Ad <i class="fa fa-angle-double-right "></i></a> </div>
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
         <!-- =-=-=-=-=-=-= Featured Ads =-=-=-=-=-=-= -->
         <section class="custom-padding">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Heading Area -->
                  <div class="heading-panel">
                     <div class="col-xs-12 col-md-12 col-sm-12">
                        <h3 class="main-title text-left">
                           Featured Ads
                        </h3>
                        <!-- Style Switcher -->
                        <div class="switcher pull-right">
                           <a href="#" id="list" class="btn btn-theme">
                           <span class="fa fa-list"></span>
                           List
                           </a> 
                           <a href="#" id="grid" class="btn active btn-theme">
                           <span class="fa fa-th"></span>
                           Grid
                           </a>
                        </div>
                        <!-- Style Switcher End -->
                     </div>
                  </div>
                  <!-- Middle Content Box -->
                  <div class="col-md-12 col-xs-12 col-sm-12">
                     <div id="products" class=" list-group">
                        <div class="row">
                           <?php
                           include 'scripts/index_1.php';
                           ?>
                        </div>
                     </div>
                  </div>
                  <!-- Middle Content Box End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Featured Ads End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Statistics Counter =-=-=-=-=-=-= -->
         <div class="funfacts custom-padding parallex">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                     <div class="number"><span class="timer" data-from="0" data-to="1238" data-speed="1500" data-refresh-interval="5">0</span>+</div>
                     <h4>Total <span>Cars</span></h4>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                     <div class="number"><span class="timer" data-from="0" data-to="820" data-speed="1500" data-refresh-interval="5">0</span>+</div>
                     <h4>Hose For <span>Sale</span></h4>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                     <div class="number"><span class="timer" data-from="0" data-to="1042" data-speed="1500" data-refresh-interval="5">0</span>+</div>
                     <h4>Active <span>Users</span></h4>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                     <div class="number"><span class="timer" data-from="0" data-to="34" data-speed="1500" data-refresh-interval="5">0</span>+</div>
                     <h4>Featured <span>Jobs</span></h4>
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
                                  Latest Ads
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
         <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
          <?php include 'footer.php';?>
         <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
      </div>
      <!-- =-=-=-=-=-=-= Main Content Area End =-=-=-=-=-=-= -->
      <!-- Post Ad Sticky -->
      <a href="#" class="sticky-post-button">
         <span class="sell-icons">
         <i class="flaticon-transport-9"></i>
         </span>
         <h4>SELL</h4>
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
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcH2huiDBaDIkLnb691-9MIn-MhALCCGk&sensor=false"></script>
      <script src="js/infobox.js"></script>
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

