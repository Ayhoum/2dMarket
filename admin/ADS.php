<?php

include "functions.php";
include "../scripts/db_connection.php"; ?>
<!--header-->
<?php include "includes/header.php"; ?>

<div id="wrapper">

    <!--NAVIGATION ------------------>
    <?php include "includes/navigation.php"; ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome
                        <small><?php echo $_SESSION['username'];?></small>
                    </h1>
                    <div class="col-xs-12 col-lg-2 col-m-2">

                        <?php
                        if (isset($_GET['editAD'])) {

                            $catID = $_GET['editAD'];

                            include "includes/update_AD.php";

                        }

                        ?>

                    </div>


                    <div class="col-xs-12 col-lg-10 col-m-10">
                        <!---->
                        <table class="table table-hover">
                            <thead>
                            <th>Id</th>
                            <th>Title</th>

                            <th>Language</th>
                            <th>Selling Type</th>
                            <th>AD status</th>
                            <th>Delivery Type</th>
                            <th>Description</th>
                            <th>Ad Type</th>
                            <th>Date</th>
                            <th>Condition</th>
                            <th>Price</th>
                            </thead>

                            <TBODY>
                            <tr>
                                <?php findAllAds(); ?>
                            </tr>


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

