<?php
/**
 * Theme Default Footer
 * @package softim
 * @since 1.0.0
 */

$copyright_text = !empty(cs_get_option('copyright_text')) ? cs_get_option('copyright_text') : esc_html__('Fly Next Airlines. All rights reserved. ', 'softim') . '<a href="' . esc_url('https://themeforest.net/user/themeim/portfolio') . '">' . esc_html__('ThemeIM', 'softim') . '</a>';
$copyright_text = str_replace('{copy}', '&copy;', $copyright_text);
$copyright_text = str_replace('{year}', date('Y'), $copyright_text);
?>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Footer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<footer class="footer-section pt-120">
    <?php $footer_two_elements_1 = cs_get_option('footer_two_elements_1'); ?>
    <?php $footer_two_elements_2 = cs_get_option('footer_two_elements_2'); ?>
    <?php $footer_two_elements_3 = cs_get_option('footer_two_elements_3'); ?>
    <?php $footer_two_elements_4 = cs_get_option('footer_two_elements_4'); ?>
    <?php $footer_two_elements_5 = cs_get_option('footer_two_elements_5'); ?>
    <?php $footer_two_elements_6 = cs_get_option('footer_two_elements_6'); ?>
    <?php $footer_two_elements_7 = cs_get_option('footer_two_elements_7'); ?>
    <?php if (!empty($footer_two_elements_1['id'])) { ?>
        <div class="footer-element-one">
            <?php echo wp_get_attachment_image($footer_two_elements_1['id'], 'full') ?>
        </div>
    <?php } ?>
    <?php if (!empty($footer_two_elements_2['id'])) { ?>
        <div class="footer-element-two">
            <?php echo wp_get_attachment_image($footer_two_elements_2['id'], 'full') ?>
        </div>
    <?php } ?>
    <?php if (!empty($footer_two_elements_3['id'])) { ?>
        <div class="footer-element-three">
            <?php echo wp_get_attachment_image($footer_two_elements_3['id'], 'full') ?>
        </div>
    <?php } ?>
    <?php if (!empty($footer_two_elements_4['id'])) { ?>
        <div class="footer-element-four">
            <?php echo wp_get_attachment_image($footer_two_elements_4['id'], 'full') ?>
        </div>
    <?php } ?>
    <?php if (!empty($footer_two_elements_5['id'])) { ?>
        <div class="footer-element-five">
            <?php echo wp_get_attachment_image($footer_two_elements_5['id'], 'full') ?>
        </div>
    <?php } ?>
    <?php if (!empty($footer_two_elements_6['id'])) { ?>
        <div class="footer-element-six">
            <?php echo wp_get_attachment_image($footer_two_elements_6['id'], 'full') ?>
        </div>
    <?php } ?>
    <?php if (!empty($footer_two_elements_7['id'])) { ?>
        <div class="footer-element-seven">
            <?php echo wp_get_attachment_image($footer_two_elements_7['id'], 'full') ?>
        </div>
    <?php } ?>
    <?php get_template_part('template-parts/content/footer-widget'); ?>
    <div class="copyright-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 text-center">
                    <div class="copyright-area">
                        <p>
                            <?php
                            echo wp_kses($copyright_text, softim()->kses_allowed_html(array('a')));
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Footer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
