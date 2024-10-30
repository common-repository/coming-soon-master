<!-- Templates Settings panel content --- >
<!----------------------------------------> 	

<!-- Header Content -->
<section class="content-header">
  <h1>
    <?php _e('TEMPLATE PAGE','WEBHUNT_CSM'); ?>
    <small><?php _e('Coming Soon Master','WEBHUNT_CSM'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-picture-o"></i> <?php _e('Templates','WEBHUNT_CSM'); ?></a></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
   <body class="woodbg">
		<div class="smart-wrap">
			<div class="smart-forms smart-container wrap-2">
				
				<form method="post" name="myform" id="cms_plugin_options_templates" novalidate>
					<div class="form-body">

						<div class="frm-row">
							<div class="col-md-12">
							
								<div class="frm-row network-header">
									<div class="colm"></div>
									<div class="section colm colm9">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('TEMPLATE STYLE','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								</div>	

								<div class="frm-row frm-bg tDisplySec">
								
									<div class="colm colm12">
										<label class="field-label colm colm3 align-left"><?php _e('Select Template','WEBHUNT_CSM'); ?> </label>
										<div class="section colm colm7">
											<label class="field select">
												<select name="csmTemplate" id="csmTemplate">
													<optgroup label="Select any Template">
														<option value="0" <?php if($csmTemplate == '0') echo "selected=selected"; ?> > <?php _e('Flate Color','WEBHUNT_CSM'); ?> </option>
														<option value="2" <?php if($csmTemplate == '2') echo "selected=selected"; ?>> <?php _e('Image','WEBHUNT_CSM'); ?> </option>
														<option disabled> <?php _e('Flat color     (mp3 audio) - Avaliable in PRO','WEBHUNT_CSM'); ?> </option>
														<option disabled> <?php _e('Image          (mp3 audio) - Avaliable in PRO','WEBHUNT_CSM'); ?> </option>
														<option disabled> <?php _e('Slideshow - Avaliable in PRO','WEBHUNT_CSM'); ?> </option>
														<option disabled> <?php _e('Slideshow      (mp3 audio) - Avaliable in PRO','WEBHUNT_CSM'); ?> </option>
														<option disabled> <?php _e('Slideshow      (zoom) - Avaliable in PRO','WEBHUNT_CSM'); ?> </option>
														<option disabled> <?php _e('Slideshow      (zoom, mp3 audio) - Avaliable in PRO','WEBHUNT_CSM'); ?> </option>
														<option disabled> <?php _e('Html5 Video    (mute) - Avaliable in PRO','WEBHUNT_CSM'); ?> </option>
														<option disabled> <?php _e('Html5 Video    (video audio) - Avaliable in PRO','WEBHUNT_CSM'); ?> </option>
														<option disabled> <?php _e('Html5 Video   (mp3 audio) - Avaliable in PRO','WEBHUNT_CSM'); ?> </option>
														<option disabled> <?php _e('Youtube Video (mute) - Avaliable in PRO','WEBHUNT_CSM'); ?> </option>
														<option disabled> <?php _e('Youtube Video (video audio) - Avaliable in PRO','WEBHUNT_CSM'); ?> </option>
														<option disabled> <?php _e('Youtube Video (youtube, mp3 audio) - Avaliable in PRO','WEBHUNT_CSM'); ?> </option>
														<option disabled></option>
													</optgroup>
												</select>
												<i class="arrow double"></i>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
								</div><!-- end .frm-row section -->
								
								<div class="frm-row frm-bg spacer-t30 tDisplySec">
								
									<div class="section colm colm12" style="margin: -10px 0px 10px 0px; border-bottom: 1px dashed #e7e7e7;">
										<h4 style="font: bold 18px Arial, sans-serif;"><?php _e('Color Background Settings','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
									
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Choose Background Color','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm4">
											<label class="field sfcolor">
												<input type="text" id="tBgColor" name="tBgColor" value="<?php echo $tBgColor;?>" class="gui-input options 0">
											</label>
										</div>
									</div><!-- end col section -->
									
								</div><!-- end .frm-row section -->
								
								
								<div class="frm-row frm-bg spacer-t30 tDisplySec">
								
									<div class="col-md-12 options 2">
										<div class="imageupload">
											<div class="panel-heading clearfix" style="margin: -10px 0px 10px 0px; border-bottom: 1px dashed #e7e7e7;">
												<h3 class="panel-title pull-left" style="font: bold 18px Arial, sans-serif;"><?php _e('Upload Background Image','WEBHUNT_CSM'); ?></h3>
											</div>
											<div class="file-tab panel-body" style="display: block;">
												<img src="<?php echo $tBgImage; ?>" alt="Image preview" class="thumbnail" style="max-width: 250px; max-height: 250px">
												<button type="button" id="upload_image_button" class="btn btn-default csm_image_uploader" style="display: inline-block;"><?php _e( 'Upload Image' ); ?></button>
												<input type='hidden' name='tBgImage' id='tBgImage' value='<?php echo $tBgImage; ?>'>
												<button type="button" class="btn btn-default file_img_remove"><?php _e('Remove','WEBHUNT_LPC'); ?></button>
											</div>
										</div>
									</div><!-- end col section -->
									
								</div><!-- end .frm-row section -->
								
								
								<div class="frm-row network-header spacer-t30">
									<div class="colm"></div>
									<div class="section colm colm9" style="margin-bottom: 0px;">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Site Background Overlay Settings','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								</div>
								
								<div class="frm-row frm-bg">
								
									<div class="colm colm12"><!-- Enable Coming Soon -->
										<label class="field-label colm colm3 align-left"><?php _e('Enable Overlay Color','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm8">
											<label class="switch block">
											  <input type="hidden" name="pageOverlay" value="false">
											  <input type="checkbox" name="pageOverlay" id="pageOverlay" value="true" <?php if($pageOverlay == 'true' ) { echo "checked"; } ?>>
											  <span class="switch-label" data-on="ON" data-off="OFF"></span>
											  <span> <?php _e('ON/OFF','WEBHUNT_CSM'); ?> </span>
											</label>
											<p class="medium-text fine-grey"><?php _e('Switch it ON/OFF to enable/disable Site Background Overlay.','WEBHUNT_CSM'); ?></p>
										</div>
									</div><!-- End of "Enable Coming Soon" Section -->
								
									<div class="colm colm12">
										<label class="field-label colm colm3 align-left"><?php _e('Overlay Color','WEBHUNT_CSM'); ?></label>
										<div class="colm colm8">
											<label class="field sfcolor colm6">
												<input type="text" id="pageSecColor" name="pageSecColor" value="<?php echo $pageSecColor;?>" class="gui-input">
											</label>
											<p class="medium-text col8 fine-grey"><?php _e('Overlay color doesnt mean home section background color.<br/> Its overlay color on background.','WEBHUNT_CSM'); ?></p>
										</div>
									</div><!-- end col section -->
									
									<div class="colm colm12">
										<label class="field-label colm colm3 align-left"><?php _e('Overlay Color Opacity','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm4 spacer-t20 spacer-b30">
											<div class="slider-wrapper">
												<div id="spageSecOpacity"></div>
											</div><!-- end .slider-wrapper -->
										</div>
										<div class="colm colm3 spacer-t7">
											<input type="text" name="pageSecOpacity" id="pageSecOpacity" class="slider-text" readonly><span style="color:#f6931f"><?php _e('px','WEBHUNT_CSM'); ?></span> 
										</div>     
									</div> <!-- end col section -->
									
									<div class="colm colm12  spacer-b20">
										<label class="field-label colm colm3 align-left"><?php _e('Home Display Style','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm8 spacer-t7">
											<div class="option-group field">
												<label class="option">
													<input class="options responsive" type="radio" checked>
													<span class="radio"></span> <?php _e('Full Width','WEBHUNT_CSM'); ?>
												</label>
												<label class="option">
													<input class="options responsive" type="radio" disabled>
													<span class="radio"></span> <?php _e('Half Left','WEBHUNT_CSM'); ?>
												</label>
												<label class="option">
													<input class="options responsive" type="radio" disabled>
													<span class="radio"></span> <?php _e('Half Right','WEBHUNT_CSM'); ?>
												</label>
											</div>
											<p class="medium-text spacer-t7"> <a href="https://www.webhuntinfotech.com/plugin/coming-soon-master-pro/" target="_blank" style="color: #ef4238;"><?php _e('Half Left & Half Right options avaliable in <b>Pro Version</b> only.','WEBHUNT_CSM'); ?></a></p>
										</div>
									</div> <!-- end col section -->

								</div><!-- end .frm-row section -->
								
								
								<div class="frm-row network-header spacer-t30">
									<div class="section colm colm9" style="margin-bottom: 0px;">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Template Background Animation','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								</div>
								<div class="frm-row frm-bg">
									<div class="col-md-12">
										<a href="https://www.webhuntinfotech.com/plugin/coming-soon-master-pro/" target="_blank"><img src="<?php echo  WEBHUNT_CSM_PLUGIN_URL.'dist/img/pro-features/background-animation.jpg'; ?>" alt="color-schemes" style="width:100%; height:auto;" data-pin-nopin="true"></a>
										<h4><a href="https://www.webhuntinfotech.com/plugin/coming-soon-master-pro/" target="_blank" style="color: #ef4238;"><?php _e('These features avaliable in <b>Pro Version</b>, click here to unlock these features.','WEBHUNT_CSM'); ?></a></h4>
									</div><!-- end col section -->
								</div><!-- end .frm-row section -->
								
							</div><!-- /.col -->
						</div><!-- end .frm-row section --> 
					</div><!-- end .form-body section -->
					<div class="error-notify"></div>
					<div class="form-footer">
						<input type="button" class="button btn-primary" onclick="wh_csm_save_data('templates')" value="<?php _e('Save Changes','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_data('templates')" value="<?php _e('Reset Section','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_all_data()" value="<?php _e('Reset All','WEBHUNT_CSM'); ?>">
					</div><!-- end .form-footer section -->
				</form>
				
			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->

<script>
	jQuery(document).ready(function(jQuery){
		
		templateChanged(<?php echo $csmTemplate; ?>);
		
		jQuery("#csmTemplate").change(function () {     
			templateChanged(jQuery(this).val());
		});
	});	

	function templateChanged(template){
		jQuery('#cms_plugin_options_templates .options:not(.' + template + ')').parents('.tDisplySec').hide();
		jQuery('#cms_plugin_options_templates .options.' + template).parents('.tDisplySec').show();
	}	
</script>