<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 14-3-2018
 * Time: 12:12
 */

?>
<?php

$ads = "SELECT * FROM `ADVERTISEMENT` WHERE `lang` = 'EN' ORDER BY `id` DESC LIMIT 3";
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
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="blog-post">
                <div class="post-img">
                    <a href="ad_page.php?ad_id=<?php echo $ad_id; ?>"> <img class="img-responsive" alt=""
                                                                            src="<?php echo $pic . $pic_name; ?>"> </a>
                </div>
            <h3 class="post-title"><a href="ad_page.php?ad_id=<?php echo $ad_id; ?>"> <?php echo $title; ?></a></h3>
            <div class="post-info"><a href=""><?php if ($selling_type == "BID") {
                                echo "Bid";
                            } else {
                                echo "€ " . $price;
                            }
                            ?></a></div>
            <div class="post-info"><a href=""><?php echo $date; ?></a> <a href="#"><?php echo $location; ?></a></div>
            <div class="post-info"><a href="#"> <?php echo $delivery_type . " | " . $selling_type; ?></a></div>
            <p class="post-excerpt"><?php echo $description; ?> </p>
        </div>
        </div>
        <?php
    }
}
?>