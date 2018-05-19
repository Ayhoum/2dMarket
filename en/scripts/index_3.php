<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 19-5-2018
 * Time: 14:08
 */
?>

<section class="custom-padding">
    <!-- Main Container -->
    <div class="container">
        <!-- Row -->
        <div class="row">
            <!-- Heading Area -->
            <div class="heading-panel">
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <h3 class="main-title text-left">
                        Latest Ads in Electronics
                    </h3>
                </div>
            </div>
            <!-- Middle Content Box -->
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="row">
                    <div class="featured-slider owl-carousel owl-theme">
                        <?php

                        $query_1  = "SELECT * FROM `ADVERTISEMENT` WHERE `CATEGORY_id` = ''";
                        $result_1 = mysqli_query($mysqli, $query_1);
                        while ($row = mysqli_fetch_assoc($result_1)){

                        $ad_id = $row['id'];
                        $title = $row['title'];
                        $date = $row['date'];
                        $price = $row['price'];
                        $description = $row['description'];
                        $condition = $row['condition'];
                        $ad_type = $row['ad_type'];

                        $status = $row['status'];
                        $selling_type = $row['selling_type'];
                        $delivery_type = $row['delivery_type'];
                        $visits = $row['visits'];

                        $user_id = $row['USER_id'];
                        $category_id = $row['CATEGORY_id'];
                        $sub_cat_id = $row['sub_cat_id'];


                        //extract date:
                        require_once 'time_elapse.php';
                        $date = time_elapsed_string($date);


                        //sib_cat_info
                        $sub_cat_query = "SELECT * FROM `SUB_CATEGORY` WHERE `id` = '{$sub_cat_id}'";
                        $sub_cat_result = mysqli_query($mysqli, $sub_cat_query);
                        if (mysqli_num_rows($sub_cat_result) > 0) {
                            while ($row = mysqli_fetch_assoc($sub_cat_result)) {
                                $sub_cat_name = $row['name'];
                            }
                        }

                        // Category_info
                        $cat_query = "SELECT * FROM `CATEGORY` WHERE `id` = '{$category_id}'";
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
                        if (empty($user_pic)) {
                            $user_pic = "https://cdn1.iconfinder.com/data/icons/freeline/32/account_friend_human_man_member_person_profile_user_users-256.png";
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
                                $user_country = $row['country'];
                                $location = $user_city . " | " . $user_country;

                            }
                        } else {
                            $user_postcode = "unknown ";
                            $user_city = "address";
                        }
                        $image_query  = "SELECT * FROM `ADVERTISEMENT_PICTURE` WHERE  `ADVERTISEMENT_id` = '{$ad_id}'";
                        $image_result = mysqli_query($mysqli, $image_query);
                        if (mysqli_num_rows($image_result) > 0 ){
                            while($row = mysqli_fetch_assoc($image_result)) {
                                $pic = $row['picture_url'];
                                $pic_name = $row['picture_name'];
                            }
                        }else{
                            $pic = "en_ad_photo/";
                            $pic_name = "white.jpg";
                        }
                        ?>

                        <div class="item">
                            <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                <!-- Ad Box -->
                                <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                        <a href="ad_page.php?ad_id=<?php echo $ad_id;?>">
                                        <img class="img-responsive" alt="" src="<?php echo $pic. $pic_name;?>">
                                        </a>
                                        <!-- User Review -->
                                        <!-- View Details -->
                                        <!-- Additional Info -->
                                        <div class="additional-information">
                                            <p>Registration 2017</p>
                                            <p> 3.0 Diesel</p>
                                            <p> 230 HP</p>
                                            <p> Body Coupe</p>
                                            <p> 80 000 Miles</p>
                                        </div>
                                        <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                        <!-- Ad Category -->
                                        <div class="category-title"> <span><a href="#">Electronics & Gedgets</a></span> </div>
                                        <!-- Ad Title -->
                                        <h3><a title="" href="single-page-listing.html">2017 Honda Civic EX</a></h3>
                                        <!-- Price -->
                                        <?php if ($selling_type == 'Bid')?><div class="price">$18,200 <span class="negotiable">(Negotiable)</span></div>
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

                        <?php } ?>
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
<section class="custom-padding">
    <!-- Main Container -->
    <div class="container">
        <!-- Row -->
        <div class="row">
            <!-- Heading Area -->
            <div class="heading-panel">
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <h3 class="main-title text-left">
                        Latest Ads in Cars
                    </h3>
                </div>
            </div>
            <!-- Middle Content Box -->
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="row">
                    <div class="featured-slider owl-carousel owl-theme">
                        <div class="item">
                            <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                <!-- Ad Box -->
                                <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                        <img class="img-responsive" alt="" src="images/posting/car-3.jpg">
                                        <!-- User Review -->
                                        <div class="user-preview">
                                            <a href="#"> <img src="images/users/1.jpg" class="avatar avatar-small" alt=""> </a>
                                        </div>
                                        <!-- View Details --><a href="" class="view-details">View Details</a>
                                        <!-- Additional Info -->
                                        <div class="additional-information">
                                            <p>Registration 2017</p>
                                            <p> 3.0 Diesel</p>
                                            <p> 230 HP</p>
                                            <p> Body Coupe</p>
                                            <p> 80 000 Miles</p>
                                        </div>
                                        <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                        <!-- Ad Category -->
                                        <div class="category-title"> <span><a href="#">Electronics & Gedgets</a></span> </div>
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
                        <div class="item">
                            <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                <!-- Ad Box -->
                                <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                        <img class="img-responsive" alt="" src="images/posting/car-3.jpg">
                                        <!-- User Review -->
                                        <div class="user-preview">
                                            <a href="#"> <img src="images/users/1.jpg" class="avatar avatar-small" alt=""> </a>
                                        </div>
                                        <!-- View Details --><a href="" class="view-details">View Details</a>
                                        <!-- Additional Info -->
                                        <div class="additional-information">
                                            <p>Registration 2017</p>
                                            <p> 3.0 Diesel</p>
                                            <p> 230 HP</p>
                                            <p> Body Coupe</p>
                                            <p> 80 000 Miles</p>
                                        </div>
                                        <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                        <!-- Ad Category -->
                                        <div class="category-title"> <span><a href="#">Electronics & Gedgets</a></span> </div>
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
                        <div class="item">
                            <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                <!-- Ad Box -->
                                <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                        <img class="img-responsive" alt="" src="images/posting/car-3.jpg">
                                        <!-- User Review -->
                                        <div class="user-preview">
                                            <a href="#"> <img src="images/users/1.jpg" class="avatar avatar-small" alt=""> </a>
                                        </div>
                                        <!-- View Details --><a href="" class="view-details">View Details</a>
                                        <!-- Additional Info -->
                                        <div class="additional-information">
                                            <p>Registration 2017</p>
                                            <p> 3.0 Diesel</p>
                                            <p> 230 HP</p>
                                            <p> Body Coupe</p>
                                            <p> 80 000 Miles</p>
                                        </div>
                                        <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                        <!-- Ad Category -->
                                        <div class="category-title"> <span><a href="#">Electronics & Gedgets</a></span> </div>
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
                        <div class="item">
                            <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                <!-- Ad Box -->
                                <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                        <img class="img-responsive" alt="" src="images/posting/car-3.jpg">
                                        <!-- User Review -->
                                        <div class="user-preview">
                                            <a href="#"> <img src="images/users/1.jpg" class="avatar avatar-small" alt=""> </a>
                                        </div>
                                        <!-- View Details --><a href="" class="view-details">View Details</a>
                                        <!-- Additional Info -->
                                        <div class="additional-information">
                                            <p>Registration 2017</p>
                                            <p> 3.0 Diesel</p>
                                            <p> 230 HP</p>
                                            <p> Body Coupe</p>
                                            <p> 80 000 Miles</p>
                                        </div>
                                        <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                        <!-- Ad Category -->
                                        <div class="category-title"> <span><a href="#">Electronics & Gedgets</a></span> </div>
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

                    </div>
                </div>
            </div>
            <!-- Middle Content Box End -->
        </div>
        <!-- Row End -->
    </div>
    <!-- Main Container End -->
</section>
<section class="custom-padding">
    <!-- Main Container -->
    <div class="container">
        <!-- Row -->
        <div class="row">
            <!-- Heading Area -->
            <div class="heading-panel">
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <h3 class="main-title text-left">
                        Latest Ads in Home
                    </h3>
                </div>
            </div>
            <!-- Middle Content Box -->
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="row">
                    <div class="featured-slider owl-carousel owl-theme">
                        <div class="item">
                            <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                <!-- Ad Box -->
                                <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                        <img class="img-responsive" alt="" src="images/posting/car-3.jpg">
                                        <!-- User Review -->
                                        <div class="user-preview">
                                            <a href="#"> <img src="images/users/1.jpg" class="avatar avatar-small" alt=""> </a>
                                        </div>
                                        <!-- View Details --><a href="" class="view-details">View Details</a>
                                        <!-- Additional Info -->
                                        <div class="additional-information">
                                            <p>Registration 2017</p>
                                            <p> 3.0 Diesel</p>
                                            <p> 230 HP</p>
                                            <p> Body Coupe</p>
                                            <p> 80 000 Miles</p>
                                        </div>
                                        <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                        <!-- Ad Category -->
                                        <div class="category-title"> <span><a href="#">Electronics & Gedgets</a></span> </div>
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
                        <div class="item">
                            <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                <!-- Ad Box -->
                                <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                        <img class="img-responsive" alt="" src="images/posting/car-3.jpg">
                                        <!-- User Review -->
                                        <div class="user-preview">
                                            <a href="#"> <img src="images/users/1.jpg" class="avatar avatar-small" alt=""> </a>
                                        </div>
                                        <!-- View Details --><a href="" class="view-details">View Details</a>
                                        <!-- Additional Info -->
                                        <div class="additional-information">
                                            <p>Registration 2017</p>
                                            <p> 3.0 Diesel</p>
                                            <p> 230 HP</p>
                                            <p> Body Coupe</p>
                                            <p> 80 000 Miles</p>
                                        </div>
                                        <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                        <!-- Ad Category -->
                                        <div class="category-title"> <span><a href="#">Electronics & Gedgets</a></span> </div>
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
                        <div class="item">
                            <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                <!-- Ad Box -->
                                <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                        <img class="img-responsive" alt="" src="images/posting/car-3.jpg">
                                        <!-- User Review -->
                                        <div class="user-preview">
                                            <a href="#"> <img src="images/users/1.jpg" class="avatar avatar-small" alt=""> </a>
                                        </div>
                                        <!-- View Details --><a href="" class="view-details">View Details</a>
                                        <!-- Additional Info -->
                                        <div class="additional-information">
                                            <p>Registration 2017</p>
                                            <p> 3.0 Diesel</p>
                                            <p> 230 HP</p>
                                            <p> Body Coupe</p>
                                            <p> 80 000 Miles</p>
                                        </div>
                                        <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                        <!-- Ad Category -->
                                        <div class="category-title"> <span><a href="#">Electronics & Gedgets</a></span> </div>
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
                        <div class="item">
                            <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                <!-- Ad Box -->
                                <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                        <img class="img-responsive" alt="" src="images/posting/car-3.jpg">
                                        <!-- User Review -->
                                        <div class="user-preview">
                                            <a href="#"> <img src="images/users/1.jpg" class="avatar avatar-small" alt=""> </a>
                                        </div>
                                        <!-- View Details --><a href="" class="view-details">View Details</a>
                                        <!-- Additional Info -->
                                        <div class="additional-information">
                                            <p>Registration 2017</p>
                                            <p> 3.0 Diesel</p>
                                            <p> 230 HP</p>
                                            <p> Body Coupe</p>
                                            <p> 80 000 Miles</p>
                                        </div>
                                        <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                        <!-- Ad Category -->
                                        <div class="category-title"> <span><a href="#">Electronics & Gedgets</a></span> </div>
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
                    </div>
                </div>
            </div>
            <!-- Middle Content Box End -->
        </div>
        <!-- Row End -->
    </div>
    <!-- Main Container End -->
</section>
