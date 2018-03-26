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
                    <div class="col-xs-12 col-lg-3 col-m-3">

                        <?php
                        if (isset($_GET['editAD'])) {

                            $catID = $_GET['editAD'];

                            include "includes/update_user_status.php";

                        }

                        ?>

                    </div>


                    <div class="col-xs-12 col-lg-9 col-m-9">

                        <table class="table table-hover">
                            <thead>
                            <th>Id</th>
                            <th>Name</th>
                            <th>last Name</th>
                            <th>email</th>
                            <th>Profile status</th>

                            </thead>

                            <TBODY>
                            <tr>
                                <?php findUsersAdmin();?>
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

