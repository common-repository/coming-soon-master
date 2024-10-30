<!-- Newsletter Settings panel content -- >
<!----------------------------------------> 

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php _e('NEWSLETTER SETTINGS','WEBHUNT_CSM'); ?>
    <small><?php _e('Coming Soon Master','WEBHUNT_CSM'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-newspaper-o"></i> <?php _e('Newsletter And Subscriber','WEBHUNT_CSM'); ?></a></li>
    <li class="active"><?php _e('Newsletter','WEBHUNT_CSM'); ?> </li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
   <body class="woodbg">
		<div class="smart-wrap">
			<div class="smart-forms smart-container wrap-2">
				
				<form method="post" name="myform" id="cms_plugin_options_newsletter">
					<div class="form-body">
					
						<div class="frm-row">
							<div class="col-md-12">
							
								<div class="frm-row network-header">
									<div class="section colm">
										<img src="<?php echo  WEBHUNT_CSM_PLUGIN_URL.'dist/img/Newslatter.jpg'; ?>" alt="dashboard-icon" style="margin-top: 7px; padding:0px;" data-pin-nopin="true">
									</div><!-- end section -->
									<div class="section colm colm9">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('NEWSLETTER SETTINGS','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								</div>	

								<div class="frm-row frm-bg">
									<div class="colm colm12">
										<label class="field-label colm colm3 align-left"><?php _e('Newsletter Options','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field select">
												<select name="newsletterOption" id="newsletterOption">
													<optgroup label="Select any option">
														<option value="none" <?php if($newsletterOption == 'none') echo "selected=selected"; ?> > <?php _e('Do not display sign up field','WEBHUNT_CSM'); ?> </option>
														<option value="wpmail" <?php if($newsletterOption == 'wpmail') echo "selected=selected"; ?>> <?php _e('Using Wp Mail','WEBHUNT_CSM'); ?> </option>
														<option disabled> <?php _e('MailChimp Using (Avaliable in Pro)','WEBHUNT_CSM'); ?> </option>
													</optgroup>
												</select>
												<i class="arrow double"></i>
											</label>
											<p class="medium-text fine-grey options wpmail" style="margin:0px;"><?php _e('Please install & setup Postman plugin to use this feature.','WEBHUNT_CSM'); ?><a href="https://wordpress.org/plugins/postman-gmail-extension/" target="_blank"> <?php _e(' Click Here','WEBHUNT_CSM'); ?></a></p>
										</div><!-- end section -->
									</div><!-- end col section -->
								</div><!-- end .frm-row section -->
								
								<div class="frm-row network-header spacer-t30 options wpmail">
									<div class="section colm colm9" style="margin-bottom: 0px;">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Confirmation Mail For Subscriber After Subscribe','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								</div>
								
								<div class="frm-row frm-bg options wpmail">
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left prepend-icon"><?php _e('Subject','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="subsMailSubject" id="subsMailSubject" class="gui-input" placeholder="Enter subject Here For After Subscriber Confirmation Mail" value="<?php echo $subsMailSubject; ?>" >
												<span class="field-icon"><i class="fa fa-envelope-o"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Message Body','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field">
												<textarea class="gui-textarea" id="subsMailMsg" name="subsMailMsg" placeholder="Enter Your Message Here For After Subscriber Confirmation Mail"><?php echo $subsMailMsg; ?></textarea>
											</label>
										</div>
									</div><!-- end col section -->
								</div><!-- end .frm-row section -->
								
								<div class="frm-row network-header spacer-t30 options wpmail">
									<div class="section colm colm9" style="margin-bottom: 0px;">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Notification Mail To Admin After Subscribe By User','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								</div>
								
								<div class="frm-row frm-bg options wpmail">
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left prepend-icon"><?php _e('Subject','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="adminMailSubject" id="adminMailSubject" class="gui-input" placeholder="Enter subject for notification mail" value="<?php echo $adminMailSubject; ?>" >
												<span class="field-icon"><i class="fa fa-envelope-o"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Message Body','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field">
												<textarea class="gui-textarea" id="adminMailmsg" name="adminMailmsg" placeholder="Enter your message for notification mail"><?php echo $adminMailmsg; ?></textarea>
											</label>
										</div>
									</div><!-- end col section -->
								</div><!-- end .frm-row section -->
								
								<div class="frm-row network-header spacer-t30 options wpmail">
									<div class="section colm colm9" style="margin-bottom: 0px;">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Email Address for Get Notification Mail','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								</div>
								
								<div class="frm-row frm-bg options wpmail">
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left prepend-icon"><?php _e('Email Address','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="adminMailAddrress" id="adminMailAddrress" class="gui-input" placeholder="Enter your Email Address" value="<?php echo $adminMailAddrress; ?>" >
												<span class="field-icon"><i class="fa fa-envelope-o"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
								</div><!-- end .frm-row section -->
									
							</div><!-- /.col -->
						</div><!-- end .frm-row section --> 
					</div><!-- end .form-body section -->
					<div class="error-notify"></div>
					<div class="form-footer">
						<input type="button" class="button btn-primary" onclick="wh_csm_save_data('newsletter')" value="<?php _e('Save Changes','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_data('newsletter')" value="<?php _e('Reset Section','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_all_data()" value="<?php _e('Reset All','WEBHUNT_CSM'); ?>">
					</div><!-- end .form-footer section -->
				</form>
				
			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->
<script>
	jQuery(document).ready(function(jQuery){
		
		newslatterSettings("<?php echo $newsletterOption; ?>");
		
		jQuery("#newsletterOption").change(function () {     
			newslatterSettings(jQuery(this).val());
		});
	});	

	function newslatterSettings(option){
		jQuery('#cms_plugin_options_newsletter .options:not(.' + option + ')').hide();
		jQuery('#cms_plugin_options_newsletter .options.' + option).show();
	}	
</script>