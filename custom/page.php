<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package custom
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="page-top" style="background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
			<div class="wrapper">
				<h2><?php the_title(); ?></h2>
				<p><?php echo get_the_excerpt(); ?></p>
			</div>
		</div>

		<div class="page-content">
			<div class="wrapper">
				<div class="entry-content"><?php the_content(); ?></div>
			</div>
		</div>

		<?php if ( is_page( 6 ) ) { ?>
		<div class="teasing-section">
			<h3>Obtenez le succès que vous méritez</h3>
			<a href="<?php echo get_permalink(10); ?>" class="teasing-cta">Contactez nous</a>
		</div>

		<div class="assets-list-page">
			<div class="wrapper">
				<h3 class="section-title">Comment procéder ?</h3>
				<div class="assets-list">
					<div class="one-asset">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<div class="uptitle">étape 1</div>
						<h4>Nous contacter</h4>
						<p>Un premier contact téléphonique est nécessaire, pour connaitre vos besoins, nous expliquer votre historique, nous fournir le détail de vos canaux d'acquisition.</p>
					</div>
					<div class="one-asset">
						<i class="fa fa-laptop" aria-hidden="true"></i>
						<div class="uptitle">étape 2</div>
						<h4>Prise en compte de votre existant</h4>
						<p>Un audit précis est réaliser pour connaitre le client type recherché, le niveau d'autorité et d'influence de vos canaux d'acquisition.</p>
					</div>
					<div class="one-asset">
						<i class="fa fa-code" aria-hidden="true"></i>
						<div class="uptitle">étape 3</div>
						<h4>Correction et optimisation</h4>
						<p>A partir de votre existant, nos experts corrigent et configurent un ensemble de moyens sur le web afin de vous faire gagner des clients.</p>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>

	<?php endwhile; // End of the loop. ?>

<?php
get_footer();
