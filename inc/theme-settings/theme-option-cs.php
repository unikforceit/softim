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
        'menu_icon' => 'fas fa-filter',
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
        'icon' => 'fas fa-spinner',
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
        'icon' => 'fas fa-arrow-up',
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
                'default' => 'fas fa-angle-up',
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
                'id'    => 'elementor_header_builder',
                'type'  => 'switcher',
                'title' => 'Build Header by Elementor',
                'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show/hide page header.', 'softim'), $allowed_html),
                'text_on' => esc_html__('Yes', 'softim'),
                'text_off' => esc_html__('No', 'softim'),
                'default' => true
            ),
            array(
                'id'          => 'elementor_header',
                'type'        => 'select',
                'title'       => 'Select Header Template',
                'chosen'      => true,
                'multiple'    => false,
                'dependency' => array( 'elementor_header_builder', '==', 'true' ),
                'options'     => softim_core()->softim_elementor_template(),
            ),
            array(
                'id'    => 'elementor_footer_builder',
                'type'  => 'switcher',
                'title' => 'Build Footer by Elementor',
                'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show/hide page footer.', 'softim'), $allowed_html),
                'text_on' => esc_html__('Yes', 'softim'),
                'text_off' => esc_html__('No', 'softim'),
                'default' => true
            ),
            array(
                'id'          => 'elementor_footer',
                'type'        => 'select',
                'title'       => 'Select Footer Template',
                'chosen'      => true,
                'multiple'    => false,
                'dependency' => array( 'elementor_footer_builder', '==', 'true' ),
                'options'     => softim_core()->softim_elementor_template(),
            ),
            array(
                'id' => 'navbar_type',
                'title' => esc_html__('Navbar Type', 'softim'),
                'type' => 'image_select',
                'options' => array(
                    '' => SOFTIM_THEME_SETTINGS_IMAGES . '/header/01.png',
                    'style-01' => SOFTIM_THEME_SETTINGS_IMAGES . '/header/02.png',
                    'style-02' => SOFTIM_THEME_SETTINGS_IMAGES . '/header/03.png',
                    'style-03' => SOFTIM_THEME_SETTINGS_IMAGES . '/header/04.png',
                    'style-04' => SOFTIM_THEME_SETTINGS_IMAGES . '/header/05.png',
                    'style-05' => SOFTIM_THEME_SETTINGS_IMAGES . '/header/06.png'
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
                    'style-02' => SOFTIM_THEME_SETTINGS_IMAGES . '/footer/03.png',
                    'style-03' => SOFTIM_THEME_SETTINGS_IMAGES . '/footer/04.png',
                    'style-04' => SOFTIM_THEME_SETTINGS_IMAGES . '/footer/05.png',
                    'style-05' => SOFTIM_THEME_SETTINGS_IMAGES . '/footer/06.png'
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
        'icon' => 'fas fa-home'
    ));
    /* Header Style Default */
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Header Default', 'softim'),
        'id' => 'theme_header_one_options',
        'icon' => 'fas fa-image',
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
                'default' => esc_html__('GET STARTED', 'softim'),
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

    /* Header Style 01 */
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Header One', 'softim'),
        'id' => 'theme_header_two_options',
        'icon' => 'fas fa-image',
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
                'content' => '<h3>' . esc_html__('Header Link Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_links_icon',
                'type' => 'switcher',
                'title' => esc_html__('Header Links', 'softim'),
                'default' => true,
                'desc' => wp_kses(__('you can <mark> show/hide</mark> navbar links of header two', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'header_links_repeater',
                'type' => 'repeater',
                'title' => esc_html__('Header Links Repeater', 'softim'),
                'dependency' => array('header_links_icon', '==', 'true'),
                'fields' => array(
                    array(
                        'id' => 'header_two_icon',
                        'type' => 'media',
                        'title' => esc_html__('Header Icon', 'softim'),
                        'library' => 'image',
                        'desc' => wp_kses(__('you can upload <mark> Icon</mark> here', 'softim'), $allowed_html),
                    ),
                    array(
                        'id' => 'header_two_icon_text',
                        'type' => 'text',
                        'title' => esc_html__('Header Icon Text', 'softim'),
                        'default' => esc_html__('info@softim.com', 'softim')
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
                'default' => esc_html__('GET STARTED', 'softim'),
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
        'icon' => 'fas fa-image',
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
                'id' => 'header_three_logo_light',
                'type' => 'media',
                'title' => esc_html__('Logo Light', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> logo</mark> here it will overwrite customizer uploaded logo', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'header_three_navbar_button',
                'type' => 'switcher',
                'title' => esc_html__('Header Button', 'softim'),
                'default' => true,
                'desc' => wp_kses(__('you can <mark> show/hide</mark> navbar button of header three', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'header_three_navbar_title',
                'type' => 'text',
                'title' => esc_html__('Button Title', 'softim'),
                'default' => esc_html__('GET STARTED', 'softim'),
                'dependency' => array('header_three_navbar_button', '==', 'true')
            ),
            array(
                'id' => 'header_three_navbar_url',
                'type' => 'text',
                'title' => esc_html__('Button URL', 'softim'),
                'default' => '#',
                'dependency' => array('header_three_navbar_button', '==', 'true')
            ),
            array(
                'id' => 'header_three_address_title',
                'type' => 'text',
                'title' => esc_html__('Address Title', 'softim'),
                'default' => esc_html__('Address', 'softim'),
            ),
            array(
                'id' => 'header_three_address_info',
                'type' => 'text',
                'title' => esc_html__('Address info', 'softim'),
                'default' => esc_html__('72 Main Drive, Calibry, FL', 'softim'),
            ),
            array(
                'id' => 'header_three_contact_title',
                'type' => 'text',
                'title' => esc_html__('Contact Title', 'softim'),
                'default' => esc_html__('Contact', 'softim'),
            ),
            array(
                'id' => 'header_three_contact_number_title',
                'type' => 'text',
                'title' => esc_html__('Contact Number', 'softim'),
                'default' => esc_html__('+1 (900) 696 3600', 'softim'),
            ),
            array(
                'id' => 'header_three_contact_number_url',
                'type' => 'text',
                'title' => esc_html__('Contact Number URL', 'softim'),
                'default' => '#',
            ),

            array(
                'id' => 'header_three_contact_email_title',
                'type' => 'text',
                'title' => esc_html__('Email', 'softim'),
                'default' => esc_html__('softim@gmail.com', 'softim'),
            ),
            array(
                'id' => 'header_three_contact_email_url',
                'type' => 'text',
                'title' => esc_html__('Email URL', 'softim'),
                'default' => '#',
            ),
            array(
                'id' => 'header_three_social_title',
                'type' => 'text',
                'title' => esc_html__('Social Title', 'softim'),
                'default' => esc_html__('Follow Us', 'softim'),
            ),
            array(
                'id' => 'header_three_social_link',
                'type' => 'repeater',
                'title' => esc_html__('Contact Social Item', 'softim'),
                'fields' => array(
                    array(
                        'id' => 'image',
                        'type' => 'icon',
                        'title' => esc_html__('Icon', 'softim')
                    ),array(
                        'id' => 'url',
                        'type' => 'text',
                        'title' => esc_html__('URL', 'softim')
                    ),
                ),
            ),
        )
    ));

    /* Header Style 04 */
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Header Four', 'softim'),
        'id' => 'theme_header_four_options',
        'icon' => 'fas fa-image',
        'parent' => 'headers_settings',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Logo Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_four_logo',
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
                'id' => 'header_four_navbar_title',
                'type' => 'text',
                'title' => esc_html__('Button Title', 'softim'),
                'default' => esc_html__('GET STARTED', 'softim'),
                'dependency' => array('header_navbar_button', '==', 'true')
            ),
            array(
                'id' => 'header_four_navbar_url',
                'type' => 'text',
                'title' => esc_html__('Button URL', 'softim'),
                'default' => '#',
                'dependency' => array('header_navbar_button', '==', 'true')
            ),
        )
    ));

    /* Header Style 05 */
    CSF::createSection($prefix . '_theme_options', array(
        'title' => esc_html__('Header Five', 'softim'),
        'id' => 'theme_header_five_options',
        'icon' => 'fas fa-image',
        'parent' => 'headers_settings',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Logo Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_five_logo',
                'type' => 'media',
                'title' => esc_html__('Logo', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> logo</mark> here it will overwrite customizer uploaded logo', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'header_five_logo_light',
                'type' => 'media',
                'title' => esc_html__('Logo Light', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> logo</mark> here it will overwrite customizer uploaded logo', 'softim'), $allowed_html),
            ),

            array(
                'id' => 'header_five_address_title',
                'type' => 'text',
                'title' => esc_html__('Address Title', 'softim'),
                'default' => esc_html__('Address', 'softim'),
            ),
            array(
                'id' => 'header_five_address_info',
                'type' => 'text',
                'title' => esc_html__('Address info', 'softim'),
                'default' => esc_html__('72 Main Drive, Calibry, FL', 'softim'),
            ),
            array(
                'id' => 'header_five_contact_title',
                'type' => 'text',
                'title' => esc_html__('Contact Title', 'softim'),
                'default' => esc_html__('Contact', 'softim'),
            ),
            array(
                'id' => 'header_five_contact_number_title',
                'type' => 'text',
                'title' => esc_html__('Contact Number', 'softim'),
                'default' => esc_html__('+1 (900) 696 3600', 'softim'),
            ),
            array(
                'id' => 'header_five_contact_number_url',
                'type' => 'text',
                'title' => esc_html__('Contact Number URL', 'softim'),
                'default' => '#',
            ),

            array(
                'id' => 'header_five_contact_email_title',
                'type' => 'text',
                'title' => esc_html__('Email', 'softim'),
                'default' => esc_html__('softim@gmail.com', 'softim'),
            ),
            array(
                'id' => 'header_five_contact_email_url',
                'type' => 'text',
                'title' => esc_html__('Email URL', 'softim'),
                'default' => '#',
            ),
            array(
                'id' => 'header_five_social_title',
                'type' => 'text',
                'title' => esc_html__('Social Title', 'softim'),
                'default' => esc_html__('Follow Us', 'softim'),
            ),
            array(
                'id' => 'header_five_social_link',
                'type' => 'repeater',
                'title' => esc_html__('Contact Social Item', 'softim'),
                'fields' => array(
                    array(
                        'id' => 'image',
                        'type' => 'icon',
                        'title' => esc_html__('Icon', 'softim')
                    ),
                    array(
                        'id' => 'url',
                        'type' => 'text',
                        'title' => esc_html__('URL', 'softim')
                    ),
                ),
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
            array(
                'id' => 'breadcrumb_elements_1',
                'type' => 'media',
                'title' => esc_html__('Element 1', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> element</mark> here it will show to the breadcrumb elements image.', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'breadcrumb_elements_2',
                'type' => 'media',
                'title' => esc_html__('Element 2', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> element</mark> here it will show to the breadcrumb elements image.', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'breadcrumb_elements_3',
                'type' => 'media',
                'title' => esc_html__('Element 3', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> element</mark> here it will show to the breadcrumb elements image.', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'breadcrumb_elements_4',
                'type' => 'media',
                'title' => esc_html__('Element 4', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> element</mark> here it will show to the breadcrumb elements image.', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'breadcrumb_elements_5',
                'type' => 'media',
                'title' => esc_html__('Element 5', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> element</mark> here it will show to the breadcrumb elements image.', 'softim'), $allowed_html),
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
//    Footer One
    CSF::createSection($prefix . '_theme_options', array(
        'parent' => 'footer_options',
        'id' => 'footer_general_options',
        'title' => esc_html__('Footer One', 'softim'),
        'icon' => 'fas fa-list-ul',
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
            ),
            array(
                'id' => 'footer_elements_1',
                'type' => 'media',
                'title' => esc_html__('Element 1', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> element</mark> here it will show to the footer elements image.', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'footer_elements_2',
                'type' => 'media',
                'title' => esc_html__('Element 2', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> element</mark> here it will show to the footer elements image.', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'footer_elements_3',
                'type' => 'media',
                'title' => esc_html__('Element 3', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> element</mark> here it will show to the footer elements image.', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'footer_elements_4',
                'type' => 'media',
                'title' => esc_html__('Element 4', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> element</mark> here it will show to the footer elements image.', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'footer_elements_5',
                'type' => 'media',
                'title' => esc_html__('Element 5', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> element</mark> here it will show to the footer elements image.', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'footer_elements_6',
                'type' => 'media',
                'title' => esc_html__('Element 6', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> element</mark> here it will show to the footer elements image.', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'footer_elements_7',
                'type' => 'media',
                'title' => esc_html__('Element 7', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> element</mark> here it will show to the footer elements image.', 'softim'), $allowed_html),
            )
        )
    ));
//    Footer Two
    CSF::createSection($prefix . '_theme_options', array(
        'parent' => 'footer_options',
        'id' => 'footer_two_options',
        'title' => esc_html__('Footer Two', 'softim'),
        'icon' => 'fas fa-list-ul',
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
            array(
                'id' => 'footer_two_elements_1',
                'type' => 'media',
                'title' => esc_html__('Element 1', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> element</mark> here it will show to the footer elements image.', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'footer_two_elements_2',
                'type' => 'media',
                'title' => esc_html__('Element 2', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> element</mark> here it will show to the footer elements image.', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'footer_two_elements_3',
                'type' => 'media',
                'title' => esc_html__('Element 3', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> element</mark> here it will show to the footer elements image.', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'footer_two_elements_4',
                'type' => 'media',
                'title' => esc_html__('Element 4', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> element</mark> here it will show to the footer elements image.', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'footer_two_elements_5',
                'type' => 'media',
                'title' => esc_html__('Element 5', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> element</mark> here it will show to the footer elements image.', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'footer_two_elements_6',
                'type' => 'media',
                'title' => esc_html__('Element 6', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> element</mark> here it will show to the footer elements image.', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'footer_two_elements_7',
                'type' => 'media',
                'title' => esc_html__('Element 7', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> element</mark> here it will show to the footer elements image.', 'softim'), $allowed_html),
            )
        )
    ));
//    Footer Three
    CSF::createSection($prefix . '_theme_options', array(
        'parent' => 'footer_options',
        'id' => 'footer_three_general_options',
        'title' => esc_html__('Footer Three', 'softim'),
        'icon' => 'fas fa-list-ul',
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
            ),
            array(
                'id' => 'footer_top_icon',
                'type' => 'switcher',
                'title' => esc_html__('Footer Top', 'softim'),
                'default' => true,
                'desc' => wp_kses(__('you can <mark> show/hide</mark> footer top of footer two', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'footer_top_repeater',
                'type' => 'repeater',
                'title' => esc_html__('Footer Top Repeater', 'softim'),
                'dependency' => array('footer_top_icon', '==', 'true'),
                'fields' => array(
                    array(
                        'id' => 'footer_top_text_1',
                        'type' => 'text',
                        'title' => esc_html__('Footer Top Title', 'softim'),
                        'default' => esc_html__('Call Us', 'softim')
                    ),
                    array(
                        'id' => 'footer_top_text_2',
                        'type' => 'text',
                        'title' => esc_html__('Footer Top Text', 'softim'),
                        'default' => esc_html__('info@example.com', 'softim')
                    ),
                    array(
                        'id' => 'footer_top_url',
                        'type' => 'text',
                        'title' => esc_html__('Social URL', 'softim'),
                        'default' => '#'
                    )
                )
            ),
            array(
                'id' => 'footer_three_elements_1',
                'type' => 'media',
                'title' => esc_html__('Element 1', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> element</mark> here it will show to the footer elements image.', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'footer_three_elements_2',
                'type' => 'media',
                'title' => esc_html__('Element 2', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> element</mark> here it will show to the footer elements image.', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'footer_three_elements_3',
                'type' => 'media',
                'title' => esc_html__('Element 3', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> element</mark> here it will show to the footer elements image.', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'footer_three_elements_4',
                'type' => 'media',
                'title' => esc_html__('Element 4', 'softim'),
                'library' => 'image',
                'desc' => wp_kses(__('you can upload <mark> element</mark> here it will show to the footer elements image.', 'softim'), $allowed_html),
            )
        )
    ));

    /*-------------------------------------------------------
          ** Blog  Options
    --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'blog_settings',
        'title' => esc_html__('Blog Settings', 'softim'),
        'icon' => 'fas fa-book'
    ));
    CSF::createSection($prefix . '_theme_options', array(
        'parent' => 'blog_settings',
        'id' => 'blog_post_options',
        'title' => esc_html__('Blog Post', 'softim'),
        'icon' => 'fas fa-list-ul',
        'fields' => Softim_Group_Fields::post_meta('blog_post', esc_html__('Blog Page', 'softim'))
    ));
    CSF::createSection($prefix . '_theme_options', array(
        'parent' => 'blog_settings',
        'id' => 'blog_single_post_options',
        'title' => esc_html__('Single Post', 'softim'),
        'icon' => 'fas fa-list-alt',
        'fields' => Softim_Group_Fields::post_meta('blog_single_post', esc_html__('Blog Single Page', 'softim'))
    ));

    /*-------------------------------------------------------
          ** Pages & templates Options
   --------------------------------------------------------*/
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'pages_and_template',
        'title' => esc_html__('Pages Settings', 'softim'),
        'icon' => 'fas fa-pager'
    ));
    /*  404 page options */
    CSF::createSection($prefix . '_theme_options', array(
        'id' => '404_page',
        'title' => esc_html__('404 Page', 'softim'),
        'parent' => 'pages_and_template',
        'icon' => 'fas fa-exclamation-triangle',
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
        'icon' => 'fas fa-indent',
        'fields' => Softim_Group_Fields::page_layout_options(esc_html__('Blog', 'softim'), 'blog')
    ));
    /*  blog single page options */
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'blog_single_page',
        'title' => esc_html__('Blog Single Page', 'softim'),
        'parent' => 'pages_and_template',
        'icon' => 'fas fa-indent',
        'fields' => Softim_Group_Fields::page_layout_options(esc_html__('Blog Single', 'softim'), 'blog_single')
    ));
    /*  archive page options */
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'archive_page',
        'title' => esc_html__('Archive Page', 'softim'),
        'parent' => 'pages_and_template',
        'icon' => 'fas fa-archive',
        'fields' => Softim_Group_Fields::page_layout_options(esc_html__('Archive', 'softim'), 'archive')
    ));
    /*  search page options */
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'search_page',
        'title' => esc_html__('Search Page', 'softim'),
        'parent' => 'pages_and_template',
        'icon' => 'fas fa-search',
        'fields' => Softim_Group_Fields::page_layout_options(esc_html__('Search', 'softim'), 'search')
    ));
    /*  Service archive options */
    CSF::createSection($prefix . '_theme_options', array(
        'id' => 'service_arc_page',
        'title' => esc_html__('Service Archive Page', 'softim'),
        'parent' => 'pages_and_template',
        'icon' => 'fas fa-archive',
        'fields' => array(
            array(
                'id'          => 'service_single_layout',
                'type'        => 'select',
                'title'       => 'Select Service Single Layout',
                'options'     => array(
                    'layout-1'  => 'Layout 1',
                    'layout-2'  => 'Layout 2',
                ),
                'default'     => 'layout-1'
            ),
            array(
                'id' => 'service_bg1',
                'title' => esc_html__('Element Image 1', 'softim'),
                'type' => 'media',
                'desc' => wp_kses(__('you can set <mark>element</mark> for service archive', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'service_bg2',
                'title' => esc_html__('Element Image 2', 'softim'),
                'type' => 'media',
                'desc' => wp_kses(__('you can set <mark>element</mark> for archive', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'service_bg3',
                'title' => esc_html__('Element Image 3', 'softim'),
                'type' => 'media',
                'desc' => wp_kses(__('you can set <mark>element</mark> for archive', 'softim'), $allowed_html),
            ),
            array(
                'id' => 'service_bg4',
                'title' => esc_html__('Element Image 4', 'softim'),
                'type' => 'media',
                'desc' => wp_kses(__('you can set <mark>element</mark> for archive', 'softim'), $allowed_html),
            ),
        )
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
