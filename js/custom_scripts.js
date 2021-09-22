const sr = ScrollReveal({
	cleanup: true
});

ScrollReveal().clean(".header, .menu-item-104, .menu-item-105, .menu-item-279, .menu-item-106, #text_1, .introduction__logo-container, #text_2, .jarallax-img, .agency__title, .services__title, .work__title, .contact__title, .title__text, .title__image, .service1__title, .service2__title, .service3__title, .service4__title, .service5__title, .service6__title, .service7__title, .service1a, #service2__item1, #service3__text1, .service4a, .contact__introduction, .service1b, #service2__item2, .service4b, .service4d, .service1c, #service2__item3, #service3__text2, .service4c, .wpcf7, #service7__item1, #service7__item2, #service7__item3, #service7__item4, #service7__item5, #service7__item6, .footer, .footer__logo, .footer__address, .footer__contact, .footer__social, .footer__copyright");

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


// ---- DESKTOP ----
// HERO
sr.reveal(".jarallax-img", {
	opacity: 0,
	duration: 2000,
	delay: 5000
})

// H2 TITLES
sr.reveal(".agency__title, .services__title, .work__title, .contact__title", {
	origin: "top",
	distance: "100%",
	duration: 1000,
	viewOffset: {
		bottom: 300
	},
	mobile: false
});

sr.reveal(".title__text", {
	origin: "left",
	distance: "100%",
	duration: 1500,
	delay: 500,
	viewOffset: {
		bottom: 300
	},
	mobile: false
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
	},
	mobile: false
});

// H3 TITLES
sr.reveal(".service1__title, .service2__title, .service3__title, .service4__title, .service5__title, .service6__title, .service7__title", {
	origin: "top",
	distance: "100%",
	duration: 2000,
	viewOffset: {
		bottom: 250
	},
	mobile: false
});

// CONTENT BOXES
sr.reveal(".service1a, #service2__item1, #service3__text1, .service4a, .contact__introduction", {
	origin: "left",
	distance: "100%",
	duration: 2000,
	viewOffset: {
		bottom: 250
	},
	mobile: false
});

sr.reveal(".service1b, #service2__item2, .service4b, .service4d", {
	origin: "top",
	distance: "100%",
	duration: 2000,
	viewOffset: {
		bottom: 250
	},
	mobile: false
});

sr.reveal(".service1c, #service2__item3, #service3__text2, .service4c, .wpcf7", {
	origin: "right",
	distance: "100%",
	duration: 2000,
	viewOffset: {
		bottom: 250
	},
	mobile: false
});

sr.reveal("#service7__item1, #service7__item2, #service7__item3, #service7__item4, #service7__item5, #service7__item6", {
	origin: "top",
	distance: "100%",
	duration: 1000,
	viewOffset: {
		bottom: 250
	},
	interval: 250,
	mobile: false
});

// FOOTER
sr.reveal(".footer__address", {
	origin: "left",
	distance: "100%",
	duration: 2000,
	delay: 1500,
	mobile: false
});

sr.reveal(".footer__contact", {
	origin: "top",
	distance: "100%",
	duration: 2000,
	delay: 1500,
	mobile: false
});

sr.reveal(".footer__social", {
	origin: "right",
	distance: "100%",
	duration: 2000,
	delay: 1500,
	mobile: false
});

sr.reveal(".footer__copyright", {
	opacity: 0,
	duration: 2000,
	delay: 2500,
	mobile: false
});
// ---- END OF DESKTOP ----


// ---- MOBILE ----
// H2 TITLES
sr.reveal(".agency__title, .services__title, .work__title, .contact__title", {
	origin: "top",
	distance: "100%",
	duration: 1000,
	viewOffset: {
		bottom: 75
	},
	mobile: true,
	desktop: false
});

// H3 TITLES
sr.reveal(".service1__title, .service2__title, .service3__title, .service4__title, .service5__title, .service6__title, .service7__title", {
	origin: "top",
	distance: "100%",
	duration: 2000,
	viewOffset: {
		bottom: 75
	},
	mobile: true,
	desktop: false
});

sr.reveal(".title__text", {
	origin: "left",
	distance: "500%",
	duration: 1500,
	delay: 500,
	viewOffset: {
		bottom: 75
	},
	mobile: true,
	desktop: false

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
	},
	mobile: true,
	desktop: false
});

// CONTENT BOXES
sr.reveal(".service1a, #service2__item1, #service3__text1, .service4a, .contact__introduction, .service1b, #service2__item2, .service4b, .service4d, .service1c, #service2__item3, #service3__text2, .service4c, .wpcf7, #service7__item1, #service7__item2, #service7__item3, #service7__item4, #service7__item5, #service7__item6, .footer__address, .footer__contact, .footer__social", {
	origin: "top",
	distance: "100%",
	duration: 2000,
	viewOffset: {
		bottom: 75
	},
	mobile: true,
	desktop: false
});

sr.reveal(".footer__copyright", {
	opacity: 0,
	duration: 2000,
	mobile: true,
	desktop: false
});
// ---- END OF MOBILE ----