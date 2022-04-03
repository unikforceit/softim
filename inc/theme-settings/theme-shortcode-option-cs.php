<?php
/**
 * Theme Shortcodes Generator
 * @package softim
 * @since 1.0.0
 */

if (!defined('ABSPATH')){
	exit(); //exit if access it directly
}

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {
	$prefix = 'softim';
	CSF::createShortcoder( $prefix.'_shortcodes', array(
		'button_title'   => esc_html__('Add Shortcode','softim'),
		'select_title'   => esc_html__('Select a shortcode','softim'),
		'insert_title'   => esc_html__('Insert Shortcode','softim')
	) );

	/*------------------------------------
		Social Icon Options
	-------------------------------------*/
	CSF::createSection( $prefix.'_shortcodes', array(
		'title'     => esc_html__('Social Icons','softim'),
		'view'      => 'group',
		'shortcode' => 'softim_social_icon_wrap',
		'fields' => [
            array(
                'id'      => 'custom_class',
                'type'    => 'text',
                'title'   => esc_html__('Custom Class','softim'),
            )
        ],
		'group_shortcode' => 'softim_social_icon',
		'group_fields'    => array(
			array(
				'id'    => 'social_icon',
				'type'  => 'icon',
				'title' => esc_html__('Icon','softim'),
			),
			array(
				'id'      => 'social_link',
				'type'    => 'text',
				'title'   => esc_html__('URL','softim'),
			)
		)
	) );

	/*------------------------------------
		Top Menu Options
	-------------------------------------*/
	CSF::createSection( $prefix.'_shortcodes', array(
		'title'     => esc_html__('Top Menu','softim'),
		'view'      => 'group',
		'shortcode' => 'softim_top_menu_wrap',
		'group_shortcode' => 'softim_top_menu',
		'group_fields'    => array(
			array(
				'id'    => 'top_menu_text',
				'type'  => 'text',
				'title' => esc_html__('Text','softim'),
			),
			array(
				'id'      => 'top_menu_link',
				'type'    => 'text',
				'title'   => esc_html__('URL','softim'),
			)
		)
	) );

    /*------------------------------------
      Info Menu Options
    -------------------------------------*/
    CSF::createSection( $prefix.'_shortcodes', array(
        'title'     => esc_html__('Info Menu','softim'),
        'view'      => 'group',
        'shortcode' => 'softim_top_menu_wrap_02',
        'group_shortcode' => 'softim_top_menu_02',
        'group_fields'    => array(
            array(
                'id'    => 'top_menu_title_text',
                'type'  => 'text',
                'title' => esc_html__('Text','softim'),
            ),
            array(
                'id'    => 'top_menu_text',
                'type'  => 'text',
                'title' => esc_html__('Text','softim'),
            ),
            array(
                'id'      => 'top_menu_link',
                'type'    => 'text',
                'title'   => esc_html__('URL','softim'),
            )
        )
    ) );
    
	/*------------------------------------
		Inline info link options
	-------------------------------------*/
	CSF::createSection( $prefix.'_shortcodes', array(
		'title'     => esc_html__('Inline Info Link','softim'),
		'view'      => 'group',
		'shortcode' => 'softim_info_item_wrap',
		'group_shortcode' => 'softim_info_link',
		'group_fields'    => array(
			array(
				'id'    => 'icon',
				'type'  => 'icon',
				'title' => esc_html__('Icon','softim'),
			),
			array(
				'id'      => 'text',
				'type'    => 'text',
				'title'   => esc_html__('Text','softim'),
			),
			array(
				'id'      => 'url',
				'type'    => 'text',
				'title'   => esc_html__('URL','softim'),
			)
		)
	) );

}
