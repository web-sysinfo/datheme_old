<?php 
	get_header(); 
	// the_post();
?>
<main>
	<?php get_template_part( 'template-parts/banner', get_post_type() ); ?>
	<!-- ht-blog-section start -->
	<section class="ht-blog-section pt-140 pt-lg-100 pb-120 pb-lg-45">
		<div class="container-fluid px-xxl-5 ms-xxl-5">
			<div class="widget widget-search w-50 mb-50">			
				<?php 
					get_template_part( 'template-parts/search', get_post_type() );
				?>
			</div>
			<div class="row align-items-center posts-blogs">
				<?php 
					while( have_posts()) :
						the_post();
				?>
			<div class="col-lg-4">
				<?php get_template_part( 'template-parts/blog-card2', get_post_type() ); ?>
			</div>
			<?php endwhile; wp_pagenavi(); ?>
			
		</div>
	</section>
	<!-- ht-blog-section end -->
</main>
<!--scrollToTopBtn end-->
<a id="scrollToTopBtn" class="progress-wrap">
	<i class="bi bi-arrow-up"></i>
</a>
</div>
<!--main-page-wrapper end-->

<?php get_footer(); ?>