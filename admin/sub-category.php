<?php

include "functions.php";
include "../scripts/db_connection.php";?>
<!--header-->
<?php include "includes/header.php";?>

<div id="wrapper">

    <!--NAVIGATION ------------------>
    <?php include "includes/navigation.php";?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome
                        <small><?php echo $_SESSION['username'];?></small>

                    </h1>
                    <div class="col-xs-12 col-lg-3 col-m-3">

                        <!--                       <!-- PHP ADDING FUNCTION-->
                        <?php add_SUB_categories(); ?>

                        <!-- form add cat -->
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="cat-title">Add SUB-category</label>
                                <input class="form-control" type="text" name="SUB_cat_title">
                            </div>
                            <div class="form-group">
                                <label for="cat-title">Add ICON</label>
                                <input class="form-control" type="text" name="SUB_ICON">
                            </div>

                            <div class="form-group">
                                <input class="btn-btn-primary" type="submit" name="submit_SUB" value="Add SUB-category" >
                            </div>
                        </form>


                        <?php
                        if(isset($_GET['editSUB'])){

                            $catID=$_GET['editSUB'];

                            include "includes/update_sub_category.php";

                        }

                        ?>

                    </div>



                    <div class="col-xs-12 col-lg-9 col-m-9">

                        <table class="table table-hover">
                            <thead>
                            <th>ID</th>
                            <th>SUB-Category Title</th>
                            <th>icon</th>
                            </thead>

                            <TBODY>
                            <tr>
                                <!--    FIND ALL CATEGOERY-->
                                <?php findAllSubCategories(); ?>
                            </tr>


                            <?php delet_SUB_Categories() ?>


                            </TBODY>
                        </table>


                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>

        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>

