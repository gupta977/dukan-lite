<?php

/**
 * Dukan Lite Theme Customizer
 *
 * @package Dukan_Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function dukan_lite_customize_register($wp_customize)
{
	$wp_customize->get_setting('blogname')->transport         = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

	if (isset($wp_customize->selective_refresh)) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'dukan_lite_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'dukan_lite_customize_partial_blogdescription',
			)
		);
	}

	/*
 * Create a new customizer section
 * Name: Blog Options
 */
	/**
	 * Theme Options Panel
	 */
	$wp_customize->add_panel('dukan_theme_options', array(
		'title'    => esc_html__('Dukan Theme Options', 'dukan-lite'),
		'priority' => 1,
	));


	$wp_customize->add_section('blog_options', array(
		'title' => esc_html__('Blog Options', 'dukan-lite'),
		'panel'       => 'dukan_theme_options',
		'priority'       => 35,
	));


	// Setting group for blog layout  
	$wp_customize->add_setting('blog_style', array(
		'default' => 'top-featured-right',
		'sanitize_callback' => 'dukan_lite_sanitize_blogstyle',
	));
	$wp_customize->add_control('blog_style', array(
		'type' => 'radio',
		'label' => esc_html__('Blog Style', 'dukan-lite'),
		'section' => 'blog_options',
		'priority' => 1,
		'choices' => array(
			'top-featured-right' => esc_html__('Top Featured Image Right Sidebar', 'dukan-lite'),
			'masonry-style' => esc_html__('Masonry Style', 'dukan-lite'),
		)
	));

	/**
	 * Footer Section
	 */
	$wp_customize->add_section('dukan_footer_options', array(
		'title'       => esc_html__('Footer Options', 'dukan-lite'),
		'panel'       => 'dukan_theme_options',
		'priority'    => 30,
		'description' => esc_html__('Personalize the footer settings of your theme.', 'dukan-lite'),
	));

	// Copyright Control
	$wp_customize->add_setting('dukan_copyright', array(
		'default'           => 'Dukan Lite Theme by ODude',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control('dukan_copyright', array(
		'label'    => esc_html__('Copyright', 'dukan-lite'),
		'section'  => 'dukan_footer_options',
		'priority' => 1,
		'type'     => 'textarea',
	));
}
add_action('customize_register', 'dukan_lite_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function dukan_lite_customize_partial_blogname()
{
	bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function dukan_lite_customize_partial_blogdescription()
{
	bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function dukan_lite_customize_preview_js()
{
	wp_enqueue_script('dukan-lite-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), DUKANLITE_VERSION, true);
}
add_action('customize_preview_init', 'dukan_lite_customize_preview_js');


/** Theme sanitization functions */

// adds sanitization callback function for the blog style : radio
function dukan_lite_sanitize_blogstyle($input)
{
	$valid = array(
		'top-featured-right' => esc_html__('Top Featured Image Right Sidebar', 'dukan-lite'),
		'masonry-style' => esc_html__('Masonry Style', 'dukan-lite'),
	);

	if (array_key_exists($input, $valid)) {
		return $input;
	} else {
		return '';
	}
}
