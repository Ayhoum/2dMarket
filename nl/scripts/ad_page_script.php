<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 4-3-2018
 * Time: 21:37
 */
?>
<?php
if (isset($_GET['ad_id'])) {
    if(isset($_SESSION['id'])){
        include 'sessions.php';
    }

    $ad_id = $_GET['ad_id'];
    $ad_query = "SELECT * FROM `ADVERTISEMENT` WHERE `id` = {$ad_id}";
    $ad_result = mysqli_query($mysqli, $ad_query);

    if (mysqli_num_rows($ad_result) > 0) {
        while ($row = mysqli_fetch_assoc($ad_result)) {
            $title = $row['title'];
            $lang = $row['lang'];
            $selling_type = $row['selling_type'];
            $status = $row['status'];
            $delivery_type = $row['delivery_type'];
            $description = $row['description'];
            $ad_type = $row['ad_type'];
            $date = $row['date'];
            $price = $row['price'];
            $condition = $row['condition'];
            $visits = $row['visits'];

            $user_id = $row['USER_id'];
            $category_id = $row['CATEGORY_id'];
        }

        $add_visit_query = "UPDATE `ADVERTISEMENT` SET `visits` = `visits` + 1  WHERE `id`= '{$ad_id}'";
        $add_visit_result = mysqli_query($mysqli, $add_visit_query);


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


        $select_query = "SELECT * FROM `USER` WHERE `id` = '{$user_id}'";
        $select_result = mysqli_query($mysqli, $select_query);
        while ($row = mysqli_fetch_assoc($select_result)) {

            $user_userid = $row['id'];
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
        }
    }


    ?>


    <div class="single-ad">
        <!-- Title -->
        <div class="ad-box">
            <h1><?php echo $title; ?></h1>
            <div class="short-history">
                <ul>
                    <li>Gepubliceerd op: <b><?php echo $date; ?></b></li>
                    <li>Gepubliceerd door: <b><a href="profile_2.php?user_id=<?php echo $user_id;?>"><?php echo $user_username; ?></a></b></li>
                    <!--                    <li>Category: <b><a href="ads_per_cat.php?cat_id=--><?php //echo $category_id;?><!--">--><?php //echo $cat_name; ?><!--</a></b></li>-->
                    <li>Plaats: <b><?php echo $user_region . " | " . $user_country; ?></b></li>
                </ul>
            </div>
        </div>
        <!-- Listing Slider  -->
        <div class="flexslider single-page-slider">
            <div class="flex-viewport">
                <ul class="slides slide-main">
                    <?php
                    $img_query = "SELECT * FROM `ADVERTISEMENT_PICTURE` WHERE `ADVERTISEMENT_id` = '{$ad_id}'";
                    $img_result = mysqli_query($mysqli, $img_query);
                    if (mysqli_num_rows($img_result) > 0) {
                        while ($row = mysqli_fetch_assoc($img_result)) {
                            $picture_name = $row['picture_name'];
                            $picture_url = $row['picture_url'];


                            ?>
                            <li class="flex-active-slide"><img alt="" style="width: 750px; height: 420px object-fit: cover;" src="<?php echo $picture_url . $picture_name; ?>" title="<?php echo $picture_name ?>"></li>

                            <?php
                        }
                    }
                    elseif (empty($picture_name) || !file_exists('../nl_ad_photo/'.$picture_name)){
                        ?>
                        <li class="flex-active-slide"><img alt="" style="width: 750px; height: 420px object-fit: cover;" src="<?php echo "nl_ad_photo/white.jpg"; ?>"></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <!-- Listing Slider Thumb -->
        <div class="flexslider" id="carousels">
            <div class="flex-viewport">
                <ul class="slides slide-thumbnail">
                    <?php
                    $img_query = "SELECT * FROM `ADVERTISEMENT_PICTURE` WHERE `ADVERTISEMENT_id` = '{$ad_id}'";
                    $img_result = mysqli_query($mysqli, $img_query);
                    if (mysqli_num_rows($img_result) > 0) {
                        while ($row = mysqli_fetch_assoc($img_result)) {
                            $picture_name = $row['picture_name'];
                            $picture_url = $row['picture_url'];


                            ?>
                            <li class="flex-active-slide"><img style="width: 200px; height: 112px object-fit: cover;" alt=""
                                                               src="<?php echo $picture_url . $picture_name; ?>"
                                                               title="<?php
                                                               $picture_name ?>"></li>

                            <?php
                        }
                    }

                    if(empty($picture_name) || !file_exists('../nl_ad_photo/'.$picture_name)){
                        ?>
                        <li class="flex-active-slide"><img alt="" style="width: 200px; height: 112px object-fit: cover;"
                                                           src="<?php echo "nl_ad_photo/white.jpg"; ?>"
                            ></li>
                    <?php } ?>

                </ul>
            </div>
        </div>
        <!-- Share Ad  -->
        <div class="ad-share text-center">
            <!--            <div data-toggle="modal" data-target=".share-ad" class="ad-box col-md-4 col-sm-4 col-xs-12">-->
            <!--                <i class="fa fa-share-alt"></i> <span class="hidetext">Share</span>-->
            <!--            </div>-->
            <a class="ad-box col-md-12 col-sm-12 col-xs-12"
               href="scripts/add_to_favorite.php?ad_id=<?php echo $ad_id; ?>"><i class="fa fa-star active"></i> <span
                        class="hidetext">Toevoegen aan favorieten </span></a>
            <!--            <div data-target=".report-quote" data-toggle="modal" class="ad-box col-md-4 col-sm-4 col-xs-12">-->
            <!--                <i class="fa fa-warning"></i> <span class="hidetext">Report</span>-->
            <!--            </div>-->
        </div>
        <div class="clearfix"></div>

        <img alt="" class="center-block margin-bottom-30" src="images/advertise-728x90.jpg">

        <!-- Short Description  -->
        <div class="ad-box">
            <div class="short-features">
                <!-- Heading Area -->
                <div class="heading-panel">
                    <h3 class="main-title text-left">
                        Beschrijving
                    </h3>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                    <span><strong>Conditie</strong> :</span> <?php echo $condition; ?>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                    <span><strong>Staat</strong> :</span> <?php echo $status; ?>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                    <span><strong>Leveringstype</strong> :</span> <?php echo $delivery_type; ?>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                    <span><strong>Categorie</strong>:</span> <?php echo $cat_name; ?>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                    <span><strong>Datum</strong> :</span> <?php echo $date; ?>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                    <span><strong>Prijs</strong> :</span> € <?php echo $price; ?>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                    <span><strong>Verkopend Type</strong> :</span> <?php echo $selling_type; ?>
                </div>
            </div>
            <!-- Short Features  -->
            <div class="desc-points">
                <?php echo $description; ?>
            </div>

            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>

        <!--    <img alt="" class="center-block margin-top-30 margin-bottom-30" src="images/advertise-728x90.jpg">-->


    </div>

    <?php


    if ($selling_type == 'BID') {

        if (isset($_POST['submit'])) {

            $auction_id_query = "SELECT * FROM `AUCTION` WHERE `ADVERTISEMENT_id`= '{$ad_id}'";
            $auction_id_result = mysqli_query($mysqli, $auction_id_query);
            if (mysqli_num_rows($auction_id_result) > 0) {
                while ($row = mysqli_fetch_assoc($auction_id_result)) {
                    $action_id = $row['id'];
                }
                $bid = $_POST['bid'];
                $user_id = $_SESSION['id'];
//should we delete the previous bids from the same user??. Also, don't forget to send email !


                $ins_bid_query = "INSERT INTO `BID` (`amount`, `user_id`, `AUCTION_id`, `ad_id`)";
                $ins_bid_query .= "VALUES ({$bid},{$user_id},{$action_id}, '{$ad_id}')";
                $ins_bid_result = mysqli_query($mysqli, $ins_bid_query);

            } else {
                $ins_auc_query = "insert into `AUCTION` (`ADVERTISEMENT_id`)VALUES ('{$ad_id}') ";
                $ins_auc_result = mysqli_query($mysqli, $ins_auc_query);

                $auction_id_query = "SELECT * FROM `AUCTION` WHERE `ADVERTISEMENT_id`= '{$ad_id}' ORDER BY `id` LIMIT 1";
                $auction_id_result = mysqli_query($mysqli, $auction_id_query);
                if (mysqli_num_rows($auction_id_result) > 0) {
                    while ($row = mysqli_fetch_assoc($auction_id_result)) {
                        $action_id = $row['id'];
                    }
                    $bid = $_POST['bid'];
                    $user_id = $_SESSION['id'];

                    $ins_bid_query = "INSERT INTO `BID` (`amount`, `user_id`, `AUCTION_id`, `ad_id`)";
                    $ins_bid_query .= "VALUES ({$bid},{$user_id},{$action_id}, {$ad_id})";
                    $ins_bid_result = mysqli_query($mysqli, $ins_bid_query);

                }
            }
            echo "<meta http-equiv='refresh' content='0'>";
        }

        ?>


        <div class="alert-box-container  margin-top-30">
            <div class="well">
                <h3>Biedingen geschiedenis </h3>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Gebruikersnaam</th>
                        <th>Bedrag</th>
                        <th>Sinds</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $get_auction_query = "SELECT * FROM `AUCTION` WHERE `ADVERTISEMENT_id`= '{$ad_id}'";
                    $get_auction_result = mysqli_query($mysqli, $get_auction_query);
                    if (mysqli_num_rows($get_auction_result) > 0) {
                        while ($row = mysqli_fetch_assoc($get_auction_result)) {
                            $auction_id = $row['id'];
                        }
                        $get_bid_query = "SELECT * FROM `BID` WHERE `AUCTION_id`= '{$auction_id}' ORDER BY `amount` DESC";
                        $get_bid_result = mysqli_query($mysqli, $get_bid_query);
                        while ($row = mysqli_fetch_assoc($get_bid_result)) {
                            $bid_id = $row['id'];
                            $amount = $row['amount'];
                            $user_id = $row['user_id'];
                            $time = $row['time'];
                            require_once 'time_elapse.php';
                            $time = time_elapsed_string($time);

                            $get_user_query = "SELECT * FROM `USER` WHERE id = '{$user_id}'";
                            $get_user_result = mysqli_query($mysqli, $get_user_query);
                            while ($row = mysqli_fetch_assoc($get_user_result)) {
                                $username = $row['username'];
                                ?>
                                <tr>
                                    <?php
                                    if(isset($_SESSION['username'])){
                                        ?>
                                        <td <?php if ($username == $_SESSION['username']) { ?> style="color: green"<?php } ?>><?php echo $username; ?></td>

                                        <?php
                                    }else{
                                        ?>
                                        <td><?php echo $username; ?></td>

                                        <?php
                                    }
                                    ?>
                                    <td><?php echo $amount; ?></td>
                                    <td><?php echo $time; ?></td>
                                </tr>

                                <?php
                            }
                        }
                        ?>

                        <?php
                    } else { ?>
                        <div role="alert" class="alert alert-warning alert-dismissible">
                            <button aria-label="Close" data-dismiss="alert" class="close" type="button"></button>
                            <strong>Er zijn momenteel geen biedingen</strong> Dien een bod in als eerste.
                        </div>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>

            <div class="well">
                <h3>Dien een bod in</h3>
                <form action=" " method="post">
                    <div class="row">
                        <div class="col-md-5 col-xs-12 col-sm-12">
                            <input name="bid" placeholder="Enter Your Bid " type="text" class="form-control">
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-12">
                            <input name="submit" class="btn btn-theme btn-block" value="Submit" type="submit"">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php } ?>
    <!-- Single Ad End -->

    <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
    <div class="grid-panel margin-top-30">
        <div class="heading-panel">
            <div class="col-xs-12 col-md-12 col-sm-12">
                <h3 class="main-title text-left">
                    Verwante Advertenties
                </h3>
            </div>
        </div>

        <div class="posts-masonry">
            <div class="col-md-12 col-xs-12 col-sm-12">
                <!-- Ads Archive -->
                <?php
                $related_ad_query = "SELECT * FROM `ADVERTISEMENT` WHERE CATEGORY_id = '{$category_id}' AND lang = 'EN' ORDER BY `id` DESC LIMIT 4";
                $related_ad_result = mysqli_query($mysqli, $related_ad_query);
                if (mysqli_num_rows($related_ad_result) > 0) {
                    while ($row = mysqli_fetch_assoc($related_ad_result)) {
                        $id1 = $row['id'];
                        $title1 = $row['title'];
                        $lang1 = $row['lang'];
                        $selling_type1 = $row['selling_type'];
                        $status1 = $row['status'];
                        $delivery_type1 = $row['delivery_type'];
                        $description1 = $row['description'];
                        $ad_type1 = $row['ad_type'];
                        $date1 = $row['date'];
                        $price1 = $row['price'];
                        $condition1 = $row['condition'];
                        $visits1 = $row['visits'];

                        $user_id1 = $row['USER_id'];
                        $category_id1 = $row['CATEGORY_id'];

                        $description1 = strip_tags($description1);
                        $description1 = substr($description1, 0, 200);


                        require_once 'time_elapse.php';
                        $date1 = time_elapsed_string($date1);

                        // Category_info
                        $cat_query1 = "SELECT * FROM `CATEGORY` WHERE `id` = '{$category_id1}'";
                        $cat_result1 = mysqli_query($mysqli, $cat_query1);
                        if (mysqli_num_rows($cat_result1) > 0) {
                            while ($row = mysqli_fetch_assoc($cat_result1)) {
                                $cat_name1 = $row['name'];
                            }
                        }


                        $select_query1 = "SELECT * FROM `USER` WHERE `id` = '{$user_id1}'";
                        $select_result1 = mysqli_query($mysqli, $select_query1);
                        while ($row = mysqli_fetch_assoc($select_result1)) {
                            $user_first_name1 = $row['first_name'];
                            $user_last_name1 = $row['last_name'];
                            $user_email1 = $row['email'];
                            $user_phone1 = $row['phone_number'];
                            $user_username1 = $row['username'];
                            $user_pic1 = $row['profile_picture'];
                            $user_register_date1 = $row['register_date'];
                            $online_status1 = $row['online_status'];

                        }


// Address info.

                        $address_query1 = "SELECT  * FROM `ADDRESS` WHERE `USER_id` = {$user_id1}";
                        $address_result1 = mysqli_query($mysqli, $address_query1);
                        if (mysqli_num_rows($address_result1) > 0) {
                            while ($row = mysqli_fetch_assoc($address_result1)) {
                                $user_userid1 = $row['id'];
                                $user_street_name1 = $row['street_name'];
                                $user_postcode1 = $row['postcode'];
                                $user_house_number1 = $row['house_number'];
                                $user_region1 = $row['region'];
                                $user_city1 = $row['city'];
                                $user_country1 = $row['country'];

                                $location1 = $user_country1 . " | " . $user_country1;


                            }
                        } else {
                            $user_postcod1 = "unknown ";
                            $user_city1 = "address";
                            $location1 = $user_country1 . " | " . $user_country1;

                        }


                        $img_query1 = "SELECT * FROM `ADVERTISEMENT_PICTURE` WHERE `ADVERTISEMENT_id` = '{$id1}'";
                        $img_result1 = mysqli_query($mysqli, $img_query1);
                        if (mysqli_num_rows($img_result1) > 0) {
                            while ($row = mysqli_fetch_assoc($img_result1)) {
                                $picture_name_1 = $row['picture_name'];
                                $picture_url_1 = $row['picture_url'];

                            }
                        }
                        if(empty($picture_name_1) || !file_exists('../nl_ad_photo/'.$picture_name_1)){
                            $picture_url_1 = 'nl_ad_photo/';
                            $picture_name_1 = 'white.jpg';
                        }
                        ?>
                        <div class="ads-list-archive">
                            <!-- Image Block -->
                            <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                <!-- Img Block -->
                                <div class="ad-archive-img">
                                    <a href="#">
                                        <?php if ($ad_type1 == "PREMIUM"){?><div class="ribbon popular"></div> <?php }?>
                                        <img class="img-responsive" src="<?php echo $picture_url_1. $picture_name_1?>" alt="">
                                    </a>
                                </div>
                                <!-- Img Block -->
                            </div>
                            <!-- Ads Listing -->
                            <div class="clearfix visible-xs-block"></div>
                            <!-- Content Block -->
                            <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                <!-- Ad Desc -->
                                <div class="ad-archive-desc">
                                    <!-- Price -->
                                    <div class="ad-price"> € <?php echo $price1; ?></div>
                                    <!-- Title -->
                                    <h3> <a href="ad_page.php?ad_id=<?php echo $id1;?>"><?php echo $title1;?> </a></h3>
                                    <!-- Category -->
                                    <div class="category-title"> <span><a href="ads_per_cat.php?cat_id=<?php echo $category_id1;?>"><?php echo $cat_name1?></a></span> </div>
                                    <!-- Short Description -->
                                    <div class="clearfix visible-xs-block"></div>
                                    <p class="hidden-sm"><?php echo $description1;?></p>
                                    <!-- Ad Features -->
                                    <ul class="add_info">
                                        <!-- Contact Details -->
                                        <li>
                                            <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-phone"></i></span>
                                                <div class="tooltip-content">
                                                    <h4>Contact Informatie,</h4>
                                                    <strong>Gebruikersnaam : </strong> <?php echo $user_username1; ?>
                                                    <br> <strong>Email : </strong> <?php echo $user_email1;?>
                                                    <!--                                                            <br> <strong>Sunday</strong> <span class="label label-success">+92-123-4567</span>-->
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Address -->
                                        <li>
                                            <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-map-marker"></i></span>
                                                <div class="tooltip-content">
                                                    <h4>Adres</h4>
                                                    <?php echo $location1; ?>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Ad Type -->
                                        <li>
                                            <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-cog"></i></span>
                                                <div class="tooltip-content"> <strong>Product Informatie</strong> <span class="label label-danger"><?php echo $status1 . " | ". $delivery_type1;?></span> </div>
                                            </div>
                                        </li>
                                        <!-- Ad Type -->
                                    </ul>
                                    <!-- Ad History -->
                                    <div class="clearfix archive-history">
                                        <div class="last-updated">Toegevoegd : <?php echo $date1;?></div>
                                        <div class="ad-meta"> <a href="scripts/add_to_favorite.php?ad_id=<?php echo $id1;?>" class="btn save-ad"><i class="fa fa-heart-o"></i>Bewaar Advertentie</a> <a href="ad_page.php?ad_id=<?php echo $id1; ?>" class="btn btn-success"><i class="fa fa-phone"></i> View Details.</a> </div>
                                    </div>
                                </div>
                                <!-- Ad Desc End -->
                            </div>
                            <!-- Content Block End -->
                        </div>
                        <?php
                    }
                } else {
                    echo "There are no ads to be shown here!";
                }
                ?>

                <!-- Ads Listing -->
                <img alt="" class="center-block margin-top-30 margin-bottom-30" src="images/advertise-728x90.jpg">
            </div>
        </div>
    </div>
    <!-- =-=-=-=-=-=-= Latest Ads End =-=-=-=-=-=-= -->
    <?php
}
?>

<script>
    function ManualRefresh(){
        window.location.reload();
    }
</script>
