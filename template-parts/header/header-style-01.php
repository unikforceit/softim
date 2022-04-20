<?php
/**
 * Header Style 01
 * @package softim
 * @since 1.0.0
 */

$shortcodes_right_content = cs_get_option('header_two_top_right_info_bar_shortcode');
?>
<div class="page-wrapper">
    <div class="header-section">
        <div class="header">
            <div class="header-bottom-area">
                <div class="container custom-container">
                    <div class="header-menu-content">
                        <div class="header-left">
                            <?php
                            $header_two_logo = cs_get_option('header_two_logo');
                            if (has_custom_logo() && empty($header_two_logo['id'])) {
                                the_custom_logo();
                            } elseif (!empty($header_two_logo['id'])) {
                                printf('<a class="site-logo" href="%1$s"><img src="%2$s" alt="%3$s"/></a>', esc_url(get_home_url()), $header_two_logo['url'], $header_two_logo['alt']);
                            } else {
                                printf('<a class="site-title" href="%1$s">%2$s</a>', esc_url(get_home_url()), esc_html(get_bloginfo('title')));
                            }
                            ?>
                            <div class="header-toggle-area">
                                <div class="toggle-wrapper">
                                    <div class="toggle-bar">
                                        <div class="toggle">
                                            <div class="element"></div>
                                        </div>
                                        <div class="toggle">
                                            <div class="text"><?php esc_html_e('M','softim')?></div>
                                        </div>
                                        <div class="toggle">
                                            <div class="element"></div>
                                        </div>
                                    </div>
                                    <div class="toggle-bar">
                                        <div class="toggle">
                                            <div class="text"><?php esc_html_e('E','softim')?></div>
                                        </div>
                                        <div class="toggle">
                                            <div class="element"></div>
                                        </div>
                                        <div class="toggle res">
                                            <div class="text"><?php esc_html_e('N','softim')?></div>
                                        </div>
                                        <div class="toggle">
                                            <div class="text"><?php esc_html_e('U','softim')?></div>
                                        </div>
                                    </div>
                                    <div class="toggle-bar">
                                        <div class="toggle">
                                            <div class="element"></div>
                                        </div>
                                        <div class="toggle pos">
                                            <div class="text"><?php esc_html_e('N','softim')?></div>
                                        </div>
                                        <div class="toggle">
                                            <div class="element"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-right">
                            <?php echo do_shortcode($shortcodes_right_content); ?>
                            <div class="btn-wrap">
                                <a href="<?php echo esc_url(cs_get_option('header_two_navbar_url')) ?>"
                                   class="boxed-btn"><i
                                            class="flaticon-airplane-1"></i><?php echo esc_html(cs_get_option('header_two_navbar_title')); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="nav-menu-container">
        <div class="nav-menu-wrapper">
            <span class="nav-menu-close"><i class="fas fa-times"></i></span>
            <div class="menu-element-area">
                <div class="menu-element-one">
                    <?php
                    $header_two_bg_image = cs_get_option('header_two_bg_image');
                    if (!empty($header_two_bg_image['id'])) {
                        printf('<img src="%1$s" alt="%2$s"/>', $header_two_bg_image['url'], $header_two_bg_image['alt']);
                    }
                    ?>
                </div>
                <div class="menu-element-two wow scale" data-wow-duration="1s" data-wow-delay=".4s">
                    <?php
                    $header_two_plane_image = cs_get_option('header_two_plane_image');
                    if (!empty($header_two_plane_image['id'])) {
                        printf('<img src="%1$s" alt="%2$s"/>', $header_two_plane_image['url'], $header_two_plane_image['alt']);

                    }
                    ?>
                </div>
            </div>

            <div class="nav-menu-wrap">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'menu_class' => 'softim-navbar-nav main-menu',
                    'container' => 'div',
                    'container_class' => 'menu-nav navbar-collapse'
                ));
                ?>
                <div class="header-action btn-wrap">
                    <a href="<?php echo esc_url(cs_get_option('header_two_navbar_url')) ?>"
                       class="boxed-btn"><i
                                class="las la-plane-departure"></i><?php echo esc_html(cs_get_option('header_two_navbar_title')); ?>
                    </a>
                </div>
                <div class="header-social-area">
                    <ul class="header-social">
                        <?php
                        $socialIcon = cs_get_option('sidebar_social_repeater');
                        if (!empty($socialIcon)) :
                            foreach ($socialIcon as $icon) :
                                echo '<li><a href=" ' . $icon['sidebar_social_icon_item_url'] . ' ">
                                                <i class="' . $icon['sidebar_social_icon_item_icon'] . '"></i></a></li>';
                            endforeach;
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<header class="header-section">
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
                            <div class="header-right">
                                <div class="search-bar">
                                    <form class="header-search-form">
                                        <input type="search" name="keyword" id="header_search" placeholder="Search...">
                                        <button class="header-search-btn"><i class="las la-search"></i></button>
                                    </form>
                                </div>
                                <div class="header-links-area">
                                    <ul class="header-links">
                                        <li>
                                            <a href="mailto:">
                                                <div class="links-thumb">
                                                    <img src="assets/images/icon/icon-1.png" alt="icon">
                                                </div>
                                                <span>info@softim.com</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:+11256326501">
                                                <div class="links-thumb">
                                                    <img src="assets/images/icon/icon-2.png" alt="icon">
                                                </div>
                                                <span>+11 256 3265 01</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <button class="menu-toggler ml-auto">
                                    <span class="toggle-bar"></span>
                                </button>
                                <div class="menu-toggler-wrapper">
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
                                    </div>
                                </div>
                                <div class="header-action-area">
                                    <div class="header-action">
                                        <a href="contact.html" class="btn--base">GET STARTED</a>
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