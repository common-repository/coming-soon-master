<?php

	/******************* DASHBOARD *************************************
	********************************************************************/
	
	$defult_settings_dashboard = array(
		'csm_status'  		=> 'true',
		'skipfor_user'  	=> array('administrator'),
		'whitelisted_ips'  	=> ''
	);
	$csm_dashboard = unserialize(get_option('csm_plugin_settings_dashboard'));
	$csm_plugin_settings_dashboard = wp_parse_args($csm_dashboard , $defult_settings_dashboard);

	$csm_status 		= $csm_plugin_settings_dashboard['csm_status'];
	$skipfor_user 		= $csm_plugin_settings_dashboard['skipfor_user'];
	$whitelisted_ips 	= $csm_plugin_settings_dashboard['whitelisted_ips'];
	
	$skipfor_user 	= empty($skipfor_user) ? array() : $skipfor_user;
	
	/******************* TEMPLATES *************************************
	********************************************************************/
	
	$defult_settings_templates = array(
		'csmTemplate'  		=> '2',
		'tBgColor'  		=> '#252733',
		'tBgImage' 			=> esc_url(WEBHUNT_CSM_PLUGIN_URL.'templates/assets/img/bg/site-bg-img.jpg'),
		'pageOverlay'		=> "true",
		'pageSecColor'		=> "#151a1e",
		'pageSecOpacity' 	=> "0.8",
		'pageSecStyle' 		=> "left",
	);
	$csm_templates = unserialize(get_option('csm_plugin_settings_templates'));

	$csm_plugin_settings_templates = wp_parse_args($csm_templates , $defult_settings_templates);

	$csmTemplate 		= $csm_plugin_settings_templates['csmTemplate'];
	$tBgColor 			= $csm_plugin_settings_templates['tBgColor'];
	$tBgImage 			= esc_url($csm_plugin_settings_templates['tBgImage']);
	$pageOverlay 		= $csm_plugin_settings_templates['pageOverlay'];
	$pageSecColor 		= $csm_plugin_settings_templates['pageSecColor'];
	$pageSecOpacity 	= $csm_plugin_settings_templates['pageSecOpacity'];
	$pageSecStyle 		= $csm_plugin_settings_templates['pageSecStyle'];
	
	
	/******************* SEO SETTINGS ********************************
	********************************************************************/
	
	$defult_settings_seo = array(
		'enableFavicon' 	=> "true",
		'favicon' 			=> WEBHUNT_CSM_PLUGIN_URL.'templates/assets/img/apple-touch-icon.png',
		'meta_title' 		=> __("Coming Soon","WEBHUNT_CSM"),
		'meta_description' 	=> "",
		'google_analytics' 	=> "",
	);
	$csm_seo = unserialize(get_option('csm_plugin_settings_seo'));

	$csm_plugin_settings_seo = wp_parse_args($csm_seo , $defult_settings_seo);

	$enableFavicon 		= $csm_plugin_settings_seo['enableFavicon'];
	$favicon 			= esc_url($csm_plugin_settings_seo['favicon']);
	$meta_title 		= sanitize_text_field($csm_plugin_settings_seo['meta_title']);
	$meta_description 	= sanitize_textarea_field($csm_plugin_settings_seo['meta_description']);
	$google_analytics 	= esc_js($csm_plugin_settings_seo['google_analytics']);
	

	/******************* Logo SETTINGS **********************************
	********************************************************************/
	
	$defult_settings_page_settings = array(
		'enableLogo' 		=> "true",
		'csmLogoURL' 		=> WEBHUNT_CSM_PLUGIN_URL.'templates/assets/img/webhunt-logo.png',
		'logoWidth' 		=> "330",
		'logoHeight' 		=> "55",
		'logoLinkURL' 		=> "http://www.webhuntinfotech.com/",
	);
	$csm_page_settings = unserialize(get_option('csm_plugin_settings_page_settings'));

	$csm_plugin_settings_page_settings = wp_parse_args($csm_page_settings , $defult_settings_page_settings);

	$enableLogo 		= $csm_plugin_settings_page_settings['enableLogo'];
	$csmLogoURL 		= esc_url($csm_plugin_settings_page_settings['csmLogoURL']);
	$logoWidth 			= $csm_plugin_settings_page_settings['logoWidth'];
	$logoHeight 		= $csm_plugin_settings_page_settings['logoHeight'];
	$logoLinkURL		= esc_url($csm_plugin_settings_page_settings['logoLinkURL']);
	
	
	/******************* COUNTDOWN SETTINGS *****************************
	********************************************************************/
	
	$defult_settings_countdown = array(
		'enableCountdown' 	=> "true",
		'countdownDate' 	=> "12/31/2018",
		'countdownTime' 	=> "15:47",
		'dayString' 		=> __("DAYs","WEBHUNT_CSM"),
		'hoursString' 		=> __("Hours","WEBHUNT_CSM"),
		'minutesString' 	=> __("Minutes","WEBHUNT_CSM"),
		'secondsString' 	=> __("Seconds","WEBHUNT_CSM"),
		'csmHomeTitle' 		=> __("Creative <span>And</span> Flexible Design, Feel The <span>Difference</span>","WEBHUNT_CSM"),
		'homeDesc' 			=> __("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id dolor dui, dapibus gravida elit. Donec conseenigmat laore gittis. Suspendisse ultricies ultrices viverra. Morbi rhoncus laoreet tincidunt. Mauris interdum convallis metus. Suspendiss lacus est.","WEBHUNT_CSM"),
	);
		
	$csm_countdown = unserialize(get_option('csm_plugin_settings_countdown'));
	
	$csm_plugin_settings_countdown = wp_parse_args($csm_countdown , $defult_settings_countdown);

	$enableCountdown 	= $csm_plugin_settings_countdown['enableCountdown'];
	$countdownDate 		= $csm_plugin_settings_countdown['countdownDate'];
	$countdownTime 		= $csm_plugin_settings_countdown['countdownTime'];
	$dayString 			= sanitize_text_field($csm_plugin_settings_countdown['dayString']);
	$hoursString 		= sanitize_text_field($csm_plugin_settings_countdown['hoursString']);
	$minutesString 		= sanitize_text_field($csm_plugin_settings_countdown['minutesString']);
	$secondsString 		= sanitize_text_field($csm_plugin_settings_countdown['secondsString']);
	$csmHomeTitle 		= wp_kses_post($csm_plugin_settings_countdown['csmHomeTitle']);
	$homeDesc 			= sanitize_textarea_field($csm_plugin_settings_countdown['homeDesc']);
	
	
	/******************* BUTTON SETTINGS **********************************
	********************************************************************/
	
	$defult_settings_button = array(
		'enableReadBtn'		=> "true",
		'readMoreB' 		=> __("Read More","WEBHUNT_CSM"),
		'enableNewsBtn'   	=> "true",
		'newsLSubB' 		=> __("Notify Me","WEBHUNT_CSM"),
	);
	$csm_button = unserialize(get_option('csm_plugin_settings_button'));
	$csm_plugin_settings_button = wp_parse_args($csm_button , $defult_settings_button);

	$enableReadBtn	 	= $csm_plugin_settings_button['enableReadBtn'];
	$readMoreB 			= sanitize_text_field($csm_plugin_settings_button['readMoreB']);
	$enableNewsBtn		= $csm_plugin_settings_button['enableNewsBtn'];
	$newsLSubB 			= sanitize_text_field($csm_plugin_settings_button['newsLSubB']);
	
	
	/******************* BASIC SETTINGS *****************************
	********************************************************************/
	
	$defult_settings_basic_styling = array(
		'enablePreloader' 	=> "true",
		'csmPreloaderText' 	=> __("Coming Soon is Loading","WEBHUNT_CSM"),
		'csmCssEditor'		=> "",
	);
		
	$csm_basic_styling = unserialize(get_option('csm_plugin_settings_basic_styling'));
	
	$csm_plugin_settings_basic_styling = wp_parse_args($csm_basic_styling , $defult_settings_basic_styling);

	$enablePreloader 	= $csm_plugin_settings_basic_styling['enablePreloader'];
	$csmPreloaderText 	= sanitize_text_field($csm_plugin_settings_basic_styling['csmPreloaderText']);
	$csmCssEditor 		= $csm_plugin_settings_basic_styling['csmCssEditor'];
	
	
	/******************* ABOUT US ***************************************
	********************************************************************/
	
	$defult_settings_about_us = array(
		'enableAboutUs' 	=> "true",
		'aboutusTilte' 		=> __("WE'RE WEB DESIGNER","WEBHUNT_CSM"),
		'aboutusBgTilte' 	=> __("WHO WE ARE?","WEBHUNT_CSM"),
		'aboutusDesc' 		=> __("Blessed have fruit created open tree morning us fifth stars living there living divide morning.","WEBHUNT_CSM"),
		'aboutusContent' 	=>  '<div class="col-xs-12 col-sm-6"><p>Green void bearing fish which bring their you\'re <strong>stars years</strong>, meat bring very said replenish cattle creature forth good over, from, replenish you\'ll creeping cattle two gathering kind. Our make third gathered dry years, deep greater isn\'t day creepeth.</p> <p>Creature him and forth own moved. Have, creepeth. Waters i called he moving fly whose.</p></div><div class="aboutus-col col-xs-12 col-sm-6"><img class="mCS_img_loaded" style="width: 100%; height: auto;" src=" '.WEBHUNT_CSM_PLUGIN_URL. 'templates/assets/img/item/about-us.jpg" alt="Aboutus Image" /></div>',
	);
	$csm_about_us = unserialize(get_option('csm_plugin_settings_about_us'));

	$csm_plugin_settings_about_us = wp_parse_args($csm_about_us , $defult_settings_about_us);

	$enableAboutUs 	= $csm_plugin_settings_about_us['enableAboutUs'];
	$aboutusTilte 	= stripslashes_deep(sanitize_text_field($csm_plugin_settings_about_us['aboutusTilte']));
	$aboutusBgTilte = sanitize_text_field($csm_plugin_settings_about_us['aboutusBgTilte']);
	$aboutusDesc 	= sanitize_textarea_field($csm_plugin_settings_about_us['aboutusDesc']);
	$aboutusContent = stripslashes_deep(wp_kses_post($csm_plugin_settings_about_us['aboutusContent']));

	
	/******************* CONTACT INFO *************************************
	********************************************************************/
	
	$defult_settings_contact_us = array(
		'enableContactUs' 		=> "true",
		'contactUsTilte' 		=> __("GET IN TOUCH WITH US","WEBHUNT_CSM"),
		'contactUsBgTilte' 		=> __("CONTACT","WEBHUNT_CSM"),
		'contactUsDesc' 		=> __("Blessed have fruit created open tree morning us fifth stars living there living divide morning.","WEBHUNT_CSM"),
		'contactUsEmail' 		=> "email@example.com",
		'contactUsNumber' 		=> "(00) 123-4567890",
		'contactUsAddress' 		=> __("123 Street, City","WEBHUNT_CSM"),
		'googleMapUrl'			=> 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14443.847398033176!2d75.849827!3d25.170766!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9cdecd6cdf29f1c2!2sWebHunt+Infotech!5e0!3m2!1sen!2sin!4v1499431612425',
		
	);
	$csm_contact_us = unserialize(get_option('csm_plugin_settings_contact_us'));

	$csm_plugin_settings_contact_us = wp_parse_args($csm_contact_us , $defult_settings_contact_us);

	$enableContactUs 		= $csm_plugin_settings_contact_us['enableContactUs'];
	$contactUsTilte 		= sanitize_text_field($csm_plugin_settings_contact_us['contactUsTilte']);
	$contactUsBgTilte 		= sanitize_text_field($csm_plugin_settings_contact_us['contactUsBgTilte']);
	$contactUsDesc 			= sanitize_textarea_field($csm_plugin_settings_contact_us['contactUsDesc']);

	$contactUsEmail 		= sanitize_email($csm_plugin_settings_contact_us['contactUsEmail']);
	$contactUsNumber 		= $csm_plugin_settings_contact_us['contactUsNumber'];
	$contactUsAddress 		= sanitize_text_field($csm_plugin_settings_contact_us['contactUsAddress']);

	$googleMapUrl 			= esc_url($csm_plugin_settings_contact_us['googleMapUrl']);
	
	
	/******************* NEWSLETTER SETTINGS *************************************
	********************************************************************/
	
	$defult_settings_newsletter = array(
		'newsletterOption' 	=> "wpmail",
		'subsMailSubject' 	=> __("Coming soon page","WEBHUNT_CSM"),
		'subsMailMsg' 		=> __("Thanks for submitting your email. We will notify you once we launch","WEBHUNT_CSM"),
		'adminMailSubject' 	=> __("Coming soon page","WEBHUNT_CSM"),
		'adminMailmsg' 		=> __("Hey Some one has subscribed to the Coming Soon page","WEBHUNT_CSM"),
		'adminMailAddrress' => "",
	);
	$csm_newsletter = unserialize(get_option('csm_plugin_settings_newsletter'));

	$csm_plugin_settings_newsletter = wp_parse_args($csm_newsletter , $defult_settings_newsletter);

	$newsletterOption 	= $csm_plugin_settings_newsletter['newsletterOption'];
	$subsMailSubject 	= sanitize_text_field($csm_plugin_settings_newsletter['subsMailSubject']);
	$subsMailMsg 		= sanitize_textarea_field($csm_plugin_settings_newsletter['subsMailMsg']);
	$adminMailSubject 	= sanitize_text_field($csm_plugin_settings_newsletter['adminMailSubject']);
	$adminMailmsg 		= sanitize_textarea_field($csm_plugin_settings_newsletter['adminMailmsg']);
	$adminMailAddrress 	= sanitize_email($csm_plugin_settings_newsletter['adminMailAddrress']);
	
	
	/******************* SUBSCRIBER FIELD SETTINGS *************************************
	********************************************************************/
	
	$defult_settings_subscription = array(
		'subsImage' 		=> WEBHUNT_CSM_PLUGIN_URL.'templates/assets/img/item/subscribe.jpg',
		'SubsTitle' 		=> __("Subscribe to our newsletter","WEBHUNT_CSM"),
		'SubsDescription' 	=> __("Waters place given years tree every. Sixth whales. Divide fourth don't, behold herb third. Said brought saying - Coming Soon.","WEBHUNT_CSM"),
		'subsFieldTitle' 	=> __("Email Address","WEBHUNT_CSM"),
		'subsButtonText' 	=> __("Subscription","WEBHUNT_CSM"),
		'successSubsText' 	=> __("You have successfully subscribed our newsletter.","WEBHUNT_CSM"),
	);
	$csm_subscription = unserialize(get_option('csm_plugin_settings_subscription'));

	$csm_plugin_settings_subscription = wp_parse_args($csm_subscription , $defult_settings_subscription);

	$subsImage 			= esc_url($csm_plugin_settings_subscription['subsImage']);
	$SubsTitle 			= sanitize_text_field($csm_plugin_settings_subscription['SubsTitle']);
	$SubsDescription 	= sanitize_textarea_field($csm_plugin_settings_subscription['SubsDescription']);
	$subsFieldTitle 	= sanitize_text_field($csm_plugin_settings_subscription['subsFieldTitle']);
	$subsButtonText 	= sanitize_text_field($csm_plugin_settings_subscription['subsButtonText']);
	$successSubsText 	= sanitize_text_field($csm_plugin_settings_subscription['successSubsText']);
	
	
	/******************* SOCIAL SETTINGS ********************************
	********************************************************************/
	
	$defult_settings_social = array(
		'sFacebook' 	=> "https://www.facebook.com/",
		'sTwitter' 		=> "@webhunt",
		'sLinkedin' 	=> "https://www.instagram.com/",
		'sGooglePlus' 	=> "https://plus.google.com/",
		'sYoutube' 		=> "",
		'sPinterest' 	=> "",
	);
	$csm_social = unserialize(get_option('csm_plugin_settings_social'));
	
	$csm_plugin_settings_social = wp_parse_args($csm_social , $defult_settings_social);

	$sFacebook 		= esc_url($csm_plugin_settings_social['sFacebook']);
	$sTwitter 		= sanitize_text_field($csm_plugin_settings_social['sTwitter']);
	$sLinkedin 		= esc_url($csm_plugin_settings_social['sLinkedin']);
	$sGooglePlus 	= esc_url($csm_plugin_settings_social['sGooglePlus']);
	$sYoutube 		= esc_url($csm_plugin_settings_social['sYoutube']);
	$sPinterest 	= esc_url($csm_plugin_settings_social['sPinterest']);
	
	
	/******************* Copyright Settings *****************************
	********************************************************************/
	
	$defult_settings_copyright = array(
		'copyrightText' 	=> __("© 2017 Coming Soon Master Developed By","WEBHUNT_CSM"),
		'developedByText' 	=> __("WebHunt Infotech","WEBHUNT_CSM"),
		'developedByLink' 	=> "https://www.wenhuntinfotech.com",
	);
	$csm_copyright = unserialize(get_option('csm_plugin_settings_copyright'));

	$csm_plugin_settings_copyright = wp_parse_args($csm_copyright , $defult_settings_copyright);

	$copyrightText 		= sanitize_text_field($csm_plugin_settings_copyright['copyrightText']);
	$developedByText 	= sanitize_text_field($csm_plugin_settings_copyright['developedByText']);
	$developedByLink 	= esc_url($csm_plugin_settings_copyright['developedByLink']);
?>