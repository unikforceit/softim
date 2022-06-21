<?php
$categories = get_the_terms(get_the_ID(), 'project-cat');
$item = [];
if ($categories) {
    foreach ($categories as $category) {
        $item[$category->term_id] = $category->slug;
    }
}
$cat = implode( ' ', $item);
?>
<div class="grid-item <?php echo esc_attr($cat);?>">
    <div class="gallery-item">
        <div class="gallery-thumb">
            <?php if (has_post_thumbnail()) { ?>
                <?php the_post_thumbnail('softim_project'); ?>
            <?php } ?>

            <div class="gallery-thumb-overlay">
                <div class="gallery-icon">
                    <a href="<?php echo get_the_post_thumbnail_url();?>">
                        <?php echo wp_get_attachment_image(softim_get_post_meta('softim_project_options', 'icon_image'), 'full'); ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="gallery-content">
            <span class="sub-title"><?php echo softim_post_category();?></span>
            <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
    </div>
</div>