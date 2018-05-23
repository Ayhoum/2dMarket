<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 14-3-2018
 * Time: 10:48
 */
?>
<?php

$featured_ads = "SELECT * FROM `ADVERTISEMENT` WHERE `lang` = 'AR'  ORDER BY `date` DESC LIMIT 6";
$ad_result = mysqli_query($mysqli, $featured_ads);

if (mysqli_num_rows($ad_result) > 0) {
    while ($row = mysqli_fetch_assoc($ad_result)) {
        $ad_id = $row['id'];
        $title = $row['title'];
        $date = $row['date'];
        $price = $row['price'];
        $description = $row['description'];
        $condition = $row['condition'];
        $vistis = $row['visits'];
        $description = strip_tags($description);
        $description = substr($description, 0, 200);

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

                $location = $user_city .  " | ". $user_country;
            }
        }
        $image_query = "SELECT * FROM `ADVERTISEMENT_PICTURE` WHERE  `ADVERTISEMENT_id` = '{$ad_id}'";
        $image_result = mysqli_query($mysqli, $image_query);
        while ($row = mysqli_fetch_assoc($image_result)) {
            $pic = $row['picture_url'];
            $pic_name = $row['picture_name'];
        }
        if(empty($pic_name)){
            $pic = 'ar_ad_photo/';
            $pic_name = 'white.jpg';
        }
        ?>

        <div class="item col-md-4 col-sm-6 col-xs-12 clearfix">
            <div class="category-grid-box-1">
                <!-- Image Box -->
                <div class="image">
                    <img alt="Tour Package"  style="width: 100%; height: 256px; object-fit: cover;" src="<?php echo $pic. $pic_name;?>" class="img-responsive">
                    <div class="price-tag">
                        <div class="price"><span><?php
                                if ($selling_type=="BID"){
                                    echo "مزاد";
                                } else {
                                    echo "€ ". $price;
                                }
                                ?></span></div>
                    </div>
                </div>
                <!-- Short Description -->
                <div class="short-description-1 clearfix">
                    <!-- Category Title -->
                    <div class="category-title"> <span><a href="ad_per_cat.php?cat_id=<?php echo  $category_id; ?>"><?php echo $cat_name; ?></a></span> </div>
                    <!-- Ad Title -->
                    <h3><a title="" href="ad_page.php?ad_id=<?php echo $ad_id;?>"><?php echo  $title; ?></a></h3>
                    <!-- Short Description -->
                    <p class="list-group-item-text"> <?php echo $description; ?> </p>
                    <!-- Ad Meta Info -->
                    <ul class="ad-meta-info">
                        <li>
                            <a href="#" data-toggle="tooltip" title="معلومات الاعلان "> <i class="flaticon-ribbon-badge"></i><?php echo $delivery_type . " | ". $selling_type;?></a>
                        </li>
                        <li> <a href="#" data-toggle="tooltip" title="حالة المنتج"><i class="flaticon-check-square"></i><?php echo  $condition;?></a> </li>
                        <li> <a href="profile_2.php?user_id=<?php echo $user_id;?>" data-toggle="tooltip" title="المعلن "><i class="flaticon-man"></i><?php echo $user_username; ?></a> </li>
                    </ul>
                </div>
                <!-- Ad Meta Stats -->
                <div class="ad-info-1">
                    <ul>
                        <li> <i class="fa fa-map-marker"></i><a href="#"><?php echo $location;?></a> </li>
                        <li> <i class="fa fa-clock-o"></i><?php echo $date;?></li>
                        <li class="views"> <i class="fa fa-eye"></i><?php echo $vistis . " مشاهدة "?> </li>
                    </ul>
                    <!-- View All Button -->
                    <div class="detail-button"> <a href="ad_page.php?ad_id=<?php echo $ad_id;?>">المزيد من التفاصيل</a> </div>
                </div>
            </div>
        </div>


        <?php
    }
}
?>
