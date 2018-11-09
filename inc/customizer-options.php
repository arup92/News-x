<?php
/*************************************************************************************************************************
 * Add logo section on the theme customizer.
 ************************************************************************************************************************/

function newsx_brand_setup( $wp_customize ) {
	$wp_customize->add_section( 'newsx-brand-setup-section', array(
		'title'		=>	'Branding',
		'priority'	=>	20,
	) );

	// Upload logo for default header

	$wp_customize->add_setting( 'newsx-default-logo-setting', array(
		'sanitize_callback'	=>	'newsx_sanitize_image',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'newsx-default-logo-control', array(
		'label'			=>	__( 'Upload logo for default header', 'news-x' ),
		'description'	=>	__( 'Upload dark version of your logo. 150x40px is preferred.', 'news-x' ),
		'section'		=>	'newsx-brand-setup-section',
		'settings'		=>	'newsx-default-logo-setting',
	) ) );

	// Upload default featured image

	$wp_customize->add_setting( 'newsx-default-featured-setting', array(
		'sanitize_callback' => 'newsx_sanitize_image',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'newsx-default-featured-control', array(
		'label'			=>	__( 'Upload default featured image', 'news-x' ),
		'description'	=>	__( 'Upload your default featured image. It will be displayed for posts that do not have a featured image set.', 'news-x' ),
		'section'		=>	'newsx-brand-setup-section',
		'settings'		=>	'newsx-default-featured-setting'
	) ) );
}

add_action( 'customize_register', 'newsx_brand_setup');

/**
 * Sanitization: image
 * Control: text, WP_Customize_Image_Control
 *
 * Sanitization callback for images.
 *
 * @uses	theme_slug_validate_image()		
 * @uses	esc_url_raw()				http://codex.wordpress.org/Function_Reference/esc_url_raw
 */
function newsx_sanitize_image( $input, $setting ) {
	return esc_url_raw( newsx_validate_image( $input, $setting->default ) );
}

/**
 * Validation: image
 * Control: text, WP_Customize_Image_Control
 *
 * @uses	wp_check_filetype()		https://developer.wordpress.org/reference/functions/wp_check_filetype/
 * @uses	in_array()				http://php.net/manual/en/function.in-array.php
 */
 
function newsx_validate_image( $input, $default = '' ) {
	// Array of valid image file types
	// The array includes image mime types
	// that are included in wp_get_mime_types()
	$mimes = array(
		'jpg|jpeg|jpe' => 'image/jpeg',
		'gif'          => 'image/gif',
		'png'          => 'image/png',
		'bmp'          => 'image/bmp',
		'tif|tiff'     => 'image/tiff',
		'ico'          => 'image/x-icon'
	);
	// Return an array with file extension
	// and mime_type
	$file = wp_check_filetype( $input, $mimes );
	// If $input has a valid mime_type,
	// return it; otherwise, return
	// the default.
	return ( $file['ext'] ? $input : $default );
}