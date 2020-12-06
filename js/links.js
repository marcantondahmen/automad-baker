/*
 *	Baker
 *
 *	Copyright (c) 2018-2020 by Marc Anton Dahmen
 *	http://marcdahmen.de
 *
 *  MIT license
 */


+function(docs, $) {
	
	docs.links = {
		
		external: function() {
			$('a[href^="http"]').not('a[href$=".zip"]').attr('target', '_blank');
		}
		
	}
		
	$(document).on('ready', docs.links.external);

}(window.docs = window.docs || {}, jQuery);