<?php
/**
 * The MAIN FUNCTIONS FILE for Library Books Pro
 *
 * Stores all the Function of the template.
 *
 * @package Library Books Pro
 * 
 * @since Library Books Pro 1.0
 */

//**************Complete Golbal******************//
/*CHECK IF Complete row exist in the wp_options table. Needed for Redux Conversion process*/ 
$completedb = get_option( 'complete' );

//**************Complete SETUP******************//
function Complete_setup() {
	//add_theme_support( 'custom-header' );
	add_theme_support( 'title-tag' );			//WP 4.1 Site Title
	add_theme_support( 'woocommerce' );			//Woocommerce Support
	add_theme_support('automatic-feed-links');	//RSS FEED LINK
	add_theme_support( 'post-thumbnails' );		//Post Thumbnail
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	//Custom Background	
	add_theme_support( 'custom-background', array( 'default-color' => 'ffffff') );	
	//Make theme available for translation
	load_theme_textdomain('complete', get_template_directory() . '/languages/');  
	//Custom Thumbnail Size	
	add_image_size( 'complete_thumb', 400, 270, true ); /*(cropped)*/
	add_image_size( 'footerthumb', 100, 84, true ); 
   
	//Register Menus
	register_nav_menus( array(
			'primary' => __( 'Header Navigation', 'complete' ),
			'footer' => __( 'Footer Navigation', 'complete' ),
		) );
	}
add_action( 'after_setup_theme', 'Complete_setup' );

/* Init sktbuilder libs */
add_filter( 'sktbuilder_libs', 'skt_add_theme_lib', 10, 2 );
if ( ! function_exists( 'skt_add_theme_lib' ) ) {
  /**
   * Adding skt lib in sktbuilder libs
   *
   * @param array $sktbuilder_libs Array with url to sktbuilder lib.
   */
   function skt_add_theme_lib( $sktbuilder_libs ) {
  array_push( $sktbuilder_libs, get_template_directory() . '/blocks/lib.json' );
  return $sktbuilder_libs;
  }
}

//**************Complete FUNCTIONS******************//
require(get_template_directory() . '/ptframe/core-functions.php');			//Include Complete ptframe Core Functions 
require(get_template_directory() . '/lib/functions/core.php');					//Include Core Functions
require(get_template_directory() . '/lib/functions/enqueue.php');					//Include Enqueue CSS/JS Scripts
require(get_template_directory() . '/lib/functions/admin.php');				//Include Admin Functions (admin)
require(get_template_directory() . '/lib/functions/woocommerce.php');			//Include Woocommerce Functions
require(get_template_directory() . '/lib/functions/defaults.php');
require(get_template_directory() . '/customizer/customizer.php');
require(get_template_directory() . '/lib/functions/converter.php');
require(get_template_directory() . '/lib/includes/google_fonts.php');

//WIDGETS
require(get_template_directory() . '/ptframe/core-posts.php');		
require(get_template_directory() . '/ptframe/core-pagination.php');


/**
 * Include the Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/class-plugin-activation.php';
add_action( 'tgmpa_register', 'complete_register_required_plugins' );
 
function complete_register_required_plugins() {
	$plugins = array(
		array(
			'name'      => 'SKT Page Builder',
			'slug'      => 'skt-builder',
			'required'  => true,
		),	
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => false,
		),
	);

	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'skt-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}

define('PT_THEME_DOC', 'https://pinnaclethemes.net/themedocumentation/library-books-pro-documentation/');