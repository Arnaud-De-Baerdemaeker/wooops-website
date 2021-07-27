<?php

// Add custom tags in <head>
function add_tags() {
	?>
	<meta charset="<?php bloginfo("charset"); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php the_title(); ?></title>
	<?php
}
add_action("wp_head", "add_tags");

// Link a custom stylesheet to the theme
function add_stylesheet() {
	wp_enqueue_style(
		"style",
		get_stylesheet_directory_uri()."/style.css",
		null,
		null,
		"all"
	);
}
add_action("wp_enqueue_scripts", "add_stylesheet");

// Link a Google font to the theme
function add_fonts() {
	wp_enqueue_style(
		"google-fonts",
		"https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&display=swap",
		array(),
		null
	);
}
add_action("wp_enqueue_scripts", "add_fonts");

// Register a primary menu to the theme
function register_menu() {
	register_nav_menu("primary_menu", __("Menu principal"));
}
add_action("init", "register_menu");