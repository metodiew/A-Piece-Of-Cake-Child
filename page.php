<?php
/**
 * Template Name: Full-Width Content
 * The template for displaying full content pages.
 *
 * @package A Piece Of Cake
 * @since available since Release 1.0
 */

get_header(); ?>

	<div id="primary-full-width" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>