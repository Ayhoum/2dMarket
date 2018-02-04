<?php
session_start();
ob_start();
require_once '../scripts/db_connection.php';

if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
}else{
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="../css/vendor/simple-line-icons.css">
	<link rel="stylesheet" href="../css/vendor/magnific-popup.css">
	<link rel="stylesheet" href="../css/style.css">
	<!-- favicon -->
	<link rel="icon" href="favicon.ico">
	<title>Emerald Dragon | Dashboard</title>
</head>
<body>

	<!-- FORM POPUP -->
	<div id="new-message-popup" class="form-popup new-message mfp-hide">
		<!-- FORM POPUP CONTENT -->
		<div class="form-popup-content">
			<h4 class="popup-title">Write a New Message</h4>
			<!-- LINE SEPARATOR -->
			<hr class="line-separator">
			<!-- /LINE SEPARATOR -->
			<form class="new-message-form">
				<!-- INPUT CONTAINER -->
				<div class="input-container field-add">
					<label for="mailto" class="rl-label b-label required">To:</label>
					<label for="mailto" class="select-block">
							<select name="mailto" id="mailto">
								<option value="0">Select from the authors you follow...</option>
								<option value="1">Vynil Brush</option>
								<option value="2">Jenny_Block</option>
							</select>
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
					</label>
					<div class="button dark-light add-field">
						<!-- SVG PLUS -->
						<svg class="svg-plus">
							<use xlink:href="#svg-plus"></use>
						</svg>
						<!-- /SVG PLUS -->
					</div>
				</div>
				<!-- /INPUT CONTAINER -->

				<!-- INPUT CONTAINER -->
				<div class="input-container">
					<label for="subject" class="rl-label b-label">Subject:</label>
					<input type="text" id="subject" name="subject" placeholder="Enter your subject here...">
				</div>
				<!-- INPUT CONTAINER -->

				<!-- INPUT CONTAINER -->
				<div class="input-container">
					<label for="message" class="rl-label b-label required">Your Message:</label>
					<textarea id="message" name="message" placeholder="Write your message here..."></textarea>
				</div>
				<!-- INPUT CONTAINER -->

				<button class="button mid dark">Send <span class="primary">Message</span></button>
			</form>
		</div>
		<!-- /FORM POPUP CONTENT -->
	</div>
	<!-- /FORM POPUP -->

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
				<a href="author-profile.html">
				<div class="outer-ring">
					<div class="inner-ring"></div>
					<figure class="user-avatar">
						<img src="../images/avatars/avatar_01.jpg" alt="avatar">
					</figure>
				</div>
				</a>
				<!-- /USER AVATAR -->

				<!-- USER INFORMATION -->
				<p class="user-name">Johnny Fisher</p>
				<p class="user-money">$745.00</p>
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
			<li class="dropdown-item active interactive">
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
				<ul class="inner-dropdown open">
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
			<li class="dropdown-item">
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
            <div class="headline buttons two primary">
                <h4>Your Inbox (36)</h4>
				<a href="#new-message-popup" class="button mid-short secondary open-new-message">New Message</a>
				<a href="#" class="button mid-short primary">Delete Selected</a>
            </div>
            <!-- /HEADLINE -->

			<!-- INBOX MESSAGES -->
			<div class="inbox-messages">


                <?php
                $query = "SELECT * FROM CHAT WHERE sender = '{$id}' OR receiver = '{$id}' ORDER BY id DESC ";
                $getMessages = mysqli_query($mysqli,$query);
                if(mysqli_num_rows($getMessages) > 0){

                    while ($row = mysqli_fetch_assoc($getMessages)){
                        $messageId = $row['id'];
                        $messageTxt = $row['message_txt'];
                        $messageDate = $row['message_date'];
                        $messageStatus = $row['status'];
                        $messageReceiver = $row['receiver'];
                        $adId = $row['ADVERTISMENT_id'];
                        $adProductId = $row['ADVERTISMENT_PRODUCT_id'];

?>

                    <!-- INBOX MESSAGE -->
                    <div class="inbox-message">
                        <div class="inbox-message-actions">
                            <!-- CHECKBOX -->
                            <input type="checkbox" id="msg1" name="msg1">
                            <label for="msg1" class="label-check">
                                <span class="checkbox primary"><span></span></span>
                            </label>
                            <!-- /CHECKBOX -->

                            <!-- STARRED -->
                            <div class="starred">
                                <img src="../images/dashboard/star-empty.png" class="hidden" alt="star-empty">
                                <img src="../images/dashboard/star-filled.png" class="visible" alt="star-filled">
                            </div>
                            <!-- /STARRED -->
                        </div>
                            <?php
                            $query = "SELECT * FROM USER WHERE id = '{$messageReceiver}'";
                            $getName = mysqli_query($mysqli,$query);
                            if(mysqli_num_rows($getName) > 0) {
                                while ($row = mysqli_fetch_assoc($getName)) {
                                    $username = $row['username'];
                                }
                            }else{
                                $username = "Unknown";
                            }
                            ?>
                        <div class="inbox-message-author">
                            <figure class="user-avatar">
                                <img src="../images/avatars/avatar_06.jpg" alt="user-img">
                            </figure>
                            <p class="text-header <?php if($messageStatus == 'UNREAD') {echo 'normal';} ?>)">
                                <?php echo $username;?>
                                <span class="message-icon icon-envelope secondary"></span>
                            </p>
                        </div>

                        <a href="openmessage.php">
                            <div class="inbox-message-content">
                                <p class="text-header" <?php if($messageStatus == 'UNREAD') {echo 'normal';} ?>><?php echo $adId;?></p>
                                <p class="description"><?php echo $messageTxt;?></p>
                            </div>
                        </a>

                        <div class="inbox-message-type">
                            <?php if($messageStatus == 'UNREAD') {
                                ?>
                                <span class="message-icon icon-envelope secondary"></span>
                            <?php }else{ ?>
                                <span class="message-icon message-icon icon-envelope-open secondary"></span>
                            <?php } ?>
                        </div>

                        <div class="inbox-message-date">
                            <p><?php echo $messageDate;?></p>
                        </div>
                    </div>
                    <!-- INBOX MESSAGE -->

                    <?php
                    }
                }else{
                    ?>
                <h3 style="margin-top: 15px;">Sorry, You have no messages so far!</h3>
                <?php
                }
                ?>

				<!-- PAGER -->
				<div class="pager-wrap">
					<div class="pager primary">
						<div class="pager-item"><p>1</p></div>
						<div class="pager-item active"><p>2</p></div>
						<div class="pager-item"><p>3</p></div>
						<div class="pager-item"><p>...</p></div>
						<div class="pager-item"><p>17</p></div>
					</div>
				</div>
				<!-- /PAGER -->
			</div>
			<!-- /INBOX MESSAGES -->
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
<!-- Magnific Popup -->
<script src="../js/vendor/jquery.magnific-popup.min.js"></script>
<!-- XM Pie Chart -->
<script src="../js/vendor/jquery.xmpiechart.min.js"></script>
<!-- Side Menu -->
<script src="../js/side-menu.js"></script>
<!-- Dashboard Header -->
<script src="../js/dashboard-header.js"></script>
<!-- Dashboard Inbox -->
<script src="../js/dashboard-inbox.js"></script>
<!-- Inbox Messages -->
<script src="../js/inbox-messages.js"></script>
</body>
</html>