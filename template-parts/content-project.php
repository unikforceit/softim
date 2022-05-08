<?php $project_meta = get_post_meta(get_the_ID(), 'softim_project_options', true);?>
<div class="grid-item design marketing">
    <div class="gallery-item">
        <div class="gallery-thumb">
            <?php if (has_post_thumbnail()) { ?>
                <?php the_post_thumbnail([350]); ?>
            <?php } ?>

            <div class="gallery-thumb-overlay">
                <div class="gallery-icon">
                    <a class="img-popup" data-rel="lightcase:myCollection" href="<?php echo get_the_post_thumbnail_url();?>">
                        <?php echo wp_get_attachment_image($project_meta['icon_image']['id'], 'full'); ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="gallery-content">
            <span class="sub-title"><?php echo esc_html($project_meta['project_tag']); ?></span>
            <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
    </div>
</div>