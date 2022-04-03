<?php
/**
 * Template part for displaying single package post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package softim
 */

$softim = softim();
$post_single_meta = Softim_Group_Fields_Value::post_meta('deals_single_post');
$packages_single_meta_data = get_post_meta(get_the_ID(), 'softim_packages_options', true);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('deals-details-item'); ?>>

    <div class="entry-content">
        <?php
        if (has_post_thumbnail()) :
            get_template_part('template-parts/content/thumbnail-classic');
        endif;
        ?>
        <ul class="single-meta-item-wrap">
            <li class="single-meta-item">
                <div class="icon">
                    <i class="flaticon-repeat"></i>
                </div>
                <div class="content">
                    <h5 class="title"><?php echo esc_html__('Duration:', 'softim') ?></h5>
                    <span class="post-date"><?php echo esc_html__($packages_single_meta_data['packages_duration_option'], 'softim') ?></span>
                </div>
            </li>
            <li class="single-meta-item">
                <div class="icon">
                    <i class="flaticon-flag"></i>
                </div>
                <div class="content">
                    <h5 class="title"><?php echo esc_html__('Start From:', 'softim') ?></h5>
                    <span class="post-date"><?php echo esc_html__($packages_single_meta_data['packages_price_option'], 'softim') ?></span>
                </div>
            </li>
            <li class="single-meta-item">
                <div class="icon">
                    <i class="flaticon-calendar"></i>
                </div>
                <div class="content">
                    <h5 class="title"><?php echo esc_html__('Date:', 'softim') ?></h5>
                    <span class="post-date"><?php echo esc_html__($packages_single_meta_data['packages_date_option'],'softim')  ?></span>
                </div>
            </li>
            <li class="single-meta-item">
                <div class="icon">
                    <i class="flaticon-user-4"></i>
                </div>
                <div class="content">
                    <h5 class="title"><?php echo esc_html__('Person:', 'softim') ?></h5>
                    <span class="post-date"><?php echo esc_html__($packages_single_meta_data['packages_number_option'],'softim') ?></span>
                </div>
            </li>
        </ul>
        <?php
        the_content();
        $softim->link_pages();
        ?>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->