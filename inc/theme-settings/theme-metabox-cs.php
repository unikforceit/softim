<?php
/**
 * Theme Metabox Options
 * @package softim
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); // exit if access directly
}

if (class_exists('CSF')) {

    $allowed_html = softim()->kses_allowed_html(array('mark'));

    $prefix = 'softim';

    /*-------------------------------------
        Post Format Options
    -------------------------------------*/
    CSF::createMetabox($prefix . '_post_video_options', array(
        'title' => esc_html__('Video Post Format Options', 'softim'),
        'post_type' => 'post',
        'post_formats' => 'video'
    ));
    CSF::createSection($prefix . '_post_video_options', array(
        'fields' => array(
            array(
                'id' => 'video_url',
                'type' => 'text',
                'title' => esc_html__('Enter Video URL', 'softim'),
                'desc' => wp_kses(__('enter <mark>video url</mark> to show in frontend', 'softim'), $allowed_html)
            )
        )
    ));
    CSF::createMetabox($prefix . '_post_gallery_options', array(
        'title' => esc_html__('Gallery Post Format Options', 'softim'),
        'post_type' => 'post',
        'post_formats' => 'gallery'
    ));
    CSF::createSection($prefix . '_post_gallery_options', array(
        'fields' => array(
            array(
                'id' => 'gallery_images',
                'type' => 'gallery',
                'title' => esc_html__('Select Gallery Photos', 'softim'),
                'desc' => wp_kses(__('select <mark>gallery photos</mark> to show in frontend', 'softim'), $allowed_html)
            )
        )
    ));

    /*-------------------------------------
      Page Container Options
    -------------------------------------*/
    CSF::createMetabox($prefix . '_page_container_options', array(
        'title' => esc_html__('Page Options', 'softim'),
        'post_type' => array('page'),
    ));
    CSF::createSection($prefix . '_page_container_options', array(
        'title' => esc_html__('Layout & Colors', 'softim'),
        'icon' => 'fa fa-columns',
        'fields' => Softim_Group_Fields::page_layout()
    ));
    CSF::createSection($prefix . '_page_container_options', array(
        'title' => esc_html__('Header Footer & Breadcrumb', 'softim'),
        'icon' => 'fa fa-header',
        'fields' => Softim_Group_Fields::Page_Container_Options('header_options')
    ));
    CSF::createSection($prefix . '_page_container_options', array(
        'title' => esc_html__('Width & Padding', 'softim'),
        'icon' => 'fa fa-file-o',
        'fields' => Softim_Group_Fields::Page_Container_Options('container_options')
    ));
    //	Service Meta Box
    CSF::createMetabox($prefix . '_service_options', array(
        'title' => esc_html__('Service Options', 'softim'),
        'post_type' => 'service',
    ));
    CSF::createSection($prefix . '_service_options', array(
        'fields' => array(
            array(
                'id' => 'service_icon',
                'type' => 'icon',
                'title' => esc_html__('Icon', 'softim'),
                'desc' => wp_kses(__('Select Your Icon', 'softim'), $allowed_html)
            )
        )
    ));

    /*-------------------------------------
     Team Options
    -------------------------------------*/
    CSF::createMetabox($prefix . '_team_options', array(
        'title' => esc_html__('Team Options', 'softim'),
        'post_type' => array('team'),
        'priority' => 'high'
    ));
    CSF::createSection($prefix . '_team_options', array(
        'title' => esc_html__('Team Icon', 'softim'),
        'id' => 'softim-team-icon',
        'fields' => array(
            array(
                'id' => 'team_icon',
                'type' => 'icon',
                'desc' => wp_kses(__('Select Your Icon', 'softim'), $allowed_html)
            )
        )
    ));
    CSF::createSection($prefix . '_team_options', array(
        'title' => esc_html__('Team Info', 'softim'),
        'id' => 'softim-info',
        'fields' => array(
            array(
                'id' => 'designation',
                'type' => 'text',
                'title' => esc_html__('Designation', 'softim'),
            ),
            array(
                'id' => 'description',
                'type' => 'text',
                'title' => esc_html__('Description', 'softim'),
            ),
            array(
                'id' => 'team-info',
                'type' => 'repeater',
                'title' => esc_html__('Team Info', 'softim'),
                'fields' => array(

                    array(
                        'id' => 'title',
                        'type' => 'text',
                        'title' => esc_html__('Title', 'softim')
                    ),
                    array(
                        'id' => 'icon',
                        'type' => 'icon',
                        'title' => esc_html__('Icon', 'softim')
                    ),

                ),
            ),
        )
    ));
    CSF::createSection($prefix . '_team_options', array(
        'title' => esc_html__('Social Info', 'softim'),
        'id' => 'social-info',
        'fields' => array(
            array(
                'id' => 'social-icons',
                'type' => 'repeater',
                'title' => esc_html__('Social Info', 'softim'),
                'fields' => array(

                    array(
                        'id' => 'title',
                        'type' => 'text',
                        'title' => esc_html__('Title', 'softim')
                    ),
                    array(
                        'id' => 'icon',
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

    //	Deals Meta Box
    CSF::createMetabox($prefix . '_deals_options', array(
        'title' => esc_html__('Deals Options', 'softim'),
        'post_type' => 'deals',
    ));

    CSF::createSection($prefix . '_deals_options', array(
        'fields' => array(
            array(
                'id' => 'deals_icon',
                'default' => 'flaticon-protection',
                'type' => 'icon',
                'title' => esc_html__('Icon', 'softim'),
                'desc' => wp_kses(__('Select Your Icon', 'softim'), $allowed_html)
            ),
            array(
                'id' => 'deals_subtitle',
                'type' => 'text',
                'title' => esc_html__('Deals Subtitle', 'softim'),
                'default' => esc_html__('Embraer P-300E Specification ', 'softim'),
            ),

            array(
                'id' => 'deals_jet_models_option',
                'type' => 'text',
                'title' => esc_html__('Deals Jet Models', 'softim'),
                'default' => esc_html__('Legacy 600', 'softim'),
            ),
            array(
                'id' => 'deals_jet_seats_option',
                'type' => 'text',
                'title' => esc_html__('Jet Seats', 'softim'),
                'default' => esc_html__('8 - 14 Seats', 'softim'),
            ),
            array(
                'id' => 'deals_price_option',
                'type' => 'text',
                'title' => esc_html__('Deals Price', 'softim'),
                'default' => esc_html__('$9,000/ hr ', 'softim'),
            )
        )
    ));

    //	Packages Meta Box
    CSF::createMetabox($prefix . '_packages_options', array(
        'title' => esc_html__('Packages Options', 'softim'),
        'post_type' => 'packages',
    ));
    CSF::createSection($prefix . '_packages_options', array(
        'fields' => array(
            array(
                'id' => 'packages_icon',
                'default' => 'flaticon-protection',
                'type' => 'icon',
                'title' => esc_html__('Icon', 'softim'),
                'desc' => wp_kses(__('Select Your Icon', 'softim'), $allowed_html)
            ),
            array(
                'id' => 'packages_duration_option',
                'type' => 'text',
                'title' => esc_html__('Packages Duration', 'softim'),
                'default' => esc_html__('2 hours 25 min', 'softim'),
            ),
            array(
                'id' => 'packages_price_option',
                'type' => 'text',
                'title' => esc_html__('Packages Price', 'softim'),
                'default' => esc_html__('$115.00', 'softim'),
            ),
            array(
                'id' => 'packages_date_option',
                'type' => 'text',
                'title' => esc_html__('Packages Date', 'softim'),
                'default' => esc_html__('Thursday, Nov 4, 2021', 'softim'),
            ),
            array(
                'id' => 'packages_number_option',
                'type' => 'text',
                'title' => esc_html__('Packages Person Number', 'softim'),
            ),
            array(
                'id' => 'packages_video_link',
                'type' => 'text',
                'title' => esc_html__('Packages Video Link', 'softim'),
            )
        )
    ));

    //	Courses Meta Box
    CSF::createMetabox($prefix . '_courses_options', array(
        'title' => esc_html__('Courses Options', 'softim'),
        'post_type' => 'courses',
    ));

    CSF::createSection($prefix . '_courses_options', array(
        'title' => esc_html__('Social Info', 'softim'),
        'id' => 'social-info',
        'fields' => array(
            array(
                'id' => 'course_start_date_option',
                'type' => 'text',
                'title' => esc_html__('Start From', 'softim'),
                'default' => esc_html__('Thursday, Nov 4, 2022', 'softim'),
            ),
            array(
                'id' => 'study-option',
                'type' => 'repeater',
                'title' => esc_html__('Study Options', 'softim'),
                'fields' => array(

                    array(
                        'id' => 'qualification',
                        'type' => 'text',
                        'title' => esc_html__('Qualification', 'softim'),
                        'default' => esc_html__('Bachelor of Aviation (Hons)', 'softim'),
                    ),
                    array(
                        'id' => 'length',
                        'type' => 'text',
                        'title' => esc_html__('Length', 'softim'),
                        'default' => esc_html__('9 months full time', 'softim'),
                    ),
                    array(
                        'id' => 'code',
                        'type' => 'text',
                        'title' => esc_html__('Code', 'softim'),
                        'default' => esc_html__('ba1x', 'softim'),
                    ),
                ),
            ),
            array(
                'id' => 'course_module_option',
                'type' => 'text',
                'title' => esc_html__('Course Module Title', 'softim'),
                'default' => esc_html__('Download full course Module', 'softim'),
            ),
            array(
                'id' => 'course_module_button_title',
                'type' => 'text',
                'title' => esc_html__('Course Module Button Title', 'softim'),
                'default' => esc_html__('Download', 'softim'),
            ),
            array(
                'id' => 'course_module_button_url',
                'type' => 'text',
                'title' => esc_html__('Course Module Button URL', 'softim'),
                'default' => esc_html__('#', 'softim'),
            ),
        )
    ));
}//endif