<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 4-3-2018
 * Time: 16:37
 */

$user_id = $_SESSION['id'];
//    $user_id = 1;
$ad_query  = "SELECT * FROM `FAV_ADS` WHERE `user_id` = '{$user_id}' ";
$ad_result = mysqli_query($mysqli, $ad_query);

if (mysqli_num_rows($ad_result) > 0 ) {
    while ($row = mysqli_fetch_assoc($ad_result)) {
        $ad_id = $row['ad_id'];


    $ad_query_1  = "SELECT * FROM `ADVERTISEMENT` WHERE `id` = '{$ad_id}' ORDER BY `date` DESC";
    $ad_result_1 = mysqli_query($mysqli, $ad_query_1);

    if (mysqli_num_rows($ad_result_1) > 0 ) {
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

            $image_query  = "SELECT * FROM `ADVERTISEMENT_PICTURE` WHERE  `ADVERTISEMENT_id` = '{$ad_id}'";
            $image_result = mysqli_query($mysqli, $image_query);
            while($row = mysqli_fetch_assoc($image_result)) {
                $pic = $row['picture_url'];
                $pic_name = $row['picture_name'];
            }


        }
    }

        ?>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 ">
            <div class="white category-grid-box-1 ">
                <!-- Image Box -->
                <div class="image"><img alt="Tour Package" src="<?php echo $pic. $pic_name;?>" class="img-responsive">
                </div>
                <!-- Short Description -->
                <div class="short-description-1 ">
                    <!-- Category Title -->
                    <div class="category-title"><span><a href=""><?php echo $cat_name;?></a></span></div>
                    <!-- Ad Title -->
                    <h3>
                        <a title="" href="ad_page.php?ad_id=<?php echo $ad_id; ?>"><?php echo $title; ?></a>
                    </h3>
                    <!-- Location -->
                    <p class="location"><i class="fa fa-map-marker"></i> <?php echo $user_postcode. " | " . $user_city?></p>
                    <!-- Rating -->
                    <!-- Price --><span class="ad-price" style="float: left"><?php echo $price; ?></span>
                </div>
                <!-- Ad Meta Stats -->
                <div class="ad-info-1">
                    <ul class="pull-left">
                        <li><i class="fa fa-eye"></i><a href="#"><?php echo $visits; ?> Views</a></li>
                        <li><i class="fa fa-clock-o"></i><?php echo $date;?></li>
                    </ul>
                </div>
            </div>
        </div>

        <?php
    }
} else{
    ?>
    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
        <section class="advertising">
            <a href="all_product">
                <div class="banner">
                    <div class="wrapper">
                        <span class="title">Oh no ! it seems that you don't have any Favorite Ads on our website yet!</span>
                        <span class="submit">Submit one now! <i class="fa fa-plus-square"></i></span>
                    </div>
                </div>
                <!-- /.banner-->
            </a>
        </section>
    </div>
    <?php
}
?>