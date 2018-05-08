<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 20-3-2018
 * Time: 20:32
 */
?>



<nav id="menu-1" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- menu logo -->
                    <ul class="menu-logo">
                        <li>
                            <a class="navbar-brand" href="index.php">
                                <img src="images/logo_files/2Dmarket_white%20(1).gif" style="width: 80px;height: 80px;margin-top: -15px" class="d-inline-block align-top" alt="2D Market">
                            </a>
                        </li>
                    </ul>
                    <!-- menu links -->
                    <ul class="menu-links center-block">
                        <!-- active class -->

                        <li>
                            <a href="#">Categorieën <i class="fa fa-angle-down fa-indicator"></i></a>
                            <!-- drop down multilevel  -->
                            <ul class="drop-down-multilevel" role='menu'>
                                <li>
                                    <a href="javascript:void(0)">Elektronica <i class="fa fa-angle-right fa-indicator"></i> </a>
                                    <!-- drop down second level -->
                                    <ul class="drop-down-multilevel">
                                        <?php

                                        $query = "SELECT * FROM `SUB_CATEGORY` WHERE `CATEGORY_id` = '61'";
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
                                                <a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $id;?>&dis=all&price=all&order=latest"> <i class="<?php echo $icon;?>"></i> <?php echo $name; ?></a>
                                            </li>

                                        <?php }?>

                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Auto's en Motoren <i class="fa fa-angle-left fa-indicator"></i> </a>
                                    <!-- add class left-side -->
                                    <ul class="drop-down-multilevel left-side">
                                        <?php

                                        $query = "SELECT * FROM `SUB_CATEGORY` WHERE `CATEGORY_id` = '76'";
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
                                                <a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $id;?>&dis=all&price=all&order=latest"> <i class="<?php echo $icon;?>"></i> <?php echo $name; ?></a>
                                            </li>

                                        <?php }?>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Mode <i class="fa fa-angle-right fa-indicator"></i> </a>
                                    <!-- drop down second level -->
                                    <ul class="drop-down-multilevel">
                                        <?php

                                        $query = "SELECT * FROM `SUB_CATEGORY` WHERE `CATEGORY_id` = '63'";
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
                                                <a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $id;?>&dis=all&price=all&order=latest"> <i class="<?php echo $icon;?>"></i> <?php echo $name; ?></a>
                                            </li>

                                        <?php }?>

                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Huishoudapparatuur <i class="fa fa-angle-left fa-indicator"></i> </a>
                                    <!-- add class left-side -->
                                    <ul class="drop-down-multilevel left-side">
                                        <?php

                                        $query = "SELECT * FROM `SUB_CATEGORY` WHERE `CATEGORY_id` = '66'";
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
                                                <a href="ad_per_sub_cat.php?sub_cat_id=<?php echo $id;?>&dis=all&price=all&order=latest"> <i class="<?php echo $icon;?>"></i> <?php echo $name; ?></a>
                                            </li>

                                        <?php }?>
                                    </ul>
                                </li>
                                <li><a href="categories.php">Alle Categorieën</a>
                                </li>
                            </ul>
                        </li>

                        <li><a href="all_product.php">Alle Ads. </a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                    <!--                    <ul class="menu-search-bar">-->
                    <!--                                            --><?php //if(!isset($_SESSION['username'])){?>
                    <!--                                            <li>-->
                    <!--                                                <a href="login.php" class="btn btn-light"><i class="fa fa-user" aria-hidden="true"></i> Login</a>-->
                    <!--                                            </li>-->
                    <!--                                            --><?php //} else{ ?>
                    <!--                                                <a href="profile.php" class="btn btn-light"><i class="fa fa-user" aria-hidden="true"></i>--><?php //echo $_SESSION['username']; ?><!-- </a>-->
                    <!--                                            --><?php //}?>
                    <!--                                        </ul>-->

                    <ul class="menu-search-bar" style="float: right">
                        <?php if(!isset($_SESSION['username'])){?>
                            <li><a href="login.php"><i class="fa fa-sign-in"></i> Aanmelden  </a> </li>
                        <?php } else { ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-profile-male" aria-hidden="true"></i> <?php echo $_SESSION['username']; ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="profile.php">Mijn Profile</a></li>
                                    <li><a href="personal_ads.php">Mijn Advertenties</a></li>
                                    <li><a href="favourite_ads.php">Favoriete Advertenties</a></li>
                                    <li><a href="messages.php">Mijn Brichten</a></li>
                                    <li><a href="logout.php">Uitloggen</a></li>
                                </ul>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</nav>
