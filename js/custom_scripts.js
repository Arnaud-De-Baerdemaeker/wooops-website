const sr = ScrollReveal();
const mq_w1000_up = window.matchMedia("(min-width: 1000px)");

// ---- ALL DISPLAYS ----
// MENU BAR
sr.reveal(".header", {
	origin: "top",
	distance: "100%",
	duration: 1000
});

sr.reveal(".menu-item-104, .menu-item-105, .menu-item-279, .menu-item-106", {
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


if (mq_w1000_up.matches) { // ---- DESKTOP ----
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
	sr.reveal(".service1__title, .service2__title, .service3__title, .service4__title, .service5__title, .service6__title, .service7__title", {
		origin: "top",
		distance: "100%",
		duration: 2000,
		viewOffset: {
			bottom: 250
		}
	});

	// CONTENT BOXES
	sr.reveal(".service1a, #service2__item1, #service3__text1, .service4a, .contact__introduction", {
		origin: "left",
		distance: "100%",
		duration: 2000,
		viewOffset: {
			bottom: 250
		}
	});

	sr.reveal(".service1b, #service2__item2, .service4b, .service4d", {
		origin: "top",
		distance: "100%",
		duration: 2000,
		viewOffset: {
			bottom: 250
		}
	});

	sr.reveal(".service1c, #service2__item3, #service3__text2, .service4c, .wpcf7", {
		origin: "right",
		distance: "100%",
		duration: 2000,
		viewOffset: {
			bottom: 250
		}
	});

	sr.reveal("#service7__item1, #service7__item2, #service7__item3, #service7__item4, #service7__item5, #service7__item6", {
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
else { // ---- MOBILE ----
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
	sr.reveal(".service1__title, .service2__title, .service3__title, .service4__title, .service5__title, .service6__title, .service7__title", {
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
	sr.reveal(".service1a, #service2__item1, #service3__text1, .service4a, .contact__introduction, .service1b, #service2__item2, .service4b, .service4d, .service1c, #service2__item3, #service3__text2, .service4c, .wpcf7, #service7__item1, #service7__item2, #service7__item3, #service7__item4, #service7__item5, #service7__item6, .footer__address, .footer__contact, .footer__social", {
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