<div class="col-lg-4">
    <div class="blog-sidebar mb-40">
        <div class="widget widget-search mb-50">
            <h3 class="widget-title">Search</h3>
            <?php get_template_part( 'template-parts/search', get_post_type() ); ?>
            <!-- <form class="search-form" action="#" method="get">
                <input type="text" placeholder="Search">
                <button class="widget-btn" type="submit"> <i class="bi bi-search"></i>
                </button>
            </form> -->
        </div>
        <div class="widget category-widget-content">
            <h3 class="widget-title">Categories</h3>
            <ul class="list-unstyled category-widget mb-0">
            <?php 
            $cats = get_categories(array('texonomy' => 'category')); 
            // $cats = get_terms( array(
            //         'texonomy'      => 'category',
            //         'hide_empty'    => false,
            //         'orderby'       => 'name',
            //         'order'         => 'DESC',
            //         'number'        => 3 
            //     ) );
                foreach($cats as $cat ) :
            ?>
                <li>
                    <a href="<?php _e( get_category_link( $cat->cat_ID ) ); ?>">
                        <?php _e( $cat->name ); ?> <span class="float-end">(<?php _e( $cat->count ); ?>)</span> 
                    </a>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
        <div class="widget widget-post mt-50">
            <h3 class="widget-title">Recent Post</h3>
            <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                );
                // The Query.
                $the_query = new WP_Query( $args );

                // The Loop.
                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) :
                        $the_query->the_post();
            ?>
            <article class="recent-post mb-20">
                <a href="<?php the_permalink(); ?>">
                    <figure class="post-thumb" 
                        data-background="<?php 
                                            if ( has_post_thumbnail() ) :
                                                __(the_post_thumbnail_url()); 
                                            else : 
                                                _e(bloginfo('template_directory') . '/assets/img/blog/blog-image.webp');
                                            endif; 
                                        ?>">
                    </figure>
                </a>
                <div class="post-content mb-2">
                    <span class="date"><i class="bi bi-clock"></i> <?php _e( get_the_date('d M Y') ); ?></span>
                    <h5 class="mb-10">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h5>
                </div>
            </article>
            <?php endwhile; endif;?>
        </div>
        <div class="widget widget-categories-tag mt-50">
            <h3 class="widget-title">Tags</h3>
            <div class="tagcloud">
                <?php 
                    $tags = get_tags();
                    // print_r( $tags );
                    // Tag Query.
                    foreach( $tags as $tag ) :
                        $tag_title = get_tag_link( $tag->term_id );
                        _e( "<a href='$tag_title' title='$tag->name' class='$tag->slug'>" );
                        _e( "$tag->name </a>");
                    endforeach;
                ?>
            </div>
        </div>
        <div class="widget widget-contact mt-50 px-xxl-5">
            <h3 class="widget-title text-white mx-xxl-3">Grow Your Business With Us</h3>
            <a href="/contact-us" class="contact-btn">Contact Us</a>
        </div>
    </div>
</div>