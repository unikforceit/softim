<?php
/**
 * Template part for displaying single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package softim
 */

$softim = softim();
$post_meta = get_post_meta(get_the_ID(), 'softim_post_gallery_options', true);
$post_meta_gallery = isset($post_meta['gallery_images']) && !empty($post_meta['gallery_images']) ? $post_meta['gallery_images'] : '';
$post_single_meta = Softim_Group_Fields_Value::post_meta('blog_single_post');
?>
<div class="blog-item details">
    <?php if (has_post_thumbnail()) { ?>
        <div class="blog-thumb">
            <?php the_post_thumbnail('full'); ?>
        </div>
    <?php } ?>
    <div class="blog-content">
        <div class="blog-post-meta">
            <span class="user"><?php esc_html('By :'); ?><?php the_author(); ?></span>
            <span class="category two"><?php the_date('F j, Y'); ?></span>
        </div>
        <h3 class="title"><?php the_title(); ?></h3>
        <div class="blog-content"><?php the_content(); ?></div>

        <div class="blog-tag-wrapper">
            <span><?php echo esc_html('Tags:');?></span>
            <?php $softim->posted_tag(); ?>
        </div>



        <?php $softim->post_navigation();?>

        <?php $softim->get_related_post([
            'post_type' => 'post',
            'taxonomy' => 'category',
            'exclude_id' => get_the_ID(),
            'posts_per_page' => 2
        ]);?>
    </div>
</div>