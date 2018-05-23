<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 19-5-2018
 * Time: 14:08
 */
?>
<!-- =-=-=-=-=-=-= electronics slider =-=-=-=-=-=-= -->
<section class="custom-padding">
    <!-- Main Container -->
    <div class="container">
        <!-- Row -->
        <div class="row">
            <!-- Heading Area -->
            <div class="heading-panel">
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <h3 class="main-title text-left">
                        Nieuwste advertenties in <a href="ad_per_cat.php?cat_id=61&dis=all&price=all&order=latest" style="color: rgba(166,85,218,0.86) ">Elektronica</a>
                    </h3>
                </div>
            </div>
            <!-- Middle Content Box -->
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="row">
                    <div class="featured-slider owl-carousel owl-theme">
                        <?php

                        $query_1  = "SELECT * FROM `ADVERTISEMENT` WHERE `CATEGORY_id` = '61'";
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
                            $pic = "nl_ad_photo/";
                            $pic_name = "white.jpg";
                        }
                        ?>
                            <div class="item">
                                <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                    <!-- Ad Box -->
                                    <div class="category-grid-box">
                                        <!-- Ad Img -->
                                        <div class="image">
                                            <a href="ad_page.php?ad_id=<?php echo $ad_id; ?>"><img class="img-responsive " style="width: 100%; height: 200px; object-fit: cover;" alt="" src="<?php echo $pic . $pic_name ;?>"></a>
                                        </div>
                                        <!-- Ad Img End -->
                                        <div class="short-description">
                                            <!-- Ad Category -->
                                            <div class="category-title"> <span><a href="ad_per_cat.php?cat_id=<?php echo $category_id;?>&dis=all&price=all&order=latest"><?php echo $cat_name; ?></a></span> </div>
                                            <!-- Ad Title -->
                                            <h3><a title="" href="ad_page.php?ad_id=<?php echo $ad_id;?>"><?php echo $title;?></a></h3>
                                            <!-- Price -->
                                            <?php if ($selling_type == "BID") { ?><div class="price">€ <?php echo $price;?> <span class="negotiable">(Bid)</span></div><?php } else {?> <div class="price">€ <?php echo $price;?> </div><?php }?>
                                        </div>
                                        <!-- Addition Info -->
                                        <div class="ad-info">
                                            <ul>
                                                <li><i class="fa fa-map-marker"></i><?php echo $location; ?></li>
                                                <li><i class="fa fa-clock-o"></i> <?php echo $date;?> </li>
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
<!-- =-=-=-=-=-=-= cars slider =-=-=-=-=-=-= -->
<section class="custom-padding">
    <!-- Main Container -->
    <div class="container">
        <!-- Row -->
        <div class="row">
            <!-- Heading Area -->
            <div class="heading-panel">
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <h3 class="main-title text-left">
                        Nieuwste advertenties in <a href="ad_per_cat.php?cat_id=76&dis=all&price=all&order=latest" style="color:  rgba(166,85,218,0.86) ">Auto's En Motoren</a>
                    </h3>
                </div>
            </div>
            <!-- Middle Content Box -->
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="row">
                    <div class="featured-slider owl-carousel owl-theme">
                        <?php

                        $query_1  = "SELECT * FROM `ADVERTISEMENT` WHERE `CATEGORY_id` = '76'";
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
                                $pic = "nl_ad_photo/";
                                $pic_name = "white.jpg";
                            }
                            ?>
                            <div class="item">
                                <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                    <!-- Ad Box -->
                                    <div class="category-grid-box">
                                        <!-- Ad Img -->
                                        <div class="image">
                                            <a href="ad_page.php?ad_id=<?php echo $ad_id; ?>"><img class="img-responsive " style="width: 100%; height: 200px; object-fit: cover;" alt="" src="<?php echo $pic . $pic_name ;?>"></a>
                                        </div>
                                        <!-- Ad Img End -->
                                        <div class="short-description">
                                            <!-- Ad Category -->
                                            <div class="category-title"> <span><a href="ad_per_cat.php?cat_id=<?php echo $category_id;?>&dis=all&price=all&order=latest"><?php echo $cat_name; ?></a></span> </div>
                                            <!-- Ad Title -->
                                            <h3><a title="" href="ad_page.php?ad_id=<?php echo  $ad_id;?>"><?php echo $title;?></a></h3>
                                            <!-- Price -->
                                            <?php if ($selling_type == "BID") { ?><div class="price">€ <?php echo $price;?> <span class="negotiable">(Bid)</span></div><?php } else {?> <div class="price">€ <?php echo $price;?> </div><?php }?>
                                        </div>
                                        <!-- Addition Info -->
                                        <div class="ad-info">
                                            <ul>
                                                <li><i class="fa fa-map-marker"></i><?php echo $location; ?></li>
                                                <li><i class="fa fa-clock-o"></i> <?php echo $date;?> </li>
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
<!-- =-=-=-=-=-=-= home & garden slider =-=-=-=-=-=-= -->
<section class="custom-padding">
    <!-- Main Container -->
    <div class="container">
        <!-- Row -->
        <div class="row">
            <!-- Heading Area -->
            <div class="heading-panel">
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <h3 class="main-title text-left">
                        Nieuwste advertenties in <a href="ad_per_cat.php?cat_id=66&dis=all&price=all&order=latest" style="color:  rgba(166,85,218,0.86) "> Huishoudapparatuur</a>
                    </h3>
                </div>
            </div>
            <!-- Middle Content Box -->
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="row">
                    <div class="featured-slider owl-carousel owl-theme">
                        <?php

                        $query_1  = "SELECT * FROM `ADVERTISEMENT` WHERE `CATEGORY_id` = '66'";
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
                                $pic = "nl_ad_photo/";
                                $pic_name = "white.jpg";
                            }
                            ?>
                            <div class="item">
                                <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                    <!-- Ad Box -->
                                    <div class="category-grid-box">
                                        <!-- Ad Img -->
                                        <div class="image">
                                            <a href="ad_page.php?ad_id=<?php echo $ad_id; ?>"><img class="img-responsive " style="width: 100%; height: 200px; object-fit: cover;" alt="" src="<?php echo $pic . $pic_name ;?>"></a>
                                        </div>
                                        <!-- Ad Img End -->
                                        <div class="short-description">
                                            <!-- Ad Category -->
                                            <div class="category-title"> <span><a href="ad_per_cat.php?cat_id=<?php echo $category_id;?>&dis=all&price=all&order=latest"><?php echo $cat_name; ?></a></span> </div>
                                            <!-- Ad Title -->
                                            <h3><a title="" href="ad_page.php?ad_id=<?php echo $ad_id;?>"><?php echo $title;?></a></h3>
                                            <!-- Price -->
                                            <?php if ($selling_type == "BID") { ?><div class="price">€ <?php echo $price;?> <span class="negotiable">(Bid)</span></div><?php } else {?> <div class="price">€ <?php echo $price;?> </div><?php }?>
                                        </div>
                                        <!-- Addition Info -->
                                        <div class="ad-info">
                                            <ul>
                                                <li><i class="fa fa-map-marker"></i><?php echo $location; ?></li>
                                                <li><i class="fa fa-clock-o"></i> <?php echo $date;?> </li>
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
