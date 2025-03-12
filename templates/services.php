<?php 
	get_header(); 
    the_post();
	// Template Name: Services
?>
<main>
    <?php get_template_part( 'template-parts/banner', get_post_type() ); ?>
    <!-- ht-service-section start -->
    <section class="hr-service-section pt-140 pb-110 pt-lg-100 pb-lg-70">
        <div class="container">
            <div class="row align-items-center">
                <?php 			 
                    // wp_pagenavi();
                    $args = array(
                        'post_type' => 'service',
                        'posts_per_page' => 12,
                        // 's' => get_search_query(),
                        'paged' => get_query_var('paged'),
                        // 'title'     => 'Hello' // It seems to be case sensitive, so 'hello' and 'Hello' both are different.
                    );
                    // The Query.
                        $the_query = new WP_Query( $args );

                        // The Loop.
                        if ( $the_query->have_posts() ) :

                            while ( $the_query->have_posts() ) :
                                $the_query->the_post();
                                ?>
                                    <div class="col-xl-4 col-md-6">
                                        <?php get_template_part( 'template-parts/service-card', get_post_type() ); ?>
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
    </section>
    
    <!-- ht-service-section end -->
</main>
<!--scrollToTopBtn end-->
<a id="scrollToTopBtn" class="progress-wrap">
	<i class="bi bi-arrow-up"></i>
</a>
</div>
<!--main-page-wrapper end-->

<?php get_footer(); ?>