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

	<div class="sidebar-widget block shadow">
		<div class="section-title-blue">
			<span class="title">News</span>
		</div>
		<div class="2big-category-section">
			<img src="img/ad-section.png" class="full-image" alt="blog post">
		</div>
	</div><!-- /.sidebar-widget -->

	<div class="sidebar-widget block shadow">
		<div class="section-title-blue">
			<span class="title">Style</span>
		</div>
		<div class="post-overlay zoom">
		<div class="overlay"></div><!-- /.overlay -->
		<img src="img/banner-image.jpg" alt="ad banner" style="width: 100%; height: 100%;">
		<div class="post-content">
			<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
		</div><!-- /.post-content -->
	</div>
	</div><!-- /.sidebar-widget -->	
</div><!-- /four /.columns /.sidebar /.widget -->