<?php

/**
 * Register theme sidebars
 * @package Dukan Lite 
 */


function dukan_lite_widgets_init()
{

	register_sidebar(array(
		'name' => esc_html__('Blog Right Sidebar', 'dukan-lite'),
		'id' => 'blogright',
		'description' => esc_html__('Right sidebar for the blog', 'dukan-lite'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="bl-widget-title-wrap"><h3 class="widget-title">',
		'after_title' => '</h3></div>',
	));

	register_sidebar(array(
		'name' => esc_html__('Page Right Sidebar', 'dukan-lite'),
		'id' => 'pageright',
		'description' => esc_html__('Right sidebar for pages', 'dukan-lite'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="bl-widget-title-wrap"><h3 class="widget-title">',
		'after_title' => '</h3></div>',
	));

	register_sidebar(array(
		'name' => esc_html__('Banner', 'dukan-lite'),
		'id' => 'banner',
		'description' => esc_html__('For Images and Sliders.', 'dukan-lite'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	));

	register_sidebar(array(
		'name' => esc_html__('Feature Top 1', 'dukan-lite'),
		'id' => 'ftop1',
		'description' => esc_html__('Feature Top 1 position - full width group', 'dukan-lite'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => esc_html__('Feature Top 2', 'dukan-lite'),
		'id' => 'ftop2',
		'description' => esc_html__('Feature Top 2 position - full width group', 'dukan-lite'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => esc_html__('Feature Top 3', 'dukan-lite'),
		'id' => 'ftop3',
		'description' => esc_html__('Feature Top 3 position - full width group', 'dukan-lite'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => esc_html__('Feature Top 4', 'dukan-lite'),
		'id' => 'ftop4',
		'description' => esc_html__('Feature Top 4 position - full width group', 'dukan-lite'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'name' => esc_html__('Feature Bottom 1', 'dukan-lite'),
		'id' => 'fbottom1',
		'description' => esc_html__('Feature Bottom 1 position - full width group', 'dukan-lite'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="bl-widget-title-wrap"><h3 class="widget-title">',
		'after_title' => '</h3></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('Feature Bottom 2', 'dukan-lite'),
		'id' => 'fbottom2',
		'description' => esc_html__('Feature Bottom 2 position - full width group', 'dukan-lite'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="bl-widget-title-wrap"><h3 class="widget-title">',
		'after_title' => '</h3></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('Feature Bottom 3', 'dukan-lite'),
		'id' => 'fbottom3',
		'description' => esc_html__('Feature Bottom 3 position - full width group', 'dukan-lite'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="bl-widget-title-wrap"><h3 class="widget-title">',
		'after_title' => '</h3></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('Feature Bottom 4', 'dukan-lite'),
		'id' => 'fbottom4',
		'description' => esc_html__('Feature Bottom 4 position - full width group', 'dukan-lite'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="bl-widget-title-wrap"><h3 class="widget-title">',
		'after_title' => '</h3></div>',
	));

	register_sidebar(array(
		'name' => esc_html__('Bottom 1', 'dukan-lite'),
		'id' => 'bottom1',
		'description' => esc_html__('Bottom 1 position', 'dukan-lite'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="bl-widget-title-wrap"><h3 class="widget-title">',
		'after_title' => '</h3></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('Bottom 2', 'dukan-lite'),
		'id' => 'bottom2',
		'description' => esc_html__('Bottom 2 position', 'dukan-lite'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="bl-widget-title-wrap"><h3 class="widget-title">',
		'after_title' => '</h3></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('Bottom 3', 'dukan-lite'),
		'id' => 'bottom3',
		'description' => esc_html__('Bottom 3 position', 'dukan-lite'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="bl-widget-title-wrap"><h3 class="widget-title">',
		'after_title' => '</h3></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('Bottom 4', 'dukan-lite'),
		'id' => 'bottom4',
		'description' => esc_html__('Bottom 4 position', 'dukan-lite'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="bl-widget-title-wrap"><h3 class="widget-title">',
		'after_title' => '</h3></div>',
	));

	register_sidebar(array(
		'name' => esc_html__('Footer', 'dukan-lite'),
		'id' => 'footer',
		'description' => esc_html__('This is a sidebar position that sits above the footer menu and copyright', 'dukan-lite'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="bl-widget-title-wrap"><h3 class="widget-title">',
		'after_title' => '</h3></div>',
	));
}
add_action('widgets_init', 'dukan_lite_widgets_init');

/**
 * Count the number of widgets to enable resizable widgets
 * in the featured top group.
 */

function dukan_lite_ftop()
{
	$count = 0;
	if (is_active_sidebar('ftop1'))
		$count++;
	if (is_active_sidebar('ftop2'))
		$count++;
	if (is_active_sidebar('ftop3'))
		$count++;
	if (is_active_sidebar('ftop4'))
		$count++;
	$class = '';
	switch ($count) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-sm-6 col-md-6';
			break;
		case '3':
			$class = 'col-sm-6 col-md-4';
			break;
		case '4':
			$class = 'col-sm-6 col-md-3';
			break;
	}
	if ($class)
		echo 'class="' . $class . '"';
}

/**
 * Count the number of widgets to enable resizable widgets
 * in the featured bottom group.
 */

function dukan_lite_fbottom()
{
	$count = 0;
	if (is_active_sidebar('fbottom1'))
		$count++;
	if (is_active_sidebar('fbottom2'))
		$count++;
	if (is_active_sidebar('fbottom3'))
		$count++;
	if (is_active_sidebar('fbottom4'))
		$count++;
	$class = '';
	switch ($count) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-sm-6 col-md-6';
			break;
		case '3':
			$class = 'col-sm-6 col-md-4';
			break;
		case '4':
			$class = 'col-sm-6 col-md-3';
			break;
	}
	if ($class)
		echo 'class="' . $class . '"';
}

/**
 * Count the number of widgets to enable resizable widgets
 * in the bottom group.
 */

function dukan_lite_bottom()
{
	$count = 0;
	if (is_active_sidebar('bottom1'))
		$count++;
	if (is_active_sidebar('bottom2'))
		$count++;
	if (is_active_sidebar('bottom3'))
		$count++;
	if (is_active_sidebar('bottom4'))
		$count++;
	$class = '';
	switch ($count) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-sm-6 col-lg-6';
			break;
		case '3':
			$class = 'col-sm-6 col-lg-4';
			break;
		case '4':
			$class = 'col-sm-6 col-lg-3';
			break;
	}
	if ($class)
		echo 'class="' . $class . '"';
}
