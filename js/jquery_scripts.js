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
			$(".header__mobile-menu").hide();
			$(".menu-menu-principal-container--mobile").removeClass().addClass("menu-menu-principal-container");
			$(".menu-menu-principal-container").show();
		}
		else {
			$(".header__mobile-menu").show();
			$(".header__close-menu").hide();
			$(".menu-menu-principal-container").removeClass().addClass("menu-menu-principal-container--mobile");
			$(".menu-menu-principal-container--mobile").hide();
		}


		// DISPLAY/HIDE MENU ON CLICK/SCROLL
		if (screen_width < 800) {
			$(".header__mobile-menu").on("click", function() {
				if ($(".menu-menu-principal-container--mobile").css("display") == "none") {
					$(".menu-menu-principal-container--mobile").fadeIn();
					$(".introduction__logo-container--smaller").removeClass("shadow").addClass("no-shadow");//css("box-shadow", "none");
					$(".header__mobile-menu").fadeOut();
					$(".header__close-menu").fadeIn();
				}
				else {
					$(".menu-menu-principal-container--mobile").fadeOut();
					$(".introduction__logo-container--smaller").removeClass("no-shadow").addClass("shadow");//css("box-shadow", "7px 7px 10px -4px rgba(0, 0, 0, 0.4)");
				}
			});

			$(".header__close-menu").on("click", function() {
				$(".menu-menu-principal-container--mobile").fadeOut();
				$(".introduction__logo-container--smaller").removeClass("no-shadow").addClass("shadow");
				$(".header__close-menu").fadeOut();
				$(".header__mobile-menu").fadeIn();
			});

			$(".menu-item").on("click", function() {
				$(".menu-menu-principal-container--mobile").fadeOut();
				$(".introduction__logo-container--smaller").removeClass("no-shadow").addClass("shadow");//css("box-shadow", "7px 7px 10px -4px rgba(0, 0, 0, 0.4)");
				$(".header__close-menu").fadeOut();
				$(".header__mobile-menu").fadeIn();
			});

			$(window).on("scroll", function() {
				$(".menu-menu-principal-container--mobile").fadeOut();
				$(".introduction__logo-container--smaller").removeClass("no-shadow").addClass("shadow");//css("box-shadow", "7px 7px 10px -4px rgba(0, 0, 0, 0.4)");
				$(".header__close-menu").fadeOut();
				$(".header__mobile-menu").fadeIn();
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
				$(".header").append($(".introduction__logo-link"));
				$(".introduction__logo-link").removeClass().addClass("introduction__logo-link--smaller");
				$(".introduction__logo-container").removeClass().addClass("introduction__logo-container--smaller shadow");
				$(".introduction__logo-image").removeClass().addClass("introduction__logo-image--smaller");
				$(".menu__wooops").show();
			}
			else {
				$(".menu__wooops").hide();
				$(".introduction__logo-link--smaller").removeClass().addClass("introduction__logo-link");
				$(".introduction__logo-container--smaller").removeClass().addClass("introduction__logo-container");
				$(".introduction__logo-image--smaller").removeClass().addClass("introduction__logo-image");
				$(".introduction__logo-link").insertAfter("#text_1");
			}

			$(window).on("scroll", function() {
				let screen_scrollY = window.scrollY;

				if (screen_scrollY >= screen_height / 2) {
					$(".header").append($(".introduction__logo-link"));
					$(".introduction__logo-link").removeClass().addClass("introduction__logo-link--smaller");
					$(".introduction__logo-container").removeClass().addClass("introduction__logo-container--smaller");
					$(".introduction__logo-image").removeClass().addClass("introduction__logo-image--smaller");
					$(".menu__wooops").show();
				}
				else {
					$(".menu__wooops").hide();
					$(".introduction__logo-link--smaller").removeClass().addClass("introduction__logo-link");
					$(".introduction__logo-container--smaller").removeClass().addClass("introduction__logo-container");
					$(".introduction__logo-image--smaller").removeClass().addClass("introduction__logo-image");
					$(".introduction__logo-link").insertAfter("#text_1");
				}
			});
		}
	});
})(jQuery);