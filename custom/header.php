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

<!-- Favicon -->

<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon.ico">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

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

<?php if ( is_front_page() ) { ?>
<div id="loading"><img src="<?php echo get_template_directory_uri(); ?>/img/loading-logo.jpg" class="loader"></div>
<?php } ?>

<!--
<div class="box-dialog">
	<div class="box-dialog__head">Découvrez votre potentiel <i class="fa fa-arrow-circle-up" aria-hidden="true"></i></div>
	<div class="box-dialog__content" style="display:none">
		<p>Connaître votre nombre de prospects potentiel avec Digital Corsaire</p>
		<div class="dialog-form"><?php echo do_shortcode( '[contact-form-7 id="101" title="popup"]' ); ?></div>
	</div>
</div>
-->

<div id="page">

	<header class="site-header">
		<div class="wrapper">
			<div class="site-branding" onclick="document.location.href='<?php echo esc_url( home_url( '/' ) ); ?>'">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo-small-color.png" class="logo-header">
				<h1 class="site-title"><?php bloginfo( 'description' ); ?></h1>
			</div>
			<div class="resp-menu-bt"><i class="fa fa-bars"></i> Menu</div>
			<nav class="site-navigation">
				<div class="label-menu-responsive">Menu</div>
				<a href="<?php echo get_permalink(6); ?>" class="site-navigation__entry <?php if ( is_page( 6 ) ) { echo 'active'; } ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Tarifs & prestations</a>
				<a href="<?php echo get_permalink(8); ?>" class="site-navigation__entry <?php if ( is_page( 8 ) ) { echo 'active'; } ?>"><i class="fa fa-comments" aria-hidden="true"></i> Blog</a>
				<a href="<?php echo get_permalink(10); ?>" class="site-navigation__entry <?php if ( is_page( 10 ) ) { echo 'active'; } ?>"><i class="fa fa-envelope" aria-hidden="true"></i> Contact</a>
				<div class="close-resp-menu-bt">Fermer le menu</div>
			</nav>
		</div>
	</header>

	<main class="site-content">
