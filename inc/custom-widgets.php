<?php
/**
 * Custom Widgets are declared here
 */

/**
 * Register widget area.
 */

if ( ! function_exists( 'ct_widgets_init' ) ) :

function ct_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar For Single Post', 'news-x' ),
		'id'            => 'news-x-single-post-right',
		'description'   => __( 'Add widgets here to appear on your post page sidebar section.', 'news-x' ),
		'before_widget' => '<div id="%1$s" class="%2$s sidebar-widget block shadow">',
		'after_widget'  => '</div><!-- /.four columns -->',
		'before_title'  => '<h3 class="footer-widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar', 'news-x' ),
		'id'            => 'news-x-home-sidebar',
		'description'   => __( 'Add widgets here to appear in your sidebar on front page of your website.', 'news-x' ),
		'before_widget' => '<div id="%1$s" class="%2$s sidebar-widget block shadow">',
		'after_widget'  => '</div><!-- /.block -->',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Left', 'news-x' ),
		'id'            => 'news-x-footer-left',
		'description'   => __( 'Add widgets here to appear on your left footer section.', 'news-x' ),
		'before_widget' => '<div id="%1$s" class="%2$s four columns widget-footer-left">',
		'after_widget'  => '</div><!-- /.four columns -->',
		'before_title'  => '<h3 class="footer-widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Middle', 'news-x' ),
		'id'            => 'news-x-footer-middle',
		'description'   => __( 'Add widgets here to appear on your middle footer section.', 'news-x' ),
		'before_widget' => '<div id="%1$s" class="%2$s four columns">',
		'after_widget'  => '</div><!-- /.four columns -->',
		'before_title'  => '<h3 class="footer-widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Right', 'news-x' ),
		'id'            => 'news-x-footer-right',
		'description'   => __( 'Add widgets here to appear on your right footer section.', 'news-x' ),
		'before_widget' => '<div id="%1$s" class="%2$s four columns">',
		'after_widget'  => '</div><!-- /.four columns -->',
		'before_title'  => '<h3 class="footer-widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar For Single Post', 'news-x' ),
		'id'            => 'news-x-post-page-right',
		'description'   => __( 'Add widgets here to appear on your post page sidebar section.', 'news-x' ),
		'before_widget' => '<div id="%1$s" class="%2$s four columns">',
		'after_widget'  => '</div><!-- /.four columns -->',
		'before_title'  => '<h3 class="footer-widget-title">',
		'after_title'   => '</h3>',
	) );
}

endif;

add_action( 'widgets_init', 'ct_widgets_init' );