<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<div id="csm-body" class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

		<!-- Main Header -->
		<header class="main-header">
			<!-- Logo -->
			<a href="http://www.webhuntinfotech.com/" class="logo">
			  <!-- mini logo for sidebar mini 50x50 pixels -->
			  <span class="logo-mini"><b>C</b>SM</span>
			  <!-- logo for regular state and mobile devices -->
			  <span class="logo-lg"><b><?php _e('Coming ','WEBHUNT_CSM')?></b><?php _e('Soon Master','WEBHUNT_CSM')?></span>
			</a>
			<!-- Header Navbar -->
			<nav class="navbar navbar-static-top" role="navigation">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
				  <span class="sr-only"><?php _e('Toggle navigation','WEBHUNT_CSM')?></span>
				</a>
				<!-- Navbar Right Menu -->
				<div class="navbar-custom-menu">
				  <ul class="nav navbar-nav">
					
					<!-- User Account Menu -->
					<li class="dropdown user user-menu">
					  <!-- Menu Toggle Button -->
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<!-- The user image in the navbar-->
						<img src="<?php echo WEBHUNT_CSM_PLUGIN_URL.'dist/img/webhunt-logo-160x160.jpg'; ?>" class="user-image" alt="User Image"/>
						<!-- hidden-xs hides the username on small devices so only the image appears. -->
						<span class="hidden-xs"><?php _e('WebHunt Infotech','WEBHUNT_CSM')?></span>
					  </a>
					</li>
				  </ul>
				</div>
			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">

				<!-- Sidebar user panel (optional) -->
				<div class="user-panel">
					<div class="pull-left image">
						<img src="<?php echo WEBHUNT_CSM_PLUGIN_URL.'dist/img/webhunt-logo-160x160.jpg'; ?>" class="img-circle" alt="User Image" />
					</div>
					<div class="pull-left info">
						<p style="margin-bottom: 2px;"><?php _e('Powered By','WEBHUNT_CSM')?></p>
						<!-- Status -->
						<a href="https://www.webhuntinfotech.com/" target="_blank" style="COLOR: #e83f33;text-shadow: -2px 1px 2px #000000;font-size: 12px;"> <?php _e('WEBHUNT INFOTECH','WEBHUNT_CSM')?></a>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<ul class="sidebar-menu">
					<li class="header"><?php _e('PLUGIN MENU','WEBHUNT_CSM')?></li>
					<li class="sidebar-tab active" id="dashboard-menu">
						<a href='javascript:loadFile("dashboard")'><i class="fa fa-dashboard"></i> <span><?php _e('Dashboard','WEBHUNT_CSM')?></span></a>
					</li>
					<li class="sidebar-tab" id="templates-menu">
						<a href='javascript:loadFile("templates")'><i class="fa fa-picture-o"></i> <span><?php _e('Templates','WEBHUNT_CSM')?></span></a>
					</li>
					<li class="treeview sidebar-tab">
						<a href="#">
							<i class="fa fa-wrench"></i>
							<span><?php _e('Settings','WEBHUNT_CSM')?></span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li id="seo-menu" class="sidebar-tab"><a href='javascript:loadFile("seo")'><i class="fa fa-line-chart"></i> <?php _e('SEO Settings','WEBHUNT_CSM')?></a></li>
							<li id="logo-menu" class="sidebar-tab"><a href='javascript:loadFile("logo")'><i class="fa fa-file-text-o"></i> <?php _e('Logo Settings','WEBHUNT_CSM')?></a></li>
							<li id="countdown-menu" class="sidebar-tab"><a href='javascript:loadFile("countdown")'><i class="fa fa-clock-o"></i> <?php _e('Countdown Settings','WEBHUNT_CSM')?></a></li>
							<li id="button-menu" class="sidebar-tab"><a href='javascript:loadFile("button")'><i class="fa fa-comment"></i> <?php _e('Button Settings','WEBHUNT_CSM')?></a></li>
						</ul>
					</li>
					<li class="sidebar-tab" id="styling-menu">
						<a href='javascript:loadFile("styling")'><i class="fa fa-paint-brush"></i> <span><?php _e('Basic Styling','WEBHUNT_CSM')?></span></a>
					</li>
					<li class="sidebar-tab" id="aboutus-menu">
						<a href='javascript:loadFile("aboutus")'><i class="fa fa-info-circle"></i> <span><?php _e('About Us','WEBHUNT_CSM')?></span></a>
					</li>
					<li class="sidebar-tab" id="contact-menu">
						<a href='javascript:loadFile("contact")'><i class="fa fa-envelope-o"></i> <span><?php _e('Contact Info','WEBHUNT_CSM')?></span></a>
					</li>
					<li class="treeview sidebar-tab">
						<a href="#">
							<i class="fa fa-flag"></i>
							<span><?php _e('Newsletter And Subscriber Settings','WEBHUNT_CSM')?></span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li id="newsletter-menu" class="sidebar-tab"><a href='javascript:loadFile("newsletter")'><i class="fa fa-newspaper-o"></i> <?php _e('Newsletter Settings','WEBHUNT_CSM')?></a></li>
							<li id="subscription-menu" class="sidebar-tab"><a href='javascript:loadFile("subscription")'><i class="fa fa-key"></i> <?php _e('Subscription Field Settings','WEBHUNT_CSM')?></a></li>
						</ul>
					</li>
					<li class="sidebar-tab" id="social-menu">
						<a href='javascript:loadFile("social")'><i class="fa fa-twitter"></i> <span><?php _e('Social Profile','WEBHUNT_CSM')?></span></a>
					</li>
					<li class="sidebar-tab"  id="copyright-menu">
						<a href='javascript:loadFile("copyright")'><i class="fa fa-copyright"></i> <span><?php _e('Copyright Settings','WEBHUNT_CSM')?></span></a>
					</li>
					<li class="sidebar-tab" id="products-menu">
						<a href='javascript:loadFile("products")'><i class="fa fa-shopping-cart"></i> <span><?php _e('Our Products','WEBHUNT_CSM')?></span></a>
					</li>
					<li class="sidebar-tab" id="help-menu">
						<a href='javascript:loadFile("help")'><i class="fa fa-question-circle"></i> <span><?php _e('Need Help','WEBHUNT_CSM')?></span></a>
					</li>
				</ul><!-- /.sidebar-menu -->
			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div id="Page_contact" class="content-wrapper">
			<span id="dashboard"><?php include('dashboard.php');?></span>
			<span id="templates" style="display:none"><?php include('templates.php');?></span>
			<span id="seo" style="display:none"><?php include('seo-settings.php');?></span>
			<span id="logo" style="display:none"><?php include('logo-settings.php');?></span>
			<span id="countdown" style="display:none"><?php include('countdown-settings.php');?></span>
			<span id="button" style="display:none"><?php include('button.php');?></span>
			<span id="styling" style="display:none"><?php include('basic-styling.php');?></span>
			<span id="aboutus" style="display:none"><?php include('about-us.php');?></span>
			<span id="contact" style="display:none"><?php include('contact-info.php');?></span>
			<span id="newsletter" style="display:none"><?php include('newsletter.php');?></span>
			<span id="subscription" style="display:none"><?php include('subscription.php');?></span>
			<span id="social" style="display:none"><?php include('social-profile.php');?></span>
			<span id="copyright" style="display:none"><?php include('copyright.php');?></span>
			<span id="products" style="display:none"><?php include('products.php');?></span>
			<span id="help" style="display:none"><?php include('help.php');?></span>
		</div><!-- /.content-wrapper -->

		<!-- Main Footer -->
		<footer class="main-footer">
			<!-- To the right -->
			<div class="pull-right hidden-xs">
				<?php _e('Anything you want','WEBHUNT_CSM')?>
			</div>
			<!-- Default to the left --> 
			<strong><?php _e('Copyright &copy; 2017','WEBHUNT_CSM')?> <a href="http://www.webhuntinfotech.com/"><?php _e('WebHunt Infotech','WEBHUNT_CSM')?></a>.</strong> <?php _e('All rights reserved.','WEBHUNT_CSM')?>
		</footer>
	</div><!-- ./wrapper -->
</div>