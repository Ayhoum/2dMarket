<?php
$prefix = $_SERVER['HTTP_HOST'];
$file = explode('/', $_SERVER['PHP_SELF']);
$page = $file[count($file)-1];

$en = $prefix.'/en/'.$page;
$nl = $prefix.'/nl/'.$page;
$ar = $prefix.'/ar/'.$page;
?>
<div class="header-top">
    <div class="container">
        <div class="row">
            <!-- Header Top Left -->
            <div class="header-top-left col-md-8 col-sm-6 col-xs-12 hidden-xs">
                <ul class="listnone">
                    <li><a href="about.html"><i class="fa fa-heart-o" aria-hidden="true"></i> حول</a></li>
                    <li><a href="faqs.html"><i class="fa fa-folder-open-o" aria-hidden="true"></i> الأسئلة الأكثر شيوعا</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe" aria-hidden="true"></i> لغة <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $en;?>">الإنجليزية</a></li>
                            <li><a href="<?php echo $nl;?>">الهولندية</a></li>
                            <li><a href="<?php echo $ar;?>">العربية</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Header Top Right Social -->
            <div class="header-right col-md-4 col-sm-6 col-xs-12 ">
                <div class="pull-right flip">
                    <ul class="listnone">
                        <!--Check if logged in-->
                        <?php if(!isset($_SESSION['username'])){?>
                            <li><a href="login.php"><i class="fa fa-sign-in"></i> تسجيل الدخول</a></li>
                            <li><a href="register.php"><i class="fa fa-unlock" aria-hidden="true"></i> تسجيل</a></li>
                        <?php } else{ ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-profile-male" aria-hidden="true"></i> Umair <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="profile.html">ملف تعريفي للمستخدم</a></li>
                                    <li><a href="profile-2.html">ملف تعريفي للمستخدم 2</a></li>
                                    <li><a href="archives.html">أرشيف</a></li>
                                    <li><a href="active-ads.html">إعلانات نشطة</a></li>
                                    <li><a href="favourite.html">إعلانات المفضلة</a></li>
                                    <li><a href="messages.html">لوحة رسالة</a></li>
                                    <li><a href="deactive.html">التعطيل حساب</a></li>
                                </ul>
                            </li>
                        <?php } ?>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>