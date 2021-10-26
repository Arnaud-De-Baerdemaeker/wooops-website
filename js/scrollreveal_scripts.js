const sr = ScrollReveal();
const mq_w499_max = window.matchMedia("(max-width: 499px)");
const mq_w500_min = window.matchMedia("(min-width: 500px)");
const mq_w900_min = window.matchMedia("(min-width: 900px)");
const mq_w999_max = window.matchMedia("(max-width: 999px)");
const mq_w1000_min = window.matchMedia("(min-width: 1000px)");
const mq_w1100_min = window.matchMedia("(min-width: 1100px)");

let screen_width = window.innerWidth;
let screen_height = window.innerHeight;
let screen_scroll = window.scrollY;

// ---- ALL SCREEN SIZES ----
// MENU BAR
sr.reveal(".header", {
	origin: "top",
	distance: "100px",
	duration: 1000
});

if (screen_width >= 800) {
	sr.reveal(".menu__agency, .menu__services, .menu__projects, .menu__contact", {
		origin: "top",
		distance: "100px",
		duration: 1000,
		delay: 500,
		interval: 200
	});
}


// HERO
sr.reveal(".jarallax-img", {
	opacity: 0,
	duration: 2000,
	delay: 5000
});

sr.reveal("#text_1", {
	origin: "bottom",
	distance: "200px",
	duration: 1500,
	delay: 2000
});

sr.reveal("#text_2", {
	origin: "top",
	distance: "200px",
	duration: 1500,
	delay: 3000
});

if (screen_scroll >= screen_height / 2) {
	sr.reveal(".menu__wooops", {
		scale: 0,
		duration: 2000,
		delay: 1500
	});
}
else {
	sr.reveal(".introduction__logo-container", {
		scale: 0,
		duration: 2000,
		delay: 4000
	});
}


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


// H3 TITLES
sr.reveal(".service-1__title, .service-2__title, .service-3__title, .service-4__title, .service-5__title, .service-6__title, .service-7__title", {
	origin: "top",
	distance: "100px",
	duration: 2000,
	viewOffset: {
		bottom: 75
	}
});


// CONTENT
sr.reveal(".service-1-1, .service-1-2, .service-1-3, #service-2__item-1, #service-2__item-2, #service-2__item-3, #service-3__text-1, #service-3__text-2, .service-4-1, .service-4-2, .service-4-3, .service-4-4, .projects__cards, .projects__more, .projects__end, .projects__empty, .contact__introduction, .wpcf7, .footer__logo, .footer__address, .footer__contact, .footer__social", {
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

if (mq_w999_max.matches) {
	sr.reveal(".projects__all-tags-container", {
		origin: "top",
		distance: "100px",
		duration: 2000,
		viewOffset: {
			bottom: 75
		}
	});
}
else if (mq_w1000_min.matches) {
	sr.reveal(".projects__all-tags", {
		origin: "top",
		distance: "100px",
		duration: 2000,
		viewOffset: {
			bottom: 75
		},
		interval: 250
	});
}

sr.reveal(".projects__more", {
	origin: "top",
	distance: "100px",
	duration: 2000,
	viewOffset: {
		bottom: 75
	}
})


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
	duration: 2000,
	delay: 2000
});