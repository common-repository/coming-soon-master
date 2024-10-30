<!-- Subscription Settings panel content --- >
<!----------------------------------------> 

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php _e('SUBSCRIPTION SETTINGS','WEBHUNT_CSM'); ?>
    <small><?php _e('Coming Soon Master','WEBHUNT_CSM'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-key"></i> <?php _e('Newsletter And Subscriber','WEBHUNT_CSM'); ?></a></li>
    <li class="active"><?php _e('Subscription','WEBHUNT_CSM'); ?> </li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
   <body class="woodbg">
		<div class="smart-wrap">
			<div class="smart-forms smart-container wrap-2">
				
				<form method="post" name="myform" id="cms_plugin_options_subscription">
					<div class="form-body">
					
						<div class="frm-row">
							<div class="col-md-12">
							
								<div class="frm-row network-header">
									<div class="colm"></div>
									<div class="section colm colm9">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('SUBSCRIPTION SETTINGS','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								</div>	

								<div class="frm-row frm-bg">
								
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Subscription Image','WEBHUNT_CSM'); ?> :</label>
										<div class="section colm col7">
											<div class="csm-single-image-div">
												<img id='image-preview' src='<?php echo $subsImage; ?>' class='csm-single-image'>
												<input type="button"  id="upload_image_button" class="button-primary csm_image_uploader" value="<?php _e( 'Upload image' ); ?>" />
												<input type='hidden' name='subsImage' id='subsImage' value='<?php echo $subsImage; ?>'>
											</div>	
										</div><!-- end section -->
									</div><!-- end col section -->
								
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Subscription Title','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" class="gui-input" name="SubsTitle" id="SubsTitle" placeholder="Enter Your Subscription Title" value="<?php echo $SubsTitle; ?>">
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Subscription Description','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field">
												<textarea class="gui-textarea" id="SubsDescription" name="SubsDescription" placeholder="Enter Your Subscription Description Here..."><?php echo $SubsDescription; ?></textarea>
											</label>
										</div>
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Subscription Field Title','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" class="gui-input" name="subsFieldTitle" id="subsFieldTitle" placeholder="Enter Subscription Email Field Title" value="<?php echo $subsFieldTitle; ?>">
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Subscription Button Text','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" class="gui-input" name="subsButtonText" id="subsButtonText" placeholder="Enter Your Subscription Button Text" value="<?php echo $subsButtonText; ?>">
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->

								</div><!-- end .frm-row section -->
								
								
								<div class="frm-row frm-bg spacer-t30">
								
									<div class="section colm colm12" style="margin: -10px 0px 20px 0px; border-bottom: 1px dashed #e7e7e7;">
										<h4 style="font: bold 18px Arial, sans-serif;"><?php _e('After Success Subscription Notification Text','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
									
									<div class="col-md-12">
										<div class="section colm colm8">
											<label class="field prepend-icon">
												<input type="text" class="gui-input" name="successSubsText" id="successSubsText" placeholder="Enter Success Subscription Notification Text" value="<?php echo $successSubsText; ?>">
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
											<p class="medium-text fine-grey"><?php _e('Thank you message after a successful subscription.','WEBHUNT_CSM'); ?></p>
										</div><!-- end section -->
									</div><!-- end col section -->
	
								</div><!-- end .frm-row section -->
									
							</div><!-- /.col -->
						</div><!-- end .frm-row section --> 
					</div><!-- end .form-body section -->
					<div class="error-notify"></div>
					<div class="form-footer">
						<input type="button" class="button btn-primary" onclick="wh_csm_save_data('subscription')" value="<?php _e('Save Changes','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_data('subscription')" value="<?php _e('Reset Section','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_all_data()" value="<?php _e('Reset All','WEBHUNT_CSM'); ?>">
					</div><!-- end .form-footer section -->
				</form>
				
			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->