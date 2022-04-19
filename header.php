<?php
/**
 * Theme Header Template
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package softim
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
do_action( 'softim_after_body' );
$page_container_meta = Softim_Group_Fields_Value::page_container( 'softim', 'header_options' );
?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'softim' ); ?></a>
    <?php get_template_part('template-parts/header/header',$page_container_meta['navbar_type']);?>
	<?php do_action( 'softim_before_page_content' ) ?>
    <div id="content" class="site-content">
