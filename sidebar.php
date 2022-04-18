<?php
/**
 * Theme Default Sidebar Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package softim
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="sidebar">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
