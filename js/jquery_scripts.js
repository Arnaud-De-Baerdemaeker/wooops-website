(function($) {
	$(document).ready(function() {
		let screen_width = $(window).width();
		let screen_height = window.innerHeight;
		let screen_scrollY = window.scrollY;

		$(".menu__wooops > a").text("");


		// CONTROL KEYWORDS' DROPDOWN MENU ON CLICK
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


		// CHANGE THE DISPLAY OF THE MENU FOLLOWING SIZE SCREEN
		if (screen_width >= 800) {
			$(".mobile-menu").hide();
			$(".menu-menu-principal-container--mobile").removeClass().addClass("menu-menu-principal-container");
			$(".menu-menu-principal-container").show();
		}
		else {
			$(".mobile-menu").show();
			$(".close").hide();
			$(".menu-menu-principal-container").removeClass().addClass("menu-menu-principal-container--mobile");
			$(".menu-menu-principal-container--mobile").hide();
		}


		// DISPLAY/HIDE MENU ON CLICK/SCROLL
		if (screen_width < 800) {
			$(".mobile-menu").on("click", function() {
				if ($(".menu-menu-principal-container--mobile").css("display") == "none") {
					$(".menu-menu-principal-container--mobile").fadeIn();
					$(".introduction__logo-container--smaller").css("box-shadow", "none");
					$(".mobile-menu").fadeOut();
					$(".close").fadeIn();
				}
				else {
					$(".menu-menu-principal-container--mobile").fadeOut();
					$(".introduction__logo-container--smaller").css("box-shadow", "7px 7px 10px -4px rgba(0, 0, 0, 0.4)");
				}
			});

			$(".close").on("click", function() {
				$(".menu-menu-principal-container--mobile").fadeOut();
				$(".close").fadeOut();
				$(".mobile-menu").fadeIn();
			});

			$(".menu-item").on("click", function() {
				$(".menu-menu-principal-container--mobile").fadeOut();
				$(".introduction__logo-container--smaller").css("box-shadow", "7px 7px 10px -4px rgba(0, 0, 0, 0.4)");
			});

			$(window).on("scroll", function() {
				$(".menu-menu-principal-container--mobile").fadeOut();
				$(".introduction__logo-container--smaller").css("box-shadow", "7px 7px 10px -4px rgba(0, 0, 0, 0.4)");
			});
		}


		// PUT THE LOGO IN THE HEADER WHEN SCROLLING
		if (screen_width >= 800) {
			if (screen_scrollY >= screen_height / 2) {
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

			$(window).on("scroll", function() {
				let screen_scrollY = window.scrollY;

				if (screen_scrollY >= screen_height / 2) {
					$(".menu__wooops > a").append($(".introduction__logo-container"));
					$(".introduction__logo-container").removeClass().addClass("introduction__logo-container--smaller");
					$(".introduction__logo-image").removeClass().addClass("introduction__logo-image--smaller");
					$(".menu__wooops").fadeIn();
				}
				else {
					$(".menu__wooops").hide();
					$(".introduction__logo-container--smaller").removeClass().addClass("introduction__logo-container");
					$(".introduction__logo-image--smaller").removeClass().addClass("introduction__logo-image");
					$(".introduction__logo-container").insertAfter("#text_1");
				}
			});
		}
		else {
			if (screen_scrollY >= screen_height / 2) {
				$(".header").append($(".introduction__logo-container"));
				$(".introduction__logo-container").removeClass().addClass("introduction__logo-container--smaller");
				$(".introduction__logo-image").removeClass().addClass("introduction__logo-image--smaller");
				$(".menu__wooops").show();

				if (screen_width < 450) {
					$(".menu").css("margin-top", "63px");
				}
				else {
					$(".menu").css("margin-top", "70px");
				}
			}
			else {
				$(".menu__wooops").hide();
				$(".introduction__logo-container--smaller").removeClass().addClass("introduction__logo-container");
				$(".introduction__logo-image--smaller").removeClass().addClass("introduction__logo-image");
				$(".introduction__logo-container").insertAfter("#text_1");
				$(".menu").css("margin-top", "20px");
			}

			$(window).on("scroll", function() {
				let screen_scrollY = window.scrollY;

				if (screen_scrollY >= screen_height / 2) {
					$(".header").append($(".introduction__logo-container"));
					$(".introduction__logo-container").removeClass().addClass("introduction__logo-container--smaller");
					$(".introduction__logo-image").removeClass().addClass("introduction__logo-image--smaller");
					$(".menu__wooops").show();

					if (screen_width < 450) {
						$(".menu").css("margin-top", "63px");
					}
					else {
						$(".menu").css("margin-top", "70px");
					}
				}
				else {
					$(".menu__wooops").hide();
					$(".introduction__logo-container--smaller").removeClass().addClass("introduction__logo-container");
					$(".introduction__logo-image--smaller").removeClass().addClass("introduction__logo-image");
					$(".introduction__logo-container").insertAfter("#text_1");
					$(".menu").css("margin-top", "20px");
				}
			});
		}
	});
})(jQuery);