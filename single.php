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

					<div class="author-info">
						<div class="author-image clearfix">
				  			<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>"><?php echo get_avatar( get_the_author_meta('ID') ); ?></a>
						</div><!-- /.author-image -->
						<div class="comment-wrapper">
								<b class="comment-name"><?php esc_html_e( 'Published By', 'writer-blog' );?> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>"><?php the_author(); ?></a></b>
								<?php if ( get_the_author_meta( 'description' ) ): ?>
									<p><?php the_author_meta( 'description' ); ?></p>
								<?php endif ?>
							<div class="author-link">
								<?php if ( get_the_author_meta( 'user_url' ) ): ?>
									<a href="<?php the_author_meta( 'user_url' ); ?>"><?php esc_html_e( 'Visit Website', 'writer-blog' );?></a>
								<?php endif ?>
							</div><!-- /.author-link -->
						</div><!-- /.comment-wrapper -->
					</div><!-- /.author-info -->
				</div><!-- /.single-post-text -->	
			</div><!-- /.row .eight columns -->
				<?php get_sidebar(); ?>
		</div><!-- /.row -->	
	</div><!-- /.container -->

<?php 
	endwhile;
	endif;
	wp_reset_postdata();
?>
	<div class="container comment-section">
		<div class="row">
			<div class="eight columns">
				<?php comments_template();?>
			</div><!-- /.row .eight columns -->
		</div><!-- /.row -->	
	</div><!-- /.container -->
<?php
get_footer();