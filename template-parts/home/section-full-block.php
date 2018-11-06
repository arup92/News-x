<?php
/**
 * Template part for displaying full block section in homepage
 */

	//$cat_id = intval( get_theme_mod( 'ct-cats-elect-setting', 1 ) );

	$list_args = array(
		'post_type'			=>	'post',
		'posts_per_page'	=>	6,
		'offset'			=>	2,
		'cat'				=>	'photography',
		'order'				=>	'DESC',
	);

	$list_item  = new WP_Query( $list_args );

	$block_args = array(
		'post_type'			=>	'post',
		'posts_per_page'	=>	2,
		'cat'				=>	'photography',
		'order'				=>	'DESC',
	);

	$block_item  = new WP_Query( $block_args );
?>
<div class="section-title-red">
	<span class="title">Business</span>
</div><!-- /.section-title-red -->

<div class="big-category-section">
<?php
	if ( $block_item->have_posts() ) :
		while ( $block_item->have_posts() ) : $block_item->the_post();
?>
	<div class="post-overlay zoom">
		<div class="overlay"></div><!-- /.overlay -->
		<?php if ( has_post_thumbnail() ): ?>
			<?php the_post_thumbnail( 'full' ); ?>
		<?php endif; ?>
		<div class="post-content">
			<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
		</div><!-- /.post-content -->
	</div>
<?php
		endwhile;

	else :
		get_template_part( 'template-parts/post/content', 'none' );
	endif;

	wp_reset_query();
?>
</div><!-- /.big-category-section -->

<div class="slide-nav clearfix red cat-slider-vertical-nav">
	<div class="slide-prev"></div><!-- /.slide-prev -->
	<div class="slide-next"></div><!-- /.slide-next -->
</div><!-- /.slide -->

<div class="list-type-categories cat-slider-vertical">
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
</div><!-- /.list-type-categories -->