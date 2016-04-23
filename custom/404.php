<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package custom
 */

get_header(); ?>

	<div class="page-404" >
		<div class="wrapper">
			<h2>404</h2>
			<p>Il y a un bug dans la matrice !</p>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="cta-call reveal-anim">Retour à l'accueil</a>
		</div>
	</div>

<?php
get_footer();
