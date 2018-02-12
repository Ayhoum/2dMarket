<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 12-2-2018
 * Time: 20:04
 */
?>
<?php
$ad_query  = "SELECT * FROM `ADVERTISEMENT` WHERE `lang` = 'EN' && `ad_type` = 'PREMIUM' ORDER BY `date` DESC";
$ad_result = mysqli_query($mysqli, $ad_query);

if (mysqli_num_rows($ad_result) > 0 ) {
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


        $image_query = "SELECT * FROM `PRODUCT_PICTURE` WHERE  `PRODUCT_id` = '{$product_id}'";
        $image_result = mysqli_query($mysqli, $image_query);
        while ($row = mysqli_fetch_assoc($image_result)) {
            $pic = $row['picture_url'];
        }
        ?>

        <div class="item">
        <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
        <!-- Ad Box -->
        <div class="category-grid-box">
            <!-- Ad Img -->
            <div class="category-grid-img">
                <img class="img-responsive" alt="" src="<?php //echo $pic;?>">
                <!-- Ad Status -->
                <!-- User Review -->
                <div class="user-preview">
                    <a href="#"> <img src="<?php //echo $profile_pic; ?>" class="avatar avatar-small" alt=""> </a>
                </div>
                <!-- View Details --><a href="" class="view-details">View Details</a>
            </div>
            <!-- Ad Img End -->
            <div class="short-description">
                <!-- Ad Category -->
                <div class="category-title"><span><a href="#"><?php echo $cat_name; ?></a></span></div>
                <!-- Ad Title -->
                <h3><a title="" href="single-page-listing.html"><?php echo $title; ?></a></h3>
                <!-- Price -->
                <div class="price"><?php echo $price; ?></div>
            </div>
            <!-- Addition Info -->
            <div class="ad-info">
                <ul>
                    <li><i class="fa fa-map-marker"></i><?php //echo $location; ?></li>
                    <li><i class="fa fa-clock-o"></i><?php echo $date; ?> </li>
                </ul>
            </div>
        </div>
        <?php

    }
}
    ?>