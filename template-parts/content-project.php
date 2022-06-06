<?php
$project_meta = get_post_meta(get_the_ID(), 'softim_project_options', true);
$icon_img = isset($project_meta['icon_image']['id']) ? $project_meta['icon_image']['id'] : '';
$categories = get_the_terms(get_the_ID(), 'project-cat');
$item = [];
if ($categories) {
    foreach ($categories as $category) {
        $item[$category->term_id] = $category->slug;
    }
}
$cat = implode( ' ', $item)
?>
<div class="grid-item <?php echo esc_attr($cat);?>">
    <div class="gallery-item">
        <div class="gallery-thumb">
            <?php if (has_post_thumbnail()) { ?>
                <?php the_post_thumbnail(); ?>
            <?php } ?>

            <div class="gallery-thumb-overlay">
                <div class="gallery-icon">
                    <a class="img-popup" data-rel="lightcase:myCollection" href="<?php echo get_the_post_thumbnail_url();?>">
                        <?php echo wp_get_attachment_image($icon_img, 'full'); ?>
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