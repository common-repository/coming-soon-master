<?php
/**
 * Plugin Name: Coming Soon Master
 * Version: 1.3.5
 * Description: Coming Soon Master plugin is modern and responsive coming soon, under construction & maintenance plugin to manage your website while it's under construction.
 * Author: WebHunt Infotech
 * Author URI: http://www.webhuntinfotech.com
 * Plugin URI: http://webhuntinfotech.com/plugins/coming-soon-master-pro
 */

define("WEBHUNT_CSM_PLUGIN_URL", plugin_dir_url(__FILE__));
define("WEBHUNT_CSM", "CSM_LANGUAGE_STRING" );

add_action('plugins_loaded', 'CSM_LanguageTranslation');
function CSM_LanguageTranslation() {
	load_plugin_textdomain(WEBHUNT_CSM, FALSE, dirname( plugin_basename(__FILE__)).'/languages/' );
}

function csm_plugin_get_version() {
	$plugin_data = get_plugin_data( __FILE__ );
	$plugin_version = $plugin_data['Version'];
	return $plugin_version;
}

/** Coming Soon Master Menu */
add_action('admin_menu','CSM_admin_menu');
function CSM_admin_menu() {
	
	//plugin menu name for coming soon plugin
	$cms_menu = add_menu_page('Coming Soon Master', 'Coming Soon Master','administrator', 'coming_soon_master','coming_soon_master_content','dashicons-welcome-view-site');
	
	//add hook to add styles and scripts for Admin Custom Login admin page
	add_action( 'admin_print_styles-' . $cms_menu, 'cms_admin_page_js_css' );
}

/* plugin action links (Settings) */
add_filter( 'plugin_action_links', 'cms_settinglink_add_action_plugin', 10, 5 );
function cms_settinglink_add_action_plugin( $actions, $plugin_file ) 
{
	static $plugin;
	
	if (!isset($plugin))
		$plugin = plugin_basename(__FILE__);
	if ($plugin == $plugin_file) 
	{
			$settings = array('settings' => '<a href="options-general.php?page=coming_soon_master">' . __('Settings', 'WEBHUNT_CSM') . '</a>');
			
			$actions = array_merge($settings, $actions);
	}
		return $actions;
}

require_once('functions/data-save-post.php');

function cms_admin_page_js_css() {
	//enqueue style and scripts page for Coming Soon Master plugin
	wp_enqueue_style('csm-bootstrap-css', WEBHUNT_CSM_PLUGIN_URL.'dist/css/bootstrap.css');
	wp_enqueue_style('csm-AdminLTE.css', WEBHUNT_CSM_PLUGIN_URL.'dist/css/AdminLTE.css');
	wp_enqueue_style('csm-font-awesome', WEBHUNT_CSM_PLUGIN_URL.'dist/css/font-awesome.css');
	wp_enqueue_style('csm-skin-blue.css', WEBHUNT_CSM_PLUGIN_URL.'dist/css/skin-blue.css');
	wp_enqueue_style('csm-smart-forms.css', WEBHUNT_CSM_PLUGIN_URL.'dist/css/smart-forms.css');
	wp_enqueue_style('csm-smart-addons-css', WEBHUNT_CSM_PLUGIN_URL.'dist/css/smart-addons.css');
	wp_enqueue_style('csm-preloader.css', WEBHUNT_CSM_PLUGIN_URL.'dist/css/preloader.css');

	wp_enqueue_script('jquery');
	wp_enqueue_media();
	wp_enqueue_script('jquery-touch-punch');
	wp_enqueue_script('jquery-ui-slider');
	wp_enqueue_script('csm-bootstrap.min.js', WEBHUNT_CSM_PLUGIN_URL.'dist/js/bootstrap.min.js');
	/* For slider in admin settings */ 
	wp_enqueue_script('jquery.spectrum.min.js',WEBHUNT_CSM_PLUGIN_URL.'dist/js/jquery.spectrum.min.js', array('jquery'));
	
	wp_enqueue_script('csm-media-upload-script-js', WEBHUNT_CSM_PLUGIN_URL.'dist/js/media-upload-script.js');
	wp_enqueue_script('custom', WEBHUNT_CSM_PLUGIN_URL.'dist/js/custom.js'); 
	
	/* AdminLTE App */
	wp_enqueue_script('csm-fastclick-js', WEBHUNT_CSM_PLUGIN_URL.'dist/js/fastclick.js');
	wp_enqueue_script('csm-app-js', WEBHUNT_CSM_PLUGIN_URL.'dist/js/app.js');
	
	
	wp_enqueue_script('csm-jquery-ui-timepicker-min-js', WEBHUNT_CSM_PLUGIN_URL.'dist/js/jquery-ui-timepicker.min.js',array('jquery','jquery-ui-datepicker'));
	
	wp_enqueue_script('csm-save-data-js', WEBHUNT_CSM_PLUGIN_URL.'dist/js/csm-save-data.js');
	$params = array(
	  'ajax_url'	=> admin_url('admin-ajax.php'),
	  'ajax_nonce'	=> wp_create_nonce('csm_nonce'),
	);
	wp_localize_script( 'csm-save-data-js', 'csm_obj', $params );
}

require_once('redirect.php');

function coming_soon_master_content() {
	require('functions/get-save-data.php');
	require_once('pages/content.php');
}

add_action( 'wp_ajax_nopriv_subscribeform', 'csm_ajax_subscribeform' );

/* Mail Function for NewsLetter Subscription */
function csm_ajax_subscribeform() {
	
	$subsEmail 		= sanitize_email($_POST['email']);
	$subsEmail 		= strtolower($subsEmail);

	$csm_plugin_settings_newsletter 	= unserialize(get_option('csm_plugin_settings_newsletter'));
	$adminEmail 		= sanitize_email($csm_plugin_settings_newsletter['adminMailAddrress']);
	$adminSubject 		= sanitize_text_field($csm_plugin_settings_newsletter['adminMailSubject']);
	$adminMessage 		= sanitize_text_field($csm_plugin_settings_newsletter['adminMailmsg']);
	
	$adminMsg 			= $adminMessage . "<br>Subscription Email id : " . $subsEmail ;
	
	$adminHeaders[] 	= 'MIME-Version: 1.0';
	$adminHeaders[]		= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$adminHeaders[]  	= 'Reply-To: '. $subsEmail;
	

	$subsSubject 		= sanitize_text_field($csm_plugin_settings_newsletter['subsMailSubject']);
	$subsMsg 			= sanitize_text_field($csm_plugin_settings_newsletter['subsMailMsg']);
	
	$subsHeaders[] 		= 'MIME-Version: 1.0';
	$subsHeaders[]		= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$subsHeaders[]  	= 'Reply-To: '. $adminEmail;
	
	if(wp_mail($adminEmail,$adminSubject,$adminMsg,$adminHeaders)){
		if(wp_mail($subsEmail,$subsSubject,$subsMsg,$subsHeaders)){
			echo '{"status":"subscribed"}';die;
		}else{
			echo '{"status":0}';die;
		}
	}else{
		echo '{"status":0}';die;
	}
}
?>