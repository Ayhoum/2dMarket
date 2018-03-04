<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 4-3-2018
 * Time: 21:37
 */
?>

<?php
if (isset($_GET['ad_id'])){

    $ad_id = $_GET['ad_id'];
    $ad_query = "SELECT * FROM `ADVERTISEMENT` WHERE `id` = {$ad_id}";
    $ad_result = mysqli_query($mysqli, $ad_query);

    if(mysqli_num_rows($ad_result) > 0 ){
        while ($row= mysqli_fetch_assoc($ad_result)){
            $title          = $row['title'];
            $lang           = $row['lang'];
            $selling_type   = $row['selling_type'];
            $status         = $row['status'];
            $delivery_type  = $row['delivery_type'];
            $description    = $row['description'];
            $ad_type        = $row['ad_type'];
            $date           = $row['date'];
            $price          = $row['price'];
            $condition      = $row['condition'];
            $visits         = $row['visits'];

            $user_id        = $row['USER_id'];
            $category_id    = $row['CATEGORY_id'];
        }

        $add_visit_query = "UPDATE `ADVERTISEMENT` SET `visits` = + 1  WHERE `id` = '{$ad_id}'";



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


            }
        } else {
            $user_postcode = "unknown ";
            $user_city = "address";
        }




    }

}

?>


<div class="single-ad">
    <!-- Title -->
    <div class="ad-box">
        <h1><?php echo $title; ?></h1>
        <div class="short-history">
            <ul>
                <li>Published on: <b><?php echo $date; ?></b></li>
                <li>Category: <b><a href="#"><?php echo $cat_name; ?></a></b></li>
                <li>Location: <b><?php echo $user_region. " | ". $user_country; ?></b></li>
            </ul>
        </div>
    </div>
    <!-- Listing Slider  -->
    <div class="flexslider single-page-slider">
        <div class="flex-viewport">
            <ul class="slides slide-main">
                <?php
                $img_query  = "SELECT * FROM `ADVERTISEMENT_PICTURE` WHERE `ADVERTISEMENT_id` = '{$ad_id}'";
                $img_result = mysqli_query($mysqli, $img_query);
                if (mysqli_num_rows($img_result) > 0 ){
                while ($row = mysqli_fetch_assoc($img_result)){
                $picture_name = $row['picture_name'];
                $picture_url = $row['picture_url'];


                ?>
                    <li class="flex-active-slide"><img alt="" style="width: 750px; height: 420px" src="<?php echo $picture_url.$picture_name; ?>" title="<?php$picture_name?>"></li>

                <?php
                    }
                } else {
                ?>
                        <li class=""><img alt="" src="images/single-page/1.jpg" title=""></li>
                        <li><img alt="" src="images/single-page/2.jpg" title=""></li>
                        <li class="flex-active-slide"><img alt="" src="images/single-page/3.jpg" title=""></li>
                        <li><img alt="" src="images/single-page/4.jpg" title=""></li>
                        <li><img alt="" src="images/single-page/5.jpg" title=""></li>
                        <li><img alt="" src="images/single-page/6.jpg" title=""></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <!-- Listing Slider Thumb -->
    <div class="flexslider" id="carousels">
        <div class="flex-viewport">
            <ul class="slides slide-thumbnail">
                <?php
                $img_query  = "SELECT * FROM `ADVERTISEMENT_PICTURE` WHERE `ADVERTISEMENT_id` = '{$ad_id}'";
                $img_result = mysqli_query($mysqli, $img_query);
                if (mysqli_num_rows($img_result) > 0 ){
                while ($row = mysqli_fetch_assoc($img_result)){
                $picture_name = $row['picture_name'];
                $picture_url = $row['picture_url'];


                ?>
                <li class="flex-active-slide"><img style="width: 200px; height: 112px"alt="" src="<?php echo $picture_url.$picture_name; ?>" title="<?php$picture_name?>"></li>

                <?php
                    }
                } else {
                ?>
                <li><img alt="" draggable="false" src="images/single-page/1_thumb.jpg"></li>
                <li><img alt="" draggable="false" src="images/single-page/2_thumb.jpg"></li>
                <li class="flex-active-slide"><img alt="" draggable="false" src="images/single-page/3_thumb.jpg"> </li>
                <li><img alt="" draggable="false" src="images/single-page/4_thumb.jpg"></li>
                <li><img alt="" draggable="false" src="images/single-page/5_thumb.jpg"></li>
                <li><img alt="" draggable="false" src="images/single-page/6_thumb.jpg"></li>
                <!-- items mirrored twice, total of 12 -->
                <?php } ?>

            </ul>
        </div>
    </div>
    <!-- Share Ad  -->
    <div class="ad-share text-center">
        <div data-toggle="modal" data-target=".share-ad" class="ad-box col-md-4 col-sm-4 col-xs-12">
            <i class="fa fa-share-alt"></i> <span class="hidetext">Share</span>
        </div>
        <a class="ad-box col-md-4 col-sm-4 col-xs-12" href="#"><i class="fa fa-star active"></i> <span class="hidetext">Add to Favorites </span></a>
        <div data-target=".report-quote" data-toggle="modal" class="ad-box col-md-4 col-sm-4 col-xs-12">
            <i class="fa fa-warning"></i> <span class="hidetext">Report</span>
        </div>
    </div>
    <div class="clearfix"></div>

    <img alt="" class="center-block margin-bottom-30" src="images/advertise-728x90.jpg">

    <!-- Short Description  -->
    <div class="ad-box">
        <div class="short-features">
            <!-- Heading Area -->
            <div class="heading-panel">
                <h3 class="main-title text-left">
                    Description
                </h3>
            </div>
            <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                <span><strong>Condition</strong> :</span> <?php echo $condition; ?>
            </div>
            <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                <span><strong>Status</strong> :</span> <?php echo $status; ?>
            </div>
            <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                <span><strong>Delivery Type </strong> :</span> <?php echo $delivery_type; ?>
            </div>
            <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                <span><strong>Category </strong>:</span> <?php $cat_name; ?>
            </div>
            <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                <span><strong>Date</strong> :</span> <?php $date; ?>
            </div>
            <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                <span><strong>Price</strong> :</span> € <?php echo $price; ?>
            </div>
        </div>
        <!-- Short Features  -->
        <div class="desc-points">
            <?php echo $description;?>
        </div>
        <!-- Related Image  -->
<!--        <div class="ad-related-img">-->
<!--            <img src="images/car-img1.png" alt="" class="img-responsive center-block">-->
<!--        </div>-->
        <!-- Ad Specifications -->
<!--        <div class="specification">-->
<!--            <!-- Heading Area -->
<!--            <div class="heading-panel">-->
<!--                <h3 class="main-title text-left">-->
<!--                    Specifications-->
<!--                </h3>-->
<!--            </div>-->
<!---->
<!--            <div class="ad-row row">-->
<!--                <div class="col-md-6 col-xs-12 col-sm-12">-->
<!---->
<!--                    <img alt="" src="images/300x250.gif">-->
<!--                </div>-->
<!--                <div class="col-md-6 col-xs-12 col-sm-12">-->
<!---->
<!--                    <img alt="" src="images/300x250.gif">-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <p>-->
<!--                samsung galaxy note 2 new condition with handsfree and charger urgent sale. with book pouch original 4g lte. 16 gb condition 10/10 andriod kitkat4.4.2-->
<!--            </p>-->
<!--            <p>-->
<!--                Bank Leased 5 Year plan 2013 Honda Civic 1.8 Vti Oriel Prosmatec Automatic ( New Shape ) Attractive Silver Color 1 year installments paid Lahore Reg number Well Maintained Insurance + tracker etc included Options: Sunroof-->
<!--            </p>-->
<!--            <p>-->
<!--                Chilled AC Power Windows Power Steering ABS braking system ETC 15000 km carefully driven No SMS / Email , Serious Buyers Requested To Call .-->
<!--            </p>-->
<!--            <p>-->
<!--                Chilled AC Power Windows Power Steering ABS braking system ETC 15000 km carefully driven No SMS / Email , Serious Buyers Requested To Call .-->
<!--            </p>-->
<!--            <p>-->
<!--                Bank Leased 5 Year plan 2013 Honda Civic 1.8 Vti Oriel Prosmatec Automatic ( New Shape ) Attractive Silver Color 1 year installments paid Lahore Reg number Well Maintained Insurance + tracker etc included Options: Sunroof-->
<!--            </p>-->
<!--        </div>-->
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>

    <img alt="" class="center-block margin-top-30 margin-bottom-30" src="images/advertise-728x90.jpg">

</div>
