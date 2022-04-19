<?php
/**
 * Theme Footer Widget Template
 * @package softim
 * @since 1.0.0
 */

if (!is_active_sidebar('footer-widget')){
	return;
}
?>

<div class="container">
    <div class="row mb-30-none">
        <?php dynamic_sidebar('footer-widget');?>
    </div>
</div>