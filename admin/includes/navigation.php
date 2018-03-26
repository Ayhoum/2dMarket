<?php

session_start();


?>
<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Admin Control</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">




                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['username'];?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
<!--                        <li>-->
<!--                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>-->
<!--                        </li>-->

                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>



            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">


                    <li>
                        <a href="../cat.php"><i class="fa fa-fw fa-tasks"></i> Categories </a>
                    </li>
                    <li>
                        <a href="javascript:" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-user"></i> USERS <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="../accounts_users.php">Accounts Control</a>
                            </li>
                            <li>
                                <a href="../ADS.php">Ads Control </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="../dash.php"><i class="fa fa-fw fa-pie-chart"></i> Dashboard </a>
                    </li>

                </ul>
            </div>




            <!-- /.navbar-collapse -->
        </nav>