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
 * General Section Fields
 ***********************************/


// Theme Main Color Picker
Epsilon_Customizer::add_field(
    'immigration_themecolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Main Color.', 'immigration' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'immigration_general_options_section',
        'default'     => '#f6214b',
    )
);
// Google map api key field
$url = 'https://developers.google.com/maps/documentation/geocoding/get-api-key';

Epsilon_Customizer::add_field(
    'immigration_map_apikey',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Google map api key', 'immigration' ),
        'description'       => sprintf( __( 'Set google map api key. To get api key %s click here %s.', 'immigration' ), '<a target="_blank" href="'.esc_url( $url  ).'">', '</a>' ),
        'section'           => 'immigration_general_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => '',
        
    )
);
/***********************************
 * Header Section Fields
 ***********************************/
// Header top left text
Epsilon_Customizer::add_field(
    'immigration_header_left_text',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Top Left Text', 'immigration' ),
        'section'     => 'immigration_headertop_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( 'We believe we helps people for happier lives', 'immigration' ),
    )
);
// Header top left text
Epsilon_Customizer::add_field(
    'immigration_header_phone',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Top Phone Number', 'immigration' ),
        'section'     => 'immigration_headertop_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( '+880 123 12 658 439', 'immigration' ),
    )
);
// Header Nav Bar Background Color Picker
Epsilon_Customizer::add_field(
    'immigration_header_lefttext',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Top Left Text Color', 'immigration' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'immigration_headertop_options_section',
        'default'     => '#000000',
    )
);
// Header Nav Bar Background Color Picker
Epsilon_Customizer::add_field(
    'immigration_header_phone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Top Phone Number Color', 'immigration' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'immigration_headertop_options_section',
        'default'     => '#000000',
    )
);
// Header Nav Bar Background Color Picker
Epsilon_Customizer::add_field(
    'immigration_header_navbar_bgColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Nav Bar Background Color', 'immigration' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'immigration_headertop_options_section',
        'default'     => '',
    )
);
// Header Sticky  Nav Bar Background Color Picker
Epsilon_Customizer::add_field(
    'immigration_header_navbarsticky_bgColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Sticky Nav Bar Background Color', 'immigration' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'immigration_headertop_options_section',
        'default'     => '',
    )
);
// Header Nav Bar Menu Color Picker
Epsilon_Customizer::add_field(
    'immigration_header_navbar_menuColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Nav Bar Menu Color', 'immigration' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'immigration_headertop_options_section',
        'default'     => '#fff',
    )
);
// Header Nav Bar Menu Hover Color Picker
Epsilon_Customizer::add_field(
    'immigration_header_navbar_menuHovColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Nav Bar Menu Hover Color', 'immigration' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'immigration_headertop_options_section',
        'default'     => '#4a7aec',
    )
);
// Header sticky nav bar menu color picker
Epsilon_Customizer::add_field(
    'immigration_header_sticky_navbar_menuColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header Nav Bar Menu Color', 'immigration' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'immigration_headertop_options_section',
        'default'     => '#fff',
    )
);
// Header sticky nav bar menu hover color picker
Epsilon_Customizer::add_field(
    'immigration_header_sticky_navbar_menuHovColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header Nav Bar Menu Hover Color', 'immigration' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'immigration_headertop_options_section',
        'default'     => '#4a7aec',
    )
);
// Page Header Background Color Picker
Epsilon_Customizer::add_field(
    'immigration_headerbgcolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Background Color', 'immigration' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'colors',
        'default'     => '#999',
    )
);
// Page Header text Color Picker
Epsilon_Customizer::add_field(
    'immigration_headertextcolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Text Color', 'immigration' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'colors',
        'default'     => '#fff',
    )
);
// Header overlay switch field
Epsilon_Customizer::add_field(
    'immigration-headeroverlay-toggle-settings',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Toggle header overlay', 'immigration' ),
        'section'     => 'colors',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
// Header overlay color
Epsilon_Customizer::add_field(
    'immigration_headeroverlaycolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Overlay Color', 'immigration' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'colors',
        'default'     => 'rgba(0, 0, 0, 0.7)',
    )
);

/***********************************
 * Blog Section Fields
 ***********************************/


// Post excerpt length field
Epsilon_Customizer::add_field(
    'immigration_post_excerpt',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Post Excerpt', 'immigration' ),
        'description' => esc_html__( 'Set post excerpt length.', 'immigration' ),
        'section'     => 'immigration_blog_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);
// Blog sidebar layout field
Epsilon_Customizer::add_field(
    'immigration-blog-sidebar-settings',
    array(
        'type'     => 'epsilon-layouts',
        'label'    => esc_html__( 'Blog Layout', 'immigration' ),
        'section'  => 'immigration_blog_options_section',
        'description' => esc_html__( 'Select the option to set blog page sidebar position.', 'immigration' ),
        'layouts'  => array(
            '1' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/one-column.png',
            '2' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/epsilon-section-titleright.jpg',
            '3' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/epsilon-section-titleleft.jpg',
        ),
        'default'  => array(
            'columnsCount' => 1,
            'columns'      => array(
                1 => array(
                    'index' => 1,
                ),
                2 => array(
                    'index' => 2,
                ),
                3 => array(
                    'index' => 3,
                ),
            ),
        ),
        'min_span' => 4,
        'fixed'    => true
    )
);
if( defined( 'IMMIGRATION_COMPANION_VERSION' ) ) {
// Header social switch field
Epsilon_Customizer::add_field(
    'immigration-blog-social-share-toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Social Share Show/Hide', 'immigration' ),
        'section'     => 'immigration_blog_options_section',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

// Header social switch field
Epsilon_Customizer::add_field(
    'immigration-blog-like-toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Like Button Show/Hide', 'immigration' ),
        'section'     => 'immigration_blog_options_section',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
}
/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'immigration_fof_text_one',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'immigration' ),
        'section'           => 'immigration_fof_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Ooops 404 Error !'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'immigration_fof_text_two',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'immigration' ),
        'section'           => 'immigration_fof_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Either something went wrong or the page dosen\'t exist anymore.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'immigration_fof_textonecolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'immigration' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'immigration_fof_options_section',
        'default'     => '#404551', 
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'immigration_fof_texttwocolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'immigration' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'immigration_fof_options_section',
        'default'     => '#abadbe',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'immigration_fof_bgcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'immigration' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'immigration_fof_options_section',
        'default'     => '#fff',
    )
);

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'immigration-widget-toggle-settings',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'immigration' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'immigration' ),
        'section'     => 'immigration_footer_options_section',
        'default'     => false,
    )
);

// Footer copy right text add settings

// Copy right text
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s. Copyright &copy; %s  |  All rights reserved', 'immigration' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );

Epsilon_Customizer::add_field(
    'immigration-copyright-text-settings',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'immigration' ),
        'section'     => 'immigration_footer_options_section',
        'default'     => wp_kses_post( $copyText ),
    )
);
// Footer widget background color field
Epsilon_Customizer::add_field(
    'immigration_footer_bgColor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Background Color', 'immigration' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'immigration_footer_options_section',
        'default'     => '#fff',
    )
);
// Footer widget text color field
Epsilon_Customizer::add_field(
    'immigration_footer_color_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'immigration' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'immigration_footer_options_section',
        'default'     => '#777777',
    )
);
// Footer widget title color field
Epsilon_Customizer::add_field(
    'immigration_footer_widgettitlecolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widgets Title Color', 'immigration' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'immigration_footer_options_section',
        'default'     => '#222222',
    )
);
// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'immigration_footer_anchorcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'immigration' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'immigration_footer_options_section',
        'default'     => '#777',
    )
);
// Footer widget anchor hover Color 
Epsilon_Customizer::add_field(
    'immigration_footer_anchorhovcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'immigration' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'immigration_footer_options_section',
        'default'     => '#f6214b',
    )
);
