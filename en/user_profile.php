<?php
session_start();
include '../scripts/db_connection.php';
?>
<?php
$id                 = $_SESSION['id'];
$full_name          = $_SESSION['full_name'];
$profile_picture    = $_SESSION['profile_picture'];

    //Set a profile picture in case that the user didn't has one!
    if (empty($profile_picture)){
        $profile_picture =  "../images/avatars/avatar_01.jpg";
    }



//get the user's data from URL:
//if (isset($_GET['id'])){
    $user_id = '7';

$select_query_user="SELECT * FROM `USER` WHERE `id` = '{$user_id}' ";
$select_result_user = mysqli_query($mysqli, $select_query_user);
if (mysqli_num_rows($select_result_user) > 0 ){
    while ($row = mysqli_fetch_assoc($select_result_user)){
        $first_name_user = $row['first_name'];
        $last_name_user = $row['last_name'];
        $profile_picture_user = $row['profile_picture'];
        $registeration_date_user = $row['register_date'];
    }
    $full_name_user = $first_name_user . " ". $last_name_user;

    //Set a profile picture in case that the user didn't has one!
    if (empty($profile_picture_user)){
        $profile_picture_user =  "../images/avatars/avatar_01.jpg";
    }
}

//}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="../css/vendor/simple-line-icons.css">
	<link rel="stylesheet" href="../css/vendor/tooltipster.css">
	<link rel="stylesheet" href="../css/style.css">
	<!-- favicon -->
	<link rel="icon" href="favicon.ico">
	<title>2D Market | User Profile</title>
</head>
<body>

	<!-- HEADER -->
	<div class="header-wrap">
		<header>
			<!-- LOGO -->
			<a href="index.html">
				<figure class="logo">
					<img src="../images/logo.png" alt="logo">
				</figure>
			</a>
			<!-- /LOGO -->

			<!-- MOBILE MENU HANDLER -->
			<div class="mobile-menu-handler left primary">
				<img src="../images/pull-icon.png" alt="pull-icon">
			</div>
			<!-- /MOBILE MENU HANDLER -->

			<!-- LOGO MOBILE -->
			<a href="index.html">
				<figure class="logo-mobile">
					<img src="../images/logo_mobile.png" alt="logo-mobile">
				</figure>
			</a>
			<!-- /LOGO MOBILE -->

			<!-- MOBILE ACCOUNT OPTIONS HANDLER -->
			<div class="mobile-account-options-handler right secondary">
				<span class="icon-user"></span>
			</div>
			<!-- /MOBILE ACCOUNT OPTIONS HANDLER -->

			<!-- USER BOARD -->
			<div class="user-board">
				<!-- USER QUICKVIEW -->
				<div class="user-quickview">
					<!-- USER AVATAR -->
					<a href="user_dashboard.php">
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
					<!-- SVG ARROW -->
					<svg class="svg-arrow">
						<use href="#svg-arrow"></use>
					</svg>
					<!-- /SVG ARROW -->

					<!-- /USER INFORMATION -->

					<!-- DROPDOWN -->
					<ul class="dropdown small hover-effect closed">
						<li class="dropdown-item">
							<div class="dropdown-triangle"></div>
							<a href="user_dashboard.php">Dashboard</a>
						</li>
						<li class="dropdown-item">
							<a href="dashboard-settings.html">Account Settings</a>
						</li>
                        <li class="dropdown-item">
                            <a STYLE="color: red" href="dashboard-settings.html">Logout</a>
                        </li>
					</ul>
					<!-- /DROPDOWN -->
				</div>
				<!-- /USER QUICKVIEW -->

			</div>
			<!-- /USER BOARD -->
		</header>
	</div>
	<!-- /HEADER -->

	<!-- SIDE MENU -->
	<div id="mobile-menu" class="side-menu left closed">
		<!-- SVG PLUS -->
		<svg class="svg-plus">
			<use href="#svg-plus"></use>
		</svg>
		<!-- /SVG PLUS -->

		<!-- SIDE MENU HEADER -->
		<div class="side-menu-header">
			<figure class="logo small">
				<img src="../images/logo.png" alt="logo">
			</figure>
		</div>
		<!-- /SIDE MENU HEADER -->

		<!-- SIDE MENU TITLE -->
		<p class="side-menu-title">Main Links</p>
		<!-- /SIDE MENU TITLE -->

		<!-- DROPDOWN -->
		<ul class="dropdown dark hover-effect interactive">
			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="index.html">Home</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="how-to-shop.html">How to Shop</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="products.html">Products</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="services.html">Services</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="shop-gridview-v1.html">Online Goods</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item interactive">
				<a href="#">
					Features
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
						<p>Emerald Dragon</p>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="index.html">Homepage V1</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="home-v2.html">Homepage V2</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="itemview-versions.html">Item View Versions</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="shop-gridview-v1.html">Shop Grid View V1</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="shop-gridview-v2.html">Shop Grid View V2</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="shop-listview-v1.html">Shop List View V1</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="shop-listview-v2.html">Shop List View V2</a>
						<!-- PIN -->
						<span class="pin soft-edged primary">hot</span>
						<!-- /PIN -->
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="author-profile.html">Profile Page</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="blog-v1.html">Blog Page V1</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="blog-v2.html">Blog Page V2</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="open-post.html">Open Post</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="forum.html">Forum Board</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="subforum.html">Subforum</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="open-topic.html">Open Topic</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="login-register.html">Login and Register</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="menu-dropdowns.html">Menu and Dropdowns</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<p>Product Pages</p>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="item-v1.html">Item Page V1</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="item-v2.html">Item Page V2</a>
						<!-- PIN -->
						<span class="pin soft-edged secondary">new</span>
						<!-- /PIN -->
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="product-page.html">Product Page</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="auction-page.html">Auction Page</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="service-page.html">Service Page</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="favourites.html">Favourite Products Grid View</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="favourites-listview.html">Favourite Products List View</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="alerts-notifications.html">Alerts &amp; Notifications</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<p>Dashboard</p>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="dashboard-settings.html">Account Settings</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="dashboard-statistics.html">Statistics Page</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="dashboard-statement.html">Sales Statement</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="dashboard-inbox.html">Inbox Page</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="dashboard-openmessage.html">Open Message</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="dashboard-uploaditem.html">Upload Page</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<p>Gamification</p>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="community-badges.html">Author Badges Page</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="badges.html">All Badges (Big and Small)</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="flag-badges.html">Flag Badges (Big and Small)</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="badges-boxes.html">Badge Boxes Versions</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->

					<!-- INNER DROPDOWN ITEM -->
					<li class="inner-dropdown-item">
						<a href="author-badges.html">Public Author Badges</a>
					</li>
					<!-- /INNER DROPDOWN ITEM -->
				</ul>
				<!-- /INNER DROPDOWN -->
			</li>
			<!-- /DROPDOWN ITEM -->
		</ul>
		<!-- /DROPDOWN -->
	</div>
	<!-- /SIDE MENU -->

	<!-- SIDE MENU -->
	<div id="account-options-menu" class="side-menu right closed">
		<!-- SVG PLUS -->
		<svg class="svg-plus">
			<use href="#svg-plus"></use>
		</svg>
		<!-- /SVG PLUS -->

		<!-- SIDE MENU HEADER -->
		<div class="side-menu-header">
			<!-- USER QUICKVIEW -->
			<div class="user-quickview">
				<!-- USER AVATAR -->
				<a href="user_dashboard.php">
				<div class="outer-ring">
					<div class="inner-ring"></div>
					<figure class="user-avatar">
						<img src="<?php echo $profile_picture; ?>" alt="avatar">
					</figure>
				</div>
				</a>
				<!-- /USER AVATAR -->

				<!-- USER INFORMATION -->
				<p class="user-name"><?php echo $full_name ?></p>
				<!-- /USER INFORMATION -->
			</div>
			<!-- /USER QUICKVIEW -->
		</div>
		<!-- /SIDE MENU HEADER -->

		<!-- SIDE MENU TITLE -->
		<p class="side-menu-title">Dashboard</p>
		<!-- /SIDE MENU TITLE -->

		<!-- DROPDOWN -->
		<ul class="dropdown dark hover-effect">
			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="user_dashboard.php">Dashboard</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="dashboard-settings.html">Account Settings</a>
			</li>

            <li class="dropdown-item">
                <a  style="color: #f92552" href="dashboard-settings.html">Logout</a>
            </li>
			<!-- /DROPDOWN ITEM -->

		</ul>
		<!-- /DROPDOWN -->


    </div>
	<!-- /SIDE MENU -->

	<!-- MAIN MENU -->
	<div class="main-menu-wrap">
		<div class="menu-bar">
			<nav>
				<ul class="main-menu">
					<!-- MENU ITEM -->
					<li class="menu-item">
						<a href="index.html">Home</a>
					</li>
					<!-- /MENU ITEM -->

					<!-- MENU ITEM -->
					<li class="menu-item">
						<a href="how-to-shop.html">How to shop</a>
					</li>
					<!-- /MENU ITEM -->

					<!-- MENU ITEM -->
					<li class="menu-item">
						<a href="products.html">Products</a>
					</li>
					<!-- /MENU ITEM -->

					<!-- MENU ITEM -->
					<li class="menu-item">
						<a href="services.html">Services</a>
					</li>
					<!-- /MENU ITEM -->

					<!-- MENU ITEM -->
					<li class="menu-item">
						<a href="shop-gridview-v1.html">Online goods</a>
					</li>
					<!-- /MENU ITEM -->

					<!-- MENU ITEM -->
					<li class="menu-item sub">
						<a href="#">
							Features
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</a>
						<div class="content-dropdown">
							<!-- FEATURE LIST BLOCK -->
							<div class="feature-list-block">
								<h6 class="feature-list-title">Emerald Dragon</h6>
								<hr class="line-separator">
								<!-- FEATURE LIST -->
								<ul class="feature-list">
									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="index.html">Homepage V1</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="home-v2.html">Homepage V2</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="itemview-versions.html">Item View Versions</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="shop-gridview-v1.html">Shop Grid View V1</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="shop-gridview-v2.html">Shop Grid View V2</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="shop-listview-v1.html">Shop List View V1</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="shop-listview-v2.html">
											Shop List View V2
											<!-- PIN -->
											<span class="pin primary">hot</span>
											<!-- /PIN -->
										</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<li class="feature-list-item">
										<a href="author-profile.html">Profile Page</a>
									</li>
									<!-- /FEATURE LIST ITEM -->
								</ul>
								<!-- /FEATURE LIST -->

								<!-- FEATURE LIST -->
								<ul class="feature-list">
									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="blog-v1.html">Blog Page V1</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="blog-v2.html">Blog Page V2</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="open-post.html">Open Post</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="forum.html">Forum Board</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="subforum.html">Subforum</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="open-topic.html">Open Topic</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="login-register.html">Login and Register</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="menu-dropdowns.html">Menu and Dropdowns</a>
									</li>
									<!-- /FEATURE LIST ITEM -->
								</ul>
								<!-- /FEATURE LIST -->
							</div>
							<!-- /FEATURE LIST BLOCK -->

							<!-- FEATURE LIST BLOCK -->
							<div class="feature-list-block">
								<h6 class="feature-list-title">Product Pages</h6>
								<hr class="line-separator">
								<!-- FEATURE LIST -->
								<ul class="feature-list">
									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="item-v1.html">Item Page V1</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="item-v2.html">
											Item Page V2
											<!-- PIN -->
											<span class="pin secondary">new</span>
											<!-- /PIN -->
										</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="product-page.html">Product Page</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="auction-page.html">Auction Page</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="service-page.html">Service Page</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="favourites.html">Favourite Products Grid View</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="favourites-listview.html">Favourite Products List View</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="alerts-notifications.html">Alerts &amp; Notifications</a>
									</li>
									<!-- /FEATURE LIST ITEM -->
								</ul>
								<!-- /FEATURE LIST -->
							</div>
							<!-- /FEATURE LIST BLOCK -->

							<!-- FEATURE LIST BLOCK -->
							<div class="feature-list-block">
								<h6 class="feature-list-title">Dashboard</h6>
								<hr class="line-separator">
								<!-- FEATURE LIST -->
								<ul class="feature-list">
									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="dashboard-settings.html">Account Settings</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="dashboard-statistics.html">Statistics Page</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="dashboard-statement.html">Sales Statement</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="dashboard-inbox.html">Inbox Page</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="dashboard-openmessage.html">Open Message</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="dashboard-uploaditem.html">Upload Page</a>
									</li>
									<!-- /FEATURE LIST ITEM -->
								</ul>
								<!-- /FEATURE LIST -->
							</div>
							<!-- /FEATURE LIST BLOCK -->

							<!-- FEATURE LIST BLOCK -->
							<div class="feature-list-block">
								<h6 class="feature-list-title">Gamification</h6>
								<hr class="line-separator">
								<!-- FEATURE LIST -->
								<ul class="feature-list">
									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="community-badges.html">Author Badges Page</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="badges.html">All Badges (Big and Small)</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="flag-badges.html">Flag Badges (Big and Small)</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="badges-boxes.html">Badge Boxes Versions</a>
									</li>
									<!-- /FEATURE LIST ITEM -->

									<!-- FEATURE LIST ITEM -->
									<li class="feature-list-item">
										<a href="author-badges.html">Public Author Badges</a>
									</li>
									<!-- /FEATURE LIST ITEM -->
								</ul>
								<!-- /FEATURE LIST -->
							</div>
							<!-- /FEATURE LIST BLOCK -->
						</div>
					</li>
					<!-- /MENU ITEM -->
				</ul>
			</nav>
			<form class="search-form">
				<input type="text" class="rounded" name="search" id="search_products" placeholder="Search products here...">
				<input type="image" src="../images/search-icon.png" alt="search-icon">
			</form>
		</div>
	</div>
	<!-- /MAIN MENU -->

	<!-- SECTION HEADLINE -->
	<div class="section-headline-wrap">
		<div class="section-headline">
			<h2><?php echo $full_name_user; ?>'s Profile</h2>
		</div>
	</div>
	<!-- /SECTION HEADLINE -->

	<!-- AUTHOR PROFILE BANNER -->
	<div class="author-profile-banner"></div>
	<!-- /AUTHOR PROFILE BANNER -->

	<!-- AUTHOR PROFILE META -->
	<div class="author-profile-meta-wrap">
		<div class="author-profile-meta">
			<!-- AUTHOR PROFILE INFO -->
			<div class="author-profile-info">
				<!-- AUTHOR PROFILE INFO ITEM -->
				<div class="author-profile-info-item">
					<p class="text-header">Member Since:</p>
					<p><?php echo $registeration_date_user;?></p>
				</div>
				<!-- /AUTHOR PROFILE INFO ITEM -->

				<!-- AUTHOR PROFILE INFO ITEM -->
				<div class="author-profile-info-item">
					<p class="text-header">Total Advertisements:</p>
					<p>Coming</p>
				</div>
				<!-- /AUTHOR PROFILE INFO ITEM -->
			</div>
			<!-- /AUTHOR PROFILE INFO -->
		</div>
	</div>
	<!-- /AUTHOR PROFILE META -->

	<!-- SECTION -->
	<div class="section-wrap">
		<div class="section overflowable">
			<!-- SIDEBAR -->
			<div class="sidebar left author-profile">
				<!-- SIDEBAR ITEM -->
				<div class="sidebar-item author-bio">
					<!-- USER AVATAR -->
						<figure class="user-avatar medium">
							<img src="<?php echo $profile_picture_user;?>" alt="">
						</figure>
					<!-- /USER AVATAR -->
					<p class="text-header"><?php echo $full_name_user ; ?></p>
					<!-- SHARE LINKS -->
<!--					<ul class="share-links">-->
<!--						<li><a href="#" class="fb"></a></li>-->
<!--						<li><a href="#" class="twt"></a></li>-->
<!--						<li><a href="#" class="db"></a></li>-->
<!--					</ul>-->
					<!-- /SHARE LINKS -->
<!--					<a href="#" class="button mid dark spaced">Add to <span class="primary">Followers</span></a>-->
<!--					<a href="#" class="button mid dark-light">Send a Private Message</a>-->
				</div>
				<!-- /SIDEBAR ITEM -->

				<!-- DROPDOWN -->
				<ul class="dropdown hover-effect">
					<li class="dropdown-item active">
						<a href="user_profile.php">Profile Page</a>
					</li>
					<li class="dropdown-item">
						<a href="author-profile-reviews.html">Customer Reviews</a>
					</li>
<!--					<li class="dropdown-item">-->
<!--						<a href="author-badges.html">Author Badges (16)</a>-->
<!--					</li>-->
				</ul>
				<!-- /DROPDOWN -->

				<!-- SIDEBAR ITEM -->
				<div class="sidebar-item author-reputation full">
					<h4>Author's Reputation</h4>
					<hr class="line-separator">
					<!-- PIE CHART -->
					<div class="pie-chart pie-chart1">
						<p class="text-header percent">86<span>%</span></p>
						<p class="text-header percent-info">Recommended</p>
						<!-- RATING -->
						<ul class="rating">
							<li class="rating-item">
								<!-- SVG STAR -->
								<svg class="svg-star">
									<use xlink:href="#svg-star"></use>
								</svg>
								<!-- /SVG STAR -->
							</li>
							<li class="rating-item">
								<!-- SVG STAR -->
								<svg class="svg-star">
									<use xlink:href="#svg-star"></use>
								</svg>
								<!-- /SVG STAR -->
							</li>
							<li class="rating-item">
								<!-- SVG STAR -->
								<svg class="svg-star">
									<use xlink:href="#svg-star"></use>
								</svg>
								<!-- /SVG STAR -->
							</li>
							<li class="rating-item">
								<!-- SVG STAR -->
								<svg class="svg-star">
									<use xlink:href="#svg-star"></use>
								</svg>
								<!-- /SVG STAR -->
							</li>
							<li class="rating-item empty">
								<!-- SVG STAR -->
								<svg class="svg-star">
									<use xlink:href="#svg-star"></use>
								</svg>
								<!-- /SVG STAR -->
							</li>
						</ul>
						<!-- /RATING -->
					</div>
					<!-- /PIE CHART -->
					<a href="#" class="button mid dark-light">Read all the Customer Reviews</a>
				</div>
				<!-- /SIDEBAR ITEM -->
			</div>
			<!-- /SIDEBAR -->

			<!-- CONTENT -->
			<div class="content right">
				<!-- HEADLINE -->
				<div class="headline primary">
					<h4><span style="color: #0ae7c2"> <?php echo $first_name_user; ?></span> Items</h4>
					<!-- VIEW SELECTORS -->
					<div class="view-selectors">
						<a href="author-profile-items.html" class="view-selector grid active"></a>
						<a href="author-profile-items-listview.html" class="view-selector list"></a>
					</div>
					<!-- /VIEW SELECTORS -->
					<form id="shop_filter_form" name="shop_filter_form">
						<label for="price_filter" class="select-block">
							<select name="price_filter" id="price_filter">
								<option value="0">Price (High to Low)</option>
								<option value="1">Price (Low to High)</option>
							</select>
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</label>
						<label for="itemspp_filter" class="select-block">
							<select name="itemspp_filter" id="itemspp_filter">
								<option value="0">12 Items Per Page</option>
								<option value="1">6 Items Per Page</option>
							</select>
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</label>
					</form>
					<div class="clearfix"></div>
				</div>
				<!-- /HEADLINE -->

				<!-- PRODUCT LIST -->
				<div class="product-list grid column3-4-wrap">
					<!-- PRODUCT ITEM -->
                    <?php

                        $select_query_ad = "SELECT * FROM `ADVERTISEMENT` WHERE `USER_id` = '{$user_id}'";
                        $select_result_ad = mysqli_query($mysqli,$select_query_ad);
                        if (mysqli_num_rows($select_result_ad) > 0 ) {
                            while ($row = mysqli_fetch_assoc($select_result_ad)) {
                                $product_id = $row['PRODUCT_id'];
                            }

                            echo $product_id;
                            $select_query_pr = "SELECT * FROM `PRODUCT` WHERE id ='{$product_id}'";
                            $select_result_pr = mysqli_query($mysqli, $select_query_pr);
                            if (mysqli_num_rows($select_result_pr) > 0) {
                                while ($row = mysqli_fetch_assoc($select_result_pr)) {
                                    $product_id = $row['id'];
                                    $product_name = $row['name'];
                                    $product_price = $row['price'];
                                    $product_description = $row['description'];
                                    $product_publication_date = $row['publication_date'];
                                    $product_delivery_type = $row['delivery_type'];
                                    $product_selling_type = $row['selling_type'];
                                    $product_status = $row['status'];
                                }

                            }
                        }


                    ?>
					<div class="product-item column">
						<!-- PRODUCT PREVIEW ACTIONS -->
						<div class="product-preview-actions">
							<!-- PRODUCT PREVIEW IMAGE -->
							<figure class="product-preview-image">
								<img src="../images/items/miniverse_m.jpg" alt="product-image">
							</figure>
							<!-- /PRODUCT PREVIEW IMAGE -->

							<!-- PREVIEW ACTIONS -->
							<div class="preview-actions">
								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="item-v1.html">
										<div class="circle tiny primary">
											<span class="icon-tag"></span>
										</div>
									</a>
									<a href="item-v1.html">
										<p>Go to Item</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->

								<!-- PREVIEW ACTION -->
								<div class="preview-action">
									<a href="#">
										<div class="circle tiny secondary">
											<span class="icon-heart"></span>
										</div>
									</a>
									<a href="#">
										<p>Favourites +</p>
									</a>
								</div>
								<!-- /PREVIEW ACTION -->
							</div>
							<!-- /PREVIEW ACTIONS -->
						</div>
						<!-- /PRODUCT PREVIEW ACTIONS -->

						<!-- PRODUCT INFO -->
						<div class="product-info">
							<a href="item-v1.html">
								<p class="text-header"><?php echo $product_name; ?></p>
							</a>
							<p class="product-description"><?php echo $product_description; ?></p>
							<a href="shop-gridview-v1.html">
								<p class="category primary"><?php echo $product_selling_type; ?></p>
							</a>
							<p class="price"><span>$</span><?php echo $product_price; ?></p>
						</div>
						<!-- /PRODUCT INFO -->
						<hr class="line-separator">

						<!-- USER RATING -->
						<div class="user-rating">
							<a href="author-profile.html">
								<figure class="user-avatar small">
									<img src="<?php echo $profile_picture_user; ?>" alt="user-avatar">
								</figure>
							</a>
							<a href="author-profile.html">
								<p class="text-header tiny"><?php echo $full_name_user;?></p>
							</a>
							<ul class="rating tooltip" title="Author's Reputation">
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
								<li class="rating-item">
									<!-- SVG STAR -->
									<svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
									<!-- /SVG STAR -->
								</li>
							</ul>
						</div>
						<!-- /USER RATING -->
					</div>
					<!-- /PRODUCT ITEM -->
				</div>
				<!-- /PRODUCT LIST -->

				<div class="clearfix"></div>

				<!-- PAGER -->
				<div class="pager primary">
					<div class="pager-item active"><p>1</p></div>
					<div class="pager-item "><p>2</p></div>
					<div class="pager-item"><p>3</p></div>
					<div class="pager-item"><p>...</p></div>
					<div class="pager-item"><p>17</p></div>
				</div>
				<!-- /PAGER -->
			</div>
			<!-- CONTENT -->

			<div class="clearfix"></div>
		</div>
	</div>
	<!-- /SECTION -->

	<!-- FOOTER -->
	<footer>
		<!-- FOOTER TOP -->
		<div id="footer-top-wrap">
			<div id="footer-top">
				<!-- COMPANY INFO -->
				<div class="company-info">
					<figure class="logo small">
						<img src="../images/logo_small.png" alt="logo-small">
					</figure>
					<p>Lorem ipsum dolor sit amet, consectetur isicing elit, sed do eiusmod tempor incididunt ut labo dolore magna ua.</p>
					<ul class="company-info-list">
						<li class="company-info-item">
							<span class="icon-present"></span>
							<p><span>850.296</span> Products</p>
						</li>
						<li class="company-info-item">
							<span class="icon-energy"></span>
							<p><span>1.207.300</span> Members</p>
						</li>
						<li class="company-info-item">
							<span class="icon-user"></span>
							<p><span>74.059</span> Sellers</p>
						</li>
					</ul>
					<!-- SOCIAL LINKS -->
					<ul class="social-links">
						<li class="social-link fb">
							<a href="#"></a>
						</li>
						<li class="social-link twt">
							<a href="#"></a>
						</li>
						<li class="social-link db">
							<a href="#"></a>
						</li>
						<li class="social-link rss">
							<a href="#"></a>
						</li>
					</ul>
					<!-- /SOCIAL LINKS -->
				</div>
				<!-- /COMPANY INFO -->

				<!-- LINK INFO -->
				<div class="link-info">
					<p class="footer-title">Our Community</p>
					<!-- LINK LIST -->
					<ul class="link-list">
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">How to Join us</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">Buying and Selling</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="forum.html">Emerald Forum</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="blog-v1.html">Emerald Blog</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">Free Goods</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">Job Oportunities</a>
					</li>
					</ul>
					<!-- /LINK LIST -->
				</div>
				<!-- /LINK INFO -->

				<!-- LINK INFO -->
				<div class="link-info">
					<p class="footer-title">Member Links</p>
					<!-- LINK LIST -->
					<ul class="link-list">
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">Partner Program</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">Starting a Shop</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">Purchase Credits</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">Withdrawals</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">World Meetings</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">How to Auction</a>
						</li>
					</ul>
					<!-- /LINK LIST -->
				</div>
				<!-- /LINK INFO -->

				<!-- LINK INFO -->
				<div class="link-info">
					<p class="footer-title">Help and FAQs</p>
					<!-- LINK LIST -->
					<ul class="link-list">
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">Help Center</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">FAQs</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">Terms and Conditions</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">Products Licenses</a>
						</li>
						<li class="link-item">
							<div class="bullet"></div>
							<a href="#">Security Information</a>
						</li>
					</ul>
					<!-- /LINK LIST -->
				</div>
				<!-- /LINK INFO -->

				<!-- TWITTER FEED -->
				<div class="twitter-feed">
					<p class="footer-title">Twitter Feed</p>
					<!-- TWEETS -->
					<ul class="tweets"></ul>
					<!-- /TWEETS -->
				</div>
				<!-- /TWITTER FEED -->
			</div>
		</div>
		<!-- /FOOTER TOP -->

		<!-- FOOTER BOTTOM -->
		<div id="footer-bottom-wrap">
			<div id="footer-bottom">
				<p><span>&copy;</span><a href="index.html">Emerald Dragon</a> Template - All Rights Reserved 2015</p>
			</div>
		</div>
		<!-- /FOOTER BOTTOM -->
	</footer>
	<!-- /FOOTER -->

	<div class="shadow-film closed"></div>

<!-- SVG ARROW -->
<svg style="display: none;">	
	<symbol id="svg-arrow" viewBox="0 0 3.923 6.64014" preserveAspectRatio="xMinYMin meet">
		<path d="M3.711,2.92L0.994,0.202c-0.215-0.213-0.562-0.213-0.776,0c-0.215,0.215-0.215,0.562,0,0.777l2.329,2.329
			L0.217,5.638c-0.215,0.215-0.214,0.562,0,0.776c0.214,0.214,0.562,0.215,0.776,0l2.717-2.718C3.925,3.482,3.925,3.135,3.711,2.92z"/>
	</symbol>
</svg>
<!-- /SVG ARROW -->

<!-- SVG STAR -->
<svg style="display: none;">
	<symbol id="svg-star" viewBox="0 0 10 10" preserveAspectRatio="xMinYMin meet">	
		<polygon points="4.994,0.249 6.538,3.376 9.99,3.878 7.492,6.313 8.082,9.751 4.994,8.129 1.907,9.751 
	2.495,6.313 -0.002,3.878 3.45,3.376 "/>
	</symbol>
</svg>
<!-- /SVG STAR -->

<!-- SVG PLUS -->
<svg style="display: none;">
	<symbol id="svg-plus" viewBox="0 0 13 13" preserveAspectRatio="xMinYMin meet">
		<rect x="5" width="3" height="13"/>
		<rect y="5" width="13" height="3"/>
	</symbol>
</svg>
<!-- /SVG PLUS -->

<!-- jQuery -->
<script src="../js/vendor/jquery-3.1.0.min.js"></script>
<!-- Tooltipster -->
<script src="../js/vendor/jquery.tooltipster.min.js"></script>
<!-- Tweet -->
<script src="../js/vendor/twitter/jquery.tweet.min.js"></script>
<!-- Side Menu -->
<script src="../js/side-menu.js"></script>
<!-- Tooltip -->
<script src="../js/tooltip.js"></script>
<!-- User Quickview Dropdown -->
<script src="../js/user-board.js"></script>
<!-- XM PieChart -->
<script src="../js/vendor/jquery.xmpiechart.min.js"></script>
<!-- Author Profile -->
<script src="../js/author-profile.js"></script>
<!-- Footer -->
<script src="../js/footer.js"></script>
</body>
</html>