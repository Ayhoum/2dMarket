<?php
ob_start();
session_start();
require_once '../scripts/db_connection.php';
require_once '../phpmailer/class.phpmailer.php';

?>

<?php

if (isset($_POST['submit']) && $_GET['id']){
    $street_name    = $_POST['street_name'];
    $street_name    = mysqli_real_escape_string($mysqli,$street_name);
    $house_number   = $_POST['house_number'];
    $house_number   = mysqli_real_escape_string($mysqli,$house_number);
    $postcode       = $_POST['postcode'];
    $postcode       = mysqli_real_escape_string($mysqli,$postcode);
    $country        = $_POST['country'];
    $country        = mysqli_real_escape_string($mysqli,$country);
    $region         = $_POST['region'];
    $region         = mysqli_real_escape_string($mysqli,$region);
    $city           = $_POST['city'];
    $city           = mysqli_real_escape_string($mysqli,$city);


    $fullurl = "http://maps.googleapis.com/maps/api/geocode/json?address=".$city."+".$street_name."+".$house_number;
    $string = file_get_contents($fullurl); // get json content
    $json_a = json_decode($string, true); //json decoder

    $lat = $json_a['results'][0]['geometry']['location']['lat']; // get ing for json

    $lon =  $json_a['results'][0]['geometry']['location']['lng']; // get ing for json


    $id = $_GET['id'];

    $insert_address_query  = "INSERT INTO `ADDRESS` (street_name, house_number, country, postcode, city, region, USER_id, lon, lat)";
    $insert_address_query .="VALUES   ( '{$street_name}',
                                        '{$house_number}',
                                        '{$country}',
                                        '{$postcode}',
                                        '{$city}',
                                        '{$region}',
                                        '{$id}',
                                        '{$lon}',
                                        '{$lat}' )";

    $insert_address_result = mysqli_query($mysqli,$insert_address_query);


    //get user info.
    $get_query  = "SELECT * FROM `USER` WHERE `id`= '{$id}'";
    $get_result = mysqli_query($mysqli, $get_query);
    while ($row = mysqli_fetch_assoc($get_result)){
        $email = $row['email'];

    }


    $code = rand(10000,99999);

    $link = "http://www.2dmarket.com/en/verfiy_account.php?code=" . $code . "&email=" . $email;

    $update_user_query ="UPDATE USER  SET `code` ='{$code}' where `id` ='{$id}'";

    $update_user_result = mysqli_query($mysqli,$update_user_query);




    $mail             = new PHPMailer(); // defaults to using php "mail()"
    $mail->CharSet = 'UTF-8';
    $mail->IsHTML(true);

    $body             = "


<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">
<head>
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
	<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
	<title>2D Market | Account Conformation </title>
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
								<td class='hero-subheader__title' style='direction:ltr;font-size: 43px; font-weight: bold; padding: 80px 0 15px 0;' align='center'>Just one more step</td>
							</tr>

							<tr>
								<td class='hero-subheader__content' style='direction:ltr;font-size: 16px; line-height: 27px; color: #969696; padding: 0 60px 90px 0;' align='left'>You are just a step ahead to activate your account on 2D Market. <br>
								 To conform your email : <a href='$link'>Click Here!</a>
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


    $address1= $email;
    $mail->AddAddress($address1);

    $mail->Subject    = "Verify your email ";

    $mail->MsgHTML($body);

    if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }

    unset($_SESSION['new']);

    header("Location: login.php");



} else {
    echo "";
}
//

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="description" content="">
      <meta name="author" content="ScriptsBundle">
      <title>2D Market | Register</title>
      <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
      <link rel="icon" href="images/logo_files/logo_png.png" type="image/x-icon" />
      <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="css/bootstrap.css">
      <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="css/style.css">
      <!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="css/font-awesome.css" type="text/css">
      <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
      <link href="css/flaticon.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="css/et-line-fonts.css" type="text/css">
      <!-- =-=-=-=-=-=-= Menu Drop Down =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="css/forest-menu.css" type="text/css">
      <!-- =-=-=-=-=-=-= Animation =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="css/animate.min.css" type="text/css">
      <!-- =-=-=-=-=-=-= Select Options =-=-=-=-=-=-= -->
      <link href="css/select2.min.css" rel="stylesheet" />
      <!-- =-=-=-=-=-=-= noUiSlider =-=-=-=-=-=-= -->
      <link href="css/nouislider.min.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Listing Slider =-=-=-=-=-=-= -->
      <link href="css/slider.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
      <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
      <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
      <!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
      <link href="skins/minimal/minimal.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Responsive Media =-=-=-=-=-=-= -->
      <link href="css/responsive-media.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Template Color =-=-=-=-=-=-= -->
      <link rel="stylesheet" id="color" href="css/colors/defualt.css">
      <!-- =-=-=-=-=-=-= For Style Switcher =-=-=-=-=-=-= -->
      <link rel="stylesheet" id="theme-color" type="text/css" href="#" />
      <!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
      <link href="skins/minimal/minimal.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= For This Page Only =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="css/dropzone.css">
      <link href="css/jquery.tagsinput.min.css" rel="stylesheet">
      <!-- JavaScripts -->
      <script src="js/modernizr.js"></script>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

       <script src="dist/geodatasource-cr.min.js"></script>
       <link rel="stylesheet" href="dist/geodatasource-countryflag.css">

   </head>
   <body>
      <!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
      <div id="loader-wrapper">
          <div id="loader"><img class="img-responsive"  src="images/logo_files/design.gif">
              <h4 class="text-center" style="color: #00a9da"> Loading..</h4> </div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
      </div>
      <!-- =-=-=-=-=-=-= Light Header =-=-=-=-=-=-= -->
      <div class="colored-header">
         <!-- Top Bar -->
          <?php include "topbar-en.php";?>
          <!-- Top Bar End -->
         <!-- Navigation Menu -->
         <?php include "nav_bar_en.php";?>
      </div>
      <!-- Navigation Menu End -->
      <!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
      <div class="page-header-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="header-page">
                     <h1>Register 2nd Step </h1>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
         <section class="section-padding  gray ">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <div class="col-md-12">
                     <!-- end post-padding -->
                     <div class="post-ad-form postdetails">
                        <div class="heading-panel text-center">
                           <h3 class="main-title text-left">
                              Complete your info.
                           </h3>
                        </div>
                        <p class="lead">to have a better experience on  <a href="#">2dmarket.com</a> please fill in the rest of your info.</p>
                        <form  name="add_new_ad" method="post" action="register_2.php?id=<?php echo $_GET['id'];?>" class="submit-form" enctype="multipart/form-data">
                         <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                             <div class="row">
                                 <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                     <label class="control-label">Street Name <small>Fill in your street name</small></label>
                                     <input name= "street_name" class="form-control" id="street_name" placeholder="Plutostraat" type="text">
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                     <label class="control-label">House Number <small>Fill in your house number</small></label>
                                     <input name= "house_number" class="form-control" id="house_number" placeholder="155" type="text">
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                     <label class="control-label">Postal code <small>Fill in your postal code</small></label>
                                     <input name= "postcode" class="form-control" id="postcode" placeholder="9777 XX" type="text">
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                     <label class="control-label">Country <small>Select your country form the list</small></label>
                                     <select name="country" class="gds-cr gds-countryflag margin-bottom-20" country-data-region-id="gds-cr-four"></select>
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                     <label class="control-label">Province <small>Select your Province form the list</small></label>
                                     <select name="region" class="form-control margin-bottom-20" id="gds-cr-four"></select>
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                     <label class="control-label">City <small>Fill in your city</small></label>
                                     <input name= "city" class="form-control" id="city" placeholder="Amsterdam" type="text">
                                 </div>
                             </div>

                             <div class="margin-top-20">
                                 <button type="submit" name="submit" class="submitBut btn btn-theme pull-right">Complete my profile</button>
                             </div>
                        </form>

                     </div>
                     <!-- end post-ad-form-->
                  </div>
                  <!-- end col -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
          <div class="custom-modal">
              <div id="fieldsError" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                      <!-- Modal content-->
                      <div class="modal-content">
                          <div class="modal-header rte">
                              <h2 class="modal-title text-center">You left the following fields empty:</h2>
                          </div>
                          <div class="modal-body" id="modal-body">
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-info" data-dismiss="modal">Continue</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
         <?php include 'footer.php';?>
         <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
      </div>
      <!-- Main Content Area End --> 
      <!-- Post Ad Sticky -->
<!--      <a href="--><?php //if (isset($_SESSION['id'])){echo "new_advertisement.php";  } else { echo "login.php"; }?><!--" class="sticky-post-button hidden-xs">-->
<!--         <span class="sell-icons">-->
<!--         <i class="flaticon-transport-9"></i>-->
<!--         </span>-->
<!--         <h4>SELL</h4>-->
<!--      </a>-->


      <!-- Back To Top -->
      <a href="#0" class="cd-top">Top</a>
      <!-- Back To Top -->
      <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
      <script src="js/jquery.min.js"></script>
      <!-- Bootstrap Core Css  -->
      <script src="js/bootstrap.min.js"></script>
      <!-- Jquery Easing -->
      <script src="js/easing.js"></script>
      <!-- Menu Hover  -->
      <script src="js/forest-megamenu.js"></script>
      <!-- Jquery Appear Plugin -->
      <script src="js/jquery.appear.min.js"></script>

      <!-- Numbers Animation   -->
      <script src="js/jquery.countTo.js"></script>
      <!-- Jquery Smooth Scroll  -->
      <script src="js/jquery.smoothscroll.js"></script>
      <!-- Jquery Select Options  -->
      <script src="js/select2.min.js"></script>
      <!-- noUiSlider -->
      <script src="js/nouislider.all.min.js"></script>
      <!-- Carousel Slider  -->
      <script src="js/carousel.min.js"></script>
      <script src="js/slide.js"></script>
      <!-- Image Loaded  -->
      <script src="js/imagesloaded.js"></script>
      <script src="js/isotope.min.js"></script>
      <!-- CheckBoxes  -->
      <script src="js/icheck.min.js"></script>
      <!-- Jquery Migration  -->
      <script src="js/jquery-migrate.min.js"></script>
      <!-- Sticky Bar  -->
      <script src="js/theia-sticky-sidebar.js"></script>
      <!-- Style Switcher -->
      <script src="js/color-switcher.js"></script>
      <!-- Template Core JS -->
      <script src="js/custom.js"></script>
      <!-- For this Page Only -->
      <!-- Ckeditor  -->
      <script src="js/ckeditor/ckeditor.js" ></script>
      <!-- Ad Tags  -->
      <script src="js/jquery.tagsinput.min.js"></script>
      <!-- DROPZONE JS  -->
      <script src="js/dropzone.js" ></script>
      <script src="js/form-dropzone.js" ></script>
      <script type="text/javascript">
	   "use strict";
	   
	   /*--------- Textarea Ck Editor --------*/
	     CKEDITOR.replace( 'editor2' );
		 
	   /*--------- Ad Tags --------*/ 
		 $('#tags').tagsInput({
   			'width':'100%'
		 });
	   
         /*--------- create remove function in dropzone --------*/



       Dropzone.options.myDropzone = {
           url: "scripts/uploadphotos.php",
           autoProcessQueue: false,
           uploadMultiple: true,
           parallelUploads: 25,
           maxFiles: 25,
           addRemoveLinks: true,
           acceptedFiles: "image/*",
           success: function(){
               window.location.href = "profile.php";
           }
       };

      </script>
      <!-- JS -->
   </body>
</html>