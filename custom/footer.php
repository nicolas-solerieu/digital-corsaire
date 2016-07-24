<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom
 */

?>

	</main><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-top">
			<div class="wrapper">
				<div class="footer-col coords-col">
					<h2 class="footer-baseline">Digital Corsaire</h2>
					<p class="sub">Agence de Growth-hacking</p>
					<p>Rennes - Saint Malo - Dinan</p>
					<p>Tél : 07 82 60 24 65</p>
				</div>
				<div class="footer-col nav-links">
					<p class="footer-col__title">En savoir plus</p>
					<a href="<?php echo get_permalink(6); ?>" class="footer-nav-link">Nos tarifs et prestations</a>
					<a href="<?php echo get_permalink(8); ?>" class="footer-nav-link">Le blog</a>
					<a href="<?php echo get_permalink(10); ?>" class="footer-nav-link">Nous trouver</a>
					<a href="<?php echo get_permalink(12); ?>" class="footer-nav-link">Informations légales</a>
				</div>
				<div class="footer-col social">
					<p class="footer-col__title">Nous suivre</p>
					<a href="https://www.facebook.com/digitalcorsaire" target="_blank" class="footer-social-link fb"><i class="fa fa-facebook"></i><span>Facebook</span></a>
					<a href="https://twitter.com/digitalcorsaire" target="_blank" class="footer-social-link tw"><i class="fa fa-twitter"></i><span>Twitter</span></a>
					<a href="https://plus.google.com/106104561089738871096/about" target="_blank" class="footer-social-link gg"><i class="fa fa-google"></i><span>Google+</span></a>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="wrapper">
				<p class="copy">Copyright &copy; 2016 Digital Corsaire &mdash; un projet de <a href="https://twitter.com/Curation2web" target="_blank">@curation2web</a> et <a href="https://twitter.com/wikibreizh" target="_blank">@wkibreizh</a> par <a href="https://twitter.com/defineed_fr" target="_blank">@defineed_fr</a></p>
				<p class="fun">Design & dev : <a href="http://slrncl.com" target="_blank">SLRNCL</a> / Made in Breizh</p>
			</div>
		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
