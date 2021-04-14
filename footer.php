<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dukan_Lite
 */

?>
<?php get_sidebar('feature-bottom'); ?>


</div> <!-- #content -->
<?php get_sidebar('bottom'); ?>
<footer id="colophon" class="site-footer">
	<?php get_sidebar('footer'); ?>
	<div class="site-info">
		<?php
		echo get_theme_mod('dukan_copyright', 'ODude.com');
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>