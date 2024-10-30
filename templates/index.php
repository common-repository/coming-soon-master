<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9 no-js" lang="en"><![endif]-->
<!--[if gt IE 9 | !IE]><!-->
<html class="no-js" lang="en">
<?php
require_once(plugin_dir_path( __FILE__ ).'../functions/get-save-data.php');	
?>
<!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $meta_title; ?></title>
  <meta name="description" content="<?php echo $meta_description; ?>">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="apple-touch-icon" href="<?php echo WEBHUNT_CSM_PLUGIN_URL.'templates/assets/img/apple-touch-icon.png'; ?>">
  <?php if($enableFavicon == 'true' ) { ?>
  <link rel="icon" href="<?php echo $favicon; ?>">
  <?php } ?>
  <link rel="stylesheet" href="<?php echo WEBHUNT_CSM_PLUGIN_URL.'templates/assets/css/bootstrap.min.css'; ?>" />
  <link rel='stylesheet' href="<?php echo WEBHUNT_CSM_PLUGIN_URL.'templates/assets/css/vendor.css'; ?>" />
  <link rel='stylesheet' href="<?php echo WEBHUNT_CSM_PLUGIN_URL.'templates/assets/css/blue.css'; ?>" id="theme">
  <?php
	require_once(plugin_dir_path( __FILE__ ).'assets/css/custom.php'); 
  ?>      
  <script>
		var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
  </script>

</head>
<body>
  <div class="site-loader">
  <?php if( $enablePreloader == "true"){ ?>
    <div class="site-loader-spinner"></div>
    <div class="site-loader-text"><?php echo $csmPreloaderText; ?></div> <!-- site loader text -->
  <?php } ?>	
  </div> <!-- .site-loader -->

  <main class="site-main">
    <div id="home" class="home">
      <div id="particles-js" class="site-bg">
        <div class="site-bg-img"></div>
        <div class="site-bg-overlay"></div>
        <div class="site-bg-animation"></div>
      </div> <!-- .site-bg -->

      <div class="home-wrap">
        <div class="home-tb">
		
		<?php if($enableLogo == "true"){ ?>
          <header class="home-header">
            <div class="container home-container">
              <div class="row">
                <div class="col-xs-12">
                  <a class="home-header-logo animate" data-animate="slideUpIn" data-animate-delay="350" href="<?php echo $logoLinkURL ? $logoLinkURL : '#'; ?>" target="_blank">
                    <img src="<?php echo $csmLogoURL; ?>" alt="logo">
                  </a> <!-- .home-logo -->
                </div>
              </div>
            </div>
          </header> <!-- .home-header -->
		<?php } ?>
		
          <div class="home-content">
            <div class="container home-container">
              <div class="row">
                <div class="col-xs-12">
                  <h1 class="home-title animate" data-animate="slideUpIn" data-animate-delay="0"><?php echo $csmHomeTitle; ?></h1> <!-- display only when countdown disable -->
                  <div id="countdown" class="countdown animate" data-animate="slideUpIn" data-animate-delay="0">
                    <div class="dash-primary">
                      <div class="dash days_dash">
                        <div class="digit">0</div> <!-- remove this line for double figures -->
                        <div class="digit">0</div>
                        <div class="digit">0</div>
                        <span class="dash_title"><?php echo $dayString; ?></span>
                      </div>
                    </div> <!-- .dash-primary -->

                    <div class="dash-secondary">
                      <div class="dash hours_dash">
                        <span class="dash_title"><?php echo $hoursString; ?></span>
                        <div class="digit">0</div>
                        <div class="digit">0</div>
                      </div>

                      <div class="dash minutes_dash">
                        <span class="dash_title"><?php echo $minutesString; ?></span>
                        <div class="digit">0</div>
                        <div class="digit">0</div>
                      </div>

                      <div class="dash seconds_dash">
                        <span class="dash_title"><?php echo $secondsString; ?></span>
                        <div class="digit">0</div>
                        <div class="digit">0</div>
                      </div>
                    </div> <!-- .dash-secondary -->
                  </div> <!-- .countdown -->
                  <p class="home-lead animate" data-animate="slideUpIn" data-animate-delay="150"><?php echo $homeDesc; ?></p>
                </div>
              </div>
            </div>
          </div> <!-- .home-content -->

          <footer class="home-footer">
            <div class="container home-container">
              <div class="row">
                <div class="col-xs-12">
                  <div class="btn-wrap animate" data-animate="slideUpIn" data-animate-delay="150">
					<?php if($enableReadBtn == 'true'){ ?>
						<a class="btn btn-default btn-outline" href="#info" data-toggle="info"><?php echo $readMoreB; ?></a>
					<?php } ?>
					<?php if($enableNewsBtn == 'true'){ ?>
						<a class="btn btn-primary" href="#" data-mfp-src="#subscribe" data-mfp-type="inline" data-mfp-effect="mfp-effect"><?php echo $newsLSubB; ?></a>
					<?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </footer> <!-- .home-footer -->
		  <div class="home-social">
			  <div class="social">
					<?php if($sFacebook != "") {?><a href="<?php echo $sFacebook; ?>" target="_blank"><i class="fa fa-facebook fa-2x fa-social"></i></a> <?php } ?>
                    <?php if($sTwitter != "") {?><a href="<?php echo $sTwitter; ?>" target="_blank"><i class="fa fa-twitter fa-2x fa-social"></i></a><?php } ?>
                    <?php if($sLinkedin != "") {?><a href="<?php echo $sLinkedin; ?>" target="_blank"><i class="fa fa-linkedin fa-2x fa-social"></i></a><?php } ?>
					<?php if($sGooglePlus != "") {?><a href="<?php echo $sGooglePlus; ?>" target="_blank"><i class="fa fa-google-plus fa-2x fa-social"></i></a><?php } ?>
					<?php if($sYoutube != "") {?><a href="<?php echo $sYoutube; ?>" target="_blank"><i class="fa  fa-youtube-play fa-2x fa-social"></i></a><?php } ?>
					<?php if($sPinterest != "") {?><a href="<?php echo $sPinterest; ?>" target="_blank"><i class="fa fa-pinterest-p fa-2x fa-social"></i></a><?php } ?>
			  </div>
		  </div>

          <div id="subscribe" class="subscribe mfp-inline mfp-hide mfp-close-dark"> <!-- to change the close button color, change `mfp-close-dark` to `mfp-close-light` -->
            <div class="card">
              <div class="card-bottom">
                <div class="card-media">
                  <img src="<?php echo $subsImage; ?>" alt="Subscribe Image">
                </div>
                <div class="card-block bg-white">
                  <h3 class="card-block-title"><?php echo $SubsTitle; ?></h3>
                  <p><?php echo $SubsDescription; ?></p>
                  <form class="form-default" id="subscribeForm" method="post" novalidate="novalidate">
					<input type="hidden" name="action" value="subscribeform"/>
                    <div class="form-group required bg-light">
                      <label class="form-label" for="subscribeEmail"><?php echo $subsFieldTitle; ?></label>
                      <input class="form-control required" id="subscribeEmail" type="text" name="email">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"><?php echo $subsButtonText; ?></button>
                    <div class="form-notify"></div>
					<div id="subsSpinner"></div>
                  </form>
                </div>
              </div>
            </div>
          </div> <!-- #subscribe -->
        </div>
      </div> <!-- .home-wrap -->
    </div> <!-- #home -->
    <div id="info" class="info">
      <div class="section-wrap">
        <button title="Close (Esc)" type="button" class="info-close" data-dismiss="info">×</button>
        <div class="section-wrap-inner scroll-y">

		<!-- About US Section -->
		<?php if($enableAboutUs == "true"){ ?>
          <div id="about" class="about section">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <div class="section-heading">
                    <h2 class="section-heading-title">
                      <span class="section-heading-title-secondary"><?php echo $aboutusBgTilte; ?></span>
                      <span class="section-heading-title-primary"><?php echo $aboutusTilte; ?></span>
                    </h2>
                  </div> <!-- .section-heading -->

                  <div class="section-content">
                    <p class="text-lead content-vr-2"><?php echo $aboutusDesc; ?></p>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12">
                        <?php echo $aboutusContent; ?>
                      </div>
                    </div>
                  </div> <!-- .section-content -->
                </div>
              </div>
            </div>
          </div> <!-- #about -->
		<?php }?>
		
		<!-- Contact Us Section -->
		<?php if($enableContactUs == "true"){ ?>
          <div id="contact" class="contact section">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <div class="section-heading">
                    <h2 class="section-heading-title">
                      <span class="section-heading-title-secondary"><?php echo $contactUsBgTilte; ?></span>
                      <span class="section-heading-title-primary"><?php echo $contactUsTilte; ?></span>
                    </h2>
                  </div> <!-- .section-heading -->

                  <div class="section-content">
                    <p class="text-lead content-vr-2"><?php echo $contactUsDesc; ?></p>
                    <div class="row">
					<?php if($googleMapUrl != ""){ ?>
					  <div class="col-sm-7 google-map">
						<iframe src="<?php echo $googleMapUrl; ?>" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					  </div>
					<?php } ?>  
                      <div class="col-sm-5">
					  <?php if( $contactUsEmail != "" ){ ?>
                        <div class="contact-info well">
                          <div class="media">
                            <div class="media-left">
                              <img src="<?php echo WEBHUNT_CSM_PLUGIN_URL.'templates/assets/img/item/icon-email.png'; ?>" alt="">
                            </div>
                            <div class="media-body">
                              <h4 class="media-heading">Write us</h4>
                              <p><?php echo $contactUsEmail; ?></p>
                            </div>
                          </div>
                        </div> <!-- .contact-info -->
					  <?php } 
					  if( $contactUsNumber != "" ){ ?>
                        <div class="contact-info well">
                          <div class="media">
                            <div class="media-left">
                              <img src="<?php echo WEBHUNT_CSM_PLUGIN_URL.'templates/assets/img/item/icon-phone.png'; ?>" alt="">
                            </div>
                            <div class="media-body">
                              <h4 class="media-heading">Call us</h4>
                              <p><?php echo $contactUsNumber; ?></p>
                            </div>
                          </div>
                        </div> <!-- .contact-info -->
					  <?php } 
					  if( $contactUsAddress != "" ){ ?>
                        <div class="contact-info well">
                          <div class="media">
                            <div class="media-left">
                              <img src="<?php echo WEBHUNT_CSM_PLUGIN_URL.'templates/assets/img/item/icon-marker.png'; ?>" alt="">
                            </div>
                            <div class="media-body">
                              <h4 class="media-heading">Location</h4>
                              <p><?php echo $contactUsAddress; ?></p>
                            </div>
                          </div>
                        </div> <!-- .contact-info -->
					  <?php } ?>
                      </div>
                    </div>
                  </div> <!-- .section-content -->
                </div>
              </div>
            </div>
          </div> <!-- .contact -->
		<?php } ?>  

          <footer id="siteFooter" class="site-footer section">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-7">
                  <p class="site-footer-copyright"><span><?php echo $copyrightText; ?></span><a href="<?php echo $developedByLink; ?>" target="_blank"> <?php echo $developedByText; ?></a></p> <!-- copyright info -->
                </div>

                <div class="col-xs-12 col-sm-5">
                  <ul class="site-footer-social-list">
                    <?php if($sFacebook != "") {?><li><a href="<?php echo $sFacebook; ?>" target="_blank"><i class="fa fa-fw fa-facebook"></i></a></li> <?php } ?>
                    <?php if($sTwitter != "") {?><li><a href="<?php echo $sTwitter; ?>" target="_blank"><i class="fa fa-fw fa-twitter"></i></a></li><?php } ?>
                    <?php if($sLinkedin != "") {?><li><a href="<?php echo $sLinkedin; ?>" target="_blank"><i class="fa fa-fw fa-linkedin"></i></a></li><?php } ?>
					<?php if($sGooglePlus != "") {?><li><a href="<?php echo $sGooglePlus; ?>" target="_blank"><i class="fa fa-fw fa-google-plus"></i></a></li><?php } ?>
					<?php if($sYoutube != "") {?><li><a href="<?php echo $sYoutube; ?>" target="_blank"><i class="fa fa-fw fa-youtube-play"></i></a></li><?php } ?>
					<?php if($sPinterest != "") {?><li><a href="<?php echo $sPinterest; ?>" target="_blank"><i class="fa fa-fw fa-pinterest-p"></i></a></li><?php } ?>
                  </ul> <!-- .site-footer-social-list -->
                </div>
              </div>
            </div>
          </footer> <!-- .site-footer -->
        </div>
      </div> <!-- .section-wrap -->
    </div> <!-- #info -->
  </main> <!-- .site-main -->
  <script src='<?php echo WEBHUNT_CSM_PLUGIN_URL.'templates/assets/js/vendor/jquery-1.11.3.min.js'; ?>'></script> <!-- jquery -->
  <script src='<?php echo WEBHUNT_CSM_PLUGIN_URL.'templates/assets/js/vendor/bootstrap.min.js'; ?>'></script>     <!-- bootstrap -->
  <script src='<?php echo WEBHUNT_CSM_PLUGIN_URL.'templates/assets/js/vendor/plugin.js'; ?>'></script>            <!-- plugin -->
  <?php require_once(plugin_dir_path( __FILE__ ).'assets/js/variable.php');	?> 
  <script src='<?php echo WEBHUNT_CSM_PLUGIN_URL.'templates/assets/js/main.js'; ?>'></script>                     <!-- main script -->
	
  <!-- Google Analytics Script. -->
  <script>
      <?php echo $google_analytics; ?>
  </script>
  <!-- /script -->
</body>
</html>