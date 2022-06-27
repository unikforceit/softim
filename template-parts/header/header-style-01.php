<?php
/**
 * Header Style 01
 * @package softim
 * @since 1.0.0
 */

$shortcodes_right_content = cs_get_option('header_two_top_right_info_bar_shortcode');
?>
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

                        <button class="navbar-toggler d-block d-xl-none ml-auto" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="toggle-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <div class="header-right">

                                <div class="search-bar">
                                    <form id="searchform" class="searchbox header-search-form" action="<?php echo home_url('/');?>"  method="get">
                                        <input type="text" id="search" placeholder="Search" class="input" name="s" value=""/>
                                        <button class="header-search-btn"><i class="las la-search"></i></button>
                                        <input type="hidden" name="post_type" value="post" />
                                    </form>
                                </div>
                                <div class="header-links-area">
                                    <ul class="header-links">
                                        <?php
                                        $header_links_icon = cs_get_option('header_links_icon');
                                        $header_links_repeater = cs_get_option('header_links_repeater');
                                        if ($header_links_repeater) {
                                            foreach ($header_links_repeater as $item) {
                                                ?>
                                                <li>
                                                    <a href="<?php echo esc_url($item['sidebar_social_icon_item_url']); ?>">
                                                        <div class="links-thumb">
                                                            <?php echo wp_get_attachment_image($item['header_two_icon']['id'], 'full'); ?>
                                                        </div>
                                                        <span><?php echo esc_html($item['header_two_icon_text']); ?></span>
                                                    </a>
                                                </li>
                                            <?php }
                                        } ?>

                                    </ul>
                                </div>

                                <button class="menu-toggler ml-auto">
                                    <span class="toggle-bar"></span>
                                </button>

                                <div class="menu-toggler-wrapper">
                                    <div class="collapse navbar-collapse justify-content-end"
                                         id="navbarSupportedContent">
                                        <?php
                                        wp_nav_menu(array(
                                            'theme_location' => 'main-menu',
                                            'menu_class' => 'navbar-nav',
                                            'container' => false,
                                            'fallback_cb' => 'softim_theme_fallback_menu',
                                            'items_wrap' => '<ul id="%1$s" class="%2$s navbar-nav main-menu">%3$s</ul>',
                                        ));
                                        ?>
                                    </div>
                                </div>

                                <?php if (softim()->is_softim_core_active()) : ?>
                                    <div class="header-action-area">
                                        <div class="header-action">
                                            <a href="<?php echo esc_url(cs_get_option('header_two_navbar_url')) ?>"
                                               class="btn--base"><?php echo esc_html(cs_get_option('header_two_navbar_title')); ?>
                                            </a>
                                        </div>
                                    </div>
                                <?php endif; ?>
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