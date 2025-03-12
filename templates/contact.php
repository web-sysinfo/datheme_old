<?php
// Template Name: Contact
get_header(); ?>

<main>

    <!-- page-title-area start -->
    <?php get_template_part( 'template-parts/banner', get_post_type() ); ?>
    <!-- page-title-area end -->

    <!-- ht-contact-section-two start -->
    <div class="ht-contact-section-two pt-140 pb-90 pt-lg-100 pb-lg-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="contact-form-wrapper-2 p-0 ps-xxl-4 mb-50">
                        <div class="title-one mb-20">
                            <h2 class="title-cta">
                                <span class="hlt-text">Send us</span> a message for any inquiry</h2>
                        </div>
                        <form class="contact-form form-1" action="#">
                            <div class="input-wrapper">
                                <input type="text" placeholder="Name">
                            </div>
                            <div class="input-wrapper">
                                <input type="email" placeholder="Email">
                            </div>
                            <div class="col-12">
                                <div class="input-wrapper message">
                                    <textarea name="message" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="submit-btn w-100">Send message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 order-xl-first">
                    <div class="contact-map pe-xl-4 mb-50">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d75819.52551953928!2d73.79292955820311!3d18.524616400000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2ea3101643057%3A0x7fbd7c1984f77222!2sDigital%20Azadi%20-%20Digital%20Marketing%20Online%20Course%2C%20Digital%20Marketing%20Course%20in%20Hindi%20and%20Digital%20Marketing%20Course%20In%20Pune!5e1!3m2!1sen!2sin!4v1741592133387!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ht-contact-section-two end -->


    <!-- ht-contact-section-info start -->
    <div class="ht-contact-section-info pb-95 pb-lg-15">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-4 col-lg-6">
                    <div class="info-box2">
                        <div class="icon">
                            <i class="bi bi-headphones"></i>
                        </div>
                        <div class="info-content">
                            <h3 class="info-title">Office Address</h3>
                            <address> A 1002, Ira, Undri. Pune. <br>Maharashtra. India 411060 </address>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="info-box2">
                        <div class="icon">
                            <i class="bi bi-headphones"></i>
                        </div>
                        <div class="info-content">
                            <h3 class="info-title">Email Address</h3>
                            <p>
                                <a href="mailto:connect@digitalazadi.com">connect@digitalazadi.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="info-box2">
                        <div class="icon">
                            <i class="bi bi-headphones"></i>
                        </div>
                        <div class="info-content">
                            <h3 class="info-title">Phone Number</h3>
                            <p>
                                <a href="tel:+917798261234">+91 77982 61234</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ht-contact-section-info end -->
        <?php get_template_part( 'template-parts/cta-banner', get_post_type() ); ?>
</main>

<?php get_footer(); ?>