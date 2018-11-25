<?php
/**
 * The sidebar for Homepage
 */

if ( is_single() ) :
?>
<div class="four columns widget">
<?php else : ?>
<div class="four columns sidebar widget">
<?php endif; ?>
	<?php
		if ( is_single() ) :
			dynamic_sidebar( 'news-x-single-post-right' );
		else :
			dynamic_sidebar( 'news-x-home-sidebar' );
		endif;

		// Sticky Sidebar
		if( is_active_sidebar( 'news-x-sticky-sidebar' ) ){
			?>
			<div class="sticky-sidebar">
				<?php dynamic_sidebar( 'news-x-sticky-sidebar' ); ?>
			</div><!-- /.sticky-sidebar -->
			<?php
		}
	?>
</div><!-- /four /.columns /.sidebar /.widget -->