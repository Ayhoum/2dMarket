<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 14-2-2018
 * Time: 11:03
 */
?>

<?php
$user_id = $_GET['user_id'];
    $ad_query  = "SELECT * FROM `ADVERTISEMENT` WHERE `USER_id` = '{$user_id}' ORDER BY `date` DESC";
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
            $ad_type        = $row['ad_type'];

            $user_id        = $row['USER_id'];
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


            $image_query  = "SELECT * FROM `ADVERTISEMENT_PICTURE` WHERE  `ADVERTISEMENT_id` = '{$ad_id}'";
            $image_result = mysqli_query($mysqli, $image_query);
            while($row = mysqli_fetch_assoc($image_result)) {
                $pic = $row['picture_url'];
                $pic_name = $row['picture_name'];
            }

            $image_query  = "SELECT COUNT(*) AS `count`  FROM `ADVERTISEMENT_PICTURE`  WHERE  `ADVERTISEMENT_id` = '{$ad_id}'";
            $image_result = mysqli_query($mysqli, $image_query);
            while($row = mysqli_fetch_assoc($image_result)) {
                $count = $row['count'];

            }


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

                    $location = $user_region . " / " . $user_country;

                }
            }


            ?>
        <div class="well ad-listing clearfix">
            <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                <!-- Image Box -->
                <div class="img-box">
                    <img src="<?php echo $pic . $pic_name; ?>" class="img-responsive" alt="">
                    <div class="total-images"><strong><?php echo $count; ?></strong> photos </div>
                </div>
                <?php if ($ad_type == 'FEATURED') {?>
                <!-- Ad Status --><span class="ad-status"> Featured </span>
                <?php }?>
                <!-- User Preview -->
                <div class="user-preview">
                    <a href="#"> <img src="../uploads/users/<?php echo $user_pic; ?>" class="avatar avatar-small" alt=""> </a>
                </div>
            </div>
            <div class="row">
                <div class="content-area">
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <!-- Category Title -->
                        <div class="category-title"> <span><a href="#"><?php echo $cat_name;?></a></span> </div>
                        <!-- Ad Title -->
                        <h3><a><?php echo $title; ?></a></h3>
                        <!-- Info Icons -->
                        <ul class="additional-info pull-right">
                            <li>
                                <a data-toggle="tooltip" title="Send Message" href="#" class="fa fa-envelope"></a>
                            </li>
                            <li>
                                <a data-toggle="tooltip" title="+92-4567-123" href="#" class="fa fa-phone"></a>
                            </li>
                            <li>
                                <a data-toggle="tooltip" title="Bookmark" href="scripts/add_to_favorite.php?ad_id=<?php echo $ad_id;?>" class="fa fa-heart"></a>
                            </li>
                        </ul>
                        <!-- Ad Meta Info -->
                        <ul class="ad-meta-info">
                            <li> <i class="fa fa-map-marker"></i><a href="#"><?php echo $location; ?></a> </li>
                            <li> <i class="fa fa-clock-o"></i><?php echo $date; ?></li>
                        </ul>
                        <!-- Ad Description-->
                        <div class="ad-details">
                            <p><?php echo $description; ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                        <!-- Ad Stats -->
                        <div class="short-info">
                            <div class="ad-stats hidden-xs"><span>Condition  : </span><?php echo $condition; ?></div>
                            <div class="ad-stats hidden-xs"><span>Sub Category : </span></div>
                        </div>
                        <!-- Price -->
                        <div class="price"> <span><?php echo "€ ". $price; ?></span> </div>
                        <!-- Ad View Button -->

                        <button  class="btn btn-block btn-success" onclick="window.location.href='ad_page.php?ad_id=<?php echo $ad_id; ?>'"> <i class="fa fa-eye" aria-hidden="true"></i> View Ad.</button>

                    </div>
                </div>
            </div>
        </div>

            <?php

        }
    }
//}
?>
