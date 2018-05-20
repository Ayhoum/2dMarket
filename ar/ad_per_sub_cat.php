<?php

include '../scripts/db_connection.php';
ob_start();
session_start();

$query = "SELECT `name` FROM `SUB_CATEGORY` WHERE `id` = '{$_GET['sub_cat_id']}'";
$result = mysqli_query($mysqli,$query);
while($row = mysqli_fetch_assoc($result)){
    $cat_name = $row['name'];
}
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
    <title>2D Market | جميع الاعلانات في <?php echo $cat_name;?></title>
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
    <!-- =-=-=-=-=-=-= Bootstrap Rtl Style =-=-=-=-=-=-= -->
    <link href="css/bootstrap-rtl.css" rel="stylesheet">
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
    <!-- JavaScripts -->
    <script src="js/modernizr.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
    <?php include 'topbar-ar.php';?>
    <!-- Top Bar End -->
    <!-- Navigation Menu -->
    <?php include 'nav_bar_ar.php'; ?>
</div>
<!-- Navigation Menu End -->
<!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="header-page">
                    <h1>جميع الاعلانات في <?php echo $cat_name;?></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
<div class="main-content-area clearfix">
    <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
    <section class="section-padding gray">
        <!-- Main Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Middle Content Area -->
                <div class="col-md-8 col-md-push-4 col-lg-8 col-sx-12">
                    <!-- Row -->
                    <div class="row">
                        <!-- Sorting Filters -->
                        <!-- Sorting Filters Breadcrumb -->
                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                            <div class="clearfix"></div>
                            <div class="listingTopFilterBar">
                                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                    <div class="header-listing">
                                        <h6>ترتيـب حسـب :</h6>
                                        <div class="custom-select-box">
                                            <select id="orderOptions" name="order" class="custom-select">
                                                <option value="latest" <?php if("latest" == $_GET['order']){ echo "selected";}?>>الأحدث</option>
                                                <option value="priceLow" <?php if("priceLow" == $_GET['order']){ echo "selected";}?>>السعر (الأرخص حتى الأغلى) </option>
                                                <option value="priceHigh" <?php if("priceHigh" == $_GET['order']){ echo "selected";}?>>السعر (الأغلى حتى الأرخص) </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sorting Filters Breadcrumb End -->
                        <!-- Sorting Filters End-->
                        <div class="clearfix"></div>



                        <?php



                        $dis   = $_GET['dis'];
                        $order = $_GET['order'];
                        $priceVal = $_GET['price'];
                        $cat = $_GET['sub_cat_id'];
                        if($priceVal != "all"){
                            $price_parts = explode("-", $priceVal);
                            $minPrice = $price_parts[0];
                            $maxPrice = $price_parts[1];

                        }

                        $valLong = $_COOKIE['longC'];
                        $valLati = $_COOKIE['latiC'];
                        ?>
                        <?php
                        include  'scripts/ads_per_sub_cat_script.php';
                        ?>
                        <!-- Ads Archive -->
                        <!-- Pagination End -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Middle Content Area  End -->
                <!-- Left Sidebar -->
                <div class="col-md-4 col-md-pull-8 col-sx-12">
                    <!-- Sidebar Widgets -->
                    <div class="sidebar" style="direction: rtl">
                        <!-- Panel group -->
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <!-- Categories Panel -->
                            <div class="panel panel-default">
                                <!-- Heading -->
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <!-- Title -->
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="more-less glyphicon glyphicon-plus"></i>
                                            التصنيفات الفرعيـة
                                        </a>
                                    </h4>
                                    <!-- Title End -->
                                </div>
                                <!-- Content -->
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body categories">
                                        <ul>
                                            <?php
                                            $cat_query  = "SELECT * FROM `SUB_CATEGORY` WHERE `id` ='{$_GET['sub_cat_id']}'";
                                            $cat_result = mysqli_query($mysqli, $cat_query);
                                            while ($row = mysqli_fetch_assoc($cat_result)) {
                                                $sub_cat_id = $row['id'];
                                                $cat_name   = $row['name'];
                                                $icon_name  = $row['icon_name'];

                                                $count_query = "SELECT COUNT(*) AS 'SUB_CAT_count' FROM `ADVERTISEMENT` WHERE sub_cat_id = '{$sub_cat_id}' ";
                                                $count_result = mysqli_query($mysqli,$count_query);
                                                while ($row = mysqli_fetch_assoc($count_result)){
                                                    $cat_count = $row['SUB_CAT_count'];
                                                }

                                                ?>

                                                <li><a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $sub_cat_id; ?>&dis=all&price=all&order=latest"><i class="<?php echo $icon_name; ?>"></i><?php echo $cat_name; ?><span style="color: #985f0d">(<?php echo $cat_count;?>)</span></a></li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Categories Panel End -->
                            <!-- Location Panel -->
                            <div class="panel panel-default">
<!--                                <!-- Heading -->
                            <div class="panel-heading" role="tab" id="cities">
                                <!--                                    <!-- Title -->
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#citiesheading" aria-expanded="true" aria-controls="citiesheading">
                                        <i class="more-less glyphicon glyphicon-plus"></i>
                                        إعلانات على بعد
                                    </a>
                                </h4>
                                <!--                                    <!-- Title End -->
                            </div>
                            <!--                                <!-- Content -->
                            <div id="citiesheading" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="cities">
                                <div class="panel-body categories">
                                    <ul>
                                        <?php
                                        if($priceVal != "all") {
                                            ?>
                                            <li><a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $cat;?>&order=<?php echo $order; ?>&dis=10.00&price=<?php echo $price_parts[0];?>-<?php echo $price_parts[1];?>"><i class="flaticon-signs-1"></i> 10 كم </a></li>
                                            <li><a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $cat;?>&order=<?php echo $order; ?>&dis=20.00&price=<?php echo $price_parts[0];?>-<?php echo $price_parts[1];?>"><i class="flaticon-signs-1"></i> 20 كم </a></li>
                                            <li><a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $cat;?>&order=<?php echo $order; ?>&dis=30.00&price=<?php echo $price_parts[0];?>-<?php echo $price_parts[1];?>"><i class="flaticon-signs-1"></i> 30 كم </a></li>
                                            <li><a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $cat;?>&order=<?php echo $order; ?>&dis=40.00&price=<?php echo $price_parts[0];?>-<?php echo $price_parts[1];?>"><i class="flaticon-signs-1"></i> 40 كم </a></li>
                                            <li><a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $cat;?>&order=<?php echo $order; ?>&dis=50.00&price=<?php echo $price_parts[0];?>-<?php echo $price_parts[1];?>"><i class="flaticon-signs-1"></i> 50 كم </a></li>
                                            <li><a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $cat;?>&order=<?php echo $order; ?>&dis=60.00&price=<?php echo $price_parts[0];?>-<?php echo $price_parts[1];?>"><i class="flaticon-signs-1"></i> 60 كم </a></li>
                                            <li><a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $cat;?>&order=<?php echo $order; ?>&dis=70.00&price=<?php echo $price_parts[0];?>-<?php echo $price_parts[1];?>"><i class="flaticon-signs-1"></i> 70 كم </a></li>
                                            <li><a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $cat;?>&order=<?php echo $order; ?>&dis=80.00&price=<?php echo $price_parts[0];?>-<?php echo $price_parts[1];?>"><i class="flaticon-signs-1"></i> 80 كم </a></li>
                                            <li><a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $cat;?>&order=<?php echo $order; ?>&dis=90.00&price=<?php echo $price_parts[0];?>-<?php echo $price_parts[1];?>"><i class="flaticon-signs-1"></i> 90 كم </a></li>
                                            <?php
                                        }else{
                                            ?>
                                            <li><a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $cat;?>&order=<?php echo $order; ?>&dis=10.00&price=<?php echo $priceVal;?>"><i class="flaticon-signs-1"></i> 10 كم </a></li>
                                            <li><a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $cat;?>&order=<?php echo $order; ?>&dis=20.00&price=<?php echo $priceVal;?>"><i class="flaticon-signs-1"></i> 20 كم </a></li>
                                            <li><a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $cat;?>&order=<?php echo $order; ?>&dis=30.00&price=<?php echo $priceVal;?>"><i class="flaticon-signs-1"></i> 30 كم </a></li>
                                            <li><a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $cat;?>&order=<?php echo $order; ?>&dis=40.00&price=<?php echo $priceVal;?>"><i class="flaticon-signs-1"></i> 40 كم </a></li>
                                            <li><a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $cat;?>&order=<?php echo $order; ?>&dis=50.00&price=<?php echo $priceVal;?>"><i class="flaticon-signs-1"></i> 50 كم </a></li>
                                            <li><a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $cat;?>&order=<?php echo $order; ?>&dis=60.00&price=<?php echo $priceVal;?>"><i class="flaticon-signs-1"></i> 60 كم </a></li>
                                            <li><a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $cat;?>&order=<?php echo $order; ?>&dis=70.00&price=<?php echo $priceVal;?>"><i class="flaticon-signs-1"></i> 70 كم </a></li>
                                            <li><a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $cat;?>&order=<?php echo $order; ?>&dis=80.00&price=<?php echo $priceVal;?>"><i class="flaticon-signs-1"></i> 80 كم </a></li>
                                            <li><a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $cat;?>&order=<?php echo $order; ?>&dis=90.00&price=<?php echo $priceVal;?>"><i class="flaticon-signs-1"></i> 90 كم </a></li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Location Panel End -->
                        <!-- Pricing Panel -->
                        <div class="panel panel-default">
                            <!-- Heading -->
                            <div class="panel-heading" role="tab" id="headingfour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        <i class="more-less glyphicon glyphicon-plus"></i>
                                        السعر
                                    </a>
                                </h4>
                            </div>
                            <!-- Content -->
                            <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                                <div class="panel-body">
                                    <?php
                                    if($priceVal == "all"){
                                        ?>
                                        من <input type="text" name="min" id="price-min-range" class="min" style="width:110px;"> -
                                                                                                                                 إلى <input type="text" name="max" id="price-min-range" class="max" style="width:110px;"><br><br>
                                        <input class="btn btn-light" id="submit" style="width: 100%;" type="button" name="priceSubmit" value="Apply">
                                        <?php
                                    }else{
                                        ?>
                                        من <input type="text" name="min" value="<?php echo $price_parts[0];?>" id="price-min-range" class="min" style="width:110px;"> -
                                                                                                                                                                       إلى <input type="text" name="max" value="<?php echo $price_parts[1];?>" id="price-max-range" class="max" style="width:110px;"><br><br>
                                        <input class="btn btn-light" id="submit" style="width: 100%;" type="button" name="priceSubmit" value="Apply">

                                        <?php
                                    }?>
                                </div>
                            </div>
                        </div>
<!--                            <!-- Pricing Panel End -->
<!--                            <!-- Featured Ads Panel -->
<!--                            <div class="panel panel-default">-->
<!--                                <!-- Heading -->
<!--                                <div class="panel-heading" >-->
<!--                                    <h4 class="panel-title">-->
<!--                                        <a>-->
<!--                                            اعلانـات متميزة-->
<!--                                        </a>-->
<!--                                    </h4>-->
<!--                                </div>-->
<!--                                <!-- Content -->
<!--                                --><?php //include 'scripts/featured_ads.php';?>
<!--                            </div>-->
                            <!-- Featured Ads Panel End -->
                        </div>
                        <!-- panel-group end -->
                    </div>
                    <!-- Sidebar Widgets End -->
                </div>
                <!-- Left Sidebar End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Main Container End -->
    </section>
    <!-- =-=-=-=-=-=-= Ads أرشيف End =-=-=-=-=-=-= -->
    <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
<?php include 'footer.php'; ?>
    <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
</div>
<!-- Main Content Area End -->
<!-- Post Ad Sticky -->
<!--<a href="--><?php //if (isset($_SESSION['id'])){echo "new_advertisement.php";  } else { echo "login.php"; }?><!--" class="sticky-post-button hidden-xs">-->
<!--         <span class="sell-icons">-->
<!--         <i class="flaticon-transport-9"></i>-->
<!--         </span>-->
<!--    <h4>قم بالبيع الان</h4>-->
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
<script>
    var order = '<?php echo $order;?>';
    var dis = <?php echo $dis;?>;
    var cat = <?php echo $_GET['sub_cat_id'];?>;
    $('#submit').click(function () {
        var price;
        var min = $('.min').val();
        var max = $('.max').val();
        if(min == '' && max == ''){
            price = "all";
        }else if(min == ''){
            min = 0;
            price = min + "-" + max ;
        }else if(max == ''){
            price = min + "-max";
        }else{
            price = min + "-" + max ;
        }
        window.open("ad_per_sub_cat.php?sub_cat_id=" + cat + "&dis=" + dis + "&price=" + price + "&order=" +order,"_self");


    });

    $('#orderOptions').on('change', function() {
        var price;
        var min = $('.min').val();
        var max = $('.max').val();
        if(min == '' && max == ''){
            price = "all";
        }else if(min == ''){
            min = 0;
            price = min + "-" + max ;
        }else if(max == ''){
            price = min + "-max";
        }else{
            price = min + "-" + max ;
        }
        order = this.value;
        window.open("ad_per_sub_cat.php?sub_cat_id=" + cat + "&dis=" + dis + "&price=" + price + "&order=" +order,"_self");
    })
</script>
</body>
</html>

