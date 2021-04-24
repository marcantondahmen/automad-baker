/*
 *	Baker
 *
 *	Copyright (c) 2019-2020 by Marc Anton Dahmen
 *	http://marcdahmen.de
 *
 *  MIT license
 */


+function (docs, $) {

	docs.scrollPosition = {

		init: function () {

			var $container = $('[data-baker-scrolled]');

			// Only check scroll position when needed and the data-baker-scrolled attribute exists.
			if ($container.length) {

				var $doc = $(document);

				// Create event to be triggered only once when scrolling has finished.
				$(window).scroll(function () {

					if (this.scrolling) {
						clearTimeout(this.scrolling);
					}

					this.scrolling = setTimeout(function () {
						$(this).trigger('scrolled.docs');
					}, 20);

				});

				// Handle scrolled event.
				$(window).on('load scrolled.docs', function () {

					var scrolled = $doc.scrollTop(),
						cls = 'baker-scrolled';

					if (scrolled > 180) {
						$container.addClass(cls);
					} else {
						$container.removeClass(cls);
					}

				});

			}

		}

	}

	$(document).ready(docs.scrollPosition.init);

}(window.docs = window.docs || {}, jQuery);