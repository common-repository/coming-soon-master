<!-- Contact us settings panel content --- >
<!----------------------------------------> 

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php _e('CONTACT INFORMATION','WEBHUNT_CSM'); ?>
    <small><?php _e('Coming Soon Master','WEBHUNT_CSM'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-envelope-o"></i> <?php _e('Contact Info','WEBHUNT_CSM'); ?></a></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
   <body class="woodbg">
		<div class="smart-wrap">
			<div class="smart-forms smart-container wrap-2">

				<form method="post" name="myform" id="cms_plugin_options_contact_us">
					<div class="form-body">
					
						<div class="frm-row">
							<div class="col-md-12">

								<div class="frm-row network-header">
									<div class="section col-md-12">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('CONTACT INFORMATION','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								</div>

								<div class="frm-row frm-bg">

									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Enable Contact Section','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm8">
											<label class="switch block">
											  <input type="hidden" name="enableContactUs" value="false">
											  <input type="checkbox" name="enableContactUs" id="enableContactUs" value="true" <?php if($enableContactUs == 'true' ) { echo "checked"; } ?> >
											  <span class="switch-label" data-on="ON" data-off="OFF"></span>
											  <span> <?php _e('ON/OFF','WEBHUNT_CSM'); ?> </span>
											</label>
											<p class="medium-text fine-grey"><?php _e('Switch it ON/OFF to enable/disable Contact Section.','WEBHUNT_CSM'); ?></p>
										</div><!-- end section -->
									</div><!-- end col section -->

									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Contact Section Title','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="contactUsTilte" id="contactUsTilte" class="gui-input" placeholder="Enter Contact Section Title" value="<?php echo $contactUsTilte; ?>" >
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->

									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Title Background Text','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="contactUsBgTilte" id="contactUsBgTilte" class="gui-input" placeholder="Enter Title Background Text" value="<?php echo $contactUsBgTilte; ?>" >
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->

									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Contact Section Description','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field">
												<textarea class="gui-textarea" id="contactUsDesc" name="contactUsDesc" placeholder="Enter Contact Section Description Here..."><?php echo $contactUsDesc; ?></textarea>
											</label>
										</div>
									</div><!-- end col section -->

								</div><!-- end .frm-row section -->

								<div class="frm-row network-header spacer-t30">
									<div class="section col-md-12" style="margin-bottom: 0px;">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Add Your Contact Information','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								</div>

								<div class="frm-row frm-bg">
								
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left prepend-icon"><?php _e('Email Address','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="contactUsEmail" id="contactUsEmail" class="gui-input" placeholder="Enter your Email Address" value="<?php echo $contactUsEmail; ?>" >
												<span class="field-icon"><i class="fa fa-envelope-o"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Contact Number','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="contactUsNumber" id="contactUsNumber" class="gui-input" placeholder="Enter your Contact Number" value="<?php echo $contactUsNumber; ?>" >
												<span class="field-icon"><i class="fa fa-phone"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Address','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="contactUsAddress" id="contactUsAddress" class="gui-input" placeholder="Enter your Address" value="<?php echo $contactUsAddress; ?>" >
												<span class="field-icon"><i class="fa fa-map-marker"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->

								</div><!-- end .frm-row section -->
								
								
								<div class="frm-row network-header spacer-t30">
									<div class="section col-md-12" style="margin-bottom: 0px;">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Add Your Google Map','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								</div>

								<div class="frm-row frm-bg">
								
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Google Map Url','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm9">
											<label class="field">
												<textarea class="gui-textarea" id="googleMapUrl" name="googleMapUrl" placeholder="Enter your Google Map Url here..."><?php echo $googleMapUrl; ?></textarea>
											</label>
											<p class="medium-text fine-grey"><?php _e('Enter your Google Map Url.','WEBHUNT_CSM'); ?><a href="https://www.webhuntinfotech.com/get-google-map-url/" target="_blank"><?php _e(' Click Here ','WEBHUNT_CSM'); ?></a><?php _e('to know how you can get google map url?','WEBHUNT_CSM'); ?> </p>
											
										</div>
									</div><!-- end col section -->

								</div><!-- end .frm-row section -->
								
								<div class="frm-row network-header spacer-t30">
									<div class="section colm colm9" style="margin-bottom: 0px;">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Send Mail/ Mailing Section Field Settings','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								</div>

								<div class="frm-row frm-bg">
								
									<div class="col-md-12">
										<a href="https://www.webhuntinfotech.com/plugin/coming-soon-master-pro/" target="_blank"><img src="<?php echo  WEBHUNT_CSM_PLUGIN_URL.'dist/img/pro-features/send-mail.jpg'; ?>" alt="color-schemes" style="width:100%; height:auto;" data-pin-nopin="true"></a>
										<h4><a href="https://www.webhuntinfotech.com/plugin/coming-soon-master-pro/" target="_blank" style="color: #ef4238;"><?php _e('These features avaliable in <b>Pro Version</b>, click here to unlock these features.','WEBHUNT_CSM'); ?></a></h4>
									</div><!-- end col section -->

								</div><!-- end .frm-row section -->

							</div><!-- /.col -->
						</div><!-- end .frm-row section --> 
					</div><!-- end .form-body section -->
					<div class="error-notify"></div>
					<div class="form-footer">
						<input type="button" class="button btn-primary" onclick="wh_csm_save_data('contact_us')" value="<?php _e('Save Changes','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_data('contact_us')" value="<?php _e('Reset Section','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_all_data()" value="<?php _e('Reset All','WEBHUNT_CSM'); ?>">
					</div><!-- end .form-footer section -->
				</form>

			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->