<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package softim
 */

?>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-60">
    <div class="blog-item">
        <?php if (has_post_thumbnail()) { ?>
            <div class="blog-thumb">
                <?php the_post_thumbnail('full'); ?>
            </div>
        <?php } ?>
        <div class="blog-content">
            <div class="blog-post-meta">
                <span class="user"><?php esc_html('By :'); ?><?php the_author(); ?></span>
                <span class="date"><?php the_date('F j, Y'); ?></span>
            </div>
            <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
    </div>
</div>

