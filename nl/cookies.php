<?php
//require_once 'scripts/sessions.php';
require_once '../phpmailer/class.phpmailer.php';
session_start();
ob_start();
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
      <title>2D Market | Cookies </title>
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
      <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-=  -->
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
      <!-- JavaScripts -->
      <script src="js/modernizr.js"></script>
      <!-- HTML5 Shim and Respond.js IE8 support  of HTML5 elements and media queries -->
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
              <h4 class="text-center" style="color: #00a9da">Aan het laden..</h4> </div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
      </div>
     <!-- =-=-=-=-=-=-= Color Switcher =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Light Header =-=-=-=-=-=-= -->
      <div class="colored-header">
         <!-- Top Bar -->
         <?php include "topbar-nl.php";?>
         <!-- Top Bar End -->
         <!-- Navigation Menu -->
          <?php include "nav_bar_nl.php";?>
      </div>
      <!-- Navigation Menu End -->
      <!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-=  -->
      <!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
      <div class="page-header-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="header-page text-center">
                     <h1>Ons Website Cookies</h1>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Small Breadcrumb -->
      <!-- Small Breadcrumb -->
      <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
         <section class="section-padding ">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12 no-padding commentForm">

                      <h4 style="color: #00a9da">2Dmarket</h4>
                      <p>De belangrijkste 2Dmarket cookies vallen in de categorie 'functionele cookies'. Dit zijn cookies waardoor u kunt inloggen op het prikbord of een foto kunt insturen op onze foto site. Andere cookies zijn ervoor om uw favoriete links te onthouden of om te kunnen stemmen op de poll op de voorpagina.
                      </p>
                      <br>
                      <h4 style="color: #00a9da">2 cookies: </h4>
                      <p> PHPSESSID EKPOLL</p>
                      <br>

                      <h4 style="color: #00a9da">Cookies voor website-analyse</h4>
                         <p> Google Analytics
                          Meten is weten! Met Google Analytics (een gratis meetprogramma van Google) kunnen wij zien hoe bezoekers op ZeelandNet terechtkomen en rondklikken. Door het meten van gebruikersgedrag is het voor ons makkelijker onze bezoeker te begrijpen en de website voor u te blijven verbeteren. P.s. Deze gegevens zijn anoniem.
                         </p>
                      <br>

                      <h4 style="color: #00a9da">5 cookies:</h4>
                         <p> __UTMB __UTMC __UTMA __UTMZ __UTMV
                         </p>
                      <br>
                      <h4 style="color: #00a9da"> Cookies voor sociale media</h4>
                          <p>Twitter, Facebook
                          U heeft vast wel eens gehoord over 'twitteren' of over een Facebook-pagina. Met behulp van sociale media buttons kunt u een ZeelandNet pagina delen op het netwerk van deze merken.
                          </p>
                      <h4 style="color: #00a9da"> 4 cookies:</h4>
                          <p>PSC UID UVC __ATUVC
                          </p>
                      <br>
                      <h4 style="color: #00a9da"> Advertentie-cookies</h4>
                          <p>Google AdSense
                          ZeelandNet.nl gebruikt een aantal advertentiesysteem om banners te vertonen. Dit is Google DFP. Met Google DFP worden banners vertoond van advertentie netwerken zoals Google Adsense, Appnexus, Criteo, Adform, Stickeyads en Rubicon.
                          </p>
                      <br>
                      <h4 style="color: #00a9da"> 5 cookies:</h4>
                          <p>__GADS _DRT_ ID NID PREF
                          </p>
                      <br>


                      <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
         <?php include "footer.php";?>
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
   </body>
</html>

