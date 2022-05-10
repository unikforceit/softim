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

    //	Post Details Meta Box
    CSF::createMetabox($prefix . '_post_details_options', array(
        'title' => esc_html__('Post Options', 'softim'),
        'post_type' => 'post',
    ));

    //	Service Meta Box
    CSF::createMetabox($prefix . '_service_options', array(
        'title' => esc_html__('Service Options', 'softim'),
        'post_type' => 'service',
    ));
    CSF::createSection($prefix . '_service_options', array(
        'title' => esc_html__('Service Icon', 'softim'),
        'id' => 'softim_service_icon',
        'fields' => array(
            array(
                'id' => 'image',
                'type' => 'media',
                'title' => esc_html__('Image', 'softim')
            ),
        )
    ));
    CSF::createSection($prefix . '_service_options', array(
        'title' => esc_html__('Service Options', 'softim'),
        'id' => 'softim_service_info',
        'fields' => array(
            array(
                'id' => 'service_info_widget',
                'type' => 'repeater',
                'title' => esc_html__('Service Info Item', 'softim'),
                'fields' => array(
                    array(
                        'id' => 'image',
                        'type' => 'media',
                        'title' => esc_html__('Image', 'softim')
                    ),
                    array(
                        'id' => 'title',
                        'type' => 'text',
                        'title' => esc_html__('Title', 'softim')
                    ),
                    array(
                        'id' => 'text',
                        'type' => 'text',
                        'title' => esc_html__('Text', 'softim')
                    ),
                ),
            ),
        )
    ));
    CSF::createSection($prefix . '_service_options', array(
        'title' => esc_html__('Service Description', 'softim'),
        'id' => 'softim_des',
        'fields' => array(
            array(
                'id' => 'description',
                'type' => 'wp_editor',
                'title' => esc_html__('Description', 'softim'),
            ),

        )
    ));
    CSF::createSection($prefix . '_service_options', array(
        'title' => esc_html__('Service Item', 'softim'),
        'id' => 'softim_service_items',
        'fields' => array(
            array(
                'id' => 'service_item',
                'type' => 'repeater',
                'title' => esc_html__('Service Info Item', 'softim'),
                'fields' => array(
                    array(
                        'id' => 'image',
                        'type' => 'media',
                        'title' => esc_html__('Image', 'softim')
                    ),
                    array(
                        'id' => 'title',
                        'type' => 'text',
                        'title' => esc_html__('Title', 'softim')
                    ),
                ),
            ),
        )
    ));
    CSF::createSection($prefix . '_service_options', array(
        'title' => esc_html__('Service Quote', 'softim'),
        'id' => 'softim_service_quotes',
        'fields' => array(
            array(
                'id' => 'quoteImage1',
                'type' => 'media',
                'title' => esc_html__('Quote Left Image', 'softim')
            ),
            array(
                'id' => 'quoteText',
                'type' => 'text',
                'title' => esc_html__('Quote Text', 'softim'),
            ),
            array(
                'id' => 'quoteImage2',
                'type' => 'media',
                'title' => esc_html__('Quote Right Image', 'softim')
            ),
        )
    ));
    CSF::createSection($prefix . '_service_options', array(
        'title' => esc_html__('Service Description 2', 'softim'),
        'id' => 'softim_des2',
        'fields' => array(
            array(
                'id' => 'description2',
                'type' => 'wp_editor',
                'title' => esc_html__('Description', 'softim'),
            ),

        )
    ));
    CSF::createSection($prefix . '_service_options', array(
        'title' => esc_html__('Service Form Left', 'softim'),
        'id' => 'softim_form',
        'fields' => array(
            array(
                'id' => 'image1',
                'type' => 'media',
                'title' => esc_html__('Move Left Image', 'softim')
            ),
            array(
                'id' => 'image2',
                'type' => 'media',
                'title' => esc_html__('Move Right Image', 'softim')
            ),
            array(
                'id' => 'image3',
                'type' => 'media',
                'title' => esc_html__('Client Image', 'softim')
            ),
        )
    ));
    CSF::createSection($prefix . '_service_options', array(
        'title' => esc_html__('Service Form Right', 'softim'),
        'id' => 'softim_form2',
        'fields' => array(
            array(
                'id' => 'fTitle',
                'type' => 'text',
                'title' => esc_html__('Title 1', 'softim')
            ),
            array(
                'id' => 'fTitle2',
                'type' => 'text',
                'title' => esc_html__('Title 2', 'softim')
            ),
            array(
                'id' => 'fText',
                'type' => 'text',
                'title' => esc_html__('Text', 'softim')
            ),
            array(
                'id' => 'form',
                'type' => 'text',
                'title' => esc_html__('Form', 'softim')
            ),
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
                        'id' => 'icon',
                        'type' => 'icon',
                        'title' => esc_html__('Icon', 'softim')
                    ),
                    array(
                        'id' => 'url',
                        'type' => 'link',
                        'title' => esc_html__('Link', 'softim')
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
                'title' => esc_html__('Sign Image', 'softim'),
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
                'title' => esc_html__('Tabs', 'softim'),
                'fields' => array(
                    array(
                        'id' => 'tabTitle',
                        'type' => 'text',
                        'title' => esc_html__('Tab Title', 'softim')
                    ),
                    array(
                        'id' => 'team-tab-content',
                        'type' => 'repeater',
                        'title' => esc_html__('Tab Content', 'softim'),
                        'fields' => array(
                            array(
                                'id' => 'tabcTitle',
                                'type' => 'text',
                                'title' => esc_html__('Title', 'softim')
                            ),
                            array(
                                'id' => 'tabcInfo',
                                'type' => 'textarea',
                                'title' => esc_html__('Info', 'softim')
                            ),

                        ),
                    ),
                ),
            ),
        )
    ));

    /*-------------------------------------
     Project Options
    -------------------------------------*/
    CSF::createMetabox($prefix . '_project_options', array(
        'title' => esc_html__('Project Options', 'softim'),
        'post_type' => array('project'),
        'priority' => 'high'
    ));
    CSF::createSection($prefix . '_project_options', array(
        'title' => esc_html__('Project Info', 'softim'),
        'id' => 'softim-info',
        'fields' => array(
            array(
                'id' => 'icon_image',
                'type' => 'media',
                'title' => esc_html__('Icon Image', 'softim')
            ),
            array(
                'id' => 'post_image',
                'type' => 'media',
                'title' => esc_html__('Project Image', 'softim')
            ),
            array(
                'id' => 'project_tag',
                'type' => 'text',
                'title' => esc_html__('Service Type', 'softim'),
            ),
            array(
                'id' => 'url',
                'type' => 'link',
                'title' => esc_html__('Web Site Link', 'softim'),
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