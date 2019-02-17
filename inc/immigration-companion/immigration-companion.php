<?php

if( !defined( 'WPINC' ) ){
    die;
}

/*************************
    Define Constant
*************************/

// Define version constant
if( ! defined( 'IMMIGRATION_COMPANION_VERSION' ) ) {
    define( 'IMMIGRATION_COMPANION_VERSION', '1.0' );
}

// Define dir path constant
if( ! defined( 'IMMIGRATION_COMPANION_DIR_PATH' ) ) {
    define( 'IMMIGRATION_COMPANION_DIR_PATH', IMMIGRATION_DIR_PATH_COMPANION );
}

// Define inc dir path constant
if( ! defined( 'IMMIGRATION_COMPANION_INC_DIR_PATH' ) ) {
    define( 'IMMIGRATION_COMPANION_INC_DIR_PATH', IMMIGRATION_COMPANION_DIR_PATH . 'inc/' );
}

// Define sidebar widgets dir path constant
if( ! defined( 'IMMIGRATION_COMPANION_SW_DIR_PATH' ) ) {
    define( 'IMMIGRATION_COMPANION_SW_DIR_PATH', IMMIGRATION_COMPANION_INC_DIR_PATH . 'sidebar-widgets/' );
}

// Define elementor widgets dir path constant
if( ! defined( 'IMMIGRATION_COMPANION_EW_DIR_PATH' ) ) {
    define( 'IMMIGRATION_COMPANION_EW_DIR_PATH', IMMIGRATION_COMPANION_INC_DIR_PATH . 'elementor-widgets/' );
}

// Define companion dir path constant
if( ! defined( 'IMMIGRATION_COMPANION_DEMO_DIR_PATH' ) ) {
    define( 'IMMIGRATION_COMPANION_DEMO_DIR_PATH', IMMIGRATION_COMPANION_INC_DIR_PATH . 'demo-data/' );
}

// Define companion dir url constant
if( ! defined( 'IMMIGRATION_COMPANION_DIR_URL' ) ) {
    define( 'IMMIGRATION_COMPANION_DIR_URL', IMMIGRATION_DIR_URI . 'inc/immigration-companion/' );
}

// Define companion elementor widget dir url constant
if( ! defined( 'IMMIGRATION_COMPANION_EL_URL' ) ) {
    define( 'IMMIGRATION_COMPANION_EL_URL', IMMIGRATION_COMPANION_DIR_URL . 'inc/elementor-widgets/' );
}

require_once IMMIGRATION_COMPANION_DIR_PATH . 'immigration-init.php';
