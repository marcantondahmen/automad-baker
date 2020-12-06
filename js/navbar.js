/*
 *	Baker
 *
 *	Copyright (c) 2018-2020 by Marc Anton Dahmen
 *	http://marcdahmen.de
 *
 *  MIT license
 */


+function(docs, $) {
	
	docs.navbar = {
		
		init: function() {
			
			var	$navbar = $('.docs-navbar-nav'),
				$search = $('.docs-navbar-search input');
			
			// Change class of navbar when search field is focused or hovered.	
			$search
			.on('focus mouseenter', function() {
				$navbar.addClass('docs-focus');
			})
			.on('blur', function() {
				$navbar.removeClass('docs-focus');
			})
			.on('mouseleave', function() {
				if (!$search.is(':focus')) {
					$navbar.removeClass('docs-focus');
				}
			});
			
		}
		
	}
		
	$(document).on('ready', docs.navbar.init);

}(window.docs = window.docs || {}, jQuery);