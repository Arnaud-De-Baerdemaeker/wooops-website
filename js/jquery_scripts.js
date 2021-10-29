(function($) {
	$(document).ready(function() {
		let screen_width = $(window).width();
		let screen_height = window.innerHeight;
		let screen_scrollY = window.scrollY;
		let agency = $("#agency").offset().top;
		let services = $("#services").offset().top;
		let projects = $("#projects").offset().top;
		let contact = $("#contact").offset().top;


		// SHOW ACTIVE ANCHOR ON SCROLL
		if (screen_width < 450) {
			agency = agency - 50 - 25;
			services = services - 50 - 25;
			projects = projects - 50 - 25;
			contact = contact - 50 - 25;
		}
		else if (screen_width >= 450 && screen_width < 800) {
			agency = agency - 60 - 25;
			services = services - 60 - 25;
			projects = projects - 60 - 25;
			contact = contact - 60 - 25;
		}
		else {
			agency = agency - 75 - 25;
			services = services - 75 - 25;
			projects = projects - 75 - 25;
			contact = contact - 75 - 25;
		}

		$(window).on("scroll", function() {
			let screen_scrollY = window.scrollY;

			if (screen_scrollY >= agency && screen_scrollY < services) {
				$(".menu__agency > a").css({"border-bottom-color": "rgb(0, 0, 0)"});
				$(".menu__services > a").css({"border-bottom-color": "transparent"});
				$(".menu__projects > a").css({"border-bottom-color": "transparent"});
				$(".menu__contact > a").css({"border-bottom-color": "transparent"});
			}
			else if (screen_scrollY >= services && screen_scrollY < projects) {
				$(".menu__agency > a").css({"border-bottom-color": "transparent"});
				$(".menu__services > a").css({"border-bottom-color": "rgb(0, 0, 0)"});
				$(".menu__projects > a").css({"border-bottom-color": "transparent"});
				$(".menu__contact > a").css({"border-bottom-color": "transparent"});
			}
			else if (screen_scrollY >= projects && screen_scrollY < contact) {
				$(".menu__agency > a").css({"border-bottom-color": "transparent"});
				$(".menu__services > a").css({"border-bottom-color": "transparent"});
				$(".menu__projects > a").css({"border-bottom-color": "rgb(0, 0, 0)"});
				$(".menu__contact > a").css({"border-bottom-color": "transparent"});
			}
			else if (screen_scrollY >= contact) {
				$(".menu__agency > a").css({"border-bottom-color": "transparent"});
				$(".menu__services > a").css({"border-bottom-color": "transparent"});
				$(".menu__projects > a").css({"border-bottom-color": "transparent"});
				$(".menu__contact > a").css({"border-bottom-color": "rgb(0, 0, 0)"});
			}
			else {
				$(".menu__agency > a, .menu__services > a, .menu__projects > a, .menu__contact > a").css({"border-bottom-color": "transparent"});
			}
		});


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
			$(".mobile-menu-toggle").hide();
			$(".menu-menu-principal-container--mobile").removeClass().addClass("menu-menu-principal-container");
			$(".menu-menu-principal-container").show();
		}
		else {
			$(".mobile-menu-toggle").show();
			$(".menu-menu-principal-container").removeClass().addClass("menu-menu-principal-container--mobile");
			$(".menu-menu-principal-container--mobile").hide();

			$(".mobile-menu-toggle").on("click", function() {
				if ($(".menu-menu-principal-container--mobile").css("display") == "none") {
					$(".menu-menu-principal-container--mobile").fadeIn();
					$(".introduction__logo-container--smaller").css("box-shadow", "none");
				}
				else {
					$(".menu-menu-principal-container--mobile").fadeOut();
					$(".introduction__logo-container--smaller").css("box-shadow", "7px 7px 10px -4px rgba(0, 0, 0, 0.4)");
				}
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
		$(".menu__wooops > a").text("");

		if (screen_width >= 800) {
			if (screen_scrollY >= screen_height / 2) {
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