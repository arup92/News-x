<?php
get_header();

if ( have_posts() ) :
	while ( have_posts() ) : the_post();
?>
	<?php news_x_the_breadcrumb(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class( 'container' ); ?>
		<div class="twelve columns">
			<div class="single-post-heading">
				<?php the_title( '<h1>', '</h1>' ); ?>
			</div><!-- /.single-post-h -->	
		</div><!-- /.twelve columns -->
	</div><!-- /.container -->
	<div class="container">
		<div class="row">
			<div class="eight columns">
				<div class="shadow">
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="single-post-image">
							<img src="<?php echo esc_url( the_post_thumbnail_url( 'full' ) ); ?>" class="full-image" alt="image" />
						</div><!-- /.single-post-image -->
					<?php endif; ?>
					<div class="single-post-text">
						<?php echo the_content(); ?>

						<div class="author-info">
							<div class="author-image clearfix">
					  			<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>"><?php echo get_avatar( get_the_author_meta('ID') ); ?></a>
							</div><!-- /.author-image -->
							<div class="comment-wrapper">
									<b class="comment-name"><?php esc_html_e( 'Published By', 'news-x' );?> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>"><?php the_author(); ?></a></b>
									<?php if ( get_the_author_meta( 'description' ) ): ?>
										<p><?php the_author_meta( 'description' ); ?></p>
									<?php endif ?>
								<div class="author-link">
									<?php if ( get_the_author_meta( 'user_url' ) ): ?>
										<a href="<?php the_author_meta( 'user_url' ); ?>"><?php esc_html_e( 'Visit Website', 'news-x' );?></a>
									<?php endif ?>
								</div><!-- /.author-link -->
							</div><!-- /.comment-wrapper -->
						</div><!-- /.author-info -->
					</div><!-- /.single-post-text -->
				</div><!-- /.shadow -->

				<div class="pagination-nav row">
					<div class="six columns left-nav">
						<?php $prev_post = get_adjacent_post( false, '', false ); ?>
							<?php if ( is_a( $prev_post, 'WP_Post' ) ) { ?>
							<div class="nav-prev"></div><!-- /.nav-prev -->
							<a href="<?php echo esc_url( get_permalink( get_adjacent_post( false, '', false)->ID ) ); ?>" class="btn prev"><?php echo esc_html( get_the_title( get_adjacent_post( false, '', false)->ID ) ); ?></a>
						<?php } else {
							echo '&nbsp;';
						} ?>
					</div><!-- /.six columns -->

					<div class="six columns right-nav">
					<?php $next_post = get_adjacent_post( false, '', true ); ?>
						<?php if ( is_a( $next_post, 'WP_Post' ) ) { ?>
						<a href="<?php echo esc_url( get_permalink( get_adjacent_post( false, '', true)->ID ) ); ?>" class="btn next right"><?php echo esc_html( get_the_title( get_adjacent_post( false, '', true)->ID ) ); ?></a>
						<div class="nav-next"></div><!-- /.nav-prev -->
					<?php } ?>
					</div><!-- /.six columns -->
				</div><!-- /.pagination-nav -->
				
				<?php if ( comments_open() ) : ?>
					<div class="shadow">
						<?php comments_template();?>
					</div><!-- /.shadow -->
				<?php endif ?>
			</div><!-- /.row .eight columns -->
				<?php get_sidebar(); ?>
		</div><!-- /.row -->	
	</div><!-- /.container -->

<?php 
	endwhile;
	endif;
	wp_reset_postdata();

get_footer();