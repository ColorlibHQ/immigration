<?php 
/**
 * @Packge 	   : Immigration
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
// Block direct access
if( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */
 
// Base URI
if( ! defined( 'IMMIGRATION_DIR_URI' ) ) {
	define( 'IMMIGRATION_DIR_URI', get_template_directory_uri().'/' );
}

// assets URI
if( ! defined( 'IMMIGRATION_DIR_ASSETS_URI' ) ) {
	define( 'IMMIGRATION_DIR_ASSETS_URI', IMMIGRATION_DIR_URI.'assets/' );
}

// Css File URI
if( ! defined( 'IMMIGRATION_DIR_CSS_URI' ) ) {
	define( 'IMMIGRATION_DIR_CSS_URI', IMMIGRATION_DIR_ASSETS_URI .'css/' );
}

// Js File URI
if( ! defined( 'IMMIGRATION_DIR_JS_URI' ) ) {
	define( 'IMMIGRATION_DIR_JS_URI', IMMIGRATION_DIR_ASSETS_URI .'js/' );
}

// Base Directory
if( ! defined( 'IMMIGRATION_DIR_PATH' ) ) {
	define( 'IMMIGRATION_DIR_PATH', get_parent_theme_file_path().'/' );
}

//Inc Folder Directory
if( ! defined( 'IMMIGRATION_DIR_PATH_INC' ) ) {
	define( 'IMMIGRATION_DIR_PATH_INC', IMMIGRATION_DIR_PATH.'inc/' );
}

//Immigration libraries Folder Directory
if( ! defined( 'IMMIGRATION_DIR_PATH_LIBS' ) ) {
	define( 'IMMIGRATION_DIR_PATH_LIBS', IMMIGRATION_DIR_PATH_INC.'libraries/' );
}

//Classes Folder Directory
if( ! defined( 'IMMIGRATION_DIR_PATH_CLASSES' ) ) {
	define( 'IMMIGRATION_DIR_PATH_CLASSES', IMMIGRATION_DIR_PATH_INC.'classes/' );
}

//Hooks Folder Directory
if( ! defined( 'IMMIGRATION_DIR_PATH_HOOKS' ) ) {
	define( 'IMMIGRATION_DIR_PATH_HOOKS', IMMIGRATION_DIR_PATH_INC.'hooks/' );
}

//Widgets Folder Directory
if( ! defined( 'IMMIGRATION_DIR_PATH_WIDGET' ) ) {
	define( 'IMMIGRATION_DIR_PATH_WIDGET', IMMIGRATION_DIR_PATH_INC.'widgets/' );
}

//Companion Folder Directory
if( ! defined( 'IMMIGRATION_DIR_PATH_COMPANION' ) ) {
	define( 'IMMIGRATION_DIR_PATH_COMPANION', IMMIGRATION_DIR_PATH_INC . 'immigration-companion/' );
}



// Admin Enqueue script
function immigration_admin_script(){
    wp_enqueue_style( 'immigration-admin', get_template_directory_uri().'/assets/css/immigration_admin.css', false, '1.0.0' );
    wp_enqueue_script( 'immigration_admin', get_template_directory_uri().'/assets/js/immigration_admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'immigration_admin_script' );


/**
 * Include File
 *
 */

require_once( IMMIGRATION_DIR_PATH_INC . 'breadcrumbs.php' );
require_once( IMMIGRATION_DIR_PATH_INC . 'widgets-reg.php' );
require_once( IMMIGRATION_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( IMMIGRATION_DIR_PATH_INC . 'immigration-functions.php' );
require_once( IMMIGRATION_DIR_PATH_INC . 'commoncss.php' );
require_once( IMMIGRATION_DIR_PATH_INC . 'support-functions.php' );
require_once( IMMIGRATION_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( IMMIGRATION_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( IMMIGRATION_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( IMMIGRATION_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( IMMIGRATION_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( IMMIGRATION_DIR_PATH_HOOKS . 'hooks.php' );
require_once( IMMIGRATION_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( IMMIGRATION_DIR_PATH_COMPANION . 'immigration-companion.php' );
require_once( IMMIGRATION_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( IMMIGRATION_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );

/**
 * Instantiate Immigration object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$obj = new Immigration();
