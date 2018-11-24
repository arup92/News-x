<div class="search">
	<form class="searchform" role="search" method="get" action="<?php echo esc_attr( home_url('/') ); ?>">
		<input type="search" class="searchTerm" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'news-x' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'news-x' ) ?>" />
		<button type="submit" class="searchButton">
			<i class="fa fa-search"></i>
		</button><!-- /button -->
	</form>
</div><!-- /.search -->