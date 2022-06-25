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
$project_meta = get_post_meta(get_the_ID(), 'softim_project_options', true);
?>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Gallery
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="gallery-section ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="gallery-item details">
                        <?php if (has_post_thumbnail()) { ?>
                            <div class="gallery-thumb">
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                        <?php } ?>
                        <div class="gallery-content-area">
                            <div class="row justify-content-center mb-30-none">
                                <div class="col-xl-8 col-lg-8 mb-30">
                                    <div class="gallery-content text-start">
                                        <h3 class="title"><?php the_title(); ?></h3>
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 mb-30">
                                    <div class="gallery-sidebar text-start">
                                        <div class="gallery-sidebar-widget">
                                            <ul class="gallery-sidebar-widget-list">
                                                <li>
                                                    <h5 class="title"><?php echo esc_html('Client'); ?></h5>
                                                    <span class="sub-title">
                                                        <?php echo esc_html($project_meta['client']); ?>
                                                    </span>
                                                </li>
                                                <li>
                                                    <h5 class="title"><?php echo esc_html('Date'); ?></h5>
                                                    <span class="sub-title">
                                                        <?php echo get_the_time('F j, Y'); ?>
                                                    </span>
                                                </li>
                                                <li>
                                                    <h5 class="title"><?php echo esc_html('Service'); ?></h5>
                                                    <span class="sub-title">
                                                        <?php echo softim_post_category(); ?>
                                                    </span>
                                                </li>
                                                <li>
                                                    <h5 class="title"><?php echo esc_html('Web'); ?></h5>
                                                    <span class="sub-title">
                                                        <?php echo esc_html($project_meta['web_link']); ?>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Gallery
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Gallery-widget-item
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<?php
//setup query
$args = array(
    'post_type' => 'project',
    'post_status' => 'publish',
    'ignore_sticky_posts' => 1,
);
$post_data = new \WP_Query($args);
?>
    <section class="gallery-widget-item-section ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="gallery-widget-item-slider">
                        <div class="swiper-wrapper">
                            <?php if ($post_data->have_posts()) {
                                while ($post_data->have_posts()) {
                                    $post_data->the_post();
                                    ?>
                                    <div class="swiper-slide">
                                        <div class="gallery-widget-item">
                                            <div class="gallery-widget-thumb">
                                                <?php if (has_post_thumbnail()) { ?>
                                                    <?php the_post_thumbnail('full'); ?>
                                                <?php } ?>
                                            </div>
                                            <div class="gallery-widget-content">
                                                <span class="sub-title"><?php echo softim_post_category();?></span>
                                                <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                            } ?>
                        </div>
                        <div class="slider-prev">
                            <span><?php echo esc_html('Previous Project'); ?></span>
                        </div>
                        <div class="slider-next">
                            <span><?php echo esc_html('Next Project'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Gallery-widget-item
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<?php
//setup query
$args2 = array(
    'post_type' => 'project',
    'post_status' => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page' => 3,
);
$post_data2 = new \WP_Query($args2);
?>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Related project
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="gallery-section ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 text-center">
                    <div class="section-header">
                        <h2 class="section-title"><?php echo esc_html('Related Projects'); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-30-none">
            <?php if ($post_data2->have_posts()) {
                while ($post_data2->have_posts()) {
                    $post_data2->the_post();
                    ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <?php if (has_post_thumbnail()) { ?>
                                    <?php the_post_thumbnail('full'); ?>
                                <?php } ?>
                                <div class="gallery-thumb-overlay">
                                    <div class="gallery-icon">
                                        <a href="<?php the_post_thumbnail_url();?>">
                                            <?php echo wp_get_attachment_image(softim_get_post_meta('softim_project_options', 'icon_image'), 'full'); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-content">
                                <span class="sub-title"><?php echo softim_post_category(); ?></span>
                                <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            </div>
                        </div>
                    </div>
                <?php }
            } ?>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Related project
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<?php

get_footer();