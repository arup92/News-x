<div class="u-full-width buttom-bar">
	<div class="container">
		<div class="row vartical-align">
			<div class="five columns">
				<?php if ( get_theme_mod( 'news-x-top-bar-section-control', 'yes' ) == 'yes' ) { ?>
				<div class="right-side-cp-text">
					<p><?php echo esc_html( get_theme_mod( 'news_x_footer_copyright_text_setting', 'Copyright. All Rights Reserved.

' ) ); ?></p>
				</div><!-- /five /.columns -->
				<?php } ?>
			</div><!-- /right-side-cp-text -->
			<div class="seven columns">
				 <?php
                	wp_nav_menu( array( 
						'theme_location' => 'footer_menu',
						'container' => 'seven columns',
						'menu_class' => 'right-side-privacy',
						'depth' => '1'
					) );
				?>
			</div><!-- /.seven /.columns -->
		</div><!-- /.row /.vartical-align -->
	</div><!-- /.container -->
</div><!-- /.u-full-width /.buttom-bar -->