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
      <title>2D Market |Omgaan met internet </title>
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
              <h4 class="text-center" style="color: #00a9da">Loading..</h4> </div>
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
                     <h1> Veilig omgaan met internet</h1>
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

                     <p>
                         Internet is een open netwerk waar iedereen op kan. Deze openheid brengt ook nadelen met zich mee. Zowel via het e-mailen, surfen als downloaden kunt u indringers binnenhalen.
                         <br>
                         Waar moet u op letten?<br>
                         Wat doet 2Dmarket?<br>
                         Wat kunt u zelf doen?<br>
                     </p><br>
                      <h4 style="color: #00a9da"> Waar moet u op letten?</h4>

                     <p>
                         Er zijn virussen die bestanden beschadigen of verwijderen op uw computer. Spyware bespioneert u en hackers breken in op uw computer om persoonlijke informatie te achterhalen of uw pc te misbruiken voor illegale activiteiten. Hieronder geven wij een kort overzicht van zaken waarop u moet letten.
                     </p><br>

                      <h4 style="color: #00a9da">SPAM</h4>
                      <p>
                      2DMarket beveiligingsproducten SPAM zijn ongevraagde e-mailberichten die in grote hoeveelheden worden verstuurd en vaak afkomstig zijn van een onbekende afzender. SPAM wordt vaak gebruikt door spammers om gegevens te achterhalen of een commercieel product te verkopen. Het is niet eenvoudig om van SPAM af te komen. Als uw e-mail gehackt is, kunt u zelf zonder dat u het merkt spamberichten versturen.
                      </p><br>

                      <h4 style="color: #00a9da">Phishing</h4>
                      <p>
                      Via een e-mail wordt u naar de valse website gelokt en gevraag naar uw persoonlijke gegevens. De valse website is een kopie van de echte website en zo wordt er geprobeerd om uw inloggegevens en wachtwoorden van online bankieren te achterhalen. Uw bank zal u nooit via e-mail om uw wachtwoord vragen!
                      <br>
                      2Dmarket zal nooit in een e-mail om uw inloggegevens en/of wachtwoorden vragen.
                      </p><br>

                      <h4 style="color: #00a9da">Spyware</h4>
                      <p>
                      Spyware is software die gegevens verzamelt over uwt internetgebruik en die informatie doorstuurt naar een externe partij zonder dat de gebruiker hiervan af weet. Spyware wordt gebruikt door bedrijven die informatie willen verzamelen t.b.v. marketingdoeleinden, vaak wordt hier in de algemene voorwaarden van de software toestemming voor gevraagd. Naast de commerciële vorm van Spyware bestaan er ook meer criminele vormen van Spyware, hierbij worden persoonlijke gegevens zoals surfgedrag, inlogcodes en pass-worden doorgegeven.
                      </p> <br>

                      <h4 style="color: #00a9da">Trojans en overige malware</h4>
                      <p>
                          Een Trojaans paard is een software dat zich vermomd als legitieme software of via een bijlage in een e-mail op uw computer installeert. Eenmaal op uw computer geïnstalleerd kan de verspreider van de software toegang krijgen tot uw computer. Hiermee kunnen allerlei illegale activiteiten worden uitgevoerd zoals "phishing" en het versturen van Spam.
                      </p> <br>

                      <h4 style="color: #00a9da"> Botnet Zombie</h4>
                      <p>
                      De term "botnet" wordt gebruikt voor een netwerk van geïnfecteerde computers. De beheerder van dit netwerk een "bot herder" kan dit netwerk gebruiken voor "illegale" praktijken. De individuele computer in het netwerk wordt een "Zombie" genoemd. De meest voorkomende praktijken die middels een botnet worden uitgevoerd zijn: aanvallen van websites, verspreiden van Spam, etc.
                      </p><br>

                      <h4 style="color: #00a9da"> Beveiliging draadloze router</h4>
                      <p>
                      Steeds meer mensen maken gebruik van een draadloze router om toegang tot het internet te krijgen. Een draadloos netwerk brengt meer risico's met zich mee dan het gebruik van een vaste aansluiting. De radiosignalen die worden gebruikt zijn ook voor andere gebruikers zichtbaar, afhankelijk van de locatie van de draadloze router is dit netwerk ook buiten uw huis bereikbaar. Het beveiligen van uw netwerk voorkomt dat derden gebruik kunnen maken van uw draadloze netwerk zonder dat u hiervan op de hoogte bent.
                      </p><br>

                      <h4 style="color: #00a9da"> Identiteitskaping</h4>
                      <p>
                      Het gebruik door derden van uw wachtwoorden, e-mailadres, user-id's, bankcodes, etc. om zich als u voor te doen. Uw 'virtuele' identiteit wordt door derden gebruikt om hier misbruik van te maken door bijvoorbeeld betaling te doen middels uw creditcard gegevens.
                      </p><br>

                      <h4 style="color: #00a9da"> Ongewenste websites</h4>
                      <p>
                      Het internet is onderdeel van onze maatschappij met zijn goede en slechte kanten. De inhoud van de websites zijn ook onderdeel van deze maatschappij, deze inhoud is niet altijd gewenst.Voorbeelden hiervan zijn websites die niet geschikt zijn voor kinderen.
                      </p><br>

                      <h4 style="color: #00a9da"> Wat doet 2Dmarket?</h4>
                      <p>
                      Actuele viruswaarschuwingen
                      2dMarket maakt melding van actuele virussen die in omloop zijn. Neem regelmatig een kijkje op onze helpdesk pagina om op de hoogte te blijven van actuele risico's.
                      </p><br>

                      <h4 style="color: #00a9da">Wat kunt u zelf doen?</h4>
                      <p>
                      Bescherm uw computer met een goed beveiligingspakket <br>
                      Bescherm uw computer met een volledig beveiligingspakket. Controleer uw computer online op virussen. (in Engels)
                      </p><br>

                      <h4 style="color: #00a9da">Update Windows en andere software</h4>
                      <p>
                      Zorg er altijd voor dat uw besturingssysteem en uw browser up-to-date is. Met de update wordt namelijk ook de beveiliging bijgewerkt. De meeste Windowsversies doen dit automatisch. U kunt Windows ook handmatig updaten. Gebruik ook altijd de laatste versie van Java en Flash als u dit op uw computer geinstalleerd heeft.
                      </p><br>

                      <h4 style="color: #00a9da">Gratis browsers</h4>
                      <p>
                      Kies één van deze gratis browsers en downloadt via de officiele website: Internet Explorer, Google Chrome, Firefox, Opera of Safari
                      </p><br>
                      <h4 style="color: #00a9da">Draadloos netwerk beveiligen</h4>
                      <p>
                      Maakt u thuis gebruik van draadloos internet, dan is het belangrijk dit draadloze netwerk goed te beveiligen. Wanneer uw draadloze netwerk niet goed beveiligd is, kunnen anderen in uw omgeving verbinding maken met uw netwerk en zelfs inbreken op uw computer.
                      </p>

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

