<?php
/**
 *Theme Group Fields
 * @package softim
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); // exit if access directly
}


if (!class_exists('Softim_Group_Fields')) {

    class Softim_Group_Fields
    {
        
        /**
         * $instance
         * @since 1.0.0
         */
        private static $instance;


        /**
         * construct()
         * @since 1.0.0
         */
        public function __construct()
        {

        }

        /**
         * getInstance()
         * @since 1.0.0
         */
        public static function getInstance()
        {
            if (null == self::$instance) {
                self::$instance = new self();
            }
            return self::$instance;
        }

        /**
         * Page layout options
         * @since 1.0.0
         */
        public static function page_layout()
        {
            $fields = array(
                array(
                    'type' => 'subheading',
                    'content' => esc_html__('Page Layouts & Colors Options', 'softim'),
                ),
                array(
                    'id' => 'page_layout',
                    'type' => 'image_select',
                    'title' => esc_html__('Select Page Layout', 'softim'),
                    'options' => array(
                        'default' => SOFTIM_THEME_SETTINGS_IMAGES . '/page/default.png',
                        'left-sidebar' => SOFTIM_THEME_SETTINGS_IMAGES . '/page/left-sidebar.png',
                        'right-sidebar' => SOFTIM_THEME_SETTINGS_IMAGES . '/page/right-sidebar.png',
                        'blank' => SOFTIM_THEME_SETTINGS_IMAGES . '/page/blank.png',
                    ),
                    'default' => 'default'
                ),
                array(
                    'id' => 'page_bg_color',
                    'type' => 'color',
                    'title' => esc_html__('Page Background Color', 'softim'),
                    'default' => '#ffffff'
                ),
                array(
                    'id' => 'page_content_bg_color',
                    'type' => 'color',
                    'title' => esc_html__('Page Content Background Color', 'softim'),
                    'default' => '#ffffff'
                ),
                array(
                    'id' => 'page_content_text_color',
                    'type' => 'color',
                    'title' => esc_html__('Page Content Text Color', 'softim'),
                    'default' => '#5f5f5f'
                )

            );

            return $fields;
        }

        /**
         * Page container options
         * @since 1.0.0
         */
        public static function Page_Container_Options($type)
        {
            $fields = array();
            $allowed_html = softim()->kses_allowed_html(array('mark'));
            if ('header_options' == $type) {
                $fields = array(
                    array(
                        'type' => 'subheading',
                        'content' => esc_html__('Page Header, Footer & Breadcrumb Options', 'softim'),
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
                        'id' => 'page_title',
                        'type' => 'switcher',
                        'title' => esc_html__('Page Title', 'softim'),
                        'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show/hide page title.', 'softim'), $allowed_html),
                        'text_on' => esc_html__('Yes', 'softim'),
                        'text_off' => esc_html__('No', 'softim'),
                        'default' => true
                    ),
                    array(
                        'id' => 'page_breadcrumb',
                        'type' => 'switcher',
                        'title' => esc_html__('Page Breadcrumb', 'softim'),
                        'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show/hide page breadcrumb.', 'softim'), $allowed_html),
                        'text_on' => esc_html__('Yes', 'softim'),
                        'text_off' => esc_html__('No', 'softim'),
                        'default' => true
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
                        'desc' => wp_kses(__('you can set <mark>navbar type</mark> transparent type or solid background.', 'softim'), $allowed_html),
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
                        ),
                        'default' => '',
                        'desc' => wp_kses(__('you can set <mark>footer type</mark> transparent type or solid background.', 'softim'), $allowed_html),
                    ),

                );
            } elseif ('container_options' == $type) {
                $fields = array(
                    array(
                        'type' => 'subheading',
                        'content' => esc_html__('Page Width & Padding Options', 'softim'),
                    ),
                    array(
                        'id' => 'page_container',
                        'type' => 'switcher',
                        'title' => esc_html__('Page Full Width', 'softim'),
                        'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to set page container full width.', 'softim'), $allowed_html),
                        'text_on' => esc_html__('Yes', 'softim'),
                        'text_off' => esc_html__('No', 'softim'),
                        'default' => false
                    ),
                    array(
                        'type' => 'subheading',
                        'content' => esc_html__('Page Spacing Options', 'softim'),
                    ),
                    array(
                        'id' => 'page_spacing_top',
                        'title' => esc_html__('Page Spacing Top', 'softim'),
                        'type' => 'slider',
                        'desc' => wp_kses(__('you can set <mark>Padding Top</mark> for page container.', 'softim'), $allowed_html),
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                        'unit' => 'px',
                        'default' => 120,
                    ),
                    array(
                        'id' => 'page_spacing_bottom',
                        'title' => esc_html__('Page Spacing Bottom', 'softim'),
                        'type' => 'slider',
                        'desc' => wp_kses(__('you can set <mark>Padding Bottom</mark> for page container.', 'softim'), $allowed_html),
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                        'unit' => 'px',
                        'default' => 120,
                    ),
                    array(
                        'type' => 'subheading',
                        'content' => esc_html__('Page Content Spacing Options', 'softim'),
                    ),
                    array(
                        'id' => 'page_content_spacing',
                        'type' => 'switcher',
                        'title' => esc_html__('Page Content Spacing', 'softim'),
                        'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to set page content spacing.', 'softim'), $allowed_html),
                        'text_on' => esc_html__('Yes', 'softim'),
                        'text_off' => esc_html__('No', 'softim'),
                        'default' => false
                    ),
                    array(
                        'id' => 'page_content_spacing_top',
                        'title' => esc_html__('Page Spacing Bottom', 'softim'),
                        'type' => 'slider',
                        'desc' => wp_kses(__('you can set <mark>Padding Top</mark> for page content area.', 'softim'), $allowed_html),
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                        'unit' => 'px',
                        'default' => 0,
                        'dependency' => array('page_content_spacing', '==', 'true')
                    ),
                    array(
                        'id' => 'page_content_spacing_bottom',
                        'title' => esc_html__('Page Spacing Bottom', 'softim'),
                        'type' => 'slider',
                        'desc' => wp_kses(__('you can set <mark>Padding Bottom</mark> for page content area.', 'softim'), $allowed_html),
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                        'unit' => 'px',
                        'default' => 0,
                        'dependency' => array('page_content_spacing', '==', 'true')
                    ),
                    array(
                        'id' => 'page_content_spacing_left',
                        'title' => esc_html__('Page Spacing Left', 'softim'),
                        'type' => 'slider',
                        'desc' => wp_kses(__('you can set <mark>Padding Left</mark> for page content area.', 'softim'), $allowed_html),
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                        'unit' => 'px',
                        'default' => 0,
                        'dependency' => array('page_content_spacing', '==', 'true')
                    ),
                    array(
                        'id' => 'page_content_spacing_right',
                        'title' => esc_html__('Page Spacing Right', 'softim'),
                        'type' => 'slider',
                        'desc' => wp_kses(__('you can set <mark>Padding Right</mark> for page content area.', 'softim'), $allowed_html),
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                        'unit' => 'px',
                        'default' => 0,
                        'dependency' => array('page_content_spacing', '==', 'true')
                    ),
                );
            }

            return $fields;
        }


        /**
         * Page layout options
         * @since 1.0.0
         */
        public static function page_layout_options($title, $prefix)
        {
            $allowed_html = softim()->kses_allowed_html(array('mark'));
            $fields = array(
                array(
                    'type' => 'subheading',
                    'content' => '<h3>' . $title . esc_html__(' Page Options', 'softim') . '</h3>',
                ),
                array(
                    'id' => $prefix . '_layout',
                    'type' => 'image_select',
                    'title' => esc_html__('Select Page Layout', 'softim'),
                    'options' => array(
                        'right-sidebar' => SOFTIM_THEME_SETTINGS_IMAGES . '/page/right-sidebar.png',
                        'left-sidebar' => SOFTIM_THEME_SETTINGS_IMAGES . '/page/left-sidebar.png',
                        'no-sidebar' => SOFTIM_THEME_SETTINGS_IMAGES . '/page/no-sidebar.png',
                    ),
                    'default' => 'right-sidebar'
                ),
                array(
                    'id' => $prefix . '_bg_color',
                    'type' => 'color',
                    'title' => esc_html__('Page Background Color', 'softim'),
                    'default' => '#fff'
                ),
                array(
                    'id' => $prefix . '_spacing_top',
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
                    'id' => $prefix . '_spacing_bottom',
                    'title' => esc_html__('Page Spacing Bottom', 'softim'),
                    'type' => 'slider',
                    'desc' => wp_kses(__('you can set <mark>Padding Bottom</mark> for page content area.', 'softim'), $allowed_html),
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                    'unit' => 'px',
                    'default' => 120,
                ),
            );

            return $fields;
        }

        /**
         * Post meta
         * @since 1.0.0
         */
        public static function post_meta($prefix, $title)
        {
            $allowed_html = softim()->kses_allowed_html(array('mark'));
            $fields = array(
                array(
                    'type' => 'subheading',
                    'content' => '<h3>' . $title . esc_html__(' Post Options', 'softim') . '</h3>',
                ),
                array(
                    'id' => $prefix . '_posted_by',
                    'type' => 'switcher',
                    'title' => esc_html__('Posted By', 'softim'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide posted by.', 'softim'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'softim'),
                    'text_off' => esc_html__('No', 'softim'),
                    'default' => true
                )
            );

            if ('blog_post' == $prefix) {
                $fields[] = array(
                    'id' => $prefix . '_posted_cat',
                    'type' => 'switcher',
                    'title' => esc_html__('Posted Category', 'softim'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide posted category.', 'softim'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'softim'),
                    'text_off' => esc_html__('No', 'softim'),
                    'default' => true
                );
                $fields[] = array(
                    'id' => $prefix . '_readmore_btn',
                    'type' => 'switcher',
                    'title' => esc_html__('Read More Button', 'softim'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide read more button.', 'softim'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'softim'),
                    'text_off' => esc_html__('No', 'softim'),
                    'default' => true
                );
                $fields[] = array(
                    'id' => $prefix . '_readmore_btn_text',
                    'type' => 'text',
                    'title' => esc_html__('Read More Text', 'softim'),
                    'desc' => wp_kses(__('you can set read more <mark>button text</mark> to button text.', 'softim'), $allowed_html),
                    'default' => esc_html__('Read More', 'softim'),
                    'dependency' => array($prefix . '_readmore_btn', '==', 'true')
                );
                $fields[] = array(
                    'id' => $prefix . '_excerpt_more',
                    'type' => 'text',
                    'title' => esc_html__('Excerpt More', 'softim'),
                    'desc' => wp_kses(__('you can set read more <mark>button text</mark> to button text.', 'softim'), $allowed_html),
                    'attributes' => array(
                        'placeholder' => esc_html__('....', 'softim')
                    )
                );
                $fields[] = array(
                    'id' => $prefix . '_excerpt_length',
                    'type' => 'select',
                    'options' => array(
                        '25' => esc_html__('Short', 'softim'),
                        '55' => esc_html__('Regular', 'softim'),
                        '100' => esc_html__('Long', 'softim'),
                    ),
                    'title' => esc_html__('Excerpt Length', 'softim'),
                    'desc' => wp_kses(__('you can set <mark> excerpt length</mark> for post.', 'softim'), $allowed_html),
                );
            } elseif ('blog_single_post' == $prefix) {

                $fields[] = array(
                    'id' => $prefix . '_posted_category',
                    'type' => 'switcher',
                    'title' => esc_html__('Posted Category', 'softim'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide posted category.', 'softim'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'softim'),
                    'text_off' => esc_html__('No', 'softim'),
                    'default' => true
                );
                $fields[] = array(
                    'id' => $prefix . '_posted_tag',
                    'type' => 'switcher',
                    'title' => esc_html__('Posted Tags', 'softim'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide post tags.', 'softim'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'softim'),
                    'text_off' => esc_html__('No', 'softim'),
                    'default' => true
                );
                $fields[] = array(
                    'id' => $prefix . '_posted_share',
                    'type' => 'switcher',
                    'title' => esc_html__('Post Share', 'softim'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide post share.', 'softim'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'softim'),
                    'text_off' => esc_html__('No', 'softim'),
                    'default' => true
                );
                $fields[] = array(
                    'id' => $prefix . '_post_navigation',
                    'type' => 'switcher',
                    'title' => esc_html__('Post Navigation', 'softim'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide post navigation.', 'softim'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'softim'),
                    'text_off' => esc_html__('No', 'softim'),
                    'default' => true
                );
                $fields[] = array(
                    'id' => $prefix . '_next_post_nav_btn',
                    'type' => 'switcher',
                    'title' => esc_html__('Post Navigation With Image', 'softim'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide post navigation button.', 'softim'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'softim'),
                    'text_off' => esc_html__('No', 'softim'),
                    'default' => true
                );
                $fields[] = array(
                    'id' => $prefix . '_get_related_post',
                    'type' => 'switcher',
                    'title' => esc_html__('Get Related Post', 'softim'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide get related post button.', 'softim'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'softim'),
                    'text_off' => esc_html__('No', 'softim'),
                    'default' => true
                );
                $fields[] = array(
                    'id' => $prefix . '_author_bio',
                    'type' => 'switcher',
                    'title' => esc_html__('Author Bio', 'softim'),
                    'desc' => wp_kses(__('you can set <mark>ON / OFF</mark> to show / hide author bio button.', 'softim'), $allowed_html),
                    'text_on' => esc_html__('Yes', 'softim'),
                    'text_off' => esc_html__('No', 'softim'),
                    'default' => true
                );
            }

            return $fields;
        }

    }//end class

}//end if

