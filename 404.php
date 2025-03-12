<?php 
	get_header(); 

?>
<main>
    <!-- page-title-area start -->
    <div class="page-title-area text-center">
        <div class="breadcrumb-wrapper" style="padding-top:30px;padding-bottom:100px;" data-background="<?php //__(bloginfo('template_directory')); ?>/assets/img/page-title/page-title-bg-1.webp">
        </div>
    </div>
    <!-- page-title-area end -->
     <?php get_template_part( 'template-parts/block', get_post_type() ); ?>

    <!-- ht-error-page-wrapper start -->
    <div class="ht-error-page-wrapper text-center pt-130 pt-lg-100 pb-100">
        <div class="container">
            <!-- <img class="img-fluid" src="assets/img/ilustration/ilus-6.svg" alt="ilustration"> -->
            <div class="title-one">
                <h2 class="title mt-5">Sorry, Page Not Found</h2>
                <p>The page you are looking for does not exit.Please try it.</p>
                <a href="<?php _e(get_home_url()); ?>" class="ht-btn style-5 bstyle2">Back Home
                    <span class="btn-icon"><img src="<?php __(bloginfo('template_directory')); ?>/assets/img/icon/arrow-12.svg" alt="icon"></span></a>
            </div>
        </div>
    </div>
    <!-- ht-error-page-wrapper end -->
</main>
<?php get_footer(); ?>