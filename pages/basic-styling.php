<!-- Basic Styling Settings panel content --- >
<!----------------------------------------> 	

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php _e('BASIC STYLING','WEBHUNT_CSM'); ?>
    <small><?php _e('Coming Soon Master','WEBHUNT_CSM'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-paint-brush"></i> <?php _e('Basic Styling','WEBHUNT_CSM'); ?></a></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
   <body class="woodbg">
		<div class="smart-wrap">
			<div class="smart-forms smart-container wrap-2">
				
				<form method="post" name="myform" id="cms_plugin_options_basic_styling">
					<div class="form-body">
					
						<div class="frm-row">
							<div class="col-md-12">
							
								<div class="frm-row network-header">
									<div class="colm"></div>
									<div class="section colm colm9">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Preloader Settings','WEBHUNT_CSM'); ?></h4>
									</div>
								</div>	

								<div class="frm-row frm-bg">
								
									<div class="colm colm12"><!-- Enable Preloader -->
										<label class="field-label colm colm3 align-left"><?php _e('Enable Preloader','WEBHUNT_CSM'); ?> :</label>
										<div class="section colm colm8">
											<label class="switch block">
											  <input type="hidden" name="enablePreloader" value="false">
											  <input type="checkbox" name="enablePreloader" id="enablePreloader" value="true" <?php if($enablePreloader == 'true' ) { echo "checked"; } ?>>
											  <span class="switch-label" data-on="ON" data-off="OFF"></span>
											  <span> <?php _e('ON/OFF','WEBHUNT_CSM'); ?> </span>
											</label>
											<p class="medium-text fine-grey"><?php _e('Switch it ON/OFF to enable/disable preloading effect.','WEBHUNT_CSM'); ?></p>
										</div>
									</div><!-- End of "Enable Preloader" Section -->
									
									<div class="colm colm12">
										<label class="field-label colm colm3 align-left prepend-icon"><?php _e('Preloder Text','WEBHUNT_CSM'); ?> :</label>
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="csmPreloaderText" id="csmPreloaderText" class="gui-input" placeholder="Enter the text will display with preloader" value="<?php echo $csmPreloaderText; ?>" >
												<span class="field-icon"><i class="fa fa-pencil"></i></span>
											</label>
											<p class="medium-text fine-grey"><?php _e('This text will be display under the preloader.','WEBHUNT_CSM'); ?></p>
										</div><!-- end section -->
									</div><!-- end col section -->
									
								</div><!-- end .frm-row section -->
								
								<div class="frm-row network-header spacer-t30">
									<div class="colm"></div>
									<div class="section colm colm9">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Plugin Color Schemes','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								</div>
								
								<div class="frm-row frm-bg">

									<div class="colm colm12 spacer-b20">
										<a href="https://www.webhuntinfotech.com/plugin/coming-soon-master-pro/" target="_blank"><img src="<?php echo  WEBHUNT_CSM_PLUGIN_URL.'dist/img/pro-features/color-schemes.jpg'; ?>" alt="color-schemes" style="width:100%; height:auto;" data-pin-nopin="true"></a>
										<h4><a href="https://www.webhuntinfotech.com/plugin/coming-soon-master-pro/" target="_blank" style="color: #ef4238;"><?php _e('These features avaliable in <b>Pro Version</b>, click here to unlock these features.','WEBHUNT_CSM'); ?></a></h4>
									</div><!-- end col section -->

								</div><!-- end .frm-row section -->
								
								
								<div class="frm-row network-header spacer-t30">
									<div class="colm"></div>
									<div class="section colm colm9">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Custom CSS','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								</div>
								
								<div class="frm-row frm-bg">
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Custom CSS Editor','WEBHUNT_CSM'); ?> :</label>
										<div class="section colm colm9">
											<label class="field">
												<textarea class="gui-textarea" id="csmCssEditor" name="csmCssEditor" placeholder="Enter your Custom CSS"><?php echo $csmCssEditor; ?></textarea>
											</label>
											<p class="medium-text fine-grey"><?php _e('Use custom css to customize front end template.','WEBHUNT_CSM'); ?></p>
										</div>
									</div><!-- end col section -->
								</div><!-- end .frm-row section -->
									
							</div><!-- /.col -->
						</div><!-- end .frm-row section --> 
					</div><!-- end .form-body section -->
					<div class="error-notify"></div>
					<div class="form-footer">
						<input type="button" class="button btn-primary" onclick="wh_csm_save_data('basic_styling')" value="<?php _e('Save Changes','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_data('basic_styling')" value="<?php _e('Reset Section','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_all_data()" value="<?php _e('Reset All','WEBHUNT_CSM'); ?>">
					</div><!-- end .form-footer section -->
				</form>
				
			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->