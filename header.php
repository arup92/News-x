<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Mobile Specific Data -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="mobile-menu-overlay"></div>
		<?php get_template_part( 'template-parts/header/top', 'bar' ); ?>

		<header>
			<div class="u-full-width header">
				<div class="container">
					<div class="row vartical-align header-main">
						<div class="five columns">
								 <?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
						</div><!-- /.six ./columns -->
						<div class="seven columns ">
							<div class="right-side-ad vartical-align">
									<?php dynamic_sidebar( 'news-x-header-ad-right' ); ?>
							</div><!-- /.right-side-ad ./vartical-align -->
						</div><!-- /.six ./columns -->
					</div><!-- /.row /.vartical-align /.header-main -->
				</div><!-- /.container -->
			</div><!-- /.u-full-width /.header-->
		</header>
			<div class="u-full-width nav-menu">
				<div class="container">
		            <div class="row vertical-align">	
		                <div class="nine columns header-navigation">
			                <?php
			                	wp_nav_menu( array( 
									'theme_location' => 'header_menu',
									'container' => 'nav',
									'menu_class' => 'main-nav',
									'depth' => '3'
								) );
							?>
		                </div> <!-- /.eight /.columns -->
		                <div class="three columns">
							<div class="search-wrap">
		                		<?php get_template_part( 'template-parts/header/search', 'form' ); ?>
		                	</div><!-- /.search-wrap -->
						</div><!-- /.three columns -->
		            </div><!-- /.row /.vertical-align -->
		        </div><!-- /.container -->
			</div><!-- /.u-full-width /.nav-manu -->

			<div class="container mobile-menu-container">
			    <div class="row">
				    <div class="mobile-navigation">
			    		<span class="menubar-right fa fa-bars"></span>
		        		<nav class="nav-parent">
							<span class="menubar-close fa fa-times"></span>
		        			<?php
								wp_nav_menu( array(
									'theme_location'	=> 'mobile_menu',
									'container'			=> false,
									'menu_class'		=> 'mobile-nav',
									'depth'				=> '3',
									'walker'			=> new news_x_dropdown_toggle_walker_nav_menu()
								) );
							?>
							<div class="search-mobile">
								<?php get_template_part( 'template-parts/header/search', 'form' ); ?>
							</div><!-- /.search-mobile -->
						</nav>
					</div> <!-- /.mobile-navigation -->
			    </div>
		    </div>