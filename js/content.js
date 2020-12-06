/*
 *	Baker
 *
 *	Copyright (c) 2018-2020 by Marc Anton Dahmen
 *	http://marcdahmen.de
 *
 *  MIT license
 */


+function(docs, $) {
	
	docs.content = {
		
		anchors: function() {
			
			$('.docs-content h2').each(function() {
				
				var	$h = $(this),
					id = $h.attr('id');
					
				$h.wrapInner('<a href="#' + id + '"></a>');
				
			});
			
		}
		
	}
		
	$(document).on('ready', docs.content.anchors);

}(window.docs = window.docs || {}, jQuery);