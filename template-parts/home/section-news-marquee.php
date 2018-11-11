<?php
	/**
	 * Template part for displaying marquee section in homepage
	 */

	$marquee_args = array(
		'post_type'			=>	'post',
		'posts_per_page'	=>	5,
		'order'				=>	'DESC',
	);

	$marquee_item  = new WP_Query( $marquee_args );
?>
<div class="container">
	<div class="row news-marquee shadow clearfix">
		<div class="exclusive-news">
			<span><?php echo esc_html( get_theme_mod( 'news_x_flash_post_section_title_setting', 'News' ) ); ?></span>
		</div><!-- /.exclusive-news -->
		<div class="marquee" data-gap="0" data-duplicated="true">
			<?php
				if ( $marquee_item->have_posts() ) :
					while ( $marquee_item->have_posts() ) : $marquee_item->the_post();
			?>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<?php
					endwhile;
				else :
					echo esc_html__( 'Ready to get started with your first post? Goto "Posts->add new" from your dashboard' );
				endif;
				wp_reset_query();
			?>
		</div>
	</div><!-- /.row -->
</div><!-- /.container -->