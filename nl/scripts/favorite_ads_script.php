<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 4-3-2018
 * Time: 16:37
 */

$user_id = $_SESSION['id'];
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 0;
}
$user_id = $_SESSION['id'];

$ad_query_get_num = "SELECT * FROM `FAV_ADS` WHERE `user_id` = '{$user_id}' ";
$ad_result_get_num = mysqli_query($mysqli, $ad_query_get_num);
$num_Ads = mysqli_num_rows($ad_result_get_num);

?>

<div class="posts-masonry">
    <!-- Listing Ad Grid -->
    <?php

    if($num_Ads <= 6){
        $ad_query = "SELECT * FROM `FAV_ADS` WHERE `user_id` = '{$user_id}' ORDER BY `id` DESC";
    }else if($page == 0 || $page == 1){
        $ad_query = "SELECT * FROM `FAV_ADS` WHERE `user_id` = '{$user_id}' ORDER BY `id` DESC LIMIT 6";
    }else if($page > 1){
        $start = (($page - 1) * 6);
        $ad_query = "SELECT * FROM `FAV_ADS` WHERE `user_id` = '{$user_id}' ORDER BY `id` DESC LIMIT 6 OFFSET $start";

    }



    $ad_result = mysqli_query($mysqli, $ad_query);

    if (mysqli_num_rows($ad_result) > 0) {
        while ($row = mysqli_fetch_assoc($ad_result)) {
            $ad_id = $row['ad_id'];


            $ad_query_1 = "SELECT * FROM `ADVERTISEMENT` WHERE `id` = '{$ad_id}' ORDER BY `date` DESC";
            $ad_result_1 = mysqli_query($mysqli, $ad_query_1);

            if (mysqli_num_rows($ad_result_1) > 0) {
                while ($row = mysqli_fetch_assoc($ad_result_1)) {
                    $ad_id = $row['id'];
                    $title = $row['title'];
                    $date = $row['date'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $condition = $row['condition'];
                    $visits = $row['visits'];

                    $status = $row['status'];
                    $selling_type = $row['selling_type'];
                    $delivery_type = $row['delivery_type'];

                    $user_id = $row['USER_id'];
                    $category_id = $row['CATEGORY_id'];


                    //extract date:
                    $date = strtotime($date);
                    $date = date('d/m/Y', $date);

                    // Category_info
                    $cat_query = "SELECT * FROM `CATEGORY` WHERE `id` = '{$category_id}'";
                    $cat_result = mysqli_query($mysqli, $cat_query);
                    if (mysqli_num_rows($cat_result) > 0) {
                        while ($row = mysqli_fetch_assoc($cat_result)) {
                            $cat_name = $row['name'];
                        }
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

                    $image_query = "SELECT * FROM `ADVERTISEMENT_PICTURE` WHERE  `ADVERTISEMENT_id` = '{$ad_id}'";
                    $image_result = mysqli_query($mysqli, $image_query);
                    while ($row = mysqli_fetch_assoc($image_result)) {
                        $pic = $row['picture_url'];
                        $pic_name = $row['picture_name'];
                    }


                }
            }

            ?>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 ">
                <div class="white category-grid-box-1 ">
                    <!-- Image Box -->
                    <?php
                    if (empty($picture_name)) {
                        $picture_name = "white.jpg";
                    }
                    ?>
                    <div class="image"><img src="en_ad_photo/<?php echo $picture_name; ?>" class="img-responsive">

                    </div>
                    <!-- Short Description -->
                    <div class="short-description-1 ">
                        <!-- Category Title -->
                        <div class="category-title"><span><a href=""><?php echo $cat_name; ?></a></span></div>
                        <!-- Ad Title -->
                        <h3>
                            <a title="" href="ad_page.php?ad_id=<?php echo $ad_id; ?>"><?php echo $title; ?></a>
                        </h3>
                        <!-- Location -->
                        <p class="location"><i
                                    class="fa fa-map-marker"></i> <?php echo $user_postcode . " | " . $user_city ?></p>
                        <!-- Rating -->
                        <!-- Price --><span class="ad-price" style="float: left"><?php echo $price; ?></span>
                    </div>
                    <!-- Ad Meta Stats -->
                    <div class="ad-info-1">
                        <ul class="pull-left">
                            <li><i class="fa fa-eye"></i><a href="#"><?php echo $visits; ?> Views</a></li>
                            <li><i class="fa fa-clock-o"></i><?php echo $date; ?></li>
                        </ul>
                    </div>
                </div>
            </div>

            <?php
        }
    } else {
        ?>
        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <section class="advertising">
                <a href="all_product">
                    <div class="banner">
                        <div class="wrapper">
                            <span class="title">Oh no! it seems that you don't have any Favorite Ads on our website yet!</span>
                        </div>
                    </div>
                    <!-- /.banner-->
                </a>
            </section>
        </div>
        <?php
    }
    ?>
</div>
<!-- Ads Archive End -->
<div class="clearfix"></div>
<div class="col-md-12 col-xs-12 col-sm-12">
    <ul class="pagination pagination-lg">
        <?php
        if ($page != 0 && $page != 1) {
            ?>
            <li><a href="favourite_ads.php?page=<?php echo $page - 1; ?>"> <i class="fa fa-chevron-left"
                                                                             aria-hidden="true"></i></a></li>
            <?php
        }
        $num_Ads = ceil($num_Ads / 6);
        for ($i = 1; $i <= $num_Ads; $i++) {
            ?>
            <li <?php if ($i == $page || ($i == 1 && $page == 0)) {
                echo 'class="active"';
            } ?>><a href="favourite_ads.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>

        <?php } ?>
        <?php
        if ($page != $num_Ads) {
            ?>
            <li><a href="favourite_ads.php?page=<?php echo $page + 1; ?>"> <i class="fa fa-chevron-right"
                                                                             aria-hidden="true"></i></a></li>
            <?php
        }
        ?>

    </ul>
</div>

<!-- Pagination End -->
