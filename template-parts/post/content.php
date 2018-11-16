<?php
/**
 * Displays blog post loop
 */
?>
<div <?php post_class( 'block' ); ?>>
	<?php
		if( get_the_post_thumbnail() ) :
	?>
		<div class="image-container">
			<?php the_post_thumbnail('large'); ?>
			<a href="<?php the_permalink(); ?>"><span class="icon-overlay"></span></a>
		</div><!-- /.image-container -->
	<?php
		endif;
	?>
	<div class="sub-block">
		<a href="<?php the_permalink(); ?>"><h2 class="post-title"><?php the_title(); ?></h2></a>
		
		<?php
			$trim_excerpt = get_the_excerpt();
			$short_excerpt = wp_trim_words( $trim_excerpt, $num_words = get_theme_mod( 'ct_general_excerpt_setting', '45' ), $more = '... ' );
		?>

		<p class="post-excerpt"><?php echo esc_html( $short_excerpt ); ?></p>
		<div class="excerpt-footer">
			<p class="post-read-more"><a href="<?php the_permalink(); ?>"><?php esc_html_e( 'READ MORE', 'news-x' ) ?></a></p>
			<div class="post-info">
				<p class="post-category"><?php news_x_list_categories(); ?></p>
				<span class="post-date"><?php echo esc_html( get_the_date() ); ?></span>
				<?php news_x_excerpt_info(); ?>
      		</div><!-- /.post-info -->
		</div><!-- /.excerpt-footer -->
	</div><!-- /.sub-block -->
</div><!-- /.block -->