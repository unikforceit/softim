<?php
/**
 * Header Style 02
 * @package softim
 * @since 1.0.0
 */
$shortcodes_right_content = cs_get_option('header_three_top_right_info_bar_shortcode');

?>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<header class="header-section home-three">
    <div class="header">
        <div class="header-bottom-area home-three">
            <div class="container custom-container-three">
                <div class="header-menu-content">
                    <nav class="navbar home-three navbar-expand-xl p-0">
                        <?php
                        $header_three_logo = cs_get_option('header_three_logo');
                        if (has_custom_logo() && empty($header_three_logo['id'])) {
                            the_custom_logo();
                        } elseif (!empty($header_three_logo['id'])) {
                            printf('<a class="site-logo site-title home-three-logo" href="%1$s"><img src="%2$s" alt="%3$s"/></a>', esc_url(get_home_url()), $header_three_logo['url'], $header_three_logo['alt']);
                        } else {
                            printf('<a class="site-title" href="%1$s">%2$s</a>', esc_url(get_home_url()), esc_html(get_bloginfo('title')));
                        }
                        ?>
                        <button class="navbar-toggler home-three d-block d-xl-none ml-auto" type="button"
                                data-toggle="collapse" data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="toggle-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="header-right">
                                <button class="menu-toggler style-01 home-three ml-auto">
                                    <span class="toggle-bar home-three"></span>
                                </button>
                                <div class="menu-toggler-wrapper home-three d-block d-xl-none">
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'main-menu',
                                        'menu_class' => 'navbar-nav',
                                        'container' => false,
                                        'fallback_cb' => 'softim_theme_fallback_menu',
                                        'items_wrap' => '<ul id="%1$s" class="%2$s navbar-nav main-menu style-01">%3$s</ul>',
                                    ));
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="logo-wrapper">
                            <?php
                            $header_three_logo = cs_get_option('header_three_logo');
                            if (has_custom_logo() && empty($header_three_logo['id'])) {
                                the_custom_logo();
                            } elseif (!empty($header_three_logo['id'])) {
                                printf('<a class="site-title" href="%1$s"><img src="%2$s" alt="%3$s"/></a>', esc_url(get_home_url()), $header_three_logo['url'], $header_three_logo['alt']);
                            } else {
                                printf('<a class="site-title" href="%1$s">%2$s</a>', esc_url(get_home_url()), esc_html(get_bloginfo('title')));
                            }
                            ?>
                        </div>
                        <div class="touch">
                            <a href="<?php echo esc_url(cs_get_option('header_four_navbar_url')); ?>"><span><?php echo esc_html(cs_get_option('header_four_navbar_title')); ?></span></a>
                            <div class="icon">
                                <i class="las la-arrow-right"></i>
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

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Desktop Creative Menu
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<div class="home-three-menu">
    <div class="menu-open">
        <div class="close-btn">
            <div class="logo">
                <?php
                $header_three_logo_light = cs_get_option('header_three_logo_light');
                if (has_custom_logo() && empty($header_three_logo_light['id'])) {
                    the_custom_logo();
                } elseif (!empty($header_three_logo_light['id'])) {
                    printf('<a class="site-logo site-title home-three-logo" href="%1$s"><img src="%2$s" alt="%3$s"/></a>', esc_url(get_home_url()), $header_three_logo_light['url'], $header_three_logo_light['alt']);
                } else {
                    printf('<a class="site-title" href="%1$s">%2$s</a>', esc_url(get_home_url()), esc_html(get_bloginfo('title')));
                }
                ?>
            </div>
            <div class="cross-btn">
                <a href="javascript:void(0)">
                    <i class="las la-times"></i>
                </a>
            </div>
        </div>
        <div class="nav-wrapper">
            <span class="menu-text">Menu</span>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'menu_class' => 'navbar-nav',
                'container' => false,
                'fallback_cb' => 'softim_theme_fallback_menu',
                'items_wrap' => '<ul id="%1$s" class="%2$s navigation-three">%3$s</ul>',
            ));
            ?>
            <div class="address-wrapper">
                <div class="address">
                    <h6 class="title"><?php echo esc_html(cs_get_option('header_three_social_title')); ?></h6>
                    <p><?php echo esc_html(cs_get_option('header_three_address_info')); ?></p>
                </div>
                <div class="contact">
                    <h6 class="title"><?php echo esc_html(cs_get_option('header_three_contact_title')); ?></h6>
                    <p>
                        <a href="tel:<?php echo esc_html(cs_get_option('header_three_contact_number_url')); ?>"><?php echo esc_html(cs_get_option('header_three_contact_number_title')); ?></a>
                    </p>
                    <p>
                        <a href="mailto:<?php echo esc_html(cs_get_option('header_three_contact_email_url')); ?>"><?php echo esc_html(cs_get_option('header_three_contact_email_title')); ?></a>
                    </p>
                </div>
                <ul class="footer-social">
                    <h6 class="title"><?php echo esc_html(cs_get_option('header_three_social_title')); ?></h6>
                    <?php
                    if (cs_get_option('header_three_social_link')){
                    foreach (cs_get_option('header_three_social_link') as $icon) {
                        ?>
                        <li>
                            <a href="<?php echo esc_url($icon['url']); ?>"><i
                                        class="<?php echo esc_attr($icon['image']); ?>"></i></a>
                        </li>
                    <?php } }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Desktop Creative Menu
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->