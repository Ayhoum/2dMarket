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
                        <?php add_categories(); ?>

                        <!-- form add cat -->
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="cat-title">Add category</label>
                                <input class="form-control" type="text" name="cat_title">
                            </div>
                            <div class="form-group">
                                <label for="cat-title">Add lANG</label>
                                <input class="form-control" type="text" name="cat_lang">
                            </div>
                            <div class="form-group">
                                <label for="cat-title">Add ICON</label>
                                <input class="form-control" type="text" name="cat_ICON">
                            </div>

                            <div class="form-group">
                                <input class="btn-btn-primary" type="submit" name="submit" value="Add category" >
                            </div>
                        </form>


                        <?php
                        if(isset($_GET['edit'])){

                           $catID=$_GET['edit'];

                           include "includes/update_categories.php";

                        }

                        ?>

                    </div>



                <div class="col-xs-12 col-lg-9 col-m-9">

                    <table class="table table-hover">
                        <thead>
                        <th>ID</th>
                        <th>Category Title</th>
                        <th>Category language</th>
                        <th>icon</th>
                        </thead>

                        <TBODY>
                        <tr>
                            <!--    FIND ALL CATEGOERY-->
                            <?php findAllCategories(); ?>
                        </tr>


                        <?php deletCategories() ?>


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

