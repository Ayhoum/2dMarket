<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 20-3-2018
 * Time: 20:32
 */
?>

<nav id="menu-1" class="mega-menu" >
    <!-- menu list items container -->
    <section class="menu-list-items">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- menu logo -->
                    <ul class="menu-logo" >
                        <li>
                            <a class="navbar-brand" href="index.php">
                                <img src="images/logo_files/2Dmarket_white%20(1).gif" style="width: 80px;height: 80px;margin-top: -15px" class="d-inline-block align-top" alt="2D Market">
                            </a>
                        </li>
                    </ul>
                    <!-- menu links -->
                    <ul class="menu-links center-block">
                        <!-- active class -->
                        <li><a href="contact_us.php">تواصـل معنـا</a></li>

                        <li><a href="all_product.php">جميـع الاعلانـات </a></li>

                        <li>
                            <a href="javascript:void(0)">التصنيـفات<i class="fa fa-angle-down fa-indicator"></i></a>
                            <!-- drop down full width -->
                            <ul class="drop-down-multilevel">
                                <li>
                                    <a href="javascript:void(0)">الكترونيـات <i class="fa fa-angle-right fa-indicator"></i> </a>
                                    <!-- drop down second level -->
                                    <ul class="drop-down-multilevel">
                                        <?php

                                        $query = "SELECT * FROM `SUB_CATEGORY` WHERE `CATEGORY_id` = '60'";
                                        $result = mysqli_query($mysqli, $query);
                                        While($row = mysqli_fetch_assoc($result)){
                                            $id = $row['id'];
                                            $name = $row['name'];
                                            $icon = $row['icon_name'];

                                            $count_query = "SELECT COUNT(*) AS 'CAT_count' FROM `ADVERTISEMENT` WHERE sub_cat_id = '{$id}' ";
                                            $count_result = mysqli_query($mysqli,$count_query);
                                            while ($row = mysqli_fetch_assoc($count_result)){
                                                $cat_count = $row['CAT_count'];
                                            }
                                            ?>
                                            <li>
                                                <a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $id;?>"> <i class="<?php echo $icon;?>"></i> <?php echo $name; ?></a>
                                            </li>

                                        <?php }?>

                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"> سيارات و دراجات ألية<i class="fa fa-angle-left fa-indicator"></i> </a>
                                    <!-- add class left-side -->
                                    <ul class="drop-down-multilevel left-side">
                                        <?php

                                        $query = "SELECT * FROM `SUB_CATEGORY` WHERE `CATEGORY_id` = '77'";
                                        $result = mysqli_query($mysqli, $query);
                                        While($row = mysqli_fetch_assoc($result)){
                                            $id = $row['id'];
                                            $name = $row['name'];
                                            $icon = $row['icon_name'];

                                            $count_query = "SELECT COUNT(*) AS 'CAT_count' FROM `ADVERTISEMENT` WHERE sub_cat_id = '{$id}' ";
                                            $count_result = mysqli_query($mysqli,$count_query);
                                            while ($row = mysqli_fetch_assoc($count_result)){
                                                $cat_count = $row['CAT_count'];
                                            }
                                            ?>
                                            <li>
                                                <a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $id;?>"> <i class="<?php echo $icon;?>"></i> <?php echo $name; ?></a>
                                            </li>

                                        <?php }?>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">ازيـاء <i class="fa fa-angle-right fa-indicator"></i> </a>
                                    <!-- drop down second level -->
                                    <ul class="drop-down-multilevel">
                                        <?php

                                        $query = "SELECT * FROM `SUB_CATEGORY` WHERE `CATEGORY_id` = '64'";
                                        $result = mysqli_query($mysqli, $query);
                                        While($row = mysqli_fetch_assoc($result)){
                                            $id = $row['id'];
                                            $name = $row['name'];
                                            $icon = $row['icon_name'];

                                            $count_query = "SELECT COUNT(*) AS 'CAT_count' FROM `ADVERTISEMENT` WHERE sub_cat_id = '{$id}' ";
                                            $count_result = mysqli_query($mysqli,$count_query);
                                            while ($row = mysqli_fetch_assoc($count_result)){
                                                $cat_count = $row['CAT_count'];
                                            }
                                            ?>
                                            <li>
                                                <a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $id;?>"> <i class="<?php echo $icon;?>"></i> <?php echo $name; ?></a>
                                            </li>

                                        <?php }?>

                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">االاجهزة المنزلية <i class="fa fa-angle-left fa-indicator"></i> </a>
                                    <!-- add class left-side -->
                                    <ul class="drop-down-multilevel left-side">
                                        <?php

                                        $query = "SELECT * FROM `SUB_CATEGORY` WHERE `CATEGORY_id` = '67'";
                                        $result = mysqli_query($mysqli, $query);
                                        While($row = mysqli_fetch_assoc($result)){
                                            $id = $row['id'];
                                            $name = $row['name'];
                                            $icon = $row['icon_name'];

                                            $count_query = "SELECT COUNT(*) AS 'CAT_count' FROM `ADVERTISEMENT` WHERE sub_cat_id = '{$id}' ";
                                            $count_result = mysqli_query($mysqli,$count_query);
                                            while ($row = mysqli_fetch_assoc($count_result)){
                                                $cat_count = $row['CAT_count'];
                                            }
                                            ?>
                                            <li>
                                                <a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $id;?>"> <i class="<?php echo $icon;?>"></i> <?php echo $name; ?></a>
                                            </li>

                                        <?php }?>
                                    </ul>
                                </li>
                                <li><a href="categories.php">جميـع التصنيفـات</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                    <ul class="menu-search-bar" style="float: left">
                        <?php if(!isset($_SESSION['username'])){?>
                            <li>
                                <a href="login.php" class="btn btn-light"><i class="fa fa-user" aria-hidden="true"></i> Login</a>
                            </li>
                        <?php } else{ ?>
                            <a href="profile.php" class="btn btn-light"><i class="fa fa-user" aria-hidden="true"></i> Profile</a>
                        <?php }?>
                    </ul>
<!--                    <ul class="menu-search-bar">-->
<!--                        <li>-->
<!--                            <a href="new_advertisement.php" class="btn btn-light"><i class="fa fa-plus" aria-hidden="true"></i> Post Free Ad</a>-->
<!--                        </li>-->
<!--                    </ul>-->
                </div>
            </div>
        </div>
    </section>
</nav>
