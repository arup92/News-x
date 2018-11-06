<?php
	/**
	 * Template part for displaying news slider section in homepage
	 */

	$slider_args = array(
		'post_type'			=>	'post',
		'posts_per_page'	=>	5,
		'order'				=>	'DESC',
	);

	$slider_item  = new WP_Query( $slider_args );
?>