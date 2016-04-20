<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<title><?php bloginfo('name'); ?> — <?php bloginfo('description'); ?></title>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- CSS Zone -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" >
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" >
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css" >
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" >

<!-- CDN Fonts -->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

<div id="page">

	<header class="site-header">
		<div class="wrapper">
			<div class="site-branding" onclick="document.location.href='<?php echo esc_url( home_url( '/' ) ); ?>'">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo-small-color.png" class="logo-header">
				<h1 class="site-title"><?php bloginfo( 'description' ); ?></h1>
			</div>
			<nav class="site-navigation">
				<a href="<?php echo get_permalink(6); ?>" class="site-navigation__entry <?php if ( is_page( 6 ) ) { echo 'active'; } ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Tarifs & prestations</a>
				<a href="<?php echo get_permalink(8); ?>" class="site-navigation__entry <?php if ( is_page( 8 ) ) { echo 'active'; } ?>"><i class="fa fa-comments" aria-hidden="true"></i> Blog</a>
				<a href="<?php echo get_permalink(10); ?>" class="site-navigation__entry <?php if ( is_page( 10 ) ) { echo 'active'; } ?>"><i class="fa fa-envelope" aria-hidden="true"></i> Contact</a>
			</nav>
		</div>
	</header>

	<main class="site-content">
