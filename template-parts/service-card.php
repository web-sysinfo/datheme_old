<div class="service-wrap-5 hover-bg">
    <div class="icon">
        <img src="<?php esc_url( _e( get_field('service_image') ) ); ?>" alt="Service icon">
    </div>
    <div class="front-content">
        <h3 class="service-title">
            <a href="<?php the_permalink(); ?>"><?php esc_html( the_title() ); ?></a>
        </h3>
        <p class="description"><?php  _e( substr( get_the_excerpt(), 0, 70 ) ); ?></p>
    </div>
    <div class="back-content">
        <h3 class="service-title">
            <a href="<?php the_permalink(); ?>"><?php esc_html( the_title() ); ?></a>
        </h3>
        <p class="description"><?php  _e( substr( get_the_excerpt(), 0, 115 ) ); ?></p>
        <a href="<?php the_permalink(); ?>" class="more-btn" arial-label="Read More">Learn More 
            <img src="<?php __(bloginfo('template_directory')); ?>/assets/img/icon/arrow-5.svg" class="arrow-front" alt="Arrow">
        </a>
    </div>
</div>