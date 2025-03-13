<?php 
	// Template Name: Team
	get_header(); 
    the_post();
?>
<main>
    <?php get_template_part( 'template-parts/banner', get_post_type() ); ?>

    <!-- ht-team-section start -->
    <section class="ht-team-section pt-140 pt-lg-100 pb-90 pb-lg-10">
        <div class="custom-container-1600">
            <div class="container">
                <div class="title-one text-lg-start text-center mb-70">
                    <h2 class="title">Meet the Experts</h2>
                </div>
                <div class="row">
                <?php 			 
                    // wp_pagenavi();
                    $args = array(
                        'post_type' => 'team',
                        'posts_per_page' => 12,
                    );
                    // The Query.
                    $the_query = new WP_Query( $args );
                    // The Loop.
                    if ( $the_query->have_posts() ) :
                        
                        while ( $the_query->have_posts() ) :
                            $the_query->the_post();
                            ?>
                                <div class="col-xl-3 col-md-6">
                                    <?php get_template_part( 'template-parts/team-card', get_post_type() ); ?>
                                </div>
                            <?php
                        endwhile;
                        
                        wp_link_pages();
                        // Restore original Post Data.
                        wp_reset_postdata();
                    else :
                        esc_html_e( 'Sorry, no posts matched your criteria.' );
                    endif;
                    ?>
                    <div class="col-12">
                    <?php
                    wp_pagenavi( array('query' => $the_query) );
                ?>
                </div>
            </div>
        </div>
    </section>
    <!-- ht-team-section end -->
    <?php get_template_part( 'template-parts/cta-banner', get_post_type() ); ?>
</main>
<!--scrollToTopBtn end-->
<a id="scrollToTopBtn" class="progress-wrap">
	<i class="bi bi-arrow-up"></i>
</a>
</div>
<!--main-page-wrapper end-->

<?php get_footer(); ?>