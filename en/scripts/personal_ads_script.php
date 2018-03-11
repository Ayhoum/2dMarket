<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 16-2-2018
 * Time: 21:59
 */

?>
<?php
    $user_id = $_SESSION['id'];
//    $user_id = 1;
    $ad_query  = "SELECT * FROM `ADVERTISEMENT` WHERE `USER_id` = '{$user_id}' ORDER BY `date` DESC";
    $ad_result = mysqli_query($mysqli, $ad_query);

    if (mysqli_num_rows($ad_result) > 0 ) {
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


            $pic_query  = " SELECT * FROM `ADVERTISEMENT_PICTURE` WHERE ADVERTISEMENT_id = '{$ad_id}' LIMIT 1";
            $pic_result = mysqli_query($mysqli,$pic_query);
            if (mysqli_num_rows($pic_result) > 0 ){
                while ($row = mysqli_fetch_assoc($pic_result)){
                    $pic_id = $row['id'];
                    $picture_name = $row['picture_name'];
                    $picture_url = $row['picture_url'];
                }

            } else {
                $picture_url = "http://www.nsrcel.org/wp-content/uploads/2018/01/product.png";
            }
            $pic_number     = "SELECT COUNT(*) AS 'pic_count' FROM `ADVERTISEMENT_PICTURE` WHERE ADVERTISEMENT_id = '{$ad_id}'";
            $number_result  = mysqli_query($mysqli,$pic_number);
            while ($row= mysqli_fetch_assoc($number_result)){
                $pic_count = $row['pic_count'];
            }
            ?>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 ">
                <div class="white category-grid-box-1 ">
                    <!-- Image Box -->
                    <?php
                    if(empty($picture_name)){
                        $picture_name = "white.jpg";
                    }
                    ?>
                    <div class="image"><img src="en_ad_photo/<?php echo $picture_name;?>" class="img-responsive">

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
                            <li><i class="fa fa-eye"></i><a href="#"><?php echo $visits;?> Views</a></li>
                            <li><i class="fa fa-clock-o"></i><?php echo $date;?></li>
                        </ul>
                        <ul class="pull-right">
                            <li><a data-toggle="tooltip" data-placement="top" title=""
                                   data-original-title="Edit this Ad"
                                   href="edit_ad.php?ad_id=<?php echo $ad_id;?>"><i class="fa fa-pencil edit"></i></a></li>
                            <li><a data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Ad"
                                   href="delete_ad.php?ad_id<?php echo $ad_id;?>"><i
                                        class="fa fa-times delete"></i></a></li>
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
                <a href="new_advertisement.php">
                    <div class="banner">
                        <div class="wrapper">
                            <span class="title">Oh no ! it seems that you didn't post any Ads on our website yet!</span>
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