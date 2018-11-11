<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Mobile Specific Data -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<?php wp_head(); ?>
	</head>
	<body>

		<?php get_template_part( 'template-parts/header/top', 'bar' ); ?>

		<header>
			<div class="u-full-width header">
				<div class="container">
					<div class="row vartical-align header-main">
						<div class="six columns">
								 <?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
						</div><!-- /.six ./columns -->
						<div class="six columns ">
							<div class="right-side-ad vartical-align">
									<img src="img/ad-banner.jpg" alt="ad banner">
							</div><!-- /.right-side-ad ./vartical-align -->
						</div><!-- /.six ./columns -->
					</div><!-- /.row /.vartical-align /.header-main -->
				</div><!-- /.container -->
			</div><!-- /.u-full-width /.header-->
		</header>
			<div class="u-full-width nav-manu">
				<div class="container">
		            <div class="row vertical-align">	
		                <div class="twelve columns">
			                <?php
			                	wp_nav_menu( array( 
									'theme_location' => 'header_menu',
									'container' => 'nav',
									'menu_class' => 'main-nav',
									'depth' => '3'
								) );
							?>
		                </div> <!-- /.twelve /.columns -->
		            </div><!-- /.row /.vertical-align -->
		        </div><!-- /.container -->
			</div><!-- /.u-full-width /.nav-manu -->

			<div class="container mobile-menu-container">
				<div class="row">
					<div class="mobile-navigation">
						<span class="menubar-right fa fa-bars"></span>        
						<nav class="nav-parent">
							<span class="menubar-close fa fa-times"></span>
							<ul class="mobile-nav">
								<li><a href="#">HOME</a></li>
								<li class="has-children">
									<a href="#">PAGES</a>
									<span class="dropdown-toggle fa fa-angle-down"></span>
									<ul>
										<li><a href="#">Lorem</a></li>
										<li class="has-sub-children">
											<a href="#">Ipsum</a>
											<span class="dropdown-toggle fa fa-angle-down"></span>
											<ul>
												<li><a href="#">About me</a></li>
												<li><a href="#">About us</a></li>
											</ul>
										</li>
										<li><a href="#">Dolor Sit</a></li>
									</ul>
								</li>
								<li class="has-children">
									<a href="#about">ABOUT</a>
									<span class="dropdown-toggle fa fa-angle-down"></span>
									<ul>
										<li><a href="#">About Techy</a></li>
										<li><a href="#">About</a></li>
										<li><a href="#">About 3People</a></li>
										<li><a href="#">About Envato</a></li>
									</ul>
								</li>
								<li><a href="#">CONTACT</a></li>
							</ul>
						</nav>
					</div> <!-- /.mobile-navigation -->
				</div>
			</div>