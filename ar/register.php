﻿<?php

//Call the connection
require_once "../scripts/db_connection.php";

//Check if user
if(isset($_SESSION['username'])){
    header("Location: user_dashboard.php");
}

//Insert New User

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
      <title>2D Market | تسجيل حسـاب جديد</title>
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
         <?php include "nav_bar_ar.php";?>
      </div>
      <!-- Navigation Menu End -->
      <!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
      <div class="page-header-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="header-page te">
                     <h1>أنشئ حسابك</h1>
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
                         <form name="signup" id="signupForm" method="post" action="scripts/signup.php" data-toggle="validator">
                             <div class="form-group">
                                 <label>البريد الالكتروني</label>
                                 <input autocomplete="false" required placeholder="قم بادخـال بريدك الالكتروني" name="email" onchange="checkAvailability();" id="emailArea" class="form-control" type="email">
                                 <label id="checkEmailError" class=""></label>
                             </div>
                             <div class="row">
                                 <div class="form-group col-sm-6">
                                     <label>الاســم </label>
                                     <input required placeholder="قم بادخـال اسـمك" name="fname" class="form-control" type="text">
                                 </div>
                                 <div class="form-group col-sm-6">
                                     <label>الكنيــة</label>
                                     <input required placeholder="قم بادخـال كنيتـك" name="lname" class="form-control" type="text">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label>اسم المسـتخدم</label>
                                 <input required placeholder="قم بادخال اسم مستخدم خاص بك" name="username" class="form-control" type="text">
                             </div>
                             <div class="row">
                                 <div class="form-group col-sm-6">
                                     <label>كلمـة المـرور</label>
                                     <input required placeholder="قم بادخـال كلمة المرور الخاصة بك" id="inputPassword" name="password" class="form-control" type="password">
                                 </div>
                                 <div class="form-group col-sm-6">
                                     <label>تأكيـد كلـمة المرور</label>
                                     <input required placeholder="ادخل كلمة المرور مرة اخرى للتأكيد" name="repassword" class="form-control" onChange="checkPasswordMatch();" id="inputPasswordConfirm" type="password">
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
                                                     <label for="minimal-checkbox-1">أنا أقبل<a href="#">بشروط واحكام استخدام الموقع</a></label>
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="col-xs-12 col-sm-5 text-right">
                                         <p class="help-block"><a data-target="#myModal" data-toggle="modal">هل لديك حسـاب ؟</a>
                                         </p>
                                     </div>
                                 </div>
                             </div>
                             <button class="btn btn-theme btn-lg btn-block" name="submit" type="submit" id="regBut" disabled>تسجيـل الحسـاب</button>
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
         <!-- =-=-=-=-=-=-= Ads أرشيف End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
         <?php include "footer.php";?>
         <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
      </div>
      <!-- Main Content Area End --> 
      <!-- Forget Password -->
      <div class="custom-modal">
         <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header rte">
                     <h2 class="modal-title">نسيت رقمك السري ؟</h2>
                  </div>
                  <form>
                     <div class="modal-body">
                        <div class="form-group">
                           <label>البريد الإلكتروني</label>
                           <input placeholder="أدخل البريد الإلكتروني العنوان الخاص بك" class="form-control" type="email">
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default">إعادة حسابي</button>
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
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
   </body>
   <script>
       function validateEmail(email) {
           var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
           return re.test(email);
       }

       function checkPasswordMatch() {
           var password = $("#inputPassword").val();
           var confirmPassword = $("#inputPasswordConfirm").val();

           if (password != confirmPassword){
               $("#txtConfirm").html("Doesn't Match");
               $("#txtConfirm").removeClass('greenfont');
               $("#txtConfirm").addClass('redfont');
               $("#regBut").prop("disabled",true);
           }else{
               $("#txtConfirm").html("Passwords match.");
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
                       $('#checkEmailError').html("This email is already registered!");
                       $('#checkEmailError').removeClass('greenfont');
                       $('#checkEmailError').addClass('redfont');
                       $("#regBut").prop("disabled",true);
                   }else{
                       $('#checkEmailError').html("This email is available!");
                       $('#checkEmailError').removeClass('redfont');
                       $('#checkEmailError').addClass('greenfont');
                       $("#regBut").prop("disabled",false);
                   }
               });
           }else{
               $('#checkEmailError').html("Enter a valid Email Address!");
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

</html>

