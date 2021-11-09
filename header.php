<!doctype html>

<html <?php language_attributes(); ?> class="sr">
	<head>
		<?php
		wp_head();
		?>
	</head>
	
	<body <?php body_class(); ?>>
		<header class="header">
			<button class="header__mobile-menu">
				<img src="<?php echo get_template_directory_uri()."/icons/menu.svg"; ?>" alt="Menu hamburger" class="header__icon" />
			</button>
			<button class="header__close-menu">
				<img src="<?php echo get_template_directory_uri()."/icons/close.svg"; ?>" alt="Fermer" class="header__icon" />
			</button>
			<?php
			wp_nav_menu([
				"menu" => "Menu principal"
			]);
			?>
			<div class="header__contact-shortcut">
				<a href="<?php the_field("contact_shortcut") ?>">
					<img src="<?php echo get_template_directory_uri()."/icons/email.svg"; ?>" alt="Contact" class="header__icon" />
				</a>
			</div>
		</header>