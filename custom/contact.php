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
 * Template Name: Contact
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
				<div class="primary">
					<div class="entry-content"><?php the_content(); ?></div>
				</div>
				<div class="sidebar">
					<img src="<?php echo get_template_directory_uri(); ?>/img/avatar.jpg" >
					<div class="contact-coords">
						<h4>Digital Corsaire</h4>
						<p>Nous sommes une agence de marketing spécialisé dans le growth hacking localisé en bretagne.</p>
					</div>
				</div>
			</div>
		</div>

	<?php endwhile; // End of the loop. ?>

<?php
get_footer();
