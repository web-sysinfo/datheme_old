<?php get_header(); ?>
<main>
	<?php get_template_part( 'template-parts/banner', get_post_type() ); ?>
    <!-- { Page Content area start } -->
	<div style="margin:0 20px;">
		<?php the_content(); ?>
	</div>
    <!-- { Page Content area end} -->
</main>

<!--scrollToTopBtn end-->
<a id="scrollToTopBtn" class="progress-wrap">
    <i class="bi bi-arrow-up"></i>
</a>
</div>
<!--main-page-wrapper end-->

<?php get_footer(); ?>