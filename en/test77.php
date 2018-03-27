<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 21-3-2018
 * Time: 19:09
 */
date_default_timezone_set('Europe/Amsterdam');
echo $date = date('Y-m-d H:i:s');
?>



<div class="col-md-4 col-md-pull-8 col-sx-12">
    <!-- Sidebar Widgets -->
    <div class="sidebar">
        <!-- Panel group -->
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <!-- Categories Panel -->
            <div class="panel panel-default">
                <!-- Heading -->
                <div class="panel-heading" role="tab" id="headingOne">
                    <!-- Title -->
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="more-less glyphicon glyphicon-plus"></i>
                            Categories
                        </a>
                    </h4>
                    <!-- Title End -->
                </div>
                <!-- Content -->
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body categories">
                        <ul>
                            <li><a href="#"><i class="flaticon-data"></i>Electronics & Gedget<span>(1029)</span></a></li>
                            <li><a href="#"><i class="flaticon-transport-6"></i>Cars & Vehicles<span>(1228)</span></a></li>
                            <li><a href="#"><i class="flaticon-mortgage"></i>Property<span>(178)</span></a></li>
                            <li><a href="#"><i class="flaticon-technology-8"></i>Mobile & Tablets<span>(2178)</span></a></li>
                            <li><a href="#"><i class="flaticon-suitcase"></i>Jobs<span>(7178)</span></a></li>
                            <li><a href="#"><i class="flaticon-search"></i>Home & Garden<span>(7163)</span></a></li>
                            <li><a href="#"><i class="flaticon-dog"></i>Pets & Animals<span>(8709)</span></a></li>
                            <li><a href="#"><i class="flaticon-science"></i>Health & Beauty<span>(3129)</span></a></li>
                            <li><a href="#"><i class="flaticon-game"></i>Hobby, Sport & Kids<span>(2019)</span></a></li>
                            <li><a href="#"><i class="flaticon-food"></i>Food & Agriculture<span>(323)</span></a></li>
                            <li><a href="#"><i class="flaticon-blouse"></i>Women & Children Cloths<span>(425)</span></a></li>
                            <li><a href="#"><i class="flaticon-technology-22"></i>Cameras & Security<span>(3223)</span></a></li>
                            <li><a href="#"><i class="flaticon-technology-45"></i>Office Product<span>(3283)</span></a></li>
                            <li><a href="#"><i class="flaticon-wrench"></i>Arts, Crafts & Sewing<span>(3221)</span></a></li>
                            <li><a href="#"><i class="flaticon-cogwheel-2"></i>Others<span>(3129)</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Categories Panel End -->
            <!-- Brands Panel -->
            <div class="panel panel-default">
                <!-- Heading -->
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="more-less glyphicon glyphicon-plus"></i>
                            Brands
                        </a>
                    </h4>
                </div>
                <!-- Content -->
                <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <!-- Search -->
                        <div class="search-widget">
                            <input placeholder="search" type="text">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                        <!-- Brands List -->
                        <div class="skin-minimal">
                            <ul class="list">
                                <li>
                                    <input  type="checkbox" id="minimal-checkbox-1">
                                    <label for="minimal-checkbox-1">All Brands</label>
                                </li>
                                <li>
                                    <input  type="checkbox" id="minimal-checkbox-2">
                                    <label for="minimal-checkbox-2">Samsung</label>
                                </li>
                                <li>
                                    <input  type="checkbox" id="minimal-checkbox-3">
                                    <label for="minimal-checkbox-3">Apple</label>
                                </li>
                                <li>
                                    <input  type="checkbox" id="minimal-checkbox-4">
                                    <label for="minimal-checkbox-4">Nokia</label>
                                </li>
                                <li>
                                    <input  type="checkbox" id="minimal-checkbox-5">
                                    <label for="minimal-checkbox-5">Sony</label>
                                </li>
                                <li>
                                    <input  type="checkbox" id="minimal-checkbox-6">
                                    <label for="minimal-checkbox-6">Blackberry</label>
                                </li>
                                <li>
                                    <input  type="checkbox" id="minimal-checkbox-7">
                                    <label for="minimal-checkbox-7">HTC</label>
                                </li>
                                <li>
                                    <input  type="checkbox" id="minimal-checkbox-8">
                                    <label for="minimal-checkbox-8">Motorola</label>
                                </li>
                            </ul>
                        </div>
                        <!-- Brands List End -->
                    </div>
                </div>
            </div>
            <!-- Brands Panel End -->
            <!-- Condition Panel -->
            <div class="panel panel-default">
                <!-- Heading -->
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="more-less glyphicon glyphicon-plus"></i>
                            Condition
                        </a>
                    </h4>
                </div>
                <!-- Content -->
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        <div class="skin-minimal">
                            <ul class="list">
                                <li>
                                    <input tabindex="7" type="radio" id="minimal-radio-1" name="minimal-radio">
                                    <label for="minimal-radio-1">New</label>
                                </li>
                                <li>
                                    <input tabindex="8" type="radio" id="minimal-radio-2" name="minimal-radio" checked>
                                    <label for="minimal-radio-2">Used</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Condition Panel End -->
            <!-- Pricing Panel -->
            <div class="panel panel-default">
                <!-- Heading -->
                <div class="panel-heading" role="tab" id="headingfour">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                            <i class="more-less glyphicon glyphicon-plus"></i>
                            Price
                        </a>
                    </h4>
                </div>
                <!-- Content -->
                <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                    <div class="panel-body">
                        <span class="price-slider-value">Price ($) <span id="price-min"></span> - <span id="price-max"></span></span>
                        <div id="price-slider"></div>
                    </div>
                </div>
            </div>
            <!-- Pricing Panel End -->
            <!-- Featured Ads Panel -->
            <div class="panel panel-default">
                <!-- Heading -->
                <div class="panel-heading" >
                    <h4 class="panel-title">
                        <a>
                            Featured Ads
                        </a>
                    </h4>
                </div>
                <!-- Content -->
                <div class="panel-collapse">
                    <div class="panel-body recent-ads">
                        <div class="featured-slider-3">
                            <!-- Featured Ads -->
                            <div class="item">
                                <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                                    <!-- Ad Box -->
                                    <div class="category-grid-box">
                                        <!-- Ad Img -->
                                        <div class="category-grid-img">
                                            <img class="img-responsive" alt="" src="images/posting/car-3.jpg">
                                            <!-- Ad Status -->
                                            <!-- User Review -->
                                            <div class="user-preview">
                                                <a href="#"> <img src="images/users/2.jpg" class="avatar avatar-small" alt=""> </a>
                                            </div>
                                            <!-- View Details --><a href="" class="view-details">View Details</a>
                                        </div>
                                        <!-- Ad Img End -->
                                        <div class="short-description">
                                            <!-- Ad Category -->
                                            <div class="category-title"> <span><a href="#">Cars</a></span> </div>
                                            <!-- Ad Title -->
                                            <h3><a title="" href="single-page-listing.html">2017 Honda Civic EX</a></h3>
                                            <!-- Price -->
                                            <div class="price">$18,200 <span class="negotiable">(Negotiable)</span></div>
                                        </div>
                                        <!-- Addition Info -->
                                        <div class="ad-info">
                                            <ul>
                                                <li><i class="fa fa-map-marker"></i>London</li>
                                                <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Ad Box End -->
                                </div>
                            </div>
                            <!-- Featured Ads -->
                            <div class="item">
                                <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                                    <!-- Ad Box -->
                                    <div class="category-grid-box">
                                        <!-- Ad Img -->
                                        <div class="category-grid-img">
                                            <img class="img-responsive" alt="" src="images/posting/fur-3.jpg">
                                            <!-- Ad Status -->
                                            <!-- User Review -->
                                            <div class="user-preview">
                                                <a href="#"> <img src="images/users/2.jpg" class="avatar avatar-small" alt=""> </a>
                                            </div>
                                            <!-- View Details --><a href="" class="view-details">View Details</a>
                                        </div>
                                        <!-- Ad Img End -->
                                        <div class="short-description">
                                            <!-- Ad Category -->
                                            <div class="category-title"> <span><a href="#">Cameras & Accessories</a></span> </div>
                                            <!-- Ad Title -->
                                            <h3><a title="" href="single-page-listing.html">Office Furniture For Sale </a></h3>
                                            <!-- Price -->
                                            <div class="price">$250 <span class="negotiable">(Negotiable)</span></div>
                                        </div>
                                        <!-- Addition Info -->
                                        <div class="ad-info">
                                            <ul>
                                                <li><i class="fa fa-map-marker"></i>London</li>
                                                <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Ad Box End -->
                                </div>
                            </div>
                            <!-- Featured Ads -->
                            <div class="item">
                                <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                                    <!-- Ad Box -->
                                    <div class="category-grid-box">
                                        <!-- Ad Img -->
                                        <div class="category-grid-img">
                                            <img class="img-responsive" alt="" src="images/posting/mob-6.jpg">
                                            <!-- Ad Status -->
                                            <!-- User Review -->
                                            <div class="user-preview">
                                                <a href="#"> <img src="images/users/2.jpg" class="avatar avatar-small" alt=""> </a>
                                            </div>
                                            <!-- View Details --><a href="" class="view-details">View Details</a>
                                        </div>
                                        <!-- Ad Img End -->
                                        <div class="short-description">
                                            <!-- Ad Category -->
                                            <div class="category-title"> <span><a href="#">Cameras & Accessories</a></span> </div>
                                            <!-- Ad Title -->
                                            <h3><a title="" href="single-page-listing.html">Sony Xperia Z5 </a></h3>
                                            <!-- Price -->
                                            <div class="price">$250 <span class="negotiable">(Negotiable)</span></div>
                                        </div>
                                        <!-- Addition Info -->
                                        <div class="ad-info">
                                            <ul>
                                                <li><i class="fa fa-map-marker"></i>London</li>
                                                <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Ad Box End -->
                                </div>
                            </div>
                            <!-- Featured Ads -->
                            <div class="item">
                                <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                                    <!-- Ad Box -->
                                    <div class="category-grid-box">
                                        <!-- Ad Img -->
                                        <div class="category-grid-img">
                                            <img class="img-responsive" alt="" src="images/posting/cam-2.jpg">
                                            <!-- Ad Status -->
                                            <!-- User Review -->
                                            <div class="user-preview">
                                                <a href="#"> <img src="images/users/2.jpg" class="avatar avatar-small" alt=""> </a>
                                            </div>
                                            <!-- View Details --><a href="" class="view-details">View Details</a>
                                        </div>
                                        <!-- Ad Img End -->
                                        <div class="short-description">
                                            <!-- Ad Category -->
                                            <div class="category-title"> <span><a href="#">Cameras & Accessories</a></span> </div>
                                            <!-- Ad Title -->
                                            <h3><a title="" href="single-page-listing.html">Sony Xperia Z5 </a></h3>
                                            <!-- Price -->
                                            <div class="price">$250 <span class="negotiable">(Negotiable)</span></div>
                                        </div>
                                        <!-- Addition Info -->
                                        <div class="ad-info">
                                            <ul>
                                                <li><i class="fa fa-map-marker"></i>London</li>
                                                <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Ad Box End -->
                                </div>
                            </div>
                            <!-- Featured Ads -->
                            <div class="item">
                                <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                                    <!-- Ad Box -->
                                    <div class="category-grid-box">
                                        <!-- Ad Img -->
                                        <div class="category-grid-img">
                                            <img class="img-responsive" alt="" src="images/posting/cam-2.jpg">
                                            <!-- Ad Status -->
                                            <!-- User Review -->
                                            <div class="user-preview">
                                                <a href="#"> <img src="images/users/2.jpg" class="avatar avatar-small" alt=""> </a>
                                            </div>
                                            <!-- View Details --><a href="" class="view-details">View Details</a>
                                        </div>
                                        <!-- Ad Img End -->
                                        <div class="short-description">
                                            <!-- Ad Category -->
                                            <div class="category-title"> <span><a href="#">Cameras & Accessories</a></span> </div>
                                            <!-- Ad Title -->
                                            <h3><a title="" href="single-page-listing.html">Sony Xperia Z5 </a></h3>
                                            <!-- Price -->
                                            <div class="price">$250 <span class="negotiable">(Negotiable)</span></div>
                                        </div>
                                        <!-- Addition Info -->
                                        <div class="ad-info">
                                            <ul>
                                                <li><i class="fa fa-map-marker"></i>London</li>
                                                <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Ad Box End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Featured Ads Panel End -->
            <!-- Latest Ads Panel -->
            <div class="panel panel-default">
                <!-- Heading -->
                <div class="panel-heading" >
                    <h4 class="panel-title">
                        <a>
                            Recent Ads
                        </a>
                    </h4>
                </div>
                <!-- Content -->
                <div class="panel-collapse">
                    <div class="panel-body recent-ads">
                        <!-- Ads -->
                        <div class="recent-ads-list">
                            <div class="recent-ads-container">
                                <div class="recent-ads-list-image">
                                    <a href="#" class="recent-ads-list-image-inner">
                                        <img src="images/posting/thumb-1.jpg" alt="">
                                    </a><!-- /.recent-ads-list-image-inner -->
                                </div>
                                <!-- /.recent-ads-list-image -->
                                <div class="recent-ads-list-content">
                                    <h3 class="recent-ads-list-title">
                                        <a href="#">Sony Xperia Z1</a>
                                    </h3>
                                    <ul class="recent-ads-list-location">
                                        <li><a href="#">New York</a>,</li>
                                        <li><a href="#">Brooklyn</a></li>
                                    </ul>
                                    <div class="recent-ads-list-price">
                                        $ 17,000
                                    </div>
                                    <!-- /.recent-ads-list-price -->
                                </div>
                                <!-- /.recent-ads-list-content -->
                            </div>
                            <!-- /.recent-ads-container -->
                        </div>
                        <!-- Ads -->
                        <div class="recent-ads-list">
                            <div class="recent-ads-container">
                                <div class="recent-ads-list-image">
                                    <a href="#" class="recent-ads-list-image-inner">
                                        <img src="images/posting/thumb-2.jpg" alt="">
                                    </a><!-- /.recent-ads-list-image-inner -->
                                </div>
                                <!-- /.recent-ads-list-image -->
                                <div class="recent-ads-list-content">
                                    <h3 class="recent-ads-list-title">
                                        <a href="#">2017 BMW i8</a>
                                    </h3>
                                    <ul class="recent-ads-list-location">
                                        <li><a href="#">New York</a>,</li>
                                        <li><a href="#">Brooklyn</a></li>
                                    </ul>
                                    <div class="recent-ads-list-price">
                                        $ 66,000
                                    </div>
                                    <!-- /.recent-ads-list-price -->
                                </div>
                                <!-- /.recent-ads-list-content -->
                            </div>
                            <!-- /.recent-ads-container -->
                        </div>
                        <!-- Ads -->
                        <div class="recent-ads-list">
                            <div class="recent-ads-container">
                                <div class="recent-ads-list-image">
                                    <a href="#" class="recent-ads-list-image-inner">
                                        <img src="images/posting/thumb-3.jpg" alt="">
                                    </a><!-- /.recent-ads-list-image-inner -->
                                </div>
                                <!-- /.recent-ads-list-image -->
                                <div class="recent-ads-list-content">
                                    <h3 class="recent-ads-list-title">
                                        <a href="#">Dell Latitude e7440</a>
                                    </h3>
                                    <ul class="recent-ads-list-location">
                                        <li><a href="#">New York</a>,</li>
                                        <li><a href="#">Brooklyn</a></li>
                                    </ul>
                                    <div class="recent-ads-list-price">
                                        $ 37,000
                                    </div>
                                    <!-- /.recent-ads-list-price -->
                                </div>
                                <!-- /.recent-ads-list-content -->
                            </div>
                            <!-- /.recent-ads-container -->
                        </div>
                        <!-- Ads -->
                        <div class="recent-ads-list">
                            <div class="recent-ads-container">
                                <div class="recent-ads-list-image">
                                    <a href="#" class="recent-ads-list-image-inner">
                                        <img src="images/posting/thumb-4.jpg" alt="">
                                    </a><!-- /.recent-ads-list-image-inner -->
                                </div>
                                <!-- /.recent-ads-list-image -->
                                <div class="recent-ads-list-content">
                                    <h3 class="recent-ads-list-title">
                                        <a href="#">Sport Stylish Steering</a>
                                    </h3>
                                    <ul class="recent-ads-list-location">
                                        <li><a href="#">New York</a>,</li>
                                        <li><a href="#">Brooklyn</a></li>
                                    </ul>
                                    <div class="recent-ads-list-price">
                                        $ 11,000
                                    </div>
                                    <!-- /.recent-ads-list-price -->
                                </div>
                                <!-- /.recent-ads-list-content -->
                            </div>
                            <!-- /.recent-ads-container -->
                        </div>
                        <!-- Ads -->
                        <div class="recent-ads-list">
                            <div class="recent-ads-container">
                                <div class="recent-ads-list-image">
                                    <a href="#" class="recent-ads-list-image-inner">
                                        <img src="images/posting/thumb-5.jpg" alt="">
                                    </a><!-- /.recent-ads-list-image-inner -->
                                </div>
                                <!-- /.recent-ads-list-image -->
                                <div class="recent-ads-list-content">
                                    <h3 class="recent-ads-list-title">
                                        <a href="#">Apple Wrist Watches</a>
                                    </h3>
                                    <ul class="recent-ads-list-location">
                                        <li><a href="#">New York</a>,</li>
                                        <li><a href="#">Brooklyn</a></li>
                                    </ul>
                                    <div class="recent-ads-list-price">
                                        $ 20,000
                                    </div>
                                    <!-- /.recent-ads-list-price -->
                                </div>
                                <!-- /.recent-ads-list-content -->
                            </div>
                            <!-- /.recent-ads-container -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Latest Ads Panel End -->
        </div>
        <!-- panel-group end -->
    </div>
    <!-- Sidebar Widgets End -->
</div>


<?php

session_start();
ob_start();
require_once "../scripts/db_connection.php";
include 'scripts/sessions.php';




$usersArr = array();

if(isset($_GET['lon']) && isset($_GET['lat']) && $_GET['dis']){
$lon = $_GET['lon'];
$lat = $_GET['lat'];
$dis = $_GET['dis'];



function distanceCalculation($point1_lat, $point1_long, $point2_lat, $point2_long) {
// Calculate the distance in degrees
$degrees = rad2deg(acos((sin(deg2rad($point1_lat))*sin(deg2rad($point2_lat))) + (cos(deg2rad($point1_lat))*cos(deg2rad($point2_lat))*cos(deg2rad($point1_long-$point2_long)))));
$distance = $degrees * 111.13384; // 1 degree = 111.13384 km, based on the average diameter of the Earth (12,735 km)

// Convert the distance in degrees to the chosen unit (kilometres, miles or nautical miles)
return round($distance, 0);
}


$point1 = array("lat" => $lat, "long" => $lon); // Current


$query = "SELECT * FROM ADDRESS";
$run_query = mysqli_query($mysqli,$query);

while ($row = mysqli_fetch_assoc($run_query)){

$lon = $row['lon'];
$lat = $row['lat'];
$us_id = $row['USER_id'];

if($us_id != $id){

if(!empty($lon) && !empty($lat)){
$point2 = array("lat" => $lat, "long" => $lon); // Target
$km = distanceCalculation($point1['lat'], $point1['long'], $point2['lat'], $point2['long']); // Calculate distance in kilometres (default)



if($km <= $dis){

$queryAD = "SELECT * FROM ADVERTISEMENT WHERE USER_id = '{$us_id}'";
$run_queryAD = mysqli_query($mysqli,$queryAD);

while ($row = mysqli_fetch_assoc($run_queryAD)) {
$adID = $row['id'];
$title = $row['title'];
$desc = $row['description'];

echo $adID . "<br>" . $title . "<br>" . $desc . "<br>--------------------<br>";

}


}

}


}
echo "###############################<br>";
}





}else{
echo "error";
}



?>