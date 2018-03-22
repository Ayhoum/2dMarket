<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 21-3-2018
 * Time: 20:06
 */



session_start();
//ob_start();
require_once "../../scripts/db_connection.php";
include 'sessions.php';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 0;
}
$responseHolder = "";


$usersArr = array();

if(isset($_GET['lon']) && isset($_GET['lat']) && isset($_GET['dis'])){
    $lon = $_GET['lon'];
    $lat = $_GET['lat'];
    $dis = $_GET['dis'];

    $_SESSION['lon_ses'] = $lon;
    $_SESSION['lat_ses'] = $lat;


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

                    $queryAD = "SELECT * FROM ADVERTISEMENT WHERE USER_id = '{$us_id}' AND `lang` = 'EN'";
                    $run_queryAD = mysqli_query($mysqli,$queryAD);
                    $num_Ads = mysqli_num_rows($run_queryAD);

                    if($num_Ads <= 10){
                        $ad_query = "SELECT * FROM ADVERTISEMENT WHERE USER_id = '{$us_id}' AND `lang` = 'EN'  ORDER BY `ad_type` DESC";
                    }else if($page == 0 || $page == 1){
                        $ad_query = "SELECT * FROM ADVERTISEMENT WHERE USER_id = '{$us_id}' AND `lang` = 'EN'  ORDER BY `ad_type` DESC LIMIT 10";
                    }
                    $run_queryAD = mysqli_query($mysqli,$ad_query);


                    while ($row = mysqli_fetch_assoc($run_queryAD)) {
                        $ad_id          = $row['id'];
                        $title          = $row['title'];
                        $date           = $row['date'];
                        $price          = $row['price'];
                        $description    = $row['description'];
                        $condition      = $row['condition'];
                        $ad_type = $row['ad_type'];

                        $status         = $row['status'];
                        $selling_type   = $row['selling_type'];
                        $delivery_type  = $row['delivery_type'];

                        $user_id        = $row['USER_id'];
                        $category_id    = $row['CATEGORY_id'];


                        //extract date:
                        require_once 'time_elapse.php';
                        $date = time_elapsed_string($date);

                        // Category_info
                        $cat_query  = "SELECT * FROM `CATEGORY` WHERE `id` = '{$category_id}'";
                        $cat_result = mysqli_query($mysqli, $cat_query);
                        if (mysqli_num_rows($cat_result) > 0) {
                            while ($row = mysqli_fetch_assoc($cat_result)) {
                                $cat_name = $row['name'];
                            }
                        }


                        //user info.
                        $select_query = "SELECT * FROM `USER` WHERE `id` = '{$user_id}'";
                        $select_result = mysqli_query($mysqli, $select_query);
                        while ($row = mysqli_fetch_assoc($select_result)) {
                            $user_first_name = $row['first_name'];
                            $user_last_name = $row['last_name'];
                            $user_email = $row['email'];
                            $user_phone = $row['phone_number'];
                            $user_username = $row['username'];
                            $user_pic = $row['profile_picture'];
                            $user_register_date = $row['register_date'];
                            $online_status = $row['online_status'];

                        }
                        if (empty($user_pic) || !file_exists('../../uploads/users/'.$user_pic)) {
                            $user_pic = "https://cdn4.iconfinder.com/data/icons/web-ui-color/128/Account-256.png";
                        }else{
                            $user_pic = '../../uploads/users/'.$user_pic;
                        }

// Address info.

                        $address_query = "SELECT  * FROM `ADDRESS` WHERE `USER_id` = {$user_id}";
                        $address_result = mysqli_query($mysqli, $address_query);
                        if (mysqli_num_rows($address_result) > 0) {
                            while ($row = mysqli_fetch_assoc($address_result)) {
                                $user_street_name = $row['street_name'];
                                $user_postcode = $row['postcode'];
                                $user_house_number = $row['house_number'];
                                $user_region = $row['region'];
                                $user_city = $row['city'];

                            }
                        } else {
                            $user_postcode = "unknown ";
                            $user_city = "address";
                        }
                        $image_query  = "SELECT * FROM `ADVERTISEMENT_PICTURE` WHERE  `ADVERTISEMENT_id` = '{$ad_id}'";
                        $image_result = mysqli_query($mysqli, $image_query);
                        while($row = mysqli_fetch_assoc($image_result)) {
                            $pic = $row['picture_url'];
                            $pic_name = $row['picture_name'];
                            }
                            if(empty($pic_name) || !file_exists('../en_ad_photo/'.$pic_name)){
                                $pic = 'en_ad_photo/';
                                $pic_name = 'white.jpg';
                            }


            $responseHolder .= " <div class='col-md-6 col-lg-6 col-sm-6 col-xs-12 '>
                <div class='category-grid-box' style='background-color: white'>
                    <!-- Ad Img -->";

                     if ($ad_type == 'PREMIUM') {

                     $responseHolder .= "<div class='featured-ribbon'>  <span>PREMIUM</span>  </div>";
                     }
                    $responseHolder .= "<div class='category-grid-img'>
                        <img class='img-responsive ' style='width: 100%; height: 200px; object-fit: cover;' alt='' src='$pic$pic_name'>
                        <!-- Ad Status -->
                        <!-- User Review -->
                        <div class='user-preview'>
                            <a href='profile_2.php?user_id=$user_id'> <img src='$user_pic' class='avatar avatar-small' alt='$user_username'> </a>
                        </div>
                        <!-- View Details --><a href='ad_page.php?ad_id=$ad_id' class='view-details'>View Details</a>
                        <!-- Additional Info -->
                        <div class='additional-information'>
                            <p>$description</p>
                        </div>
                        <!-- Additional Info End-->
                    </div>
                    <!-- Ad Img End -->
                    <div class='short-description'>";
                        if ($status == 'SOLD'){  $responseHolder .="<p> <span class='label label-danger'>$status</span></p>";
                        }elseif ($status == 'RESERVED'){ $responseHolder .="<p> <span class='label label-warning'>$status</span></p>";
                        }elseif ($status == 'AVAILABLE'){$responseHolder .= "<p> <span class='label label-success'>$status</span></p>";
                        }
                        $responseHolder .= "<!-- Ad Category -->
                        <div class='category-title'> <span><a href='ad_per_cat.php?cat_id=$category_id'>$cat_name</a></span> </div>
                        <!-- Ad Title -->
                        <h3><a title='' href='ad_page.php?ad_id=$ad_id'>$title</a></h3>
                        <!-- Price -->
                        <div class='price'>";
                        if ($selling_type == 'BID'){ $responseHolder .= 'Bid';}else{ $responseHolder .= '€ '. $price;}
                        $responseHolder .="</div>
                    </div>
                    <!-- Addition Info -->
                    <div class='ad-info'>
                        <ul>
                            <li><i class='fa fa-map-marker'></i>$user_postcode | $user_city</li>
                            <li><i class='fa fa-clock-o'></i>$date</li>
                        </ul>
                    </div>
                </div>
            </div>";


                    }
                }
//}
            }
        }
    }
}elseif (isset($_SESSION['lon_ses']) && isset($_SESSION['lat_ses']) && isset($_SESSION['dis_ses'])){


    $lon = $_SESSION['lon_ses'];
    $lat = $_SESSION['lat_ses'];
    $dis = $_SESSION['dis_ses'];


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

                    $queryAD = "SELECT * FROM ADVERTISEMENT WHERE USER_id = '{$us_id}' AND `lang` = 'EN'";
                    $run_get_num_queryAD = mysqli_query($mysqli,$queryAD);
                    $num_Ads = mysqli_num_rows($run_get_num_queryAD);



                    if($num_Ads <= 10){
                        $ad_query = "SELECT * FROM ADVERTISEMENT WHERE USER_id = '{$us_id}' AND `lang` = 'EN'  ORDER BY `ad_type` DESC";
                    }else if($page == 0 || $page == 1){
                        $ad_query = "SELECT * FROM ADVERTISEMENT WHERE USER_id = '{$us_id}' AND `lang` = 'EN'  ORDER BY `ad_type` DESC LIMIT 10";
                    }else if($page > 1){
                        $start = (($page - 1) * 10);
                        $ad_query = "SELECT * FROM ADVERTISEMENT WHERE USER_id = '{$us_id}' AND `lang` = 'EN'  ORDER BY `ad_type` DESC LIMIT 10 OFFSET $start";

                    }
                    $run_queryAD = mysqli_query($mysqli,$ad_query);


                    while ($row = mysqli_fetch_assoc($run_queryAD)) {
                        $ad_id          = $row['id'];
                        $title          = $row['title'];
                        $date           = $row['date'];
                        $price          = $row['price'];
                        $description    = $row['description'];
                        $condition      = $row['condition'];
                        $ad_type = $row['ad_type'];

                        $status         = $row['status'];
                        $selling_type   = $row['selling_type'];
                        $delivery_type  = $row['delivery_type'];

                        $user_id        = $row['USER_id'];
                        $category_id    = $row['CATEGORY_id'];


                        //extract date:
                        require_once 'time_elapse.php';
                        $date = time_elapsed_string($date);

                        // Category_info
                        $cat_query  = "SELECT * FROM `CATEGORY` WHERE `id` = '{$category_id}'";
                        $cat_result = mysqli_query($mysqli, $cat_query);
                        if (mysqli_num_rows($cat_result) > 0) {
                            while ($row = mysqli_fetch_assoc($cat_result)) {
                                $cat_name = $row['name'];
                            }
                        }


                        //user info.
                        $select_query = "SELECT * FROM `USER` WHERE `id` = '{$user_id}'";
                        $select_result = mysqli_query($mysqli, $select_query);
                        while ($row = mysqli_fetch_assoc($select_result)) {
                            $user_first_name = $row['first_name'];
                            $user_last_name = $row['last_name'];
                            $user_email = $row['email'];
                            $user_phone = $row['phone_number'];
                            $user_username = $row['username'];
                            $user_pic = $row['profile_picture'];
                            $user_register_date = $row['register_date'];
                            $online_status = $row['online_status'];

                        }
                        if (empty($user_pic) || !file_exists('../../uploads/users/'.$user_pic)) {
                            $user_pic = "https://cdn4.iconfinder.com/data/icons/web-ui-color/128/Account-256.png";
                        }else{
                            $user_pic = '../../uploads/users/'.$user_pic;
                        }

// Address info.

                        $address_query = "SELECT  * FROM `ADDRESS` WHERE `USER_id` = {$user_id}";
                        $address_result = mysqli_query($mysqli, $address_query);
                        if (mysqli_num_rows($address_result) > 0) {
                            while ($row = mysqli_fetch_assoc($address_result)) {
                                $user_street_name = $row['street_name'];
                                $user_postcode = $row['postcode'];
                                $user_house_number = $row['house_number'];
                                $user_region = $row['region'];
                                $user_city = $row['city'];

                            }
                        } else {
                            $user_postcode = "unknown ";
                            $user_city = "address";
                        }
                        $image_query  = "SELECT * FROM `ADVERTISEMENT_PICTURE` WHERE  `ADVERTISEMENT_id` = '{$ad_id}'";
                        $image_result = mysqli_query($mysqli, $image_query);
                        while($row = mysqli_fetch_assoc($image_result)) {
                            $pic = $row['picture_url'];
                            $pic_name = $row['picture_name'];
                        }
                        if(empty($pic_name) || !file_exists('../en_ad_photo/'.$pic_name)){
                            $pic = 'en_ad_photo/';
                            $pic_name = 'white.jpg';
                        }


                        $responseHolder .= " <div class='col-md-6 col-lg-6 col-sm-6 col-xs-12 '>
                <div class='category-grid-box' style='background-color: white'>
                    <!-- Ad Img -->";

                        if ($ad_type == 'PREMIUM') {

                            $responseHolder .= "<div class='featured-ribbon'>  <span>PREMIUM</span>  </div>";
                        }
                        $responseHolder .= "<div class='category-grid-img'>
                        <img class='img-responsive ' style='width: 100%; height: 200px; object-fit: cover;' alt='' src='$pic$pic_name'>
                        <!-- Ad Status -->
                        <!-- User Review -->
                        <div class='user-preview'>
                            <a href='profile_2.php?user_id=$user_id'> <img src='$user_pic' class='avatar avatar-small' alt='$user_username'> </a>
                        </div>
                        <!-- View Details --><a href='ad_page.php?ad_id=$ad_id' class='view-details'>View Details</a>
                        <!-- Additional Info -->
                        <div class='additional-information'>
                            <p>$description</p>
                        </div>
                        <!-- Additional Info End-->
                    </div>
                    <!-- Ad Img End -->
                    <div class='short-description'>";
                        if ($status == 'SOLD'){  $responseHolder .="<p> <span class='label label-danger'>$status</span></p>";
                        }elseif ($status == 'RESERVED'){ $responseHolder .="<p> <span class='label label-warning'>$status</span></p>";
                        }elseif ($status == 'AVAILABLE'){$responseHolder .= "<p> <span class='label label-success'>$status</span></p>";
                        }
                        $responseHolder .= "<!-- Ad Category -->
                        <div class='category-title'> <span><a href='ad_per_cat.php?cat_id=$category_id'>$cat_name</a></span> </div>
                        <!-- Ad Title -->
                        <h3><a title='' href='ad_page.php?ad_id=$ad_id'>$title</a></h3>
                        <!-- Price -->
                        <div class='price'>";
                        if ($selling_type == 'BID'){ $responseHolder .= 'Bid';}else{ $responseHolder .= '€ '. $price;}
                        $responseHolder .="</div>
                    </div>
                    <!-- Addition Info -->
                    <div class='ad-info'>
                        <ul>
                            <li><i class='fa fa-map-marker'></i>$user_postcode | $user_city</li>
                            <li><i class='fa fa-clock-o'></i>$date</li>
                        </ul>
                    </div>
                </div>
            </div>";


                    }
                }
//}
            }
        }
    }




}
$responseHolder .= "<div class='col-md-12 col-xs-12 col-sm-12'>
                            <section class='advertising'>
                                <a href='post-ad-1.html'>
                                    <div class='banner'>
                                        <div class='wrapper'>
                                            <span class='title'>Do you want your property to be listed here?</span>
                                            <span class='submit'>Submit it now! <i class='fa fa-plus-square'></i></span>
                                        </div>
                                    </div>
                                    <!-- /.banner-->
                                </a>
                            </section>
                        </div>
                        
                        
                         <div class='clearfix'></div>
    <!-- Pagination -->
    <div class='text-center margin-top-30 block-center'>
    <ul class='pagination '>
";
if ($page != 0 && $page != 1) {
    $responseHolder .= "<li><a href='favourite_ads.php?page=$page - 1; ?>'> <i class='fa fa-chevron-left' aria-hidden='true'></i></a></li>";
}
        $num_Ads = ceil($num_Ads / 10);
        for ($i = 1; $i <= $num_Ads; $i++) {
      $responseHolder .="<li"; if ($i == $page || ($i == 1 && $page == 0)) {
                $responseHolder .= " class='active'";
            }
            $responseHolder .= "><a href='search_result.php?page=$i'>$i</a></li>";

        }

        if ($page != $num_Ads || $num_Ads > 1) {
            $page+=1;
            $responseHolder .= "<li><a href='search_result.php?page=$page'> <i class='fa fa-chevron-right'
                                                                            aria-hidden='true'></i></a></li>";
        }

$responseHolder.= "</ul>";

echo $responseHolder;
?>