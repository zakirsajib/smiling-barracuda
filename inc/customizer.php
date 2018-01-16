<?php
/**
 * Barracuda Theme Customizer
 *
 * @package Barracuda
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function barracuda_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Remove Existing sections
	$wp_customize->remove_section('header_image');
	$wp_customize->remove_section('background_image');	
	
	// Remove Existing controls
	$wp_customize->remove_control('header_textcolor');
	$wp_customize->remove_control('background_color');
	
	// Add Extra Logo on Customizer's existing section 'title_tagline'
	$wp_customize->add_setting( 'header_logo', 
		array(
			'default' => '',
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize,'header_logo',
	        array(
	            'label' => __( 'Logo Upload on scroll', 'barracuda' ),
	            'section' => 'title_tagline',
	            'settings' => 'header_logo',
	            'description' => 'Recommended Size: 296 x 278 pixels. Preferred Image format is SVG',
	        )
	    )
	);
	// Add Footer panel
	$wp_customize->add_panel( 'footer_panel_barracuda', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Footer', 'barracuda' ),
	    'description' => __( 'Add supporters logo and web link', 'barracuda' ),
	) );
	$wp_customize->add_section( 'supporters_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Supporters URLs', 'barracuda' ),
	    'description' => '',
	    'panel' => 'footer_panel_barracuda',
	) );
	
	// Supported By Label
	$wp_customize->add_setting( 'supporter_field', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => '',
	) );

	$wp_customize->add_control( 'supporter_field', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'supporters_id',
	    'label' => __( 'Supported By Label Field', 'barracuda' ),
	    'description' => '',
	) );
	
	// Capital Enterprise URL and Logo
	// Logo
	$wp_customize->add_setting( 'ce_logo', 
		array(
			'default' => '',
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize,'ce_logo',
	        array(
	            'label' => __( 'Capital Enterprise Logo Upload ', 'barracuda' ),
	            'section' => 'supporters_id',
	            'settings' => 'ce_logo',
	            'description' => 'Preferred Image format is PNG/SVG',
	        )
	    )
	);
	// URL
	$wp_customize->add_setting( 'url_field_ce', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'url_field_ce', array(
	    'type' => 'url',
	    'priority' => 10,
	    'section' => 'supporters_id',
	    'label' => __( 'Capital Enterprise URL Field', 'barracuda' ),
	    'description' => '',
	) );
	// CASTS URL and Logo
	// Logo
	$wp_customize->add_setting( 'casts_logo', 
		array(
			'default' => '',
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize,'casts_logo',
	        array(
	            'label' => __( 'CASTS Logo Upload ', 'barracuda' ),
	            'section' => 'supporters_id',
	            'settings' => 'casts_logo',
	            'description' => 'Preferred Image format is PNG/SVG',
	        )
	    )
	);
	// URL
	$wp_customize->add_setting( 'url_field_casts', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'url_field_casts', array(
	    'type' => 'url',
	    'priority' => 10,
	    'section' => 'supporters_id',
	    'label' => __( 'CASTS URL Field', 'barracuda' ),
	    'description' => '',
	) );
	// EU URL and Logo
	// Logo
	$wp_customize->add_setting( 'eu_logo', 
		array(
			'default' => '',
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize,'eu_logo',
	        array(
	            'label' => __( 'European Union (EU) Logo Upload ', 'barracuda' ),
	            'section' => 'supporters_id',
	            'settings' => 'eu_logo',
	            'description' => 'Preferred Image format is PNG/SVG',
	        )
	    )
	);
	// URL
	$wp_customize->add_setting( 'url_field_eu', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'url_field_eu', array(
	    'type' => 'url',
	    'priority' => 10,
	    'section' => 'supporters_id',
	    'label' => __( 'European Union Field', 'barracuda' ),
	    'description' => '',
	) );
	
	// Add Social panel
	$wp_customize->add_panel( 'social_panel_barracuda', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Social Media', 'barracuda' ),
	    'description' => __( 'Add social web link', 'barracuda' ),
	) );
	$wp_customize->add_section( 'social_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Social Media URLs', 'barracuda' ),
	    'description' => '',
	    'panel' => 'social_panel_barracuda',
	) );
	// Twitter URL
	$wp_customize->add_setting( 'url_field_twitter', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'url_field_twitter', array(
	    'type' => 'url',
	    'priority' => 10,
	    'section' => 'social_id',
	    'label' => __( 'Twitter URL Field', 'barracuda' ),
	    'description' => '',
	) );
	// LinkedIn URL
	$wp_customize->add_setting( 'url_field_linkedin', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'url_field_linkedin', array(
	    'type' => 'url',
	    'priority' => 10,
	    'section' => 'social_id',
	    'label' => __( 'LinkedIn URL Field', 'barracuda' ),
	    'description' => '',
	) );
	// Facebook URL
	$wp_customize->add_setting( 'url_field_facebook', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'url_field_facebook', array(
	    'type' => 'url',
	    'priority' => 10,
	    'section' => 'social_id',
	    'label' => __( 'Facebook URL Field', 'barracuda' ),
	    'description' => '',
	) );
	// Google Plus URL
	$wp_customize->add_setting( 'url_field_google', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'url_field_google', array(
	    'type' => 'url',
	    'priority' => 10,
	    'section' => 'social_id',
	    'label' => __( 'Google Plus URL Field', 'barracuda' ),
	    'description' => '',
	) );
	
	
	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'barracuda_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'barracuda_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'barracuda_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function barracuda_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function barracuda_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function barracuda_customize_preview_js() {
	wp_enqueue_script( 'barracuda-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'barracuda_customize_preview_js' );
