<?php
/*************************************************************************************************************************
 * Add logo section on the theme customizer.
 ************************************************************************************************************************/

function news_x_brand_setup( $wp_customize ) {
	$wp_customize->add_section( 'news_x_brand_setup_section', array(
		'title'		=>	'Branding',
		'priority'	=>	20,
	) );

	// Upload logo for default header

	$wp_customize->add_setting( 'news_x_default_logo_setting', array(
		'sanitize_callback'	=>	'news_x_sanitize_image',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'news_x_default_logo_control', array(
		'label'			=>	__( 'Upload logo for default header', 'news-x' ),
		'description'	=>	__( 'Upload dark version of your logo. 150x40px is preferred.', 'news-x' ),
		'section'		=>	'news_x_brand_setup_section',
		'settings'		=>	'news_x_default_logo_setting',
	) ) );

}

add_action( 'customize_register', 'news_x_brand_setup');

	/*************************************************************************************************************************
	 * Add footer copyright section.
	 ************************************************************************************************************************/

function news_x_topbar_setup( $wp_customize ) {
	$wp_customize->add_section( 'news_x_top_bar_setup_section', array(
		'title'		=>	'Topbar Settings',
	) );

	/******************************** Enable/disable bottom bar copyright section *****************************/
	$wp_customize->add_setting( 'news_x_top_bar_display_setting', array(
		'default'	=>	'yes',
		//'sanitize_callback' => 'writer_blog_sanitize_select',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'news_x_top_bar_display_control', array(
		'label'		=>	__( 'Enable Topbar section?', 'news-x' ),
		'section'	=>	'news_x_top_bar_setup_section',
		'settings'	=>	'news_x_top_bar_display_setting',
		'type'		=>	'select',
		'choices'	=>	array(
							'yes'	=>	'Yes',
							'no'	=>	'No',
						),
	) ) );

	/******************************** Display bottom bar copyright text *****************************/
	$wp_customize->add_setting( 'news_x_top_bar_text_setting', array(
		'default'	=>	'Copyright. All Rights Reserved.',
		//'sanitize_callback' => 'sanitize_textarea_field',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'news-x-top-bar-text-control', array(
		'label'		=>	__( 'Topbar Text', 'news-x' ),
		'type'		=>	'text',
		'section'	=>	'news_x_top_bar_setup_section',
		'settings'	=>	'news_x_top_bar_text_setting',
	) ) );
}

add_action( 'customize_register', 'news_x_topbar_setup');


	/*************************************************************************************************************************
	 * Add social-link section.
	 ************************************************************************************************************************/

function news_x_sociallink_setup( $wp_customize ) {
	$wp_customize->add_section( 'news_x_social_links_setup_section', array(
		'title'		=>	'Social Links',
	) );

	/******************************** Display facebook link *****************************/
	$wp_customize->add_setting( 'news_x_facebook_text_setting', array(
		'default'	=>	'#',
		//'sanitize_callback' => 'sanitize_textarea_field',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'news-x-facebook-text-control', array(
		'label'		=>	__( 'Facebook', 'news-x' ),
		'type'		=>	'text',
		'section'	=>	'news_x_social_links_setup_section',
		'settings'	=>	'news_x_facebook_text_setting',
	) ) );

	/******************************** Display twitter link *****************************/
	$wp_customize->add_setting( 'news_x_twitter_text_setting', array(
		'default'	=>	'#',
		//'sanitize_callback' => 'sanitize_textarea_field',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'news-x-twitter-text-control', array(
		'label'		=>	__( 'Twitter', 'news-x' ),
		'type'		=>	'text',
		'section'	=>	'news_x_social_links_setup_section',
		'settings'	=>	'news_x_twitter_text_setting',
	) ) );

	/******************************** Display Instagram link *****************************/
	$wp_customize->add_setting( 'news_x_instagram_text_setting', array(
		'default'	=>	'#',
		//'sanitize_callback' => 'sanitize_textarea_field',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'news-x-instagram-text-control', array(
		'label'		=>	__( 'Instagram', 'news-x' ),
		'type'		=>	'text',
		'section'	=>	'news_x_social_links_setup_section',
		'settings'	=>	'news_x_instagram_text_setting',
	) ) );

	/******************************** Display Youtube link *****************************/
	$wp_customize->add_setting( 'news_x_youtube_text_setting', array(
		'default'	=>	'#',
		//'sanitize_callback' => 'sanitize_textarea_field',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'news-x-youtube-control', array(
		'label'		=>	__( 'Youtube', 'news-x' ),
		'type'		=>	'text',
		'section'	=>	'news_x_social_links_setup_section',
		'settings'	=>	'news_x_youtube_text_setting',
	) ) );
	/******************************** Display Whatsapp link *****************************/
	$wp_customize->add_setting( 'news_x_whatsapp_text_setting', array(
		'default'	=>	'#',
		//'sanitize_callback' => 'sanitize_textarea_field',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'news-x-whatsapp-control', array(
		'label'		=>	__( 'Whatsapp', 'news-x' ),
		'type'		=>	'text',
		'section'	=>	'news_x_social_links_setup_section',
		'settings'	=>	'news_x_whatsapp_text_setting',
	) ) );
	/******************************** Display LinkedIn link *****************************/
	$wp_customize->add_setting( 'news_x_linkedin_text_setting', array(
		'default'	=>	'#',
		//'sanitize_callback' => 'sanitize_textarea_field',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'news-x-linkedin-control', array(
		'label'		=>	__( 'LinkedIn', 'news-x' ),
		'type'		=>	'text',
		'section'	=>	'news_x_social_links_setup_section',
		'settings'	=>	'news_x_linkedin_text_setting',
	) ) );


}

add_action( 'customize_register', 'news_x_sociallink_setup');

/*************************************************************************************************************************
 * Add homepage customization section on the theme customizer.
 ************************************************************************************************************************/

function newsx_homepage_setup_setup( $wp_customize ) {

	$wp_customize->add_panel( 'news_x_big_section_panel', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Homepage Customization', 'news-x' ),
		'description' => __( 'Description of what this panel does.', 'news-x' ),
	) );

	// Slider Section
	$wp_customize->add_section( 'news_x_slider_section', array(
		'title'		=>	'Slider Section',
		'priority'	=>	10,
		'panel' => 'news_x_big_section_panel',
	) );

	/******************************** Slider Category *****************************/
	// Credits: https://blog.josemcastaneda.com/2015/05/13/customizer-dropdown-category-selection/
	// create an empty array
	$cats = array();
	 
	// we loop over the categories and set the names and
	// labels we need
	foreach ( get_categories() as $categories => $category ){
		$cats[$category->term_id] = $category->name;
	}
	 
	 /******************************** Slider Category Select *****************************/
	// we register our new setting
	$wp_customize->add_setting( 'news_x_slider_category_setting', array(
	    'default' => 1,
	    'sanitize_callback' => 'absint'
	) );

	// we create our control for the setting
	$wp_customize->add_control( 'news_x_slider_category_control', array(
		'label'		=>	__( 'Select Slider Category', 'news-x' ),
	    'settings' => 'news_x_slider_category_setting',
	    'type' => 'select',
	    'choices' => $cats,
	    'section' => 'news_x_slider_section',
	) );
	//---------------------------------------------------------//

	/******************************** Featured block *****************************/
	// Credits: https://blog.josemcastaneda.com/2015/05/13/customizer-dropdown-category-selection/
	// create an empty array
	$cats = array();
	 
	// we loop over the categories and set the names and
	// labels we need
	foreach ( get_categories() as $categories => $category ){
		$cats[$category->term_id] = $category->name;
	}
	 
	 /******************************** Featured Block Category Select *****************************/
	// we register our new setting
	$wp_customize->add_setting( 'news_x_featured_category_setting', array(
	    'default' => 1,
	    'sanitize_callback' => 'absint'
	) );

	// we create our control for the setting
	$wp_customize->add_control( 'news_x_featured_category_control', array(
		'label'		=>	__( 'Select Featured Block Category', 'news-x' ),
	    'settings' => 'news_x_featured_category_setting',
	    'type' => 'select',
	    'choices' => $cats,
	    'section' => 'news_x_slider_section',
	) );
	//---------------------------------------------------------//

	// Big Category section
	$wp_customize->add_section( 'news_x_big_category_section', array(
		'title'		=>	'Big Category Section',
		'priority'	=>	10,
		'panel' => 'news_x_big_section_panel',
	) );

	/******************************** Big Category *****************************/
	// Credits: https://blog.josemcastaneda.com/2015/05/13/customizer-dropdown-category-selection/
	// create an empty array
	$cats = array();
	 
	// we loop over the categories and set the names and
	// labels we need
	foreach ( get_categories() as $categories => $category ){
		$cats[$category->term_id] = $category->name;
	}
	 
	 /******************************** Big Category Select *****************************/
	// we register our new setting
	$wp_customize->add_setting( 'news_x_big_section_category_setting', array(
	    'default' => 1,
	    'sanitize_callback' => 'absint'
	) );

	// we create our control for the setting
	$wp_customize->add_control( 'news_x_big_section_category_control', array(
		'label'		=>	__( 'Select Category', 'news-x' ),
	    'settings' => 'news_x_big_section_category_setting',
	    'type' => 'select',
	    'choices' => $cats,
	    'section' => 'news_x_big_category_section',
	) );
	//---------------------------------------------------------//

	$wp_customize->add_setting( 'news_x_big_section_title_setting', array(
		'default'	=>	'News',
		//'sanitize_callback' => 'sanitize_textarea_field',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'news_x_big_section_title_control', array(
		'label'		=>	__( 'Category Title', 'news-x' ),
		'type'		=>	'text',
		'section'	=>	'news_x_big_category_section',
		'settings'	=>	'news_x_big_section_title_setting',
	) ) );

	/******************************** Big Category *****************************/
	// Credits: https://blog.josemcastaneda.com/2015/05/13/customizer-dropdown-category-selection/
	// create an empty array
	$cats = array();
	 
	// we loop over the categories and set the names and
	// labels we need
	foreach ( get_categories() as $categories => $category ){
		$cats[$category->term_id] = $category->name;
	}
	 
	 /******************************** Big Section Category Select *****************************/
	// we register our new setting
	$wp_customize->add_setting( 'news_x_big_section_category_setting', array(
	    'default' => 1,
	    'sanitize_callback' => 'absint'
	) );

	// we create our control for the setting
	$wp_customize->add_control( 'news_x_big_section_category_control', array(
		'label'		=>	__( 'Select Category', 'news-x' ),
	    'settings' => 'news_x_big_section_category_setting',
	    'type' => 'select',
	    'choices' => $cats,
	    'section' => 'news_x_big_category_section',
	) );
//---------------------------------------------------------//
	$wp_customize->add_section( 'news_x_first_half_category_section', array(
		'title'		=>	'First Half Category Section',
		'priority'	=>	10,
		'panel' => 'news_x_big_section_panel',
	) );

	// Display bottom bar copyright text
	$wp_customize->add_setting( 'news_x_first_half_section_title_setting', array(
		'default'	=>	'News',
		//'sanitize_callback' => 'sanitize_textarea_field',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'news_x_first_half_section_title_control', array(
		'label'		=>	__( 'Category Title', 'news-x' ),
		'type'		=>	'text',
		'section'	=>	'news_x_first_half_category_section',
		'settings'	=>	'news_x_first_half_section_title_setting',
	) ) );
	/********************************  *****************************/
	// Credits: https://blog.josemcastaneda.com/2015/05/13/customizer-dropdown-category-selection/
	// create an empty array
	$cats = array();
	 
	// we loop over the categories and set the names and
	// labels we need
	foreach ( get_categories() as $categories => $category ){
		$cats[$category->term_id] = $category->name;
	}
	 
	 /********************************_first_half Section Category Select *****************************/
	// we register our new setting
	$wp_customize->add_setting( 'news_x_first_half_section_category_setting', array(
	    'default' => 1,
	    'sanitize_callback' => 'absint'
	) );

	// we create our control for the setting
	$wp_customize->add_control( 'news_x_first_half_section_category_control', array(
		'label'		=>	__( 'Select Category', 'news-x' ),
	    'settings' => 'news_x_first_half_section_category_setting',
	    'type' => 'select',
	    'choices' => $cats,
	    'section' => 'news_x_first_half_category_section',
	) );

	/********************************_second_ *****************************/
	
	$wp_customize->add_section( 'news_x_second_half_category_section', array(
			'title'		=>	'Second Helf Category Section',
			'priority'	=>	10,
			'panel' => 'news_x_big_section_panel',
		) );

		// Display bottom bar copyright text
		$wp_customize->add_setting( 'news_x_second_half_section_title_setting', array(
			'default'	=>	'News',
			//'sanitize_callback' => 'sanitize_textarea_field',
		) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'news_x_second_halff_section_title_control', array(
			'label'		=>	__( 'Category Title', 'news-x' ),
			'type'		=>	'text',
			'section'	=>	'news_x_second_half_category_section',
			'settings'	=>	'news_x_second_half_section_title_setting',
		) ) );
		/********************************  *****************************/
		// Credits: https://blog.josemcastaneda.com/2015/05/13/customizer-dropdown-category-selection/
		// create an empty array
		$cats = array();
		 
		// we loop over the categories and set the names and
		// labels we need
		foreach ( get_categories() as $categories => $category ){
			$cats[$category->term_id] = $category->name;
		}
		 
		 /********************************_first_half Section Category Select *****************************/
		// we register our new setting
		$wp_customize->add_setting( 'news_x_second_half_section_category_setting', array(
		    'default' => 1,
		    'sanitize_callback' => 'absint'
		) );

		// we create our control for the setting
		$wp_customize->add_control( 'news_x_second_half_section_category_control', array(
			'label'		=>	__( 'Select Category', 'news-x' ),
		    'settings' => 'news_x_second_half_section_category_setting',
		    'type' => 'select',
		    'choices' => $cats,
		    'section' => 'news_x_second_half_category_section',
		) );


/********************************_Third_ *****************************/
	
	$wp_customize->add_section( 'news_x_fullwidth-overlay_category_section', array(
			'title'		=>	'Fullwidth Overlay Section',
			'priority'	=>	10,
			'panel' => 'news_x_big_section_panel',
		) );

		// Display bottom bar copyright text
		$wp_customize->add_setting( 'news_x_fullwidth-overlay_section_title_setting', array(
			'default'	=>	'News',
			//'sanitize_callback' => 'sanitize_textarea_field',
		) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'news_x_fullwidth-overlay_section_title_control', array(
			'label'		=>	__( 'Category Title', 'news-x' ),
			'type'		=>	'text',
			'section'	=>	'news_x_fullwidth-overlay_category_section',
			'settings'	=>	'news_x_fullwidth-overlay_section_title_setting',
		) ) );
		/********************************  *****************************/
		// Credits: https://blog.josemcastaneda.com/2015/05/13/customizer-dropdown-category-selection/
		// create an empty array
		$cats = array();
		 
		// we loop over the categories and set the names and
		// labels we need
		foreach ( get_categories() as $categories => $category ){
			$cats[$category->term_id] = $category->name;
		}
		 
		 /********************************_first_half Section Category Select *****************************/
		// we register our new setting
		$wp_customize->add_setting( 'news_x_fullwidth-overlay_section_category_setting', array(
		    'default' => 1,
		    'sanitize_callback' => 'absint'
		) );

		// we create our control for the setting
		$wp_customize->add_control( 'news_x_fullwidth-overlay_section_category_control', array(
			'label'		=>	__( 'Select Category', 'news-x' ),
		    'settings' => 'news_x_fullwidth-overlay_section_category_setting',
		    'type' => 'select',
		    'choices' => $cats,
		    'section' => 'news_x_fullwidth-overlay_category_section',
		) );

/********************************_Forth_ *****************************/
	
	$wp_customize->add_section( 'news_x_fullwidth-post_category_section', array(
			'title'		=>	'Fullwidth Post Section',
			'priority'	=>	10,
			'panel' => 'news_x_big_section_panel',
		) );

		// Display bottom bar copyright text
		$wp_customize->add_setting( 'news_x_fullwidth-post_section_title_setting', array(
			'default'	=>	'News',
			//'sanitize_callback' => 'sanitize_textarea_field',
		) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'news_x_fullwidth-post_section_title_control', array(
			'label'		=>	__( 'Category Title', 'news-x' ),
			'type'		=>	'text',
			'section'	=>	'news_x_fullwidth-post_category_section',
			'settings'	=>	'news_x_fullwidth-post_section_title_setting',
		) ) );
		/********************************  *****************************/
		// Credits: https://blog.josemcastaneda.com/2015/05/13/customizer-dropdown-category-selection/
		// create an empty array
		$cats = array();
		 
		// we loop over the categories and set the names and
		// labels we need
		foreach ( get_categories() as $categories => $category ){
			$cats[$category->term_id] = $category->name;
		}
		 
		 /********************************_first_half Section Category Select *****************************/
		// we register our new setting
		$wp_customize->add_setting( 'news_x_fullwidth-post_section_category_setting', array(
		    'default' => 1,
		    'sanitize_callback' => 'absint'
		) );

		// we create our control for the setting
		$wp_customize->add_control( 'news_x_fullwidth-post_section_category_control', array(
			'label'		=>	__( 'Select Category', 'news-x' ),
		    'settings' => 'news_x_fullwidth-post_section_category_setting',
		    'type' => 'select',
		    'choices' => $cats,
		    'section' => 'news_x_fullwidth-post_category_section',
		) );


	/********************************_Forth_ *****************************/
	
	$wp_customize->add_section( 'news_x_flash_post_category_section', array(
			'title'		=>	'Flash Post Section',
			'priority'	=>	10,
			'panel' => 'news_x_big_section_panel',
		) );

		// Display bottom bar copyright text
		$wp_customize->add_setting( 'news_x_flash_post_section_title_setting', array(
			'default'	=>	'Braking News',
			//'sanitize_callback' => 'sanitize_textarea_field',
		) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'news_x_flash_post_section_title_control', array(
			'label'		=>	__( 'Category Title', 'news-x' ),
			'type'		=>	'text',
			'section'	=>	'news_x_flash_post_category_section',
			'settings'	=>	'news_x_flash_post_section_title_setting',
		) ) );

}
add_action( 'customize_register', 'newsx_homepage_setup_setup');

	/*************************************************************************************************************************
	 * Add footer copyright section.
	 ************************************************************************************************************************/

function news_x_footer_copyright_setup( $wp_customize ) {
	$wp_customize->add_section( 'news_x_footer_copyright_setup_section', array(
		'title'		=>	'Footer Settings',
	) );

	/******************************** Enable/disable bottom bar copyright section *****************************/
	$wp_customize->add_setting( 'news_x_footer_copyright_display_setting', array(
		'default'	=>	'yes',
		//'sanitize_callback' => 'writer_blog_sanitize_select',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'news_x_footer_copyright_display_control', array(
		'label'		=>	__( 'Enable bottom bar copyright section?', 'news-x' ),
		'section'	=>	'news_x_footer_copyright_setup_section',
		'settings'	=>	'news_x_footer_copyright_display_setting',
		'type'		=>	'select',
		'choices'	=>	array(
							'yes'	=>	'Yes',
							'no'	=>	'No',
						),
	) ) );

	/******************************** Display bottom bar copyright text *****************************/
	$wp_customize->add_setting( 'news_x_footer_copyright_text_setting', array(
		'default'	=>	'Copyright. All Rights Reserved.',
		//'sanitize_callback' => 'sanitize_textarea_field',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'news-x-footer-copyright-text-control', array(
		'label'		=>	__( 'Bottom bar copyright text', 'news-x' ),
		'type'		=>	'textarea',
		'section'	=>	'news_x_footer_copyright_setup_section',
		'settings'	=>	'news_x_footer_copyright_text_setting',
	) ) );
}

add_action( 'customize_register', 'news_x_footer_copyright_setup');

/**
 * Sanitization: image
 * Control: text, WP_Customize_Image_Control
 *
 * Sanitization callback for images.
 *
 * @uses	theme_slug_validate_image()		
 * @uses	esc_url_raw()				http://codex.wordpress.org/Function_Reference/esc_url_raw
 */
function news_x_sanitize_image( $input, $setting ) {
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