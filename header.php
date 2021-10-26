<!doctype html>

<html <?php language_attributes(); ?> class="sr">
	<head>
		<?php
		wp_head();
		?>
	</head>
	
	<body <?php body_class(); ?>>
		<header class="header">
			<button class="mobile-menu-toggle">
				<img src="<?php echo get_template_directory_uri()."/icons/menu_icon.svg"; ?>" alt="Menu hamburger"/>
			</button>
			<?php
			wp_nav_menu([
				"menu" => "Menu principal",
			]);
			?>
		</header>