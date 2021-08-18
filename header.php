<!doctype html>

<html <?php language_attributes(); ?>>
	<head>
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
		<?php $background = get_field("hero_background"); ?>
		<div
			id="hero"
			<?php if ($background): ?>
				style="background-image: url('<?php echo esc_url($background); ?>');"
			<?php endif; ?>
			class="hero"
		>
			<header class="header">
				<?php $logo = get_field("hero_logo"); ?>
				<h1 class="header__logo-container">
					<?php if ($logo): ?>
						<img src="<?php echo esc_url($logo["url"]); ?>" alt="<?php echo esc_attr($logo["alt"]); ?>" class="header__logo-image" />
					<?php endif; ?>
				</h1>
				<?php wp_nav_menu(); ?>
			</header>