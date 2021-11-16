<?php

// ADD CUSTOM TAGS IN HEAD
function add_tags() {
?>
	<meta charset="<?php bloginfo("charset"); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="Shortcut Icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/style.css'; ?>">
	<!-- Development link -->
	<!-- <script src="https://unpkg.com/scrollreveal"></script> -->
	<!-- Production link -->
	<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
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
function register_ajax_scripts() {
	wp_enqueue_script("ajax", get_template_directory_uri()."/js/ajax_scripts.js", array("jquery"), null, true);
	wp_localize_script("ajax", "wp_ajax", array("ajax_url" => admin_url("admin-ajax.php")));
}
add_action("wp_enqueue_scripts", "register_ajax_scripts");


// FILTER PROJECTS
function filter_projects() {
	$tag = $_POST["tag"];

	if ($tag !== "all") {
		$query_projects = new WP_Query([
			"post_type" => "projects",
			"posts_per_page" => 6,
			"orderby" => "menu_order",
			"order" => "desc",
			"tag" => $tag,
			"paged" => 1
		]);
	} else {
		$query_projects = new WP_Query([
			"post_type" => "projects",
			"posts_per_page" => 6,
			"orderby" => "menu_order",
			"order" => "desc"
		]);
	}

	if ($query_projects->have_posts()) {
		while ($query_projects->have_posts()): $query_projects->the_post();
			get_template_part("sections/content-projets");
		endwhile;
	}

	if ($query_projects->max_num_pages > 1) {
		?>
			<span id="more" value="Afficher plus de projets" hidden></span>
		<?php
		}
		else if ($query_projects->max_num_pages == 1) {
		?>
			<span id="end" value="Plus d'autres projets à afficher" hidden></span>
		<?php
		}
		else {
		?>
			<span id="empty" value="Aucun projet correspondant à ce mot-clef..." hidden></span>
		<?php
		}
		wp_reset_postdata();
	exit;
}
add_action("wp_ajax_filter_projects", "filter_projects");
add_action("wp_ajax_nopriv_filter_projects", "filter_projects");


// LOAD MORE FUNCTION
function load_more_projects() {
	$page = $_POST["page"];

	$load_more_posts = new WP_Query([
		"post_type" => "projects",
		"posts_per_page" => 3,
		"orderby" => "menu_order",
		"order" => "desc",
		"paged" => $page
	]);

	if ($load_more_posts->have_posts()) {
		while ($load_more_posts->have_posts()): $load_more_posts->the_post();
			get_template_part("sections/content-projets");
		endwhile;
	}

	if ($load_more_posts->max_num_pages > 1 && $page < $load_more_posts->max_num_pages) {
		?>
			<span id="more" value="Afficher plus de projets" hidden></span>
		<?php
		}
		else if ($page == $load_more_posts->max_num_pages) {
		?>
			<span id="end" value="Plus d'autres projets à afficher" hidden></span>
		<?php
		}
		else {
		?>
			<span id="empty" value="Aucun projet correspondant à ce mot-clef..." hidden></span>
		<?php
		}
		wp_reset_postdata();
	exit;
}
add_action("wp_ajax_load_more_projects", "load_more_projects");
add_action("wp_ajax_nopriv_load_more_projects", "load_more_projects");


// REGISTER CUSTOM JS SCRIPTS
function register_jquery_scripts() {
	wp_enqueue_script("jquery_scripts", get_template_directory_uri()."/js/jquery_scripts.js", array("jquery"), null, true);
}
add_action("wp_enqueue_scripts", "register_jquery_scripts");


// ALLOW SVG
add_filter("wp_check_filetype_and_ext", function($data, $file, $filename, $mimes) {
	global $wp_version;

	if ($wp_version !== "4.7.1") {
		return $data;
	}

	$filetype = wp_check_filetype($filename, $mimes);

	return [
		"ext" => $filetype["ext"],
		"type" => $filetype["type"],
		"proper_filename" => $data["proper_filename"]
	];
}, 10, 4 );

function cc_mime_types($mimes){
	$mimes["svg"] = "image/svg+xml";
	return $mimes;
}
add_filter("upload_mimes", "cc_mime_types");

function fix_svg() {
	echo "";
}
add_action("admin_head", "fix_svg");