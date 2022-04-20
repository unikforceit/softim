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
    <div class="footer-element-one">
        <img src="assets/images/element/element-48.png" alt="element">
    </div>
    <div class="footer-element-two">
        <img src="assets/images/element/element-39.png" alt="element">
    </div>
    <div class="footer-element-three">
        <img src="assets/images/element/element-40.png" alt="element">
    </div>
    <div class="footer-element-four">
        <img src="assets/images/element/element-7.png" alt="element">
    </div>
    <div class="footer-element-five">
        <img src="assets/images/element/element-41.png" alt="element">
    </div>
    <div class="footer-element-six">
        <img src="assets/images/element/element-42.png" alt="element">
    </div>
    <div class="footer-element-seven">
        <img src="assets/images/element/element-39.png" alt="element">
    </div>
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
