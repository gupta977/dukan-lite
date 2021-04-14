<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dukan_Lite
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'dukan-lite'); ?></a>
		<div class="container">
			<header id="masthead" class="site-header row">
				<div id="site-branding-wrapper" class="col-lg-3 col-md-4 col-sm-4 col-sm-4">

					<div id="site-branding">
						<div class="site-logo">
							<?php the_custom_logo(); ?>
						</div>
						<div class="site-title" itemprop="headline">
							<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
						</div>
						<?php
						$dukan_lite_description = get_bloginfo('description', 'display');
						if ($dukan_lite_description || is_customize_preview()) :
						?>
							<div class="site-description" itemprop="description">
								<p><?php bloginfo('description'); ?></p>
							</div>
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div><!-- .site branding wrapper -->

				<nav id="site-navigation" class="main-navigation col-lg-9 col-md-8 col-sm-8 col-sm-8">
					<div class="toggle-container visible-xs visible-sm hidden-md hidden-lg">
						<?php // if our page has no banner
						if (!is_active_sidebar('banner')) :
							echo '<button class="menu-toggle nobanner">', esc_html_e('Menu', 'dukan-lite'), '</button>';
						else : // if our page has a banner
							echo '<button class="menu-toggle">', esc_html_e('Menu', 'dukan-lite'), '</button>';
						endif;
						?>
					</div>

					<?php
					if (!is_active_sidebar('banner')) : // if our page has no banner
						//wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu nobanner' ) );
						if (has_nav_menu('primary')) {
							wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu nobanner'));
						} else {
							wp_nav_menu(array('container' => '', 'menu_class' => 'nobanner', 'title_li' => ''));
						}
					else : // if our page has a banner
						//wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) );
						if (has_nav_menu('primary')) {
							wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu'));
						} else {
							wp_nav_menu(array('container' => '', 'menu_class' => '', 'title_li' => ''));
						}
					endif;
					?>
					<?php
					echo '<div class="dukan_lite_search_box">';
					get_search_form();
					echo '</div>';
					?>
				</nav><!-- #site-navigation -->

			</header><!-- #masthead -->
		</div><!-- .container -->

		<div id="banner-wrapper">
			<?php // if our page has no banner
			if (!is_active_sidebar('banner')) :
				echo '<div id="no-banner"></div>';
			else : // if our page has a banner
				get_sidebar('banner');
			endif;
			?>
		</div>

		<div id="content" class="site-content clearfix">

			<?php get_sidebar('feature-top'); ?>