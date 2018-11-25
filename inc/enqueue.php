<?php

if ( ! function_exists( 'newsx_cs_js' ) ) :

function newsx_cs_js() {
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'slick-carousel', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'slick-carousel', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), '1.0.0', 'all' );  
    wp_enqueue_style( 'skeleton', get_template_directory_uri() . '/assets/css/skeleton.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'marquee', get_template_directory_uri() . '/assets/js/jquery.marquee.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/jquery-slick.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/jquery-custom.js', array( 'jquery' ), '1.0.0', true );
}

endif;

add_action( 'wp_enqueue_scripts', 'newsx_cs_js' );

if ( ! function_exists( 'newsx_admin_scripts' ) ) :

function newsx_admin_scripts() {
	wp_enqueue_media();
	wp_enqueue_script( 'admin-script', get_template_directory_uri() . '/js/admin-script.js', array( 'jquery' ) );
}

endif;

add_action( 'admin_enqueue_scripts', 'newsx_admin_scripts' );