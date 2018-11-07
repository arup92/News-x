<?php
	/**
	 * Template part for displaying news slider section in homepage
	 */

	$slider_args = array(
		'post_type'			=>	'post',
		'posts_per_page'	=>	5,
		'order'				=>	'DESC',
	);

	$slider_item  = new WP_Query( $slider_args );

	$slider_side_arg_one = array(
		'post_type'			=>	'post',
		'posts_per_page'	=>	1,
		'cat'				=>	'photography',
		'order'				=>	'DESC',
	);

	$slider_side_item_one  = new WP_Query( $slider_side_arg_one );

	$slider_side_arg_two = array(
		'post_type'			=>	'post',
		'posts_per_page'	=>	2,
		'offset'			=>	1,
		'cat'				=>	'photography',
		'order'				=>	'DESC',
	);

	$slider_side_item_two  = new WP_Query( $slider_side_arg_two );
?>

<div class="container section-one slider">
	<div class="row">
		<div class="twelve columns">
			<div class="x-large zoom">

				<div class="slide-nav clearfix">
					<div class="slide-prev"></div><!-- /.slide-prev -->
					<div class="slide-next"></div><!-- /.slide-next -->
				</div><!-- /.slide -->

				<div class="slider-banner">
					<?php
						if ( $slider_item->have_posts() ) :
							while ( $slider_item->have_posts() ) : $slider_item->the_post();
							?>
								<div class="slide-banner">
									<div class="overlay"></div><!-- /.overlay -->
									<?php
										if ( has_post_thumbnail() ):
											the_post_thumbnail( 'full' );
										endif;
									?>
									<div class="post-content">
										<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
									</div><!-- /.post-content -->
								</div><!-- /.slide-banner -->
							<?php
							endwhile;
						else :
							get_template_part( 'template-parts/post/content', 'none' );
						endif;

						wp_reset_query();
					?>
				</div><!-- /.slider-banner -->
			</div><!-- /.x-large -->
			<div class="medium-post-section">
				<?php
					if ( $slider_side_item_one->have_posts() ) :
						while ( $slider_side_item_one->have_posts() ) : $slider_side_item_one->the_post();
						?>
						<div class="full-post zoom">
							<div class="overlay"></div><!-- /.overlay -->
							<?php
								if ( has_post_thumbnail() ):
									the_post_thumbnail( 'full' );
								endif;
							?>
							<div class="post-content">
								<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
							</div><!-- /.post-content -->
						</div><!-- /.full-post -->
						<?php
						endwhile;
					else :
						get_template_part( 'template-parts/post/content', 'none' );
					endif;

					wp_reset_query();

					if ( $slider_side_item_two->have_posts() ) :
						while ( $slider_side_item_two->have_posts() ) : $slider_side_item_two->the_post();
						?>
						<div class="small-post zoom">
							<div class="overlay"></div><!-- /.overlay -->
							<?php
								if ( has_post_thumbnail() ):
									the_post_thumbnail( 'full' );
								endif;
							?>
							<div class="post-content">
								<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
							</div><!-- /.post-content -->
						</div><!-- /.small-post -->
						<?php
						endwhile;
					else :
						get_template_part( 'template-parts/post/content', 'none' );
					endif;

					wp_reset_query();
				?>

			</div><!-- /.medium-post-section -->
		</div><!-- /.tweleve column -->
	</div><!-- /.row -->
</div><!-- /.container /.slider -->