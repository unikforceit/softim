<?php
/**
 * Post Thumbnail Functions
 * @package softim
 * @since 1.0.0
 */

$softim = softim();
if (has_post_thumbnail()): ?>
    <div class="thumbnail">
        <?php $softim->post_thumbnail('post-thumbnail'); ?>
    </div>
<?php endif; ?>