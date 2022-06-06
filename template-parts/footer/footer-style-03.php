<?php
/**
 * Footer Style 02
 * @package softim
 * @since 1.0.0
 */

$call_to_action_text = !empty(cs_get_option('call_to_action_text')) ? cs_get_option('call_to_action_text') : esc_html__('Start Your Flight Training Today', 'softim') . '<span>' . esc_html__('call us now!', 'softim') . '</span>';
$copyright_text = !empty(cs_get_option('copyright_text')) ? cs_get_option('copyright_text') : esc_html__('FlyNext Airlines. All rights reserved.', 'softim') . '<a href="' . esc_url('https://themeforest.net/user/themeim') . '">' . esc_html__('ThemeIM', 'softim') . '</a>';
$copyright_text = str_replace('{copy}', '&copy;', $copyright_text);
$copyright_text = str_replace('{year}', date('Y'), $copyright_text);
?>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Footer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<footer class="footer-section two">
    <?php $footer_three_elements_1 = cs_get_option('footer_three_elements_1'); ?>
    <?php $footer_three_elements_2 = cs_get_option('footer_three_elements_2'); ?>
    <?php $footer_three_elements_3 = cs_get_option('footer_three_elements_3'); ?>
    <?php $footer_three_elements_4 = cs_get_option('footer_three_elements_4'); ?>
    <?php if (!empty($footer_three_elements_1['id'])) { ?>
        <div class="footer-element-three">
            <?php echo wp_get_attachment_image($footer_three_elements_1['id'], 'full') ?>
        </div>
    <?php } ?>
    <?php if (!empty($footer_three_elements_2['id'])) { ?>
        <div class="footer-element-seven two">
            <?php echo wp_get_attachment_image($footer_three_elements_2['id'], 'full') ?>
        </div>
    <?php } ?>
    <?php if (!empty($footer_three_elements_3['id'])) { ?>
        <div class="footer-element-eight">
            <?php echo wp_get_attachment_image($footer_three_elements_3['id'], 'full') ?>
        </div>
    <?php } ?>
    <div class="footer-area ptb-120">
        <?php if (!empty($footer_three_elements_4['id'])) { ?>
            <div class="footer-area-element">
                <?php echo wp_get_attachment_image($footer_three_elements_4['id'], 'full') ?>
            </div>
        <?php } ?>
        <div class="container">
            <div class="footer-top-area">
                <div class="row mb-30-none">
                    <?php
                    $footer_top_icon = cs_get_option('footer_top_icon');
                    $footer_top_repeater = cs_get_option('footer_top_repeater');
                    if ($footer_top_icon) {
                        foreach ($footer_top_repeater as $item) {
                            ?>
                            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                                <div class="footer-widget">
                                    <ul class="footer-contact-list">
                                        <li>
                                            <span class="sub-title"><?php echo esc_html($item['footer_top_text_1']);?></span>
                                            <h4 class="link-title"><a href="<?php echo esc_url($item['footer_top_url']['url']); ?>"><?php echo esc_html($item['footer_top_text_2']);?></a></h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
            <div class="footer-bottom-area">
                <div class="row mb-30-none">
                    <?php get_template_part('template-parts/content/footer-widget'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrapper two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 text-center">
                    <div class="copyright-area">
                        <div class="footer-logo">
                            <a class="site-logo site-title" href="index.html">
                                <img src="assets/images/logo-two.png" alt="site-logo"></a>
                        </div>
                        <p><?php
                            echo wp_kses($copyright_text, softim()->kses_allowed_html(array('a')));
                            ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Footer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->