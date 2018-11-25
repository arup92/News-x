<?php
/**
 * The template for displaying all pages
 */

get_header(); ?>

			<?php
				while ( have_posts() ) : the_post();
					news_x_the_breadcrumb();
					get_template_part( 'template-parts/page/content', 'page' );

				endwhile; // End of the loop.
			?>

<?php get_footer();