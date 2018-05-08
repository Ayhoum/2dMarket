<?php
ob_start();
session_start();
include 'scripts/sessions.php';
require_once '../scripts/db_connection.php';

require_once '../phpmailer/class.phpmailer.php';

?>

<?php

if (isset($_POST['submit'])){
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
    $city           = $_POST['$city'];
    $city           = mysqli_real_escape_string($mysqli,$city);
    $id = $_SESSION['new_user'];

    $insert_address_query  = "INSERT INTO `ADDRESS` (street_name, house_number, country, postcode, city, region, USER_id)";
    $insert_address_query .="VALUES   ( '{$street_name}',
                                        '{$house_number}',
                                        '{$country}',
                                        '{$postcode}',
                                        '{$city}',
                                        '{$region}',
                                        '{$id}' )";

    $insert_address_result = mysqli_query($mysqli,$insert_address_query);


    //get user info.
    $get_query = "SELECT * FROM `USER` WHERE `id`= '{$id}'";

    $get_result = mysqli_query($mysqli, $get_query);
    while ($row=mysqli_fetch_assoc($get_result)){
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
	<title>2D Market | تـأكيد تسجيـل الحسـاب</title>
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

<body style=\"padding: 0; margin: 0;\" bgcolor=\"#eeeeee\">

<!-- / Full width container -->
<table class=\"full-width-container\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" bgcolor=\"#eeeeee\" style=\"width: 100%; height: 100%; padding: 30px 0 30px 0;\">
	<tr>
		<td align=\"center\" valign=\"top\">
			<!-- / 700px container -->
			<table class=\"container\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" bgcolor=\"#ffffff\" style=\"width: 700px;\">
				<tr>
					<td align=\"center\" valign=\"top\">
						<!-- / Header -->
						<table class=\"container header\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"620\" style=\"width: 620px;\">
							<tr>
								<td class=\"info-bullets__block\" style=\"padding: 30px 30px 15px 30px;\" align=\"center\">
									<table class=\"container\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\">
										<tr>
											<td align=\"center\" width=\"60\" height=\"2\" style=\" width: 60px; height: 2px; font-size: 1px;\"><img src=\"http://www.2dmarket.com/en/images/logo_files/logo_png.png\"></td>
										</tr>
									</table>
								</td>

							</tr>
						</table>
						<!-- /// Header -->

						<!-- / Hero subheader -->
						<table class=\"container hero-subheader\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"620\" style=\"width: 620px;\">
							<tr>
								<td class=\"hero-subheader__title\" style=\"direction:ltr;font-size: 43px; font-weight: bold; padding: 80px 0 15px 0;\" align=\"center\">لتتمكن من تسجيل الدخول في موقعنا الرجـاء تأكيد حسابك</td>
							</tr>

							<tr>
								<td class=\"hero-subheader__content\" style=\"direction:ltr;font-size: 16px; line-height: 27px; color: #969696; padding: 0 60px 90px 0;\" align=\"right\">لتأكيـد الحسـاب :<br>
								<a href='$link'>اضغط هنـا</a>
								</td>
							</tr>
						</table>

						<!-- / Divider -->
						<table class=\"container\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"padding-top: 25px;\" align=\"center\">
							<tr>
								<td align=\"center\">
									<table class=\"container\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"620\" align=\"center\" style=\"border-bottom: solid 1px #eeeeee; width: 620px;\">
										<tr>
											<td align=\"center\">&nbsp;</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!-- /// Divider -->

						<!-- / Info Bullets -->
						<table class=\"container info-bullets\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" align=\"center\">
							<tr>
								<td align=\"center\">
									<table class=\"container\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"620\" align=\"center\" style=\"width: 620px;\">
										<tr>
											<td class=\"info-bullets__block\" style=\"padding: 30px 30px 15px 30px;\" align=\"center\">
												<table class=\"container\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\">
													<tr>
														<td class=\"info-bullets__icon\" style=\"padding: 0 15px 0 0;\">
															<img src=\"https://cdn1.iconfinder.com/data/icons/material-communication/20/email-32.png\">
														</td>

														<td class=\"info-bullets__content\" style=\"color: #969696; font-size: 16px;\">info@2dmarket.com</td>
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
						<table class=\"container\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" align=\"center\">
							<tr>
								<td align=\"center\">
									<table class=\"container\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"620\" align=\"center\" style=\"border-top: 1px solid #eeeeee; width: 620px;\">
										<tr>
											<td align=\"center\" style=\"padding: 30px 0 30px 0;\">
												<a href=\"https://www.facebook.com/2Dmarket\">
													<img src=\"https://cdn2.iconfinder.com/data/icons/social-media-2151/512/1_Media_social_website_facebook-48.png\" border=\"0\">
												</a>
											</td>

											<td align=\"center\" style=\"padding: 30px 0 30px 0;\">
												<a href=\"https://twitter.com/2DmarKet1\">
													<img src=\"https://cdn2.iconfinder.com/data/icons/social-media-2151/512/11_Media_social_website_twitter-48.png\" border=\"0\">
												</a>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!-- /// Social nav -->

						<!-- / Footer -->
						<table class=\"container\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" align=\"center\">
							<tr>
								<td align=\"center\">
									<table class=\"container\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"620\" align=\"center\" style=\"border-top: 1px solid #eeeeee; width: 620px;\">
										<tr>
											<td style=\"text-align: center; padding: 50px 0 10px 0;\">
												<a href=\"#\" style=\"font-size: 28px; text-decoration: none; color: #d5d5d5;\">2D Market</a>
											</td>
										</tr>

										<tr>
											<td align=\"middle\">
												<table width=\"60\" height=\"2\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 60px; height: 2px;\">
													<tr>
														<td align=\"middle\" width=\"60\" height=\"2\" style=\" width: 60px; height: 2px; font-size: 1px;\"><img src=\"http://www.2dmarket.com/en/images/logo_png.png\"></td>
													</tr>
												</table>
											</td>
										</tr>

										<tr>
											<td style=\"color: #d5d5d5; text-align: center; font-size: 15px; padding: 10px 0 60px 0; line-height: 22px;\">Copyright &copy; 2018 <a href=\"http://www.2dmarket.com/\" target=\"_blank\" style=\"text-decoration: none; border-bottom: 1px solid #d5d5d5; color: #d5d5d5;\">2D Market</a>. <br />All rights reserved.</td>
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

    $mail->Subject    = "Verify Your Account";

    $mail->MsgHTML($body);

    if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
    header("Location: register_2.php");

    $_SESSION['new_user']= null;

}


?>

<!DOCTYPE html>
<html lang="ar">
   <head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="description" content="">
      <meta name="author" content="ScriptsBundle">
      <title>2D Market | تسجيل الدخول</title>
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
          <?php include "topbar-ar.php";?>
          <!-- Top Bar End -->
         <!-- Navigation Menu -->
         <?php include "nav_bar_ar.php"; ?>
      </div>
      <!-- Navigation Menu End -->
      <!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
      <div class="page-header-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="header-page">
                     <h1>تتمـة تسجيل الدخـول </h1>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
         <section class="section-padding  gray " style="direction: rtl">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <div class="col-md-12">
                     <!-- end post-padding -->
                     <div class="post-ad-form extra-padding postdetails">
                        <div class="heading-panel text-center">
                           <h3 class="main-title text-left">
                              اكمـل عمليـة التسجيل الدخـول
                           </h3>
                        </div>
                        <p class="lead" style="direction: rtl">للحصول على افضل خدمة ممكنة الرجاء القيـام باكمال عملية تسجيل المعلومات</p>
                         <form  name="add_new_ad" method="post" action="register_2.php" class="submit-form" enctype="multipart/form-data">
                             <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="direction: rtl">
                                 <div class="row">
                                     <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                         <label class="control-label">اسـم الشـارع <small>قـم بادخـال اسم الشارع المقيـم به</small></label>
                                         <input name= "street_name" class="form-control" id="street_name" placeholder="Plutostraat" type="text">
                                     </div>
                                 </div>

                                 <div class="row">
                                     <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                         <label class="control-label">رقـم المنزل <small>قـم بادخـال رقم المنزل الخـاص بك</small></label>
                                         <input name= "house_number" class="form-control" id="house_number" placeholder="155" type="text">
                                     </div>
                                 </div>

                                 <div class="row">
                                     <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                         <label class="control-label">الرمز البريدي <small>قم بادخـال الرمز البريدي لمنطتك</small></label>
                                         <input name= "postcode" class="form-control" id="postcode" placeholder="9777 XX" type="text">
                                     </div>
                                 </div>

                                 <div class="row">
                                     <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                         <label class="control-label">البلـد <small>اختر دولتك من القائمة</small></label>
                                         <select name="country" class="gds-cr gds-countryflag margin-bottom-20" country-data-region-id="gds-cr-four"></select>
                                     </div>
                                 </div>

                                 <div class="row">
                                     <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                         <label class="control-label">المحافظـة <small>اختر محافظتك من القائمة</small></label>
                                         <select name="region" class="form-control margin-bottom-20" id="gds-cr-four"></select>
                                     </div>
                                 </div>

                                 <div class="row">
                                     <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                         <label class="control-label">المدينـة <small>قم بادخـال اسم مدينتك</small></label>
                                         <input name= "city" class="form-control" id="city" placeholder="Amsterdam" type="text">
                                     </div>
                                 </div>

                                 <div class="margin-top-20">
                                     <button type="submit" name="submit" class="submitBut btn btn-theme pull-right">تسجيـل الدخـول</button>
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
         <?php include "footer.php"; ?>
         <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
      </div>
      <!-- Main Content Area End --> 
      <!-- Post Ad Sticky -->
      <a href="<?php if (isset($_SESSION['id'])){echo "new_advertisement.php";  } else { echo "login.php"; }?>" class="sticky-post-button hidden-xs">
         <span class="sell-icons">
         <i class="flaticon-transport-9"></i>
         </span>
          <h4>قم بالبيع الان</h4>
      </a>
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
           },
           init: function() {
               var submitButton = document.querySelector(".submitBut");
               var myDr = this;
               // First change the button to actually tell Dropzone to process the queue.
               submitButton.addEventListener("click", function () {





                   var categoryField        = $("#category").val();
                   var titleField           = $("#title").val();
                   var priceField           = $("#price").val();
                   var sellTypeField        = $("#sellType").val();
                   var conditionField       = $("#condition").val();
                   var deliveryTypeField    = $("#deliveryType").val();
                   var desField             = CKEDITOR.instances.editor2.getData();
                   var adTypeField          = $("#adType").val();
                   var categoryId ;
                   var subCategoryId ;

                   if(categoryField == ''
                       || titleField == ''
                       || priceField == ''
                       || sellTypeField == ''
                       || conditionField == ''
                       || deliveryTypeField == ''
                       || adTypeField == ''){
                       document.getElementById('modal-body').innerHTML = "";

                       if(categoryField == ''){
                           document.getElementById('modal-body').innerHTML += "<p> Category </p>";
                       }
                       if(titleField == ''){
                           document.getElementById('modal-body').innerHTML += "<p> Title </p>";
                       }
                       if(priceField == ''){
                           document.getElementById('modal-body').innerHTML += "<p> Price </p>";
                       }
                       if(sellTypeField == ''){
                           document.getElementById('modal-body').innerHTML += "<p> Type of selling </p>";
                       }
                       if(conditionField == ''){
                           document.getElementById('modal-body').innerHTML += "<p> Product condition </p>";
                       }
                       if(deliveryTypeField == ''){
                           document.getElementById('modal-body').innerHTML += "<p> Delivery method </p>";
                       }
                       if(adTypeField == ''){
                           document.getElementById('modal-body').innerHTML += "<p> Advertisement type </p>";
                       }

                       $("#fieldsError").modal();
                   }else{
                       if (categoryField != ''){
                           var resultCat = categoryField.split("-");
                           categoryId    = resultCat[0];
                           subCategoryId = resultCat[1];
                       }

                       $.post('scripts/handle_addProduct.php?cat=' + categoryId

                           + '&subCat=' + subCategoryId
                           + '&title=' + titleField
                           + '&price=' + priceField
                           + '&sellType=' + sellTypeField
                           + '&cond=' + conditionField
                           + '&delivery=' + deliveryTypeField
                           + '&des=' + desField
                           + '&adType=' + adTypeField, function (response) {

                           if (response != 'error') {
                               myDr.processQueue();
                           }
                       });


                   }

               });
           }
       };

      </script>
      <!-- JS -->
   </body>
</html>