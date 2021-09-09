<?php $background = get_field("hero_background"); ?>

<div
	id="hero"
	<?php if ($background): ?>
		style="background-image: url('<?php echo esc_url($background); ?>');"
	<?php endif; ?>
	class="hero"
>
	<section class="introduction">
		<?php $logo = get_field("hero_logo"); ?>
		<h1 class="introduction__logo-container">
			<?php if ($logo): ?>
				<img src="<?php echo esc_url($logo["url"]); ?>" alt="<?php echo esc_attr($logo["alt"]); ?>" class="introduction__logo-image" />
			<?php endif; ?>
		</h1>
		<h2 class="introduction__title">
			<?php $introduction = get_field("introduction");
			if ($introduction): ?>
				<p class="introduction__text">
					<?php echo $introduction["text_part_1"]["normal_text"]; ?>
					<br />
					<span class="introduction__keyword"><?php echo $introduction["text_part_1"]["keyword"]; ?></span>
				</p>
				<p class="introduction__text">
					<?php echo $introduction["text_part_2"]["normal_text"]; ?>
					<br />
					<span class="introduction__keyword"><?php echo $introduction["text_part_2"]["keyword"]; ?></span>
				</p>
			<?php endif; ?>
		</h2>
	</section>
</div>