<?php
/**
 * Header Style 02
 * @package softim
 * @since 1.0.0
 */
$shortcodes_right_content = cs_get_option('header_three_top_right_info_bar_shortcode');

?>

<header class="header-section two">
    <div class="header">
        <div class="header-bottom-area">
            <div class="container custom-container">
                <div class="header-menu-content">
                    <nav class="navbar navbar-expand-xl p-0">
                        <?php
                        $header_four_logo = cs_get_option('header_four_logo');
                        if (has_custom_logo() && empty($header_four_logo['id'])) {
                            the_custom_logo();
                        } elseif (!empty($header_four_logo['id'])) {
                            printf('<a class="site-logo site-title" href="%1$s"><img src="%2$s" alt="%3$s"/></a>', esc_url(get_home_url()), $header_four_logo['url'], $header_four_logo['alt']);
                        } else {
                            printf('<a class="site-title" href="%1$s">%2$s</a>', esc_url(get_home_url()), esc_html(get_bloginfo('title')));
                        }
                        ?>
                        <button class="navbar-toggler d-block d-xl-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggle-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'main-menu',
                                'menu_class' => 'navbar-nav',
                                'container' => false,
                                'fallback_cb' => 'softim_theme_fallback_menu',
                                'items_wrap' => '<ul id="%1$s" class="%2$s navbar-nav main-menu">%3$s</ul>',
                            ));
                            ?>
                            <div class="header-right">
                                <div class="header-action-area">
                                    <div class="header-action">
                                        <a href="<?php echo esc_url(cs_get_option('header_four_navbar_url')); ?>" class="btn--base">
                                            <?php echo esc_html(cs_get_option('header_four_navbar_title')); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>