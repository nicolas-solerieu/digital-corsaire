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
				<h2>Gagnez de véritables prospects de manière automatique</h2>
				<p>Les experts de Digital Corsaire améliorent votre présence web et favorisent la transformation de contacts en clients.</p>
				<a href="#" class="hero-cta">Découvrez nos prestation <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
			<a href="#" class="cta-call">Consultez le détail de nos prestations <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
		</div>
	</section>

	<section class="ref-homepage">
		<div class="wrapper">
			<h3 class="section-title">Chaque <span>€uro</span> investi rapporte</h3>
			<p class="section-desc">Notre agence opérationnelle en Inbound Marketing et Growth-Hacking travaille pour vous faire gagner des clients supplémentaires.</p>
			<div class="reference-slider-area">
				<i class="fa fa-pie-chart icon-ref" aria-hidden="true"></i>
				<p class="intro-ref-slider">Exemple de client ayant accepté de montrer nos résultats</p>
				<div class="reference-slider">
					<img src="http://placehold.it/960x400">
					<img src="http://placehold.it/960x400">
					<img src="http://placehold.it/960x400">
					<img src="http://placehold.it/960x400">
				</div>
			</div>
		</div>
	</section>

<?php 
get_footer();
