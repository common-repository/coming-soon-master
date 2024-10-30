/************ Save Admin Panel Data Value ***************
*********************************************************/
function wh_csm_save_data(name) {
	tinyMCE.triggerSave();
	var cms_plugin_options = "#cms_plugin_options_"+name;
	jQuery("#csm-preloader-wrap").show();
	jQuery.ajax({
		type: "POST",
		url: csm_obj.ajax_url,
		data : 'action=action_csm_page_setting_save_post&security='+ csm_obj.ajax_nonce + '&hook=' + name +'&' + jQuery(cms_plugin_options).serialize(),
		success : function(data){
			if(data=='nonce_err'){
				jQuery("#csm-preloader-wrap").fadeOut('slow');
				jQuery('.error-notify').html('<i class="fa fa-times-circle danger"></i>Cheating Uh!');
			}
			jQuery("#csm-preloader-wrap").delay(200).fadeOut('slow');
			/* if(name=="dashboard"){
				 location.href='?page=coming_soon_master'
			} */
	   }			
	});
	
}

/************ Reset Admin Panel Data Value **************
*********************************************************/
function wh_csm_reset_data(name) 
{ 	
	if (confirm('Are you sure you want to reset this setting?')) {
	} 
	else {
	   return;
	}
	
	jQuery("#csm-preloader-wrap").show();
	jQuery.ajax({
		type: "POST",
		url: csm_obj.ajax_url,
		data : 'action=action_csm_page_setting_reset_post&security='+ csm_obj.ajax_nonce + '&hook=' + name ,
		success : function(data){
			jQuery("#csm-preloader-wrap").delay(200).fadeOut('slow');
			if(data=='nonce_err'){
				alert("Cheating Uh!");
			}
			location.href='?page=coming_soon_master'
	   }			
	});
	
}

/************ Reset All Data Value ********************
******************************************************/
function wh_csm_reset_all_data() 
{ 	
	if (confirm('Are you sure you want to reset all plugin settings?')) {
		
		jQuery("#csm-preloader-wrap").show();
		jQuery.ajax({
			type: "POST",
			url: csm_obj.ajax_url,
			data : 'action=action_csm_all_pages_setting_reset&security='+ csm_obj.ajax_nonce ,
			success : function(data){
				jQuery("#csm-preloader-wrap").delay(200).fadeOut('slow');
				if(data=='nonce_err'){
					alert("Cheating Uh!");
				}
				location.href='?page=coming_soon_master'
		   }			
		});
	} 
	else {
	   return;
	}
}