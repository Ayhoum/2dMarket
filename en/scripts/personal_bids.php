<?php
include 'sessions.php';
//include '../../scripts/db_connection.php';
//session_start();
ob_start();
?>
<div class="posts-masonry">
    <ul class="list-unstyled">
<?php
$user_id    = $_SESSION['id'];

$bid_query = "SELECT * FROM `BID` WHERE `USER_id` = '{$user_id}'";
$bid_result = mysqli_query($mysqli,$bid_query);
if (mysqli_num_rows($bid_result)) {
    while ($row = mysqli_fetch_assoc($bid_result)) {
        $id = $row['id'];
        $amount = $row['amount'];
        $time = $row['time'];
        $auction_id = $row['AUCTION_id'];
        $ad_id = $row['ad_id'];

        echo $ad_id . " | ". $amount . " | ". $time ;




        $ad_query = "SELECT * FROM `ADVERTISEMENT` WHERE `id` = '{$ad_id}'";
        $ad_result = mysqli_query($mysqli, $ad_query);
        while ($row = mysqli_fetch_assoc($ad_result)) {
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
            $ad_type = $row['ad_type'];

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
                    $user_country = $row['country'];

                    $location = $user_city . " | " . $user_country;

                }
            } else {
                $location = " Unknown Location ! ";
            }

            $image_query = "SELECT * FROM `ADVERTISEMENT_PICTURE` WHERE  `ADVERTISEMENT_id` = '{$ad_id}'";
            $image_result = mysqli_query($mysqli, $image_query);
            while ($row = mysqli_fetch_assoc($image_result)) {
                $pic = $row['picture_url'];
                $pic_name = $row['picture_name'];
            }

            $image_num_query = "SELECT COUNT(*) AS 'IMG_COUNT' from ADVERTISEMENT_PICTURE WHERE `ADVERTISEMENT_id` = '{$ad_id}'";
            $image_num_result = mysqli_query($mysqli, $image_num_query);
            while ($row = mysqli_fetch_assoc($image_num_result)) {
                $image_num = $row['IMG_COUNT'];
            }


            // check if the user has the highest amount :
            $bid_amount_query = "SELECT * FROM `BID` WHERE `ad_id` ='{$ad_id}' ORDER BY `amount`";
            $bid_amount_result = mysqli_query($mysqli, $bid_amount_query);
            while ($row = mysqli_fetch_assoc($bid_amount_result)) {
                $am_id = $row['id'];
                $am_amount = $row['amount'];
                $am_date = $row['time'];

                require_once 'time_elapse.php';
                $am_date = time_elapsed_string($am_date);
            }


            ?>

            <li>
                                    <div class="well ad-listing clearfix">
                                        <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                                            <!-- Image Box -->
                                            <div class="img-box">
                                                <img src="<?php echo $pic. $pic_name;?>" class="img-responsive" alt="">
                                                <div class="total-images"><strong><?php echo $image_num;?></strong> photos </div>
                                            </div>
                                            <!-- Ad Status --><?php if ($ad_type == "PREMIUM") {?><span class="ad-status"> PREMIUM </span> <?php } ?>
                                            <!-- User Preview -->
                                            <div class="user-preview">
                                                <a href="#"> <img src="images/users/2.jpg" class="avatar avatar-small" alt=""> </a>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-sm-7 col-xs-12">
                                            <!-- Ad Content-->
                                            <div class="row">
                                                <div class="content-area">
                                                    <div class="col-md-9 col-sm-12 col-xs-12">
                                                        <!-- Category Title -->
                                                        <div class="category-title"> <span><a href="#"><?php echo $cat_name;?></a></span> </div>
                                                        <!-- Ad Title -->
                                                        <h3><a><?php echo  $title; ?></a></h3>
                                                        <ul class="ad-meta-info">
                                                            <li> <i class="fa fa-map-marker"></i><a href="#"><?php echo $location ;?></a> </li>
                                                            <li> <i class="fa fa-clock-o"></i><?php echo $date; ?> </li>
                                                        </ul>
                                                        <!-- Ad Description-->
                                                        <div class="ad-details">
                                                            <p>Your Bid  : <?php if ($am_amount <= $amount) { ?> <span style="color: green"><?php echo $amount . "   You have the highest bid ";?> </span><?php } else {?><span style="color: red"><?php echo $amount;?> </span><?php }?></p>
                                                            <p>Highest Bid : <span><?php echo $am_amount;?></span></p>
                                                            <p>Last Bid Date : <span><?php echo $am_date ; ?></span> </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-xs-12 col-sm-12">
                                                        <!-- Ad Stats -->
                                                        <div class="short-info">
                                                            <div class="ad-stats hidden-xs"><span></span></div>
                                                            <div class="ad-stats hidden-xs"><span></span></div>
                                                            <div class="ad-stats hidden-xs"><span></span></div>
                                                        </div>

                                                        <!-- Ad View Button -->
                                                        <button class="btn btn-block btn-success" onclick="window.location.href='ad_page.php?ad_id=<?php echo $ad_id; ?>'"><i class="fa fa-eye" aria-hidden="true" ></i> View Ad.</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Ad Content End -->
                                        </div>
                                    </div>
                                </li>

            <?php

        }

    }

}



?>