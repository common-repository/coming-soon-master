<!-- About Us Settings panel content --- >
<!----------------------------------------> 

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php _e('ABOUT US','WEBHUNT_CSM'); ?>
    <small><?php _e('Coming Soon Master','WEBHUNT_CSM'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-info-circle"></i> <?php _e('About Us Settings','WEBHUNT_CSM'); ?></a></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
   <body class="woodbg">
		<div class="smart-wrap">
			<div class="smart-forms smart-container wrap-2">

				<form method="post" name="myform" id="cms_plugin_options_about_us">
					<div class="form-body">
					
						<div class="frm-row">
							<div class="col-md-12">
							
								<div class="frm-row network-header">
									<div class="colm"></div>
									<div class="section colm colm9">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('ABOUT US','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								</div>

								<div class="frm-row frm-bg">

									<div class="colm colm12">
										<label class="field-label colm colm3 align-left"><?php _e('Enable About us Section','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm8">
											<label class="switch block">
											  <input type="hidden" name="enableAboutUs" value="false">
											  <input type="checkbox" name="enableAboutUs" id="enableAboutUs" value="true" <?php if($enableAboutUs == 'true' ) { echo "checked"; } ?>>
											  <span class="switch-label" data-on="ON" data-off="OFF"></span>
											  <span><?php _e(' ON/OFF ','WEBHUNT_CSM'); ?></span>
											</label>
											<p class="medium-text fine-grey"><?php _e('Switch it ON/OFF to enable/disable About Us Section.','WEBHUNT_CSM'); ?></p>
										</div><!-- end section -->
									</div><!-- end col section -->

									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('About Us Section Title','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="aboutusTilte" id="aboutusTilte" class="gui-input" placeholder="Enter About Us Section Title" value="<?php echo $aboutusTilte; ?>" >
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->

									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Title Background Text','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="aboutusBgTilte" id="aboutusBgTilte" class="gui-input" placeholder="Enter Title Background Text" value="<?php echo $aboutusBgTilte; ?>" >
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->

									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('About Us Description','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field">
												<textarea class="gui-textarea" id="aboutusDesc" name="aboutusDesc" placeholder="Enter About Us Description"><?php echo $aboutusDesc; ?></textarea>
											</label>
										</div>
									</div><!-- end col section -->

								</div><!-- end .frm-row section -->
								
								
								<div class="frm-row network-header spacer-t30">
									<div class="section colm colm9" style="margin-bottom: 0px;">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('About us Content','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								</div>
								
								<div class="frm-row frm-bg">
									<div class="section col-md-12">
										<label class="field">
										<?php $content = $aboutusContent;
										$editor_id = 'aboutusContent';
										$settings = array(
											'editor_height' => 250, // In pixels, takes precedence and has no default value
										);
										wp_editor( $content, $editor_id, $settings );
										?>
										</label>
										<p class="medium-text fine-grey"><?php _e('Put any text, media, html content to display in About Us section.','WEBHUNT_CSM'); ?></p>
									</div><!-- end col section -->
								</div><!-- end .frm-row section -->
	
							</div><!-- /.col -->
						</div><!-- end .frm-row section --> 
					</div><!-- end .form-body section -->
					<div class="error-notify"></div>
					<div class="form-footer">
						<input type="button" class="button btn-primary" onclick="wh_csm_save_data('about_us')" value="<?php _e('Save Changes','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_data('about_us')" value="<?php _e('Reset Section','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_all_data()" value="<?php _e('Reset All','WEBHUNT_CSM'); ?>">
					</div><!-- end .form-footer section -->
				</form>
				
			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->