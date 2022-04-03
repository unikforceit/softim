<?php
/**
 * Template part for displaying single team post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package softim
 */

$softim = softim();
$softim_meta = get_post_meta(get_the_ID(), 'softim_team_options', true);
$img_id = get_post_thumbnail_id(get_the_ID()) ? get_post_thumbnail_id(get_the_ID()) : false;
$img_url_val = $img_id ? wp_get_attachment_image_src($img_id, 'full', false) : '';
$img_url = is_array($img_url_val) && !empty($img_url_val) ? $img_url_val[0] : '';
$img_alt = $img_id ? get_post_meta($img_id, '_wp_attachment_image_alt', true) : '';
$designation = isset($softim_meta['designation']) && !empty($softim_meta['designation']) ? $softim_meta['designation'] : '';
$description = isset($softim_meta['description']) && !empty($softim_meta['description']) ? $softim_meta['description'] : '';
$social_icons = isset($softim_meta['social-icons']) && !empty($softim_meta['social-icons']) ? $softim_meta['social-icons'] : '';
$team_info = isset($softim_meta['team-info']) && !empty($softim_meta['team-info']) ? $softim_meta['team-info'] : '';

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('softim-details-content-area'); ?>>
    <div class="entry-content">
        <div class="top-content-area">
            <div class="img-wrapper" style="background-image: url(<?php echo esc_url($img_url); ?>)">
            </div>
            <div class="content">
                <h2 class="title"><?php echo the_title()?></h2>
                <span class="designation"><?php echo esc_html($designation)?></span>
                <p><?php echo esc_html($description)?></p>
                <ul class="team-contact-list">
                    <?php
                    if (!empty($team_info)) {
                        foreach ($team_info as $info) {
                            printf('<li><i class="%2$s"></i>%1$s</li>', $info['title'], $info['icon']);
                        }
                    }
                    ?>
                </ul>
                <div class="team-social-area">
                    <h3 class="subtitle"><?php echo esc_html__('Follow Me','softim')?></h3>
                    <ul class="social-icon">
                        <?php
                        if (!empty($social_icons)) {
                            foreach ($social_icons as $item) {
                                printf('<li><a href="%1$s"><i class="%2$s"></i></a></li>', $item['url'], $item['icon']);
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php
        the_content();
        $softim->link_pages();
        ?>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
