<div class="team-wrap-2">
    <div class="team-thumb">
        <img class="w-100" src="<?php if ( has_post_thumbnail() ) :
                            __( the_post_thumbnail_url() ); 
                        else :
                            _e( bloginfo('template_directory') . '/assets/img/team/team-2.jpg' );
                        endif; 
                    ?>" alt="Team member">
        <div class="team-social">
            <a href="<?php _e( get_field( 'facebook_url' ) ); ?>"><i class="bi bi-twitter"></i></a>
            <a href="<?php _e( get_field( 'insta_url' ) ); ?>"><i class="bi bi-instagram"></i></a>
            <a href="<?php _e( get_field( 'twitter_url' ) ); ?>"><i class="bi bi-facebook"></i></a>
        </div>
    </div>

    <div class="content">
        <h4 class="name">
            <a href="<?php the_permalink(); ?>"><?php _e( get_field( 'designation' ) ); ?></a>
        </h4>
        <p class="designation"><?php esc_html( the_title() ); ?></p>
    </div>
</div>