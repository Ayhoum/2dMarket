﻿<?php
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
   </head>
   <body>
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
                        <li><a href="about.html"><i class="fa fa-heart-o" aria-hidden="true"></i> About</a></li>
                        <li><a href="faqs.html"><i class="fa fa-folder-open-o" aria-hidden="true"></i> FAQS</a></li>
                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe" aria-hidden="true"></i> Language <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="#">English</a></li>
                              <li><a href="#">Swedish</a></li>
                              <li><a href="#">Arabic</a></li>
                              <li><a href="#">Russian</a></li>
                              <li><a href="#">chinese</a></li>
                           </ul>
                        </li>
                     </ul>
                  </div>
                  <!-- Header Top Right Social -->
                  <div class="header-right col-md-4 col-sm-6 col-xs-12 ">
                     <div class="pull-right">
                        <ul class="listnone">
                           <li><a href="login.html"><i class="fa fa-sign-in"></i> Log in</a></li>
                           <li><a href="register.html"><i class="fa fa-unlock" aria-hidden="true"></i> Register</a></li>
                           <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-profile-male" aria-hidden="true"></i> Umair <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="profile.html">User Profile</a></li>
                           <li><a href="profile-2.html">User Profile 2</a></li>
                                 <li><a href="archives.html">Archives</a></li>
                                 <li><a href="active-ads.html">Active Ads</a></li>
                              <li><a href="pending-ads.html">Pending Ads</a></li>
                                 <li><a href="favourite.html">Favourite Ads</a></li>
                                 <li><a href="messages.html">Message Panel</a></li>
                                 <li><a href="deactive.html">Account Deactivation</a></li>
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
                                 <a href="javascript:void(0)"> Home <i class="fa fa-angle-down fa-indicator"></i></a>
                                 <div class="drop-down grid-col-8">
                                    <!--grid row-->
                                    <div class="grid-row">
                                       <!--grid column 3-->
                                       <div class="grid-col-4">
                                          <ul>
                                             <li><a href="index.html">Home 1 - Default </a></li>
                                             <li><a href="index-transparent.html">Home 2 (Transparent)</a></li>
                                             <li><a href="index-2.html">Home 3 (Variation)</a></li>
                                             <li><a href="index-3.html">Home 4 (Master Slider)</a></li>
                                          </ul>
                                       </div>
                                       <div class="grid-col-4">
                                          <ul>
                                             <li><a href="index-4.html">Home 5 (With Map Listing)</a></li>
                                             <li><a href="index-5.html">Home 6 (Modern Style)</a></li>
                                             <li><a href="index-6.html">Home 7 (Variation)</a></li>
                                             <li><a href="index-7.html">Home 8 (Category Slider)</a></li>
                                          </ul>
                                       </div>
                                       <div class="grid-col-4">
                                          <ul>
                                             <li><a href="index-10.html">Home 11 (Modern Home)</a></li>
                                             <li><a href="index-8.html">Home 9 (Landing Page)</a></li>
                                             <li><a href="index-9.html">Home 10 (Variation)</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <a href="javascript:void(0)">Listing <i class="fa fa-angle-down fa-indicator"></i></a>
                                 <!-- drop down multilevel  -->
                                 <ul class="drop-down-multilevel">
                                    <li>
                                       <a href="javascript:void(0)">Grid Style<i class="fa fa-angle-right fa-indicator"></i> <span class="label label-info">New</span></a>
                                       <!-- drop down second level -->
                                       <ul class="drop-down-multilevel">
                                          <li><a href="listing.html">Listing Grid 1</a></li>
                                          <li><a href="listing-1.html">Listing Grid 2</a></li>
                                          <li><a href="listing-2.html">Listing Grid 3</a></li>
                                          <li><a href="listing-7.html">Listing Featured <span class="label label-info">New</span></a></li>
                                       </ul>
                                    </li>
                                    <li>
                                       <a href="javascript:void(0)">List Style<i class="fa fa-angle-right fa-indicator"></i> </a>
                                       <!-- drop down second level -->
                                       <ul class="drop-down-multilevel">
                                          <li><a href="listing-3.html">List View 1</a></li>
                                          <li><a href="listing-4.html">List View 2</a></li>
                                          <li><a href="listing-5.html">List View 3</a></li>
                                          <li><a href="listing-6.html">List View 4</a></li>
                                       </ul>
                                    </li>
                                    <li>
                                       <a href="javascript:void(0)">Single Ad<i class="fa fa-angle-right fa-indicator"></i> <span class="label label-info">New</span></a>
                                       <!-- drop down second level -->
                                       <ul class="drop-down-multilevel">
                                          <li><a href="single-page-listing.html">Single Ad Detail</a></li>
                                          <li><a href="single-page-listing-featured.html">Ad (Featured) <span class="label label-info">New</span></a></li>
                                          <li><a href="single-page-listing-2.html">Single Ad 2</a></li>
                                          <li><a href="single-page-listing-3.html">Single Ad (Adsense)</a></li>
                                          <li><a href="single-page-expired.html">Single Ad (Closed)</a></li>
                                       </ul>
                                    </li>
                                    <li><a href="icons.html">Classified Icons </a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="javascript:void(0)">Categories <i class="fa fa-angle-down fa-indicator"></i></a>
                                 <!-- drop down multilevel  -->
                                 <ul class="drop-down-multilevel">
                                    
                                    <li><a href="category-2.html">Modern Variation</a></li>
                                    <li><a href="category-3.html">Minimal Variation</a></li>
                                    <li><a href="category-4.html">Fancy Variation</a></li>
                                    
                                    <li><a href="category-6.html">Flat Variation</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="javascript:void(0)">Dashboard <i class="fa fa-angle-down fa-indicator"></i></a>
                                 <!-- drop down multilevel  -->
                                 <ul class="drop-down-multilevel">
                                    <li><a href="profile.html">User Profile</a></li>
                                    <li><a href="profile-2.html">User Profile 2</a></li>
                                    <li><a href="archives.html">Archives</a></li>
                                    <li><a href="active-ads.html">Active Ads</a></li>
                              <li><a href="pending-ads.html">Pending Ads</a></li>
                                    <li><a href="favourite.html">Favourite Ads</a></li>
                                    <li><a href="messages.html">Message Panel</a></li>
                                    <li><a href="deactive.html">Account Deactivation</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="javascript:void(0)">Pages <i class="fa fa-angle-down fa-indicator"></i></a>
                                 <!-- drop down full width -->
                                 <div class="drop-down grid-col-12">
                                    <!--grid row-->
                                    <div class="grid-row">
                                       <!--grid column 2-->
                                       <div class="grid-col-3">
                                          <h4>Blog</h4>
                                          <ul>
                                             <li><a href="blog.html">Blog With Right Sidebar</a></li>
                                             <li><a href="blog-1.html">Blog With Masonry Style</a></li>
                                             <li><a href="blog-2.html">Blog Without Sidebar</a></li>
                                             <li><a href="blog-details.html">Single Blog </a></li>
                                             <li><a href="blog-details-1.html">Single Blog (Adsense) </a></li>
                                          </ul>
                                       </div>
                                       <!--grid column 2-->
                                       <div class="grid-col-3">
                                          <h4>Miscellaneous</h4>
                                          <ul>
                                             <li><a href="about.html">About Us</a></li>
                                             <li><a href="cooming-soon.html">Comming Soon</a></li>
                                             <li><a href="elements.html">Shortcodes</a></li>
                                             <li><a href="error.html">404 Page</a></li>
                                             <li><a href="faqs.html">FAQS</a></li>
                                          </ul>
                                       </div>
                                       <!--grid column 2-->
            
                                       <div class="grid-col-3">
                                          <h4>Others</h4>
                                          <ul>
                                             <li><a href="login.html">Login</a></li>
                                             <li><a href="register.html">Register</a></li>
                                             <li><a href="pricing.html">Pricing</a></li>
                                             <li><a href="site-map.html">Site Map</a></li>
                                             <li><a href="post-ad-1.html">Post Ad</a></li>
                                          </ul>
                                       </div>
                                       <!--grid column 2-->
                                       <div class="grid-col-3">
                                          <h4>Detail Page</h4>
                                          <ul>
                                             <li><a href="post-ad-2.html">Post Ad 2</a></li>
                                             <li><a href="single-page-listing.html">Single Ad Detail</a></li>
                                             <li><a href="single-page-listing-2.html">Single Ad 2</a></li>
                                             <li><a href="single-page-listing-3.html">Single Ad (Adsense)</a></li>
                                             <li><a href="single-page-expired.html">Single Ad (Closed)</a></li>
                                          </ul>
                                       </div>
                                       <!--grid column 2-->
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <a href="javascript:void(0)">Drop Down <i class="fa fa-angle-down fa-indicator"></i></a>
                                 <!-- drop down multilevel  -->
                                 <ul class="drop-down-multilevel">
                                    <li><a href="#">Item one</a></li>
                                    <li>
                                       <a href="javascript:void(0)">Items Right Side <i class="fa fa-angle-right fa-indicator"></i> </a>
                                       <!-- drop down second level -->
                                       <ul class="drop-down-multilevel">
                                          <li>
                                             <a href="javascript:void(0)"> <i class="fa fa-buysellads"></i> Level 2 <i class="fa fa-angle-right fa-indicator"></i></a>
                                             <!-- drop down third level -->
                                             <ul class="drop-down-multilevel">
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                             </ul>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0)"> <i class="fa fa-dashcube"></i> Level 2 <i class="fa fa-angle-right fa-indicator"></i></a>
                                             <!-- drop down third level -->
                                             <ul class="drop-down-multilevel">
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                             </ul>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0)"> <i class="fa fa-heartbeat"></i> Level 2 <i class="fa fa-angle-right fa-indicator"></i></a>
                                             <!-- drop down third level -->
                                             <ul class="drop-down-multilevel">
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                             </ul>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0)"> <i class="fa fa-medium"></i> Level 2 <i class="fa fa-angle-right fa-indicator"></i></a>
                                             <!-- drop down third level -->
                                             <ul class="drop-down-multilevel">
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                             </ul>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0)"> <i class="fa fa-leanpub"></i> Level 2 <i class="fa fa-angle-right fa-indicator"></i> </a>
                                             <!-- drop down third level -->
                                             <ul class="drop-down-multilevel">
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                             </ul>
                                          </li>
                                       </ul>
                                    </li>
                                    <li><a href="#">Item 2</a></li>
                                    <li>
                                       <a href="javascript:void(0)">Items Left Side <i class="fa fa-angle-left fa-indicator"></i> </a>
                                       <!-- add class left-side -->
                                       <ul class="drop-down-multilevel left-side">
                                          <li>
                                             <a href="#"> <i class="fa fa-forumbee"></i> Level 2</a>
                                          </li>
                                          <li>
                                             <a href="#"> <i class="fa fa-hotel"></i> Level 2</a>
                                          </li>
                                          <li>
                                             <a href="#"> <i class="fa fa-automobile"></i> Level 2</a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0)"> <i class="fa fa-heartbeat"></i> Level 2 <i class="fa fa-plus fa-indicator"></i> </a>
                                             <!--drop down second level-->
                                             <ul class="drop-down-multilevel">
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                             </ul>
                                          </li>
                                          <li>
                                             <a href="#"> <i class="fa fa-bookmark"></i> Level 2</a>
                                          </li>
                                          <li>
                                             <a href="#"> <i class="fa fa-bell"></i> Level 2</a>
                                          </li>
                                          <li>
                                             <a href="#"> <i class="fa fa-soccer-ball-o"></i> Level 2</a>
                                          </li>
                                          <li>
                                             <a href="#"> <i class="fa fa-life-ring"></i> Level 2</a>
                                          </li>
                                       </ul>
                                    </li>
                                    <li><a href="#">Item 4</a>
                                    </li>
                                 </ul>
                              </li>
                              <li><a href="contact.html">Contact </a></li>
                           </ul>
                           <ul class="menu-search-bar">
                              <li>
                                 <a href="post-ad-1.html" class="btn btn-light"><i class="fa fa-plus" aria-hidden="true"></i> Post Free Ad</a>
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
                  <li><a href="#">Pages</a></li>
                  <li><a class="active" href="#">Profile</a></li>
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
                  
                  <div class="col-md-12 col-xs-12 col-sm-12">
                    <section class="search-result-item">
                       <a class="image-link" href="#"><img class="image" alt="" src="images/users/9.jpg"> </a>
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
                                            <small>Ad Sold</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="user-stats">
                                            <h2><?php echo $ad_count ; ?></h2>
                                            <small>Total Ads.</small>
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

                    <div class="dashboard-menu-container">
                        <ul>
                           <li class="active">
                              <a href="profile.html">
                                 <div class="menu-name"> Send A message </div>
                              </a>
                           </li>
                           <li>
                              <a href="archives.html">
                                 <div class="menu-name">Archives</div>
                              </a>
                           </li>
                           <li>
                              <a href="active-ads.html">
                                 <div class="menu-name">My Ads</div>
                              </a>
                           </li>
                           <li>
                              <a href="favourite.html">
                                 <div class="menu-name">Favourites Ads</div>
                              </a>
                           </li>
                            <li>
                              <a href="messages.html">
                                 <div class="menu-name">Messages</div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="menu-name">Close Account</div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="menu-name">Logout</div>
                              </a>
                           </li>
                        </ul>
                     </div>
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
                                 <h2 class="heading-md">Manage your Name, ID and Email Addresses.</h2>
                                 <?php include 'scripts/sellect_all_ads_user.php';?>
                              </div>
                              <div class="profile-edit tab-pane fade" id="edit">
                                 <h2 class="heading-md">Manage your Security Settings</h2>
                                 <p>Manage Your Account</p>
                                 <div class="clearfix"></div>
                                 <form>
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6 col-xs-12">
                                          <label>Your Name </label>
                                          <input type="text" class="form-control margin-bottom-20">
                                       </div>
                                       <div class="col-md-6 col-sm-6 col-xs-12">
                                          <label>Email Address <span class="color-red">*</span></label>
                                          <input type="text" class="form-control margin-bottom-20">
                                       </div>
                                       <div class="col-md-12 col-sm-12 col-xs-12">
                                          <label>Contact Number <span class="color-red">*</span></label>
                                          <input type="text" class="form-control margin-bottom-20">
                                       </div>
                                       <div class="col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
                                          <label>Country <span class="color-red">*</span></label>
                                          <select class="form-control">
                                             <option value="0">SriLanka</option>
                                             <option value="1">Australia</option>
                                             <option value="2">Bahrain</option>
                                             <option value="3">Canada</option>
                                             <option value="4">Denmark</option>
                                             <option value="5">Germany</option>
                                          </select>
                                       </div>
                                       <div class="col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
                                          <label>City <span class="color-red">*</span></label>
                                          <select class="form-control">
                                             <option value="0">London</option>
                                             <option value="1">Edinburgh</option>
                                             <option value="2">Wales</option>
                                             <option value="3">Cardiff</option>
                                             <option value="4">Bradford</option>
                                             <option value="5">Cambridge</option>
                                          </select>
                                       </div>
                                       <div class="col-md-12 col-sm-12 col-xs-12">
                                          <label>Address <span class="color-red">*</span></label>
                                          <textarea class = "form-control margin-bottom-20" rows = "3"></textarea>
                                       </div>
                                    </div>
                                    <div class="row margin-bottom-20">
                                       <div class="form-group">
                                          <div class="col-md-9">
                                             <div class="input-group">
                                                <span class="input-group-btn">
                                                <span class="btn btn-default btn-file">
                                                Browse… <input type="file" id="imgInp">
                                                </span>
                                                </span>
                                                <input type="text" class="form-control" readonly>
                                             </div>
                                          </div>
                                          <div class="col-md-3">
                                             <img id="img-upload" class="img-responsive" src="images/users/2.jpg" alt="" />
                                          </div>
                                       </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="row">
                                       <div class="col-md-8 col-sm-8 col-xs-12">
                                          <div class="form-group">
                                             <div class="skin-minimal">
                                                <ul class="list">
                                                   <li>
                                                      <input  type="checkbox" id="minimal-checkbox-7">
                                                      <label for="minimal-checkbox-7">i agree <a href="#">Terms of Services</a></label>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                                          <button type="submit" class="btn btn-theme btn-sm">Update My Info</button>
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
                                          <label>Select Plan You Want To Change<span class="color-red">*</span></label>
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
      <!-- Main Content Area End --> 
      <!-- Post Ad Sticky -->
      <a href="#" class="sticky-post-button hidden-xs">
         <span class="sell-icons">
         <i class="flaticon-transport-9"></i>
         </span>
         <h4>SELL</h4>
      </a>
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

