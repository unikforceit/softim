<?php
/**
 * Theme Footer Template
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package softim
 */

$page_container_meta = Softim_Group_Fields_Value::page_container('softim', 'header_options');
$footer_switch = cs_get_option('elementor_footer_builder');
$footer = cs_get_option('elementor_header');
?>

</div><!-- #content -->

<?php
    if ($footer_switch == '0') {
        get_template_part('template-parts/footer/footer', $page_container_meta['footer_type']);
    }
    do_action('softim_after_page_content');
?>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
