<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 12-2-2018
 * Time: 20:04
 */
?>
<?php
if (isset($_GET['cat_id'])){
?>
<div class="panel-collapse">
    <div class="panel-body recent-ads">
        <div class="featured-slider-3">
            <?php $cat_id    = $_GET['cat_id'];
            $ad_query  = "SELECT * FROM `ADVERTISEMENT` WHERE `lang` = 'EN' && `CATEGORY_id` = '{$cat_id}'  && `ad_type` = 'PREMIUM' ORDER BY `date` DESC";
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
            $product_id     = $row['PRODUCT_id'];
            $category_id    = $row['CATEGORY_id'];


            //extract date:
            $date = strtotime($date);
            $date = date('d/m/Y', $date);

            // Category_info
            $cat_query  = "SELECT * FROM `CATEGORY` WHERE `id` = '{$category_id}'";
            $cat_result = mysqli_query($mysqli, $cat_query);
            if (mysqli_num_rows($cat_result) > 0) {
                while ($row = mysqli_fetch_assoc($cat_result)) {
                    $cat_name = $row['name'];
                }
            }


            $image_query  = "SELECT * FROM `PRODUCT_PICTURE` WHERE  `PRODUCT_id` = '{$product_id}'";
            $image_result = mysqli_query($mysqli, $image_query);
            while($row = mysqli_fetch_assoc($image_result)) {
                $pic = $row['picture_url'];
            }

            include 'user_info.php';
            include 'product_pics.php';
            ?>
                <!-- Featured Ads -->
                <div class="item">
                    <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                        <!-- Ad Box -->
                        <div class="category-grid-box">
                            <!-- Ad Img -->
                            <div class="category-grid-img">
                                <img class="img-responsive" alt="" src="<?php echo $picture_url ;?>">
                                <!-- Ad Status -->
                                <!-- User Review -->
                                <div class="user-preview">
                                    <a href="profile_2.php?user_id=<?php echo $user_id;?>"> <img src="<?php echo $user_pic;?>" class="avatar avatar-small" alt=""> </a>
                                </div>
                                <!-- View Details --><a href="ad_page.php?ad_id=<?php echo $ad_id;?>" class="view-details">View Details</a>
                            </div>
                            <!-- Ad Img End -->
                            <div class="short-description">
                                <!-- Ad Category -->
                                <div class="category-title"> <span><a href="ad_per_cat.php?id=<?php echo $category_id; ?>"><?php echo $cat_name;?></a></span> </div>
                                <!-- Ad Title -->
                                <h3><a title="" href="ad_page.php?ad_id=<?php echo $ad_id;?>"><?php echo $title;?></a></h3>
                                <!-- Price -->
                                <div class="price"><?php echo $price;?></div>
                            </div>
                            <!-- Addition Info -->
                            <div class="ad-info">
                                <ul>
                                    <li><i class="fa fa-map-marker"></i><?php echo $user_postcode. " | " . $user_city ; ?></li>
                                    <li><i class="fa fa-clock-o"></i><?php echo $date;?></li>
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
            <?php }else { ?>
            <div class="panel-collapse">
                <div class="panel-body recent-ads">
                    <div class="featured-slider-3">
                        <?php
                        $ad_query = "SELECT * FROM `ADVERTISEMENT` WHERE `lang` = 'EN' && `ad_type` = 'PREMIUM' ORDER BY `date` DESC";
                        $ad_result = mysqli_query($mysqli, $ad_query);

                        if (mysqli_num_rows($ad_result) > 0) {
                            while ($row = mysqli_fetch_assoc($ad_result)) {
                                $ad_id = $row['id'];
                                $title = $row['title'];
                                $date = $row['date'];
                                $price = $row['price'];
                                $description = $row['description'];
                                $condition = $row['condition'];

                                $status = $row['status'];
                                $selling_type = $row['selling_type'];
                                $delivery_type = $row['delivery_type'];

                                $user_id = $row['USER_id'];
                                $product_id = $row['PRODUCT_id'];
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

                                include 'user_info.php';
                                include 'product_pics.php';
                                ?>
                                <!-- Featured Ads -->
                                <div class="item">
                                    <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                                        <!-- Ad Box -->
                                        <div class="category-grid-box">
                                            <!-- Ad Img -->
                                            <div class="category-grid-img">
                                                <img class="img-responsive" alt="" src="<?php echo $picture_url; ?>">
                                                <!-- Ad Status -->
                                                <!-- User Review -->
                                                <div class="user-preview">
                                                    <a href="profile_2.php?user_id=<?php echo $user_id; ?>"> <img
                                                                src="<?php echo $user_pic; ?>"
                                                                class="avatar avatar-small" alt=""> </a>
                                                </div>
                                                <!-- View Details --><a href="ad_page.php?ad_id=<?php echo $ad_id; ?>"
                                                                        class="view-details">View Details</a>
                                            </div>
                                            <!-- Ad Img End -->
                                            <div class="short-description">
                                                <!-- Ad Category -->
                                                <div class="category-title"><span><a
                                                                href="ad_per_cat.php?id=<?php echo $category_id; ?>"><?php echo $cat_name; ?></a></span>
                                                </div>
                                                <!-- Ad Title -->
                                                <h3><a title=""
                                                       href="ad_page.php?ad_id=<?php echo $ad_id; ?>"><?php echo $title; ?></a>
                                                </h3>
                                                <!-- Price -->
                                                <div class="price"><?php echo $price; ?></div>
                                            </div>
                                            <!-- Addition Info -->
                                            <div class="ad-info">
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-map-marker"></i><?php echo $user_postcode . " | " . $user_city; ?>
                                                    </li>
                                                    <li><i class="fa fa-clock-o"></i><?php echo $date; ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Ad Box End -->
                                    </div>
                                </div>
                                <?php

                            }
                        }
                        }
?>
