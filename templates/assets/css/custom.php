<style>
	<?php echo $csmCssEditor; ?>
	
	@media (min-width: 992px){
		.home-content {
			<?php if($enableLogo == "true"){?>	
				padding: 100px 0 180px !important;
			<?php } else{ ?>
				padding: 40px 0 180px !important;
			<?php } ?>
		}
		
		.home-header-logo img {
			width: <?php echo $logoWidth; ?>px;
			height: <?php echo $logoHeight; ?>px;
		}
	}

	.is-site-bg-img .site-bg-img {
		background-image: url("<?php echo esc_url($tBgImage); ?>") !important;
	}
</style>