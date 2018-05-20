<?php
session_start();
require_once "../scripts/db_connection.php";

if(isset($type) && $type == 'Fmatch'){
    echo "<script>$('#modalPassError').modal();</script>";
}

if(isset($_GET['code'])){
    $code = $_GET['code'];
}else{
    header("Location: index.php");
}
if(isset($_GET['email'])){
    $email = $_GET['email'];
}else{
    header("Location: index.php");
}

$query = "SELECT * From USER WHERE email = '{$email}' ";
$getAgent = mysqli_query($mysqli, $query);
if (mysqli_num_rows($getAgent) == 1) {
    while ($row = mysqli_fetch_assoc($getAgent)) {
        $id = $row['id'];
    }
}else{
    header("Location: wrong_email.php");
}

$query = "SELECT * From PASSWORD_RESET WHERE CODE = '{$code}' ";
$getCode = mysqli_query($mysqli,$query);
if (mysqli_num_rows($getCode) <= 0) {
    header("Location: wrong_code.php");
}


if(isset($_POST['updatePass'])){
    $pass = $_POST['passwordf'];
    $pass2 = $_POST['passwords'];

    if($pass == $pass2){
        $encCode = ['cost' => 12];
        $encPassword = password_hash($pass2, PASSWORD_BCRYPT, $encCode);
        $queryUpdate = "UPDATE USER SET password = '{$encPassword}' WHERE email = '{$email}'";
        $run = mysqli_query($mysqli,$queryUpdate);

        $deleteQuery = "DELETE FROM PASSWORD_RESET WHERE USER_ID = '{$id}'";
        $runDelete=mysqli_query($mysqli,$deleteQuery);

        header("Location: login.php");
    }else{
        header("Location: update_password.php?code=<?php echo $code;?>&email=<?php echo $email;?>&type='Fmatch'");
    }
}
?>

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="author" content="ScriptsBundle">
    <title>2D Market | Wachtwoord vernieuwen</title>
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

</head>

<body>
<!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
<div id="loader-wrapper">
    <div id="loader"><img class="img-responsive"  src="images/logo_files/design.gif">
        <h4 class="text-center" style="color: #00a9da"> Aan het laden..</h4> </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- =-=-=-=-=-=-= Light Header =-=-=-=-=-=-= -->
<div class="colored-header">
    <!-- Top Bar -->
    <?php include "topbar-nl.php";?>
    <!-- Top Bar End -->
    <!-- Navigation Menu -->
    <?php include "nav_bar_nl.php";?>
</div>
<!-- Navigation Menu End -->
<!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="header-page text-center">
                    <h1>Update jouw wachtwoord</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Small Breadcrumb -->
<!--      <div class="small-breadcrumb">-->
<!--         <div class="container">-->
<!--            <div class=" breadcrumb-link">-->
<!--               <ul>-->
<!--                  <li><a href="index.html">Home Page</a></li>-->
<!--                  <li><a href="#">Pages</a></li>-->
<!--                  <li><a class="active" href="#">Sign In</a></li>-->
<!--               </ul>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!-- Small Breadcrumb -->
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
                        <form action="update_password.php?code=<?php echo $code;?>&email=<?php echo $email;?>" name="login" id="login_form" method="post" data-toggle="validator">
                            <div class="form-group">
                                <label>Nieuwe wachtwoord</label>
                                <input id="passwordf" placeholder="New Password" class="form-control" type="password" name="passwordf" required>
                            </div>
                            <div class="form-group">
                                <label>Re-enter Nieuwe wachtwoord</label>
                                <input id="passwords" placeholder="New Password" class="form-control" type="password" name="passwords" required>

                            </div>

                            <button type="submit" class="btn btn-theme btn-lg btn-block" name="updatePass">Wachtwoord vernieuwen</button>

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
    <?php include "footer.php";?>
    <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
</div>
<!-- Main Content Area End -->


<div class="custom-modal">
    <div id="modalPassError" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header rte">
                    <h2 class="modal-title text-center">Jij hebt twee verschillende wachtwoorden ingevoerd!</h2>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Opnieuw proberen</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Post Ad Sticky -->
<!--<a href="#" class="sticky-post-button hidden-xs">-->
<!--         <span class="sell-icons">-->
<!--         <i class="flaticon-transport-9"></i>-->
<!--         </span>-->
<!--    <h4>Verkoop</h4>-->
<!--</a>-->
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

