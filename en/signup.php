<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="../css/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- favicon -->
    <link rel="icon" href="favicon.ico">
    <title>Emerald Dragon | Login and Register</title>
</head>
<body>

<!-- HEADER -->
<div class="header-wrap">
    <header>
        <!-- LOGO -->
        <a href="index.html">
            <figure class="logo">
                <img src="images/logo.png" alt="logo">
            </figure>
        </a>
        <!-- /LOGO -->

        <!-- MOBILE MENU HANDLER -->
        <div class="mobile-menu-handler left primary">
            <img src="images/pull-icon.png" alt="pull-icon">
        </div>
        <!-- /MOBILE MENU HANDLER -->

        <!-- LOGO MOBILE -->
        <a href="index.html">
            <figure class="logo-mobile">
                <img src="images/logo_mobile.png" alt="logo-mobile">
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
                <a href="author-profile.html">
                    <div class="outer-ring">
                        <div class="inner-ring"></div>
                        <figure class="user-avatar">
                            <img src="images/avatars/avatar_01.jpg" alt="avatar">
                        </figure>
                    </div>
                </a>
                <!-- /USER AVATAR -->

                <!-- USER INFORMATION -->
                <p class="user-name">Johnny Fisher</p>
                <!-- SVG ARROW -->
                <svg class="svg-arrow">
                    <use xlink:href="#svg-arrow"></use>
                </svg>
                <!-- /SVG ARROW -->
                <p class="user-money">$745.00</p>
                <!-- /USER INFORMATION -->

                <!-- DROPDOWN -->
                <ul class="dropdown small hover-effect closed">
                    <li class="dropdown-item">
                        <div class="dropdown-triangle"></div>
                        <a href="author-profile.html">Profile Page</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="dashboard-settings.html">Account Settings</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="dashboard-purchases.html">Your Purchases</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="dashboard-statement.html">Sales Statement</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="dashboard-buycredits.html">Buy Credits</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="dashboard-withdrawals.html">Withdrawals</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="dashboard-uploaditem.html">Upload Item</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="dashboard-manageitems.html">Manage Items</a>
                    </li>
                </ul>
                <!-- /DROPDOWN -->
            </div>
            <!-- /USER QUICKVIEW -->

            <!-- ACCOUNT INFORMATION -->
            <div class="account-information">
                <a href="favourites.html">
                    <div class="account-wishlist-quickview">
                        <span class="icon-heart"></span>
                    </div>
                </a>
                <div class="account-cart-quickview">
						<span class="icon-present">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
                            <!-- /SVG ARROW -->
						</span>

                    <!-- PIN -->
                    <span class="pin soft-edged secondary">7</span>
                    <!-- /PIN -->

                    <!-- DROPDOWN CART -->
                    <ul class="dropdown cart closed">
                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="item-v1.html" class="link-to"></a>
                            <!-- SVG PLUS -->
                            <svg class="svg-plus">
                                <use xlink:href="#svg-plus"></use>
                            </svg>
                            <!-- /SVG PLUS -->
                            <div class="dropdown-triangle"></div>
                            <figure class="product-preview-image tiny">
                                <img src="images/items/pixel_s.jpg" alt="">
                            </figure>
                            <p class="text-header tiny">Pixel Diamond Gaming Shop</p>
                            <p class="category tiny primary">Shopify</p>
                            <p class="price tiny"><span>$</span>86</p>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="item-v1.html" class="link-to"></a>
                            <!-- SVG PLUS -->
                            <svg class="svg-plus">
                                <use xlink:href="#svg-plus"></use>
                            </svg>
                            <!-- /SVG PLUS -->
                            <figure class="product-preview-image tiny">
                                <img src="images/items/monsters_s.jpg" alt="">
                            </figure>
                            <p class="text-header tiny">Little Monsters - 40 Pack Button Badge Maker</p>
                            <p class="category tiny primary">Graphics</p>
                            <p class="price tiny"><span>$</span>10</p>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="item-v1.html" class="link-to"></a>
                            <!-- SVG PLUS -->
                            <svg class="svg-plus">
                                <use xlink:href="#svg-plus"></use>
                            </svg>
                            <!-- /SVG PLUS -->
                            <figure class="product-preview-image tiny">
                                <img src="images/items/flat_s.jpg" alt="">
                            </figure>
                            <p class="text-header tiny">Flatland - Hero Image Composer</p>
                            <p class="category tiny primary">Shopify</p>
                            <p class="price tiny"><span>$</span>12</p>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <p class="text-header tiny">Total</p>
                            <p class="price"><span>$</span>108.00</p>
                            <a href="cart.html" class="button primary half">Go to Cart</a>
                            <a href="checkout.html" class="button secondary half">Go to Checkout</a>
                        </li>
                        <!-- /DROPDOWN ITEM -->
                    </ul>
                    <!-- /DROPDOWN CART -->
                </div>
                <div class="account-email-quickview">
						<span class="icon-envelope">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
                            <!-- /SVG ARROW -->
						</span>

                    <!-- PIN -->
                    <span class="pin soft-edged secondary">!</span>
                    <!-- /PIN -->

                    <!-- DROPDOWN NOTIFICATIONS -->
                    <ul class="dropdown notifications closed">
                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <div class="dropdown-triangle"></div>
                            <a href="dashboard-openmessage.html" class="link-to"></a>
                            <figure class="user-avatar">
                                <img src="images/avatars/avatar_06.jpg" alt="">
                            </figure>
                            <p class="text-header tiny"><span>Sarah-Imaginarium</span></p>
                            <p class="subject">Product Question</p>
                            <p class="timestamp">May 18th, 2014</p>
                            <span class="notification-type secondary-new icon-envelope"></span>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="dashboard-openmessage.html" class="link-to"></a>
                            <figure class="user-avatar">
                                <img src="images/avatars/avatar_04.jpg" alt="">
                            </figure>
                            <p class="text-header tiny"><span>Red Thunder Graphics</span></p>
                            <p class="subject">Support Inquiry</p>
                            <p class="timestamp">May 5th, 2014</p>
                            <span class="notification-type icon-envelope-open"></span>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="dashboard-openmessage.html" class="link-to"></a>
                            <figure class="user-avatar">
                                <img src="images/avatars/avatar_07.jpg" alt="">
                            </figure>
                            <p class="text-header tiny"><span>Twisted Themes</span></p>
                            <p class="subject">Collaboration</p>
                            <p class="timestamp">Feb 24th, 2014</p>
                            <span class="notification-type secondary-new icon-envelope"></span>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="dashboard-openmessage.html" class="link-to"></a>
                            <figure class="user-avatar">
                                <img src="images/avatars/avatar_08.jpg" alt="">
                            </figure>
                            <p class="text-header tiny"><span>GregSpiegel1820</span></p>
                            <p class="subject">How to Install the Theme...</p>
                            <p class="timestamp">Jan 3rd, 2014</p>
                            <span class="notification-type icon-action-undo"></span>
                            <a href="dashboard-inbox.html" class="button secondary">View all Messages</a>
                        </li>
                        <!-- /DROPDOWN ITEM -->
                    </ul>
                    <!-- /DROPDOWN NOTIFICATIONS -->
                </div>
                <div class="account-settings-quickview">
						<span class="icon-settings">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
                            <!-- /SVG ARROW -->
						</span>

                    <!-- PIN -->
                    <span class="pin soft-edged primary">49</span>
                    <!-- /PIN -->

                    <!-- DROPDOWN NOTIFICATIONS -->
                    <ul class="dropdown notifications no-hover closed">
                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <div class="dropdown-triangle"></div>
                            <a href="author-profile.html">
                                <figure class="user-avatar">
                                    <img src="images/avatars/avatar_02.jpg" alt="">
                                </figure>
                            </a>
                            <p class="title">
                                <a href="author-profile.html"><span>MeganV.</span></a> added
                                <a href="item-v1.html"><span>Pixel Diamond Gaming Shop</span></a> to favourites
                            </p>
                            <p class="timestamp">2 Hours ago</p>
                            <span class="notification-type primary-new icon-heart"></span>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="author-profile.html">
                                <figure class="user-avatar">
                                    <img src="images/avatars/avatar_03.jpg" alt="">
                                </figure>
                            </a>
                            <p class="title">
                                <a href="author-profile.html"><span>Thomas_Ket</span></a> wrote you an
                                <a href="author-reputation.html"><span>Author’s Reputation</span></a>
                            </p>
                            <p class="timestamp">17 Hours ago</p>
                            <span class="notification-type icon-star"></span>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="author-profile.html">
                                <figure class="user-avatar">
                                    <img src="images/avatars/avatar_04.jpg" alt="">
                                </figure>
                            </a>
                            <p class="title">
                                <a href="author-profile.html"><span>Red Thunder Graphics</span></a> commented on
                                <a href="item-v1.html"><span>3D Layers - Web Mockup</span></a>
                            </p>
                            <p class="timestamp">8 Days Ago</p>
                            <span class="notification-type primary-new icon-bubble"></span>
                        </li>
                        <!-- /DROPDOWN ITEM -->

                        <!-- DROPDOWN ITEM -->
                        <li class="dropdown-item">
                            <a href="author-profile.html">
                                <figure class="user-avatar">
                                    <img src="images/avatars/avatar_05.jpg" alt="">
                                </figure>
                            </a>
                            <p class="title">
                                <a href="author-profile.html"><span>DaBebop</span></a> purchased
                                <a href="item-v1.html"><span>Miniverse - Hero Image Composer</span></a>
                            </p>
                            <p class="timestamp">1 Week ago</p>
                            <span class="notification-type icon-tag"></span>
                            <a href="dashboard-notifications.html" class="button primary">View all Notifications</a>
                        </li>
                        <!-- /DROPDOWN ITEM -->
                    </ul>
                    <!-- /DROPDOWN NOTIFICATIONS -->
                </div>
            </div>
            <!-- /ACCOUNT INFORMATION -->

            <!-- ACCOUNT ACTIONS -->
            <div class="account-actions">
                <a href="#" class="button primary">Become a Seller</a>
                <a href="#" class="button secondary">Logout</a>
            </div>
            <!-- /ACCOUNT ACTIONS -->
        </div>
        <!-- /USER BOARD -->
    </header>
</div>
<!-- /HEADER -->

<!-- SIDE MENU -->
<div id="mobile-menu" class="side-menu left closed">
    <!-- SVG PLUS -->
    <svg class="svg-plus">
        <use xlink:href="#svg-plus"></use>
    </svg>
    <!-- /SVG PLUS -->

    <!-- SIDE MENU HEADER -->
    <div class="side-menu-header">
        <figure class="logo small">
            <img src="images/logo.png" alt="logo">
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
                        <img src="images/avatars/avatar_01.jpg" alt="avatar">
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
    <ul class="dropdown dark hover-effect">
        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-notifications.html">Notifications</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-inbox.html">Messages</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="cart.html">Your Cart</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="favourites.html">Favourites</a>
        </li>
        <!-- /DROPDOWN ITEM -->
    </ul>
    <!-- /DROPDOWN -->

    <!-- SIDE MENU TITLE -->
    <p class="side-menu-title">Dashboard</p>
    <!-- /SIDE MENU TITLE -->

    <!-- DROPDOWN -->
    <ul class="dropdown dark hover-effect">
        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="author-profile.html">Profile Page</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-settings.html">Account Settings</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-purchases.html">Your Purchases</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-statement.html">Sales Statement</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-buycredits.html">Buy Credits</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-withdrawals.html">Withdrawals</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-uploaditem.html">Upload Item</a>
        </li>
        <!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
        <li class="dropdown-item">
            <a href="dashboard-manageitems.html">Manage Items</a>
        </li>
        <!-- /DROPDOWN ITEM -->
    </ul>
    <!-- /DROPDOWN -->

    <a href="#" class="button medium secondary">Logout</a>
    <a href="#" class="button medium primary">Become a Seller</a>
</div>
<!-- /SIDE MENU -->



<!-- SECTION HEADLINE -->
<div class="section-headline-wrap">
    <div class="section-headline">
        <h2>Login and Register Boxes</h2>
        <p>Home<span class="separator">/</span><span class="current-section">Boxes</span></p>
    </div>
</div>
<!-- /SECTION HEADLINE -->

<!-- SECTION -->
<div class="section-wrap">
    <div class="section demo">

        <!-- FORM REGISTRATION-->
        <div class="form-popup">
            <!-- CLOSE BTN -->


            <!-- FORM POPUP CONTENT -->
            <div class="form-popup-content">
                <h4 class="popup-title">Register Account</h4>
                <!-- LINE SEPARATOR -->
                <hr class="line-separator">
                <!-- /LINE SEPARATOR -->
                <form id="register-form3" action="../scripts/registration.php" method="post">
                    <label for="email_address4" class="rl-label required">Email Address</label>
                    <input type="email" id="email_address4" name="email" class="invalid" placeholder="Enter your email address here...">
                    <label for="firstname" class="rl-label">Firstname</label>
                    <input type="text" id="firstname" name="first_name" placeholder="Enter your firstname here...">
                    <label for="lastname" class="rl-label">Lastname</label>
                    <input type="text" id="lastname" name="last_name" placeholder="Enter your lastname here...">
                    <label for="username_reg" class="rl-label">Username</label>
                    <input type="text" id="username_reg" name="username" placeholder="Enter your username here...">
                    <label for="password_reg" class="rl-label required">Password</label>
                    <input type="password" id="password_reg" name="password" placeholder="Enter your password here...">
                    <label for="repeat_password" class="rl-label required">Repeat Password</label>
                    <input type="password" id="repeat_password" name="repeat_password" placeholder="Repeat your password here...">
                    <label for="tel_number" class="rl-label">Telephone</label>
                    <input type="number" id="tel_number" name="tel_number" placeholder="Enter your telephone Number here...">
                    <p class="highlighted" style="display: none;"><span>Sorry!</span> That email is already registered</p>
                    <button class="button mid dark" name="submit">Register <span class="primary">Now!</span></button>
                </form>
            </div>
            <!-- /FORM POPUP CONTENT -->
        </div>
        <!-- /FORM POPUP -->


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
                    <img src="images/logo_small.png" alt="logo-small">
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
<!-- Tweet -->
<script src="../js/vendor/twitter/jquery.tweet.min.js"></script>
<!-- Side Menu -->
<script src="../js/side-menu.js"></script>
<!-- User Quickview Dropdown -->
<script src="../js/user-board.js"></script>
<!-- Footer -->
<script src="../js/footer.js"></script>
</body>
</html>