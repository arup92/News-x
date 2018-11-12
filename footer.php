		<?php if ( is_active_sidebar( 'news-x-footer-left' ) || is_active_sidebar( 'news-x-footer-middle' ) || is_active_sidebar( 'news-x-footer-right' ) ) : ?>

			<div class="u-full-width footer">
				<div class="container">
					<div class="row">
						
						<?php dynamic_sidebar( 'news-x-footer-left' ); ?>
						<?php dynamic_sidebar( 'news-x-footer-middle' ); ?>
						<?php dynamic_sidebar( 'news-x-footer-right' ); ?>

					</div><!-- /.row -->	
				</div><!-- /.container -->
			</div><!-- /.u-full-width /.footer -->

		<?php
			endif;
			get_template_part( 'template-parts/footer/bottom', 'bar' );
		?>
		<?php wp_footer(); ?>
  	</body>
</html>