<?php
    $service_meta = get_post_meta(get_the_ID(), 'softim_service_options', true);
?>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Service
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="service-section two ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="service-item three details">
                    <?php if (has_post_thumbnail()) { ?>
                        <div class="service-thumb">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                    <?php } ?>
                    <div class="service-content">
                        <h2 class="title"><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                        <div class="service-widget-item-area">
                            <div class="row justify-content-center mb-30-none">
                                <?php
                                if ($service_meta['service_info_widget']) {
                                    foreach ($service_meta['service_info_widget'] as $service_item) {
                                        ?>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
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
                        <div class="service-bottom-content">
                            <h2 class="title"><?php echo esc_html('Service Description'); ?></h2>
                            <?php echo esc_html($service_meta['description']);?>
                            <div class="sevice-inner-item-area">
                                <div class="row justify-content-center mb-30-none">
                                    <?php
                                    if ($service_meta['service_item']) {
                                        foreach ($service_meta['service_item'] as $service_item2) {
                                            ?>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
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
                                    <div class="quote-shape">
                                        <?php echo wp_get_attachment_image($service_meta['quoteImage2']['id'], 'full'); ?>
                                    </div>
                                    <div class="quote-content-area">
                                        <p class="quote-content"><?php echo esc_html($service_meta['quoteText']);?></p>
                                    </div>
                                </div>
                            </blockquote>
                            <?php echo esc_html($service_meta['description2']);?>

                            <div class="contact-section two">
                                <div class="contact-area">
                                    <div class="contact-element-five">
                                        <?php echo wp_get_attachment_image($service_meta['image1']['id'], 'full'); ?>
                                    </div>
                                    <div class="contact-element-six">
                                        <?php echo wp_get_attachment_image($service_meta['image2']['id'], 'full'); ?>
                                    </div>
                                    <div class="row mb-30-none">
                                        <div class="col-xl-5 col-lg-5 mb-30">
                                            <div class="contact-thumb">
                                                <?php echo wp_get_attachment_image($service_meta['image3']['id'], 'full'); ?>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-lg-7 mb-30">
                                            <div class="contact-form-area">
                                                <div class="contact-form-header">
                                                    <div class="left">
                                                        <h2 class="title"><?php echo esc_html($service_meta['fTitle']); ?> <span class="text--base"><?php echo esc_html($service_meta['fTitle2']); ?></span>
                                                        </h2>
                                                        <p><?php echo esc_html($service_meta['fText']); ?></p>
                                                    </div>
                                                </div>
                                                <?php echo do_shortcode($service_meta['form']);?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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