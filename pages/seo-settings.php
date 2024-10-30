<!--- Header Settings panel content ----- >
<!----------------------------------------> 

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php _e('S.E.O. SETTINGS','WEBHUNT_CSM'); ?>
    <small><?php _e('Coming Soon Master','WEBHUNT_CSM'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-line-chart"></i> <?php _e('Settings','WEBHUNT_CSM'); ?></a></li>
    <li class="active"><?php _e('SEO Settings','WEBHUNT_CSM'); ?></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
   <body class="woodbg">
		<div class="smart-wrap">
			<div class="smart-forms smart-container wrap-2">
				
				<form method="post" name="myform" id="cms_plugin_options_seo">
					<div class="form-body">
					
						<div class="frm-row">
							<div class="col-md-12">
							
								<div class="frm-row network-header">
									<div class="section colm">
										<img src="<?php echo  WEBHUNT_CSM_PLUGIN_URL.'dist/img/line-chart.jpg'; ?>" alt="dashboard-icon" style="margin-top: 5px; padding:0px;" data-pin-nopin="true">
									</div><!-- end section -->
									<div class="section colm colm9">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('SEO SETTINGS','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								</div>	

								<div class="frm-row frm-bg">
								
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Show Favicon Icon','WEBHUNT_CSM'); ?> :</label>
										<div class="section colm colm8">
											<label class="switch block">
											  <input type="hidden" name="enableFavicon" value="false">
											  <input type="checkbox" name="enableFavicon" id="enableFavicon" value="true" <?php if($enableFavicon == 'true' ) { echo "checked"; } ?>>
											  <span class="switch-label" data-on="ON" data-off="OFF"></span>
											  <span> <?php _e('ON/OFF','WEBHUNT_CSM'); ?> </span>
											</label>
											<p class="medium-text fine-grey"><?php _e('Switch it ON/OFF to enable/disable your site icon (favicon icon).','WEBHUNT_CSM'); ?></p>
										</div><!-- end section -->
									</div><!-- end col section -->
								
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Upload Favicon Icon','WEBHUNT_CSM'); ?> :</label>
										<div class="section colm col7 csm-single-image-div">
											<img id='image-preview' class='csm-single-image' src='<?php echo $favicon; ?>'>
											<input type="button"  id="upload_image_button" class="button-primary csm_image_uploader" value="<?php _e( 'Upload Image' ); ?>" />
											<input type='hidden' name='favicon' id='favicon' value='<?php echo $favicon; ?>'>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('SEO Meta Title','WEBHUNT_CSM'); ?> :</label>
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="meta_title" id="meta_title" class="gui-input" placeholder="Enter Your Site Meta Title !" value="<?php echo $meta_title; ?>">
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
											<p class="medium-text fine-grey"><?php _e('This will be the title of the coming soon page.','WEBHUNT_CSM'); ?></p>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('SEO Meta Description','WEBHUNT_CSM'); ?> :</label>
										<div class="section colm colm7">
											<label class="field">
												<textarea class="gui-textarea" id="meta_description" name="meta_description" placeholder="Enter Your SEO Meta Description Here..." ><?php echo $meta_description; ?></textarea>
											</label>
										</div>
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Google Analytics','WEBHUNT_CSM'); ?> :</label>
										<div class="section colm colm7">
											<label class="field">
												<textarea class="gui-textarea" id="google_analytics" name="google_analytics" placeholder="Enter Your Google Analytics Code Here..." ><?php echo $google_analytics; ?></textarea>
											</label>
										</div>
									</div><!-- end col section -->
	
								</div><!-- end .frm-row section -->
									
							</div><!-- /.col -->
						</div><!-- end .frm-row section --> 
					</div><!-- end .form-body section -->
					<div class="error-notify"></div>
					<div class="form-footer">
						<input type="button" class="button btn-primary" onclick="wh_csm_save_data('seo')" value="<?php _e('Save Changes','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_data('seo')" value="<?php _e('Reset Section','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_all_data()" value="<?php _e('Reset All','WEBHUNT_CSM'); ?>">
					</div><!-- end .form-footer section -->
				</form>
				
			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->