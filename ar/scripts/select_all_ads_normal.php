<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 12-2-2018
 * Time: 13:00
 */
if (isset($_GET['cat_id'])){
    $cat_id    = $_GET['cat_id'];
    $ad_query  = "SELECT * FROM `ADVERTISEMENT` WHERE `lang` = 'AR' && `CATEGORY_id` = '{$cat_id}'  && `ad_type` = 'NORMAL' ORDER BY `date` DESC";
    $ad_result = mysqli_query($mysqli, $ad_query);

    if (mysqli_num_rows($ad_result) > 0 ){
        while ($row = mysqli_fetch_assoc($ad_result)) {
            $ad_id          = $row['id'];
            $title          = $row['title'];
            $date           = $row['date'];
            $price          = $row['price'];
            $description    = $row['description'];
            $condition      = $row['condition'];

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


            $image_query  = "SELECT * FROM `ADVERTISEMENT_PICTURE` WHERE  `ADVERTISEMENT_id` = '{$ad_id}'";
            $image_result = mysqli_query($mysqli, $image_query);
            while($row = mysqli_fetch_assoc($image_result)) {
                $pic = $row['picture_url'];
                $pic_name = $row['picture_name'];
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

                }
            } else {
                $user_postcode = "unknown ";
                $user_city = "address";
            }
            ?>
            <!-- Listing Ad Grid -->
            <div class="col-md-6 col-xs-12 col-sm-6">
                <!-- Ad Box -->
                <div class="category-grid-box">
                    <!-- Ad Img -->
                    <div class="category-grid-img">
                        <img class="img-responsive " style="width: 100%; height: 200px; object-fit: cover;" alt="" src="<?php echo $pic . $pic_name ;?>">
                        <!-- Ad Status -->
                        <!-- User Review -->
                        <div class="user-preview">
                            <a href="profile_2.php?user_id=<?php echo $user_id;?>"> <img src="../uploads/users<?php echo $user_pic;?>" class="avatar avatar-small" alt="<?php echo $user_username; ?>"> </a>
                        </div>
                        <!-- View Details --><a href="ad_page.php?ad_id=<?php echo $ad_id;?>" class="view-details">View Details</a>
                        <!-- Additional Info -->
                        <div class="additional-information">
                            <p><?php echo $description; ?></p>

                        </div>
                        <!-- Additional Info End-->
                    </div>
                    <!-- Ad Img End -->
                    <div class="short-description">
                        <?php      if ($status == "SOLD"){?>        <p> <span class="label label-danger"><?php echo $status ;?></span></p>
                        <?php }elseif ($status == "RESERVED"){?>    <p> <span class="label label-warning"><?php echo $status ;?></span></p>
                        <?php }elseif ($status == "AVAILABLE "){?>  <p> <span class="label label-success"><?php echo $status ;?></span></p><?php }?>
                        <!-- Ad Category -->
                        <div class="category-title"> <span><a href="ad_per_cat.php?cat_id=<?php echo $category_id; ?>&dis=all&price=all&order=latest"><?php echo $cat_name;?></a></span> </div>
                        <!-- Ad Title -->
                        <h3><a title="" href="ad_page.php?ad_id=<?php echo $ad_id;?>"><?php echo $title;?></a></h3>
                        <!-- Price -->
                        <div class="price"><?php if ($selling_type == "BID"){ echo "Bid";} else{ echo $price;}?></div>
                    </div>
                    <!-- Addition Info -->
                    <div class="ad-info">
                        <ul>
                            <li><i class="fa fa-map-marker"></i><?php echo $user_postcode. " | " . $user_city ; ?></li>
                            <li><i class="fa fa-clock-o"></i> <?php echo $date;?> </li>
                        </ul>
                    </div>
                </div>
                <!-- Ad Box End -->
            </div>

            <!-- Listing Ad Grid -->
            <?php

        }
    } else{
            ?>
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div role="alert" class="alert alert-danger alert-dismissible center-block">
                    <strong>Warning! </strong> There are not any matched results, based on your search
                </div>
            </div>
            <?php
        }
    } else{
$ad_query  = "SELECT * FROM `ADVERTISEMENT` WHERE `lang` = 'AR' && `ad_type` = 'NORMAL' ORDER BY `date` DESC";
$ad_result = mysqli_query($mysqli, $ad_query);

if (mysqli_num_rows($ad_result) > 0 ){
    while ($row = mysqli_fetch_assoc($ad_result)) {
        $ad_id          = $row['id'];
        $title          = $row['title'];
        $date           = $row['date'];
        $price          = $row['price'];
        $description    = $row['description'];
        $condition      = $row['condition'];

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
            ?>
        <div class="col-md-6 col-xs-12 col-sm-6">
            <!-- Ad Box -->
            <div class="category-grid-box">
                <!-- Ad Img -->
                <div class="category-grid-img">
                    <img class="img-responsive " style="width: 100%; height: 200px; object-fit: cover;" alt="" src="<?php echo $pic . $pic_name ;?>">
                    <!-- Ad Status -->
                    <!-- User Review -->
                    <div class="user-preview">
                        <a href="profile_2.php?user_id=<?php echo $user_id;?>"> <img src="../uploads/users/<?php echo $user_pic;?>" class="avatar avatar-small" alt="<?php echo $user_username;?>"> </a>
                    </div>
                    <!-- View Details --><a href="ad_page.php?ad_id=<?php echo $ad_id;?>" class="view-details">View Details</a>
                    <!-- Additional Info -->
                    <div class="additional-information">
                        <p><?php echo $description; ?></p>
                    </div>
                    <!-- Additional Info End-->
                </div>
                <!-- Ad Img End -->
                <div class="short-description">
                    <?php      if ($status == "SOLD"){?>        <p> <span class="label label-danger"><?php echo $status ;?></span></p>
                    <?php }elseif ($status == "RESERVED"){?>    <p> <span class="label label-warning"><?php echo $status ;?></span></p>
                    <?php }elseif ($status == "AVAILABLE "){?>  <p> <span class="label label-success"><?php echo $status ;?></span></p><?php }?>
                    <!-- Ad Category -->
                    <div class="category-title"> <span><a href="ad_per_cat.php?cat_id=<?php echo $category_id; ?>&dis=all&price=all&order=latest"><?php echo $cat_name;?></a></span> </div>
                    <!-- Ad Title -->
                    <h3><a title="" href="ad_page.php?ad_id=<?php echo $ad_id;?>"><?php echo $title;?></a></h3>
                    <!-- Price -->
                    <div class="price"><?php if ($selling_type == "BID"){ echo "Bid";}else{ echo $price;}?></div>
                </div>
                <!-- Addition Info -->
                <div class="ad-info">
                    <ul>
                        <li><i class="fa fa-map-marker"></i><?php echo $user_postcode. " | " . $user_city ; ?></li>
                        <li><i class="fa fa-clock-o"></i> <?php echo $date;?> </li>
                    </ul>
                </div>
            </div>
            <!-- Ad Box End -->
        </div>
        <?php

    }
  } else{
    ?>
    <div class="col-md-12 col-xs-12 col-sm-12">
        <div role="alert" class="alert alert-danger alert-dismissible center-block">
            <strong>Warning! </strong> There are not any matched results, based on your search
        </div>
    </div>
    <?php
  }
}
?>
