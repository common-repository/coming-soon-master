<!-- Logo Settings panel content --- >
<!----------------------------------------> 

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php _e('LOGO SETTINGS','WEBHUNT_CSM'); ?>
    <small><?php _e('Coming Soon Master','WEBHUNT_CSM'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-file-text-o"></i> <?php _e('Settings','WEBHUNT_CSM'); ?></a></li>
    <li class="active"><?php _e('Logo Settings','WEBHUNT_CSM'); ?></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
   <body class="woodbg">
		<div class="smart-wrap">
			<div class="smart-forms smart-container wrap-2">
				
				<form method="post" name="myform" id="cms_plugin_options_page_settings">
					<div class="form-body">
						
						<div class="frm-row">
							<div class="col-md-12">
								
								<div class="frm-row network-header">
									<div class="colm"></div>
									<div class="section colm colm9" style="margin-bottom: 0px;">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Logo Settings','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								</div>
								
								<div class="frm-row frm-bg">
									
									<div class="colm colm12">
										<label class="field-label colm colm2 align-left"><?php _e('Display Logo','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm8">
											<label class="switch block">
											  <input type="hidden" name="enableLogo" value="false">
											  <input type="checkbox" name="enableLogo" id="enableLogo" value="true" <?php if($enableLogo == 'true' ) { echo "checked"; } ?>>
											  <span class="switch-label" data-on="ON" data-off="OFF"></span>
											  <span> <?php _e('ON/OFF','WEBHUNT_CSM'); ?> </span>
											</label>
											<p class="medium-text fine-grey"><?php _e('Switch it ON/OFF to enable/disable your site Logo.','WEBHUNT_CSM'); ?></p>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="colm colm12">
										<label class="field-label colm colm2 align-left"><?php _e('Upload Logo','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm8">
											<div class="imageupload">
												<div class="file-tab panel-body" style="display: block;">
													<img src="<?php echo $csmLogoURL; ?>" alt="Image preview" class="thumbnail" style="max-width: 250px; max-height: 250px">
													<button type="button" id="upload_image_button" class="btn btn-default csm_image_uploader" style="display: inline-block;"><?php _e( 'Upload Image','WEBHUNT_CSM' ); ?></button>
													<input type='hidden' name='csmLogoURL' id='csmLogoURL' value='<?php echo $csmLogoURL; ?>'>
												</div>
											</div>
										</div>	
									</div><!-- end col section -->
									
									<div class="colm colm12">
										<label class="field-label colm colm2 align-left"><?php _e('Logo Width','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm4 spacer-t20">
											<div class="slider-wrapper">
												<div id="slogoWidth"></div>
											</div><!-- end .slider-wrapper -->
										</div>
										<div class="colm colm3 spacer-t7">
											<input type="text" name="logoWidth" id="logoWidth" class="slider-text" readonly><span style="color:#f6931f"><?php _e('px','WEBHUNT_CSM'); ?></span> 
										</div>     
									</div> <!-- End of 'Logo Width' Section -->

									<div class="colm colm12 spacer-t15">
										<label class="field-label colm colm2 align-left"><?php _e('Logo Height','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm4 spacer-t20">
											<div class="slider-wrapper">
												<div id="slogoHeight"></div>
											</div>
										</div>
										<div class="colm colm3 spacer-t7">
											<input type="text" id="logoHeight" class="slider-text" name="logoHeight" readonly><span style="color:#f6931f"><?php _e('px','WEBHUNT_CSM'); ?></span> 
										</div>
									</div> <!-- End of 'Logo Height' Section -->
									
									<div class="colm colm12 spacer-t10">
										<label class="field-label colm colm2 align-left"><?php _e('Logo Link URL','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm8">
											<label class="field prepend-icon">
												<input type="text" name="logoLinkURL" id="logoLinkURL" class="gui-input" placeholder="Enter Logo Link URL" value="<?php echo $logoLinkURL; ?>">
												<span class="field-icon"><i class="fa fa-link"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->

								</div><!-- end .frm-row section -->
									
							</div><!-- /.col -->
						</div><!-- end .frm-row section --> 
					</div><!-- end .form-body section -->
					<div class="error-notify"></div>
					<div class="form-footer">
						<input type="button" class="button btn-primary" onclick="wh_csm_save_data('page_settings')" value="<?php _e('Save Changes','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_data('page_settings')" value="<?php _e('Reset Section','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_all_data()" value="<?php _e('Reset All','WEBHUNT_CSM'); ?>">
					</div><!-- end .form-footer section -->
				</form>
				
			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->
<script type="text/javascript">
jQuery(document).ready(function(){

/* Page Opacity */	
	jQuery( "#spageSecOpacity" ).slider({
		range: "min",
		value: <?php echo $pageSecOpacity; ?>,
		min: 0,
		max: 1,
		step: 0.1,
		slide: function(event, ui) {
			jQuery("#pageSecOpacity").val( ui.value );
		}
	});
	jQuery("#pageSecOpacity").val( 
		jQuery("#spageSecOpacity").slider("value")
	);
	

/* Logo Widht */
	jQuery( "#slogoWidth" ).slider({
		range: "min",
		value: <?php echo $logoWidth; ?>,
		min: 50,
		max: 400,
		slide: function(event, ui) {
			jQuery("#logoWidth").val( ui.value );
		}
	});		
	jQuery("#logoWidth").val( 
		jQuery("#slogoWidth").slider("value")
	);	

/* Logo Height */	
	jQuery( "#slogoHeight" ).slider({
		range: "min",
		value: <?php echo $logoHeight; ?>,
		min: 40,
		max: 200,
		slide: function(event, ui) {
			jQuery("#logoHeight").val( ui.value );
		}
	});
	jQuery("#logoHeight").val( 
		jQuery("#slogoHeight").slider("value")
	);
	
});
</script>