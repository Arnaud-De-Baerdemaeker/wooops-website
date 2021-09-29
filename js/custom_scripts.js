const sr = ScrollReveal();
const mq_w999_max = window.matchMedia("(max-width: 999px)");
const mq_w1000_min = window.matchMedia("(min-width: 1000px)");
const mq_w1042_min = window.matchMedia("(min-width: 1042px)");
const mq_w1648_max = window.matchMedia("(max-width: 1648px)");
const mq_w1649px_min = window.matchMedia("(min-width: 1649px)");

// ---- ALL DISPLAYS ----
// MENU BAR
sr.reveal(".header", {
	origin: "top",
	distance: "100%",
	duration: 1000
});

sr.reveal(".menu-item-type-custom", {
	origin: "top",
	distance: "100%",
	duration: 1000,
	delay: 500,
	interval: 200
});

// HERO
sr.reveal(".jarallax-img", {
	opacity: 0,
	duration: 2000,
	delay: 5000
});

sr.reveal("#text_1", {
	origin: "left",
	distance: "500%",
	duration: 1500,
	delay: 2000
});

sr.reveal(".introduction__logo-container", {
	scale: 0,
	duration: 2000,
	delay: 4000
});

sr.reveal("#text_2", {
	origin: "right",
	distance: "500%",
	duration: 1500,
	delay: 3000
});

// FOOTER
sr.reveal(".footer", {
	opacity: 0,
	duration: 2000
});

sr.reveal(".footer__logo", {
	origin: "top",
	distance: "100%",
	duration: 2000
});
// ---- END OF ALL DISPLAYS ----

if (mq_w999_max.matches) {
	// H2 TITLES
	sr.reveal(".agency__title, .services__title, .work__title, .contact__title", {
		origin: "top",
		distance: "10%",
		duration: 1000,
		viewOffset: {
			bottom: 75
		}
	});

	// H3 TITLES
	sr.reveal(".service-1__title, .service-2__title, .service-3__title, .service-4__title, .service-5__title, .service-6__title, .service-7__title", {
		origin: "top",
		distance: "100%",
		duration: 2000,
		viewOffset: {
			bottom: 75
		}
	});

	sr.reveal(".title__text", {
		origin: "left",
		distance: "500%",
		duration: 1500,
		delay: 500,
		viewOffset: {
			bottom: 75
		}
	});

	sr.reveal(".title__image", {
		origin: "right",
		distance: "500%",
		rotate: {
			z: 180,
		},
		duration: 3000,
		delay: 500,
		viewOffset: {
			bottom: 100
		}
	});

	// CONTENT BOXES
	sr.reveal(".service-1-1, #service-2__item-1, #service-3__text-1, .service-4-1, .contact__introduction, .service-1-2, #service-2__item-2, .service-4-2, .service-4-4, .service-1-3, #service-2__item-3, #service-3__text-2, .service-4-3, .wpcf7, #service-7__item-1, #service-7__item-2, #service-7__item-3, #service-7__item-4, #service-7__item-5, #service-7__item-6, .footer__address, .footer__contact, .footer__social", {
		origin: "top",
		distance: "100%",
		duration: 2000,
		viewOffset: {
			bottom: 75
		}
	});

	sr.reveal(".footer__copyright", {
		opacity: 0,
		duration: 2000
	});
}
else if (mq_w1000_min.matches) {
	// H2 TITLES
	sr.reveal(".agency__title, .services__title, .work__title, .contact__title", {
		origin: "top",
		distance: "100%",
		duration: 1000,
		viewOffset: {
			bottom: 300
		}
	});

	sr.reveal(".title__text", {
		origin: "left",
		distance: "100%",
		duration: 1500,
		delay: 500,
		viewOffset: {
			bottom: 300
		}
	});

	sr.reveal(".title__image", {
		origin: "right",
		distance: "500%",
		rotate: {
			z: 180,
		},
		duration: 3000,
		delay: 500,
		viewOffset: {
			bottom: 350
		}
	});

	// H3 TITLES
	sr.reveal(".service-1__title, .service-2__title, .service-3__title, .service-4__title, .service-5__title, .service-6__title, .service-7__title", {
		origin: "top",
		distance: "100%",
		duration: 2000,
		viewOffset: {
			bottom: 250
		}
	});

	// CONTENT BOXES
	sr.reveal(".service-1-1, #service-2__item-1, #service-3__text-1, .service-4-1, .contact__introduction", {
		origin: "left",
		distance: "100%",
		duration: 2000,
		viewOffset: {
			bottom: 250
		}
	});

	if (mq_w1042_min.matches && mq_w1648_max.matches) {
		sr.reveal(".service-1-2, #service-2__item-2, #service-3__text-2, .service-4-2, .service-4-4, .wpcf7", {
			origin: "right",
			distance: "100%",
			duration: 2000,
			viewOffset: {
				bottom: 250
			}
		});

		sr.reveal(".service-4-3", {
			origin: "left",
			distance: "100%",
			duration: 2000,
			viewOffset: {
				bottom: 250
			}
		});

		sr.reveal(".service-1-3, #service-2__item-3", {
			origin: "bottom",
			distance: "100%",
			duration: 2000,
			viewOffset: {
				bottom: 250
			}
		});
	}
	else if (mq_w1649px_min.matches) {
		sr.reveal(".service-1-2, #service-2__item-2, .service-4-2, .service-4-4", {
			origin: "top",
			distance: "100%",
			duration: 2000,
			viewOffset: {
				bottom: 250
			}
		});

		sr.reveal(".service-1-3, #service-2__item-3, #service-3__text-2, .service-4-3, .wpcf7", {
			origin: "right",
			distance: "100%",
			duration: 2000,
			viewOffset: {
				bottom: 250
			}
		});
	}

	sr.reveal("#service-7__item-1, #service-7__item-2, #service-7__item-3, #service-7__item-4, #service-7__item-5, #service-7__item-6", {
		origin: "top",
		distance: "100%",
		duration: 1000,
		viewOffset: {
			bottom: 250
		},
		interval: 250
	});

	// FOOTER
	sr.reveal(".footer__address", {
		origin: "left",
		distance: "100%",
		duration: 2000,
		delay: 1500
	});

	sr.reveal(".footer__contact", {
		origin: "top",
		distance: "100%",
		duration: 2000,
		delay: 1500
	});

	sr.reveal(".footer__social", {
		origin: "right",
		distance: "100%",
		duration: 2000,
		delay: 1500
	});

	sr.reveal(".footer__copyright", {
		opacity: 0,
		duration: 2000,
		delay: 2500
	});
}