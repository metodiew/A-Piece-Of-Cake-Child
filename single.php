<?php
/**
 * The Template for displaying all single posts.
 *
 * @package A Piece Of Cake
 * @since available since Release 1.0
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

		<?php apoc_post_nav(); ?>

		<?php
		// If comments are open or we have at least one comment, load up the comment template
		if ( comments_open() || '0' != get_comments_number() ) :
			comments_template();
		endif;
		?>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>