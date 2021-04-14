<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dukan_Lite
 */

get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<header class="page-header">
			<?php
			the_archive_title('<h1 class="page-title">', '</h1>');
			the_archive_description('<div class="archive-description">', '</div>');
			?>
		</header><!-- .page-header -->
		<?php
		$dukan_lite_style = get_theme_mod('blog_style', 'top-featured-right');
		$dukan_lite_styleclass = get_theme_mod('blog_style', 'top-featured-right');

		switch ($dukan_lite_style) {

				// masonry style full width no sidebar columns
			case "masonry-style":
		?>
				<div id="grid" class="masonry-container <?php echo esc_attr($dukan_lite_styleclass); ?>">
					<div id="posts">
						<div class="box-gutter"></div>
						<div class="box-sizer"></div>
						<?php
						get_template_part('loop');
						?>
					</div>
					<nav class="main-pagination number">
						<div class="inner">
							<?php echo paginate_links(); ?>
						</div>
					</nav>
				</div>
			<?php
				break;

				// Top featured image with a right column
			default:
			?>
				<div class="container">
					<div class="row">
						<div class="col-md-8 the_stickey_class <?php echo esc_attr($dukan_lite_styleclass); ?>">
							<div class="blog-content-div">
								<?php get_template_part('loop'); ?>
							</div>
							<nav class="main-pagination number">
								<div class="inner">
									<?php echo paginate_links(); ?>
								</div>
							</nav>

						</div>
						<div class="col-md-4 the_stickey_class">
							<?php get_sidebar('right'); ?>
						</div>
					</div>
				</div>
		<?php
		}
		?>
	</main><!-- #main -->
</div><!-- primary -->
<?php
get_footer();
