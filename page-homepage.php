<?php
	/**
	* Template Name: Homepage
	**/
?>
<?php get_header(); ?>
<?php get_template_part( 'template-parts/home/section', 'news-marquee' ); ?>
<?php get_template_part( 'template-parts/home/section', 'slider' ); ?>

			<div class="container two">
				<div class="row main-banner">
					<div class="eight columns">
						<div class="section-two block shadow clearfix">
							<?php get_template_part( 'template-parts/home/section', 'full-block' ); ?>
						</div><!-- /.section-two /.block shadow /.clearfix -->
						<div class="section-three clearfix">
							<?php get_template_part( 'template-parts/home/section', 'half-block' ); ?>
						</div><!-- /.section-three /.block /.shadow /.clearfix -->
					</div> <!-- /.eight .columns -->
					<?php get_sidebar(); ?>
				</div><!-- /.row /.main-banner -->
			</div><!-- /.container -->

			<?php get_template_part( 'template-parts/home/section', 'fullwidth-overlay' ); ?>
			<?php get_template_part( 'template-parts/home/section', 'fullwidth' ); ?>

			<div class="container">
				<div class="twelve columns">
					<div class="more-fancy-h">
						<h5><div class="more-skew"><a href="#">MORE</a></div></h5>
					</div><!-- /.more-fancy-h -->
				</div><!-- /.twelve /.columns -->
			</div><!-- /.container -->	
			
<?php get_footer(); ?>			