<?php if ( get_theme_mod( 'news_x_top_bar_display_setting', 'yes' ) == 'yes' ) : ?>
<div class="u-full-width top-bar">
	<div class="top-bar-style"></div><!-- /.top-bar-style -->
	<div class="container">
		<div class="row vartical-align">
			<div class="five columns">
				<ul class="social-icons">
					<?php if( get_theme_mod( 'news_x_facebook_text_setting', '#' ) ) : ?>
						<li><a href="<?php echo esc_html( get_theme_mod( 'news_x_facebook_text_setting', '#' ) ); ?>" class="social-icon facebook"></a></li>
					<?php endif; ?>
					<?php if( get_theme_mod( 'news_x_twitter_text_setting', '#' ) ) : ?>
					<li><a href="<?php echo esc_html( get_theme_mod( 'news_x_twitter_text_setting', '#' ) ); ?>" class="social-icon twitter"></a></li>
					<?php endif; ?>
					<?php if( get_theme_mod( 'news_x_youtube_text_setting', '#' ) ) : ?>
					<li><a href="<?php echo esc_html( get_theme_mod( 'news_x_youtube_text_setting', '#' ) ); ?>" class="social-icon youtube"></a></li>
					<?php endif; ?>
					<?php if( get_theme_mod( 'news_x_linkedin_text_setting', '#' ) ) : ?>
					<li><a href="<?php echo esc_html( get_theme_mod( 'news_x_linkedin_text_setting', '#' ) ); ?>" class="social-icon linkedin"></a></li>
					<?php endif; ?>
					<?php if( get_theme_mod( 'news_x_instagram_text_setting', '#' ) ) : ?>
					<li><a href="<?php echo esc_html( get_theme_mod( 'news_x_instagram_text_setting', '#' ) ); ?>" class="social-icon instagram"></a></li>
					<?php endif; ?>
					<?php if( get_theme_mod( 'news_x_whatsapp_text_setting', '#' ) ) : ?>
					<li><a href="<?php echo esc_html( get_theme_mod( 'news_x_whatsapp_text_setting', '#' ) ); ?>" class="social-icon whatsapp"></a></li>
					<?php endif; ?>
				</ul>
			</div><!-- /.five /.columns -->
			<div class="seven columns">
				<div class="right-side-account">
					<p><?php echo esc_html( get_theme_mod( 'news_x_top_bar_text_setting', 'News' ) ); ?></p>
				</div>
			</div><!-- /.seven columns -->
		</div> <!-- /.row vartical-align -->
	</div><!-- /.container -->
</div><!-- /.u-full-width /.top-bar -->
<?php endif; ?>