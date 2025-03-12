<div class="blog-two">
    <div class="blog-thumb">
        <a href="<?php the_permalink(); ?>" class="blog-date"><?php _e( get_the_date('d M') ); ?></a>                                                
        <img src="<?php if ( has_post_thumbnail() ) { __(the_post_thumbnail_url()); } else { _e(bloginfo('template_directory') . '/assets/img/blog/blog-image.webp'); } ?>" alt="blog">
        <a class="blog-btn" href="<?php the_permalink(); ?>">
            <img src="<?php __(bloginfo('template_directory')); ?>/assets/img/icon/arrow-8.svg" alt="arrow">
        </a>
    </div>
    <div class="blog-content">
        <div class="blog-meta">
            <a href="<?php the_permalink(); ?>"><?php __( the_author()); ?></a>
            <span class="divider"></span>
            <a href="<?php the_permalink(); ?>">
                <?php
                    $comments_count = wp_count_comments();
                    _e( "Comments: (" . get_comments_number()  . ")" );
                ?>
            </a>
        </div>
        <h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php esc_html( the_title() ); ?></a></h3>
    </div>
</div>