<?php
/**
 * Header Style 02
 * @package softim
 * @since 1.0.0
 */
$shortcodes_right_content = cs_get_option('header_three_top_right_info_bar_shortcode');

?>

<div class="header-style-02">
    <!-- support bar area end -->
    <nav class="navbar navbar-area navbar-expand-lg navigation-style-02">
        <div class="container custom-container style-01">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper">
                    <?php
                    $header_three_logo = cs_get_option('header_three_logo');
                    if (has_custom_logo() && empty($header_three_logo['id'])) {
                        the_custom_logo();
                    } elseif (!empty($header_three_logo['id'])) {
                        printf('<a class="site-logo" href="%1$s"><img src="%2$s" alt="%3$s"/></a>', esc_url(get_home_url()), $header_three_logo['url'], $header_three_logo['alt']);
                    } else {
                        printf('<a class="site-title" href="%1$s">%2$s</a>', esc_url(get_home_url()), esc_html(get_bloginfo('title')));
                    }
                    ?>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#softim_main_menu"
                        aria-expanded="false" aria-label="<?php esc_attr__('Toggle navigation','softim')?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'menu_class' => 'navbar-nav',
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'softim_main_menu'
            ));
            ?>
            <div class="nav-right-content">
                <?php echo do_shortcode($shortcodes_right_content); ?>
                <div class="btn-wrap">
                    <a href="<?php echo esc_url(cs_get_option('header_three_navbar_url')) ?>"
                       class="boxed-btn shadow"><i class="flaticon-black-plane"></i><?php echo esc_html(cs_get_option('header_three_navbar_title')); ?>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<header class="header-section two">
    <div class="header">
        <div class="header-bottom-area">
            <div class="container custom-container">
                <div class="header-menu-content">
                    <nav class="navbar navbar-expand-xl p-0">
                        <?php
                        $header_two_logo = cs_get_option('header_two_logo');
                        if (has_custom_logo() && empty($header_two_logo['id'])) {
                            the_custom_logo();
                        } elseif (!empty($header_two_logo['id'])) {
                            printf('<a class="site-logo site-title" href="%1$s"><img src="%2$s" alt="%3$s"/></a>', esc_url(get_home_url()), $header_two_logo['url'], $header_two_logo['alt']);
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
                                'items_wrap'           => '<ul id="%1$s" class="%2$s navbar-nav main-menu">%3$s</ul>',
                            ));
                            ?>
                            <div class="header-right">
                                <div class="header-action-area">
                                    <div class="header-action">
                                        <a href="<?php echo esc_url(cs_get_option('header_navbar_url')) ?>"
                                           class="btn--base"><?php echo esc_html(cs_get_option('header_navbar_title')); ?>
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
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->