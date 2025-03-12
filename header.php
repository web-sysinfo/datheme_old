<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="keywords"
		content="corporate agency, digital agency, digital marketing, marketing, online marketing html template, seo, seo agency, seo html template, social media marketing, shop, advertisement, advertising agency, advertising html template, business, business agency, business html template, company, company agency">
	<meta name="description"
		content="Seom – is a clean, modern and responsive design that let you to build an exclusive website for corporate agency, digital agency, digital marketing, marketing, online marketing html template, seo, seo agency, seo html template, social media marketing, shop, advertisement, advertising agency, advertising html template, business, business agency, business html template, company, company agency websites.">
	<title><?php wp_title( '-', true, 'right' ); bloginfo('name'); if(is_front_page()){ _e( ' - ' ); bloginfo('description'); }  ?></title>
	<meta property="og:site_name" content="Digital Azadi">
	<meta property="og:url" content="">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Digital Azadi">
	<meta name='og:image' content='images/assets/ogg.png'>
	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- For Window Tab Color -->
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#913BFF">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#913BFF">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#913BFF">

	<!-- <link rel="manifest" href="site.webmanifest" /> -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo bloginfo('template_directory'); ?>/assets/img/favicon.webp" />
	<!-- Place favicon.ico in the root directory -->

	<!-- CSS here -->
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/css/general-sans.css" />
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/fonts/bootstrap-icons.css" />
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/css/animate.min.css" />
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/css/slick.css" />
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/css/magnific-popup.css" />
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/css/aos.css" />
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/css/spacing.css" />
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/assets/css/main.css" />

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="main-page-wrapper">
		<!--[if lte IE 9]> <p class="browserupgrade"> You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security. </p> <![endif]-->
		<!-- Add your site or application content here -->
		<!-- preloader start -->
		<div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="icon"><img src="<?php __(bloginfo('template_directory')); ?>/assets/img/favicon.webp" alt="" class="m-auto d-block">
				</div>
			</div>
		</div>
		<!-- preloader end  -->
		<!-- offcanvas start  -->
		<div class="offcanvas offcanvas-top theme-bg" tabindex="-1" id="offcanvasTop">
			<div class="offcanvas-header">
				<a data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="fas fa-times search-close" id="search-close"></i>
				</a>
			</div>
			<div class="offcanvas-body">
				<!-- Fullscreen search -->
				<div class="search-wrap">
					<form method="get">
						<input type="search" class="main-search-input" placeholder="Search Your Keyword...">
					</form>
				</div>
				<!-- end fullscreen search -->
			</div>
		</div>
		<!-- offcanvas end  -->

		<!-- shopping-cart-bar start -->
		<div class="cart-menu-right cart-style-1 white-bg">
			<div class="close-icon float-right">
				<a href="javascript:void(0);"><i class="bi bi-x"></i></a>
			</div>
			<div class="dropdown-cart-products">
				<div class="product">
					<div class="product__cart-details">
						<h5 class="product-title">
							<a href="shop.html">Best color ful Lamp for ceiling</a>
						</h5>

						<span class="cart-product-info">
							<span class="cart-product-qty">1</span>
							x $84.00
						</span>
					</div>

					<figure class="product__image-container">
						<a href="shop.html" class="product-img">
							<img src="<?php __(bloginfo('template_directory')); ?>/assets/img/product/cart/product-01.jpg" alt="product">
						</a>
					</figure>
					<a href="#" class="remove-btn" title="Product remove"><i class="fal fa-times"></i></a>
				</div>
				<div class="product">
					<div class="product__cart-details">
						<h5 class="product-title">
							<a href="shop.html">Love color Table Lamp for room</a>
						</h5>

						<span class="cart-product-info">
							<span class="cart-product-qty">1</span>
							x $84.00
						</span>
					</div>

					<figure class="product__image-container">
						<a href="shop.html" class="product-img">
							<img src="<?php __(bloginfo('template_directory')); ?>/assets/img/product/cart/product-02.jpg" alt="product">
						</a>
					</figure>
					<a href="#" class="remove-btn" title="Product remove"><i class="fal fa-times"></i></a>
				</div>
				<div class="product">
					<div class="product__cart-details">
						<h5 class="product-title">
							<a href="shop.html">Best color ful Lamp for ceiling</a>
						</h5>

						<span class="cart-product-info">
							<span class="cart-product-qty">1</span>
							x $84.00
						</span>
					</div>

					<figure class="product__image-container">
						<a href="shop.html" class="product-img">
							<img src="<?php __(bloginfo('template_directory')); ?>/assets/img/product/cart/product-03.jpg" alt="product">
						</a>
					</figure>
					<a href="#" class="remove-btn" title="Product remove"><i class="fal fa-times"></i></a>
				</div>
			</div>

			<div class="cart-total mb-15">
				<span>Total</span>
				<span class="cart-total-price">$160.00</span>
			</div>

			<div class="cart-action">
				<a href="cart.html" class="btn btn-primary">View Cart</a>
				<a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i
						class="fal fa-long-arrow-right"></i></a>
			</div>
		</div>
		<!-- shopping-cart-bar end -->

		<!-- header-area start -->
		<header class="theme-main-menu theme-menu-two">
            <div class="main-header-area pt-25 pb-15">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-auto col-6">
                            <div class="logo-area">
                                <!-- /assets/img/logo/digitalazadi-logo.jpeg" -->
                                <a href="<?php _e(get_home_url()); ?>"><img src="<?php _e(get_header_image()); ?>" width="70" style="border-radius:100px" alt="Digitl Azadi"></a>
                            </div>
                        </div>
                        <div class="col-md-auto d-lg-inline-flex align-items-center justify-content-center d-none">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'primary-menu',
                                            'menu_class' 	 => 'da-nav')
                                    );
                                    ?>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-auto col-6">
                            <div class="right-nav d-flex align-items-center justify-content-end">
                                <div class="cart-menu d-none">
                                    <a class="shopping-cart me-1" href="#">
                                        <i class="bi bi-bag"></i>
                                        <span class="badge">0</span>
                                    </a>
                                </div>
                                <div class="search-area ms-1 d-none">
                                    <a class="search-input d-none" href="#" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                        <i class="bi bi-search"></i>
                                    </a>
                                </div>
                                <div class="quote-btn d-lg-inline-block d-none">
                                    <a href="/contact-us" class="ht-btn bs-style">Contact us</a>
                                </div>
                                <div class="hamburger-menu d-lg-none d-inline-flex">
                                    <div class="open-sidebar">
                                        <div class="bar-wrap">
                                            <div class="bar-1"></div>
                                            <div class="bar-2"></div>
                                            <div class="bar-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.theme-main-menu -->
        </header>
		<!-- header-area end -->

		<!-- slide-bar start -->
		<div class="ht-menu-wrapper">
			<div class="ht-menu-area">
				<button class="ht-menu-toggle"><i class="bi bi-x-lg"></i></button>
				<div class="mobile-logo">
					<a href="index.html">
						<img src="<?php __(bloginfo('template_directory')); ?>/assets/img/logo/header-logo-2.svg" alt="logo">
					</a>
				</div>
				<div class="mobile-menu-wrapper d-lg-none d-inline-block">
					<div class="mobile-menu"></div>
				</div>
				<div class="offset-widget mb-40">
					<div class="info-widget">
						<h4 class="offset-title mb-20">About Us</h4>
						<p class="mb-30">
							But I must explain to you how all this mistaken idea of denouncing pleasure and
							praising pain was born and will give you a complete account of the system and
							expound the actual teachings of the great explore
						</p>
					</div>
				</div>
				<div class="offset-widget mb-30 pr-10">
					<div class="info-widget info-widget2">
						<h4 class="offset-title mb-20">Contact Info</h4>
						<p>
							<i class="fal fa-address-book"></i>
							23/A, Miranda City Likaoli Prikano, Dope
						</p>
						<p>
							<i class="fal fa-phone"></i>
							+0989 7876 9865 9
						</p>
						<p>
							<i class="fal fa-envelope-open"></i>
							info@example.com
						</p>
					</div>
				</div>
				<div class="login-btn text-center">
					<a class="ht-btn style-5" href="login.html">Login</a>
				</div>

			</div>
		</div>
		<!-- side-bar end -->	