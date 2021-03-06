<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MLA_Wordpress_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site st-container st-effect-1">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'mla' ); ?></a>

	<nav class="st-menu st-effect-1" id="menu-1">
		<h2 class="icon icon-lab">Menu</h2>
		<?php wp_nav_menu( array( 'theme_location' => 'mobile' ) ); ?>		
	</nav>

	<!-- content push wrapper -->
	<div class="st-pusher">
		<div class="st-content"><!-- this is the wrapper for the content -->
			<div class="st-content-inner"><!-- extra div for emulating position:fixed of the menu -->
			<header id="masthead" class="site-header <?php echo (is_front_page() ? 'fixed' : '' )?>" role="banner">
				<div class="container">
					<div id="st-trigger-effects" class="column">
						<button data-effect="st-effect-1" id="nav-toggle">
							<div id="nav-icon1">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</button>		
					</div>
					<div class="mobile-header">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-mobile.png" alt="<?php bloginfo( 'name' ); ?> Logo"></a>
					</div>
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<div class="left-menu"><?php wp_nav_menu( array( 'theme_location' => 'left', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?></div>
						<div class="site-branding"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?> Logo"></a></div>
						<div class="right-menu"><?php wp_nav_menu( array( 'theme_location' => 'right', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?></div>					
					</nav><!-- #site-navigation -->
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">