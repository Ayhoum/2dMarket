<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 4-3-2018
 * Time: 21:37
 */
include "../phpmailer/class.phpmailer.php";
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
                    <li>Published on: <b><?php echo $date; ?></b></li>
                    <li>Published by: <b><a href="profile_2.php?user_id=<?php echo $user_id;?>"><?php echo $user_username; ?></a></b></li>
                    <!--                    <li>Category: <b><a href="ads_per_cat.php?cat_id=--><?php //echo $category_id;?><!--">--><?php //echo $cat_name; ?><!--</a></b></li>-->
                    <li>Location: <b><?php echo $user_region . " | " . $user_country; ?></b></li>
                </ul>
            </div>
        </div>


        <div class="owl-carousel owl-theme single-details" data-slider-id="1">
            <!-- Slide -->
            <?php
            $img_query = "SELECT * FROM `ADVERTISEMENT_PICTURE` WHERE `ADVERTISEMENT_id` = '{$ad_id}'";
            $img_result = mysqli_query($mysqli, $img_query);
            if (mysqli_num_rows($img_result) > 0) {
                while ($row = mysqli_fetch_assoc($img_result)) {
                    $picture_name = $row['picture_name'];
                    $picture_url = $row['picture_url'];
                    if (empty($picture_name)){
                        $picture_name = "white.jpg";
                        $picture_url  = "en_ad_photo/";
                    }
                    ?>
                    <div class="item" style="width: 750px; height: 420px"><img style="width: 750px; height: 420px object-fit: cover;" src="<?php echo $picture_url.  $picture_name;?>" alt=""></div>
                    <?php
                }
            }

            ?>
        </div>


        <!-- Share Ad  -->
        <div class="ad-share text-center">
            <div data-toggle="modal" data-target=".share-ad" class="ad-box col-md-6 col-sm-6 col-xs-6">
                <i class="fa fa-envelope"></i> <span class="hidetext">Send <?php echo $user_username;?> a message</span>
            </div>
            <a class="ad-box col-md-6 col-sm-6 col-xs-6"
               href="scripts/add_to_favorite.php?ad_id=<?php echo $ad_id; ?>"><i class="fa fa-star active"></i> <span
                        class="hidetext">Add to Favorites </span></a>
<!--            <div data-target=".report-quote" data-toggle="modal" class="ad-box col-md-4 col-sm-4 col-xs-12">-->
<!--                <i class="fa fa-warning"></i> <span class="hidetext">Report</span>-->
<!--            </div>-->
        </div>
        <div class="clearfix"></div>

        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Ad Page Ad H -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-5850194650079393"
             data-ad-slot="6902875030"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>

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
                    <span><strong>Category </strong>:</span> <?php echo $cat_name; ?>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                    <span><strong>Date</strong> :</span> <?php echo $date; ?>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                    <span><strong>Price</strong> :</span> € <?php echo $price; ?>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                    <span><strong>Selling Type</strong> :</span> <?php echo $selling_type; ?>
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

            $ad_query = "SELECT * FROM `ADVERTISEMENT` WHERE `id` = {$ad_id}";
            $ad_result = mysqli_query($mysqli, $ad_query);

            if (mysqli_num_rows($ad_result) > 0) {
                while ($row = mysqli_fetch_assoc($ad_result)) {
                    $user_id1 = $row['USER_id'];
                }
                $email_query = "SELECT * FROM `USER` WHERE `id` = '{$user_id1}'";
                $email_result = mysqli_query($mysqli, $email_query);
                while ($row = mysqli_fetch_assoc($email_result)) {

                    $email_to_send = $row['email'];

                }
            }

            $mail             = new PHPMailer(); // defaults to using php "mail()"
            $mail->CharSet = 'UTF-8';
            $mail->IsHTML(true);
            $link = "http://www.2dmarket.com/en/ad_page.php?".$ad_id;
            $body             = "


<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">
<head>
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
	<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
	<title>2D Market | New Bid </title>
	<style type=\"text/css\">
		/* ----- Custom Font Import ----- */
		/*@import url(https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic&subset=latin,latin-ext);*/
		@import url(https://fontlibrary.org/face/droid-arabic-kufi);

		/* ----- Text Styles ----- */
		table{
			font-family: 'DroidArabicKufiRegular';
			-webkit-font-smoothing: antialiased;
			-moz-font-smoothing: antialiased;
			font-smoothing: antialiased;
		}

		@media only screen and (max-width: 700px){
			/* ----- Base styles ----- */
			.full-width-container{
				padding: 0 !important;
			}

			.container{
				width: 100% !important;
			}

			/* ----- Header ----- */
			.header td{
				padding: 30px 15px 30px 15px !important;
			}

			/* ----- Projects list ----- */
			.projects-list{
				display: block !important;
			}

			.projects-list tr{
				display: block !important;
			}

			.projects-list td{
				display: block !important;
			}

			.projects-list tbody{
				display: block !important;
			}

			.projects-list img{
				margin: 0 auto 25px auto;
			}

			/* ----- Half block ----- */
			.half-block{
				display: block !important;
			}

			.half-block tr{
				display: block !important;
			}

			.half-block td{
				display: block !important;
			}

			.half-block__image{
				width: 100% !important;
				background-size: cover;
			}

			.half-block__content{
				width: 100% !important;
				box-sizing: border-box;
				padding: 25px 15px 25px 15px !important;
			}

			/* ----- Hero subheader ----- */
			.hero-subheader__title{
				padding: 80px 15px 15px 15px !important;
				font-size: 35px !important;
			}

			.hero-subheader__content{
				padding: 0 15px 90px 15px !important;
			}

			/* ----- Title block ----- */
			.title-block{
				padding: 0 15px 0 15px;
			}

			/* ----- Paragraph block ----- */
			.paragraph-block__content{
				padding: 25px 15px 18px 15px !important;
			}

			/* ----- Info bullets ----- */
			.info-bullets{
				display: block !important;
			}

			.info-bullets tr{
				display: block !important;
			}

			.info-bullets td{
				display: block !important;
			}

			.info-bullets tbody{
				display: block;
			}

			.info-bullets__icon{
				text-align: center;
				padding: 0 0 15px 0 !important;
			}

			.info-bullets__content{
				text-align: center;
			}

			.info-bullets__block{
				padding: 25px !important;
			}

			/* ----- CTA block ----- */
			.cta-block__title{
				padding: 35px 15px 0 15px !important;
			}

			.cta-block__content{
				padding: 20px 15px 27px 15px !important;
			}

			.cta-block__button{
				padding: 0 15px 0 15px !important;
			}
		}
	</style>

	<!--[if gte mso 9]><xml>
	<o:OfficeDocumentSettings>
		<o:AllowPNG/>
		<o:PixelsPerInch>96</o:PixelsPerInch>
	</o:OfficeDocumentSettings>
</xml><![endif]-->
</head>

<body style='padding: 0; margin: 0;' bgcolor='#eeeeee'>

<!-- / Full width container -->
<table class='full-width-container' border='0' cellpadding='0' cellspacing='0' height='100%' width='100%' bgcolor='#eeeeee' style='width: 100%; height: 100%; padding: 30px 0 30px 0;'>
	<tr>
		<td align='center' valign='top'>
			<!-- / 700px container -->
			<table class='container' border='0' cellpadding='0' cellspacing='0' width='700' bgcolor='#ffffff' style='width: 700px;'>
				<tr>
					<td align='center' valign='top'>
						<!-- / Header -->
						<table class='container header' border='0' cellpadding='0' cellspacing='0' width='620' style='width: 620px;'>
							<tr>
								<td class='info-bullets__block' style='padding: 30px 30px 15px 30px;' align='center'>
									<table class='container' border='0' cellpadding='0' cellspacing='0' align='center'>
										<tr>
											<td align='center' width='60' height='2' style=' width: 60px; height: 2px; font-size: 1px;'><img src='http://www.2dmarket.com/en/images/logo_files/logo_png_email.png'></td>
										</tr>
									</table>
								</td>

							</tr>
						</table>
						<!-- /// Header -->

						<!-- / Hero subheader -->
						<table class='container hero-subheader' border='0' cellpadding='0' cellspacing='0' width='620' style='width: 620px;'>
							<tr>
								<td class='hero-subheader__title' style='direction:ltr;font-size: 43px; font-weight: bold; padding: 80px 0 15px 0;' align='center'>Someone raised a bid on your Ad. </td>
							</tr>

							<tr>
								<td class='hero-subheader__content' style='direction:ltr;font-size: 16px; line-height: 27px; color: #969696; padding: 0 60px 90px 0;' align='left'>You have a new bid registered on your Ad.  <br>
								to check it out : <a href='$link'>click here !</a>
								</td>
							</tr>
						</table>

						<!-- / Divider -->
						<table class='container' border='0' cellpadding='0' cellspacing='0' width='100%' style='padding-top: 25px;' align='center'>
							<tr>
								<td align='center'>
									<table class='container' border='0' cellpadding='0' cellspacing='0' width='620' align='center' style='border-bottom: solid 1px #eeeeee; width: 620px;'>
										<tr>
											<td align='center'>&nbsp;</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!-- /// Divider -->

						<!-- / Info Bullets -->
						<table class='container info-bullets' border='0' cellpadding='0' cellspacing='0' width='100%' align='center'>
							<tr>
								<td align='center'>
									<table class='container' border='0' cellpadding='0' cellspacing='0' width='620' align='center' style='width: 620px;'>
										<tr>
											<td class='info-bullets__block' style='padding: 30px 30px 15px 30px;' align='center'>
												<table class='container' border='0' cellpadding='0' cellspacing='0' align='center'>
													<tr>
														<td class='info-bullets__icon' style='padding: 0 15px 0 0;'>
															<img src='https://cdn1.iconfinder.com/data/icons/material-communication/20/email-32.png'>
														</td>

														<td class='info-bullets__content' style='color: #969696; font-size: 16px;'>info@2dmarket.com</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!-- /// Info Bullets -->

						<!-- / Social nav -->
						<table class='container' border='0' cellpadding='0' cellspacing='0' width='100%' align='center'>
							<tr>
								<td align='center'>
									<table class='container' border='0' cellpadding='0' cellspacing='0' width='620' align='center' style='border-top: 1px solid #eeeeee; width: 620px;'>
										<tr>
											<td align='center' style='padding: 30px 0 30px 0;'>
												<a href='https://www.facebook.com/2Dmarket'>
													<img src='https://cdn2.iconfinder.com/data/icons/social-media-2151/512/1_Media_social_website_facebook-48.png' border='0'>
												</a>
											</td>

											<td align='center' style='padding: 30px 0 30px 0;'>
												<a href='https://twitter.com/2DmarKet1'>
													<img src='https://cdn3.iconfinder.com/data/icons/picons-social/57/43-twitter-48.png' border='0'>
												</a>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!-- /// Social nav -->

						<!-- / Footer -->
						<table class='container' border='0' cellpadding='0' cellspacing='0' width='100%' align='center'>
							<tr>
								<td align='center'>
									<table class='container' border='0' cellpadding='0' cellspacing='0' width='620' align='center' style='border-top: 1px solid #eeeeee; width: 620px;'>
										<tr>
											<td style='text-align: center; padding: 50px 0 10px 0;'>
												<a href='#' style='font-size: 28px; text-decoration: none; color: #d5d5d5;'>2D Market</a>
											</td>
										</tr>

										<tr>
											<td align='middle'>
												<table width='60' height='2' border='0' cellpadding='0' cellspacing='0' style='width: 60px; height: 2px;'>
													<tr>
														<td align='middle' width='60' height='2' style=' width: 60px; height: 2px; font-size: 1px;'><img src='http://www.2dmarket.com/en/images/logo_files/logo_png_email.png'></td>
													</tr>
												</table>
											</td>
										</tr>

										<tr>
											<td style='color: #d5d5d5; text-align: center; font-size: 15px; padding: 10px 0 60px 0; line-height: 22px;'>Copyright &copy; 2018 <a href='http://www.2dmarket.com/' target='_blank' style='text-decoration: none; border-bottom: 1px solid #d5d5d5; color: #d5d5d5;'>2D Market</a>. <br />All rights reserved.</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!-- /// Footer -->
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</body>
</html>
";


            $address1= $email_to_send;
            $mail->AddAddress($address1);

            $mail->Subject    = "New Bid";

            $mail->MsgHTML($body);

            if(!$mail->Send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;
            }


            echo "<meta http-equiv='refresh' content='0'>";
        }

        ?>


        <div class="alert-box-container  margin-top-30">
            <div class="well">
                <h3>Bids History </h3>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Username</th>
                        <th>Amount</th>
                        <th>time</th>
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
                        <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span
                                    aria-hidden="true">×</span></button>
                        <strong>There are no bids currently</strong> Submit a bid to be the first one.
                    </div>
                    <?php
                }
                ?>
                    </tbody>
                </table>
            </div>
        <?php if (isset($_SESSION['username'])) { ?>
            <div class="well">
                <h3>Submit a bid</h3>
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
            <?php
        } else { ?>
            <div role="alert" class="alert alert-warning alert-dismissible">
                <button aria-label="Close" data-dismiss="alert" class="close" type="button"></button>
                to be able to do a bod on this product <strong><a href="login.php">please login </a></strong>
            </div>
            <?php
        }
    }

    ?>
    <!-- Single Ad End -->

    <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
    <div class="grid-panel margin-top-30">
        <div class="heading-panel">
            <div class="col-xs-12 col-md-12 col-sm-12">
                <h3 class="main-title text-left">
                    Related Ads
                </h3>
            </div>
        </div>

        <div class="posts-masonry">
            <div class="col-md-12 col-xs-12 col-sm-12">
                <!-- Ads Archive -->
                <?php
                $related_ad_query1 = "SELECT * FROM `ADVERTISEMENT` WHERE CATEGORY_id = '{$category_id}' AND lang = 'EN' ORDER BY `id` DESC LIMIT 4";
                $related_ad_result1 = mysqli_query($mysqli, $related_ad_query1);
                if (mysqli_num_rows($related_ad_result1) > 0) {
                    while ($row = mysqli_fetch_assoc($related_ad_result1)) {
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
                        $cat_query1 = "SELECT * FROM `CATEGORY` WHERE `id` = '{$category_id}'";
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

                                $location1 = $user_country1 . " | " . $user_city1;


                            }
                        } else {
                            $user_postcode1 = "unknown ";
                            $user_city1 = "address";
                        }


                        $img_query1 = "SELECT * FROM `ADVERTISEMENT_PICTURE` WHERE `ADVERTISEMENT_id` = '{$id1}'";
                        $img_result1 = mysqli_query($mysqli, $img_query1);
                        if (mysqli_num_rows($img_result1) > 0) {
                            while ($row = mysqli_fetch_assoc($img_result1)) {
                                $picture_name_1 = $row['picture_name'];
                                $picture_url_1 = $row['picture_url'];

                            }
                        }
                        if(empty($picture_name_1)){
                            $picture_url_1 = 'en_ad_photo/';
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
                                                    <h4>Contact Info,</h4>
                                                    <strong>Username : </strong> <?php echo $user_username1; ?>
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
                                                    <h4>Address</h4>
                                                    <?php echo $location1; ?>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Ad Type -->
                                        <li>
                                            <div class="custom-tooltip tooltip-effect-4">
                                                <span class="tooltip-item"><i class="fa fa-cog"></i></span>
                                                <div class="tooltip-content"> <strong>Product Info.</strong> <span class="label label-danger"><?php echo $status1 . " | ". $delivery_type1;?></span> </div>
                                            </div>
                                        </li>
                                        <!-- Ad Type -->
                                    </ul>
                                    <!-- Ad History -->
                                    <div class="clearfix archive-history">
                                        <div class="last-updated">Added : <?php echo $date1;?></div>
                                        <div class="ad-meta"> <?php if (isset($_SESSION['username'])){?><a href="scripts/add_to_favorite.php?ad_id=<?php echo $id1;?>" class="btn save-ad"><i class="fa fa-heart-o"></i> Save Ad.</a><?php }?> <a href="ad_page.php?ad_id=<?php echo $id1; ?>" class="btn btn-success"><i class="fa fa-eye"></i> View Details.</a> </div>
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
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Ad Page Ad H -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:728px;height:90px"
                     data-ad-client="ca-pub-5850194650079393"
                     data-ad-slot="6902875030"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
    </div>
    <!-- =-=-=-=-=-=-= Latest Ads End =-=-=-=-=-=-= -->
    <?php
}
?>
<!--<script>-->
<!--    function ManualRefresh(){-->
<!--        window.location.reload();-->
<!--    }-->
<!--</script>-->
