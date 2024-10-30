<!-- Social Settings panel content --- >
<!----------------------------------------> 

<!-- Social Profile -->
<section class="content-header">
  <h1>
    <?php _e('SOCIAL PROFILES','WEBHUNT_CSM'); ?>
    <small><?php _e('Coming Soon Master','WEBHUNT_CSM'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-twitter"></i> <?php _e('Social Profile','WEBHUNT_CSM'); ?></a></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
   <body class="woodbg">
		<div class="smart-wrap">
			<div class="smart-forms smart-container wrap-2">
				
				<form method="post" name="myform" id="cms_plugin_options_social">
					<div class="form-body">
					
						<div class="frm-row">
							<div class="col-md-12">
							
								<div class="frm-row network-header">
									<div class="section colm">
											<img src="<?php echo  WEBHUNT_CSM_PLUGIN_URL.'dist/img/Twitter.png'; ?>" alt="dashboard-icon" style="margin-top: 5px; padding:0px;" data-pin-nopin="true">
										</div><!-- end section -->
										<div class="section colm colm9">
											<h4 style="font: bold 22px Arial, sans-serif;"><?php _e('SOCIAL PROFILES','WEBHUNT_CSM'); ?></h4>
										</div><!-- end section -->
								</div>	

								<div class="frm-row frm-bg">
									<div class="col-md-12">
										<label class="field-label colm colm2 align-left"><?php _e('Facebook','WEBHUNT_CSM'); ?> :</label>
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="sFacebook" id="sFacebook" class="gui-input sPaddingL" placeholder="Facebook URL" value="<?php echo $sFacebook; ?>">
												<span class="field-icon" style="background-color: #3b5998; width: 38px;"><i class="fa fa-facebook faFontW"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<label class="field-label colm colm2 align-left"><?php _e('Twitter Id','WEBHUNT_CSM'); ?> :</label>
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="sTwitter" id="sTwitter" class="gui-input sPaddingL" placeholder="Twitter Id" value="<?php echo $sTwitter; ?>">
												<span class="field-icon" style="background-color: #00aced; width: 38px;"><i class="fa fa-twitter faFontW"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">	
										<label class="field-label colm colm2 align-left"><?php _e('Linkedin','WEBHUNT_CSM'); ?> :</label><!-- Enter Title -->
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="sLinkedin" id="sLinkedin" class="gui-input sPaddingL" placeholder="linkedin URL" value="<?php echo $sLinkedin; ?>">
												<span class="field-icon" style="background-color: #007bb6; width: 38px;"><i class="fa fa-linkedin faFontW"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">	
										<label class="field-label colm colm2 align-left"><?php _e('Google Plus','WEBHUNT_CSM'); ?> :</label><!-- Enter Title -->
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="sGooglePlus" id="sGooglePlus" class="gui-input sPaddingL" placeholder="Google Plus URL" value="<?php echo $sGooglePlus; ?>">
												<span class="field-icon" style="background-color: #dd4b39; width: 38px;"><i class="fa fa-google-plus faFontW"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">	
										<label class="field-label colm colm2 align-left"><?php _e('YouTube','WEBHUNT_CSM'); ?> :</label><!-- Enter Title -->
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="sYoutube" id="sYoutube" class="gui-input sPaddingL" placeholder="YouTube URL" value="<?php echo $sYoutube; ?>">
												<span class="field-icon" style="background-color: #bb0000; width: 38px;"><i class="fa fa-youtube-play faFontW"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">	
										<label class="field-label colm colm2 align-left"><?php _e('Pinterest','WEBHUNT_CSM'); ?> :</label><!-- Enter Title -->
										<div class="section colm colm7">
											<label class="field prepend-icon">
												<input type="text" name="sPinterest" id="sPinterest" class="gui-input sPaddingL" placeholder="Pinterest URL" value="<?php echo $sPinterest; ?>">
												<span class="field-icon" style="background-color: #cb2027; width: 38px;"><i class="fa fa-pinterest-p faFontW"></i></span>
											</label>
										</div><!-- end section -->
									</div><!-- end col section -->
									
									<div class="col-md-12">
										<a href="https://www.webhuntinfotech.com/plugin/coming-soon-master-pro/" target="_blank"><img src="<?php echo  WEBHUNT_CSM_PLUGIN_URL.'dist/img/pro-features/social-icons.jpg'; ?>" alt="color-schemes" style="width:100%; height:auto;" data-pin-nopin="true"></a>
										<h4><a href="https://www.webhuntinfotech.com/plugin/coming-soon-master-pro/" target="_blank" style="color: #ef4238;"><?php _e('These features avaliable in <b>Pro Version</b>, click here to unlock these features.','WEBHUNT_CSM'); ?></a></h4>
									</div><!-- end col section -->
	
								</div><!-- end .frm-row section -->
									
							</div><!-- /.col -->
						</div><!-- end .frm-row section --> 
					</div><!-- end .form-body section -->
					<div class="error-notify"></div>
					<div class="form-footer">
						<input type="button" class="button btn-primary" onclick="wh_csm_save_data('social')" value="<?php _e('Save Changes','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_data('social')" value="<?php _e('Reset Section','WEBHUNT_CSM'); ?>">
						<input type="button" class="button btn-primary btn-gray" onclick="wh_csm_reset_all_data()" value="<?php _e('Reset All','WEBHUNT_CSM'); ?>">
					</div><!-- end .form-footer section -->
				</form>
				
			</div><!-- end .smart-forms section -->
		</div><!-- end .smart-wrap section -->
	</body>
</section><!-- /.content -->