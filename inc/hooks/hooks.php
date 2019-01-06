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
 * Before Wrapper
 *
 * @Preloader
 *
 */
add_action( 'immigration_preloader', 'immigration_site_preloader', 10 );

/**
 * Header
 *
 * @Header Menu
 * @Header Bottom
 * 
 */

add_action( 'immigration_header', 'immigration_header_cb', 10 );

/**
 * Hook for footer
 *
 */
add_action( 'immigration_footer', 'immigration_footer_area', 10 );
add_action( 'immigration_footer', 'immigration_back_to_top', 20 );

/**
 * Hook for Blog, single, page, search, archive pages wrapper.
 */
add_action( 'immigration_wrp_start', 'immigration_wrp_start_cb', 10 );
add_action( 'immigration_wrp_end', 'immigration_wrp_end_cb', 10 );

/**
 * Hook for Blog, single, search, archive pages column.
 */
add_action( 'immigration_blog_col_start', 'immigration_blog_col_start_cb', 10 );
add_action( 'immigration_blog_col_end', 'immigration_blog_col_end_cb', 10 );

/**
 * Hook for blog posts thumbnail.
 */
add_action( 'immigration_blog_posts_thumb', 'immigration_blog_posts_thumb_cb', 10 );

/**
 * Hook for blog posts title.
 */
add_action( 'immigration_blog_posts_title', 'immigration_blog_posts_title_cb', 10 );

/**
 * Hook for blog posts meta.
 */
add_action( 'immigration_blog_posts_meta', 'immigration_blog_posts_meta_cb', 10 );

/**
 * Hook for blog posts bottom meta.
 */
add_action( 'immigration_blog_posts_bottom_meta', 'immigration_blog_posts_bottom_meta_cb', 10 );

/**
 * Hook for blog posts excerpt.
 */
add_action( 'immigration_blog_posts_excerpt', 'immigration_blog_posts_excerpt_cb', 10 );

/**
 * Hook for blog posts content.
 */
add_action( 'immigration_blog_posts_content', 'immigration_blog_posts_content_cb', 10 );

/**
 * Hook for blog sidebar.
 */
add_action( 'immigration_blog_sidebar', 'immigration_blog_sidebar_cb', 10 );

/**
 * Hook for blog single post social share option.
 */
add_action( 'immigration_blog_posts_share', 'immigration_blog_posts_share_cb', 10 );

/**
 * Hook for blog single post meta category, tag, next - previous link and comments form.
 */
add_action( 'immigration_blog_single_meta', 'immigration_blog_single_meta_cb', 10 );

/**
 * Hook for page content.
 */
add_action( 'immigration_page_content', 'immigration_page_content_cb', 10 );


/**
 * Hook for 404 page.
 */
add_action( 'immigration_fof', 'immigration_fof_cb', 10 );
