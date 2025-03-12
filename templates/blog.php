<?php 
	get_header(); 
    the_post();
	// Template Name: Blogs
?>
<main>
<?php get_template_part( 'template-parts/banner', get_post_type() ); ?>
	<!-- ht-blog-section start -->
	<section class="ht-blog-section pt-140 pt-lg-100 pb-120 pb-lg-45">
		<div class="container-fluid">
			<div class="widget widget-search w-50 mb-50">			
				<?php 
					get_template_part( 'template-parts/search', get_post_type() );
				?>
			</div>
			<div class="row posts-blogs">
				<?php 
				 
				// wp_pagenavi();
                $args = array(
                    'post_type' => 'post',
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
                                <div class="col-lg-4 p-3">
                                    <?php get_template_part( 'template-parts/blog-card2', get_post_type() ); ?>
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
				<!-- <div class="col-12">
					<div class="page-navigation">
						<ul class="pagination">
							<li class="page-item"><a class="page-link" href="#"><i
										class="bi bi-arrow-left"></i></a></li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#"><i
										class="bi bi-arrow-right"></i></a></li>

						</ul>
					</div>
				</div> -->
			</div>
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