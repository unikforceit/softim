<div <?php post_class('col-lg-4 col-md-6'); ?>>
    <div class="gallery-item">
        <div class="gallery-thumb">
            <?php if (has_post_thumbnail()) { ?>
                <?php the_post_thumbnail('full'); ?>
            <?php } ?>
            <div class="gallery-thumb-overlay">
                <div class="gallery-icon">
                    <a href="<?php echo get_the_post_thumbnail_url(); ?>">
                        <?php echo wp_get_attachment_image(softim_get_post_meta('softim_project_options', 'icon_image'), 'full'); ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="gallery-content">
            <span class="sub-title"><?php echo softim_post_category(); ?></span>
            <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
    </div>
</div>