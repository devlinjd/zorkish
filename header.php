<?php
/**
The header for our theme.
Displays all of the <head> section and everything up till <div id="content">
@package Zorkish
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
<div id="page" class="hfeed site">
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'zorkish' ); ?></a>

  <header id="masthead" class="site-header" role="banner">
    <div class="site-branding">
      <? if ( function_exists( 'jetpack_the_site_logo' ) ) : ?>
        <? jetpack_the_site_logo(); ?>
      <? else: ?>
        <h1 class="site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        </h1>
        <h2 class="site-description" style="color: <?php echo get_theme_mod( 'header_byline_color', '#DDAE4F' ) ?>"><?php bloginfo( 'description' ); ?></h2>      
      <? endif; ?>
      <?php if ( get_header_image() ) : ?>
        <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
      <?php endif; ?>
    </div><!-- .site-branding -->
    <nav id="site-navigation" class="main-navigation" role="navigation">
      <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'zorkish' ); ?></button>
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
    </nav><!-- #site-navigation -->
  </header><!-- #masthead -->

  <div id="content" class="site-content">
