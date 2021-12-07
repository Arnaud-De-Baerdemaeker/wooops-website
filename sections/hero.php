<?php
$hero = get_field("hero");
?>

<div
	id="hero"
	<?php
	if ($hero["background"]):
	?>
		style="background-image: url('<?php echo $hero["background"]; ?>');"
	<?php
	endif;
	?>
	class="hero"
>
	<?php
	echo $hero["parallax"];
	?>
	<section class="introduction <?php if ($hero["gradient_effect"]) {echo "gradient";} ?>">
		<?php
		if ($hero["introduction"]["text_part_1"]):
			echo $hero["introduction"]["text_part_1"];
		endif;
		?>

		<?php
		if ($hero["logo"]):
		?>
			<a href="#top" class="introduction__logo-link">
				<h1 class="introduction__logo-container">
					<img src="<?php echo $hero["logo"]["url"]; ?>" alt="Wooops Agency" class="introduction__logo-image" />
				</h1>
			</a>
		<?php
		endif;
		?>

		<?php
		if ($hero["introduction"]["text_part_2"]):
			echo $hero["introduction"]["text_part_2"];
		endif;
		?>
	</section>
</div>