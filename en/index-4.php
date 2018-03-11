﻿
<?php
require_once "scripts/time_elapse.php";


$final ="var data = {'count': 1,'listings': [";


$query_ad = "SELECT * FROM `ADVERTISEMENT`";
$query_result = mysqli_query($mysqli,$query_ad);

while($row = mysqli_fetch_assoc($query_result)) {
    $ad_id=$row['id'];
    $title=$row['title'];
    $price=$row['price'];
    $time = $row['date'];
    $time = time_elapsed_string($time);
    $category_id = $row['CATEGORY_id'];
    $user_id = $row['USER_id'];

    $address_query = "SELECT  * FROM `ADDRESS` WHERE `USER_id` = {$user_id}";
    $address_result = mysqli_query($mysqli, $address_query);
    if (mysqli_num_rows($address_result) > 0) {
        while ($row = mysqli_fetch_assoc($address_result)) {
            $user_street_name = $row['street_name'];
            $user_postcode = $row['postcode'];
            $user_house_number = $row['house_number'];
            $user_region = $row['region'];
            $user_city = $row['city'];
            $user_country = $row['country'];



            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, 'https://maps.googleapis.com/maps/api/geocode/json?address='.$user_street_name.'+'.$user_house_number.'+,+'.$user_city.'+'.$user_postcode.'&key=AIzaSyDcH2huiDBaDIkLnb691-9MIn-MhALCCGk');
            $result = curl_exec($ch);
            curl_close($ch);
            $obj = json_decode($result);
            $latVal = $obj->results[0]->geometry->location->lat;
            $lngVal = $obj->results[0]->geometry->location->lng;


        }
    } else {
        $user_postcode = "unknown ";
        $user_city = "address";
    }


// Category_info
    $cat_query = "SELECT * FROM `CATEGORY` WHERE `id` = '{$category_id}'";
    $cat_result = mysqli_query($mysqli, $cat_query);
    if (mysqli_num_rows($cat_result) > 0) {
        while ($row = mysqli_fetch_assoc($cat_result)) {
            $cat_name = $row['name'];
        }
    }


    $pic_query = " SELECT * FROM `ADVERTISEMENT_PICTURE` WHERE ADVERTISEMENT_id = '{$ad_id}' LIMIT 1";
    $pic_result = mysqli_query($mysqli, $pic_query);
    if (mysqli_num_rows($pic_result) > 0) {
        while ($row = mysqli_fetch_assoc($pic_result)) {
            $pic_id = $row['id'];
            $picture_name = $row['picture_name'];
            $picture_url = $row['picture_url'];
        }

    } else {
        $picture_name = "";
        $picture_url = "http://www.nsrcel.org/wp-content/uploads/2018/01/product.png";
    }



    $final .= "{'ad_id': $ad_id,'listings_title': '$title ','listings_url': 'ad_page.php?ad_id=$ad_id','listings_cover': '$picture_url.$picture_name','cat': '$cat_name','cat_url': 'ad_per_cat.php?cat_id=$category_id','latitude': $latVal,'longitude': $lngVal,'price': $price,'currency': '€','location': '$user_country','time': '$time'},";
}


$final .=" ]}";


$fp = 'js/data.json';

// Write the contents back to the file
file_put_contents($fp, $final);

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
                        <option label="Select Option"></option>
                        <option value="0">Cars & Bikes</option>
                        <option value="1">Mobile Phones</option>
                        <option value="2">Home Appliances</option>
                        <option value="3">Clothing</option>
                        <option value="4">Human Resource</option>
                        <option value="5">Information Technology</option>
                        <option value="6">Marketing</option>
                        <option value="7">Others</option>
                        <option value="8">Sales</option>
                     </select>
                  </div>
                  <!-- Search Field -->
                  <div class="col-md-3 col-xs-12 col-sm-3">
                     <input type="text" class="form-control" placeholder="What Are You Looking For..." /> 
                  </div>
                  <!-- Price Range SLider -->
                  <div class="col-md-3 col-xs-12 col-sm-3">
                     <span class="price-slider-value">Price ($) <span id="price-min"></span> - <span id="price-max"></span></span>
                     <div id="price-slider"></div>
                  </div>
                  <!-- Search Button -->
                  <div class="col-md-3 col-xs-12 col-sm-3">
                     <button type="submit" class="btn btn-light">Search</button>
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
         <section class="section-padding gray">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Heading Area -->
                  <div class="heading-panel">
                     <div class="col-xs-12 col-md-12 col-sm-12">
                        <h3 class="main-title text-left">
                           Browse Ads By Countries 
                        </h3>
                     </div>
                  </div>
                  <div class="col-md-12 col-xs-12 col-sm-12">
                     <div class="row">
                        <!-- Countries Masonry Grid -->
                        <div id="ads-countries" class="posts-masonry">
                           <!-- Country Ads -->
                           <div class="col-sm-6 col-xs-12 col-md-4">
                              <a href="#">
                                 <div class="country-box">
                                    <img class="img-responsive" src="images/countries/aus.png" alt="">
                                    <div class="country-description">
                                       <h2 class="country-name">Australia</h2>
                                       <p class="country-ads"><span>3118</span> Ads</p>
                                    </div>
                                 </div>
                              </a>
                           </div>
                           <!-- Country Ads -->
                           <div class="col-sm-6 col-xs-12 col-md-4">
                              <a href="#">
                                 <div class="country-box">
                                    <img class="img-responsive" src="images/countries/france.png" alt="">
                                    <div class="country-description">
                                       <h2 class="country-name">France</h2>
                                       <p class="country-ads"><span>209</span> Ads</p>
                                    </div>
                                 </div>
                              </a>
                           </div>
                           <!-- Country Ads -->
                           <div class="col-sm-6 col-xs-12 col-md-4">
                              <a href="#">
                                 <div class="country-box">
                                    <img class="img-responsive" src="images/countries/bangladesh.png" alt="">
                                    <div class="country-description">
                                       <h2 class="country-name">Bangladesh</h2>
                                       <p class="country-ads"><span>712</span> Ads</p>
                                    </div>
                                 </div>
                              </a>
                           </div>
                           <!-- Country Ads -->
                           <div class="col-sm-6 col-xs-12 col-md-4">
                              <a href="#">
                                 <div class="country-box">
                                    <img src="images/countries/usa.png" alt="" class="img-responsive">
                                    <div class="country-description">
                                       <h2 class="country-name">united states</h2>
                                       <p class="country-ads"><span>3385</span> Ads</p>
                                    </div>
                                 </div>
                              </a>
                           </div>
                           <!-- Country Ads -->
                           <div class="col-sm-6 col-xs-12 col-md-4">
                              <a href="#">
                                 <div class="country-box">
                                    <img class="img-responsive" src="images/countries/england.png" alt="">
                                    <div class="country-description">
                                       <h2 class="country-name">England</h2>
                                       <p class="country-ads"><span>281</span> Ads</p>
                                    </div>
                                 </div>
                              </a>
                           </div>
                           <!-- Country Ads -->
                           <div class="col-sm-6 col-xs-12 col-md-4">
                              <a href="#">
                                 <div class="country-box">
                                    <img class="img-responsive" src="images/countries/mexico.png" alt="">
                                    <div class="country-description">
                                       <h2 class="country-name">mexico</h2>
                                       <p class="country-ads"><span>48</span> Ads</p>
                                    </div>
                                 </div>
                              </a>
                           </div>
                           <!-- Country Ads -->
                           <div class="col-sm-6 col-xs-12 col-md-4">
                              <a href="#">
                                 <div class="country-box">
                                    <img class="img-responsive" src="images/countries/pakistan.png" alt="">
                                    <div class="country-description">
                                       <h2 class="country-name">Pakistan</h2>
                                       <p class="country-ads"><span>1218</span> Ads</p>
                                    </div>
                                 </div>
                              </a>
                           </div>
                           <!-- Country Ads -->
                           <div class="col-sm-6 col-xs-12 col-md-4">
                              <a href="#">
                                 <div class="country-box">
                                    <img src="images/countries/africa.png" class="img-responsive" alt="">
                                    <div class="country-description">
                                       <h2 class="country-name">South Africa</h2>
                                       <p class="country-ads"><span>798</span> Ads</p>
                                    </div>
                                 </div>
                              </a>
                           </div>
                           <!-- Country Ads -->
                           <div class="col-sm-6 col-xs-12 col-md-4">
                              <a href="#">
                                 <div class="country-box">
                                    <img class="img-responsive" src="images/countries/brazil.png" alt="">
                                    <div class="country-description">
                                       <h2 class="country-name">Brazil</h2>
                                       <p class="country-ads"><span>318</span> Ads</p>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <!-- Countries Masonry Grid End -->
                     </div>
                  </div>
               </div>
            </div>
            <!-- Main Container End -->
         </section>
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
                           <!-- Listing Ad Grid -->
                           <div class="item col-md-4 col-sm-6 col-xs-12 clearfix">
                              <div class="category-grid-box-1">
                                 <!-- Image Box -->
                                 <div class="image">
                                    <img alt="Tour Package" src="images/posting/list-1.jpg" class="img-responsive">
                                    <div class="price-tag">
                                       <div class="price"><span>$205,000</span></div>
                                    </div>
                                 </div>
                                 <!-- Short Description -->
                                 <div class="short-description-1 clearfix">
                                    <!-- Category Title -->
                                    <div class="category-title"> <span><a href="#">Sports & Equipment</a></span> </div>
                                    <!-- Ad Title -->
                                    <h3><a title="" href="single-page-listing.html">Honda Civic 2017 Sports Edition</a></h3>
                                    <!-- Short Description -->
                                    <p class="list-group-item-text"> Lorem ipsum dolor sit amet consectetur adiscing das elited ultricies facilisis lacinia pell das elited ultricies facilisis ... </p>
                                    <!-- Ad Meta Info -->
                                    <ul class="ad-meta-info">
                                       <li>
                                          <a href="#" data-toggle="tooltip" title="Warranty"> <i class="flaticon-ribbon-badge"></i>9 Months Warranty</a>
                                       </li>
                                       <li> <a href="#" data-toggle="tooltip" title="Condition"><i class="flaticon-check-square"></i>Used</a> </li>
                                       <li> <a href="#" data-toggle="tooltip" title="Contact No"><i class="flaticon-phone-call"></i>+92-123-4567</a> </li>
                                    </ul>
                                 </div>
                                 <!-- Ad Meta Stats -->
                                 <div class="ad-info-1">
                                    <ul>
                                       <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                       <li> <i class="fa fa-clock-o"></i>15 minutes ago </li>
                                       <li class="views"> <i class="fa fa-eye"></i>445 Views </li>
                                    </ul>
                                    <!-- View All Button -->
                                    <div class="detail-button"> <a href="#">View Details</a> </div>
                                 </div>
                              </div>
                           </div>
                           <!-- Listing Ad Grid -->
                           <div class="item col-md-4 col-sm-6 col-xs-12 clearfix">
                              <div class="category-grid-box-1">
                                 <!-- Image Box -->
                                 <div class="image">
                                    <img alt="Tour Package" src="images/posting/list-10.jpg" class="img-responsive">
                                    <div class="price-tag">
                                       <div class="price"><span>$350</span></div>
                                    </div>
                                 </div>
                                 <!-- Short Description -->
                                 <div class="short-description-1 clearfix">
                                    <!-- Category Title -->
                                    <div class="category-title"> <span><a href="#">Mobiles</a></span> </div>
                                    <!-- Ad Title -->
                                    <h3><a title="" href="single-page-listing.html">Sony Xperia Z5 Waterproof</a></h3>
                                    <!-- Short Description -->
                                    <p class="list-group-item-text"> Lorem ipsum dolor sit amet consectetur adiscing das elited ultricies facilisis lacinia pell das elited ultricies facilisis ... </p>
                                    <!-- Ad Meta Info -->
                                    <ul class="ad-meta-info">
                                       <li>
                                          <a href="#" data-toggle="tooltip" title="Warranty"> <i class="flaticon-ribbon-badge"></i>1 Months Warranty</a>
                                       </li>
                                       <li> <a href="#" data-toggle="tooltip" title="Condition"><i class="flaticon-check-square"></i>Used</a> </li>
                                       <li> <a href="#" data-toggle="tooltip" title="Contact No"><i class="flaticon-phone-call"></i>+92-123-4567</a> </li>
                                    </ul>
                                 </div>
                                 <!-- Ad Meta Stats -->
                                 <div class="ad-info-1">
                                    <ul>
                                       <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                       <li> <i class="fa fa-clock-o"></i>15 minutes ago </li>
                                       <li class="views"> <i class="fa fa-eye"></i>145 Views </li>
                                    </ul>
                                    <!-- View All Button -->
                                    <div class="detail-button"> <a href="#">View Details</a> </div>
                                 </div>
                              </div>
                           </div>
                           <!-- Listing Ad Grid -->
                           <div class="item col-md-4 col-sm-6 col-xs-12 clearfix">
                              <div class="category-grid-box-1">
                                 <!-- Image Box -->
                                 <div class="image">
                                    <img alt="Tour Package" src="images/posting/list-7.jpg" class="img-responsive">
                                    <div class="price-tag">
                                       <div class="price"><span>$205,000</span></div>
                                    </div>
                                 </div>
                                 <!-- Short Description -->
                                 <div class="short-description-1 clearfix">
                                    <!-- Category Title -->
                                    <div class="category-title"> <span><a href="#">Sports & Equipment</a></span> </div>
                                    <!-- Ad Title -->
                                    <h3><a title="" href="single-page-listing.html">Rolex Yacht-Master 40</a></h3>
                                    <!-- Short Description -->
                                    <p class="list-group-item-text"> Lorem ipsum dolor sit amet consectetur adiscing das elited ultricies facilisis lacinia pell das elited ultricies facilisis ... </p>
                                    <!-- Ad Meta Info -->
                                    <ul class="ad-meta-info">
                                       <li>
                                          <a href="#" data-toggle="tooltip" title="Warranty"> <i class="flaticon-ribbon-badge"></i>9 Months Warranty</a>
                                       </li>
                                       <li> <a href="#" data-toggle="tooltip" title="Condition"><i class="flaticon-check-square"></i>Used</a> </li>
                                       <li> <a href="#" data-toggle="tooltip" title="Contact No"><i class="flaticon-phone-call"></i>+92-123-4567</a> </li>
                                    </ul>
                                 </div>
                                 <!-- Ad Meta Stats -->
                                 <div class="ad-info-1">
                                    <ul>
                                       <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                       <li> <i class="fa fa-clock-o"></i>15 minutes ago </li>
                                       <li class="views"> <i class="fa fa-eye"></i>445 Views </li>
                                    </ul>
                                    <!-- View All Button -->
                                    <div class="detail-button"> <a href="#">View Details</a> </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <!-- Listing Ad Grid -->
                           <div class="item col-md-4 col-sm-6 col-xs-12 clearfix">
                              <div class="category-grid-box-1">
                                 <!-- Image Box -->
                                 <div class="image">
                                    <img alt="Tour Package" src="images/posting/list-11.jpg" class="img-responsive">
                                    <div class="price-tag">
                                       <div class="price"><span>$466.25</span></div>
                                    </div>
                                 </div>
                                 <!-- Short Description -->
                                 <div class="short-description-1 clearfix">
                                    <!-- Category Title -->
                                    <div class="category-title"> <span><a href="#">Computer & Laptops</a></span> </div>
                                    <!-- Ad Title -->
                                    <h3><a title="" href="single-page-listing.html">Gaming PC Quad Core 8GB Graphics</a></h3>
                                    <!-- Short Description -->
                                    <p class="list-group-item-text"> Lorem ipsum dolor sit amet consectetur adiscing das elited ultricies facilisis lacinia pell das elited ultricies facilisis ... </p>
                                    <!-- Ad Meta Info -->
                                    <ul class="ad-meta-info">
                                       <li>
                                          <a href="#" data-toggle="tooltip" title="Warranty"> <i class="flaticon-ribbon-badge"></i>No Warranty</a>
                                       </li>
                                       <li> <a href="#" data-toggle="tooltip" title="Condition"><i class="flaticon-check-square"></i>Used</a> </li>
                                       <li> <a href="#" data-toggle="tooltip" title="Contact No"><i class="flaticon-phone-call"></i>+92-123-4567</a> </li>
                                    </ul>
                                 </div>
                                 <!-- Ad Meta Stats -->
                                 <div class="ad-info-1">
                                    <ul>
                                       <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                       <li> <i class="fa fa-clock-o"></i>15 minutes ago </li>
                                       <li class="views"> <i class="fa fa-eye"></i>445 Views </li>
                                    </ul>
                                    <!-- View All Button -->
                                    <div class="detail-button"> <a href="#">View Details</a> </div>
                                 </div>
                              </div>
                           </div>
                           <!-- Listing Ad Grid -->
                           <div class="item col-md-4 col-sm-6 col-xs-12 clearfix">
                              <div class="category-grid-box-1">
                                 <!-- Image Box -->
                                 <div class="image">
                                    <img alt="Tour Package" src="images/posting/list-9.jpg" class="img-responsive">
                                    <div class="price-tag">
                                       <div class="price"><span>$12,229</span></div>
                                    </div>
                                 </div>
                                 <!-- Short Description -->
                                 <div class="short-description-1 clearfix">
                                    <!-- Category Title -->
                                    <div class="category-title"> <span><a href="#">Car & Bikes</a></span> </div>
                                    <!-- Ad Title -->
                                    <h3><a title="" href="single-page-listing.html">2015 Honda CBR 1000RR </a></h3>
                                    <!-- Short Description -->
                                    <p class="list-group-item-text"> Lorem ipsum dolor sit amet consectetur adiscing das elited ultricies facilisis lacinia pell das elited ultricies facilisis ... </p>
                                    <!-- Ad Meta Info -->
                                    <ul class="ad-meta-info">
                                       <li>
                                          <a href="#" data-toggle="tooltip" title="Warranty"> <i class="flaticon-ribbon-badge"></i>2 Months Warranty</a>
                                       </li>
                                       <li> <a href="#" data-toggle="tooltip" title="Condition"><i class="flaticon-check-square"></i>Used</a> </li>
                                       <li> <a href="#" data-toggle="tooltip" title="Contact No"><i class="flaticon-phone-call"></i>+92-123-4567</a> </li>
                                    </ul>
                                 </div>
                                 <!-- Ad Meta Stats -->
                                 <div class="ad-info-1">
                                    <ul>
                                       <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                       <li> <i class="fa fa-clock-o"></i>15 minutes ago </li>
                                       <li class="views"> <i class="fa fa-eye"></i>45 Views </li>
                                    </ul>
                                    <!-- View All Button -->
                                    <div class="detail-button"> <a href="#">View Details</a> </div>
                                 </div>
                              </div>
                           </div>
                           <!-- Listing Ad Grid -->
                           <div class="item col-md-4 col-sm-6 col-xs-12 clearfix">
                              <div class="category-grid-box-1">
                                 <!-- Image Box -->
                                 <div class="image">
                                    <img alt="Tour Package" src="images/posting/house-4.jpg" class="img-responsive">
                                    <div class="price-tag">
                                       <div class="price"><span>$43,000</span></div>
                                    </div>
                                 </div>
                                 <!-- Short Description -->
                                 <div class="short-description-1 clearfix">
                                    <!-- Category Title -->
                                    <div class="category-title"> <span><a href="#">Real Estate</a></span> </div>
                                    <!-- Ad Title -->
                                    <h3><a title="" href="single-page-listing.html">Brand New House For Sale</a></h3>
                                    <!-- Short Description -->
                                    <p class="list-group-item-text"> Lorem ipsum dolor sit amet consectetur adiscing das elited ultricies facilisis lacinia pell das elited ultricies facilisis ... </p>
                                    <!-- Ad Meta Info -->
                                    <ul class="ad-meta-info">
                                       <li>
                                          <a href="#" data-toggle="tooltip" title="Warranty"> <i class="flaticon-ribbon-badge"></i>3 Months Warranty</a>
                                       </li>
                                       <li> <a href="#" data-toggle="tooltip" title="Condition"><i class="flaticon-check-square"></i>Used</a> </li>
                                       <li> <a href="#" data-toggle="tooltip" title="Contact No"><i class="flaticon-phone-call"></i>+92-123-4567</a> </li>
                                    </ul>
                                 </div>
                                 <!-- Ad Meta Stats -->
                                 <div class="ad-info-1">
                                    <ul>
                                       <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                       <li> <i class="fa fa-clock-o"></i>15 minutes ago </li>
                                       <li class="views"> <i class="fa fa-eye"></i>1445 Views </li>
                                    </ul>
                                    <!-- View All Button -->
                                    <div class="detail-button"> <a href="#">View Details</a> </div>
                                 </div>
                              </div>
                           </div>
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
         <section class="custom-padding gray">
            <!-- Main Container -->
            <div class="container">
               <!-- Content Box -->
               <!-- Row -->
               <div class="row">
                  <!-- Heading Area -->
                  <div class="heading-panel">
                     <div class="col-xs-12 col-md-12 col-sm-12">
                        <h3 class="main-title text-left">
                           Latest Blog Post
                        </h3>
                     </div>
                  </div>
                  <!-- Middle Content Box -->
                  <div class="col-md-12 col-xs-12 col-sm-12">
                     <div class="row">
                        <!-- Blog Post-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                           <div class="blog-post">
                              <div class="post-img">
                                 <a href="#"> <img class="img-responsive" alt="" src="images/blog/1.jpg"> </a>
                              </div>
                              <div class="post-info"> <a href="">Aug 30, 2017</a> <a href="#">23 comments</a> </div>
                              <h3 class="post-title"> <a href="#"> Sony Xperia XZ: Release date and everything you need to know</a> </h3>
                              <p class="post-excerpt"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis. </p>
                           </div>
                        </div>
                        <!-- Blog Post-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                           <div class="blog-post">
                              <div class="post-img">
                                 <a href="#"> <img class="img-responsive" alt="" src="images/blog/2.jpg"> </a>
                              </div>
                              <div class="post-info"> <a href="">Aug 30, 2017</a> <a href="#">23 comments</a> </div>
                              <h3 class="post-title"> <a href="#"> Review of the 2017 Honda Accord Sport </a> </h3>
                              <p class="post-excerpt"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis. </p>
                           </div>
                        </div>
                        <!-- Blog Post-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                           <div class="blog-post">
                              <div class="post-img">
                                 <a href="#"> <img class="img-responsive" alt="" src="images/blog/3.jpg"> </a>
                              </div>
                              <div class="post-info"> <a href="">Aug 30, 2017</a> <a href="#">23 comments</a> </div>
                              <h3 class="post-title"> <a href="#"> How to Buy a House 6 Must-Dos Before Buying A Home</a> </h3>
                              <p class="post-excerpt"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis. </p>
                           </div>
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
                                    <li><span class="icon fa fa-map-marker"></span> 60 Link Road Lhr. Pakistan 54770</li>
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
                                 <h3 class="main-title text-left">Our Services</h3>
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
                                    <h3 class="main-title text-left"> Latest News</h3>
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
                                    <h3 class="main-title text-left"> Quick Links</h3>
                                 </div>
                                 <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="#">Our Team</a></li>
                                    <li><a href="#">Our Services</a></li>
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
                  <div class="copyright text-center">Copyright 2017 © Theme Created By <a href="http://themeforest.net/user/scriptsbundle/portfolio" target="_blank">Scriptsbundle</a> All Rights Reserved</div>
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

