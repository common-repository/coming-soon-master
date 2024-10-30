<?php 
add_action('wp_ajax_action_csm_page_setting_save_post', 'csm_save_page_settings');
add_action('wp_ajax_nopriv_action_csm_page_setting_save_post', 'csm_save_page_settings');
function csm_save_page_settings(){
	
	if(!check_ajax_referer( 'csm_nonce', 'security', false )){
		echo 'nonce_err';
		die;
	}

	$hook = $_POST['hook'];
	
	/******************* DASHBOARD *************************************
	********************************************************************/
	if($hook=="dashboard"){
		 $skipfor_user = $_POST['skipfor_user'];
		if (is_array($skipfor_user)) {
            foreach ($skipfor_users as &$skipfor_user) {
                $skipfor_user = sanitize_text_field($skipfor_user);
            }
        } else {
            $skipfor_users = sanitize_text_field($skipfor_users);
        }
		$csm_plugin_settings_dashboard = array( 
			'csm_status'    	=> sanitize_text_field($_POST['csm_status']),
			'skipfor_user'  	=> $skipfor_user,
			'whitelisted_ips'  	=> $_POST['whitelisted_ips'],
		);
		update_option("csm_plugin_settings_dashboard", serialize($csm_plugin_settings_dashboard));
	}
	
	
	/******************* TEMPLATES *************************************
	********************************************************************/
	if($hook=="templates"){
		$csm_plugin_settings_templates = array( 
			'csmTemplate'  			=> sanitize_text_field( $_POST['csmTemplate']),
			'tBgColor'  			=> sanitize_hex_color($_POST['tBgColor']),
			'tBgImage' 				=> esc_url($_POST['tBgImage']),
			'pageOverlay'			=> sanitize_text_field($_POST['pageOverlay']),
			'pageSecColor'			=> sanitize_hex_color($_POST['pageSecColor']),
			'pageSecOpacity' 		=> sanitize_text_field($_POST['pageSecOpacity']),
			'pageSecStyle' 			=> sanitize_text_field($_POST['pageSecStyle']),
		);
		update_option("csm_plugin_settings_templates", serialize($csm_plugin_settings_templates));
	}
	
	
	/******************* SEO SETTINGS **********************************
	********************************************************************/
	if($hook=="seo"){	
		$csm_plugin_settings_seo = array( 
			'enableFavicon'		=> sanitize_text_field($_POST['enableFavicon']),
			'favicon' 			=> esc_url( $_POST['favicon'] ),
			'meta_title' 		=> sanitize_text_field( $_POST['meta_title'] ),
			'meta_description' 	=> sanitize_textarea_field( $_POST['meta_description'] ),
			'google_analytics' 	=> esc_js( $_POST['google_analytics'] ),
		);
		update_option("csm_plugin_settings_seo", serialize($csm_plugin_settings_seo));	
	}
	
	
	/******************* LOGO SETTINGS *********************************
	********************************************************************/
	if($hook=="page_settings"){
		$csm_plugin_settings_page_settings = array(
		'enableLogo' 		=> sanitize_text_field($_POST['enableLogo']),
		'csmLogoURL' 		=> esc_url( $_POST['csmLogoURL'] ),
		'logoWidth' 		=> sanitize_text_field($_POST['logoWidth']),
		'logoHeight' 		=> sanitize_text_field($_POST['logoHeight']),
		'logoLinkURL' 		=> esc_url( $_POST['logoLinkURL'] ),
		);
		update_option("csm_plugin_settings_page_settings", serialize($csm_plugin_settings_page_settings));
	}
	
	
	/******************* COUNTDOWN SETTINGS *****************************
	********************************************************************/
	if($hook=="countdown"){	
		$csm_plugin_settings_countdown = array( 
			'enableCountdown' 	=> sanitize_text_field($_POST['enableCountdown']),
			'countdownDate' 	=> sanitize_text_field($_POST['countdownDate']),
			'countdownTime' 	=> sanitize_text_field($_POST['countdownTime']),
			'dayString' 		=> sanitize_text_field($_POST['dayString']),
			'hoursString' 		=> sanitize_text_field($_POST['hoursString']),
			'minutesString' 	=> sanitize_text_field($_POST['minutesString']),
			'secondsString' 	=> sanitize_text_field($_POST['secondsString']),
			'csmHomeTitle' 		=> wp_kses_post($_POST['csmHomeTitle']),
			'homeDesc' 			=> sanitize_textarea_field($_POST['homeDesc']),
		);
		update_option("csm_plugin_settings_countdown", serialize($csm_plugin_settings_countdown));
	}
	
	
	/******************* BUTTON SETTINGS *********************************
	********************************************************************/
	if($hook=="button"){
		$csm_plugin_settings_button = array(
		'enableReadBtn'		=> sanitize_text_field($_POST['enableReadBtn']),
		'readMoreB' 		=> sanitize_text_field($_POST['readMoreB']),
		'enableNewsBtn'		=> sanitize_text_field($_POST['enableNewsBtn']),
		'newsLSubB' 		=> sanitize_text_field($_POST['newsLSubB']),
		);
		update_option("csm_plugin_settings_button", serialize($csm_plugin_settings_button));
	}
	
	
	/******************* BASIC SETTINGS *********************************
	********************************************************************/	
	if($hook=="basic_styling"){	
		$csm_plugin_settings_basic_styling = array( 
			'enablePreloader' 	=> sanitize_text_field($_POST['enablePreloader']),
			'csmPreloaderText' 	=> sanitize_text_field($_POST['csmPreloaderText']),
			'csmCssEditor'		=> wp_filter_nohtml_kses($_POST['csmCssEditor']),
		);
		update_option("csm_plugin_settings_basic_styling", serialize($csm_plugin_settings_basic_styling));
	}
	
	
	/******************* ABOUT US ***************************************
	********************************************************************/	
	if($hook=="about_us"){	
		$csm_plugin_settings_about_us = array( 
			'enableAboutUs' 	=> sanitize_text_field($_POST['enableAboutUs']),
			'aboutusTilte' 		=> sanitize_text_field($_POST['aboutusTilte']),
			'aboutusBgTilte' 	=> sanitize_text_field($_POST['aboutusBgTilte']),
			'aboutusDesc' 		=> sanitize_textarea_field($_POST['aboutusDesc']),
			'aboutusContent' 	=> stripslashes_deep(wp_kses_post($_POST['aboutusContent'])),
		);
		update_option("csm_plugin_settings_about_us", serialize($csm_plugin_settings_about_us));	
	}
	
	
	/******************* CONTACT INFO ***********************************
	********************************************************************/	
	if($hook=="contact_us"){	
		$csm_plugin_settings_contact_us = array( 
			'enableContactUs' 	=> sanitize_text_field($_POST['enableContactUs']),
			'contactUsTilte' 	=> sanitize_text_field($_POST['contactUsTilte']),
			'contactUsBgTilte' 	=> sanitize_text_field($_POST['contactUsBgTilte']),
			'contactUsDesc' 	=> sanitize_textarea_field($_POST['contactUsDesc']),
			'contactUsEmail' 	=> sanitize_email($_POST['contactUsEmail']),
			'contactUsNumber' 	=> sanitize_text_field($_POST['contactUsNumber']),
			'contactUsAddress' 	=> sanitize_text_field($_POST['contactUsAddress']),
			'googleMapUrl' 		=> esc_url( $_POST['googleMapUrl'] ),
			
		);
		update_option("csm_plugin_settings_contact_us", serialize($csm_plugin_settings_contact_us));
	}
	
	
	/******************* NEWSLETTER SETTINGS ****************************
	********************************************************************/	
	if($hook=="newsletter"){	
		$csm_plugin_settings_newsletter = array( 
			'newsletterOption' 	=> sanitize_text_field($_POST['newsletterOption']),
			'subsMailSubject' 	=> sanitize_text_field($_POST['subsMailSubject']),
			'subsMailMsg' 		=> sanitize_textarea_field($_POST['subsMailMsg']),
			'adminMailSubject' 	=> sanitize_text_field($_POST['adminMailSubject']),
			'adminMailmsg' 		=> sanitize_textarea_field($_POST['adminMailmsg']),
			'adminMailAddrress' => sanitize_email($_POST['adminMailAddrress']),
		);
		update_option("csm_plugin_settings_newsletter", serialize($csm_plugin_settings_newsletter));
	}


	/******************* SUBSCRIBER FIELD SETTINGS **********************
	********************************************************************/		
	if($hook=="subscription"){
		$csm_plugin_settings_subscription = array(
			'subsImage' 		=> esc_url($_POST['subsImage']),
			'SubsTitle' 		=> sanitize_text_field($_POST['SubsTitle']),
			'SubsDescription' 	=> sanitize_textarea_field($_POST['SubsDescription']),
			'subsFieldTitle' 	=> sanitize_text_field($_POST['subsFieldTitle']),
			'subsButtonText' 	=> sanitize_text_field($_POST['subsButtonText']),
			'successSubsText' 	=> sanitize_text_field($_POST['successSubsText']),
		);
		update_option("csm_plugin_settings_subscription", serialize($csm_plugin_settings_subscription));
	}

	
	/******************* SOCIAL SETTINGS *******************************
	********************************************************************/		
	if($hook=="social"){
		$csm_plugin_settings_social = array( 
			'sFacebook' 	=> esc_url($_POST['sFacebook']),
			'sTwitter' 		=> sanitize_text_field($_POST['sTwitter']),
			'sLinkedin' 	=> esc_url($_POST['sLinkedin']),
			'sGooglePlus' 	=> esc_url($_POST['sGooglePlus']),
			'sYoutube' 		=> esc_url($_POST['sYoutube']),
			'sPinterest' 	=> esc_url($_POST['sPinterest']),
		);
		update_option("csm_plugin_settings_social", serialize($csm_plugin_settings_social));
	}
	
	
	/******************* COPYRIGHT SETTINGS *****************************
	********************************************************************/		
	if($hook=="copyright"){
		$csm_plugin_settings_copyright = array( 
			'copyrightText' 	=> sanitize_text_field($_POST['copyrightText']),
			'developedByText' 	=> sanitize_text_field($_POST['developedByText']),
			'developedByLink' 	=> esc_url($_POST['developedByLink']),
		);
		update_option("csm_plugin_settings_copyright", serialize($csm_plugin_settings_copyright));
	}
}

add_action('wp_ajax_action_csm_page_setting_reset_post', 'csm_reset_page_settings');
add_action('wp_ajax_nopriv_action_csm_page_setting_reset_post', 'csm_reset_page_settings');
function csm_reset_page_settings(){

	if(!check_ajax_referer( 'csm_nonce', 'security', false )){
		echo 'nonce_err';
		die;
	}
	
	$hook = $_POST['hook'];
	$hook = 'csm_plugin_settings_'.$hook;
	delete_option($hook);
}

add_action('wp_ajax_action_csm_all_pages_setting_reset', 'csm_reset_all_settings');
add_action('wp_ajax_nopriv_action_csm_all_pages_setting_reset', 'csm_reset_all_settings');
function csm_reset_all_settings(){
	
	if(!check_ajax_referer( 'csm_nonce', 'security', false )){
		echo 'nonce_err';
		die;
	}
	
	delete_option('csm_plugin_settings_dashboard');
	delete_option('csm_plugin_settings_templates');
	delete_option('csm_plugin_settings_seo');
	delete_option('csm_plugin_settings_page_settings');
	delete_option('csm_plugin_settings_countdown');
	delete_option('csm_plugin_settings_button');
	delete_option('csm_plugin_settings_basic_styling');
	delete_option('csm_plugin_settings_about_us');
	delete_option('csm_plugin_settings_contact_us');
	delete_option('csm_plugin_settings_newsletter');
	delete_option('csm_plugin_settings_subscription');
	delete_option('csm_plugin_settings_social');
	delete_option('csm_plugin_settings_copyright');
}
?>