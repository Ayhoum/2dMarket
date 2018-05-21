<?php
session_start();
require_once "../scripts/db_connection.php";
include_once 'google_login_api_test/gpConfig.php';
include_once 'google_login_api_test/User.php';


if(isset($_GET['code'])){
    $gClient->authenticate($_GET['code']);
    $_SESSION['token'] = $gClient->getAccessToken();
    header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
    $gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
    //Get user profile data from google
    $gpUserProfile = $google_oauthV2->userinfo->get();

    //Initialize User class
    $user = new User();

    //Insert or update user data to the database
    $gpUserData = array(
        'oauth_provider'    => 'google',
        'oauth_uid'         => $gpUserProfile['id'],
        'first_name'        => $gpUserProfile['given_name'],
        'last_name'         => $gpUserProfile['family_name'],
        'email'             => $gpUserProfile['email'],
        'locale'            => $gpUserProfile['locale'],
        'profile_picture'   => $gpUserProfile['picture'],
        'link'              => $gpUserProfile['link']
    );
    $userData = $user->checkUser($gpUserData);

    //Storing user data into session

    $id_query  = "select * from `USER` where `oauth_uid` = '{$gpUserProfile['id']}'";
    $id_result =mysqli_query($mysqli, $id_query);
    while ($row=mysqli_fetch_assoc($id_result)){
        $id = $row['id'];
    }
    $_SESSION['id']         = $id;
    $_SESSION['username']   = $gpUserProfile['given_name'] . $gpUserProfile['family_name'];
    $_SESSION['userData']   = $userData;


    //Render facebook profile data
    if(!empty($userData)){
        if($_SESSION['new'] == 'true'){
            unset($_SESSION['new']);
            header("Location: register_2.php?id=".$_SESSION['id']);

        }else{
            unset($_SESSION['new']);
            header("Location: index.php");
        }
    }else{
        echo '<h3 style="color:red">Some problem occurred, please try again.</h3>';
    }
} else {
    $authUrl = $gClient->createAuthUrl();
    $output = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"><img src="images/btn_google_signin_dark_pressed_web.png" alt=""/></a>';
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
                           window.location.href = "index.php";
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
              <h4 class="text-center" style="color: #00a9da">جاري التحميل.. </h4> </div>
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
                          <div class="col-sm-offset-0 col-sm-12 col-md-offset-3 col-md-6">
                              <div class="heading-title text-center">
                                  <h2>أهـلا بكم في موقعنـا </h2>
                              </div>
                              <!-- Nav tabs -->
                              <div class="card" style="direction: rtl">
                                  <ul class="nav nav-tabs" role="tablist">
                                      <li role="presentation" class="active"><a href="#login" aria-controls="home" role="tab" data-toggle="tab">تسجيـل الدخـول</a></li>
                                      <li role="presentation"><a href="#register" aria-controls="profile" role="tab" data-toggle="tab">تسجيـل حسـاب جديد</a></li>
                                  </ul>
                                  <!-- Tab panes -->
                                  <div class="tab-content">
                                      <div role="tabpanel" class="tab-pane active" id="login">

                                          <div class="form-grid">
                                              <form action="#" name="login" id="login_form" method="post" data-toggle="validator">
                                                  <div class="form-group">
                                                      <label>البريد الالكتروني</label>
                                                      <input id="email_field" placeholder="ادخل بريدك الالكتروني" class="form-control" type="email" name="email">
                                                  </div>
                                                  <div class="form-group">
                                                      <label>كلمة السر</label>
                                                      <input id="password_field" placeholder="ادخل كلمة السر الخاصة بك" class="form-control" type="password" name="password">

                                                      <p><b><a href="resotre_password.php" target="_blank">هل نسيت كلمة المرور الخاصة بك؟ </a></b></p>
                                                  </div>

                                                  <button type="button" onclick="logIn();" class="btn btn-theme btn-lg btn-block" name="Log_in">سجل الدخول</button>

                                              </form>
                                          </div>

                                      </div>
                                      <div role="tabpanel" class="tab-pane" id="register">

                                          <div class="form-grid">
                                              <form name="signup" id="signupForm" method="post" action="scripts/signup.php" data-toggle="validator">
                                                  <div class="form-group">
                                                      <label>البريـد الالكتروني</label>
                                                      <input autocomplete="false" required placeholder="قم بادخال البريد الالكتروني الخاص بك" name="email" onchange="checkAvailability();" id="emailArea" class="form-control" type="email">
                                                      <label id="checkEmailError" class=""></label>
                                                  </div>
                                                  <div class="row">
                                                      <div class="form-group col-sm-6">
                                                          <label>الاسـم</label>
                                                          <input required placeholder="قم بادخال اسمك " name="fname" class="form-control" type="text">
                                                      </div>
                                                      <div class="form-group col-sm-6">
                                                          <label>الكنيـة</label>
                                                          <input required placeholder="قم بادخال كنيتك" name="lname" class="form-control" type="text">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label>اسم المستخدم</label>
                                                      <input required placeholder="قم باختيار اسم مستخدم خاص بك" name="username" class="form-control" type="text">
                                                  </div>
                                                  <div class="form-group">
                                                      <label>رقم الهاتف</label>
                                                      <input required placeholder="قم بادخـال رقم هاتفك" name="phone_number" class="form-control" type="text">
                                                  </div>
                                                  <div class="row">
                                                      <div class="form-group col-sm-6">
                                                          <label>كلمة السر</label>
                                                          <input required placeholder="قم بادخال كلمة السر الخاصة بك" id="inputPassword" name="password" class="form-control" type="password">
                                                      </div>
                                                      <div class="form-group col-sm-6">
                                                          <label>تأكيد كلمة السر</label>
                                                          <input required placeholder="قم بتأكيد كلمة السر" name="repassword" class="form-control" onChange="checkPasswordMatch();" id="inputPasswordConfirm" type="password">
                                                          <label id="txtConfirm"></label>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <div class="row">
                                                          <div class="col-xs-12 col-sm-7">
                                                              <div class="skin-minimal">
                                                                  <ul class="list">
                                                                      <li>
                                                                          <input required type="checkbox" id="minimal-checkbox-1">
                                                                          <label for="minimal-checkbox-1">انـا اوافق على <a href="terms.php">شروط الاستخدام</a></label>
                                                                      </li>
                                                                  </ul>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <button class="btn btn-theme btn-lg btn-block" name="submit" type="submit" id="regBut" disabled>سجل حساب جديد</button>
                                              </form>
                                          </div>

                                      </div>
                                  </div>
                              </div>
                          </div>
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
                          <h2 class="modal-title text-center">لقد قمت بادخال كلمة سر خاطئة</h2>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-info" data-dismiss="modal">اعادة المحاولة</button>
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
                          <h2 class="modal-title text-center">من المحتمل من انك قد قمت بادخال ايميل خاطئ</h2>
                          <h2 class="modal-title text-center">من فضلك قم بالتأكد من الايميل , أو قم بتسجيل حساب جديد</h2>
                      </div>
                      <div class="modal-footer">
                          <a href="register.php" type="button" class="btn btn-warning">Register</a>
                          <button type="button" class="btn btn-info" data-dismiss="modal">اعادة المحاولة</button>
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
                          <h2 class="modal-title text-center">لقد تركت حقلاً فارغًا!</h2>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-info" data-dismiss="modal">اعادة المحاولة</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Main Content Area End --> 
      <!-- Post Ad Sticky -->
<!--      <a href="--><?php //if (isset($_SESSION['id'])){echo "new_advertisement.php";  } else { echo "login.php"; }?><!--" class="sticky-post-button hidden-xs">-->
<!--         <span class="sell-icons">-->
<!--         <i class="flaticon-transport-9"></i>-->
<!--         </span>-->
<!--          <h4>قم بالبيع الان</h4>-->
<!--      </a>-->
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
          function validateEmail(email) {
              var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
              return re.test(email);
          }

          function checkPasswordMatch() {
              var password = $("#inputPassword").val();
              var confirmPassword = $("#inputPasswordConfirm").val();

              if (password != confirmPassword){
                  $("#txtConfirm").html("كلمات السر غير متطابقة");
                  $("#txtConfirm").removeClass('greenfont');
                  $("#txtConfirm").addClass('redfont');
                  $("#regBut").prop("disabled",true);
              }else{
                  $("#txtConfirm").html("كلمات السر متطابقة");
                  $("#txtConfirm").removeClass('redfont');
                  $("#txtConfirm").addClass('greenfont');
                  $("#regBut").prop("disabled",false);
              }
          }

          function checkAvailability(){
              var email = $("#emailArea").val();
              if(validateEmail(email)){
                  $.post('scripts/handle_email.php?email='+email,function(response){

                      if(response > 0){
                          $('#checkEmailError').html("هذا الايميل موجد مسبقاً");
                          $('#checkEmailError').removeClass('greenfont');
                          $('#checkEmailError').addClass('redfont');
                          $("#regBut").prop("disabled",true);
                      }else{
                          $('#checkEmailError').html("هذا الايميل متـاح");
                          $('#checkEmailError').removeClass('redfont');
                          $('#checkEmailError').addClass('greenfont');
                          $("#regBut").prop("disabled",false);
                      }
                  });
              }else{
                  $('#checkEmailError').html("ادخل ايميلا صالحـاً");
                  $('#checkEmailError').removeClass('greenfont');
                  $('#checkEmailError').addClass('redfont');
                  $("#regBut").prop("disabled",true);

              }
          }

          $(document).ready(function () {
              $("#inputPasswordConfirm").keyup(checkPasswordMatch);
              $("#emailArea").keyup(checkAvailability);
          });




      </script>


   </body>
</html>

