<?php
session_start();
include "../scripts/db_connection.php";
if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
}
?>
<?php
$id                 = $_SESSION['id'];
$full_name          = $_SESSION['full_name'];
$profile_picture    = $_SESSION['profile_picture'];

//Set a profile picture in case that the user didn't has one!
if (empty($profile_picture)){
    $profile_picture =  "../images/avatars/avatar_01.jpg";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="../css/vendor/simple-line-icons.css">
	<link rel="stylesheet" href="../css/style.css">
	<!-- favicon -->
	<link rel="icon" href="favicon.ico">
	<title>2D Market | User's Dashboard</title>
</head>
<body>

	<!-- SIDE MENU -->
	<div id="dashboard-options-menu" class="side-menu dashboard left closed">
        <!-- SVG PLUS -->
		<svg class="svg-plus">
			<use xlink:href="#svg-plus"></use>
		</svg>
		<!-- /SVG PLUS -->
        
		<!-- SIDE MENU HEADER -->
		<div class="side-menu-header">
			<!-- USER QUICKVIEW -->
			<div class="user-quickview">
				<!-- USER AVATAR -->
				<a href="user_profile.php">
				<div class="outer-ring">
					<div class="inner-ring"></div>
					<figure class="user-avatar">
						<img src="<?php echo $profile_picture; ?>" alt="avatar">
					</figure>
				</div>
				</a>
				<!-- /USER AVATAR -->

				<!-- USER INFORMATION -->
				<p class="user-name"><?php echo $full_name; ?></p>
				<!-- /USER INFORMATION -->
			</div>
			<!-- /USER QUICKVIEW -->
		</div>
		<!-- /SIDE MENU HEADER -->

		<!-- SIDE MENU TITLE -->
		<p class="side-menu-title">Your Account</p>
		<!-- /SIDE MENU TITLE -->

		<!-- DROPDOWN -->
		<ul class="dropdown dark hover-effect interactive">
			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="dashboard-settings.html">
                    <span class="sl-icon icon-settings"></span>
                    Account Settings
                </a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="#">
                    <span class="sl-icon icon-envelope"></span>
                    Messages
				</a>
			</li>
			<!-- /DROPDOWN ITEM -->

		</ul>
		<!-- /DROPDOWN -->

        <!-- SIDE MENU TITLE -->

         <!-- SIDE MENU TITLE -->
		<p class="side-menu-title">User's Advertisements</p>
		<!-- /SIDE MENU TITLE -->

		<!-- DROPDOWN -->
		<ul class="dropdown dark hover-effect">


            <!-- DROPDOWN ITEM -->
			<li class="dropdown-item active">
				<a href="dashboard-uploaditem.html">
                    <span class="sl-icon icon-arrow-up-circle"></span>
                    Upload new Advertisements
                </a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="dashboard-manageitems.html">
                    <span class="sl-icon icon-folder-alt"></span>
                    Manage Advertisements
                </a>
			</li>
			<!-- /DROPDOWN ITEM -->

		</ul>
		<!-- /DROPDOWN -->

        <a href="#" class="button medium secondary">Logout</a>
	</div>
	<!-- /SIDE MENU -->

    <!-- DASHBOARD BODY -->
    <div class="dashboard-body">
        <!-- DASHBOARD HEADER -->
        <div class="dashboard-header retracted">
            <!-- DB CLOSE BUTTON -->
            <a href="../index.php" class="db-close-button">
               <img src="../images/dashboard/back-icon.png" alt="back-icon">
            </a>
            <!-- DB CLOSE BUTTON -->

			<!-- DB OPTIONS BUTTON -->
            <div class="db-options-button">
               <img src="../images/dashboard/db-list-right.png" alt="db-list-right">
			   <img src="../images/dashboard/close-icon.png" alt="close-icon">
            </div>
            <!-- DB OPTIONS BUTTON -->

            <!-- DASHBOARD HEADER ITEM -->
            <div class="dashboard-header-item title">
                <!-- DB SIDE MENU HANDLER -->
                 <div class="db-side-menu-handler">
                    <img src="../images/dashboard/db-list-left.png" alt="db-list-left">
                </div>
                <!-- /DB SIDE MENU HANDLER -->
                <h6><?php echo  $first_name ."'s Dashboard"; ?> </h6>
            </div>
            <!-- /DASHBOARD HEADER ITEM -->

			<!-- DASHBOARD HEADER ITEM -->
            <div class="dashboard-header-item form">

            </div>
            <!-- /DASHBOARD HEADER ITEM -->

            <!-- DASHBOARD HEADER ITEM -->
            <div class="dashboard-header-item stats">

            </div>
            <!-- /DASHBOARD HEADER ITEM -->

            <!-- DASHBOARD HEADER ITEM -->
            <div class="dashboard-header-item stats">

            </div>
            <!-- /DASHBOARD HEADER ITEM -->

            <!-- DASHBOARD HEADER ITEM -->
            <div class="dashboard-header-item stats">

            </div>
            <!-- /DASHBOARD HEADER ITEM -->

			<!-- DASHBOARD HEADER ITEM -->
            <div class="dashboard-header-item back-button">
                <a href="index.html" class="button mid dark-light">Back to Homepage</a>
            </div>
            <!-- /DASHBOARD HEADER ITEM -->
        </div>
        <!-- DASHBOARD HEADER -->

        <!-- DASHBOARD CONTENT -->
        <div class="dashboard-content">
            <!-- HEADLINE -->
            <div class="headline simple primary">
                <h4>Welcome <span style="color: #0ae7c2"><?php echo $full_name; ?></span></h4>
            </div>
            <!-- /HEADLINE -->

			<!-- FORM BOX ITEMS -->
			<div class="dashboard-content">
				<!-- FORM BOX ITEM -->
				<!-- /FORM BOX ITEM -->
			</div>
			<!-- /FORM BOX ITEMS -->
			<div class="clearfix"></div>
        </div>
        <!-- DASHBOARD CONTENT -->
    </div>
    <!-- /DASHBOARD BODY -->

	<div class="shadow-film closed"></div>

<!-- SVG ARROW -->
<svg style="display: none;">	
	<symbol id="svg-arrow" viewBox="0 0 3.923 6.64014" preserveAspectRatio="xMinYMin meet">
		<path d="M3.711,2.92L0.994,0.202c-0.215-0.213-0.562-0.213-0.776,0c-0.215,0.215-0.215,0.562,0,0.777l2.329,2.329
			L0.217,5.638c-0.215,0.215-0.214,0.562,0,0.776c0.214,0.214,0.562,0.215,0.776,0l2.717-2.718C3.925,3.482,3.925,3.135,3.711,2.92z"/>
	</symbol>
</svg>
<!-- /SVG ARROW -->

<!-- SVG PLUS -->
<svg style="display: none;">
	<symbol id="svg-plus" viewBox="0 0 13 13" preserveAspectRatio="xMinYMin meet">
		<rect x="5" width="3" height="13"/>
		<rect y="5" width="13" height="3"/>
	</symbol>
</svg>
<!-- /SVG PLUS -->

<!-- SVG MINUS -->
<svg style="display: none;">
	<symbol id="svg-minus" viewBox="0 0 13 13" preserveAspectRatio="xMinYMin meet">
		<rect y="5" width="13" height="3"/>
	</symbol>
</svg>
<!-- /SVG MINUS -->

<!-- jQuery -->
<script src="../js/vendor/jquery-3.1.0.min.js"></script>
<!-- XM Pie Chart -->
<script src="../js/vendor/jquery.xmpiechart.min.js"></script>
<!-- XM LineFill -->
<script src="../js/vendor/jquery.xmlinefill.min.js"></script>
<!-- Side Menu -->
<script src="../js/side-menu.js"></script>
<!-- Dashboard Header -->
<script src="../js/dashboard-header.js"></script>
<!-- Dashboard UploadItem -->
<script src="../js/dashboard-uploaditem.js"></script>
</body>
</html>