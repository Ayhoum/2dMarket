<?php
session_start();
include "../scripts/db_connection.php";
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
	<title>2D Market | Upload a new Advertisement</title>
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
						<img src="../images/avatars/avatar_01.jpg" alt="avatar">
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
				<a href="dashboard-notifications.html">
                    <span class="sl-icon icon-star"></span>
                    Notifications
                </a>
                <!-- PIN -->
                <span class="pin soft-edged big primary">49</span>
                <!-- /PIN -->
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item interactive">
				<a href="#">
                    <span class="sl-icon icon-envelope"></span>
                    Messages
                    <!-- SVG ARROW -->
					<svg class="svg-arrow">
						<use xlink:href="#svg-arrow"></use>
					</svg>
					<!-- /SVG ARROW -->
				</a>

				<!-- INNER DROPDOWN -->
				<ul class="inner-dropdown">
					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="dashboard-inbox.html">Your Inbox (36)</a>
						<!-- PIN -->
						<span class="pin soft-edged secondary">2</span>
						<!-- /PIN -->
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="dashboard-inbox-v2.html">Your Inbox (36) V2</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="dashboard-openmessage.html">Open Message</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="dashboard-inbox.html">Starred Message</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="dashboard-inbox.html">Deleted Messages</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->
				</ul>
				<!-- INNER DROPDOWN -->

                <!-- PIN -->
                <span class="pin soft-edged big secondary">!</span>
                <!-- /PIN -->
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="dashboard-purchases.html">
                    <span class="sl-icon icon-tag"></span>
                    Your Purchases
                </a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="dashboard-buycredits.html">
                    <span class="sl-icon icon-credit-card"></span>
                    Buy Credits
                </a>
			</li>
			<!-- /DROPDOWN ITEM -->
		</ul>
		<!-- /DROPDOWN -->

        <!-- SIDE MENU TITLE -->
		<p class="side-menu-title">Info &amp; Statistics</p>
		<!-- /SIDE MENU TITLE -->

		<!-- DROPDOWN -->
		<ul class="dropdown dark hover-effect">
			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="dashboard-statement.html">
                    <span class="sl-icon icon-layers"></span>
                    Sales Statement
                </a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="dashboard-statistics.html">
                    <span class="sl-icon icon-chart"></span>
                    Statistics
                </a>
			</li>
			<!-- /DROPDOWN ITEM -->
		</ul>
		<!-- /DROPDOWN -->

         <!-- SIDE MENU TITLE -->
		<p class="side-menu-title">Author Tools</p>
		<!-- /SIDE MENU TITLE -->

		<!-- DROPDOWN -->
		<ul class="dropdown dark hover-effect">
			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item active">
				<a href="dashboard-uploaditem.html">
                    <span class="sl-icon icon-arrow-up-circle"></span>
                    Upload Item
                </a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="dashboard-manageitems.html">
                    <span class="sl-icon icon-folder-alt"></span>
                    Manage Items
                </a>
			</li>
			<!-- /DROPDOWN ITEM -->

            <!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="dashboard-withdrawals.html">
                    <span class="sl-icon icon-wallet"></span>
                    Withdrawals
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
            <a href="index.html" class="db-close-button">
               <img src="images/dashboard/back-icon.png" alt="back-icon">
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
                <h6>Your Dashboard</h6>
            </div>
            <!-- /DASHBOARD HEADER ITEM -->

			<!-- DASHBOARD HEADER ITEM -->
            <div class="dashboard-header-item form">
                <form class="dashboard-search">
                    <input type="text" name="search" id="search_dashboard" placeholder="Search on dashboard...">
                    <input type="image" src="../images/dashboard/search-icon.png" alt="search-icon">
                </form>
            </div>
            <!-- /DASHBOARD HEADER ITEM -->

            <!-- DASHBOARD HEADER ITEM -->
            <div class="dashboard-header-item stats">
                <!-- STATS META -->
                <div class="stats-meta">
                    <div class="pie-chart pie-chart1">
                        <!-- SVG PLUS -->
                        <svg class="svg-plus primary">
                            <use xlink:href="#svg-plus"></use>
                        </svg>
                        <!-- /SVG PLUS -->
                    </div>
                    <h6>64.579</h6>
                    <p>New Original Visits</p>
                </div>
                <!-- /STATS META -->
            </div>
            <!-- /DASHBOARD HEADER ITEM -->

            <!-- DASHBOARD HEADER ITEM -->
            <div class="dashboard-header-item stats">
                <!-- STATS META -->
                <div class="stats-meta">
                    <div class="pie-chart pie-chart2">
                        <!-- SVG PLUS -->
                        <svg class="svg-minus tertiary">
                            <use xlink:href="#svg-minus"></use>
                        </svg>
                        <!-- /SVG PLUS -->
                    </div>
                    <h6>20.8</h6>
                    <p>Less Sales Than Last Month</p>
                </div>
                <!-- /STATS META -->
            </div>
            <!-- /DASHBOARD HEADER ITEM -->

            <!-- DASHBOARD HEADER ITEM -->
            <div class="dashboard-header-item stats">
                <!-- STATS META -->
                <div class="stats-meta">
                    <div class="pie-chart pie-chart3">
                        <!-- SVG PLUS -->
                        <svg class="svg-plus primary">
                            <use xlink:href="#svg-plus"></use>
                        </svg>
                        <!-- /SVG PLUS -->
                    </div>
                    <h6>322k</h6>
                    <p>Total Visits This Month</p>
                </div>
                <!-- /STATS META -->
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
                <h4>Upload New Product</h4>
            </div>
            <!-- /HEADLINE -->

			<!-- FORM BOX ITEMS -->
			<div class="dashboard-content">
				<!-- FORM BOX ITEM -->
				<div class="form-box-item full">
					<h4>Product Specifications</h4>
					<hr class="line-separator">
					<form id="upload_form">
						<!-- INPUT CONTAINER -->
						<div class="input-container">
							<label for="category" class="rl-label required">Select Category</label>
							<label for="category" class="select-block">
								<select name="category" id="category">
									<option value="0">Illustration</option>
									<option value="1">Photoshop</option>
									<option value="2">Vector</option>
								</select>
								<!-- SVG ARROW -->
								<svg class="svg-arrow">
									<use xlink:href="#svg-arrow"></use>
								</svg>
								<!-- /SVG ARROW -->
							</label>
						</div>
						<!-- /INPUT CONTAINER -->

                        <!-- INPUT CONTAINER -->
                        <div class="input-container">
                            <label for="sub category" class="rl-label required">Select Sub Category</label>
                            <label for="sub category" class="select-block">
                                <select name="sub category" id="sub category">
                                    <option value="0">Illustration</option>
                                    <option value="1">Photoshop</option>
                                    <option value="2">Vector</option>
                                </select>
                                <!-- SVG ARROW -->
                                <svg class="svg-arrow">
                                    <use xlink:href="#svg-arrow"></use>
                                </svg>
                                <!-- /SVG ARROW -->
                            </label>
                        </div>
                        <!-- /INPUT CONTAINER -->


                        <!-- INPUT CONTAINER -->
						<div class="input-container">
							<label for="product_name" class="rl-label required">Name of the Product (Max 40 Characters)</label>
							<input type="text" id="product_name" name="product_name" placeholder="Enter the product name here...">
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container">
							<label for="product_description" class="rl-label required">Product Description</label>
							<textarea id="product_description" name="product_description" placeholder="Enter the product description here..."></textarea>
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container">
							<label class="rl-label required">Upload Main Image</label>
							<!-- UPLOAD FILE -->
							<div class="upload-file">
								<div class="upload-file-actions">
									<a href="#" class="button dark-light">Upload File...</a>
								</div>
								<div class="upload-file-progress">
									<!-- BADGE PROGRESS -->
									<div class="upload-bar">
										<div class="upload-pg2"></div>
									</div>
									<!-- /BADGE PROGRESS -->
									<p class="text-header"></p>
									<a href="#" class="button dark-light square">
										<img src="../images/dashboard/close-icon-small.png" alt="close-icon">
									</a>
								</div>
							</div>
							<!-- UPLOAD FILE -->
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container">
							<label class="rl-label">Additional images </label>
							<!-- UPLOAD FILE -->
							<div class="upload-file">
								<div class="upload-file-actions">
									<a href="#" class="button dark-light">Upload File...</a>
								</div>
								<div class="upload-file-progress">
									<!-- BADGE PROGRESS -->
									<div class="upload-bar">
										<div class="upload-pg3"></div>
									</div>
									<!-- /BADGE PROGRESS -->
									<p class="text-header"></p>
									<a href="#" class="button dark-light square">
										<img src="../images/dashboard/close-icon-small.png" alt="close-icon">
									</a>
								</div>
							</div>
							<!-- UPLOAD FILE -->

							<!-- UPLOAD FILE -->
							<div class="upload-file multiupload">
								<div class="upload-file-actions">
									<a href="#" class="button dark-light">Upload File...</a>
								</div>
								<div class="upload-file-progress">
									<!-- BADGE PROGRESS -->
									<div class="upload-bar">
										<div class="upload-pg4"></div>
									</div>
									<!-- /BADGE PROGRESS -->
									<p class="text-header"></p>
									<a href="#" class="button dark-light square">
										<img src="../images/dashboard/close-icon-small.png" alt="close-icon">
									</a>
								</div>
							</div>
							<!-- UPLOAD FILE -->

							<!-- UPLOAD FILE -->
							<div class="upload-file multiupload">
								<div class="upload-file-actions">
									<a href="#" class="button dark-light">Upload File...</a>
								</div>
								<div class="upload-file-progress">
									<!-- BADGE PROGRESS -->
									<div class="upload-bar">
										<div class="upload-pg5"></div>
									</div>
									<!-- /BADGE PROGRESS -->
									<p class="text-header"></p>
									<a href="#" class="button dark-light square">
										<img src="../images/dashboard/close-icon-small.png" alt="close-icon">
									</a>
								</div>
							</div>
							<!-- UPLOAD FILE -->
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container half">
							<label for="files_included" class="rl-label required">Product's Price</label>
							<input type="text" id="files_included" name="files_included" placeholder="Enter the product's price here...">
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container half">
                            <label for="delivery" class="rl-label required">Select Delivery Type</label>
                            <label for="delivery" class="select-block">
                                <select name="delivery" id="delivery">
                                    <option value="Collecting">Collecting</option>
                                    <option value="Sending to address">Sending to address</option>
                                </select>
                                <!-- SVG ARROW -->
                                <svg class="svg-arrow">
                                    <use xlink:href="#svg-arrow"></use>
                                </svg>
                                <!-- /SVG ARROW -->
                            </label>
						</div>
						<!-- /INPUT CONTAINER -->

						<div class="clearfix"></div>

						<!-- INPUT CONTAINER -->
						<div class="input-container half">
							<label for="selling type" class="rl-label required">Select Selling Type</label>
							<label for="selling type" class="select-block">
								<select name="selling type" id="selling type">
									<option value="Bidding">Bidding</option>
									<option value="Vast price">Vast price</option>
								</select>
								<!-- SVG ARROW -->
								<svg class="svg-arrow">
									<use href="#svg-arrow"></use>
								</svg>
								<!-- /SVG ARROW -->
							</label>
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container">
							<label for="item_tags" class="rl-label required">Item Tags</label>
							<input type="text" id="item_tags" name="item_tags" placeholder="Enter them item tags separated by a comma...">
						</div>
						<!-- /INPUT CONTAINER -->

						<hr class="line-separator">
						<button class="button big dark">Submit Product <span class="primary">for Sale</span></button>
					</form>
				</div>
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