<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _s
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<?php wp_head(); ?>
<link href="<?php echo get_bloginfo('template_url') ?>/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site container">
  <div class="row">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
      <a href="/"><img src="<?php echo get_bloginfo('template_url') ?>/header13.gif"></a>
		</div>

<!--
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', '_s' ); ?></h1>
			<div class="skip-link"><a class="screen-reader-text" href="#content"><?php _e( 'Skip to content', '_s' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>
	</header>
-->
  </div>

	<div id="content" class="site-content row">
