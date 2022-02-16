<?php
$hero = get_field("hero");
?>

<div
	id="hero"
	<?php
	if ($hero["arriere-plan"]):
	?>
		style="background-image: url('<?php echo $hero["arriere-plan"]; ?>');"
	<?php
	endif;
	?>
	class="hero"
>
	<?php
	echo $hero["parallax"];
	?>
	<section class="introduction <?php if ($hero["effet_degrade"]) {echo "gradient";} ?>">
		<?php
		if ($hero["introduction"]):
			echo $hero["introduction"];
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
	</section>
</div>