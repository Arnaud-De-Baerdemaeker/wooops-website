<?php

// Add custom tags in <head>
function add_tags() { ?>
	<meta charset="<?php bloginfo("charset"); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="Shortcut Icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/style.css'; ?>">
	<script src="https://unpkg.com/scrollreveal"></script>
	<script src="<?php echo get_template_directory_uri().'/js/custom_scripts.js'; ?>" type="module"></script>
	<!-- <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script> -->
	<title><?php the_title(); ?></title>
	<?php
}
add_action("wp_head", "add_tags");

// Register a primary menu to the theme
function register_menu() {
	register_nav_menu("primary_menu", __("Menu principal"));
}
add_action("init", "register_menu");