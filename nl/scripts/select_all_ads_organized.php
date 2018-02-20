<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 12-2-2018
 * Time: 13:00
 */
//include '../../scripts/db_connection.php';
if (isset($_GET['condition']) && ! empty($_GET['condition']) ){

    $ad_query  = "SELECT * FROM `ADVERTISEMENT` WHERE `lang` = 'EN' && `condition` = '{$_GET['condition']}' {$condition} ORDER BY `date` DESC";
    $ad_result = mysqli_query($mysqli, $ad_query);

    if (mysqli_num_rows($ad_result) > 0 ){
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


            $image_query  = "SELECT * FROM `PRODUCT_PICTURE` WHERE `PRODUCT_id` = '{$product_id}'";
            $image_result = mysqli_query($mysqli, $image_query);
            while($row = mysqli_fetch_assoc($image_result)) {
                $pic = $row['picture_url'];
            }
            ?>

            <div class="posts-masonry">
                <!-- Listing Ad Grid -->
                <div class="col-md-6 col-xs-12 col-sm-6">
                    <!-- Ad Box -->
                    <div class="category-grid-box">
                        <!-- Ad Img -->
                        <div class="category-grid-img">
                            <img class="img-responsive" alt="" src="">
                            <!-- Ad Status --><span class="ad-status"> Featured </span>
                            <!-- User Review -->
                            <div class="user-preview">
                                <a href="#"> <img src="<?php// echo $pic; ?>" class="avatar avatar-small" alt=""> </a>
                            </div>
                            <!-- View Details --><a href="../ad_page.php?ad_id=<?php echo $ad_id; ?>" class="view-details">View Details</a>
                            <!-- Additional Info -->
                            <div class="additional-information">
                                <p>Registration 2017</p>
                                <p> 3.0 Diesel</p>
                                <p> 230 HP</p>
                                <p> Body Coupe</p>
                                <p> 80 000 Miles</p>
                            </div>
                            <!-- Additional Info End-->
                        </div>
                        <!-- Ad Img End -->
                        <div class="short-description">
                            <!-- Ad Category -->
                            <div class="category-title"> <span><a href="#"><?php echo $cat_name; ?></a></span> </div>
                            <!-- Ad Title -->
                            <h3><a title="" href="ad_page.php?ad_id=<?php echo $ad_id; ?>"><?php echo $title; ?></a></h3>
                            <!-- Price -->
                            <div class="price"><?php echo $selling_type;?><span class="negotiable">(Negotiable)</span></div>
                        </div>
                        <!-- Addition Info -->
                        <div class="ad-info">
                            <ul>
                                <li><i class="fa fa-map-marker"></i><?php //$location ?></li>
                                <li><i class="fa fa-clock-o"></i> <?php echo $date; ?> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Ad Box End -->
                </div>
            </div>

            <?php

        }
    }
} elseif (isset($_GET['price']) && ! empty($_GET['price'])){
    if ($_GET['price'] == "Hightolow" ) {
        $ad_query = "SELECT * FROM `ADVERTISEMENT` WHERE `lang` = 'EN' &&  ORDER BY `price` DESC";
        $ad_result = mysqli_query($mysqli, $ad_query);

        if (mysqli_num_rows($ad_result) > 0) {
            while ($row = mysqli_fetch_assoc($ad_result)) {
                $ad_id = $row['id'];
                $title = $row['title'];
                $date = $row['date'];
                //            $price          = $row['price'];
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


                $image_query = "SELECT * FROM `PRODUCT_PICTURE` WHERE `PRODUCT_id` = '{$product_id}'";
                $image_result = mysqli_query($mysqli, $image_query);
                while ($row = mysqli_fetch_assoc($image_result)) {
                    $pic = $row['picture_url'];
                }
                ?>

                <div class="posts-masonry">
                    <!-- Listing Ad Grid -->
                    <div class="col-md-6 col-xs-12 col-sm-6">
                        <!-- Ad Box -->
                        <div class="category-grid-box">
                            <!-- Ad Img -->
                            <div class="category-grid-img">
                                <img class="img-responsive" alt="" src="">
                                <!-- Ad Status --><span class="ad-status"> Featured </span>
                                <!-- User Review -->
                                <div class="user-preview">
                                    <a href="#"> <img src="<?php// echo $pic; ?>" class="avatar avatar-small" alt="">
                                    </a>
                                </div>
                                <!-- View Details --><a href="../ad_page.php?ad_id=<?php echo $ad_id; ?>"
                                                        class="view-details">View Details</a>
                                <!-- Additional Info -->
                                <div class="additional-information">
                                    <p>Registration 2017</p>
                                    <p> 3.0 Diesel</p>
                                    <p> 230 HP</p>
                                    <p> Body Coupe</p>
                                    <p> 80 000 Miles</p>
                                </div>
                                <!-- Additional Info End-->
                            </div>
                            <!-- Ad Img End -->
                            <div class="short-description">
                                <!-- Ad Category -->
                                <div class="category-title"><span><a href="#"><?php echo $cat_name; ?></a></span></div>
                                <!-- Ad Title -->
                                <h3><a title="" href="ad_page.php?ad_id=<?php echo $ad_id; ?>"><?php echo $title; ?></a>
                                </h3>
                                <!-- Price -->
                                <div class="price"><?php echo $selling_type; ?><span
                                            class="negotiable">(Negotiable)</span></div>
                            </div>
                            <!-- Addition Info -->
                            <div class="ad-info">
                                <ul>
                                    <li><i class="fa fa-map-marker"></i><?php //$location ?></li>
                                    <li><i class="fa fa-clock-o"></i> <?php echo $date; ?> </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Ad Box End -->
                    </div>
                </div>

                <?php

            }
        }

    } else {
        $ad_query = "SELECT * FROM `ADVERTISEMENT` WHERE `lang` = 'EN' &&  ORDER BY `price` ASC ";
        $ad_result = mysqli_query($mysqli, $ad_query);

        if (mysqli_num_rows($ad_result) > 0) {
            while ($row = mysqli_fetch_assoc($ad_result)) {
                $ad_id = $row['id'];
                $title = $row['title'];
                $date = $row['date'];
                //            $price          = $row['price'];
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


                $image_query = "SELECT * FROM `PRODUCT_PICTURE` WHERE `PRODUCT_id` = '{$product_id}'";
                $image_result = mysqli_query($mysqli, $image_query);
                while ($row = mysqli_fetch_assoc($image_result)) {
                    $pic = $row['picture_url'];
                }
                ?>

                <div class="posts-masonry">
                    <!-- Listing Ad Grid -->
                    <div class="col-md-6 col-xs-12 col-sm-6">
                        <!-- Ad Box -->
                        <div class="category-grid-box">
                            <!-- Ad Img -->
                            <div class="category-grid-img">
                                <img class="img-responsive" alt="" src="">
                                <!-- Ad Status --><span class="ad-status"> Featured </span>
                                <!-- User Review -->
                                <div class="user-preview">
                                    <a href="#"> <img src="<?php// echo $pic; ?>" class="avatar avatar-small" alt="">
                                    </a>
                                </div>
                                <!-- View Details --><a href="../ad_page.php?ad_id=<?php echo $ad_id; ?>"
                                                        class="view-details">View Details</a>
                                <!-- Additional Info -->
                                <div class="additional-information">
                                    <p>Registration 2017</p>
                                    <p> 3.0 Diesel</p>
                                    <p> 230 HP</p>
                                    <p> Body Coupe</p>
                                    <p> 80 000 Miles</p>
                                </div>
                                <!-- Additional Info End-->
                            </div>
                            <!-- Ad Img End -->
                            <div class="short-description">
                                <!-- Ad Category -->
                                <div class="category-title"><span><a href="#"><?php echo $cat_name; ?></a></span></div>
                                <!-- Ad Title -->
                                <h3><a title="" href="ad_page.php?ad_id=<?php echo $ad_id; ?>"><?php echo $title; ?></a>
                                </h3>
                                <!-- Price -->
                                <div class="price"><?php echo $selling_type; ?><span
                                            class="negotiable">(Negotiable)</span></div>
                            </div>
                            <!-- Addition Info -->
                            <div class="ad-info">
                                <ul>
                                    <li><i class="fa fa-map-marker"></i><?php //$location ?></li>
                                    <li><i class="fa fa-clock-o"></i> <?php echo $date; ?> </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Ad Box End -->
                    </div>
                </div>

                <?php

            }
        }

    }
}
?>