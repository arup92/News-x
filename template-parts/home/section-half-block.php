<?php
/**
 * Template part for displaying half block section in homepage
 */

	//$cat_id = intval( get_theme_mod( 'ct-cats-elect-setting', 1 ) );

	$block_args = array(
		'post_type'			=>	'post',
		'posts_per_page'	=>	1,
		'cat'				=>	'photography',
		'order'				=>	'DESC',
	);

	$block_item  = new WP_Query( $block_args );

	$list_args = array(
		'post_type'			=>	'post',
		'posts_per_page'	=>	2,
		'offset'			=>	1,
		'cat'				=>	'photography',
		'order'				=>	'DESC',
	);

	$list_item  = new WP_Query( $list_args );
?>
<div class="single-post-category block shadow">
	<div class="section-title-red">
		<span class="title">News</span>
	</div><!-- /.section-title-red -->
	
	<div class="post-item">
		<div class="big-cat-section">
		<?php
			if ( $block_item->have_posts() ) :
				while ( $block_item->have_posts() ) : $block_item->the_post();
					if ( has_post_thumbnail() ):
						the_post_thumbnail( 'full' );
					endif;
		?>
				<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
				<p><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>"><span class="author"><?php the_author(); ?></span></a> -  <?php echo esc_html( get_the_date() ); ?></p>
				
				<?php
					$trim_excerpt = get_the_excerpt();
					$short_excerpt = wp_trim_words( $trim_excerpt, $num_words = 20, $more = '... ' );
				?>
				<p class="post-excerpt"><?php echo esc_html( $short_excerpt ); ?></p>
		<?php
				endwhile;
			else :
				get_template_part( 'template-parts/post/content', 'none' );
			endif;

			wp_reset_query();
		?>
		</div><!-- /.big-cat-section -->

		<?php
			if ( $list_item->have_posts() ) :
				while ( $list_item->have_posts() ) : $list_item->the_post();
		?>
			<div class="list-item">
				<div class="left-content">
					<?php if ( has_post_thumbnail() ): ?>
						<?php the_post_thumbnail( 'thumbnail' ); ?>
					<?php endif; ?>
				</div><!-- /.left-content -->
				<div class="right-contents">
					<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
					<p><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>"><span class="author"><?php the_author(); ?></span></a> -  <?php echo esc_html( get_the_date() ); ?></p>
				</div><!-- /.right-contents -->
			</div><!-- /.list-item -->
		<?php
				endwhile;

			else :
				get_template_part( 'template-parts/post/content', 'none' );
			endif;

			wp_reset_query();
		?>
	</div><!-- /.post-item-->
</div><!-- /.single-post-category -->