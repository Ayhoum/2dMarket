<?php
/**
 * Created by PhpStorm.
 * User: aylos
 * Date: 17/2/2018
 * Time: 4:11 م
 */
session_start();
require_once "../../scripts/db_connection.php";


if (isset($_GET['id'])) {


    switch ($_REQUEST['action']) {

        case "getAuthor":
            $query = "SELECT * FROM CHAT WHERE id = '{$_GET['id']}'";
            $run = mysqli_query($mysqli, $query);
            if (mysqli_num_rows($run) > 0) {
                while ($row = mysqli_fetch_assoc($run)) {
                    $partOne = $row['part_one'];
                    $partTwo = $row['part_two'];
                    $ad_id = $row['ADVERTISEMENT_id'];

                    if ($_SESSION['id'] == $partOne) {
                        $userQuery = "SELECT * FROM USER WHERE id = '{$partTwo}'";
                    } else {
                        $userQuery = "SELECT * FROM USER WHERE id = '{$partOne}'";
                    }
                    $getUser = mysqli_query($mysqli, $userQuery);
                    if (mysqli_num_rows($getUser) > 0) {
                        while ($row = mysqli_fetch_assoc($getUser)) {
                            $name = $row['first_name'] . " " . $row['last_name'];
                        }
                    } else {
                        echo "This account has been removed";
                    }
                }
            }

            $author = "<div class='image'>
                        <img src='images/users/3.jpg' alt=''>
                       </div>
                       <span class='author-name'>$name</span>
                       <em>5 days ago</em>";
            echo $author;
            break;


        case "getProduct":

            require_once 'time_elapse.php';

            $adQuery = "SELECT * FROM ADVERTISEMENT WHERE id = '{$ad_id}'";
            $getAd = mysqli_query($mysqli, $adQuery);
            if (mysqli_num_rows($getAd) > 0) {
                while ($row = mysqli_fetch_assoc($getAd)) {
                    $adName = $row['title'];
                    $adTime = $row['date'];
                    $adTime = time_elapsed_string($adTime);
                }
            } else {
                echo "This advertisement has been removed";

            }
            break;

        case "getMessages":

            $chat = "";
            $query = "SELECT * FROM MESSAGE WHERE CHAT_id = '{$_GET['id']}'";
            $run = mysqli_query($mysqli, $query);
            if (mysqli_num_rows($run) > 0) {
                while ($row = mysqli_fetch_assoc($run)) {
                    $message_id = $row['id'];
                    $sender = $row['sender'];
                    $msg_time = $row['msg_time'];
                    $msg_text = $row['msg_text'];

                    if ($sender == $_SESSION['id']) {

                        $chat .= "<li class='friend-message clearfix'>
                        <figure class='profile-picture'>
                            <img src='images/users/2.jpg' class='img-circle' alt='Profile Pic'>
                        </figure>
                        <div class='message'>
                            $msg_text
                            <div class='time'><i class='fa fa-clock-o'></i> $msg_time</div>
                        </div>
                    </li>";

                    } else {

                        $chat .= "<li class='my-message clearfix'>
                        <figure class='profile-picture'>
                            <img src='images/users/1.jpg' class='img-circle' alt='Profile Pic'>
                        </figure>
                        <div class='message'>
                            $msg_text
                            <div class='time'><i class='fa fa-clock-o'></i> $msg_time</div>
                        </div>
                    </li>";
                        $update_query = "UPDATE MESSAGE SET status = 'READ' WHERE id = '{$message_id}' AND CHAT_id = '{$_GET['id']}'";
                        $runUpdate = mysqli_query($mysqli, $update_query);
                    }

                }
            } else {
                echo "No messages yet";
            }
            echo $chat;
            break;






        case "sendMessage":

            $query = "SELECT * FROM CHAT WHERE id = '{$_GET['id']}'";
            $run = mysqli_query($mysqli, $query);
            if (mysqli_num_rows($run) > 0) {
                while ($row = mysqli_fetch_assoc($run)) {
                    $partOne = $row['part_one'];
                    $partTwo = $row['part_two'];
                    $ad_id = $row['ADVERTISMENT_id'];

                }
            }
            $time = date('Y-m-d H:i:s');
            $query = "INSERT INTO MESSAGE (status,msg_text,msg_time,sender,CHAT_id) 
                    VALUES ('UNREAD','{$_REQUEST['message']}','{$time}','{$_SESSION['id']}','{$_GET['id']}')";
            $run = mysqli_query($mysqli, $query);
            if($run){
                echo 1;

                if ($_SESSION['id'] == $partOne) {
                    $userEmailQuery = "SELECT * FROM USER WHERE id = '{$partTwo}'";
                } else {
                    $userEmailQuery = "SELECT * FROM USER WHERE id = '{$partOne}'";
                }
                $getEmailUser = mysqli_query($mysqli, $userEmailQuery);
                if (mysqli_num_rows($getEmailUser) > 0) {
                    while ($row = mysqli_fetch_assoc($getEmailUser)) {
                        $userEmail = $row['email'];
                    }

                    $link = "http://www.2dmarket.com/en/login.php";

                    $mail             = new PHPMailer(); // defaults to using php "mail()"
                    $mail->CharSet = 'UTF-8';
                    $mail->IsHTML(true);

                    $body             = "


<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
	<title>2D Market | New Message</title>
	<style type='text/css'>
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
								<td class='hero-subheader__title' style='direction:ltr;font-size: 43px; font-weight: bold; padding: 80px 0 15px 0;' align='center'>You have a new Message</td>
							</tr>

							<tr>
								<td class='hero-subheader__content' style='direction:ltr;font-size: 16px; line-height: 27px; color: #969696; padding: 0 60px 90px 0;' align='left'>To read the message<br>
								<a href='$link'>Click Here!</a>
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


                    $address1= $userEmail;
                    $mail->AddAddress($address1);

                    $mail->Subject    = "New Message on 2D Market";

                    $mail->MsgHTML($body);
                    if(!$mail->Send()) {
                        echo "Mailer Error: " . $mail->ErrorInfo;
                    }

                } else {
                    echo "This account has been removed";
                }



                exit;
            }
            break;





    }
} else {
    echo "No Messages Selected";
}