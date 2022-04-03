<?php
/**
 * Single Service Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package softim
 */

get_header();
$page_layout_meta = Softim_Group_Fields_Value::page_layout_options('service_single');
?>
    <div id="primary" class="service-content-area service-details-page <?php echo esc_attr($full_width_class);?>">
        <main id="main" class="site-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
						<?php
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', 'service-single' );
							$service_details_comment = cs_get_option('service_details_comment_enable');
							if (!empty($service_details_comment)){
                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() || get_option( 'thread_comments' )) :
                                    comments_template();
                                endif;
                            }
						endwhile; // End of the loop.
						?>
                    </div>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();
