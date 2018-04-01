<?php
ob_start();
session_start();
include 'scripts/sessions.php';
require_once '../scripts/db_connection.php';
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
      <title>2D Market | اضافـة اعـلان جديـد</title>
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
                     <h1>اضـافة اعـلان جديــد </h1>
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
                              نشـر اعـلان جـديـــد
                           </h3>
                        </div>
                        <p class="lead" style="direction: rtl">النشر على موقعنا مجاني ولكن عليك التـأكد من اعلانك لا يخـالف <a style="direction: rtl" href="#">سياســات الموقــع</a>  </p>
                        <form  name="add_new_ad" method="post" id="advForm" class="submit-form" enctype="multipart/form-data">
                         <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                         <ul class="accordion">
                             <li>
                                 <h4 class="accordion-title"> <a href="#"><span style="color: #985f0d"> 1.</span> اختيــار الصنـف : </a></h4>
                                     <div class="accordion-content">
                                         <div class="row">
                                             <!-- Category  -->
                                             <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                                 <label class="control-label">الصنف <small>اختر تصنيفاً مناسباً لاعلانك</small></label>
                                                 <select name="category_id" id="category"  class="category form-control">
                                                     <option label="Select Option"></option>
                                                     <?php
                                                     // GET ALL CATEGORIES from DB
                                                     $cat_query= "SELECT * FROM `CATEGORY` WHERE `lang` = 'AR' ORDER BY `name` ASC  ";
                                                     $cat_result= mysqli_query($mysqli, $cat_query);
                                                     if (mysqli_num_rows($cat_result) > 0 ) {
                                                         while ($row = mysqli_fetch_assoc($cat_result)) {
                                                             $id = $row['id'];
                                                             $name = $row['name'];
                                                             // GET ALL RELATED SUB_CATEGORIES from DB
                                                             $sub_cat_query = "SELECT * FROM `SUB_CATEGORY`  WHERE `CATEGORY_id` = '{$id}'  ";
                                                             $sub_cat_result = mysqli_query($mysqli, $sub_cat_query);
                                                             if (mysqli_num_rows($sub_cat_result) > 0) {
                                                                 while ($row = mysqli_fetch_assoc($sub_cat_result)) {
                                                                     $sub_id = $row['id'];
                                                                     $sub_name = $row['name'];
                                                                     ?>
                                                                     <option value="<?php echo $id."-".$sub_id; ?>"><?php echo $name . " | " . $sub_name; ?></option>
                                                                     <?php
                                                                 }
                                                             } else {
                                                                 ?>
                                                                 <option value="<?php echo $id."-".$sub_id; ?>"><?php echo $name ; ?></option>
                                                                 <?php
                                                             }
                                                         }
                                                     }
                                                     ?>
                                                 </select>
                                             </div>
                                         </div>
                                     </div>
                             </li>
                             <li>
                                 <h4 class="accordion-title"> <a href="#"><span style="color: #985f0d"> 2.</span> معلومات الاعلان </a></h4>
                                 <div class="accordion-content">
                                     <!-- Title-->
                                     <div class="row">
                                         <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                             <label class="control-label">العنــوان  <small>اختر عنواناً مناسباً لاعلانك </small></label>
                                             <input name= "title" class="form-control" id="title" placeholder="سيـارة كيا ريو موديل 2017 " type="text">
                                         </div>
                                     </div>
                                     <!-- end row-->
                                     <!-- Price  -->
                                     <div class="row">
                                         <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                             <label class="control-label">السعر <small>فقط يورو  </small></label>
                                             <input name= "price" id="price" class="form-control" placeholder="350 يورو " type="text">
                                         </div>
                                     </div>
                                     <!-- Ad Type  -->
                                     <div class="row">
                                         <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                             <label  class="control-label">كيفية البيع : <small>مزاد او سعر محدد </small></label>
                                             <div class="skin-minimal">
                                                 <select name="selling_type" id="sellType" class="category form-control">
                                                     <option value=""> اختر من القائمة</option>
                                                     <option value="BID"> مزاد</option>
                                                     <option value="FIXED_PRICE"> سعر محدد</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <!-- Ad Condition  -->
                                         <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                             <label class="control-label">الحـالة<small>حـالة المنتـج </small></label>
                                             <div class="skin-minimal">
                                                 <select name="condition" id="condition" class="category form-control">
                                                     <option value=""> اختر من القائمة</option>
                                                     <option value="NEW"> جديد</option>
                                                     <option value="USED"> مستعمل</option>
                                                 </select>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                             <label class="control-label">كيفيـة التوصيل  <small>ارسـال بالبريد أو الالتقاط من المنزل</small></label>
                                             <select name="delivery_type" id="deliveryType" class="category form-control">
                                                 <option value=""> Select an option</option>
                                                 <option value="PICK_UP"> الالتقاط من المنزل</option>
                                                 <option value="DELIVERY"> ارسـال بالبريد </option>
                                             </select>
                                         </div>
                                     </div>
                                     <!-- end row -->
                                 </div>
                             </li>
                             <li>
                                 <h4 class="accordion-title"> <a href="#"><span style="color: #985f0d"> 3.</span> معلومـات المنتـج </a></h4>
                                 <div class="accordion-content">
                                     <div class="row ">
                                         <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                             <label class="control-label">اضـافة صور لمنتجك </label>
                                             <div class="dropzone" id="my-dropzone" name="mainFileUploader">
                                                 <div class="fallback">
                                                     <input name="file[]" type="file" multiple="multiple" />
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <hr>
                                     <!-- end row -->
                                     <!-- Ad Description  -->
                                     <div class="row">
                                         <div class="col-md-12 col-lg-12 col-xs-12  col-sm-12">
                                             <label class="control-label">وصف المنتج <small>قم باضافة وصف للمنتج </small></label>
                                             <textarea name="description" id="editor2" rows="12" class="form-control"></textarea>
                                         </div>
                                     </div>
                                     <!-- end row -->
                                 </div>
                             </li>
                             <li>
                                 <h4 class="accordion-title"> <a href="#"><span style="color: #985f0d"> 4.</span> خيـارات الاعـلان </a></h4>
                                 <div class="accordion-content">
                                     <div class="row">
                                         <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                             <label class="control-label"> خيارات الاعلان  <small>قم بالاختيار الاعلان المدفوع أو العادي </small></label>
                                             <select name="ad_type" id="adType" class="category form-control">
                                                 <option value=""> Select an option</option>
                                                 <option value="NORMAL">اعلان عادي</option>
                                                 <option value="PREMIUM">اعلان مدفوع</option>
                                             </select>
                                         </div>
                                     </div>
                                 </div>
                             </li>
                         </ul>
                             <div class="margin-top-20 col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                 <button type="button" name="submit" id="submitBut" style="width: 100%" class="submitBut btn btn-theme pull-right">قم بنشر الاعلان</button>
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

                           alert(response);
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