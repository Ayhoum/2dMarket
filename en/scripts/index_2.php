<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 14-3-2018
 * Time: 12:12
 */

?>
<?php

$ads = "SELECT * FROM `ADVERTISEMENT` WHERE `lang` = 'EN' ORDER BY `id` DESC LIMIT 6";
$ad_result = mysqli_query($mysqli, $ads);

if (mysqli_num_rows($ad_result) > 0) {
    while ($row = mysqli_fetch_assoc($ad_result)) {
        $ad_id = $row['id'];
        $title = $row['title'];
        $date = $row['date'];
        $price = $row['price'];
        $description = $row['description'];
        $condition = $row['condition'];
        $vistis = $row['visits'];
        $ad_type = $row['ad_type'];

        $status = $row['status'];
        $selling_type = $row['selling_type'];
        $delivery_type = $row['delivery_type'];

        $user_id = $row['USER_id'];
        $category_id = $row['CATEGORY_id'];


        //extract date:
        require_once 'time_elapse.php';
        $date = time_elapsed_string($date);

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

        $image_query = "SELECT * FROM `ADVERTISEMENT_PICTURE` WHERE  `ADVERTISEMENT_id` = '{$ad_id}'";
        $image_result = mysqli_query($mysqli, $image_query);
        while ($row = mysqli_fetch_assoc($image_result)) {
            $pic = $row['picture_url'];
            $pic_name = $row['picture_name'];
        }

        ?>
        <div class="item">
            <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                <!-- Ad Box -->
                <div class="category-grid-box">
                    <!-- Ad Img -->
                    <div class="category-grid-img">
                        <img class="img-responsive " style="width: 100%; height: 256px; object-fit: cover;" alt="" src="<?php echo $pic . $pic_name ;?>">
                        <!-- Ad Status --><?php if ($ad_type == "PREMIUM") {  ?><span class="ad-status"> PREMIUM </span><?php } ?>
                        <!-- User Review -->
                        <div class="user-preview">
                            <a href="profile_2.php?user_id=<?php  echo $user_id;?>"> <img src="<?php echo $user_pic;?>" class="avatar avatar-small" alt=""> </a>
                        </div>
                        <!-- View Details --><a href="ad_page.php?ad_id=<?php echo $ad_id?>" class="view-details">View Details</a>
                        <!-- Additional Info -->
                        <div class="additional-information">
                            <?php  echo $description;?>
                        </div>
                        <!-- Additional Info End-->
                    </div>
                    <!-- Ad Img End -->
                    <div class="short-description">
                        <!-- Ad Category -->
                        <div class="category-title"> <span><a href="ad_per_cat.php?cat_id=<?php echo $category_id;?>&dis=all&price=all&order=latest"><?php echo $cat_name;?></a></span> </div>
                        <!-- Ad Title -->
                        <h3><a title="" href="single-page-listing.html"><?php echo $title;?></a></h3>
                        <!-- Price -->
                        <div class="price"><?php if ($selling_type == "FIXED_PRICE"){  echo "€ ". $price; }else { echo "(BID)";}?></div>
                    </div>
                    <!-- Addition Info -->
                    <div class="ad-info">
                        <ul>
                            <li><i class="fa fa-map-marker"></i><?php echo $location;?></li>
                            <li><i class="fa fa-clock-o"></i> <?php echo  $date; ?> </li>
                        </ul>
                    </div>
                </div>
                <!-- Ad Box End -->
            </div>
        </div>

        <?php
    }
}
?>