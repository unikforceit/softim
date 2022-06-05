<?php
/**
 * Theme functions & definitations
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package softim
 */

/**
 * Define Theme Folder Path & URL Constant
 * @package softim
 * @since 1.0.0
 */

define('SOFTIM_THEME_ROOT',get_template_directory());
define('SOFTIM_THEME_ROOT_URL',get_template_directory_uri());
define('SOFTIM_INC',SOFTIM_THEME_ROOT .'/inc');
define('SOFTIM_WOO_SWATCHES',SOFTIM_INC .'/woo-swatches');
define('SOFTIM_THEME_SETTINGS',SOFTIM_INC.'/theme-settings');
define('SOFTIM_THEME_SETTINGS_IMAGES',SOFTIM_THEME_ROOT_URL.'/inc/theme-settings/images');
define('SOFTIM_TGMA',SOFTIM_INC.'/plugins/tgma');
define('SOFTIM_DYNAMIC_STYLESHEETS',SOFTIM_INC.'/theme-stylesheets');
define('SOFTIM_CSS',SOFTIM_THEME_ROOT_URL.'/assets/css');
define('SOFTIM_SCSS',SOFTIM_THEME_ROOT_URL.'/assets/scss');
define('SOFTIM_JS',SOFTIM_THEME_ROOT_URL.'/assets/js');
define('SOFTIM_ASSETS',SOFTIM_THEME_ROOT_URL.'/assets');
define('SOFTIM_DEV',true);


/**
 * Theme Initial File
 * @package softim
 * @since 1.0.0
 */
if (file_exists(SOFTIM_INC .'/theme-init.php')){
	require_once SOFTIM_INC .'/theme-init.php';
}


/**
 * Codester Framework Functions
 * @package softim
 * @since 1.0.0
 */
if (file_exists(SOFTIM_INC .'/theme-cs-function.php')){
	require_once SOFTIM_INC .'/theme-cs-function.php';
}


/**
 * Theme Helpers Functions
 * @package softim
 * @since 1.0.0
 */
if (file_exists(SOFTIM_INC .'/theme-helper-functions.php')){

	require_once SOFTIM_INC .'/theme-helper-functions.php';
	if (!function_exists('softim')){
		function softim(){
			return class_exists('Softim_Helper_Functions') ? new Softim_Helper_Functions() : false;
		}
	}
}
/**
 * Nav menu fallback function
 * @since 1.0.0
 */
 function softim_theme_fallback_menu()
{
    get_template_part('template-parts/default', 'menu');
}
