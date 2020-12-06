/*
 *	Baker
 *
 *	Copyright (c) 2017-2020 by Marc Anton Dahmen
 *	http://marcdahmen.de
 *
 *  MIT license
 */


+function(docs, $) {
	
	docs.nav = {
		
		init: function() {
			
			var $doc = $(document),
				selectorNav = '#docs-nav > ul';
			
			// Clone nav into sidebars.
			$doc.ready(function(){
				$(selectorNav)
				// First move the nav to the sidebar modal before cloning, 
				// since the modal exists on every page, also on the home page,
				// where the sidebar doesn't exist.
				.appendTo('#docs-sidebar-modal [data-docs-nav]')
				.clone()
				.appendTo('#docs-sidebar [data-docs-nav]');
				// Clean up.
				$('#docs-nav').remove();
			});
			
			// Get navigation via AJAX.
			$doc.on('click', '[data-docs-nav-target]', function(e) {
				
				var	$arrow = $(this),
					$container = $arrow.closest('[data-docs-nav]'),
					current = $container.data('docsNav'),
					regex = new RegExp(current + "(#[^#]*)?$", 'i'),
					baseUrl = window.location.pathname.replace(regex, ''),
					target = $(this).data('docsNavTarget');
					
				e.preventDefault();
				
				// Replace arrow button with loading animation on slow connections.
				setTimeout(function() {
					$arrow.replaceWith(
						$(
							'<span></span>', 
							{ 'class': 'docs-nav-loading' }
						)
						.append(
							$(
								'<i></i>', 
								{ 'class': 'uk-icon-circle-o-notch uk-icon-spin' }
							)
						)
					);
				}, 200);
				
				$container.load(baseUrl + target + " " + selectorNav, function() {
					// Set class for active element.
					$('.docs-nav .uk-active').removeClass('uk-active');
					$('[href="' + window.location.pathname + '"]').addClass('uk-active');
					// Set class for active top level element (:currentPath).
					$('.docs-nav-top .docs-nav-top-active')
					.removeClass('docs-nav-top-active');
					$('.docs-nav-top [href="' + baseUrl + target.match(/^\/[\w\-]+/)[0] + '"]')
					.not('.uk-active')
					.addClass('docs-nav-top-active');
				});
				
			});
			
		}
		
	};
	
	docs.nav.init();

}(window.docs = window.docs || {}, jQuery);