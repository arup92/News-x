<div class="search">
	<form class="searchform" role="search" method="get" action="<?php echo home_url('/'); ?>">
		<input type="search" class="searchTerm" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
		<button type="submit" class="searchButton">
			<i class="fa fa-search"></i>
		</button><!-- /button -->
	</form>
</div><!-- /.search -->