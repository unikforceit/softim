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
        <?php  $service_elements_1 = cs_get_option('service_bg1');?>
        <?php  $service_elements_2 = cs_get_option('service_bg2');?>
        <?php  $service_elements_3 = cs_get_option('service_bg3');?>
        <?php  $service_elements_4 = cs_get_option('service_bg4');?>
        <div class="service-element-one">
            <?php echo wp_get_attachment_image($service_elements_1['id'], 'full')?>
        </div>
        <div class="service-element-two">
            <?php echo wp_get_attachment_image($service_elements_2['id'], 'full')?>
        </div>
        <div class="service-element-three">
            <?php echo wp_get_attachment_image($service_elements_3['id'], 'full')?>
        </div>
        <div class="service-element-four">
            <?php echo wp_get_attachment_image($service_elements_4['id'], 'full')?>
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
