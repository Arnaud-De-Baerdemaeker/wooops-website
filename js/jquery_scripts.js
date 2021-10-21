(function($) {
	$(document).ready(function() {
		// CONTROL KEYWORDS' DROPDOWN MENU ON CLICK
		let screen_width = $(window).width();

		if (screen_width < 1000) {
			$(".projects__all-tags-list").hide();

			$(".projects__select-tag").on("click", function() {
				$(".projects__all-tags-list").toggle(300);
			});

			$(".projects__all-tags").on("click", function() {
				$(".projects__all-tags-list").toggle(300);
			});
		}
		else {
			$(".projects__select-tag").hide();
		}


		// PUT THE LOGO IN THE HEADER WHEN SCROLLING
		let screen_height = window.innerHeight;
		let screen_scroll = window.scrollY;

		$(".menu__wooops > a").text("");

		if (screen_scroll >= screen_height / 2) {
			$(".menu__wooops>a").append($(".introduction__logo-container"));
			$(".introduction__logo-container").removeClass().addClass("introduction__logo-container--smaller");
			$(".introduction__logo-image").removeClass().addClass("introduction__logo-image--smaller");
			$(".menu__wooops").show();
		}
		else {
			$(".menu__wooops").hide();
			$(".introduction__logo-container--smaller").removeClass().addClass("introduction__logo-container");
			$(".introduction__logo-image--smaller").removeClass().addClass("introduction__logo-image");
			$(".introduction__logo-container").insertAfter("#text_1");
		}

		$(window).on("scroll", function() {
			let screen_scroll = window.scrollY;

			if (screen_scroll >= screen_height / 2) {
				$(".menu__wooops > a").append($(".introduction__logo-container"));
				$(".introduction__logo-container").removeClass().addClass("introduction__logo-container--smaller");
				$(".introduction__logo-image").removeClass().addClass("introduction__logo-image--smaller");
				$(".menu__wooops").show();
			}
			else {
				$(".menu__wooops").hide();
				$(".introduction__logo-container--smaller").removeClass().addClass("introduction__logo-container");
				$(".introduction__logo-image--smaller").removeClass().addClass("introduction__logo-image");
				$(".introduction__logo-container").insertAfter("#text_1");
			}
		});
	});
})(jQuery);