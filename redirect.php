<?php
	function csm_coming_soon_redirect()
	{		
		if (greenToPublishTheme() === FALSE){
			$file = plugin_dir_path( __FILE__ )."templates/index.php";
			include($file);
			exit();
		}
	}
	add_action( 'template_redirect', 'csm_coming_soon_redirect' );
	
	function greenToPublishTheme() {
		$defult_settings_dashboard = array(
			'csm_status'  		=> 'false'
		);
		$csm_dashboard = unserialize(get_option('csm_plugin_settings_dashboard'));
		$csm_plugin_settings_dashboard = wp_parse_args($csm_dashboard , $defult_settings_dashboard);
		
		$csm_status = $csm_plugin_settings_dashboard['csm_status'];
		
		if(!empty($csm_plugin_settings_dashboard['skipfor_user'])){
			$skipfor_user 	= $csm_plugin_settings_dashboard['skipfor_user'];
		}else{
			$skipfor_user = array();
		}
		
		if( !empty($csm_plugin_settings_dashboard['whitelisted_ips'])){
			$whitelisted_ips = $csm_plugin_settings_dashboard['whitelisted_ips'];
		}else{
			$whitelisted_ips = array();
		}
		
		if ($csm_status == "false")
			return TRUE;
		if (checkForSkippingUser($skipfor_user))
			return TRUE;
		if (checkForWhiteListedIPs($whitelisted_ips))
			return TRUE;
		return FALSE;
	}
	
	function checkForSkippingUser($skipfor_user) {
		$skip_for_array = $skipfor_user;
        $wp_get_current_user =  wp_get_current_user();
		$LoggedInUserID = $wp_get_current_user->ID;
		$current_user = get_userdata( $LoggedInUserID );
		if(get_userdata( $LoggedInUserID )){
		$user_roles = $current_user->roles;
        if (in_array($user_roles[0], $skip_for_array))
			return TRUE;
		}
		return FALSE;
    }
	
	function checkForWhiteListedIPs($whitelisted_ips) {
        $text = $whitelisted_ips;
        if (empty($text))
            return FALSE;

        $text_br = nl2br(trim($text));
        $iplist = explode("<br />", $text_br);

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            //check ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            //to check ip is pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $trimmed_ips = array_map('trim', $iplist);
        if (in_array($ip, $trimmed_ips))
            return TRUE;
        return FALSE;
    }


	add_action('admin_bar_menu', 'csm_admin_bar_menu', 1000);
	function csm_admin_bar_menu()
	{
		global $wp_admin_bar;
		$csm_plugin_settings_dashboard = unserialize(get_option('csm_plugin_settings_dashboard'));
		$csm_status = $csm_plugin_settings_dashboard['csm_status'];
		
		if($csm_status=='false') return;
		$msg = __('Coming Soon Mode Active','');
		// Add Parent Menu
		$argsParent=array(
			'id' => 'csmCustomMenu',
			'title' => $msg,
			'parent' => 'top-secondary',
			'href' => '?page=coming_soon_master',
			'meta'   => array( 'class' => 'csm_btn_active' ),
		);
		$wp_admin_bar->add_menu($argsParent);
		?>
		<style>
			.csm_btn_active a{
				background: #31a3dd !important;
				color: #fff !important;
			}
			.csm_btn_active a:hover{
				background: #31a3dd !important;
				color: #fff !important;
			}
		</style>
		<?php   
	}
 ?>