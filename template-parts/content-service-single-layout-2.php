<?php
$service_meta = get_post_meta(get_the_ID(), 'softim_service_options', true);
?>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Service
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="service-section two ptb-120">
    <div class="container">
        <div class="row justify-content-center flex-row-reverse mb-30-none">
            <div class="col-xl-8 col-lg-8 mb-30">
                <div class="service-item three details">
                    <?php if (has_post_thumbnail()) { ?>
                        <div class="service-thumb">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                    <?php } ?>
                    <div class="service-content two">
                        <h2 class="title"><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                        <div class="service-widget-item-area two">
                            <div class="row justify-content-center mb-30-none">
                                <?php
                                if ($service_meta['service_info_widget']) {
                                    foreach ($service_meta['service_info_widget'] as $service_item) {
                                        ?>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-30">
                                            <div class="service-widget-item">
                                                <div class="service-widget-icon">
                                                    <?php echo wp_get_attachment_image($service_item['image']['id'], 'full'); ?>
                                                </div>
                                                <div class="service-widget-content">
                                                    <h5 class="title"><?php echo esc_html($service_item['title']); ?></h5>
                                                    <span class="sub-title"><?php echo esc_html($service_item['text']); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                } ?>
                            </div>
                        </div>
                        <div class="service-bottom-content two">
                            <h2 class="title"><?php echo esc_html('Service Description'); ?></h2>
                            <?php echo esc_html($service_meta['description']); ?>
                            <div class="sevice-inner-item-area two">
                                <div class="row justify-content-center mb-30-none">
                                    <?php
                                    if ($service_meta['service_item']) {
                                        foreach ($service_meta['service_item'] as $service_item2) {
                                            ?>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <div class="service-inner-item">
                                                    <div class="service-inner-icon">
                                                        <?php echo wp_get_attachment_image($service_item2['image']['id'], 'full'); ?>
                                                    </div>
                                                    <div class="service-inner-content">
                                                        <h4 class="title"><?php echo esc_html($service_item2['title']); ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }
                                    } ?>
                                </div>
                            </div>
                            <blockquote class="two">
                                <div class="quote-area d-flex flex-wrap">
                                    <div class="quote-icon">
                                        <?php echo wp_get_attachment_image($service_meta['quoteImage1']['id'], 'full'); ?>
                                    </div>
                                    <div class="quote-content-area">
                                        <p class="quote-content"><?php echo esc_html($service_meta['quoteText']); ?></p>
                                    </div>
                                </div>
                            </blockquote>
                            <?php echo esc_html($service_meta['description2']); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 mb-30">
                <div class="service-sidebar">
                    <div class="category-widget-box mb-30">
                        <ul class="category-list two">
                            <?php
                            $tax_args = array(
                                'taxonomy' => 'service-cat',
                                'number' => 7,
                            );
                            $categories = get_terms($tax_args);
                            if ($categories){
                            foreach ($categories as $category) { ?>
                            <li><a href="<?php echo esc_url(get_term_link($category->term_id, 'service-cat'))?>"><i class="fas fa-chevron-right"></i> <?php echo esc_html($category->name); ?></a></li>
                            <?php } } ?>
                        </ul>
                    </div>
                    <div class="widget-box mb-30">
                        <h4 class="widget-title">Download</h4>
                        <div class="download-widget-btn">
                            <a href="#0" class="btn--base"><span>Download Our Brochures</span> <i
                                        class="fas fa-download ml-2"></i></a>
                            <a href="#0" class="btn--base"><span>Our Company Details</span> <i
                                        class="fas fa-file-download ml-2"></i></a>
                        </div>
                    </div>
                    <div class="widget-box section--bg mb-30">
                        <h4 class="widget-title text-white">Get In Touch</h4>
                        <p class="text-white">For more information feel free please contact with us.</p>
                        <div class="contact-sidebar-box">
                            <form class="contact-sidebar-form mb-20-none">
                                <div class="form-group">
                                    <input type="text" class="form--control" name="name" placeholder="Name"
                                           required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form--control" name="email"
                                           placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form--control" name="phone"
                                           placeholder="Phone"
                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn--base">Request a quotes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Service
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->