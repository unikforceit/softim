<?php

/*
 * Theme Customize Options
 * @package softim
 * @since 1.0.0
 * */

if (!defined('ABSPATH')) {
    exit(); // exit if access directly
}

if (class_exists('CSF')) {
    $prefix = 'softim';

    CSF::createCustomizeOptions($prefix . '_customize_options');
    /*-------------------------------------
        ** Theme Main panel
    -------------------------------------*/
    CSF::createSection($prefix . '_customize_options', array(
        'title' => esc_html__('Softim Options', 'softim'),
        'id' => 'softim_main_panel',
        'priority' => 11,
    ));


    /*-------------------------------------
        ** Theme Main Color
    -------------------------------------*/
    CSF::createSection($prefix . '_customize_options', array(
        'title' => esc_html__('01. Main Color', 'softim'),
        'priority' => 10,
        'parent' => 'softim_main_panel',
        'fields' => array(
            array(
                'id' => 'main_color',
                'type' => 'color',
                'title' => esc_html__('Theme Main Color One', 'softim'),
                'default' => '#DCBB87',
                'desc' => esc_html__('This is theme primary color one, means it will affect most of elements that have default color of our theme primary color', 'softim')
            ),
            array(
                'id' => 'main_color_two',
                'type' => 'color',
                'title' => esc_html__('Theme Main Color Two', 'softim'),
                'default' => '#a37D3D',
                'desc' => esc_html__('This is theme primary color two, means it\'ll affect most of elements that have default color of our theme primary color', 'softim')
            ),
            array(
                'id' => 'secondary_color',
                'type' => 'color',
                'title' => esc_html__('Theme Secondary Color', 'softim'),
                'default' => '#19232D',
                'desc' => esc_html__('This is theme secondary color, means it\'ll affect most of elements that have default color of our theme secondary color', 'softim')
            ),
            array(
                'id' => 'heading_color',
                'type' => 'color',
                'title' => esc_html__('Theme Heading Color', 'softim'),
                'default' => '#19232D',
                'desc' => esc_html__('This is theme heading color, means it\'ll affect all of heading tag like, h1,h2,h3,h4,h5,h6', 'softim')
            ),
            array(
                'id' => 'paragraph_color',
                'type' => 'color',
                'title' => esc_html__('Theme Paragraph Color', 'softim'),
                'default' => '#585858',
                'desc' => esc_html__('This is theme paragraph color, means it\'ll affect all of body/paragraph tag like, p,li,a etc', 'softim')
            ),
        )
    ));
    /*-------------------------------------
        ** Theme Header Options
    -------------------------------------*/

    CSF::createSection($prefix . '_customize_options', array(
        'title' => esc_html__('02. Header One Options', 'softim'),
        'parent' => 'softim_main_panel',
        'priority' => 11,
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Nav Bar Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_01_nav_bar_bg_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Background Color', 'softim'),
                'default' => '#19232d'
            ),
            array(
                'id' => 'header_01_nav_bar_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Text Color', 'softim'),
                'default' => '#fff'
            ),
            array(
                'id' => 'header_01_nav_bar_hover_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Hover Text Color', 'softim'),
                'default' => '#fff'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Dropdown Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_01_dropdown_bg_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Background Color', 'softim'),
                'default' => '#fff'
            ),
            array(
                'id' => 'header_01_dropdown_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Text Color', 'softim'),
                'default' => '#19232d'
            ),
            array(
                'id' => 'header_01_dropdown_border_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Border Color', 'softim'),
                'default' => '#19232d'
            ),
            array(
                'id' => 'header_01_dropdown_hover_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Hover Text Color', 'softim'),
                'default' => '#fff'
            ),
            array(
                'id' => 'header_01_dropdown_hover_bg_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Hover Background Color', 'softim'),
                'default' => '#19232d'
            ),
        )
    ));
    CSF::createSection($prefix . '_customize_options', array(
        'title' => esc_html__('03. Header Two Options', 'softim'),
        'parent' => 'softim_main_panel',
        'priority' => 11,
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Menu Option', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_02_top_bar_bg_color',
                'type' => 'color',
                'title' => esc_html__('Menu Background Color', 'softim'),
                'default' => 'transparent'
            ),
            array(
                'id' => 'header_02_top_bar_text_color',
                'type' => 'color',
                'title' => esc_html__('Menu Info Text Color', 'softim'),
                'default' => '#fff'
            ),
            array(
                'id' => 'header_02_top_bar_icon_color',
                'type' => 'color',
                'title' => esc_html__('Menu Info Icon Color', 'softim'),
                'default' => '#DCBB87'
            ),
            array(
                'id' => 'header_02_top_bar_hover_color',
                'type' => 'color',
                'title' => esc_html__('Menu Info Hover Color', 'softim'),
                'default' => '#DCBB87'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Menu Bar Button', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_02_top_bar_btn_bg_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Button Background Color', 'softim'),
                'default' => '#dcbb87'
            ),
            array(
                'id' => 'header_02_top_bar_btn_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Button Color', 'softim'),
                'default' => '#1F2E3C'
            ),
            array(
                'id' => 'header_02_top_bar_btn_hover_bg_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Button Hover Background Color', 'softim'),
                'default' => 'transparent'
            ),
            array(
                'id' => 'header_02_top_bar_hover_btn_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Button Hover Color', 'softim'),
                'default' => '#dcbb87'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Side Nav Bar Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_02_nav_bar_bg_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Background Color', 'softim'),
                'default' => '#fff'
            ),
            array(
                'id' => 'header_02_nav_bar_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Text Color', 'softim'),
                'default' => '#19232D'
            ),
            array(
                'id' => 'header_02_nav_bar_hover_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Hover Text Color', 'softim'),
                'default' => '#DCBB87'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Sidebar Dropdown Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_02_dropdown_bg_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Background Color', 'softim'),
                'default' => '#dcbb87'
            ),
            array(
                'id' => 'header_02_dropdown_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Text Color', 'softim'),
                'default' => '#19232D'
            ),
            array(
                'id' => 'header_02_dropdown_hover_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Hover Text Color', 'softim'),
                'default' => '#fff'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Sidebar Social Icon', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_02_sidebar_social_bg_color',
                'type' => 'color',
                'title' => esc_html__('Menu Bar Icon Color', 'softim'),
                'default' => '#fff'
            ),
            array(
                'id' => 'header_02_sidebar_social_color',
                'type' => 'color',
                'title' => esc_html__('Menu Bar Icon Text Color', 'softim'),
                'default' => '#F8B65D'
            ),
            array(
                'id' => 'header_02_sidebar_social_hover_color',
                'type' => 'color',
                'title' => esc_html__('Menu Bar Icon Hover Color', 'softim'),
                'default' => '#fff'
            ),
            array(
                'id' => 'header_02_sidebar_social_hover_bg_color',
                'type' => 'color',
                'title' => esc_html__('Menu Bar Icon Text Hover Color', 'softim'),
                'default' => '#C49868'
            ),
        )
    ));
    CSF::createSection($prefix . '_customize_options', array(
        'title' => esc_html__('02. Header Three Options', 'softim'),
        'parent' => 'softim_main_panel',
        'priority' => 11,
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Nav Bar Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_03_nav_bar_bg_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Background Color', 'softim'),
                'default' => 'transparent'
            ),
            array(
                'id' => 'header_03_nav_bar_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Text Color', 'softim'),
                'default' => '#19232D'
            ),
            array(
                'id' => 'header_03_nav_bar_hover_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Hover Text Color', 'softim'),
                'default' => '#DCBB87'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Dropdown Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_03_dropdown_bg_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Background Color', 'softim'),
                'default' => '#fff'
            ),
            array(
                'id' => 'header_03_dropdown_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Text Color', 'softim'),
                'default' => '#19232d'
            ),
            array(
                'id' => 'header_03_dropdown_border_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Border Color', 'softim'),
                'default' => '#dcbb87'
            ),
            array(
                'id' => 'header_03_dropdown_hover_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Hover Text Color', 'softim'),
                'default' => '#fff'
            ),
            array(
                'id' => 'header_03_dropdown_hover_bg_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Hover Background Color', 'softim'),
                'default' => '#dcbb87'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Menu Bar Button Right Icon', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_03_top_bar_text_color',
                'type' => 'color',
                'title' => esc_html__('Menu Info Text Color', 'softim'),
                'default' => '#19232D'
            ),
            array(
                'id' => 'header_03_top_bar_icon_color',
                'type' => 'color',
                'title' => esc_html__('Menu Info Icon Color', 'softim'),
                'default' => '#19232D'
            ),
            array(
                'id' => 'header_03_top_bar_hover_color',
                'type' => 'color',
                'title' => esc_html__('Menu Info Hover Color', 'softim'),
                'default' => '#DCBB87'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Menu Bar Button', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_03_menu_btn_bg_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Button Background Color', 'softim'),
                'default' => '#DCBB87'
            ),
            array(
                'id' => 'header_03_menu_btn_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Button Color', 'softim'),
                'default' => '#19232D'
            ),
            array(
                'id' => 'header_03_menu_btn_hover_bg_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Button Hover Background Color', 'softim'),
                'default' => 'transparent'
            ),
            array(
                'id' => 'header_03_menu_hover_btn_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Button Hover Color', 'softim'),
                'default' => '#19232D'
            ),
        )
    ));
    CSF::createSection($prefix . '_customize_options', array(
        'title' => esc_html__('02. Header Four Options', 'softim'),
        'parent' => 'softim_main_panel',
        'priority' => 11,
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Nav Bar Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_04_nav_bar_bg_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Background Color', 'softim'),
                'default' => 'transparent'
            ),
            array(
                'id' => 'header_04_nav_bar_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Text Color', 'softim'),
                'default' => '#DCBB87'
            ),
            array(
                'id' => 'header_04_nav_bar_hover_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Hover Text Color', 'softim'),
                'default' => '#fff'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Dropdown Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_04_dropdown_bg_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Background Color', 'softim'),
                'default' => '#fff'
            ),
            array(
                'id' => 'header_04_dropdown_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Text Color', 'softim'),
                'default' => '#19232d'
            ),
            array(
                'id' => 'header_04_dropdown_border_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Border Color', 'softim'),
                'default' => '#19232d'
            ),
            array(
                'id' => 'header_04_dropdown_hover_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Hover Text Color', 'softim'),
                'default' => '#19232d'
            ),
            array(
                'id' => 'header_04_dropdown_hover_bg_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Hover Background Color', 'softim'),
                'default' => '#fff'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Menu Bar Button Right Icon', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_04_top_bar_icon_color',
                'type' => 'color',
                'title' => esc_html__('Menu Search Icon Color', 'softim'),
                'default' => '#757575'
            ),
            array(
                'id' => 'header_04_top_bar_hover_color',
                'type' => 'color',
                'title' => esc_html__('Menu Search Hover Color', 'softim'),
                'default' => '#DCBB87'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Menu Bar Button', 'softim') . '</h3>'
            ),
            array(
                'id' => 'header_04_menu_btn_bg_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Button Background Color', 'softim'),
                'default' => '#DCBB87'
            ),
            array(
                'id' => 'header_04_menu_btn_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Button Color', 'softim'),
                'default' => '#19232D'
            ),
            array(
                'id' => 'header_04_menu_btn_hover_bg_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Button Hover Background Color', 'softim'),
                'default' => 'transparent'
            ),
            array(
                'id' => 'header_04_menu_hover_btn_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Button Hover Color', 'softim'),
                'default' => '#fff'
            ),
        )
    ));
    /*-------------------------------------
          ** Theme Sidebar Options
      -------------------------------------*/
    CSF::createSection($prefix . '_customize_options', array(
        'title' => esc_html__('05. Sidebar', 'softim'),
        'priority' => 13,
        'parent' => 'softim_main_panel',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Sidebar Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'sidebar_widget_title_color',
                'type' => 'color',
                'title' => esc_html__('Sidebar Widget Title Color', 'softim'),
                'default' => '#19232D'
            ),
            array(
                'id' => 'sidebar_widget_title_bottom_border_color',
                'type' => 'color',
                'title' => esc_html__('Sidebar Widget Border Color', 'softim'),
                'default' => '#DCBB87'
            ),
            array(
                'id' => 'sidebar_widget_text_color',
                'type' => 'color',
                'title' => esc_html__('Sidebar Widget Text Color', 'softim'),
                'default' => '#585858'
            ),
        )
    ));
    /*-------------------------------------
        ** Theme Footer One Options
    -------------------------------------*/
    CSF::createSection($prefix . '_customize_options', array(
        'title' => esc_html__('06. Footer One', 'softim'),
        'priority' => 14,
        'parent' => 'softim_main_panel',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'footer_area_bg_color',
                'type' => 'color',
                'title' => esc_html__('Footer Background Color', 'softim'),
                'default' => '#19232D',
            ),
            array(
                'id' => 'footer_area_bottom_border_color',
                'type' => 'color',
                'title' => esc_html__('Footer Bottom Border Color', 'softim'),
                'default' => 'rgba(114, 108, 148, 0.2)',
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Widget Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'footer_widget_title_color',
                'type' => 'color',
                'title' => esc_html__('Footer Widget Title Color', 'softim'),
                'default' => '#fff'
            ),
            array(
                'id' => 'footer_widget_text_color',
                'type' => 'color',
                'title' => esc_html__('Footer Widget Text Color', 'softim'),
                'default' => '#fff'
            ),
            array(
                'id' => 'footer_widget_text_hover_color',
                'type' => 'color',
                'title' => esc_html__('Footer Widget Text Hover Color', 'softim'),
                'default' => '#DCBB87'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Tag Cloud Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'footer_widget_tag_color',
                'type' => 'color',
                'title' => esc_html__('Footer Tag Text Color', 'softim'),
                'default' => '#fff'
            ),
            array(
                'id' => 'footer_widget_tag_bg_color',
                'type' => 'color',
                'title' => esc_html__('Footer Tag Background Color', 'softim'),
                'default' => '#19232d'
            ),
            array(
                'id' => 'footer_widget_tag_border_color',
                'type' => 'color',
                'title' => esc_html__('Footer Tag Border Color', 'softim'),
                'default' => '#19232d'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Copyright Area Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'copyright_area_bg_color',
                'type' => 'color',
                'title' => esc_html__('Copyright Area Background Color', 'softim'),
                'default' => '#19232D'
            ),
            array(
                'id' => 'copyright_area_text_color',
                'type' => 'color',
                'title' => esc_html__('Copyright Area Text Color', 'softim'),
                'default' => '#fff'
            ),
        )
    ));

    /*-------------------------------------
     ** Theme Footer Two Options
    -------------------------------------*/
    CSF::createSection($prefix . '_customize_options', array(
        'title' => esc_html__('06. Footer Two', 'softim'),
        'priority' => 14,
        'parent' => 'softim_main_panel',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Top Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'footer_two_menu_contact_title_color',
                'type' => 'color',
                'title' => esc_html__('Footer Top Menu Title Color', 'softim'),
                'default' => '#DCBB87'
            ),
            array(
                'id' => 'footer_two_menu_text_color',
                'type' => 'color',
                'title' => esc_html__('Footer Top Menu Text Color', 'softim'),
                'default' => '#fff'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'footer_area_two_bg_color',
                'type' => 'color',
                'title' => esc_html__('Footer Background Color', 'softim'),
                'default' => '#19232D',
            ),
            array(
                'id' => 'footer_area_two_bottom_border_color',
                'type' => 'color',
                'title' => esc_html__('Footer Bottom Border Color', 'softim'),
                'default' => 'rgba(114, 108, 148, 0.2)',
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Widget Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'footer_two_widget_title_color',
                'type' => 'color',
                'title' => esc_html__('Footer Widget Title Color', 'softim'),
                'default' => 'rgba(255, 255, 255, 0.9)'
            ),
            array(
                'id' => 'footer_two_widget_text_color',
                'type' => 'color',
                'title' => esc_html__('Footer Widget Text Color', 'softim'),
                'default' => 'rgba(255,255,255,0.8)'
            ),
            array(
                'id' => 'footer_two_widget_text_hover_color',
                'type' => 'color',
                'title' => esc_html__('Footer Widget Text Hover Color', 'softim'),
                'default' => '#DCBB87'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Tag Cloud Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'footer_widget_two_tag_color',
                'type' => 'color',
                'title' => esc_html__('Footer Tag Text Color', 'softim'),
                'default' => '#fff'
            ),
            array(
                'id' => 'footer_widget_two_tag_bg_color',
                'type' => 'color',
                'title' => esc_html__('Footer Tag Background Color', 'softim'),
                'default' => 'transparent'
            ),
            array(
                'id' => 'footer_widget_two_tag_border_color',
                'type' => 'color',
                'title' => esc_html__('Footer Tag Border Color', 'softim'),
                'default' => '#fff'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Copyright Area Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'copyright_two_area_bg_color',
                'type' => 'color',
                'title' => esc_html__('Copyright Area Background Color', 'softim'),
                'default' => 'transparent'
            ),
            array(
                'id' => 'copyright_two_area_text_color',
                'type' => 'color',
                'title' => esc_html__('Copyright Area Text Color', 'softim'),
                'default' => 'rgba(255,255,255,0.8)'
            ),
        )
    ));

    /*-------------------------------------
    ** Theme Footer Three Options
    -------------------------------------*/
    CSF::createSection($prefix . '_customize_options', array(
        'title' => esc_html__('06. Footer Three', 'softim'),
        'priority' => 14,
        'parent' => 'softim_main_panel',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Top Call To Action Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'footer_three_call_text_color',
                'type' => 'color',
                'title' => esc_html__('Call To Action Title Color', 'softim'),
                'default' => '#19232D'
            ),
            array(
                'id' => 'footer_three_call_btn_bg_color',
                'type' => 'color',
                'title' => esc_html__('Call To Action Button Background Color', 'softim'),
                'default' => '#dcbb87'
            ),
            array(
                'id' => 'footer_three_call_btn_color',
                'type' => 'color',
                'title' => esc_html__('Call To Action Button Color', 'softim'),
                'default' => '#1F2E3C'
            ),
            array(
                'id' => 'footer_three_call_btn_hover_bg_color',
                'type' => 'color',
                'title' => esc_html__('Call To Action Button Hover Background Color', 'softim'),
                'default' => 'transparent'
            ),
            array(
                'id' => 'footer_three_call_hover_btn_color',
                'type' => 'color',
                'title' => esc_html__('Call To Action Button Hover Color', 'softim'),
                'default' => '#dcbb87'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'footer_area_three_bg_color',
                'type' => 'color',
                'title' => esc_html__('Footer Background Color', 'softim'),
            ),
            array(
                'id' => 'footer_area_three_bottom_border_color',
                'type' => 'color',
                'title' => esc_html__('Footer Bottom Border Color', 'softim'),
                'default' => 'rgba(114, 108, 148, 0.2)',
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Widget Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'footer_three_widget_title_color',
                'type' => 'color',
                'title' => esc_html__('Footer Widget Title Color', 'softim'),
                'default' => '#DCBB87'
            ),
            array(
                'id' => 'footer_three_widget_text_color',
                'type' => 'color',
                'title' => esc_html__('Footer Widget Text Color', 'softim'),
                'default' => '#19232D'
            ),
            array(
                'id' => 'footer_three_widget_text_hover_color',
                'type' => 'color',
                'title' => esc_html__('Footer Widget Text Hover Color', 'softim'),
                'default' => '#DCBB87'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Tag Cloud Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'footer_widget_three_tag_color',
                'type' => 'color',
                'title' => esc_html__('Footer Tag Text Color', 'softim'),
                'default' => '#fff'
            ),
            array(
                'id' => 'footer_widget_three_tag_bg_color',
                'type' => 'color',
                'title' => esc_html__('Footer Tag Background Color', 'softim'),
                'default' => 'transparent'
            ),
            array(
                'id' => 'footer_widget_three_tag_border_color',
                'type' => 'color',
                'title' => esc_html__('Footer Tag Border Color', 'softim'),
                'default' => '#fff'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Copyright Area Options', 'softim') . '</h3>'
            ),
            array(
                'id' => 'copyright_three_area_bg_color',
                'type' => 'color',
                'title' => esc_html__('Copyright Area Background Color', 'softim'),
                'default' => 'transparent'
            ),
            array(
                'id' => 'copyright_three_area_text_color',
                'type' => 'color',
                'title' => esc_html__('Copyright Area Text Color', 'softim'),
                'default' => '#757575'
            ),
        )
    ));


}//endif