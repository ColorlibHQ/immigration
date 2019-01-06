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

// Post Item Start

?>

<div id="<?php the_ID(); ?>" <?php post_class( esc_attr( 'single-blog-post' ) ); ?>>
	<?php
	
	/**
	 * Blog Post thumbnail
	 * @Hook  immigration_blog_posts_thumb
	 *
	 * @Hooked immigration_blog_posts_thumb_cb
	 * 
	 *
	 */
	do_action( 'immigration_blog_posts_thumb' );
	
	/**
	 * Blog Post Meta
	 * @Hook  immigration_blog_posts_meta
	 *
	 * @Hooked immigration_blog_posts_meta_cb
	 * 
	 *
	 */
	do_action( 'immigration_blog_posts_meta' );

	/**
	 * Blog Post title
	 * @Hook  immigration_blog_posts_title
	 *
	 * @Hooked immigration_blog_posts_title_cb
	 * 
	 *
	 */
	do_action( 'immigration_blog_posts_title' );
		

	/**
	 * Blog Excerpt With read more button
	 * @Hook  immigration_blog_posts_excerpt
	 *
	 * @Hooked immigration_blog_posts_excerpt_cb
	 * 
	 *
	 */
	do_action( 'immigration_blog_posts_excerpt' );

	/**
	 * Blog Excerpt With read more button
	 * @Hook  immigration_blog_posts_bottom_meta
	 *
	 * @Hooked immigration_blog_posts_bottom_meta_cb
	 * 
	 *
	 */
	do_action( 'immigration_blog_posts_bottom_meta' );
	?>
</div>