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

/**
 * Footer Area
 *
 * @Footer
 * @Back To Top Button
 *
 * @Hook immigration_footer
 *
 * @Hooked  immigration_footer_area 10
 * @Hooked  immigration_back_to_top 20 
 *
 */

do_action( 'immigration_footer' );

wp_footer(); 
?>
</body>
</html>