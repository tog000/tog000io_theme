<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tog000io
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!--<script src="https://use.typekit.net/xdf2job.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>-->
<script>
  (function(d) {
    var config = {
      kitId: 'xdf2job',
      scriptTimeout: 1500,
      async: false
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/lib/bootstrap/css/bootstrap.min.css">
<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/lib/bootstrap/css/bootstrap-theme.min.css"> -->

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/theme.css">

<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,200,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,300,200,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container-fluid fill">

		<header id="masthead" class="row site-header" role="banner">
			<div class="container">
				<div class="row">
					<div class="site-branding col-lg-4 col-sm-12">
						<div id="menu-toggle">
							<span id="menu-toggle-button" class="glyphicon glyphicon-menu-hamburger"></span>
						</div>
						<div class="logo-desc">
						<?php
							if ( is_front_page() && is_home() ) : ?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php else : ?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
							endif;

							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : ?>
								<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
							<?php
							endif; ?>
						</div>
					</div><!-- .site-branding -->
					<?php //get_sidebar(); ?>
					<nav id="site-navigation" class="col-lg-8 main-navigation" role="navigation">
						<div class="menu-column col-md-4"><?php wp_nav_menu( array( 'theme_location' => 'primary-col-1') ); ?></div>
						<div class="menu-column col-md-4"><?php wp_nav_menu( array( 'theme_location' => 'primary-col-2') ); ?></div>
						<div class="menu-column col-md-4"><?php wp_nav_menu( array( 'theme_location' => 'primary-col-3') ); ?></div>
					</nav><!-- #site-navigation -->
				</div>
			</div>
	</header><!-- #masthead -->
	<div id="content" class="container">
		<div class="row">
			<div class="col-lg-12 site-content">
