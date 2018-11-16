<?php
/**
 * Template part for displaying page content in page
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'container' ); ?>>
	<div class="twelve columns">
		<div class="single-post-h">
			<?php the_title( '<h1>', '</h1>' ); ?>
		</div><!-- /.single-post-h -->	
	</div><!-- /.twelve columns -->
</div><!-- /.container -->
<div class="container">
	<div class="eight columns">
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="single-post-h">
					<img src="<?php echo esc_url( the_post_thumbnail_url( 'full' ) ); ?>" class="full-image" alt="image" />
				</div><!-- /.single-post-h -->
			<?php endif; ?>
		<div class="single-post-text">
			<?php
				the_content();

				wp_link_pages(
					array(
						'before'      => '<div class="link-pages">' . __( 'Continue Reading:', 'news-x' ),
						'after'       => '</div>',
						'link_before' => '<span class="page-numbers">',
						'link_after'  => '</span>',
					)
				);
			?>
		</div><!-- /.single-post-text -->	
	</div><!-- /.eight columns -->
</div><!-- /.container -->