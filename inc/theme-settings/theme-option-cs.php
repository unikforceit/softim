<?php
/**
 * Theme Options
 * @package softim
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); // exit if access directly
}
// Control core classes for avoid errors
if (class_exists('CSF')) {

    $allowed_html = softim()->kses_allowed_html(array('mark'));
    $prefix = 'softim';
    // Create options
    CSF::createOptions($prefix . '_theme_options', array(
        'menu_title' => esc_html__('Theme Options', 'softim'),
        'menu_slug' => 'softim_theme_options',
        'menu_parent' => 'softim_theme_options',
        'menu_type' => 'submenu',
        'footer_credit' => ' ',
        'menu_icon' => 'fa fa-filter',
        'show_footer' => false,
        'enqueue_webfont' => false,
        'show_search' => true,
        'show_reset_all' => true,
        'show_reset_section' => true,
        'show_all_options' => false,
        'theme' => 'dark',
        'framework_title' => softim()->get_theme_info('name')
    ));

    /*-------------------------------------------------------
        ** General  Options
    --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('General', 'softim'),
        'id' => 'general_options',
        'icon' => 'fas fa-cogs',
    ));
    /* Preloader */
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Preloader & SVG Enable', 'softim'),
        'id' => 'theme_general_preloader_options',
        'icon' => 'fa fa-spinner',
        'parent' => 'general_options',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Preloader Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'preloader_enable',
                'title' => esc_html__('Preloader', 'softim'),
                'type' => 'switcher',
                'desc' => wp_kses(__('you can set <mark>Yes / No</mark> to enable/disable preloader', 'softim'), $allowed_html),
                'default' => true,
            ),
            array(
                'id' => 'preloader_bg_color',
                'title' => esc_html__('Background Color', 'softim'),
                'type' => 'color',
                'default' => '#ffffff',
                'desc' => wp_kses(__('you can set <mark>overlay color</mark> for preloader background image', 'softim'), $allowed_html),
                'dependency' => array('preloader_enable', '==', 'true')
            ),
            array(
                'id' => 'enable_svg_upload',
                'type' => 'switcher',
                'title' => esc_html__('Enable Svg Upload ?', 'softim'),
                'desc' => esc_html__('If you want to enable or disable svg upload you can set ( YES / NO )', 'softim'),
                'default' => false,
            ),
        )
    ));

    /*-------------------------------------------------------
           ** Typography  Options
    --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'typography',
        'title' => esc_html__('Typography', 'softim'),
        'icon' => 'fas fa-text-height',
        'parent' => 'general_options',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Body Font Options', 'softim') . '</h3>',
            ),
            array(
                'type' => 'typography',
                'title' => esc_html__('Typography', 'softim'),
                'id' => '_body_font',
                'default' => array(
                    'font-family' => 'Poppins',
                    'font-size' => '16',
                    'line-height' => '26',
                    'unit' => 'px',
                    'type' => 'google',
                ),
                'color' => false,
                'subset' => false,
                'text_align' => false,
                'text_transform' => false,
                'letter_spacing' => false,
                'line_height' => false,
                'desc' => wp_kses(__('you can set <mark>font</mark> for all html tags (if not use different heading font)', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'body_font_variant',
                'type' => 'select',
                'title' => esc_html__('Load Font Variant', 'softim'),
                'multiple' => true,
                'chosen' => true,
                'options' => array(
                    '300' => esc_html__('Light 300', 'softim'),
                    '400' => esc_html__('Regular 400', 'softim'),
                    '500' => esc_html__('Medium 500', 'softim'),
                    '600' => esc_html__('Semi Bold 600', 'softim'),
                    '700' => esc_html__('Bold 700', 'softim'),
                    '800' => esc_html__('Extra Bold 800', 'softim'),
                ),
                'default' => array('400', '500', '700')
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Heading Font Options', 'softim') . '</h3>',
            ),
            array(
                'type' => 'switcher',
                'id' => 'heading_font_enable',
                'title' => esc_html__('Heading Font', 'softim'),
                'desc' => wp_kses(__('you can set <mark>yes</mark> to select different heading font', 'softim'), $allowed_html),
                'default' => true
            ),
            array(
                'type' => 'typography',
                'title' => esc_html__('Typography', 'softim'),
                'id' => 'heading_font',
                'default' => array(
                    'font-family' => 'Jost',
                    'type' => 'google',
                ),
                'color' => false,
                'subset' => false,
                'text_align' => false,
                'text_transform' => false,
                'letter_spacing' => false,
                'font_size' => false,
                'line_height' => false,
                'desc' => wp_kses(__('you can set <mark>font</mark> for  for heading tag .eg: h1,h2mh3,h4,h5,h6', 'softim'), $allowed_html),
                'dependency' => array('heading_font_enable', '==', 'true')
            ),
            array(
                'id' => 'heading_font_variant',
                'type' => 'select',
                'title' => esc_html__('Load Font Variant', 'softim'),
                'multiple' => true,
                'chosen' => true,
                'options' => array(
                    '300' => esc_html__('Light 300', 'softim'),
                    '400' => esc_html__('Regular 400', 'softim'),
                    '500' => esc_html__('Medium 500', 'softim'),
                    '600' => esc_html__('Semi Bold 600', 'softim'),
                    '700' => esc_html__('Bold 700', 'softim'),
                    '800' => esc_html__('Extra Bold 800', 'softim'),
                ),
                'default' => array('400', '500', '600', '700', '800'),
                'dependency' => array('heading_font_enable', '==', 'true')
            ),
        )
    ));

    /* Preloader */
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Back To Top', 'softim'),
        'id' => 'theme_general_back_top_options',
        'icon' => 'fa fa-arrow-up',
        'parent' => 'general_options',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Back Top Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'back_top_enable',
                'title' => esc_html__('Back Top', 'softim'),
                'type' => 'switcher',
                'desc' => wp_kses(__('you can set <mark>Yes / No</mark> to show/hide back to top', 'softim'), $allowed_html),
                'default' => true,
            ),
            array(
                'id' => 'back_top_icon',
                'title' => esc_html__('Back Top Icon', 'softim'),
                'type' => 'icon',
                'default' => 'fa fa-angle-up',
                'desc' => wp_kses(__('you can set <mark>icon</mark> for back to top.', 'softim'), $allowed_html),
                'dependency' => array('back_top_enable', '==', 'true')
            ),
        )
    ));

    /*----------------------------------
        Header & Footer Style
    -----------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Set Header & Footer Type', 'softim'),
        'id' => 'header_footer_style_options',
        'icon' => 'eicon-banner',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => esc_html__('Global Header Style', 'softim'),
            ),
            array(
                'id' => 'navbar_type',
                'title' => esc_html__('Navbar Type', 'softim'),
                'type' => 'image_select',
                'options' => array(
                    '' => SOFTIM_THEME_SETTINGS_IMAGES . '/header/01.png',
                    'style-01' => SOFTIM_THEME_SETTINGS_IMAGES . '/header/02.png',
                    'style-02' => SOFTIM_THEME_SETTINGS_IMAGES . '/header/03.png',
                    'style-03' => SOFTIM_THEME_SETTINGS_IMAGES . '/header/04.png'
                ),
                'default' => '',
                'desc' => wp_kses(__('you can set <mark>navbar type</mark> it will show in every page except you select specific navbar type form page settings.', 'softim'), $allowed_html),
            ),
            array(
                'type' => 'subheading',
                'content' => esc_html__('Global Footer Style', 'softim'),
            ),
            array(
                'id' => 'footer_type',
                'title' => esc_html__('Footer Type', 'softim'),
                'type' => 'image_select',
                'options' => array(
                    '' => SOFTIM_THEME_SETTINGS_IMAGES . '/footer/01.png',
                    'style-01' => SOFTIM_THEME_SETTINGS_IMAGES . '/footer/02.png',
                    'style-02' => SOFTIM_THEME_SETTINGS_IMAGES . '/footer/03.png'
                ),
                'default' => '',
                'desc' => wp_kses(__('you can set <mark>footer type</mark> it will show in every page except you select specific navbar type form page settings.', 'softim'), $allowed_html),
            ),
        )
    ));

    /*-------------------------------------------------------
       ** Entire Site Header  Options
   --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'headers_settings',
        'title' => esc_html__('Headers', 'softim'),
        'icon' => 'fa fa-home'
    ));
    /* Header Style 01 */
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Header One', 'softim'),
        'id' => 'theme_header_one_options',
        'icon' => 'fa fa-image',
        'parent' => 'headers_settings',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Logo Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_one_logo',
                'type' => 'media',
                'title' => esc_html__('Logo', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> logo</mark> here it will overwrite customizer uploaded logo', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'header_navbar_button',
                'type' => 'switcher',
                'title' => esc_html__('Info Button', 'softim'),
                'default' => true,
                'desc' => wp_kses(__('you can <mark> show/hide</mark> navbar button of header two', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'header_navbar_title',
                'type' => 'text',
                'title' => esc_html__('Button Title', 'softim'),
                'default' => esc_html__('Book Now', 'softim'),
                'dependency' => array('header_navbar_button', '==', 'true')
            ),
            array(
                'id' => 'header_navbar_url',
                'type' => 'text',
                'title' => esc_html__('Button URL', 'softim'),
                'default' => '#',
                'dependency' => array('header_navbar_button', '==', 'true')
            ),
        )
    ));

    /* Header Style 02 */
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Header Two', 'softim'),
        'id' => 'theme_header_two_options',
        'icon' => 'fa fa-image',
        'parent' => 'headers_settings',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Navbar Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_two_logo',
                'type' => 'media',
                'title' => esc_html__('Logo', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> logo</mark> here it will overwrite customizer uploaded logo', 'softim'), $allowed_html),
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Side Nav Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_two_plane_image',
                'type' => 'media',
                'title' => esc_html__('Plane Image', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> logo</mark> here it will overwrite customizer uploaded logo', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'header_two_bg_image',
                'type' => 'media',
                'title' => esc_html__('Sidebar Background Image', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> logo</mark> here it will overwrite customizer uploaded logo', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'sidebar_social_icon',
                'type' => 'switcher',
                'title' => esc_html__('Social Icon', 'softim'),
                'default' => true,
                'desc' => wp_kses(__('you can <mark> show/hide</mark> navbar button of header two', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'sidebar_social_repeater',
                'type' => 'repeater',
                'title' => esc_html__('Social Item Repeater', 'softim'),
                'dependency' => array('sidebar_social_icon', '==', 'true'),
                'fields' => array(
                    array(
                        'id' => 'sidebar_social_icon_item_icon',
                        'type' => 'icon',
                        'title' => esc_html__('Social Item Icon', 'softim'),
                        'default' => 'flaticon-call'
                    ),
                    array(
                        'id' => 'sidebar_social_icon_item_url',
                        'type' => 'text',
                        'title' => esc_html__('Social URL', 'softim'),
                        'default' => '#'
                    ),
                )
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Menu Right Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_two_top_right_info_bar_shortcode',
                'type' => 'textarea',
                'title' => esc_html__('Right Content Shortcode', 'softim'),
                'shortcoder' => 'softim_shortcodes'
            ),
            array(
                'id' => 'header_two_navbar_button',
                'type' => 'switcher',
                'title' => esc_html__('Info Button', 'softim'),
                'default' => true,
                'desc' => wp_kses(__('you can <mark> show/hide</mark> navbar button of header two', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'header_two_navbar_title',
                'type' => 'text',
                'title' => esc_html__('Button Title', 'softim'),
                'default' => esc_html__('Book Now', 'softim'),
                'dependency' => array('header_two_navbar_button', '==', 'true')
            ),
            array(
                'id' => 'header_two_navbar_url',
                'type' => 'text',
                'title' => esc_html__('Button URL', 'softim'),
                'default' => '#',
                'dependency' => array('header_two_navbar_button', '==', 'true')
            ),
        )
    ));
    /* Header Style 03 */
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Header Three', 'softim'),
        'id' => 'theme_header_three_options',
        'icon' => 'fa fa-image',
        'parent' => 'headers_settings',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Navbar Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_three_logo',
                'type' => 'media',
                'title' => esc_html__('Logo', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> logo</mark> here it will overwrite customizer uploaded logo', 'softim'), $allowed_html),
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('info Bar Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_three_top_right_info_bar_shortcode',
                'type' => 'textarea',
                'title' => esc_html__('Right Content Shortcode', 'softim'),
                'shortcoder' => 'softim_shortcodes'
            ),
            array(
                'id' => 'header_three_navbar_button',
                'type' => 'switcher',
                'title' => esc_html__('Info Button', 'softim'),
                'default' => true,
                'desc' => wp_kses(__('you can <mark> show/hide</mark> navbar button of header two', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'header_three_navbar_button_spacing',
                'title' => esc_html__('Booking BUtton Margin Right', 'softim'),
                'type' => 'slider',
                'desc' => wp_kses(__('you can set <mark>padding</mark> for footer bottom', 'softim'), $allowed_html),
                'min' => 0,
                'max' => 500,
                'step' => 1,
                'unit' => 'px',
                'default' => 40,
                'dependency' => array('header_three_navbar_button', '==', 'true')
            ),
            array(
                'id' => 'header_three_navbar_title',
                'type' => 'text',
                'title' => esc_html__('Button Title', 'softim'),
                'default' => esc_html__('APPLY ONLINE', 'softim'),
                'dependency' => array('header_three_navbar_button', '==', 'true')
            ),
            array(
                'id' => 'header_three_navbar_url',
                'type' => 'text',
                'title' => esc_html__('Button URL', 'softim'),
                'default' => '#',
                'dependency' => array('header_three_navbar_button', '==', 'true')
            ),
        )
    ));
    /* Header Style 03 */
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Header Four', 'softim'),
        'id' => 'theme_header_four_options',
        'icon' => 'fa fa-image',
        'parent' => 'headers_settings',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Navbar Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_four_logo',
                'type' => 'media',
                'title' => esc_html__('Logo', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> logo</mark> here it will overwrite customizer uploaded logo', 'softim'), $allowed_html),
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('info Bar Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_four_navbar_button',
                'type' => 'switcher',
                'title' => esc_html__('Info Button', 'softim'),
                'default' => true,
                'desc' => wp_kses(__('you can <mark> show/hide</mark> navbar button of header two', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'header_four_navbar_button_spacing',
                'title' => esc_html__('Booking BUtton Margin Right', 'softim'),
                'type' => 'slider',
                'desc' => wp_kses(__('you can set <mark>padding</mark> for footer bottom', 'softim'), $allowed_html),
                'min' => 0,
                'max' => 500,
                'step' => 1,
                'unit' => 'px',
                'default' => 40,
                'dependency' => array('header_four_navbar_button', '==', 'true')
            ),
            array(
                'id' => 'header_four_navbar_title',
                'type' => 'text',
                'title' => esc_html__('Book Now', 'softim'),
                'default' => esc_html__('APPLY ONLINE', 'softim'),
                'dependency' => array('header_four_navbar_button', '==', 'true')
            ),
            array(
                'id' => 'header_four_navbar_url',
                'type' => 'text',
                'title' => esc_html__('Button URL', 'softim'),
                'default' => '#',
                'dependency' => array('header_four_navbar_button', '==', 'true')
            ),
        )
    ));
    /* Breadcrumb */
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Breadcrumb', 'softim'),
        'id' => 'breadcrumb_options',
        'icon' => ' eicon-product-breadcrumbs',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Breadcrumb Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'breadcrumb_enable',
                'title' => esc_html__('Breadcrumb', 'softim'),
                'type' => 'switcher',
                'desc' => wp_kses(__('you can set <mark>Yes / No</mark> to show/hide breadcrumb', 'softim'), $allowed_html),
                'default' => true,
            ),
            array(
                'id' => 'breadcrumb_bg',
                'title' => esc_html__('Background Image', 'softim'),
                'type' => 'background',
                'desc' => wp_kses(__('you can set <mark>background</mark> for breadcrumb', 'softim'), $allowed_html),
                'default' => array(
                    'background-size' => 'cover',
                    'background-position' => 'center bottom',
                    'background-repeat' => 'no-repeat',
                ),
                'background_color' => false,
                'dependency' => array('breadcrumb_enable', '==', 'true')
            ),
            array(
                'id' => 'breadcrumb_bg_color',
                'title' => esc_html__('Breadcrumb Background Color', 'softim'),
                'type' => 'color',
                'default' => 'rgba(0, 27, 97, 0.502)',
                'desc' => wp_kses(__('you can set <mark>overlay color</mark> for Breadcrumb background image', 'softim'), $allowed_html),
                'dependency' => array('breadcrumb_enable', '==', 'true')
            ),
        )
    ));


    /*-------------------------------------------------------
           ** Footer  Options
    --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Footer', 'softim'),
        'id' => 'footer_options',
        'icon' => ' eicon-footer',

    ));
    CSF::createSection($prefix . '_theme_options', array(
        'parent' => 'footer_options',
        'id' => 'footer_general_options',
        'title' => esc_html__('Footer One', 'softim'),
        'icon' => 'fa fa-list-ul',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Settings One', 'softim') . '</h3>'
            ),
            array(
                'id' => 'footer_spacing',
                'title' => esc_html__('Footer Spacing', 'softim'),
                'type' => 'switcher',
                'desc' => wp_kses(__('you can set <mark>Yes / No</mark> to set footer spacing', 'softim'), $allowed_html),
                'default' => true,
            ),
            array(
                'id' => 'footer_top_spacing',
                'title' => esc_html__('Footer Top Spacing', 'softim'),
                'type' => 'slider',
                'desc' => wp_kses(__('you can set <mark>padding</mark> for footer top', 'softim'), $allowed_html),
                'min' => 0,
                'max' => 500,
                'step' => 1,
                'unit' => 'px',
                'default' => 100,
                'dependency' => array('footer_spacing', '==', 'true')
            ),
            array(
                'id' => 'footer_bottom_spacing',
                'title' => esc_html__('Footer Bottom Spacing', 'softim'),
                'type' => 'slider',
                'desc' => wp_kses(__('you can set <mark>padding</mark> for footer bottom', 'softim'), $allowed_html),
                'min' => 0,
                'max' => 500,
                'step' => 1,
                'unit' => 'px',
                'default' => 65,
                'dependency' => array('footer_spacing', '==', 'true')
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Copyright Area Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'copyright_area_spacing',
                'title' => esc_html__('Copyright Area Spacing', 'softim'),
                'type' => 'switcher',
                'desc' => wp_kses(__('you can set <mark>Yes / No</mark> to set copyright area spacing', 'softim'), $allowed_html),
                'default' => true,
            ),
            array(
                'id' => 'copyright_text',
                'title' => esc_html__('Copyright Area Text', 'softim'),
                'type' => 'textarea',
                'desc' => wp_kses(__('use  <mark>{copy}</mark> for copyright symbol, use <mark>{year}</mark> for current year, ', 'softim'), $allowed_html)
            ),
            array(
                'id' => 'copyright_area_top_spacing',
                'title' => esc_html__('Copyright Area Top Spacing', 'softim'),
                'type' => 'slider',
                'desc' => wp_kses(__('you can set <mark>padding</mark> for copyright area top', 'softim'), $allowed_html),
                'min' => 0,
                'max' => 500,
                'step' => 1,
                'unit' => 'px',
                'default' => 20,
                'dependency' => array('copyright_area_spacing', '==', 'true')
            ),
            array(
                'id' => 'copyright_area_bottom_spacing',
                'title' => esc_html__('Copyright Area Bottom Spacing', 'softim'),
                'type' => 'slider',
                'desc' => wp_kses(__('you can set <mark>padding</mark> for copyright area bottom', 'softim'), $allowed_html),
                'min' => 0,
                'max' => 500,
                'step' => 1,
                'unit' => 'px',
                'default' => 20,
                'dependency' => array('copyright_area_spacing', '==', 'true')
            )
        )
    ));
    CSF::createSection($prefix . '_theme_options', array(
        'parent' => 'footer_options',
        'id' => 'footer_two_options',
        'title' => esc_html__('Footer Two', 'softim'),
        'icon' => 'fa fa-list-ul',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Top Settings', 'softim') . '</h3>'
            ),
            array(
                'id' => 'footer_two_logo',
                'type' => 'media',
                'title' => esc_html__('Logo', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> logo</mark> here it will overwrite customizer uploaded logo', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'footer_two_paragraph',
                'title' => esc_html__('Paragraph Area Text', 'softim'),
                'type' => 'textarea',
                'desc' => wp_kses(__('Enter Your Footer Paragraph', 'softim'), $allowed_html)
            ),
            array(
                'id' => 'footer_two_top_repeater',
                'type' => 'repeater',
                'title' => esc_html__('Footer Top Widget Repeater', 'softim'),
                'fields' => array(
                    array(
                        'id' => 'footer_two_top_item_title',
                        'type' => 'text',
                        'title' => esc_html__('Footer Top Widget Title', 'softim'),
                        'default' => esc_html__('EUROPE', 'softim'),
                    ),
                    array(
                        'id' => 'footer_social_icon_item_paragraph',
                        'type' => 'textarea',
                        'title' => esc_html__('Footer Top Widget Paragraph', 'softim'),
                        'default' => esc_html__('Europe 45 Gloucester Road London DT1M 3BF +44 (0)20 3671 5709', 'softim'),
                    ),
                )
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Settings Two', 'softim') . '</h3>'
            ),
            array(
                'id' => 'footer_two_spacing',
                'title' => esc_html__('Footer Spacing', 'softim'),
                'type' => 'switcher',
                'desc' => wp_kses(__('you can set <mark>Yes / No</mark> to set footer spacing', 'softim'), $allowed_html),
                'default' => true,
            ),
            array(
                'id' => 'footer_two_top_spacing',
                'title' => esc_html__('Footer Top Spacing', 'softim'),
                'type' => 'slider',
                'desc' => wp_kses(__('you can set <mark>padding</mark> for footer top', 'softim'), $allowed_html),
                'min' => 0,
                'max' => 500,
                'step' => 1,
                'unit' => 'px',
                'default' => 100,
                'dependency' => array('footer_two_spacing', '==', 'true')
            ),
            array(
                'id' => 'footer_two_bottom_spacing',
                'title' => esc_html__('Footer Bottom Spacing', 'softim'),
                'type' => 'slider',
                'desc' => wp_kses(__('you can set <mark>padding</mark> for footer bottom', 'softim'), $allowed_html),
                'min' => 0,
                'max' => 500,
                'step' => 1,
                'unit' => 'px',
                'default' => 0,
                'dependency' => array('footer_two_spacing', '==', 'true')
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Copyright Area Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'copyright_two_area_spacing',
                'title' => esc_html__('Copyright Area Spacing', 'softim'),
                'type' => 'switcher',
                'desc' => wp_kses(__('you can set <mark>Yes / No</mark> to set copyright area spacing', 'softim'), $allowed_html),
                'default' => true,
            ),
            array(
                'id' => 'copyright_text',
                'title' => esc_html__('Copyright Area Text', 'softim'),
                'type' => 'textarea',
                'desc' => wp_kses(__('use  <mark>{copy}</mark> for copyright symbol, use <mark>{year}</mark> for current year, ', 'softim'), $allowed_html)
            ),
            array(
                'id' => 'copyright_two_area_top_spacing',
                'title' => esc_html__('Copyright Area Top Spacing', 'softim'),
                'type' => 'slider',
                'desc' => wp_kses(__('you can set <mark>padding</mark> for copyright area top', 'softim'), $allowed_html),
                'min' => 0,
                'max' => 500,
                'step' => 1,
                'unit' => 'px',
                'default' => 60,
                'dependency' => array('copyright_two_area_spacing', '==', 'true')
            ),
            array(
                'id' => 'copyright_two_area_bottom_spacing',
                'title' => esc_html__('Copyright Area Bottom Spacing', 'softim'),
                'type' => 'slider',
                'desc' => wp_kses(__('you can set <mark>padding</mark> for copyright area bottom', 'softim'), $allowed_html),
                'min' => 0,
                'max' => 500,
                'step' => 1,
                'unit' => 'px',
                'default' => 60,
                'dependency' => array('copyright_two_area_spacing', '==', 'true')
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Background Image Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'footer_two_enable',
                'title' => esc_html__('Footer', 'softim'),
                'type' => 'switcher',
                'desc' => wp_kses(__('you can set <mark>Yes / No</mark> to show/hide footer', 'softim'), $allowed_html),
                'default' => true,
            ),
            array(
                'id' => 'footer_two_bg_image',
                'title' => esc_html__('Background Image', 'softim'),
                'type' => 'background',
                'desc' => wp_kses(__('you can set <mark>background</mark> for footer', 'softim'), $allowed_html),
                'default' => array(
                    'background-size' => 'cover',
                    'background-position' => 'center bottom',
                    'background-repeat' => 'no-repeat',
                ),
                'background_color' => false,
                'dependency' => array('footer_two_enable', '==', 'true')
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer About Item Settings', 'softim') . '</h3>'
            ),
            array(
                'id' => 'footer_social_icon',
                'type' => 'switcher',
                'title' => esc_html__('Social Icon', 'softim'),
                'default' => true,
                'desc' => wp_kses(__('you can <mark> show/hide</mark> navbar button of header two', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'footer_social_repeater',
                'type' => 'repeater',
                'title' => esc_html__('Social Item Repeater', 'softim'),
                'dependency' => array('footer_social_icon', '==', 'true'),
                'fields' => array(
                    array(
                        'id' => 'footer_social_icon_item_icon',
                        'type' => 'icon',
                        'title' => esc_html__('Social Item Icon', 'softim'),
                        'default' => 'flaticon-call'
                    ),
                    array(
                        'id' => 'footer_social_icon_item_url',
                        'type' => 'text',
                        'title' => esc_html__('Social URL', 'softim'),
                        'default' => '#'
                    ),
                )
            ),
        )
    ));

    CSF::createSection($prefix . '_theme_options', array(
        'parent' => 'footer_options',
        'id' => 'footer_three_general_options',
        'title' => esc_html__('Footer Three', 'softim'),
        'icon' => 'fa fa-list-ul',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Call To Action Settings Three', 'softim') . '</h3>'
            ),
            array(
                'id' => 'call_to_action_enable',
                'title' => esc_html__('Call To Action Background Image', 'softim'),
                'type' => 'switcher',
                'desc' => wp_kses(__('you can set <mark>Yes / No</mark> to show/hide footer', 'softim'), $allowed_html),
                'default' => true,
            ),
            array(
                'id' => 'call_to_action_text',
                'title' => esc_html__('Call To Action Area Text', 'softim'),
                'type' => 'textarea',
                'desc' => wp_kses(__('use  <mark>Title</mark> Call To Action Text, use <mark>Span</mark> For strong tag, ', 'softim'), $allowed_html)
            ),
            array(
                'id' => 'call_to_action_button_title',
                'type' => 'text',
                'title' => esc_html__('Button Title', 'softim'),
                'default' => esc_html__('APPLY ONLINE', 'softim')
            ),
            array(
                'id' => 'call_to_action_button_url',
                'type' => 'text',
                'title' => esc_html__('Button URL', 'softim'),
                'default' => '#'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Settings Three', 'softim') . '</h3>'
            ),
            array(
                'id' => 'footer_three_bg_image',
                'title' => esc_html__('Background Image', 'softim'),
                'type' => 'background',
                'desc' => wp_kses(__('you can set <mark>background</mark> for footer', 'softim'), $allowed_html),
                'default' => array(
                    'background-size' => 'cover',
                    'background-position' => 'center bottom',
                    'background-repeat' => 'no-repeat',
                ),
                'background_gradient' => true
            ),
            array(
                'id' => 'footer_three_spacing',
                'title' => esc_html__('Footer Spacing', 'softim'),
                'type' => 'switcher',
                'desc' => wp_kses(__('you can set <mark>Yes / No</mark> to set footer spacing', 'softim'), $allowed_html),
                'default' => true,
            ),
            array(
                'id' => 'footer_three_top_spacing',
                'title' => esc_html__('Footer Top Spacing', 'softim'),
                'type' => 'slider',
                'desc' => wp_kses(__('you can set <mark>padding</mark> for footer top', 'softim'), $allowed_html),
                'min' => 0,
                'max' => 500,
                'step' => 1,
                'unit' => 'px',
                'default' => 100,
                'dependency' => array('footer_three_spacing', '==', 'true')
            ),
            array(
                'id' => 'footer_three_bottom_spacing',
                'title' => esc_html__('Footer Bottom Spacing', 'softim'),
                'type' => 'slider',
                'desc' => wp_kses(__('you can set <mark>padding</mark> for footer bottom', 'softim'), $allowed_html),
                'min' => 0,
                'max' => 500,
                'step' => 1,
                'unit' => 'px',
                'default' => 65,
                'dependency' => array('footer_three_spacing', '==', 'true')
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Copyright Area Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'copyright_three_area_spacing',
                'title' => esc_html__('Copyright Area Spacing', 'softim'),
                'type' => 'switcher',
                'desc' => wp_kses(__('you can set <mark>Yes / No</mark> to set copyright area spacing', 'softim'), $allowed_html),
                'default' => true,
            ),
            array(
                'id' => 'copyright_three_text',
                'title' => esc_html__('Copyright Area Text', 'softim'),
                'type' => 'textarea',
                'desc' => wp_kses(__('use  <mark>{copy}</mark> for copyright symbol, use <mark>{year}</mark> for current year, ', 'softim'), $allowed_html)
            ),
            array(
                'id' => 'copyright_three_area_top_spacing',
                'title' => esc_html__('Copyright Area Top Spacing', 'softim'),
                'type' => 'slider',
                'desc' => wp_kses(__('you can set <mark>padding</mark> for copyright area top', 'softim'), $allowed_html),
                'min' => 0,
                'max' => 500,
                'step' => 1,
                'unit' => 'px',
                'default' => 20,
                'dependency' => array('copyright_three_area_spacing', '==', 'true')
            ),
            array(
                'id' => 'copyright_three_area_bottom_spacing',
                'title' => esc_html__('Copyright Area Bottom Spacing', 'softim'),
                'type' => 'slider',
                'desc' => wp_kses(__('you can set <mark>padding</mark> for copyright area bottom', 'softim'), $allowed_html),
                'min' => 0,
                'max' => 500,
                'step' => 1,
                'unit' => 'px',
                'default' => 20,
                'dependency' => array('copyright_three_area_spacing', '==', 'true')
            )
        )
    ));

    /*-------------------------------------------------------
          ** Blog  Options
    --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'blog_settings',
        'title' => esc_html__('Blog Settings', 'softim'),
        'icon' => 'fa fa-book'
    ));
    CSF::createSection($prefix . '_theme_options', array(
        'parent' => 'blog_settings',
        'id' => 'blog_post_options',
        'title' => esc_html__('Blog Post', 'softim'),
        'icon' => 'fa fa-list-ul',
        'fields' => Softim_Group_Fields::post_meta('blog_post', esc_html__('Blog Page', 'softim'))
    ));
    CSF::createSection($prefix . '_theme_options', array(
        'parent' => 'blog_settings',
        'id' => 'blog_single_post_options',
        'title' => esc_html__('Single Post', 'softim'),
        'icon' => 'fa fa-list-alt',
        'fields' => Softim_Group_Fields::post_meta('blog_single_post', esc_html__('Blog Single Page', 'softim'))
    ));

    /*-------------------------------------------------------
          ** Pages & templates Options
   --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'pages_and_template',
        'title' => esc_html__('Pages Settings', 'softim'),
        'icon' => 'fa fa-files-o'
    ));
    /*  404 page options */
    CSF::createSection($prefix . '_theme_options', array(
        'id' => '404_page',
        'title' => esc_html__('404 Page', 'softim'),
        'parent' => 'pages_and_template',
        'icon' => 'fa fa-exclamation-triangle',
        'fields' => array(
            array(
                'id' => 'error_bg_switch',
                'title' => esc_html__('404 Image Enable', 'softim'),
                'type' => 'switcher',
                'desc' => wp_kses(__('you can set <mark>Yes / No</mark> to show/hide breadcrumb', 'softim'), $allowed_html),
                'default' => true,
            ),
            array(
                'id' => 'error_bg',
                'title' => esc_html__('404 Image', 'softim'),
                'type' => 'media',
                'desc' => wp_kses(__('you can set <mark>background</mark> for breadcrumb', 'softim'), $allowed_html),
                'dependency' => array('error_bg_switch', '==', 'true')
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('404 Page Options', 'softim') . '</h3>',
            ),
            array(
                'id' => '404_bg_color',
                'type' => 'color',
                'title' => esc_html__('Page Background Color', 'softim'),
                'default' => '#ffffff'
            ),
            array(
                'id' => '404_title',
                'title' => esc_html__('Title', 'softim'),
                'type' => 'text',
                'info' => wp_kses(__('you can change <mark>title</mark> of 404 page', 'softim'), $allowed_html),
                'attributes' => array('placeholder' => esc_html__('Sorry! The Page Not Found', 'softim'))
            ),
            array(
                'id' => '404_paragraph',
                'title' => esc_html__('Paragraph', 'softim'),
                'type' => 'textarea',
                'info' => wp_kses(__('you can change <mark>paragraph</mark> of 404 page', 'softim'), $allowed_html),
                'attributes' => array('placeholder' => esc_html__('Oops! The page you are looking for does not exit. it might been moved or deleted.', 'softim'))
            ),
            array(
                'id' => '404_button_text',
                'title' => esc_html__('Button Text', 'softim'),
                'type' => 'text',
                'info' => wp_kses(__('you can change <mark>button text</mark> of 404 page', 'softim'), $allowed_html),
                'attributes' => array('placeholder' => esc_html__('back to home', 'softim'))
            ),
            array(
                'id' => '404_spacing_top',
                'title' => esc_html__('Page Spacing Top', 'softim'),
                'type' => 'slider',
                'desc' => wp_kses(__('you can set <mark>Padding Top</mark> for page content area.', 'softim'), $allowed_html),
                'min' => 0,
                'max' => 500,
                'step' => 1,
                'unit' => 'px',
                'default' => 120,
            ),
            array(
                'id' => '404_spacing_bottom',
                'title' => esc_html__('Page Spacing Bottom', 'softim'),
                'type' => 'slider',
                'desc' => wp_kses(__('you can set <mark>Padding Bottom</mark> for page content area.', 'softim'), $allowed_html),
                'min' => 0,
                'max' => 500,
                'step' => 1,
                'unit' => 'px',
                'default' => 120,
            ),
        )
    ));

    /*  blog page options */
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'blog_page',
        'title' => esc_html__('Blog Page', 'softim'),
        'parent' => 'pages_and_template',
        'icon' => 'fa fa-indent',
        'fields' => Softim_Group_Fields::page_layout_options(esc_html__('Blog', 'softim'), 'blog')
    ));
    /*  blog single page options */
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'blog_single_page',
        'title' => esc_html__('Blog Single Page', 'softim'),
        'parent' => 'pages_and_template',
        'icon' => 'fa fa-indent',
        'fields' => Softim_Group_Fields::page_layout_options(esc_html__('Blog Single', 'softim'), 'blog_single')
    ));
    /*  archive page options */
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'archive_page',
        'title' => esc_html__('Archive Page', 'softim'),
        'parent' => 'pages_and_template',
        'icon' => 'fa fa-archive',
        'fields' => Softim_Group_Fields::page_layout_options(esc_html__('Archive', 'softim'), 'archive')
    ));
    /*  search page options */
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'search_page',
        'title' => esc_html__('Search Page', 'softim'),
        'parent' => 'pages_and_template',
        'icon' => 'fa fa-search',
        'fields' => Softim_Group_Fields::page_layout_options(esc_html__('Search', 'softim'), 'search')
    ));

    /*-------------------------------------------------------
           ** Backup  Options
    --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'backup',
        'title' => esc_html__('Import / Export', 'softim'),
        'icon' => 'eicon-export-kit',
        'fields' => array(
            array(
                'type' => 'notice',
                'style' => 'warning',
                'content' => esc_html__('You can save your current options. Download a Backup and Import.', 'softim'),
            ),
            array(
                'type' => 'backup',
                'title' => esc_html__('Backup & Import', 'softim')
            )
        )
    ));
}
