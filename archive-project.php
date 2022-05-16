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

$tax_args = array(
    'taxonomy' => 'project-cat',
    'number' => 4,
);
$categories = get_terms($tax_args);
?>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Gallery
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="gallery-section ptb-120">
        <div class="container">
            <div class="gallery-filter-wrapper">
                <div class="button-group filter-btn-group two">
                    <button class="active" data-filter="*">All</button>
                    <?php  foreach ($categories as $category) {?>
                        <button data-filter=".<?php echo esc_attr($category->slug);?>"><?php echo esc_html($category->name);?></button>
                    <?php }?>
                </div>
                <div class="grid two">
                    <?php if (have_posts()) : ?>

                        <?php
                        var_dump($wp_query);
                        /* Start the Loop */
                        while (have_posts()) :
                            the_post();

                            get_template_part('template-parts/content', 'project');

                        endwhile;

                    else :
                        get_template_part('template-parts/content', 'none');
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Gallery
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<?php

get_footer();
