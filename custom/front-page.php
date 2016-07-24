<?php
/**
 * The front page template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package custom
 */

get_header(); ?>

	<section class="hero-homepage">
		<div class="wrapper">
			<div class="hero-container">
				<h2><?php $headline = get_option( 'headline', false ); echo $headline;  ?></h2>
				<p><?php $headline_text = get_option( 'headline_text', false ); echo $headline_text;  ?></p>
				<a href="<?php echo get_permalink(6); ?>" class="hero-cta">Découvrez nos prestation <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
			</div>
		</div>
	</section>

	<section class="pres-homepage">
		<div class="wrapper">
			<h3 class="section-title">Notre offre</h3>
			<p class="section-desc">A partir de votre existant, nos experts corrigent un ensemble de moyens sur le web afin de vous faire gagner des clients automatiquement.</p>
			<div class="assets-list">
				<div class="one-asset">
					<i class="fa fa-bookmark-o" aria-hidden="true"></i>
					<div class="uptitle">Phase 1</div>
					<h4>Audit</h4>
					<p>Un pré-audit est nécessaire pour connaitre le taux de conversion de votre site internet, la popularité de votre marque, votre positionnement dans les moteurs de recherche, etc... afin de corriger les lacunes.</p>
				</div>
				<div class="one-asset">
					<i class="fa fa-code" aria-hidden="true"></i>
					<div class="uptitle">Phase 2</div>
					<h4>Correction</h4>
					<p>Nos experts analystes ,ergonomes et rédacteurs évaluent, testent, corrigent les composants de votre site pour vous offrir les meilleures performances de conversion (transformation de visiteurs en  contacts réels).</p>
				</div>
				<div class="one-asset">
					<i class="fa fa-magic" aria-hidden="true"></i>
					<div class="uptitle">Phase 3</div>
					<h4>Automatisation</h4>
					<p>A partir ce ce taux de conversion et du coût de revient de votre produit, nous décidons de quels moyens extérieurs à votre site sont suffisamment rentables à mettre en place pour vous faire gagner des prospects.</p>
				</div>
			</div>
			<p class="call">Laissez vos concurrents loin derrière vous</p>
			<a href="<?php echo get_permalink(10); ?>" class="cta-call">Consultez le détail de nos prestations <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
		</div>
	</section>

	<section class="ref-homepage">
		<div class="wrapper">
			<h3 class="section-title">Chaque <span>€uro</span> investi rapporte</h3>
			<p class="section-desc">Notre agence opérationnelle en Inbound Marketing et Growth-Hacking travaille pour vous faire gagner des clients supplémentaires.</p>
			
			<div class="ref-list">

				<?php
				$args = array( 'post_type' => 'result', 'order' => 'DESC', 'posts_per_page' => 999); 
				$loop = new WP_Query( $args );
				?>

				<?php if($loop->post_count != 0) { ?>

				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<div class="one-ref">
						<span class="date"><?php the_time('j M Y'); ?></span>
					 	<span class="proof"><?php echo get_the_content(); ?> pour </span><span class="title"><a href="http://<?php the_title(); ?>"><?php the_title(); ?></a></span>
					</div>

			 	<?php endwhile; ?>

				<?php } else { echo "<p>Rien à afficher</p>"; }?>

				<?php wp_reset_query(); ?>
				
			</div>
		</div>
	</section>

	<section class="partners">
		<div class="wrapper">
			<div class="partners-slider-area">
				<p class="intro-partners-slider">Nos partenaires</p>
				<div class="partners-slider">
					<?php
					$args = array( 'post_type' => 'partner', 'order' => 'DESC', 'posts_per_page' => 999); 
					$loop = new WP_Query( $args );
					?>

					<?php if($loop->post_count != 0) { ?>

					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

						<div class="one-partner" onclick="document.location.href='<?php echo get_the_excerpt(); ?>'">
							<?php the_post_thumbnail('full'); ?>
						</div>

				 	<?php endwhile; ?>

					<?php } else { echo "<p>Rien à afficher</p>"; }?>

					<?php wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</section>

<?php 
get_footer();
