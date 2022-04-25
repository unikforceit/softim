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
        'icon' => 'fas fa-columns',
        'fields' => Softim_Group_Fields::page_layout()
    ));
    CSF::createSection($prefix . '_page_container_options', array(
        'title' => esc_html__('Header Footer & Breadcrumb', 'softim'),
        'icon' => 'fas fa-header',
        'fields' => Softim_Group_Fields::Page_Container_Options('header_options')
    ));
    CSF::createSection($prefix . '_page_container_options', array(
        'title' => esc_html__('Width & Padding', 'softim'),
        'icon' => 'fas fa-file-o',
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
                        'type' => 'media',
                        'title' => esc_html__('Sign', 'softim')
                    ),

                ),
            ),
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
                'title' => esc_html__('Description 1', 'softim'),
            ),
            array(
                'id' => 'description2',
                'type' => 'text',
                'title' => esc_html__('Description 2', 'softim'),
            ),
            array(
                'id' => 'sign',
                'type' => 'media',
                'title' => esc_html__('URL', 'softim'),
            ),

        )
    ));
    CSF::createSection($prefix . '_team_options', array(
        'title' => esc_html__('Team Tab', 'softim'),
        'id' => 'softim-tab',
        'fields' => array(
            array(
                'id' => 'team-tab',
                'type' => 'repeater',
                'title' => esc_html__('Tab Button', 'softim'),
                'fields' => array(
                    array(
                        'id' => 'tabTitle',
                        'type' => 'text',
                        'title' => esc_html__('Tab Title', 'softim')
                    ),
                    array(
                        'id' => 'tabTitle1',
                        'type' => 'text',
                        'title' => esc_html__('Title 1', 'softim')
                    ),
                    array(
                        'id' => 'tabTitle1_text',
                        'type' => 'text',
                        'title' => esc_html__('Title 1 Text', 'softim')
                    ),
                    array(
                        'id' => 'tabTitle2',
                        'type' => 'text',
                        'title' => esc_html__('Title 2', 'softim')
                    ),
                    array(
                        'id' => 'tabTitle2_text',
                        'type' => 'text',
                        'title' => esc_html__('Title 2 Text', 'softim')
                    ),
                    array(
                        'id' => 'tabTitle3',
                        'type' => 'text',
                        'title' => esc_html__('Title 3', 'softim')
                    ),
                    array(
                        'id' => 'tabTitle3_text',
                        'type' => 'text',
                        'title' => esc_html__('Title 3 Text', 'softim')
                    ),
                ),
            ),
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

}//endif