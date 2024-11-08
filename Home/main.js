
(function ($) {
	"use strict";
	$(document).on('ready', function () {

		jQuery(window).on('scroll', function () {
			if ($(this).scrollTop() > 200) {
				$('#header .header-inner').addClass("sticky");
			} else {
				$('#header .header-inner').removeClass("sticky");
			}
		});



		/*===============================
			Hero Slider JS
		=================================*/
		$(".hero-slider").owlCarousel({
			loop: true,
			autoplay: true,
			smartSpeed: 500,
			autoplayTimeout: 3500,
			singleItem: true,
			autoplayHoverPause: true,
			items: 1,
			nav: true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots: false,
		});



	})

})(jQuery);
