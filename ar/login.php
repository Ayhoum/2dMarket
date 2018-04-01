<?php
session_start();
require_once "../scripts/db_connection.php";
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
       <title>2D Market | تسجيـل الدخـول</title>
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
       <!-- JavaScripts -->
       <script src="js/modernizr.js"></script>
       <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
       <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
       <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
       <![endif]-->
      <!--login script-->
       <script>
           var logIn = function () {
               var email = $("#email_field").val();
               var password = $("#password_field").val();

               if(email == '' || password == ''){
                   $("#fieldsError").modal();
               }else{
                   $.post('scripts/handle_login.php?email=' + email + '&pass=' + password, function (response) {

                       if (response == "done") {
                           window.location.href = "profile.php";
                       } else if(response == "error_password"){
                           $("#modalPassError").modal();

                       }else if(response == "error_username"){
                           $("#modalUserError").modal();

                       }
                   });
               }

           };
       </script>
   </head>
   <body class="rtl">
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
                  <div class="header-page text-center">
                     <h1>تسجيل الدخول</h1>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
          <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
          <section class="section-padding-140 error-page pattern-bg " style="margin-top: -60px;">
              <!-- Main Container -->
              <div class="container">
                  <!-- Row -->
                  <div class="row">
                      <!-- Middle Content Area -->
                      <div class="col-sm-offset-0 col-sm-12 col-md-offset-3 col-md-6">
                          <!--  Form -->
                          <div class="form-grid">
                              <form action="#" name="login" id="login_form" method="post" data-toggle="validator">
                                  <div class="form-group">
                                      <label>البريـد الالكترونـي</label>
                                      <input id="email_field" placeholder="قم بادخال بريدك الالكتروني" class="form-control" type="email" name="email">
                                  </div>
                                  <div class="form-group">
                                      <label>كلـمة المـرور</label>
                                      <input id="password_field" placeholder="قم بادخال كلمة المرور" class="form-control" type="password" name="password">

                                      <p><b><a href="scripts/RestorePassowrd/resotre_password.php" target="_blank">Have you forgot your password!</a></b></p>
                                  </div>

                                  <button type="button" onclick="logIn();" class="btn btn-theme btn-lg btn-block" name="Log_in">تسجيـل الدخـول </button>
                              </form>
                          </div>
                          <!-- Form -->
                      </div>
                      <!-- Middle Content Area  End -->
                  </div>
                  <!-- Row End -->
              </div>
              <!-- Main Container End -->
          </section>
          <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
          <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
          <?php include 'footer.php';?>
          <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
      </div>


      <div class="custom-modal">
          <div id="modalPassError" class="modal fade" role="dialog">
              <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                      <div class="modal-header rte">
                          <h2 class="modal-title text-center">You entered a wrong password!</h2>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-info" data-dismiss="modal">Try again</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="custom-modal">
          <div id="modalUserError" class="modal fade" role="dialog">
              <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                      <div class="modal-header rte">
                          <h2 class="modal-title text-center">Maybe you entered a wrong email</h2>
                          <h2 class="modal-title text-center">Please, check it or make a new account!</h2>
                      </div>
                      <div class="modal-footer">
                          <a href="register.php" type="button" class="btn btn-warning">Register</a>
                          <button type="button" class="btn btn-info" data-dismiss="modal">Try again</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="custom-modal">
          <div id="fieldsError" class="modal fade" role="dialog">
              <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                      <div class="modal-header rte">
                          <h2 class="modal-title text-center">You left something empty!</h2>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-info" data-dismiss="modal">Try again</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Main Content Area End --> 
      <!-- Post Ad Sticky -->
      <a href="#" class="sticky-post-button hidden-xs">
         <span class="sell-icons">
         <i class="flaticon-transport-9"></i>
         </span>
         <h4>يبيع</h4>
      </a>
      <a href="<?php if (isset($_SESSION['id'])){echo "new_advertisement.php";  } else { echo "login.php"; }?>" class="sticky-post-button hidden-xs">
         <span class="sell-icons">
         <i class="flaticon-transport-9"></i>
         </span>
          <h4>قم بالبيع الان</h4>
      </a>
      <!-- Back To Top -->
      <a href="#0" class="cd-top">Top</a>
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



   </body>
</html>

