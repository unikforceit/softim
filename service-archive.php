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
?>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Service
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="service-section two ptb-120">
        <div class="service-element-one">
            <img src="assets/images/element/element-34.png" alt="element">
        </div>
        <div class="service-element-two">
            <img src="assets/images/element/element-35.png" alt="element">
        </div>
        <div class="service-element-three">
            <img src="assets/images/element/element-36.png" alt="element">
        </div>
        <div class="service-element-four">
            <img src="assets/images/element/element-36.png" alt="element">
        </div>
        <div class="container">
            <div class="row justify-content-center mb-30-none">
                <?php if (have_posts()) : ?>

                    <?php
                    /* Start the Loop */
                    while (have_posts()) :
                        the_post();

                        get_template_part('template-parts/content', 'service');

                    endwhile;

                else :
                    get_template_part('template-parts/content', 'none');
                endif;
                ?>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Service
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<?php

get_footer();
