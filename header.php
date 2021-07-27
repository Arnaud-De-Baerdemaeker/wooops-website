<!doctype html>

<html <?php language_attributes(); ?>>
	<head>
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
		<div id="hero" class="hero">
			<header class="header">
				<?php $logo = get_field("logo"); ?>

				<h1 class="header__logo-container">
					<?php if ($logo): ?>
						<img src="<?php echo esc_url($logo["url"]); ?>" alt="<?php echo esc_attr($logo["alt"]); ?>" class="header__logo-image" />
					<?php endif; ?>
				</h1>

				<?php wp_nav_menu(); ?>
			</header>