const sr = ScrollReveal();
const mq_w499_max = window.matchMedia("(max-width: 499px)");
const mq_w500_min = window.matchMedia("(min-width: 500px)");
const mq_w900_min = window.matchMedia("(min-width: 900px)");
const mq_w1100_min = window.matchMedia("(min-width: 1100px)");

// ---- ALL SCREEN SIZES ----
// MENU BAR
sr.reveal(".header", {
	origin: "top",
	distance: "100px",
	duration: 1000
});

sr.reveal(".menu-item-type-custom", {
	origin: "top",
	distance: "100px",
	duration: 1000,
	delay: 500,
	interval: 200
});
// /MENU BAR 

// HERO
sr.reveal(".jarallax-img", {
	opacity: 0,
	duration: 2000,
	delay: 5000
});

sr.reveal("#text_1", {
	origin: "bottom",
	distance: "100px",
	duration: 1500,
	delay: 2000
});

sr.reveal("#text_2", {
	origin: "top",
	distance: "100px",
	duration: 1500,
	delay: 3000
});

sr.reveal(".introduction__logo-container", {
	scale: 0,
	duration: 2000,
	delay: 4000
});
// /HERO

// H2 TITLES
if (mq_w499_max.matches) {
	sr.reveal(".agency__title, .services__title, .projects__title, .contact__title", {
		origin: "top",
		distance: "100px",
		duration: 2000,
		viewOffset: {
			bottom: 75
		}
	});

	sr.reveal(".title__text", {
		origin: "top",
		distance: "100px",
		duration: 2000,
		delay: 1000,
		viewOffset: {
			bottom: 50
		}
	});

	sr.reveal(".title__image", {
		origin: "top",
		distance: "100px",
		rotate: {
			z: 180,
		},
		duration: 2000,
		delay: 2000,
		viewOffset: {
			bottom: 75
		}
	});
}
else if (mq_w500_min.matches) {
	sr.reveal(".agency__title, .services__title, .projects__title, .contact__title", {
		origin: "top",
		distance: "100px",
		duration: 2000,
		viewOffset: {
			bottom: 125
		}
	});

	sr.reveal(".title__text", {
		origin: "top",
		distance: "100px",
		duration: 2000,
		delay: 1000,
		viewOffset: {
			bottom: 100
		}
	});

	sr.reveal(".title__image", {
		origin: "top",
		distance: "100px",
		rotate: {
			z: 180,
		},
		duration: 2000,
		delay: 2000,
		viewOffset: {
			bottom: 75
		}
	});
}
else if (mq_w900_min.matches) {
	sr.reveal(".agency__title, .services__title, .projects__title, .contact__title", {
		origin: "top",
		distance: "100px",
		duration: 2000,
		viewOffset: {
			bottom: 175
		}
	});

	sr.reveal(".title__text", {
		origin: "top",
		distance: "100px",
		duration: 2000,
		delay: 1000,
		viewOffset: {
			bottom: 100
		}
	});

	sr.reveal(".title__image", {
		origin: "top",
		distance: "100px",
		rotate: {
			z: 180,
		},
		duration: 2000,
		delay: 2000,
		viewOffset: {
			bottom: 175
		}
	});
}
else if (mq_w1100_min.matches) {
	sr.reveal(".agency__title, .services__title, .projects__title, .contact__title", {
		origin: "top",
		distance: "100px",
		duration: 2000,
		viewOffset: {
			bottom: 275
		}
	});

	sr.reveal(".title__text", {
		origin: "top",
		distance: "100px",
		duration: 2000,
		delay: 1000,
		viewOffset: {
			bottom: 150
		}
	});

	sr.reveal(".title__image", {
		origin: "top",
		distance: "100px",
		rotate: {
			z: 180,
		},
		duration: 2000,
		delay: 2000,
		viewOffset: {
			bottom: 150
		}
	});
}
// /H2 TITLES

// H3 TITLES
sr.reveal(".service-1__title, .service-2__title, .service-3__title, .service-4__title, .service-5__title, .service-6__title, .service-7__title", {
	origin: "top",
	distance: "100px",
	duration: 2000,
	viewOffset: {
		bottom: 75
	}
});
// /H3 TITLES

// CONTENT
sr.reveal(".service-1-1, .service-1-2, .service-1-3, #service-2__item-1, #service-2__item-2, #service-2__item-3, #service-3__text-1, #service-3__text-2, .service-4-1, .service-4-2, .service-4-3, .service-4-4, .contact__introduction, .wpcf7, .footer__logo, .footer__address, .footer__contact, .footer__social", {
	origin: "top",
	distance: "100px",
	duration: 2000,
	viewOffset: {
		bottom: 75
	},
	interval: 500
});

sr.reveal("#service-7__item-1, #service-7__item-2, #service-7__item-3, #service-7__item-4, #service-7__item-5, #service-7__item-6", {
	origin: "top",
	distance: "100px",
	duration: 2000,
	viewOffset: {
		bottom: 75
	},
	interval: 250
});
// /CONTENT

// FOOTER
sr.reveal(".footer", {
	opacity: 0,
	duration: 2000,
	viewOffset: {
		bottom: 75
	}
});

sr.reveal(".footer__copyright", {
	opacity: 0,
	duration: 2000
});
// /FOOTER