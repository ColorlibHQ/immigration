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

// Final Class
final class Immigration {

	// Theme Version
	private $immigration_version = '1.0';

	// Minimum WordPress Version required
	private $min_wp = '4.0';

	// Minimum PHP version required 
	private $min_php = '5.6.25';

	function __construct(){

		// After setup theme
		add_action( 'after_setup_theme', array( $this, 'support' ) );

		// elementor flag
		add_action( 'after_switch_theme', array( $this, 'set_elementor_flag' ) );

		// Enqueue elementor theme default style 
		add_action( 'elementor/frontend/after_enqueue_styles', array( $this, 'enqueue_elementor_theme_default_style' ) );

		// Enqueue elementor notice script
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_elementor_notice_script' ) );

		// Elementor desiable default style
		add_action( 'wp_ajax_elementor_desiable_default_style' , array( $this, 'elementor_desiable_default_style' ) );

		// initialize theme flag
		$this->init();

	}

	// Theme init
	public function init() {
		
		$this->setup();

		// customizer init Instantiate
		$this->customizer_init();
		

	}

	// Theme setup
	private function setup() {
		
		// Create enqueue class instance
		$enqueu = new Immigration_Enqueue();
		$enqueu->scripts = $this->enqueue() ;
		$enqueu->immigration_scripts_enqueue_init() ;

	}
	// Theme Support
	public function support() {
		// content width
        $GLOBALS['content_width'] = apply_filters( 'immigration_content_width', 751 );

        
        // text domain for translation.
        load_theme_textdomain( 'immigration', IMMIGRATION_DIR_PATH . '/languages' );
        
        // support title tage
        add_theme_support( 'title-tag' );
        
        // support logo
        add_theme_support( 'custom-logo', array(
            'height'      => 30,
            'width'       => 130,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array( 'site-title', 'site-description' ),
        ) );
        
        //  support post format
        add_theme_support( 'post-formats', array( 'video','audio' ) );
        
        // support post-thumbnails
        add_theme_support( 'post-thumbnails' );
		
		// Custom thumbnails size for blog section
		add_image_size( 'immigration_blogsect_post_thumb', 295, 211, true );
		
		// Custom thumbnails size for widget post
		add_image_size( 'immigration_widget_post_thumb', 75, 75, true );

		// Custom  thumbnails size for next prev thumb
		add_image_size( 'immigration-np-thumb', 59, 59, true );

        // support custom background 
        add_theme_support( 'custom-background', array(
		'default-color' => '#fff',
		) );
        
        // support custom header
        add_theme_support( 'custom-header', array(
            'default-text-color' => '#fff',
            'width'              => 1920,
            'height'             => 430,
            'flex-width'         => true,
            'flex-height'        => true,
            )
        );
        
        // support automatic feed links
        add_theme_support( 'automatic-feed-links' );
        
        // support html5
        add_theme_support( 'html5' );
		
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
					    
        // register nav menu
        register_nav_menus( array(
            'primary-menu'   => esc_html__( 'Primary Menu', 'immigration' )
        ) );

        // editor style
        add_editor_style('assets/css/editor-style.css');

	} // end support method

	// enqueue theme style and script
	private function enqueue() {

		$cssPath = IMMIGRATION_DIR_CSS_URI;
		$jsPath  = IMMIGRATION_DIR_JS_URI;
		
		$scripts = array(
			'style' => array(
				array(
					'handler'		=> 'immigration-theme-google-font',
					'file' 			=> $this->google_font(),
				),
				array(
					'handler'		=> 'immigration-theme-bootstrap',
					'file' 			=> $cssPath.'bootstrap.css',
					'dependency' 	=> array(),
					'version' 		=> '5.3.8-5',
				),
				array(
					'handler'		=> 'immigration-theme-font-awesome',
					'file' 			=> $cssPath.'font-awesome.min.css',
					'dependency' 	=> array(),
					'version' 		=> '7.3.1-1',
				),
				array(
					'handler'		=> 'immigration-theme-linearicons',
					'file' 			=> $cssPath.'linearicons.css',
					'dependency' 	=> array(),
					'version' 		=> '1.0',
				),
				array(
					'handler'		=> 'immigration-theme-nice-select',
					'file' 			=> $cssPath.'nice-select.css',
					'dependency' 	=> array(),
					'version' 		=> $this->immigration_version,
				),
				array(
					'handler'		=> 'immigration-theme-immigration-main',
					'file' 			=> $cssPath.'main.css',
					'dependency' 	=> array(),
					'version' 		=> $this->immigration_version,
				),
				array(
					'handler'		=> 'immigration-theme-immigration-style',
					'file' 			=> get_stylesheet_uri(),
				),
			),
			'scripts' => array(

				array(
					'handler'		=> 'immigration-theme-bootstrap',
					'file' 			=> $jsPath.'bootstrap.min.js',
					'dependency' 	=> array(),
					'version' 		=> '5.3.8-4',
					'in_footer' 	=> true
				),
				array(
					'handler'		=> 'immigration-ui-js',
					'file' 			=> $jsPath . ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? 'colorlib-ui.js' : 'colorlib-ui.min.js' ),
					'dependency' 	=> array(),
					'version' 		=> '3.0.0',
					'in_footer' 	=> true
				),
				array(
					'handler'		=> 'immigration-theme-immigration-main',
					'file' 			=> $jsPath.'main.js',
					'dependency' 	=> array( 'imagesloaded', 'immigration-ui-js' ),
					'version' 		=> $this->immigration_version . '-s2',
					'in_footer' 	=> true
				),
			)
		);

		return $scripts;

	} // end enqueu method 

	// Google Font  
	private function google_font() {
		$font_url = '';

		/*
		 * The families this theme uses are bundled under
		 * assets/fonts/google, so nothing is fetched from Google and
		 * no request leaves the visitor's browser for a third party.
		 *
		 * Translators can still turn the fonts off for scripts these
		 * families do not cover.
		 */
		if ( 'off' !== _x( 'on', 'Google font: on or off', 'immigration' ) ) {
			$font_url = get_template_directory_uri() . '/assets/css/google-fonts.css';
		}

		return esc_url_raw( $font_url );
	} //End google_font method


	/**
	 * Epsilon customizer
	 *
	 */

	private function customizer_init() {


		

		
		// Instantiate immigration theme customizer
		$immigration_theme_customizer = new immigration_theme_customizer();
	}
	/**
	 * Notice for Elementor default style
	 *
	 */

	// Check elementor preview page
	public static function check_elementor_preview_page() {

		if( ( isset( $_REQUEST['action'] ) && 'elementor' == $_REQUEST['action'] ) || isset( $_REQUEST['elementor-preview'] ) ) {
			return true;
		}

		return false;

	}

	// Set flag for elementor ( hooked in after switch theme )
	public function set_elementor_flag() {
		update_option( 'immigration_had_elementor', 'no' );
	}

	// Elementor dsiable default style
	public function elementor_desiable_default_style() {

		$nonce = $_POST['nonce'];
		if ( ! wp_verify_nonce( $nonce, 'immigration-elementor-notice-nonce' ) ) {
			return;
		}
		$reply = $_POST['reply'];
		if ( ! empty( $reply ) ) {
			if ( $reply == 'yes' ) {
				update_option( 'elementor_disable_color_schemes', 'yes' );
				update_option( 'elementor_disable_typography_schemes', 'yes' );
			}
			update_option( 'immigration_had_elementor', 'yes' );
		}
		die();

	}

	// Enqueue theme default style for elementor
	public function enqueue_elementor_theme_default_style() {

		$disabled_color_schemes      = get_option( 'elementor_disable_color_schemes' );
		$disabled_typography_schemes = get_option( 'elementor_disable_typography_schemes' );

		if ( $disabled_color_schemes === 'yes' && $disabled_typography_schemes === 'yes' ) {
			wp_enqueue_style( 'immigration-elementor-default-style',  IMMIGRATION_DIR_CSS_URI. 'elementor-default-element-style.css', array(), $this->immigration_version );
		}
	}
	
	// Enqueue elementor notice scripts
	public function enqueue_elementor_notice_script() {

		$had_elementor = get_option( 'immigration_had_elementor' );

		if( $had_elementor == 'no' && self::check_elementor_preview_page() ) {
			wp_enqueue_script( 'immigration-elementor-notice', IMMIGRATION_DIR_JS_URI.'immigration-elementor-notice.js', array( 'immigration-ui-js' ), '1.0-s2', true );
			wp_localize_script(
				'immigration-elementor-notice',
				'immigrationElementorNotice',
				array(
					'ajaxurl' => admin_url( 'admin-ajax.php' ),
					'nonce'   => wp_create_nonce( 'immigration-elementor-notice-nonce' ),
				)
			);
		}

	}

} // End Class

