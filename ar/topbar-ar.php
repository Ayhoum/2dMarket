<?php
$prefix = $_SERVER['HTTP_HOST'];
$file = explode('/', $_SERVER['PHP_SELF']);
$page = $file[count($file)-1];

$en = "HTTP://".$prefix.'/website/2dMarket/en/'.$page;
$nl = "HTTP://".$prefix.'/website/2dMarket/nl/'.$page;
$ar = "HTTP://".$prefix.'/website/2dMarket/ar/'.$page;
?>

<div class="header-top">
    <div class="container">
        <div class="row">
            <!-- Header Top Left -->
            <div class="header-top-left col-md-12 col-sm-12 col-xs-12">
                <div class="pull-left">
                    <ul class="listnone">
                        <!--                    <li><a href="about.php"><i class="fa fa-heart-o" aria-hidden="true"></i> About</a></li>-->
                        <!--                    <li><a href="faqs.php"><i class="fa fa-folder-open-o" aria-hidden="true"></i> FAQS</a></li>-->
                        <li><a href="<?php echo $en;?>">English</a></li>
                        <li><a href="<?php echo $nl;?>">Nederlands</a></li>
                        <li><a href="<?php echo $ar;?>">العربيـة</a></li>
                        <!--                    <li class="dropdown">-->
                        <!--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe" aria-hidden="true"></i> Language <span class="caret"></span></a>-->
                        <!--                        <ul class="dropdown-menu">-->
                        <!--                           -->
                        <!--                        </ul>-->
                        <!--                    </li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>