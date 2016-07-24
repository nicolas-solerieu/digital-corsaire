<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package custom
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="article-top" >
			<div class="wrapper">
				<h2><?php the_title(); ?></h2>
				<p>Publié le <?php the_date( 'j F Y' ); ?> par <?php the_author(); ?></p>
			</div>
			<?php the_post_thumbnail('large',''); ?>
		</div>

		<div class="article-content">
			<div class="wrapper">
				<div class="entry-content"><?php the_content(); ?></div>

				<div class="article-bottom">
					<p class="article-bottom__label">Vous avez aimez ? Partagez !</p>
					<div class="sharing-options">
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>"><i class="fa fa-facebook-official"></i></a>
						<a href="https://twitter.com/home?status=<?php echo get_permalink(); ?>"><i class="fa fa-twitter"></i></a>
						<a href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>"><i class="fa fa-google-plus"></i></a>
						<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php get_the_excerpt(); ?>&source=<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa fa-linkedin"></i></a>
					</div>
					<div class="clear"></div>
				</div>
				<div class="post-nav">
					<?php previous_post_link( '<div class="previous-post-link"><i class="fa fa-angle-left"></i> %link</div>' ); ?>
					<?php next_post_link( '<div class="next-post-link">%link <i class="fa fa-angle-right"></i></div>' ); ?>
					<div class="clear"></div>
				</div>

				<div id="disqus_thread"></div>
				<script>
				    /**
				     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
				     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
				     */
				    /*
				    var disqus_config = function () {
				        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
				        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
				    };
				    */
				    (function() {  // DON'T EDIT BELOW THIS LINE
				        var d = document, s = d.createElement('script');
				        
				        s.src = '//digitalcorsaire.disqus.com/embed.js';
				        
				        s.setAttribute('data-timestamp', +new Date());
				        (d.head || d.body).appendChild(s);
				    })();
				</script>
				<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

			</div>
		</div>

	<?php endwhile; // End of the loop. ?>

<?php
get_footer();
