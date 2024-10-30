<!-- Dashboard Settings panel content --- >
<!----------------------------------------> 
<script type="text/javascript">
	jQuery(document).ready(function(){
		/* Type paste - pickers
		------------------------------------------------- */
		jQuery("#tBgColor, #csmCustomColor, #pageSecColor").spectrum({
			preferredFormat: "hex6",
			showButtons: false,
			clickoutFiresChange: true
		});

		jQuery("#tBgColor, #csmCustomColor, #pageSecColor").blur(function() {
			jQuery(this).spectrum("set", jQuery(this).val());
		});

		/* Show all inputs with a colorpicker || hidden by default
		--------------------------------------------------------------- */
		jQuery("#tBgColor, #csmCustomColor, #pageSecColor").show();
	});
</script>
<?php 
function check_checkboxes($isTrue) {
    echo $isTrue ? 'checked="checked"' : '';
}	
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php _e('DASHBOARD','WEBHUNT_CSM'); ?>
    <small><?php _e('Coming Soon Master','WEBHUNT_CSM'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> <?php _e('Dashboard','WEBHUNT_CSM'); ?></a></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
   <body class="woodbg">
		<div class="smart-wrap">
			<div class="smart-forms smart-container wrap-2">
				<form method="post" name="myform" id="cms_plugin_options_dashboard">
					
					<div class="form-body">

						<div class="frm-row">
							<div class="col-md-12">

								<div class="frm-row network-header">
									<div class="section col-md-12">
										<img src="<?php echo  WEBHUNT_CSM_PLUGIN_URL.'dist/img/dashboard-icon.png'; ?>" alt="dashboard-icon" data-pin-nopin="true">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('DASHBOARD SETTINGS','WEBHUNT_CSM'); ?></h4>
									</div>
								</div>

								<div class="frm-row frm-bg">
									<div class="col-md-12"><!-- Enable Coming Soon -->
										<label class="field-label colm colm3 align-left"><?php _e('Enable Coming Soon ','WEBHUNT_CSM'); ?>:</label>
										<div class="section colm colm8">
											<label class="switch block">
											  <input type="hidden" name="csm_status" value="false">
											  <input type="checkbox" name="csm_status" id="csm_status" value="true" <?php if($csm_status == 'true' ) { echo "checked"; } ?>>
											  <span class="switch-label" data-on="ON" data-off="OFF"></span>
											  <span> <?php _e(' ON/OFF ','WEBHUNT_CSM'); ?> </span>
											</label>
											<p class="medium-text fine-grey"><?php _e('Switch it ON/OFF to enable/disable Coming Soon Mode.','WEBHUNT_CSM'); ?></p>
										</div>
									</div><!-- End of "Enable Coming Soon" Section -->
								</div>
								
								
								<div class="frm-row frm-bg">
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Skip Page For ','WEBHUNT_CSM'); ?>:</label>
										<div class="section colm colm8">
											<label class="field option block">
												<input class="options responsive" type="checkbox" name="skipfor_user[]"  value="administrator" <?php check_checkboxes(in_array('administrator', $skipfor_user)); ?>>
												<span class="checkbox"></span> <?php _e('Administrators','WEBHUNT_CSM'); ?>
											</label>
											<label class="field option block spacer-t10">
												<input class="options responsive" type="checkbox" name="skipfor_user[]"  value="editor" <?php check_checkboxes(in_array('editor', $skipfor_user)); ?>>
												<span class="checkbox"></span> <?php _e('Editors','WEBHUNT_CSM'); ?>
											</label>
											<label class="field option block spacer-t10">
												<input class="options responsive" type="checkbox" name="skipfor_user[]"  value="subscriber" <?php check_checkboxes(in_array('subscriber', $skipfor_user)); ?>>
												<span class="checkbox"></span> <?php _e('Subscribers','WEBHUNT_CSM'); ?>
											</label>
											<p class="medium-text fine-grey spacer-t10"><?php _e('Select user roles to skip maintenance mode/ coming soon page.','WEBHUNT_CSM'); ?></p>
										</div>
									</div>
								</div>
								
								<div class="frm-row frm-bg">
									<div class="col-md-12">
										<label class="field-label colm colm3 align-left"><?php _e('Skip Page for These IPs ','WEBHUNT_CSM'); ?>:</label>
										<div class="section colm colm7">
											<label class="field">
												<textarea class="gui-textarea" id="whitelisted_ips" name="whitelisted_ips" placeholder="Whitelist IP addresses to skip maintenance mode page" ><?php echo $whitelisted_ips; ?></textarea>
											</label>
											<p class="medium-text fine-grey"><?php _e('Type only one IP address in a line.','WEBHUNT_CSM'); ?></br><?php _e('Whitelist IP addresses to skip maintenance mode/ coming soon page.','WEBHUNT_CSM'); ?></p>
										</div>
									</div>
								</div>

							</div><!-- /.col -->
						</div><!-- end .frm-row section --> 
					</div><!-- end .form-body section -->
					<div class="error-notify"></div>
					<div class="form-footer">
						<input type="button" class="button btn-primary" onclick="wh_csm_save_data('dashboard')" value="<?php _e('Save Changes','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_data('dashboard')" value="<?php _e('Reset Section','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_all_data()" value="<?php _e('Reset All','WEBHUNT_CSM'); ?>">
					</div><!-- end .form-footer section -->
				</form>

			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->