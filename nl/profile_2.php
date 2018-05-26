<?php
include "../scripts/db_connection.php";
ob_start();
session_start();
?>
<?php
include "scripts/user_info.php";
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
      <title>2D Market | <?php echo $user_first_name;?>'s Pagina</title>
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
   <body>
      <!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
      <div id="loader-wrapper">
          <div id="loader"><img class="img-responsive"  src="images/logo_files/design.gif">
              <h4 class="text-center" style="color: #00a9da"> Loading..</h4> </div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
      </div>
      <!-- =-=-=-=-=-=-= Light Header =-=-=-=-=-=-= -->
      <div class="colored-header">
         <!-- Top Bar -->

          <?php include 'topbar-nl.php';?>
         <!-- Top Bar End -->
         <!-- Navigation Menu -->
          <?php include 'nav_bar_nl.php';?>
      </div>
      <!-- Navigation Menu End -->
      <!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
         <section class="section-padding gray">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Middle Content Area -->
                  
                  <div class="col-md-12 col-xs-12 col-sm-12">
                    <section class="search-result-item">
                       <a class="image-link" href="#"><img class="image" alt="" src="../uploads/users/<?php echo $user_pic;?>"> </a>
                       <div class="search-result-item-body">
                          <div class="row">
                             <div class="col-md-5 col-sm-12 col-xs-12">
                             	
                                <h4 class="search-result-item-heading"><a href="#"><?php echo $user_first_name . " ". $user_last_name; ?></a></h4>
                                <p class="info"><?php echo $user_postcode ." " .$user_city ; ?></p>
                                <?php if ($online_status == "ONLINE") { ?> <span class="label label-success"><?php echo $online_status; ?></span>
                                <?php } else {?>
                                    <span class="label label-warning"><?php echo $online_status; ?></span>
                                <?php }
                                ?>
                                
                             </div>
                             <div class="col-md-7 col-sm-12 col-xs-12">
                              <div class="row ad-history">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="user-stats">
                                            <h2><?php echo $ad_count_sold ;?></h2>
                                            <small>Verkopte Advertenties</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="user-stats">
                                            <h2><?php echo $ad_count ; ?></h2>
                                            <small>Total Advertenties</small>
                                        </div>
                                    </div>
<!--                                    <div class="col-md-4 col-sm-4 col-xs-12">-->
<!--                                        <div class="user-stats">-->
<!--                                            <h2>413</h2>-->
<!--                                            <small>Favourites Ads</small>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                </div>
                             </div>
                          </div>
                       </div>
                    </section>
                  </div>
                  <!-- Middle Content Area  End -->
               </div>
               <!-- Row End -->
               
               <br>
               
               <div class="row">
                  <!-- Middle Content Area -->
                  
                  <div class="col-md-12 col-xs-12 col-sm-12">

                     <!-- Row -->
                     <div class="profile-section margin-bottom-20">
                        <div class="profile-tabs">
                           <ul class="nav nav-justified nav-tabs">
                              <li class="active"><a href="#ads" data-toggle="tab">All Ads</a></li>
<!--                              <li><a href="#edit" data-toggle="tab">Edit Profile</a></li>-->
<!--                              <li><a href="#payment" data-toggle="tab">Plan Setting</a></li>-->
<!--                              <li><a href="#settings" data-toggle="tab">Notification Settings</a></li>-->
                           </ul>
                           <div class="tab-content">
                              <div class="profile-edit tab-pane fade in active" id="ads">
                                 <h2 class="heading-md"><?php echo $user_first_name. " " .$user_last_name;?> 's Advertenties </h2>
                                 <?php include 'scripts/select_all_ads_user.php';?>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Row End -->
                  </div>
                  <!-- Middle Content Area  End -->
               </div>
               
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
          <?php include 'footer.php'?>
         <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
      </div>
      <!-- Main Content Area End --> 
      <!-- Post Ad Sticky -->
<!--      <a href="--><?php //if (isset($_SESSION['id'])){echo "new_advertisement.php";  } else { echo "login.php"; }?><!--" class="sticky-post-button hidden-xs">-->
<!--         <span class="sell-icons">-->
<!--         <i class="flaticon-transport-9"></i>-->
<!--         </span>-->
<!--         <h4>SELL</h4>-->
<!--      </a>-->
      <!-- Back To Top -->
      <a href="#0" class="cd-top">Top</a>
      <!-- Back To Top -->
      <!-- =-=-=-=-=-=-= Quote Modal =-=-=-=-=-=-= -->
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

