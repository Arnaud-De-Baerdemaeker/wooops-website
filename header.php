<!doctype html>

<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo("charset"); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
			</header>