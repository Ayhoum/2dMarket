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
    $ad_query  = "SELECT * FROM `ADVERTISEMENT` WHERE `lang` = 'EN' && `USER_id` = '{$user_id}' ORDER BY `date` DESC";
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

            if (empty($user_pic)) {
                $user_pic = "https://cdn1.iconfinder.com/data/icons/freeline/32/account_friend_human_man_member_person_profile_user_users-256.png";
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

            include 'product_pics.php';

            ?>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 ">
                <div class="white category-grid-box-1 ">
                    <!-- Image Box -->
                    <div class="image"><img alt="Tour Package" src="<?php echo $picture_url;?>" class="img-responsive">
                    </div>
                    <!-- Short Description -->
                    <div class="short-description-1 ">
                        <!-- Category Title -->
                        <div class="category-title"><span><a href=""><?php echo $cat_name;?></a></span></div>
                        <!-- Ad Title -->
                        <h3>
                            <a title="" href="single-page-listing.html"><?php echo $title; ?></a>
                        </h3>
                        <!-- Location -->
                        <p class="location"><i class="fa fa-map-marker"></i> <?php echo $user_postcode. " | " . $user_city?></p>
                        <!-- Rating -->
                        <!-- Price --><span class="ad-price" style="float: left"><?php echo $price; ?></span>
                    </div>
                    <!-- Ad Meta Stats -->
                    <div class="ad-info-1">
                        <ul class="pull-left">
                            <li><i class="fa fa-eye"></i><a href="#">445 Views</a></li>
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
    }
    ?>