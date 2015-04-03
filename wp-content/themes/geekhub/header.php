<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<script src="http://vk.com/js/api/openapi.js" type="text/javascript"></script>
<script src='https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js'></script>
<?php wp_head(); ?>
</head>
<body>
<div class="headerwrap">
	<div class="header">
		<h1><a href="#"><img src="http://wordpress/wp-content/uploads/2015/04/geekhub-logo.png" alt="geekhub" class="logo"/><span class="geekhub">geekhub</span></a></h1>

		<?php
			if ( function_exists( 'wp_nav_menu' ) )
				wp_nav_menu( 
					array( 
					'theme_location' => 'custom-menu',
					'fallback_cb'=> 'custom_menu',
					'container' => 'ul',
					'menu_id' => '',
					'menu_class' => 'headernav') 
				);
			else custom_menu();
		?>

		<div class="social">
			<?php
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : endif;
			?>
<!--			<li><a href="#"><img src="http://wordpress/wp-content/themes/geekhub/images/facebookn.png" alt="facebook" /></a></li>-->
<!--			<li><a href="#"><img src="http://wordpress/wp-content/themes/geekhub/images/vkn.png" alt="vk" /></a></li>-->
<!--			<li><a href="#"><img src="http://wordpress/wp-content/themes/geekhub/images/twittern.png" alt="twitter" /></a></li>-->
<!--			<li><a href="#"><img src="http://wordpress/wp-content/themes/geekhub/images/ytn.png" alt="youtube" /></a></li>-->
<!--			<li><a href="#"><img src="http://wordpress/wp-content/themes/geekhub/images/vimeon.png" alt="vimeo" /></a></li>-->
		</div>
	</div><!-- END .header -->