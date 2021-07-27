<?php

// Link a custom stylesheet to the theme
function add_stylesheet() {
	wp_enqueue_style(
		"style",
		get_stylesheet_directory_uri()."/style.css"
	);
}
add_action("wp_enqueue_scripts", "add_stylesheet");

// Link a Google font to the theme
function add_fonts() {
	?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<?php
}
add_action("wp_head", "add_fonts");

// Register a primary menu to the theme
function register_menus() {
	register_nav_menus(
		array(
			"primary-menu" => __("Primary Menu")
		)
	);
}
add_action("init", "register_menus");