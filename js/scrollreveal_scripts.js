const sr = ScrollReveal();

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
		delay: 250,
		interval: 50
	});
}


// HERO
sr.reveal(".jarallax-img", {
	opacity: 0,
	duration: 1000
});

sr.reveal(".introduction > p:first-of-type", {
	origin: "bottom",
	distance: "200px",
	duration: 1000,
	delay: 1250
});

sr.reveal(".introduction > p:last-of-type", {
	origin: "top",
	distance: "200px",
	duration: 1000,
	delay: 2000
});

sr.reveal(".introduction__logo-container", {
	scale: 0,
	duration: 1000,
	delay: 2750
});


// H2 TITLES
if (screen_width < 500) {
	sr.reveal(".agency__title, .services__title, .projects__title, .contact__title", {
		origin: "top",
		distance: "100px",
		duration: 1000,
		viewOffset: {
			bottom: 75
		}
	});

	sr.reveal(".title__text", {
		origin: "top",
		distance: "100px",
		duration: 1000,
		delay: 500,
		viewOffset: {
			bottom: 50
		}
	});

	sr.reveal(".title__image", {
		origin: "top",
		distance: "100px",
		duration: 1000,
		delay: 1000,
		viewOffset: {
			bottom: 75
		}
	});
}
else if (screen_width >= 500 && screen_width < 899) {
	sr.reveal(".agency__title, .services__title, .projects__title, .contact__title", {
		origin: "top",
		distance: "100px",
		duration: 1000,
		viewOffset: {
			bottom: 125
		}
	});

	sr.reveal(".title__text", {
		origin: "top",
		distance: "100px",
		duration: 1000,
		delay: 500,
		viewOffset: {
			bottom: 100
		}
	});

	sr.reveal(".title__image", {
		origin: "top",
		distance: "100px",
		duration: 1000,
		delay: 1000,
		viewOffset: {
			bottom: 75
		}
	});
}
else if (screen_width >= 900 && screen_width < 1099) {
	sr.reveal(".agency__title, .services__title, .projects__title, .contact__title", {
		origin: "top",
		distance: "100px",
		duration: 1000,
		viewOffset: {
			bottom: 175
		}
	});

	sr.reveal(".title__text", {
		origin: "top",
		distance: "100px",
		duration: 1000,
		delay: 500,
		viewOffset: {
			bottom: 100
		}
	});

	sr.reveal(".title__image", {
		origin: "top",
		distance: "100px",
		duration: 1000,
		delay: 1000,
		viewOffset: {
			bottom: 175
		}
	});
}
else if (screen_width >= 1100) {
	sr.reveal(".agency__title, .services__title, .projects__title, .contact__title", {
		origin: "top",
		distance: "100px",
		duration: 1000,
		viewOffset: {
			bottom: 275
		}
	});

	sr.reveal(".title__text", {
		origin: "top",
		distance: "100px",
		duration: 1000,
		delay: 500,
		viewOffset: {
			bottom: 150
		}
	});

	sr.reveal(".title__image", {
		origin: "top",
		distance: "100px",
		duration: 1000,
		delay: 1000,
		viewOffset: {
			bottom: 150
		}
	});
}


// H3 TITLES
sr.reveal(".services__subtitle", {
	origin: "top",
	distance: "100px",
	duration: 1000,
	viewOffset: {
		bottom: 75
	}
});


// CONTENT
sr.reveal(".agency__presentation, .services__card--description, .services__card, .services__card--icon-title, .services__card--bigger, .projects__cards, .projects__more, .projects__end, .projects__empty, .wpcf7", {
	origin: "top",
	distance: "100px",
	duration: 1000,
	viewOffset: {
		bottom: 75
	},
	interval: 250
});

if (screen_width < 1000) {
	sr.reveal(".projects__all-tags-container", {
		origin: "top",
		distance: "100px",
		duration: 1000,
		viewOffset: {
			bottom: 75
		}
	});
}
else if (screen_width >= 1000) {
	sr.reveal(".projects__all-tags", {
		origin: "top",
		distance: "100px",
		duration: 1000,
		viewOffset: {
			bottom: 75
		},
		interval: 50
	});
}

// sr.reveal(".projects__more", {
// 	origin: "top",
// 	distance: "100px",
// 	duration: 1000,
// 	viewOffset: {
// 		bottom: 75
// 	}
// });


// FOOTER
sr.reveal(".footer", {
	opacity: 0,
	duration: 1000,
	viewOffset: {
		bottom: 75
	}
});

sr.reveal(".footer__logo, .footer__address, .footer__contact, .footer__social", {
	origin: "top",
	distance: "100px",
	duration: 1000,
	interval: 100
});

sr.reveal(".footer__copyright", {
	opacity: 0,
	duration: 1000,
	delay: 1000
});