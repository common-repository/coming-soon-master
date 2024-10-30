<!-- Button Settings panel content --- >
<!----------------------------------------> 

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php _e('BUTTON SETTINGS','WEBHUNT_CSM'); ?>
    <small><?php _e('Coming Soon Master','WEBHUNT_CSM'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-comment"></i> <?php _e('Settings','WEBHUNT_CSM'); ?></a></li>
    <li class="active"><?php _e('Button Settings','WEBHUNT_CSM'); ?></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
   <body class="woodbg">
		<div class="smart-wrap">
			<div class="smart-forms smart-container wrap-2">
				
				<form method="post" name="myform" id="cms_plugin_options_button">
					<div class="form-body">
						
						<div class="frm-row">
							<div class="col-md-12">
								
								<div class="frm-row network-header">
									<div class="section col-md-9" style="margin-bottom: 0px;">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Read More Button Setting','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								</div>
								
								<div class="frm-row frm-bg">
								
									<div class="colm colm12">
										<label class="field-label colm colm3 align-left"><?php _e('Enable Button','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7 spacer-b10">
											<label class="switch block">
											  <input type="hidden" name="enableReadBtn" value="false">
											  <input type="checkbox" name="enableReadBtn" id="enableReadBtn" value="true" <?php if($enableReadBtn == 'true' ) { echo "checked"; } ?>>
											  <span class="switch-label" data-on="ON" data-off="OFF"></span>
											  <span> <?php _e('ON/OFF','WEBHUNT_CSM'); ?> </span>
											</label>
											<p class="medium-text fine-grey"><?php _e('Switch it ON/OFF to enable/disable Read More Button.','WEBHUNT_CSM'); ?></p>
										</div><!-- end section -->
									</div><!-- end col section -->

									<div class="colm colm12">
										<label class="field-label colm colm3 align-left"><?php _e('Button Text','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm5">
											<label class="field prepend-icon">
												<input type="text" name="readMoreB" id="readMoreB" class="gui-input" placeholder="Read More" value="<?php echo $readMoreB; ?>">
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
								</div>
								
								
								<div class="frm-row network-header spacer-t30">
									<div class="section col-md-9" style="margin-bottom: 0px;">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Newlatter Subscription Form Button','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								</div>
								
								<div class="frm-row frm-bg">
								
									<div class="colm colm12">
										<label class="field-label colm colm3 align-left"><?php _e('Enable Button','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7 spacer-b10">
											<label class="switch block">
											  <input type="hidden" name="enableNewsBtn" value="false">
											  <input type="checkbox" name="enableNewsBtn" id="enableNewsBtn" value="true" <?php if($enableNewsBtn == 'true' ) { echo "checked"; } ?>>
											  <span class="switch-label" data-on="ON" data-off="OFF"></span>
											  <span> <?php _e('ON/OFF','WEBHUNT_CSM'); ?> </span>
											</label>
											<p class="medium-text fine-grey"><?php _e('Switch it ON/OFF to enable/disable Newlatter Button.','WEBHUNT_CSM'); ?></p>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="colm colm12">
										<label class="field-label colm colm3 align-left"><?php _e('Button Text','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm5">
											<label class="field prepend-icon">
												<input type="text" name="newsLSubB" id="newsLSubB" class="gui-input" placeholder="Notify Me" value="<?php echo $newsLSubB; ?>">
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
											<p class="medium-text fine-grey"><?php _e('This button will be display when you enable newsletter option.','WEBHUNT_CSM'); ?></p>
										</div><!-- end section -->
									</div><!-- end col section -->
	
								</div><!-- end .frm-row section -->
									
							</div><!-- /.col -->
						</div><!-- end .frm-row section --> 
					</div><!-- end .form-body section -->
					<div class="error-notify"></div>
					<div class="form-footer">
						<input type="button" class="button btn-primary" onclick="wh_csm_save_data('button')" value="<?php _e('Save Changes','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_data('button')" value="<?php _e('Reset Section','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_all_data()" value="<?php _e('Reset All','WEBHUNT_CSM'); ?>">
					</div><!-- end .form-footer section -->
				</form>
				
			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->