
//Masonry init
/**/

jQuery(function($) {
	var $container = $('#posts');
	$container.imagesLoaded( function() {
		$container.masonry({
			itemSelector: '.box',
			isAnimated: true,
			animationOptions: {
				duration: 500,
				easing: 'linear',
			}
	    });
	});
});
