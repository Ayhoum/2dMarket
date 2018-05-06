<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 16-2-2018
 * Time: 21:50
 */
require_once 'sessions.php';
?>
<div class="header-right col-md-4 col-sm-6 col-xs-12 ">
    <div class="pull-right">
        <ul class="listnone">
            <?php if (empty($_SESSION['username'])){?>
            <li><a href=""><i class="fa fa-sign-in"></i> تسجيل الدخول</a></li>
            <li><a href=""><i class="fa fa-unlock" aria-hidden="true"></i> إنشاء حساب</a></li>
            <?php } else {?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-profile-male" aria-hidden="true"></i> Umair <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="profile.php">الملف الشخصي</a></li>
                    <li><a href="personal_ads_script.php">إعلاناتي</a></li>
                    <li><a href="favourite.html">الإعلانات المفضلة</a></li>
                    <li><a href="messages.html">الرسائل</a></li>
                    <li><a href="logout.php">تسجيل الخروج</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<?php }?>