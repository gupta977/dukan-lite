<?php

/**
 * The template for displaying search forms 
 * @package Dukan Lite
 */
?>


<form method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
	<span class="screen-reader-text"><?php _x('Search for:', 'Screen reader text', 'dukan-lite'); ?></span>
	<div class="form-group">
		<input type="text" class="form-control" value="<?php echo esc_attr(get_search_query()); ?>" name="s" placeholder="<?php _x('Enter search words', 'Search field placeholder', 'dukan-lite'); ?>">
		<button class="button-search" type="submit"><i class="fa fa-search"></i></button>
	</div>
</form>