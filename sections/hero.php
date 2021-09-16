<?php $hero = get_field("hero"); ?>

<div
	id="hero"
	<?php if ($hero["background"]): ?>
		style="background-image: url('<?php echo $hero["background"]; ?>');"
	<?php endif; ?>
	class="hero"
>
	<section class="introduction">
		<?php if ($hero["introduction"]["text_part_1"]): ?>
			<p class="introduction__text">
				<?php echo $hero["introduction"]["text_part_1"]["normal_text"]; ?>
				<br />
				<span class="introduction__keyword"><?php echo $hero["introduction"]["text_part_1"]["keyword"]; ?></span>
			</p>
		<?php endif; ?>

		<?php if ($hero["logo"]): ?>
			<h1 class="introduction__logo-container">
				<img src="<?php echo $hero["logo"]["url"]; ?>" alt="Wooops Agency" class="introduction__logo-image" />
			</h1>
		<?php endif; ?>

		<?php if ($hero["introduction"]["text_part_2"]): ?>
			<p class="introduction__text">
				<?php echo $hero["introduction"]["text_part_2"]["normal_text"]; ?>
				<br />
				<span class="introduction__keyword"><?php echo $hero["introduction"]["text_part_2"]["keyword"]; ?></span>
			</p>
		<?php endif; ?>
	</section>
</div>