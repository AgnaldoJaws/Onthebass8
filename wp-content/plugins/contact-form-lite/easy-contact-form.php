<?php
/*
Plugin Name: Easy Contact Form Lite
Plugin URI: http://www.ghozylab.com/plugins/
Description: Easy Contact Form (Lite) - Displaying your contact form in anywhere you like with very easy. Allows you to customize it to looking exactly what you want. <a href="http://demo.ghozylab.com/plugins/easy-contact-form-plugin/pricing-compare-tables/" target="_blank"><strong> Upgrade to Pro Version Now</strong></a> and get a tons of awesome features.
Author: GhozyLab, Inc.
Text Domain: contact-form-lite
Domain Path: /languages
Version: 1.0.47
Author URI: http://www.ghozylab.com/plugins/
*/

if ( ! defined('ABSPATH') ) {
	die('Please do not load this file directly!');
}


/*-------------------------------------------------------------------------------*/
/*   All DEFINES
/*-------------------------------------------------------------------------------*/
define( 'ECF_ITEM_NAME', 'Easy Contact Form Lite' );
define( 'ECF_API_URLCURL', 'https://secure.ghozylab.com/' );
define( 'ECF_API_URL', 'http://secure.ghozylab.com/' );

// Plugin Version
if ( !defined( 'ECF_VERSION' ) ) {
	define( 'ECF_VERSION', '1.0.47' );
}

// Pro Price
if ( !defined( 'ECF_PRO' ) ) {
	define( 'ECF_PRO', '24' );
}

// Pro+
if ( !defined( 'ECF_PROPLUS' ) ) {
	define( 'ECF_PROPLUS', '29' );
}

// Pro++ Price
if ( !defined( 'ECF_PROPLUSPLUS' ) ) {
	define( 'ECF_PROPLUSPLUS', '35' );
}

// Dev Price
if ( !defined( 'ECF_DEV' ) ) {
	define( 'ECF_DEV', '99' );
}

// Plugin Folder Path
if ( ! defined( 'ECF_PLUGIN_DIR' ) ) {
	define( 'ECF_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
	}
	
// plugin url
if ( ! defined( 'ECF_URL' ) ) {
	$ecf_plugin_url = substr(plugin_dir_url(__FILE__), 0, -1);
	define( 'ECF_URL', $ecf_plugin_url );
	}
	
// All Filters
add_filter('widget_text', 'do_shortcode', 11);
add_filter( 'the_excerpt', 'shortcode_unautop');
add_filter( 'the_excerpt', 'do_shortcode');  


/*-------------------------------------------------------------------------------*/
/*  Requires Wordpress Version
/*-------------------------------------------------------------------------------*/

if( (float)substr(get_bloginfo('version'), 0, 3) >= 3.5) {
	define( 'ECF_WP_VER', "g35" );
	}
	else {
		define( 'ECF_WP_VER', "l35" );
	}
	

/*-------------------------------------------------------------------------------*/
/*   Check Wordpress Version & WP_DEBUG @since 1.0.23
/*-------------------------------------------------------------------------------*/
function ecf_admin_init_action() {
	
	$plugin = plugin_basename( __FILE__ );

	if ( ECF_WP_VER == 'l35' ) {
		if ( is_plugin_active( $plugin ) ) {
			deactivate_plugins( $plugin );
			wp_die( "This plugin requires WordPress 3.5 or higher, and has been deactivated! Please upgrade WordPress and try again.<br /><br />Back to <a href='".admin_url()."'>WordPress admin</a>" );
		}
	}
	
	if ( defined('WP_DEBUG') ) {
		
		if ( WP_DEBUG == true ) {
			
			add_action( 'admin_notices', 'ecf_admin_wp_debug_notice' ); 
			
		}
		
	}
	
	
}
add_action( 'admin_init', 'ecf_admin_init_action' );


function ecf_admin_wp_debug_notice() {
	
	echo '<div class="error"> <p>NOTE: You have to set <strong>WP_DEBUG</strong> to false in order to make '.ECF_ITEM_NAME.' works</p></div>';
	
}


/*-------------------------------------------------------------------------------*/
/*   Load WP jQuery library
/*-------------------------------------------------------------------------------*/
function ecf_enqueue_scripts() {
	if( !is_admin() )
		{
			wp_enqueue_script( 'jquery' );
			}
}

if ( !is_admin() )
{
  add_action( 'init', 'ecf_enqueue_scripts' );
}


/*-------------------------------------------------------------------------------*/
/*   I18N - LOCALIZATION
/*-------------------------------------------------------------------------------*/
function ecf_lang_init() {
	load_plugin_textdomain( 'contact-form-lite', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}
add_action( 'init', 'ecf_lang_init' );


/*-------------------------------------------------------------------------------*/
/*   Registers custom post type
/*-------------------------------------------------------------------------------*/
function ecf_post_type() {
	$labels = array(
		'name' 				=> _x( 'Easy Form', 'post type general name' ),
		'singular_name'		=> _x( 'Easy Form', 'post type singular name' ),
		'add_new' 			=> __( 'Add New Form', 'contact-form-lite' ),
		'add_new_item' 		=> __( 'Easy Contact Item', 'contact-form-lite' ),
		'edit_item' 		=> __( 'Edit Form', 'contact-form-lite' ),
		'new_item' 			=> __( 'New Form', 'contact-form-lite' ),
		'view_item' 		=> __( 'View Form', 'contact-form-lite' ),
		'search_items' 		=> __( 'Search Form', 'contact-form-lite' ),
		'not_found' 		=> __( 'No Form Found', 'contact-form-lite' ),
		'not_found_in_trash'=> __( 'No Form Found In Trash', 'contact-form-lite' ),
		'parent_item_colon' => __( 'Parent Form', 'contact-form-lite' ),
		'menu_name'			=> __( 'Easy Form', 'contact-form-lite' )
	);

	$taxonomies = array();
	$supports = array( 'title' );
	
	$post_type_args = array(
		'labels' 			=> $labels,
		'singular_label' 	=> __( 'Easy Contact', 'contact-form-lite' ),
		'public' 			=> false,
		'show_ui' 			=> true,
		'publicly_queryable'=> true,
		'query_var'			=> true,
		'capability_type' 	=> 'post',
		'has_archive' 		=> false,
		'hierarchical' 		=> false,
		'rewrite' 			=> array( 'slug' => 'easycontactform', 'with_front' => false ),
		'supports' 			=> $supports,
		'menu_position' 	=> 20,
		'menu_icon' =>  plugins_url( 'inc/images/ecf-cp-icon.png' , __FILE__ ),		
		'taxonomies'		=> $taxonomies
	);
	
	
// For Report - @since 1.0.3 > 5 ( BETA )
	$label = array(
		'name' 				=> _x( 'Submissions', 'post type general name' ),
		'singular_name'		=> _x( 'Submissions', 'post type singular name' ),
		'edit_item' 		=> __( 'Edit Submissions', 'contact-form-lite' ),
		'view_item' 		=> __( 'View Submissions', 'contact-form-lite' ),
		'search_items' 		=> __( 'Search Submissions', 'contact-form-lite' ),
		'not_found' 		=> __( 'No Submissions Found', 'contact-form-lite' ),
		'not_found_in_trash'=> __( 'No Submissions Found In Trash', 'contact-form-lite' )
	);

	$tax = array();
	$support = array( 'title' );
	
	$post_type_arg = array(
		'labels' 			=> $label,
		'public' 			=> false,
		'show_ui' 			=> true,
		'publicly_queryable'=> true,
		'query_var'			=> true,
		'capability_type' 	=> 'post',
		'has_archive' 		=> false,
		'hierarchical' 		=> false,
		'rewrite' 			=> array( 'slug' => 'ecfentrie', 'with_front' => false ),
		'supports' 			=> $support,
		'show_in_menu' 		=> false,
		'taxonomies'		=> $tax
	);
	

	 register_post_type( 'easycontactform', $post_type_args );
	 register_post_type( 'ecfentries', $post_type_arg );
	 
}
add_action( 'init', 'ecf_post_type' );


/*--------------------------------------------------------------------------------*/
/*  Add Custom Columns for Form Review Page 
/*--------------------------------------------------------------------------------*/
add_filter( 'manage_edit-easycontactform_columns', 'easycontactform_edit_columns' );
function easycontactform_edit_columns( $ecf_columns ){  
	$ecf_columns = array(  
		'cb' => '<input type="checkbox" />',  
		'title' => _x( 'Title', 'column name', 'contact-form-lite' ),
		'ecf_sc' => __( 'Shortcode', 'contact-form-lite'),
		'ecf_id' => __( 'Form ID', 'contact-form-lite')	
			
	);  
	unset( $columns['Date'] );
	return $ecf_columns;  
}

function easycontactform_columns_edit_columns_list( $ecf_columns, $post_id ){

	switch ( $ecf_columns ) {
		
		
	    case 'ecf_id':
		
		echo $post_id;

	        break;
		
	    case 'ecf_sc':
		
		echo '<span style="padding: 4px;background: none repeat scroll 0% 0% rgba(0, 0, 0, 0.07);">[easy-contactform id='.$post_id.']</span>';

	        break;

		default:
			break;
	}  
}  

add_filter( 'manage_posts_custom_column',  'easycontactform_columns_edit_columns_list', 10, 2 );  


/*-------------------------------------------------------------------------------*/
/*  Rename Sub Menu
/*-------------------------------------------------------------------------------*/
function ecf_rename_submenu() {  
    global $submenu;     
	$submenu['edit.php?post_type=easycontactform'][5][0] = __( 'Forms', 'contact-form-lite' );  
}  
add_action( 'admin_menu', 'ecf_rename_submenu' ); 


/*-------------------------------------------------------------------------------*/
/*   Hide & Disabled View, Quick Edit and Preview Button
/*-------------------------------------------------------------------------------*/
function ecf_remove_row_actions( $actions ) {
	global $post;
    if( $post->post_type == 'easycontactform' ) {
		unset( $actions['view'] );
		unset( $actions['inline hide-if-no-js'] );
	}
    return $actions;
}

if ( is_admin() ) {
	add_filter( 'post_row_actions','ecf_remove_row_actions', 10, 2 );
}


/*-------------------------------------------------------------------------------*/
/*   Create Session for Captcha
/*-------------------------------------------------------------------------------*/
function ecf_start_session() {
	
	@ini_set('session.use_trans_sid', '0');
	$char = strtoupper(substr(str_shuffle('abcdefghjkmnpqrstuvwxyz'), 0, 4));
	$str = rand(1, 7) . rand(1, 7) . $char;
	
    if( !session_id() ) {
        session_start();
		$_SESSION['ecf-captcha'] = $str;
    	}
}

if ( get_transient( 'ecf_captcha_transient' ) ) {
	add_action('init', 'ecf_start_session', 1);
	}
	

/*-------------------------------------------------------------------------------*/
/*   Load Plugin Functions
/*-------------------------------------------------------------------------------*/
include_once( ECF_PLUGIN_DIR . 'inc/functions/ecf-functions.php' );
include_once( ECF_PLUGIN_DIR . 'inc/ecf-tinymce.php' );
include_once( ECF_PLUGIN_DIR . 'inc/ecf-metaboxes.php' );
include_once( ECF_PLUGIN_DIR . 'inc/ecf-shortcode.php' );
include_once( ECF_PLUGIN_DIR . 'inc/ecf-opt-loader.php' );
include_once( ECF_PLUGIN_DIR . 'inc/functions/ecf-mail.php' );
include_once( ECF_PLUGIN_DIR . 'inc/ecf-entries.php' ); // @since 1.0.3 > 5 ( BETA )
include_once( ECF_PLUGIN_DIR . 'inc/ecf-widget.php' );

/*-------------------------------------------------------------------------------*/
/*   Featured Plugins Page
/*-------------------------------------------------------------------------------*/
if ( is_admin() ){
	
	include_once( ECF_PLUGIN_DIR . 'inc/pages/ecf-freeplugins.php' );
	include_once( ECF_PLUGIN_DIR . 'inc/pages/ecf-featured.php' );
	include_once( ECF_PLUGIN_DIR . 'inc/pages/ecf-pricing.php' ); 
	include_once( ECF_PLUGIN_DIR . 'inc/pages/ecf-settings.php' );
	include_once( ECF_PLUGIN_DIR . 'inc/ecf-notice.php' );
	include_once( ECF_PLUGIN_DIR . 'inc/pages/ecf-analytics.php' ); // @since 1.0.11
	include_once( ECF_PLUGIN_DIR . 'inc/pages/ecf-addons.php' ); // @since 1.0.11
	include_once( ECF_PLUGIN_DIR . 'inc/pages/ecf-welcome.php' ); // @since 1.0.11

	}
	
	
/*-------------------------------------------------------------------------------*/
/*   Redirect to Pricing Table on Activate
/*-------------------------------------------------------------------------------*/	

function ecf_plugin_activate() {

  add_option( 'activatedecf', 'ecf-activate' );

}
register_activation_hook( __FILE__, 'ecf_plugin_activate' );


/*-------------------------------------------------------------------------------*/
/*   Auto Update
/*-------------------------------------------------------------------------------*/	
$ecf_auto_updt = get_option( "ecf-settings-automatic_update" );

switch ( $ecf_auto_updt ) {
	
	case 'active':
		if ( !wp_next_scheduled( "ecf_auto_update" ) ) {
			wp_schedule_event( time(), "daily", "ecf_auto_update" );
			}
		add_action( "ecf_auto_update", "plugin_ecf_auto_update" );
	break;
	
	case 'inactive':
		wp_clear_scheduled_hook( "ecf_auto_update" );
	break;	
	
	case '':
		wp_clear_scheduled_hook( "ecf_auto_update" );
		update_option( "ecf-settings-automatic_update", 'active' );
	break;
					
}

function plugin_ecf_auto_update() {
	try
	{
		require_once( ABSPATH . "wp-admin/includes/class-wp-upgrader.php" );
		require_once( ABSPATH . "wp-admin/includes/misc.php" );
		define( "FS_METHOD", "direct" );
		require_once( ABSPATH . "wp-includes/update.php" );
		require_once( ABSPATH . "wp-admin/includes/file.php" );
		wp_update_plugins();
		ob_start();
		$plugin_upg = new Plugin_Upgrader();
		$plugin_upg->upgrade( "contact-form-lite/easy-contact-form.php" );
		$output = @ob_get_contents();
		@ob_end_clean();
	}
	catch(Exception $e)
	{
	}
}
