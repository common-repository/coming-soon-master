<!-- Countdown Settings panel content --- >
<!----------------------------------------> 	

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php _e('COUNTDOWN SETTINGS','WEBHUNT_CSM'); ?>
    <small><?php _e('Coming Soon Master','WEBHUNT_CSM'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-clock-o"></i> <?php _e('Settings','WEBHUNT_CSM'); ?></a></li>
    <li class="active"><?php _e('Countdown Settings','WEBHUNT_CSM'); ?></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
   <body class="woodbg">
		<div class="smart-wrap">
			<div class="smart-forms smart-container wrap-2">
				
				<form method="post" name="myform" id="cms_plugin_options_countdown">
					<div class="form-body">
					
						<div class="frm-row">
							<div class="col-md-12">
							
								<div class="frm-row frm-bg spacer-t10">
								
									<div class="section colm colm12" style="margin: -10px 0px 10px 0px; border-bottom: 1px dashed #e7e7e7;">
										<h4 style="font: bold 18px Arial, sans-serif;"><?php _e('Enable Countdown / Title','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
									
									<div class="colm colm12">
										<div class="section colm colm6">
											<div class="option-group field">
												<label class="option">
													<input type="radio" name="enableCountdown" id="enableCountdown" value="true" <?php if($enableCountdown == "true"){ echo "checked"; } ?>>
													<span class="radio"></span> <?php _e('Count Down','WEBHUNT_CSM'); ?>
												</label>
												<label class="option">
													<input type="radio" name="enableCountdown" id="enableCountdown" value="false" <?php if($enableCountdown == "false"){ echo "checked"; } ?>>
													<span class="radio"></span> <?php _e('Coming Soon Page Title','WEBHUNT_CSM'); ?>
												</label>
											</div>
										</div>
									</div><!-- end col section -->	
									
								</div><!-- end .frm-row section -->
								
								<div class="frm-row network-header spacer-t30 countdown-section">
									<div class="colm"></div>
									<div class="section colm colm9" style="margin-bottom: 0px;">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Count Down Settings','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								</div>
								
								<div class="frm-row frm-bg countdown-section">
								
									<div class="section colm colm12" style="margin: -10px 0px 10px 0px; border-bottom: 1px dashed #e7e7e7;">
										<h4 style="font: bold 18px Arial, sans-serif;"><?php _e('Date & Time Settings','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								
									<div class="colm colm12">
										<label class="field-label colm colm2 align-left"><?php _e('End Date','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm6">
											<label for="datepicker1" class="field prepend-icon">
												<input type="text" id="countdownDate" name="countdownDate" class="gui-input" value="<?php echo $countdownDate; ?>">
												<span class="field-icon"><i class="fa fa-calendar"></i></span>  
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="colm colm12">
										<label class="field-label colm colm2 align-left"><?php _e('End Time','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm6">
											<label for="timepicker1" class="field prepend-icon">
												<input type="text" id="countdownTime" name="countdownTime" class="gui-input" value="<?php echo $countdownTime; ?>">
												<span class="field-icon"><i class="fa fa-clock-o"></i></span>  
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="colm colm12"><!-- Enable UTC -->
										<label class="field-label colm colm2 align-left"><?php _e('Enable UTC','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm8" style="margin-top: 7px">
											<label class="switch block">
											  <input type="hidden" name="utcStatus" value="false">
											  <input type="checkbox" name="utcStatus" id="utcStatus" value="true" disabled>
											  <span class="switch-label" data-on="ON" data-off="OFF"></span>
											  <span> <?php _e('ON/OFF','WEBHUNT_CSM'); ?> </span>
											</label>
											<p class="medium-text"> <a href="https://www.webhuntinfotech.com/plugin/coming-soon-master-pro/" target="_blank" style="color: #ef4238;"><?php _e('<b>Coordinated Universal Time (UTC)</b>. This Feature is avaliable in <b>Pro Version</b> only.','WEBHUNT_CSM'); ?></a></p>
										</div>
									</div><!-- End of "Enable UTC" Section -->
	
								</div><!-- end .frm-row section -->
								
								
								<div class="frm-row frm-bg spacer-t30 countdown-section">
								
									<div class="section colm colm12" style="margin: -10px 0px 10px 0px; border-bottom: 1px dashed #e7e7e7;">
										<h4 style="font: bold 18px Arial, sans-serif;"><?php _e('Language Strings','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								
									<div class="col-md-12">
										<label class="field-label colm colm2 align-left"><?php _e('Days','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="dayString" id="dayString" class="gui-input" placeholder="Enter Your Days Text String" value="<?php echo $dayString; ?>" >
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label colm colm2 align-left"><?php _e('Hours','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="hoursString" id="hoursString" class="gui-input" placeholder="Enter Your Hours Text String" value="<?php echo $hoursString; ?>" >
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label colm colm2 align-left"><?php _e('Minutes','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="minutesString" id="minutesString" class="gui-input" placeholder="Enter Your Minutes Text String" value="<?php echo $minutesString; ?>" >
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label colm colm2 align-left"><?php _e('Seconds','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="secondsString" id="secondsString" class="gui-input" placeholder="Enter Your Seconds Text String" value="<?php echo $secondsString; ?>" >
												<span class="field-icon"><i class="fa fa-edit"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
	
								</div><!-- end .frm-row section -->
								
								<div class="frm-row network-header spacer-t30 title-section">
									<div class="colm"></div>
									<div class="section colm colm9" style="margin-bottom: 0px;">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Coming Soon Page Title Settings','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								</div>
								
								<div class="frm-row frm-bg title-section">
									
									<div class="colm colm12">
										<label class="field-label colm colm3 align-left"><?php _e('Coming Soon Title','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm8">
											<label class="field">
												<textarea class="gui-textarea" id="csmHomeTitle" name="csmHomeTitle" placeholder="Enter Your Coming Soon Page Title Here..."><?php echo $csmHomeTitle; ?></textarea>
											</label>
											<p class="medium-text fine-grey"><?php _e('Use','WEBHUNT_CSM'); ?> <b><?php _e("&lt;span&gt; &lt;/span&gt;","WEBHUNT_CSM"); ?></b> <?php _e('tag to highlight any word in title text.','WEBHUNT_CSM'); ?></p>
										</div>
									</div><!-- end col section -->
	
								</div><!-- end .frm-row section -->
								
								<div class="frm-row network-header spacer-t30">
									<div class="colm"></div>
									<div class="section colm colm9" style="margin-bottom: 0px;">
										<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('Coming Soon Page Description','WEBHUNT_CSM'); ?></h4>
									</div><!-- end section -->
								</div>
								
								<div class="frm-row frm-bg">		
									<div class="colm colm12">
										<label class="field-label colm colm3 align-left"><?php _e('Coming Soon Description','WEBHUNT_CSM'); ?></label>
										<div class="section colm colm8">
											<label class="field">
												<textarea class="gui-textarea" id="homeDesc" name="homeDesc" placeholder="Enter Your Coming Soon Page Description"><?php echo $homeDesc; ?></textarea>
											</label>
										</div>
									</div><!-- end col section -->
								</div><!-- end .frm-row section -->
	
							</div><!-- /.col -->
						</div><!-- end .frm-row section --> 
					</div><!-- end .form-body section -->
					<div class="error-notify"></div>
					<div class="form-footer">
						<input type="button" class="button btn-primary" onclick="wh_csm_save_data('countdown')" value="<?php _e('Save Changes','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_data('countdown')" value="<?php _e('Reset Section','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_all_data()" value="<?php _e('Reset All','WEBHUNT_CSM'); ?>">
					</div><!-- end .form-footer section -->
				</form>
				
			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->
<script>		
jQuery(document).ready(function(){
	switching_between_countdown_title("<?php echo $enableCountdown; ?>");
	
	jQuery("#countdownDate").datepicker({
		numberOfMonths: 1,
		prevText: '<i class="fa fa-chevron-left"></i>',
		nextText: '<i class="fa fa-chevron-right"></i>',			
		showButtonPanel: false
	});
	
	jQuery('#countdownTime').timepicker({
		beforeShow: function(input, inst) {
				var newclass = 'smart-forms'; 
				var smartpikr = inst.dpDiv.parent();
				if (!smartpikr.hasClass('smart-forms')){
					inst.dpDiv.wrap('<div class="'+newclass+'"></div>');
				}
		}					
	});
	
	jQuery( "input[name='enableCountdown']" ).change(function() {
		var value = jQuery("input[name='enableCountdown']:checked").val();
		switching_between_countdown_title(value);
	});
	
});

function switching_between_countdown_title(value){
	if(value == "true"){
		jQuery(".countdown-section").show();
		jQuery(".title-section").hide();
	}
	else{
		jQuery(".countdown-section").hide();
		jQuery(".title-section").show();
	}
}
</script>