<?php
session_start();
ob_start();

require_once "../scripts/db_connection.php";
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="author" content="ScriptsBundle">
    <title>2D Market | Messages' page</title>
    <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
    <link rel="icon" href="images/logo_files/logo_png.png" type="image/x-icon"/>
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
    <link href="css/select2.min.css" rel="stylesheet"/>
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
    <link rel="stylesheet" id="theme-color" type="text/css" href="#"/>
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
    <?php include "topbar-en.php"; ?>
    <!-- Top Bar End -->
    <!-- Navigation Menu -->
    <?php include "nav_bar_en.php"; ?>
</div>
<!-- Navigation Menu End -->
<!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
<!--<div class="page-header-area">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="header-page">
               <h1>User Sign In</h1>
            </div>
         </div>
      </div>
   </div>
   </div>-->
<!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
<div class="main-content-area clearfix">
    <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
    <!-- COURSE CONCERN -->
    <section class="section-padding gray">
        <div class="container">
            <div class="row">
                <div class="message-body">
                    <div class="col-md-4 col-sm-5 col-xs-12">
                        <div class="message-inbox">
                            <div class="message-header">
                                <h4>Inbox</h4>
                            </div>
                            <ul class="message-history">
                                <!-- LIST ITEM -->
                                <?php
                                $msgQuery = "SELECT * FROM CHAT WHERE part_one = '{$_SESSION['id']}' OR part_two = '{$_SESSION['id']}'";
                                $getMsgs = mysqli_query($mysqli, $msgQuery);

                                if (mysqli_num_rows($getMsgs) > 0) {
                                    while ($row = mysqli_fetch_assoc($getMsgs)) {
                                        $idChat = $row['id'];
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
                                                $profile_pic = $row['profile_picture'];
                                            }
                                        } else {
                                            echo "This account has been removed";
                                        }
                                        $adQuery = "SELECT * FROM ADVERTISEMENT WHERE id = '{$ad_id}'";
                                        $getAd = mysqli_query($mysqli, $adQuery);
                                        if (mysqli_num_rows($getAd) > 0) {
                                            while ($row = mysqli_fetch_assoc($getAd)) {
                                                $adName = $row['title'];
                                            }
                                        } else {
                                            echo "This advertisement has been removed";

                                        }
                                        require_once 'scripts/time_elapse.php';
                                        $chatInfoQuery = "SELECT * FROM MESSAGE WHERE CHAT_id = '{$idChat}' ORDER BY id DESC LIMIT 1;";
                                        $getChatInfo = mysqli_query($mysqli, $chatInfoQuery);
                                        if (mysqli_num_rows($getChatInfo) > 0) {
                                            while ($row = mysqli_fetch_assoc($getChatInfo)) {
                                                $time = $row['msg_time'];
                                                $sender = $row['sender'];
                                                $status = $row['status'];
                                                $time = time_elapsed_string($time);
                                            }
                                        } else {
                                            $time = "";
                                        }
                                        if ($sender == $_SESSION['id']) {
                                            $statusClass = "active";
                                        } else {
                                            if ($status == "UNREAD") {
                                                $statusClass = "message-grid";
                                            } else {
                                                $statusClass = "active";
                                            }
                                        }
                                        ?>
                                        <li class="<?php echo $statusClass; ?>">
                                            <a onclick="setVar(<?php echo $idChat;?>)">
                                                <div class="image">
                                                    <img src="../uploads/users/<?php echo $profile_pic;?>" alt="">
                                                </div>
                                                <div class="user-name">
                                                    <div class="author">
                                                        <span><?php echo $name; ?></span>
                                                        <div class="user-status"></div>
                                                    </div>
                                                    <p><?php echo $adName; ?></p>
                                                    <div class="time">
                                                        <span><?php echo $time; ?></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <?php

                                    }
                                } else {
                                    ?>

                                    <li class="message-grid">
                                        <div class="user-name">
                                            <div class="author">
                                                <span>No Messages!</span>
                                            </div>
                                        </div>
                                    </li>

                                    <?php

                                }
                                ?>
                                <!-- END / LIST ITEM -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 clearfix col-sm-5 col-xs-12 message-content">
                        <div class="message-details">
                            <div class="author authorData"></div>
                            <h2 class="adTitle"></h2>
                            <ul class="messages " id="messagesTxts"></ul>
                            <div class="chat-form " id="formCont">
                                <form id="chat_form" method="post" class="form-inline chat_form">
                                    <div class="form-group">
                                        <textarea style="width: 100%" placeholder="Type a message here..." class="form-control msgTxt" id="msgTxt" rows="1"></textarea>
                                    </div>
                                    <button class="btn btn-theme" type="submit">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / COURSE CONCERN -->
    <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
    <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
    <?php include 'footer.php';?>
    <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
</div>
<!-- Main Content Area End -->
<!-- Post Ad Sticky -->
<a href="<?php if(isset($_SESSION['id'])){echo "new_advertisement.php";} else {echo "login.php";}?>" class="sticky-post-button hidden-xs">
         <span class="sell-icons">
         <i class="flaticon-transport-9"></i>
         </span>
    <h4>SELL</h4>
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
<!-- For This Page Only -->
<script type="text/javascript" src="js/perfect-scrollbar.min.js"></script>
<script type="text/javascript">
    function scrollbar() {
        var $scrollbar = $('.message-inbox .list-wrap');
        $scrollbar.perfectScrollbar({
            maxScrollbarLength: 150,
        });
        $scrollbar.perfectScrollbar('update');
    }
    scrollbar();

    $('.messages').wrap('<div class="list-wraps"></div>');
    var $scrollbar1 = $('.message-details .list-wraps');

    function scrollbar1() {
        $scrollbar1 = $('.message-details .list-wraps');
        $scrollbar1.perfectScrollbar({
            maxScrollbarLength: 150,
        });
        $scrollbar1.scrollTop($(".messages ").prop("scrollHeight"));
        $scrollbar1.perfectScrollbar('update');
    }
    scrollbar1();

    var id = '0';
    $('#formCont').hide();

    function setVar(val) {
        id = val;
        $('#formCont').show();
        document.getElementById('chat_form').reset();
        LoadChat();
        scrollbar();
        scrollbar1();
        $scrollbar1.scrollTop($(".messages ").prop("scrollHeight"));
        $scrollbar1.perfectScrollbar('update');

    }


    setInterval(function () {
        if(id > 0){
            LoadChat();
        }else if(id == 0){
            $('.messages').html("No Messages Selected!");
        }
    }, 1500);

    function LoadChat() {
        $.post('scripts/handle_chat.php?action=getAuthor&id=' + id, function (response) {
            $('.authorData').html(response);
        });


        $.post('scripts/handle_chat.php?action=getMessages&id=' + id, function (response) {
                $('#messagesTxts').html(response);
        });
    }


    $('.msgTxt').keyup(function(e){
        if(e.which == 13){
            $('#chat_form').submit();
            document.getElementById('chat_form').reset();
        }
    });

    $('#chat_form').submit(function(){
        var message = $('#msgTxt').val();
        $.post('scripts/handle_chat.php?action=sendMessage&message='+message+'&id=' + id, function(response){
            if(response == 1){
                LoadChat();
                document.getElementById('chat_form').reset();
            }
        });
        return false;
    });

</script>
</body>
</html>

