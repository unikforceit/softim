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
$page_layout_options = Softim_Group_Fields_Value::page_layout_options('archive');
?>

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Blog
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="blog-section ptb-120">
        <div class="container">
            <div class="row justify-content-center mb-60-none">
                <div class="col-xl-8 col-lg-8 mb-60">
                    <div class="row justify-content-center mb-60-none">
                        <?php
                        if (have_posts()) :

                            /* Start the Loop */
                            while (have_posts()) :
                                the_post();
                                /*
                                 * Include the Post-Type-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                 */
                                get_template_part('template-parts/content', get_post_format());

                            endwhile;

                        else :

                            get_template_part('template-parts/content', 'none');

                        endif;
                        ?>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-60">
                    <?php get_sidebar(); ?>
                </div>
            </div>
            <nav>
                <ul class="pagination">
                    <li class="page-item prev">
                        <a class="page-link" href="#" rel="prev" aria-label="Prev &raquo;">PREV</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">01</a></li>
                    <li class="page-item active" aria-current="page"><span class="page-link">02</span></li>
                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                    <li class="page-item"><a class="page-link" href="#">04</a></li>
                    <li class="page-item"><a class="page-link" href="#">05</a></li>
                    <li class="page-item next">
                        <a class="page-link" href="#" rel="next" aria-label="Next &raquo;">NEXT</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Blog
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<?php

get_footer();
