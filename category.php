<?php get_header(); ?>
<main>
	<!-- page-title-area start -->
	<div class="page-title-area">
		<div class="breadcrumb-wrapper" data-background="<?php if ( has_post_thumbnail() ) {  __(the_post_thumbnail_url()); } else { _e(bloginfo('template_directory') . '/assets/img/blog/blog-3.jpg'); } ?>">
            <!-- "/assets/img/page-title/page-title-bg-1.webp"> -->
			<div class="container">
				<div class="breadcrumb-content text-center">
					<h2 class="breadcrumb-title"><?php wp_title(''); ?></h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="<?php __(get_home_url()); ?>">Home</a></li>
                        <li><a href="#"><?php wp_title( '' ); ?></a></li>
                    </ul>
				</div>
			</div>
		</div>
	</div>
	<!-- page-title-area end -->
    <!--blog-details-section start-->
    <div class="blog-details-section pt-130 pt-lg-100 pb-95 pb-lg-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row posts-blogs">

                    <?php
                    $categories = get_the_category();
                    
                    $args = array(
                        // 'post_type' => 'post',
                        'category_name' => $categories[0]->slug,
                        'posts_per_page' => 12,
                        // 'title'     => 'Hello' // It seems to be case sensitive, so 'hello' and 'Hello' both are different.
                    );
                    // The Query.
                        $the_query = new WP_Query( $args );
    
                        // The Loop.
                        if ( $the_query->have_posts() ) :
    
                            while ( $the_query->have_posts() ) :
                                $the_query->the_post();
                                ?>
                                    <div class="col-lg-6">
                                        <?php get_template_part( 'template-parts/blog-card2', get_post_type() ); ?>
                                    </div>
                                <?php
                            endwhile;
    
                            // Restore original Post Data.
                            wp_reset_postdata();
                        else :
                            esc_html_e( 'Sorry, no posts matched your criteria.' );
                        endif;
                         ?>

                    </div>
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