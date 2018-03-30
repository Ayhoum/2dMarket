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

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 0;
}

$ad_query_get_num = "SELECT * FROM `ADVERTISEMENT` WHERE `lang`= 'NL' && `USER_id` = '{$user_id}' ORDER BY `date` DESC";
$ad_result_get_num = mysqli_query($mysqli, $ad_query_get_num);
$num_Ads = mysqli_num_rows($ad_result_get_num);

if($num_Ads <= 5){
    $ad_query = "SELECT * FROM `ADVERTISEMENT` WHERE `lang`= 'NL' && `USER_id` = '{$user_id}' ORDER BY `date` DESC";
}else if($page == 0 || $page == 1){
    $ad_query = "SELECT * FROM `ADVERTISEMENT` WHERE `lang`= 'NL' && `USER_id` = '{$user_id}' ORDER BY `date` DESC LIMIT 5";
}else if($page > 1){
    $start = (($page - 1) * 5);
    $ad_query = "SELECT * FROM `ADVERTISEMENT` WHERE `lang`= 'NL' && `USER_id` = '{$user_id}' ORDER BY `date` DESC LIMIT 5 OFFSET $start";

}
    $ad_query  = "SELECT * FROM `ADVERTISEMENT` WHERE `lang`= 'NL' && `USER_id` = '{$user_id}' ORDER BY `date` DESC";
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
            $sub_cat_id     = $row['sub_cat_id'];


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
            if (mysqli_num_rows($image_result) > 0 ){
                while($row = mysqli_fetch_assoc($image_result)) {
                    $pic = $row['picture_url'];
                    $pic_name = $row['picture_name'];
                }
            }else{
                $pic = "en_ad_photo/";
                $pic_name = "white.jpg";
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

                    $location = $user_region . " | " . $user_country;

                }
            }

            $sub_cat_query  = "SELECT * FROM `SUB_CATEGORY` WHERE `id`= '{$sub_cat_id}'";
            $sub_cat_result =  mysqli_query($mysqli,$sub_cat_query);
            while ($row=mysqli_fetch_assoc($sub_cat_result)){
                $sub_cat_id   = $row['id'];
                $sub_cat_name = $row['name'];
            }
            ?>
        <div class="well ad-listing clearfix">
            <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                <!-- Image Box -->
                <div class="img-box">
                    <img style="width: 100%; height: 200px; object-fit: cover;" src="<?php echo $pic . $pic_name; ?>" class="img-responsive" alt="">
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
                        <div class="category-title"> <span><a href="ads_per_cat_.php?cat_id=<?php echo $category_id;?>"><?php echo $cat_name;?></a></span> </div>
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
                            <div class="ad-stats hidden-xs"><span>Sub Category : </span><?php echo $sub_cat_name; ?></div>
                        </div>
                        <!-- Price -->
                        <div class="price"> <span><?php if ($selling_type == "FIXED_PRICE"){echo "€ ". $price;} else echo "(BID)";?></span> </div>
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
<div class="clearfix"></div>
<!-- Pagination -->
<div class="text-center margin-top-30 block-center">
    <ul class="pagination ">
        <?php
        if ($page != 0 && $page != 1) {
            ?>
            <li><a href="profile_2.php?user_id=<?php echo $user_id;?>&&page=<?php echo $page - 1; ?>"> <i class="fa fa-chevron-left"
                                                                                                                      aria-hidden="true"></i></a></li>
            <?php
        }
        $num_Ads = ceil($num_Ads / 5);
        for ($i = 1; $i <= $num_Ads; $i++) {
            ?>
            <li <?php if ($i == $page || ($i == 1 && $page == 0)) {
                echo 'class="active"';
            } ?>><a href="profile_2.php?user_id=<?php echo $user_id;?>&&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>

        <?php } ?>
        <?php
        if ($page != $num_Ads) {
            ?>
            <li><a href="profile_2.php?user_id=<?php echo $user_id;?>&&page=<?php echo $page + 1; ?>"> <i class="fa fa-chevron-right"
                                                                                                                      aria-hidden="true"></i></a></li>
            <?php
        }
        ?>

    </ul>
</div>