<!-- Copy Right Settings panel content --- >
<!----------------------------------------> 	

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php _e('Copyright Settigns','WEBHUNT_CSM'); ?>
    <small><?php _e('Coming Soon Master','WEBHUNT_CSM'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-copyright"></i> <?php _e('Copyright Settings','WEBHUNT_CSM'); ?></a></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
   <body class="woodbg">
		<div class="smart-wrap">
			<div class="smart-forms smart-container wrap-2">
				
				<form method="post" name="myform" id="cms_plugin_options_copyright">
					<div class="form-body">

						<div class="frm-row">
							<div class="col-md-12">
							
								<div class="frm-row network-header">
									<div class="colm"></div>
									<div class="section colm colm9">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('COPYRIGHT SETTINGS','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								</div>	

								<div class="frm-row frm-bg">
								
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Copyright Text','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="copyrightText" id="copyrightText" class="gui-input" placeholder="Enter Contact Section Title" value="<?php echo $copyrightText; ?>" >
												<span class="field-icon"><i class="fa fa-copyright"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Developed by Link Text','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="developedByText" id="developedByText" class="gui-input" placeholder="Enter Contact Section Title" value="<?php echo $developedByText; ?>" >
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Developed by Link','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="developedByLink" id="developedByLink" class="gui-input" placeholder="Enter Contact Section Title" value="<?php echo $developedByLink; ?>" >
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
						<input type="button" class="button btn-primary" onclick="wh_csm_save_data('copyright')" value="<?php _e('Save Changes','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_data('copyright')" value="<?php _e('Reset Section','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_all_data()" value="<?php _e('Reset All','WEBHUNT_CSM'); ?>">
					</div><!-- end .form-footer section -->
				</form>
				
			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->