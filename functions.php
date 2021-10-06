<?php

// ADD CUSTOM TAGS IN HEAD
function add_tags() { ?>
	<meta charset="<?php bloginfo("charset"); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="Shortcut Icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/style.css'; ?>">
	<!-- Development link -->
	<script src="https://unpkg.com/scrollreveal"></script>
	<!-- Production link -->
	<!-- <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script> -->
	<script src="<?php echo get_template_directory_uri().'/js/scrollreveal_scripts.js'; ?>" type="module"></script>
	<title><?php the_title(); ?></title>
	<?php
}
add_action("wp_head", "add_tags");


// REGISTER A PRIMARY MENU TO THE THEME
function register_menu() {
	register_nav_menu("primary_menu", __("Menu principal"));
}
add_action("init", "register_menu");


// REGISTER FEATURED IMAGE
function featured_image_support() {
	add_theme_support("post-thumbnails");
}
add_action("after_setup_theme", "featured_image_support");


// REGISTER JQUERY JAVASCRIPT FILE
function register_jquery() {
	wp_enqueue_script("ajax", get_template_directory_uri()."/js/ajax_scripts.js", array("jquery"), null, true);
	wp_localize_script("ajax", "wp_ajax", array("ajax_url" => admin_url("admin-ajax.php")));
}
add_action("wp_enqueue_scripts", "register_jquery");


// LIST OF PROJECTS
function filter_projects() {
	$tag = $_POST["tag"]; // Recover tag clicked by user

	if ($tag !== "all") {
		// Query to get projects based on tag
		$query_projects = new WP_Query([
			"post_type" => "projects",
			"posts_per_page" => 6,
			"orderby" => "menu_order",
			"order" => "desc",
			"tag" => $tag,
		]);
	} else {
		// Query to get all projects
		$query_projects = new WP_Query([
			"post_type" => "projects",
			"posts_per_page" => 6,
			"orderby" => "menu_order",
			"order" => "desc",
		]);
	}

	$response = "";

	if ($query_projects->have_posts()) {
		while ($query_projects->have_posts()): $query_projects->the_post();
			$response .= get_template_part("sections/content-projets");
		endwhile; ?>
	</div>
	<?php } else { ?>
		<div class="projects__no-entry">Aucun projet correspondant à ce mot-clef...</div>
	<?php }

	echo $response;
	exit;
}
add_action("wp_ajax_filter_projects", "filter_projects");
add_action("wp_ajax_nopriv_filter_projects", "filter_projects");