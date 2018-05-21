
<div class="colored-header">
    <!-- menu start -->
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
                                <a href="#">Categories <i class="fa fa-angle-down fa-indicator"></i></a>
                                <!-- drop down multilevel  -->
                                <ul class="drop-down-multilevel" role='menu'>
                                    <li>
                                        <a href="javascript:void(0)">Electronics <i class="fa fa-angle-right fa-indicator"></i> </a>
                                        <!-- drop down second level -->
                                        <ul class="drop-down-multilevel">
                                            <?php

                                            $query = "SELECT * FROM `SUB_CATEGORY` WHERE `CATEGORY_id` = '59'";
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
                                        <a href="javascript:void(0)">Cars & Motorbikes <i class="fa fa-angle-left fa-indicator"></i> </a>
                                        <!-- add class left-side -->
                                        <ul class="drop-down-multilevel left-side">
                                            <?php

                                            $query = "SELECT * FROM `SUB_CATEGORY` WHERE `CATEGORY_id` = '75'";
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
                                        <a href="javascript:void(0)">Fashion <i class="fa fa-angle-right fa-indicator"></i> </a>
                                        <!-- drop down second level -->
                                        <ul class="drop-down-multilevel">
                                            <?php

                                            $query = "SELECT * FROM `SUB_CATEGORY` WHERE `CATEGORY_id` = '62'";
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
                                        <a href="javascript:void(0)">Home Appliances <i class="fa fa-angle-left fa-indicator"></i> </a>
                                        <!-- add class left-side -->
                                        <ul class="drop-down-multilevel left-side">
                                            <?php

                                            $query = "SELECT * FROM `SUB_CATEGORY` WHERE `CATEGORY_id` = '65'";
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
                                    <li><a href="categories.php">All Categories</a>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="all_product.php?order=latest">All Ads </a></li>
                            <?php if(!isset($_SESSION['username'])){?>
                                <li><a href="login.php"><i class="fa fa-sign-in"></i> Log in  </a> </li>
                            <?php } else { ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-profile-male" aria-hidden="true"></i> <?php echo $_SESSION['username']; ?> <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="profile.php">User Profile</a></li>
                                        <li><a href="personal_ads.php">Active Ads</a></li>
                                        <li><a href="favourite_ads.php">Favourite Ads</a></li>
                                        <li><a href="messages.php">Message Panel</a></li>
                                        <li><a href="logout.php">logout</a></li>
                                    </ul>
                                </li>
                            <?php } ?>                        </ul>
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

                            <li><a href="<?php if (isset($_SESSION['username'])){ echo "new_advertisement.php"; }else { echo "login.php"; }  ?>"  class="btn btn-light"><i class="fa fa-plus" aria-hidden="true"></i>Post Free Ad </a> </li>

                        </ul>
                    </div>


                </div>
            </div>
        </section>
    </nav>
    <!-- Navigation Menu End -->
</div>
<!-- =-=-=-=-=-=-= Advance Search =-=-=-=-=-=-= -->
<div id="search-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                <!-- Form -->
                <form method="post" class="search-form">
                    <div class="col-md-2 col-xs-12 col-sm-4 no-padding">
                        <input type="text" class="form-control" placeholder="What Are You Looking For..." />
                    </div>
                    <div class="col-md-2 col-xs-12 col-sm-4 no-padding">
                        <select class="category form-control">
                            <option label="Select a category">Select a category</option>
                            <?php
                            // GET ALL CATEGORIES from DB
                            $cat_query= "SELECT * FROM `CATEGORY` WHERE `lang` = 'EN' ORDER BY `name` ASC  ";
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
                    <!-- Search Field -->
                    <div class="col-md-2 col-xs-12 col-sm-4 no-padding">
                        <input type="text" class="form-control" placeholder="Postcode" />
                    </div>

                    <div class="col-md-2 col-xs-12 col-sm-4 no-padding">
                        <select class="category form-control">
                            <option label="Select a category">Select search distance</option>
                            <option value="10">10 KM</option>
                            <option value="20">20 KM</option>
                            <option value="30">30 KM</option>
                            <option value="40">40 KM</option>
                            <option value="50">50 KM</option>
                            <option value="60">60 KM</option>
                            <option value="70">70 KM</option>
                            <option value="80">80 KM</option>
                            <option value="90">90 KM</option>
                            <option value="100">100 KM</option>
                            <option value="all">Unlimited</option>
                        </select>
                    </div>

                    <!-- Search Button -->
                    <div class="col-md-3 col-xs-12 col-sm-12 no-padding">
                        <button type="button" name="submit" onclick="submitBut();" id="submitSearch" class="btn btn-light">Search</button>
                    </div>
                </form>
                <!-- end .search-form -->
            </div>
        </div>
    </div>
</div>
