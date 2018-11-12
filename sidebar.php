<?php
/**
 * The sidebar for Homepage
 */
?>
<div class="four columns sidebar widget">
	<?php
		if ( is_single() ) :
			dynamic_sidebar( 'news-x-single-post-right' );
		else :
			dynamic_sidebar( 'news-x-home-sidebar' );
		endif;
	?>
</div><!-- /four /.columns /.sidebar /.widget -->