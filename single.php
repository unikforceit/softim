<?php
/**
 * Blog Single Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package softim
 */

get_header();
$softim = softim();
$page_layout_meta = Softim_Group_Fields_Value::page_layout_options('blog_single');
$full_width_class = $page_layout_meta['content_column_class'] === 'col-lg-12' ? ' full-width-content ' : '';
if ($softim->is_softim_core_active()){
    softim_core()->setPostViews(get_the_ID());
}
?>

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Blog
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="blog-section ptb-120">
        <div class="container">
            <div class="row justify-content-center mb-60-none">
                <div class="col-xl-8 col-lg-8 mb-60">
                    <div class="row justify-content-center mb-60-none">
                        <div class="col-xl-12 mb-60">
                            <?php
                            while ( have_posts() ) :
                                the_post();
                                get_template_part( 'template-parts/content', 'single' );
                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() || get_option( 'thread_comments' )) :
                                    comments_template();
                                endif;
                            endwhile; // End of the loop.
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-60">
                    <?php get_sidebar();?>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Blog
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<?php
get_footer();
