<?php $background = get_field("hero_background"); ?>
<?php $logo = get_field("hero_logo"); ?>
<?php $introduction = get_field("introduction"); ?>

<div
	id="hero"
	<?php if ($background): ?>
		style="background-image: url('<?php echo esc_url($background); ?>');"
	<?php endif; ?>
	class="hero"
>
	<section class="introduction">
		<?php if ($introduction["text_part_1"]): ?>
			<p class="introduction__text">
				<?php echo $introduction["text_part_1"]["normal_text"]; ?>
				<br />
				<span class="introduction__keyword"><?php echo $introduction["text_part_1"]["keyword"]; ?></span>
			</p>
		<?php endif; ?>

		<?php if ($logo): ?>
			<div class="introduction__logo-container">
				<h1>Wooops Agency</h1>
				<img src="<?php echo esc_url($logo["url"]); ?>" alt="<?php echo esc_attr($logo["alt"]); ?>" class="introduction__logo-image" />
			</div>
		<?php endif; ?>

		<?php if ($introduction["text_part_2"]): ?>
			<p class="introduction__text">
				<?php echo $introduction["text_part_2"]["normal_text"]; ?>
				<br />
				<span class="introduction__keyword"><?php echo $introduction["text_part_2"]["keyword"]; ?></span>
			</p>
		<?php endif; ?>
	</section>
</div>