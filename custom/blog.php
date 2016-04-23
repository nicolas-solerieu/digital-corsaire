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
 * Template Name: Blog
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

		<div class="blog-content">
			<div class="wrapper">
				<div class="entry-content"><?php the_content(); ?></div>
				<div class="blog-feed">
				<?php
				$args = array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 999); 
				$loop = new WP_Query( $args );
				?>

				<?php if($loop->post_count != 0) { ?>

				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<div class="one-article" onclick="document.location.href='<?php echo get_permalink(); ?>'">

						<div class="one-article__thumbnail">
							<?php the_post_thumbnail('large',''); ?>
						</div>
						<div class="one-article__details">
							<div class="one-article__details__title" >
								<p><?php the_time('j F Y'); ?></p>
								<h3><?php the_title(); ?></h3>
							</div>

							<div class="one-article__details__content" >
								<div class="entry-content"><?php the_excerpt(); ?></div>
								<a href="<?php echo get_permalink(); ?>">Lire l'article <i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>

					</div>

			 	<?php endwhile; ?>

				<?php } else { echo "merde"; }?>

				<?php wp_reset_query(); ?>
				</div>
			</div>
		</div>

	<?php endwhile; // End of the loop. ?>

<?php
get_footer();



