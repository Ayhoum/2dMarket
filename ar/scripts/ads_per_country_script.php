<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 12-2-2018
 * Time: 13:00
 */
?>
<div class="posts-masonry">
<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 0;
}
$country = $_GET['country'];
if($order == 'latest'){
    $suffix = " `date` DESC";
}else if($order == 'priceLow'){
    $suffix = " `price` ASC";
}else if($order == 'priceHigh'){
    $suffix = " `price` DESC";
}




if($_GET['price'] != 'all'){
    if($minPrice == 0){
        $ad_query_get_num = "SELECT ADVERTISEMENT.*, ADDRESS.USER_id
                                          FROM ADVERTISEMENT
                                          LEFT JOIN ADDRESS ON ADVERTISEMENT.USER_id = ADDRESS.USER_id
                                          WHERE ADDRESS.country LIKE '%{$country}%' && ADVERTISEMENT.lang = 'AR' AND `price` <= '$maxPrice' ORDER BY " . $suffix;
    }else if($maxPrice == 'max'){
        $ad_query_get_num = "SELECT ADVERTISEMENT.*, ADDRESS.USER_id
                                          FROM ADVERTISEMENT
                                          LEFT JOIN ADDRESS ON ADVERTISEMENT.USER_id = ADDRESS.USER_id
                                          WHERE ADDRESS.country LIKE '%{$country}%' && ADVERTISEMENT.lang = 'AR' AND `price` >= '$minPrice' ORDER BY " . $suffix;
    }else{
        $ad_query_get_num = "SELECT ADVERTISEMENT.*, ADDRESS.USER_id
                                          FROM ADVERTISEMENT
                                          LEFT JOIN ADDRESS ON ADVERTISEMENT.USER_id = ADDRESS.USER_id
                                          WHERE ADDRESS.country LIKE '%{$country}%' && ADVERTISEMENT.lang = 'AR'  AND (`price` >= '$minPrice' AND `price` <= '$maxPrice') ORDER BY " . $suffix;
    }
}else{
    $ad_query_get_num = "SELECT ADVERTISEMENT.*, ADDRESS.USER_id
                                          FROM ADVERTISEMENT
                                          LEFT JOIN ADDRESS ON ADVERTISEMENT.USER_id = ADDRESS.USER_id
                                          WHERE ADDRESS.country LIKE '%{$country}%' && ADVERTISEMENT.lang = 'AR' ORDER BY " . $suffix;
}

$ad_result_get_num = mysqli_query($mysqli, $ad_query_get_num);
$num_Ads = mysqli_num_rows($ad_result_get_num);

if($num_Ads <= 10){

    if($_GET['price'] != 'all'){
        if($minPrice == 0){
            $ad_query = "SELECT ADVERTISEMENT.*, ADDRESS.USER_id
                                          FROM ADVERTISEMENT
                                          LEFT JOIN ADDRESS ON ADVERTISEMENT.USER_id = ADDRESS.USER_id
                                          WHERE ADDRESS.country LIKE '%{$country}%' && ADVERTISEMENT.lang = 'AR' AND `price` <= '$maxPrice' ORDER BY " . $suffix;
        }else if($maxPrice == 'max'){
            $ad_query = "SELECT ADVERTISEMENT.*, ADDRESS.USER_id
                                          FROM ADVERTISEMENT
                                          LEFT JOIN ADDRESS ON ADVERTISEMENT.USER_id = ADDRESS.USER_id
                                          WHERE ADDRESS.country LIKE '%{$country}%' && ADVERTISEMENT.lang = 'AR' AND `price` >= '$minPrice' ORDER BY " . $suffix;
        }else{
            $ad_query = "SELECT ADVERTISEMENT.*, ADDRESS.USER_id
                                          FROM ADVERTISEMENT
                                          LEFT JOIN ADDRESS ON ADVERTISEMENT.USER_id = ADDRESS.USER_id
                                          WHERE ADDRESS.country LIKE '%{$country}%' && ADVERTISEMENT.lang = 'AR'  AND (`price` >= '$minPrice' AND `price` <= '$maxPrice') ORDER BY " . $suffix;
        }
    }else{
        $ad_query = "SELECT ADVERTISEMENT.*, ADDRESS.USER_id
                                          FROM ADVERTISEMENT
                                          LEFT JOIN ADDRESS ON ADVERTISEMENT.USER_id = ADDRESS.USER_id
                                          WHERE ADDRESS.country LIKE '%{$country}%' && ADVERTISEMENT.lang = 'AR' ORDER BY " . $suffix;
    }

}else if($page == 0 || $page == 1){

    if($_GET['price'] != 'all'){
        if($minPrice == 0){
            $ad_query = "SELECT ADVERTISEMENT.*, ADDRESS.USER_id
                                          FROM ADVERTISEMENT
                                          LEFT JOIN ADDRESS ON ADVERTISEMENT.USER_id = ADDRESS.USER_id
                                          WHERE ADDRESS.country LIKE '%{$country}%' && ADVERTISEMENT.lang = 'AR' AND `price` <= '$maxPrice' ORDER BY " . $suffix . " LIMIT 10";
        }else if($maxPrice == 'max'){
            $ad_query = "SELECT ADVERTISEMENT.*, ADDRESS.USER_id
                                          FROM ADVERTISEMENT
                                          LEFT JOIN ADDRESS ON ADVERTISEMENT.USER_id = ADDRESS.USER_id
                                          WHERE ADDRESS.country LIKE '%{$country}%' && ADVERTISEMENT.lang = 'AR' AND `price` >= '$minPrice' ORDER BY " . $suffix . " LIMIT 10";
        }else{
            $ad_query = "SELECT ADVERTISEMENT.*, ADDRESS.USER_id
                                          FROM ADVERTISEMENT
                                          LEFT JOIN ADDRESS ON ADVERTISEMENT.USER_id = ADDRESS.USER_id
                                          WHERE ADDRESS.country LIKE '%{$country}%' && ADVERTISEMENT.lang = 'AR'  AND (`price` >= '$minPrice' AND `price` <= '$maxPrice') ORDER BY " . $suffix . " LIMIT 10";
        }
    }else{
        $ad_query = "SELECT ADVERTISEMENT.*, ADDRESS.USER_id
                                          FROM ADVERTISEMENT
                                          LEFT JOIN ADDRESS ON ADVERTISEMENT.USER_id = ADDRESS.USER_id
                                          WHERE ADDRESS.country LIKE '%{$country}%' && ADVERTISEMENT.lang = 'AR' ORDER BY " . $suffix . " LIMIT 10";
    }


}else if($page > 1){
    $start = (($page - 1) * 10);

    if($_GET['price'] != 'all'){
        if($minPrice == 0){
            $ad_query = "SELECT ADVERTISEMENT.*, ADDRESS.USER_id
                                          FROM ADVERTISEMENT
                                          LEFT JOIN ADDRESS ON ADVERTISEMENT.USER_id = ADDRESS.USER_id
                                          WHERE ADDRESS.country LIKE '%{$country}%' && ADVERTISEMENT.lang = 'AR' AND `price` <= '$maxPrice' ORDER BY " . $suffix . " LIMIT 10 OFFSET $start";
        }else if($maxPrice == 'max'){
            $ad_query = "SELECT ADVERTISEMENT.*, ADDRESS.USER_id
                                          FROM ADVERTISEMENT
                                          LEFT JOIN ADDRESS ON ADVERTISEMENT.USER_id = ADDRESS.USER_id
                                          WHERE ADDRESS.country LIKE '%{$country}%' && ADVERTISEMENT.lang = 'AR' AND `price` >= '$minPrice' ORDER BY " . $suffix . " LIMIT 10 OFFSET $start";
        }else{
            $ad_query = "SELECT ADVERTISEMENT.*, ADDRESS.USER_id
                                          FROM ADVERTISEMENT
                                          LEFT JOIN ADDRESS ON ADVERTISEMENT.USER_id = ADDRESS.USER_id
                                          WHERE ADDRESS.country LIKE '%{$country}%' && ADVERTISEMENT.lang = 'AR'  AND (`price` >= '$minPrice' AND `price` <= '$maxPrice') ORDER BY " . $suffix . " LIMIT 10 OFFSET $start";
        }
    }else{
        $ad_query = "SELECT ADVERTISEMENT.*, ADDRESS.USER_id
                                          FROM ADVERTISEMENT
                                          LEFT JOIN ADDRESS ON ADVERTISEMENT.USER_id = ADDRESS.USER_id
                                          WHERE ADDRESS.country LIKE '%{$country}%' && ADVERTISEMENT.lang = 'AR' ORDER BY " . $suffix . " LIMIT 10 OFFSET $start";
    }


}

$ad_result = mysqli_query($mysqli, $ad_query);

    if (mysqli_num_rows($ad_result) > 0) {
        while ($row = mysqli_fetch_assoc($ad_result)) {
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
             if (empty($user_pic)  ) {
                $user_pic = "https://cdn4.iconfinder.com/data/icons/web-ui-color/128/Account-256.png";
            }else{
                $user_pic = '../../uploads/users/'.$user_pic;
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
            }
            if(empty($pic_name)){
                $pic = 'en_ad_photo/';
                $pic_name = 'white.jpg';
            }
            ?>

            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12  ">
                <div class="white category-grid-box-1 ">
                    <!-- Image Box -->
                    <div class="image">  <a href="ad_page.php?ad_id=<?php echo $ad_id; ?>"><img class="img-responsive " style="width: 100%; height: 200px; object-fit: cover;" alt="" src="<?php echo $pic . $pic_name ;?>"></a> </div>
                    <!-- Short Description -->
                    <div class="short-description-1 ">
                        <!-- Category Title -->
                        <div class="category-title"> <span><a href="ad_per_cat.php?cat_id=<?php echo $category_id; ?>&dis=all&price=all&order=latest"><?php echo $cat_name;?></a></span> </div>
                        <!-- Ad Title -->
                        <h3>
                            <a title="" href="ad_page.php?ad_id=<?php echo $ad_id;?>"><?php echo $title;?></a>
                        </h3>
                        <!-- Location -->
                        <a href="profile_2.php?user_id=<?php echo $user_id; ?>"> <p class="location">  <i class="fa fa-user-circle"></i><?php echo $user_username;?></p> </a>
                        <p class="location"><i class="fa fa-map-marker">  </i><?php echo $user_postcode. " | " . $user_city ; ?></p>
                        <!-- Price -->
                        <span class="ad-price"><?php if ($selling_type == "BID"){ echo "Bid";}else{ echo "€ ". $price;}?></span>
                    </div>
                    <!-- Ad Meta Stats -->
                    <div class="ad-info-1">
                        <ul>
                            <li> <i class="fa fa-eye"></i><a href="#"><?php echo  $visits. " مشاهدة ";?></a> </li>
                            <li> <i class="fa fa-clock-o"></i><?php echo $date; ?> </li>
                        </ul>
                    </div>
                </div>
            </div>



            <?php

        }
    }
    ?>
    <div class="col-md-12 col-xs-12 col-sm-12">
        <section class="advertising">
            <a href="new_advertisement.php">
                <div class="banner">
                    <div class="wrapper">
                        <span class="title" style="float: right;">هل تريد مشاهدة اعلانـك ضمن هذه القـائمة ؟</span>
                        <span class="submit" style="float: left;">قم بنشر اعلانك الاًن! <i class="fa fa-plus-square"></i></span>
                    </div>
                </div>
                <!-- /.banner-->
            </a>
        </section>
    </div>

</div>


<div class="clearfix"></div>
<!-- Pagination -->
<div class="text-center margin-top-30 block-center">
    <ul class="pagination ">
        <?php
        if ($page != 0 && $page != 1) {
            ?>
            <li><a href="ads_per_country.php?order=<?php echo $order;?>&country=<?php echo $country;?>&&page=<?php echo $page - 1; ?>"> <i class="fa fa-chevron-left"
                                                                              aria-hidden="true"></i></a></li>
            <?php
        }
        $num_Ads = ceil($num_Ads / 10);
        for ($i = 1; $i <= $num_Ads; $i++) {
            ?>
            <li <?php if ($i == $page || ($i == 1 && $page == 0)) {
                echo 'class="active"';
            } ?>><a href="ads_per_country.php?order=<?php echo $order;?>&country=<?php echo $country;?>&&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>

        <?php } ?>
        <?php
        if ($page != $num_Ads) {
            ?>
            <li><a href="ads_per_country.php?order=<?php echo $order;?>&country=<?php echo $country;?>&&page=<?php echo $page + 1; ?>"> <i class="fa fa-chevron-right"
                                                                              aria-hidden="true"></i></a></li>
            <?php
        }
        ?>

    </ul>
</div>
<!-- Pagination End -->
