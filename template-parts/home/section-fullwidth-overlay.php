<?php
/**
 * Template part for displaying full container blog section in homepage
 */

	//$cat_id = intval( get_theme_mod( 'ct-cats-elect-setting', 1 ) );

	$block_args = array(
		'post_type'			=>	'post',
		'posts_per_page'	=>	4,
		'cat'				=>	'photography',
		'order'				=>	'DESC',
	);

	$block_item  = new WP_Query( $block_args );
?>

<div class="container block shadow section-four">
	<div class="section-title-red">
		<span class="title">News</span>
	</div><!-- /.section-title-red -->
	<div class="row main-banner">

		<?php
			if ( $block_item->have_posts() ) :
				while ( $block_item->have_posts() ) : $block_item->the_post();
		?>
			<div class="three columns">
				<div class="post-overlay zoom">
					<div class="overlay"></div><!-- /.overlay -->
					<?php
						if ( has_post_thumbnail() ):
							the_post_thumbnail( 'full' );
						endif;
					?>
					<div class="post-content">
						<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
					</div><!-- /.post-content -->
				</div>
			</div> <!-- /.three .columns -->
		<?php
				endwhile;
			else :
				get_template_part( 'template-parts/post/content', 'none' );
			endif;

			wp_reset_query();
		?>
		
	</div><!-- /.row /.main-banner -->
</div><!-- /.container /.block /.shadow /.section-four -->