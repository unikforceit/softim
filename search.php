<?php
/**
 * Theme Search Result Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package softim
 */

get_header();
$page_layout_options = Softim_Group_Fields_Value::page_layout_options('search');
?>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
           Start Blog
       ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="blog-section search-page-content ptb-120">
        <div class="container">
            <div class="row mb-60-none">
                <div class="<?php echo esc_attr($page_layout_options['content_column_class']);?> mb-60">
                    <div class="row mb-60-none">
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
                                $blog_layout = cs_get_option('blog_archive_layout');

                                if (isset($_GET['layout'] ) && $_GET['layout'] == '2' || $blog_layout == 'layout-2') {
                                    get_template_part('template-parts/content-layout', '2');
                                }else{
                                    get_template_part('template-parts/content', get_post_format());
                                }

                            endwhile;

                        else :

                            get_template_part('template-parts/content', 'none');

                        endif;
                        ?>
                    </div>
                </div>
                <?php if ($page_layout_options['sidebar_enable']):?>
                    <div class="<?php echo esc_attr($page_layout_options['sidebar_column_class']);?> mb-60">
                        <?php get_sidebar();?>
                    </div>
                <?php endif;?>
            </div>
            <nav>
                <?php softim()->post_pagination(); ?>
            </nav>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Blog
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<?php

get_footer();
