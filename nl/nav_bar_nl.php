
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

                            <li ><a href="all_product.php?order=latest">Alle advertenties </a></li>
                            <?php if(!isset($_SESSION['username'])){?>
                                <li ><a  style="color: rgba(166,85,218,0.86)"   href="login.php"><i class="fa fa-sign-in"></i> Inloggen  </a> </li>
                            <?php } else { ?>
                                <li>
                                    <a  style="color: #00c292" href="javascript:void(0)"><?php echo $_SESSION['username']; ?> <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">
                                        <li><a href="profile.php">Mijn profile </i></a></li>
                                        <li><a href="personal_ads.php">Mijn advertenties </i></a></li>
                                        <li><a href="../messages/index.php?l=nl">Brichten </i></a></li>
                                        <li><a style="color: red" href="logout.php">Uitloggen</a></li>
                                    </ul>
                                </li>

                            <?php } ?>
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

                            <li><a href="<?php if (isset($_SESSION['username'])){ echo "new_advertisement.php"; }else { echo "login.php"; }  ?>"  class="btn btn-light"><i class="fa fa-plus" aria-hidden="true"></i>Advertentie plaatsen </a> </li>

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
                    <div class="col-md-3 col-xs-12 col-sm-4 no-padding">
                        <input id="querySearch" type="text" class="form-control" placeholder="Waar bent u naar op zoek..." />
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-4 no-padding">
                        <select id="catSelect" class="category form-control">
                            <option label="Kies een categorie">Kies een categorie</option>
                            <?php
                            // GET ALL CATEGORIES from DB
                            $cat_query= "SELECT * FROM `CATEGORY` WHERE `lang` = 'NL' ORDER BY `name` ASC  ";
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
                        <select id="dis" class="category form-control">
                            <option label="Kies een afstand">Kies een afstand</option>
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
                            <option value="all">Onbeperkt</option>

                        </select>
                    </div>

                    <!-- Search Button -->
                    <div class="col-md-2 col-xs-12 col-sm-12 no-padding">
                        <button type="button" style="width: 100%;" name="submit" onclick="submitBut();" id="submitSearch" class="btn btn-light">Zoek</button>
                    </div>
                </form>
                <!-- end .search-form -->
            </div>
        </div>
    </div>
</div>
<script>

    var cat;
    var query;
    var dis;
    var order;
    var price;

    var submitBut = function () {
        cat   = $("#catSelect").val();
        query = $("#querySearch").val();
        dis   = $("#dis").val();
        order = "latest";
        price = "all";
        if(cat == null || cat == "dis"){
            $(".select2Class").addClass('shadow');
        }
        if(query == ""){
            $("#querySearch").addClass('shadow');
        }

        if(cat != null && cat != "dis" && query != "" && dis != 0.00){



            window.open("search_result.php?order=" + order + "&dis=" + dis + "&query=" + query + "&cat=" + cat + "&price=" + price,"_self");
        }
    };

</script>