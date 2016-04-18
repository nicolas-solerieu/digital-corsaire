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
				<img src="http://placehold.it/100x100">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?> / <?php bloginfo( 'description' ); ?></h1>
			</div>
			<nav class="site-navigation">
				<a href="#" class="site-navigation__entry">Tarifs & prestations</a>
				<a href="#" class="site-navigation__entry">Partenaires</a>
				<a href="#" class="site-navigation__entry">Blog</a>
			</nav>
		</div>
	</header>

	<main class="site-content">
