<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package softim
 */

?>
<div <?php post_class('col-xl-12 mb-60');?>>
    <div class="blog-item">
        <?php if (has_post_thumbnail()) { ?>
            <div class="blog-thumb">
                <?php the_post_thumbnail('full'); ?>
            </div>
        <?php } ?>
        <div class="blog-content">
            <div class="blog-post-meta">
                <span class="user"><?php echo esc_html('By : '); ?><?php the_author(); ?></span>
                <span class="category two"><?php echo get_the_date('F j, Y'); ?></span>
            </div>
            <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php the_excerpt(); ?></p>
            <div class="blog-btn">
                <a href="<?php the_permalink(); ?>" class="custom-btn"><?php echo esc_html('Read More'); ?> <i class="fas fa-arrow-right ml-2"></i></a>
            </div>
        </div>
    </div>
</div>
