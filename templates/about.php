<?php
// Template Name: About
get_header(); ?>
		<main>
			<?php get_template_part( 'template-parts/banner', get_post_type() ); ?>
			<!-- text-wrapper-section start -->
			<section class="about-wrapper-section-4 pt-140 pb-100 pt-lg-100 pb-lg-15">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-7">
							<div class="img-wrapper-four row align-items-end position-relative mb-xl-0 mb-5">
								<div class="col-md-5 mb-md-0 mb-4">
									<img class="main-img img-fluid br-15" src="<?php __(bloginfo('template_directory')); ?>/assets/img/media/media-18.webp" alt="portfolio">
								</div>
								<div class="col-md-7">
									<img class="shape-sticker-2" src="<?php __(bloginfo('template_directory')); ?>/assets/img/shape/shape-18.png" alt="portfolio">
									<img class="shape-sticker border border-dark rounded-circle" src="<?php __(bloginfo('template_directory')); ?>/assets/img/logo/dalogo.webp" width="200" alt="portfolio">
									<img class="main-img2 img-fluid br-15" src="<?php __(bloginfo('template_directory')); ?>/assets/img/media/media-19.webp" alt="portfolio">
								</div>
							</div>
						</div>
						<div class="col-xl-5">
							<div class="text-wrapper-four ps-xxl-4">
								<div class="title-one">
									<h5 class="sub-title">About Us</h5>
									<h2 class="title">Specialists in Tech Hurdles.</h2>
									<p class="mb-4">Solving complex digital challenges with tailored solutions to
										optimize
										workflows, enhance efficiency.</p>
								</div>
								<div class="feature-list-two pt-xl-4">
									<span class="icon"><i class="bi bi-check-lg"></i></span>
									<span class="feature-title">Virtual Operations Oversight</span>
								</div>
								<div class="feature-list-two">
									<span class="icon"><i class="bi bi-check-lg"></i></span>
									<span class="feature-title">Oversight of Online Resource Management</span>
								</div>
								<div class="feature-list-two mb-5">
									<span class="icon"><i class="bi bi-check-lg"></i></span>
									<span class="feature-title">Remote Management Strategies</span>
								</div>

								<div class="bottom-btn pt-xxl-2">
									<a href="about-2.html"
										class="ht-btn style-5 w-100 pl-40 pe-4 d-flex justify-content-between">About us
										<span><img src="<?php __(bloginfo('template_directory')); ?>/assets/img/icon/arrow-2.svg" alt="arrow"></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row row-cols-md-3 row-cols-1 mt-5 pt-2">
						<div class="col">
							<div class="counter-wrap-4 text-md-start text-center">
								<h3 class="number manrope"><span class="counter">1,200</span></h3>
								<p class="counter-title mb-0">Expert Members</p>
							</div>
						</div>
						<div class="col">
							<div class="counter-wrap-4 text-center">
								<h3 class="number manrope"><span class="counter">2</span>m+</h3>
								<p class="counter-title mb-0">Happy Customer</p>
							</div>
						</div>
						<div class="col">
							<div class="counter-wrap-4 text-center text-md-end">
								<h3 class="number manrope"><span class="counter">14</span>+</h3>
								<p class="counter-title mb-0">Years Experience</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- text-wrapper-section end -->

			<!-- ht-service-section start -->
			<section class="bg-service-section-3 pt-130 pb-100 pt-lg-60 pb-lg-20"
				data-background="<?php __(bloginfo('template_directory')); ?>/assets/img/bg/bg-5.png">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-6 col-lg-6">
							<div class="title-one pe-xxl-5 mb-70 mb-lg-20">
								<h2 class="title text-white">Our Services</h2>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6">
							<div class="title-one ps-xxl-4 mb-70">
								<p class="text-white">Addressing complicated digital tech challenges with customized
									solutions to
									streamline processes and improve.</p>
								<a class="ht-btn style-5 mt-4" href="services.html"><span>All Services</span>
									<span><img src="<?php __(bloginfo('template_directory')); ?>/assets/img/icon/arrow-2.svg" alt="arrow"></span></a>
							</div>
						</div>
					</div>
					<div class="row align-items-center justify-content-center">
						<div class="col-lg-6 col-md-6">
							<div class="service-wrap-3">
								<div class="icon">
									<img class="back-icon" src="<?php __(bloginfo('template_directory')); ?>/assets/img/shape/shape-15.svg" alt="shape">
									<img class="front-icon" src="<?php __(bloginfo('template_directory')); ?>/assets/img/icon/icon-24.svg" alt="icon">
								</div>
								<h3 class="service-title"><a href="services-details.html">Content Marketing</a>
								</h3>
								<p class="description">Strategic content creation that drives audience engagement and
									boosts brand awareness through valuable, relevant information.</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="service-wrap-3">
								<div class="icon">
									<img class="back-icon" src="<?php __(bloginfo('template_directory')); ?>/assets/img/shape/shape-15.svg" alt="shape">
									<img class="front-icon" src="<?php __(bloginfo('template_directory')); ?>/assets/img/icon/icon-25.svg" alt="icon">
								</div>
								<h3 class="service-title"><a href="services-details.html">SEO Keyword Exploration</a>
								</h3>
								<p class="description">Strategic content creation that drives audience engagement and
									boosts brand awareness through valuable, relevant information.</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="service-wrap-3">
								<div class="icon">
									<img class="back-icon" src="<?php __(bloginfo('template_directory')); ?>/assets/img/shape/shape-15.svg" alt="shape">
									<img class="front-icon" src="<?php __(bloginfo('template_directory')); ?>/assets/img/icon/icon-26.svg" alt="icon">
								</div>
								<h3 class="service-title"><a href="services-details.html">Analysis of Market Trends</a>
								</h3>
								<p class="description">Strategic content creation that drives audience engagement and
									boosts brand awareness through valuable, relevant information.</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="service-wrap-3">
								<div class="icon">
									<img class="back-icon" src="<?php __(bloginfo('template_directory')); ?>/assets/img/shape/shape-15.svg" alt="shape">
									<img class="front-icon" src="<?php __(bloginfo('template_directory')); ?>/assets/img/icon/icon-27.svg" alt="icon">
								</div>
								<h3 class="service-title"><a href="services-details.html">Infographics Simplify Data</a>
								</h3>
								<p class="description">Strategic content creation that drives audience engagement and
									boosts brand awareness through valuable, relevant information.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ht-service-section end -->

			<!-- ht-feedback-section start -->
			<div class="feedback-section position-relative pt-140 pt-lg-60">
				<div class="container feedback-custom-cotainer">
					<div class="row align-items-center">
						<div class="col-lg-6 col-xl-6 offset-xl-1 px-xl-0">
							<div class="feedback-wrapper-content">
								<div class="author-content-slider">
									<div class="feedback-wrap-6">
										<img src="<?php __(bloginfo('template_directory')); ?>/assets/img/icon/icon-28.svg" alt="quote">
										<p class="feedback-text">As a consultancy with limited resources we were
											hesitant to
											choose generic marketing packages.</p>

										<div class="rating">
											<a href="#"><i class="bi bi-star-fill"></i></a>
											<a href="#"><i class="bi bi-star-fill"></i></a>
											<a href="#"><i class="bi bi-star-fill"></i></a>
											<a href="#"><i class="bi bi-star-fill"></i></a>
											<a href="#"><i class="bi bi-star-fill"></i></a>
										</div>
										<h4 class="name">John Robert Harberd</h4>
										<h6 class="designation">Saudi Arabia</h6>
									</div>
									<div class="feedback-wrap-6">
										<img src="<?php __(bloginfo('template_directory')); ?>/assets/img/icon/icon-28.svg" alt="quote">
										<p class="feedback-text">As a consultancy with limited resources we were
											hesitant to
											choose generic marketing packages.</p>
										<div class="rating">
											<a href="#"><i class="bi bi-star-fill"></i></a>
											<a href="#"><i class="bi bi-star-fill"></i></a>
											<a href="#"><i class="bi bi-star-fill"></i></a>
											<a href="#"><i class="bi bi-star-fill"></i></a>
											<a href="#"><i class="bi bi-star-fill"></i></a>
										</div>
										<h4 class="name">Riz Band</h4>
										<h6 class="designation">Saudi Arabia</h6>
									</div>
								</div>
								<div class="custom-arrow-one d-none d-xxl-inline-block">
									<div class="prev-p1 ms-3 slick-arrow"><img src="<?php __(bloginfo('template_directory')); ?>/assets/img/icon/arrow-11.svg"
											alt="arrow">
									</div>
									<div class="next-p1 slick-arrow"><img src="<?php __(bloginfo('template_directory')); ?>/assets/img/icon/arrow-12.svg"
											alt="arrow">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-5 author-thumb-slider">
							<div class="author-avatar-2 text-center position-relative">
								<!-- <img class="bg-shape" src="<?php //__(bloginfo('template_directory')); ?>/assets/img/shape/shape-26.png" alt="shape"> -->
								<img class="author-main-img br-15" src="<?php __(bloginfo('template_directory')); ?>/assets/img/media/phone_call.avif" alt="author">
								<div class="author-rating">
									<h2 class="number">4.9</h2>
									<h4 class="rating-title">Average Rating</h4>
								</div>
							</div>
							<div class="author-avatar-2 text-center position-relative">
								<!-- <img class="bg-shape" src="<?php //__(bloginfo('template_directory')); ?>/assets/img/shape/shape-26.png" alt="shape"> -->
								<img class="author-main-img br-15" src="<?php __(bloginfo('template_directory')); ?>/assets/img/media/phone_call.avif" alt="author">
								<div class="author-rating">
									<h2 class="number">4.8</h2>
									<h4 class="rating-title">Average Rating</h4>
								</div>
							</div>
							<div class="author-avatar-2 text-center position-relative">
								<!-- <img class="bg-shape" src="<?php //__(bloginfo('template_directory')); ?>/assets/img/shape/shape-26.png" alt="shape"> -->
								<img class="author-main-img br-15" src="<?php __(bloginfo('template_directory')); ?>/assets/img/media/phone_call.avif" alt="author">
								<div class="author-rating">
									<h2 class="number">4.7</h2>
									<h4 class="rating-title">Average Rating</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ht-feedback-section end -->

			<!-- ht-blog-section start -->
		<section class="bg-blog-section-2 pt-140 pt-lg-60 pb-95 pb-lg-15">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6">
						<div class="title-one mb-65">
							<h2 class="title">Current News and Updates</h2>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="title-one mb-65 ps-xxl-5 ms-xxl4">
							<p>Stay informed with the latest news and updates, covering everything from
								global
								events to local happenings, including significant developments
								in various fields and industries.</p>
							<a class="ht-btn style-5 mt-5" href="blog-grid.html"><span>All Articles</span>
								<span><img src="<?php __(bloginfo('template_directory')); ?>/assets/img/icon/arrow-2.svg" alt="arrow"></span></a>
						</div>
					</div>
				</div>
				<div class="row">
				<?php
				$args = array(
                    'post_type' => 'post',
					'posts_per_page' => 3,
                    // 'title'     => 'Hello' // It seems to be case sensitive, so 'hello' and 'Hello' both are different.
                );
                // The Query.
                    $the_query = new WP_Query( $args );

                    // The Loop.
                    if ( $the_query->have_posts() ) {

                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                            ?>
                                <div class="col-lg-4">
									<?php get_template_part( 'template-parts/blog-card2', get_post_type() ); ?>
                                </div>
                            <?php
                        }

                        // Restore original Post Data.
                        wp_reset_postdata();
                    } else {
                        esc_html_e( 'Sorry, no posts matched your criteria.' );
                    }
					?>
				</div>
			</div>

		</section>
		<!-- ht-blog-section end -->
			<?php get_template_part( 'template-parts/cta-banner', get_post_type() ); ?>
		</main>
		
		<!--scrollToTopBtn end-->
		<a id="scrollToTopBtn" class="progress-wrap">
			<i class="bi bi-arrow-up"></i>
		</a>
	</div>
<?php get_footer(); ?>