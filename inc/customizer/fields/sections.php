<?php 
/**
 * @Packge     : Immigration
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if( ! defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'immigration_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'immigration' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(
    /**
     * General Section
     */
    array(
        'id'   => 'immigration_general_options_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'immigration' ),
            'panel'    => 'immigration_options_panel',
            'priority' => 1,
        ),
    ),
    /**
     * Header Section
     */
    array(
        'id'   => 'immigration_headertop_options_section',
        'args' => array(
            'title'    => esc_html__( 'Header Top', 'immigration' ),
            'panel'    => 'immigration_options_panel',
            'priority' => 2,
        ),
    ),
    /**
     * Blog Section
     */
    array(
        'id'   => 'immigration_blog_options_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'immigration' ),
            'panel'    => 'immigration_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * 404 Page Section
     */
    array(
        'id'   => 'immigration_fof_options_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'immigration' ),
            'panel'    => 'immigration_options_panel',
            'priority' => 6,
        ),
    ),
    /**
     * Footer Section
     */
    array(
        'id'   => 'immigration_footer_options_section',
        'args' => array(
            'title'    => esc_html__( 'Footer', 'immigration' ),
            'panel'    => 'immigration_options_panel',
            'priority' => 7,
        ),
    ),

);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );
