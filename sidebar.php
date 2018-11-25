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
	<div class="widget-social-links">
		<div class="section-title-blue">
			<span class="title">Stay Connected</span>
		</div>
		<div class="social-list follow">

			<div class="social-box-section fb-icon shadow clearfix">
				<div class="widget-social-icon">
					<div class="part">
						<div class="fa fa-facebook"></div><!-- /.fa -->
					</div><!-- /.part -->
				</div><!-- /.social-icon -->
				<div class="follow-count">
					<div class="part">
						<span class="social_info">167</span>
						<span class="social_info social_info_name">Fans</span>
					</div><!-- /.part -->
				</div><!-- /.follow-count -->	
				<div class="like-button">
					<div class="part">
						<a href="#" target="_blank">Like</a>
					</div><!-- /.part -->
				</div><!-- /.like-button -->
			</div><!-- /.social -->

			<div class="social-box-section gp-icon shadow clearfix">
				<div class="widget-social-icon">
					<div class="part">
						<div class="fa fa-google-plus"></div><!-- /.fa -->
					</div><!-- /.part -->
				</div><!-- /.social-icon -->
				<div class="follow-count">
					<div class="part">
						<span class="social_info">167</span>
						<span class="social_info social_info_name">Fans</span>
					</div><!-- /.part -->
				</div><!-- /.follow-count -->	
				<div class="like-button">
					<div class="part">
						<a href="#" target="_blank">Follow</a>
					</div><!-- /.part -->
				</div><!-- /.like-button -->
			</div><!-- /.social -->

			<div class="social-box-section twitter-icon shadow clearfix">
				<div class="widget-social-icon fb-icon">
					<div class="part">
						<div class="fa fa-twitter"></div><!-- /.fa -->
					</div><!-- /.part -->
				</div><!-- /.social-icon -->
				<div class="follow-count">
					<div class="part">
						<span class="social_info">167</span>
						<span class="social_info social_info_name">Fans</span>
					</div><!-- /.part -->
				</div><!-- /.follow-count -->	
				<div class="like-button">
					<div class="part">
						<a class="" href="#" target="_blank">Follow</a>
					</div><!-- /.part -->
				</div><!-- /.like-button -->
			</div><!-- /.social -->

			<div class="social-box-section linkedin-icon shadow clearfix">
				<div class="widget-social-icon fb-icon">
					<div class="part">
						<div class="fa fa-linkedin"></div><!-- /.fa -->
					</div><!-- /.part -->
				</div><!-- /.social-icon -->
				<div class="follow-count">
					<div class="part">
						<span class="social_info">167</span>
						<span class="social_info social_info_name">Fans</span>
					</div><!-- /.part -->
				</div><!-- /.follow-count -->	
				<div class="like-button">
					<div class="part">
						<a href="#" target="_blank">Follow</a>
					</div><!-- /.part -->
				</div><!-- /.like-button -->
			</div><!-- /.social -->
		
		</div><!-- /.social-link --> 
	</div><!-- /.widget-social-links -->
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