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
?>
<div id="page_<?php the_ID(); ?>" <?php post_class( esc_attr( 'content--area blog-detail-txt' ) ); ?>>
	<?php
	/**
	 * page content 
	 * Comments Template
	 * @Hook  immigration_page_content
	 *
	 * @Hooked immigration_page_content_cb
	 * 
	 *
	 */
	do_action( 'immigration_page_content' );

	?>
</div>