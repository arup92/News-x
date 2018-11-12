<?php get_header(); ?>

<?php if ( have_posts() ) :
	while ( have_posts() ) : the_post();
?>
	<div id="post-<?php the_ID(); ?>" <?php post_class( 'container' ); ?>>
		<div class="twelve columns">
			<div class="single-post-h">
				<?php the_title( '<h1>', '</h1>' ); ?>
			</div><!-- /.single-post-h -->	
		</div><!-- /.twelve columns -->
	</div><!-- /.container -->
	<div class="container">
		<div class="row">
			<div class="eight columns">
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="single-post-h">
							<img src="<?php echo esc_url( the_post_thumbnail_url( 'full' ) ); ?>" class="full-image" alt="image" />
						</div><!-- /.single-post-h -->
					<?php endif; ?>
				<div class="single-post-text">
					<?php echo the_content(); ?>
				</div><!-- /.single-post-text -->	
			</div><!-- /.row .eight columns -->
				<?php get_sidebar(); ?>
		</div><!-- /.row -->	
	</div><!-- /.container -->

<?php 
	endwhile;
	endif;
	wp_reset_postdata();
get_footer();