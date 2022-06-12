<?php
/**
 * Theme Default Archives Template
 *
 * This page is used for all kind of archives from custom post types to blog to 'by date' archives.
 *
 * Types of archives handled:
 *
 *  - Categories
 *  - Tags
 *  - Taxonomies
 *  - Author Archives
 *  - Date Archives
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package softim
 */


get_header();

    if (isset($_GET['layout'] ) && $_GET['layout'] == '2') {
        get_template_part('template-parts/content-service-single-layout', '2');
    }else{
        get_template_part('template-parts/content-service-single-layout', '1');
    }

get_footer();