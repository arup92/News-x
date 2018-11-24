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
	?>
</div><!-- /four /.columns /.sidebar /.widget -->