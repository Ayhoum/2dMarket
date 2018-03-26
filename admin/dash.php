
<!--header-->

<?php

require_once "includes/header.php";
include "../scripts/db_connection.php";

?>


    <div id="wrapper">

<!--NAVIGATION ------------------>
        <?php include "includes/navigation.php";?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">

                           Welcome to admin page
<!--                            <small>Subheading</small>-->
                        </h1>

                    </div>
                </div>
                <!-- /.row -->






                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">


                                        <?php $query= "SELECT * FROM `ADVERTISEMENT`";
                                        $exc=mysqli_query($mysqli,$query);
                                        $num_rows= mysqli_num_rows($exc);
                                        ?>
                                        <div class='huge'><?php echo $num_rows;?></div>
                                        <div>Advertisement</div>
                                    </div>
                                </div>
                            </div>
                            <a href="ADS.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">

                                        <?php $query= "SELECT * FROM `USER`";
                                        $exc=mysqli_query($mysqli,$query);
                                        $num_rows= mysqli_num_rows($exc);
                                        ?>
                                        <div class='huge'><?php echo $num_rows;?></div>
                                        <div> Users</div>
                                    </div>
                                </div>
                            </div>
                            <a href="accounts_users.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-list fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php $query= "SELECT * FROM `CATEGORY`";
                                        $exc=mysqli_query($mysqli,$query);
                                        $num_rows= mysqli_num_rows($exc);
                                        ?>
                                        <div class='huge'><?php echo $num_rows;?></div>
                                        <div>Categories</div>
                                    </div>
                                </div>
                            </div>
                            <a href="cat.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">

                        <script type="text/javascript">
                            google.charts.load('current', {'packages':['bar']});
                            google.charts.setOnLoadCallback(drawChart);

                            function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                    ['Year', 'Sales', 'Expenses', 'Profit'],
                                    ['2014', 1000, 400, 200],
                                    ['2015', 1170, 460, 250],
                                    ['2016', 660, 1120, 300],
                                    ['2017', 1030, 540, 350]
                                ]);

                                var options = {
                                    chart: {
                                        title: 'Company Performance',
                                        subtitle: 'Sales, Expenses, and Profit: 2014-2017',
                                    }
                                };

                                var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                                chart.draw(data, google.charts.Bar.convertOptions(options));
                            }
                        </script>
                        <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
                    </div>
                </div>

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
