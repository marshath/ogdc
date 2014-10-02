<!DOCTYPE html>
<!--[if IE 7]>
  <html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
  <html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<link href='http://fonts.googleapis.com/css?family=EB+Garamond|Raleway:100|Oswald:400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" media="screen" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<?php //------- Modernizr ------- ?>
	<script src="<?php echo esc_url( home_url( '/' ) ); ?>js/flexslider/modernizr.js"></script>
	<?php //------ Mobile Menu -------- ?>
	<script type="text/javascript">
		jQuery(document).ready(function($){
			/* toggle nav */
			$("#menu-toggle").on("click", function(){
				$("#nav-menu").slideToggle();
				$(this).toggleClass("active");
			});
		});
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="top_container">
		<header class="primary" role="masthead">
			<div class="leaf"></div>
			<h1 id="logo"><a href="<?php echo get_option('home'); ?>/" class="home" title="Home">Oak Grove Dental Center</a></h1>
			<div class="schedule_app"><a href="<?php echo get_option('home'); ?>/schedule/">Request an appointment<span></span></a></div>
			<div class="office_info">
				<h3><span class="dentist_name">Kevin H. Speer, D.D.S.</span><br />
				General Dentist in Milwaukie, OR</h3>
				<p class="mobile-no"><span class="small-caps">Hours</span>: 8am&ndash;5pm M&ndash;Th<br />
					<span class="small-caps">Phone</span>: <span class="phone">(503) 654-9521</span></p>
			 </div>
		</header>
		<div class="top_nav clearfix">
			<nav id="site-navigation" class="primary" role="navigation">
				<h3 id="menu-toggle"><a href="#">Navigation</a></h3>
				<div id="nav-menu" class="menu">
					<ul>
						<?php wp_list_pages('sort_column=menu_order&depth=1&exclude=19&title_li=');?>
					</ul>
				</div>
			</nav><?php // ------- #site-navigation ------- ?>
			<nav class="social">
				<ul>
					<li class="facebook nav_icon"><a href="http://www.facebook.com/OakGroveDentalCenter" target="_blank">Facebook</a></li>
					<li class="twitter nav_icon"><a href="https://twitter.com/#!/OakGroveDental" target="_blank">Twitter</a></li>
					<li class="google nav_icon"><a href="https://plus.google.com/u/0/100563055298393583214" target="_blank">Google+</a></li>
				</ul>
			</nav><?php // ------- .social ------- ?>
		</div><?php // ------- .top_nav ------- ?>
	</div><?php // ------- .top_container ------- ?>