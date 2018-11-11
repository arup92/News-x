<?php
/**
 * Template part for displaying full container blog section in homepage
 */

	$cat_id = intval( get_theme_mod( 'news_x_fullwidth-post_section_category_setting', 1 ) );

	$block_args = array(
		'post_type'			=>	'post',
		'posts_per_page'	=>	4,
		'cat'				=>	$cat_id,
		'order'				=>	'DESC',
	);

	$block_item  = new WP_Query( $block_args );
?>

<div class="container block shadow section-five">
	<div class="section-title-red">
		<span class="title"><?php echo esc_html( get_theme_mod( 'news_x_fullwidth-post_section_title_setting', 'News' ) ); ?></span>
	</div><!-- /.section-title-red -->
	<div class="row">
	<?php
		if ( $block_item->have_posts() ) :
			while ( $block_item->have_posts() ) : $block_item->the_post();
	?>
		<div class="three columns">
			<div class="fullwidth-post-section">
				<?php
					if ( has_post_thumbnail() ):
						the_post_thumbnail( 'full' );
					endif;
				?>
				<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
				<p><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>"><span class="author"><?php the_author(); ?></span></a> -  <?php echo esc_html( get_the_date() ); ?></p>
				<?php
					$trim_excerpt = get_the_excerpt();
					$short_excerpt = wp_trim_words( $trim_excerpt, $num_words = 15, $more = '... ' );
				?>
				<p class="post-excerpt"><?php echo esc_html( $short_excerpt ); ?></p>
			</div><!-- /.big-cat-section -->
		</div><!-- /.three columns -->
	<?php
			endwhile;
		else :
			get_template_part( 'template-parts/post/content', 'none' );
		endif;

		wp_reset_query();
	?>
	</div><!-- /.row -->
</div><!-- /.container /.block /.shadow /.section-five -->