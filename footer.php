<!--footer-area start-->
<footer class="footer-two pt-140 pt-lg-100 grey-bg">
    <div class="container-fluid">
        <img class="shape-1 d-none d-lg-inline-block" src="<?php echo bloginfo('template_directory'); ?>/assets/img/shape/shape-4.png" alt="Shape">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-7 text-xl-start text-center">
                <h2 class="newsletter-title mb-45">Let’s Talk About your Projects</h2>
            </div>
            <div class="col-xl-5 text-center text-xl-end">
                <div class="social-links2 mb-5">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-youtube"></i></a>
                </div>
                <div class="subscribe-form sub-form-2 mb-45">
                    <input type="text" placeholder="Enter Your Mail">
                    <button type="submit">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="copyright-wrap">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3 text-center text-lg-start">
                    <div class="footer-logo mt-lg-0 mt-4 mb-lg-0 mb-4">
                        <a href="/"><img src="<?php echo bloginfo('template_directory'); ?>/assets/img/logo/digitalazadi-logo.jpeg" width="50" alt="Logo">
                    Digital Azadi
                    </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 text-center">
                    <div class="footer-menu">
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'secondary-menu',
                                    'menu_class'     => 'da-nav')
                            );
                        ?>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3">
                    <div class="copyright-text text-lg-end text-center pt-lg-0 pt-4">
                        <a href="https://digitalazadi.com">@ POWERED BY Digital Azadi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer-area end-->

<!-- JS here -->
<script src="<?php echo bloginfo('template_directory'); ?>/assets/js/modernizr-3.5.0.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/js/jquery-3.5.1.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/js/popper.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/js/slick.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/js/isotope.pkgd.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/js/jquery.meanmenu.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/js/wow.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/js/aos.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/js/jquery.counterup.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/js/jquery.waypoints.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/js/jquery.easypiechart.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/js/jquery-ui-slider-range.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/js/jquery-ui.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>