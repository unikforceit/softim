<?php
/**
 * Post Meta Functions
 * @package softim
 * @since 1.0.0
 */

$softim = softim();
$post_meta = Softim_Group_Fields_Value::post_meta('blog_post');
?>
<div class="post-meta-wrap">
    <ul class="post-meta">
        <?php if ($post_meta['posted_by']): ?>
            <li><?php $softim->posted_by(); ?></li>
        <?php endif; ?>
        <li>
            <?php
            $softim->posted_on();
            ?>
        </li>
        <li>
            <?php
            $softim->comment_count();
            ?>
        </li>
    </ul>
    <?php

    if (shortcode_exists('softim_post_share') && $post_meta['posted_share']) {
        echo do_shortcode('[softim_post_share]');
    }
    ?>
</div>