<?php
/**
 * @Author	Jonathon byrd
 * @link http://www.5twentystudios.com
 * @Package Wordpress
 * @SubPackage HTML5_Boilerplate
 * @copyright Proprietary Software, Copyright Byrd Incorporated. All Rights Reserved
 * @Since 1.0.0
 * 
 */
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8">

  <!-- www.phpied.com/conditional-comments-block-downloads/ -->
  <!--[if IE]><![endif]-->

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <!-- Does not currently validate. Known issue with the Boilerplate. -->

  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!--  Mobile Viewport Fix
        j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag
  device-width : Occupy full width of the screen in its current orientation
  initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
  maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
  -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

  <!-- Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <!-- Wordpress Head Items -->
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <?php wp_head(); ?>

</head>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->

<!--[if lt IE 7 ]> <body <?php body_class('ie6'); ?>> <![endif]-->
<!--[if IE 7 ]>    <body <?php body_class('ie7'); ?>> <![endif]-->
<!--[if IE 8 ]>    <body <?php body_class('ie8'); ?>> <![endif]-->
<!--[if IE 9 ]>    <body <?php body_class('ie9'); ?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body <?php body_class('ie6'); ?>> <!--<![endif]-->

<div id="container">
	<header role="banner">
		<div id="header_wrap">
			<div id="header" class="clearfix">
	
				<div class="logoarea">
					<h1 class="logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
					<p class="description"><?php bloginfo('description'); ?></p>
				</div>
				
				<?php wp_nav_menu( array(
					  'theme_location'  => 'Header Menu',
					  'menu'            => 'Header Menu', 
					  'container'       => 'div', 
					  'container_class' => 'menu-{menu slug}-container', 
					  'container_id'    => '', 
					  'menu_class'      => 'main_nav', 
					  'menu_id'         => '',
					  'echo'            => true,
					  'fallback_cb'     => 'wp_page_menu',
					  'before'          => '',
					  'after'           => '',
					  'link_before'     => '',
					  'link_after'      => '',
					  'depth'           => 0) ); ?>
	
			</div>
		</div>
    </header>
