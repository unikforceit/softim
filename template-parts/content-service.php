<?php $service_meta = get_post_meta(get_the_ID(), 'softim_service_options', true);?>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
    <div class="service-item three">
        <?php if (has_post_thumbnail()){?>
            <div class="service-icon">
                <?php echo wp_get_attachment_image($service_meta['image']['id'], 'full'); ?>
            </div>
        <?php } ?>
        <div class="service-content">
            <h3 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
            <p><?php echo get_the_excerpt();?></p>
            <div class="service-btn">
                <a href="<?php the_permalink();?>" class="custom-btn"><?php echo esc_html('Learn More')?> <i class="icon-Group-2361 ml-2"></i></a>
            </div>
        </div>
    </div>
</div>