/*
 *	Baker
 *
 *	Copyright (c) 2021 by Marc Anton Dahmen
 *	http://marcdahmen.de
 *
 *  MIT license
 */


+function (baker, $, UIkit) {

	baker.toc = {

		item: function ($h2) {

			const $a = $('<a></a>').text($h2.text()).attr('href', '#' + $h2.attr('id')),
				$modal = UIkit.modal('#baker-sidebar-modal');

			if ($modal) {
				$a.on('click', function () {
					$modal.hide();
				});
			}

			return $('<li></li>').append($a);

		},

		observe: function () {

			const observer = new IntersectionObserver(items => {

				items.forEach(item => {

					const id = item.target.getAttribute('id');

					try {
						if (item.intersectionRatio > 0) {
							document.querySelector(`.baker-nav a[href="#${id}"]`).parentElement.classList.add('active');
						} else {
							document.querySelector(`.baker-nav a[href="#${id}"]`).parentElement.classList.remove('active');
						}
					} catch (e) { }

				});

			});

			document.querySelectorAll('.baker-content h2').forEach((h2) => {
				observer.observe(h2);
			});

		},

		init: function () {

			const $container = $('.baker-nav a.uk-active').parent(),
				  $h2s = $('h2.am-block');

			if ($h2s.length) {

				var $toc = $('<ul></ul>', { class: 'baker-toc' });

				$h2s.each(function () {
					$toc.append(baker.toc.item($(this)));
				});

				$container.append($toc);
				baker.toc.observe();

			}

		}

	}

	$(document).on('ready', baker.toc.init);

}(window.baker = window.baker || {}, jQuery, UIkit);