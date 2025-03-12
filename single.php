<?php get_header(); ?>
<main>
	<?php get_template_part( 'template-parts/banner', get_post_type() ); ?>
    <!--blog-details-section start-->
    <div class="blog-details-section pt-130 pt-lg-100 pb-95 pb-lg-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php the_content(); ?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div> 
    <!-- { Page Content area end} -->
    <?php 
        // comment_form();
        comments_template();
    ?>
</main>

<!--scrollToTopBtn end-->
<a id="scrollToTopBtn" class="progress-wrap">
    <i class="bi bi-arrow-up"></i>
</a>
</div>
<!--main-page-wrapper end-->

<?php get_footer(); ?>