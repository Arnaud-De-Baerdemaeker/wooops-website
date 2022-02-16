<?php
$agency_header = get_field("agence");
$presentation = get_field("presentation");
?>

<?php if ($agency_header["titre"]): ?>
	<div id="agency" class="agency">
		<h2 class="agency__title">
			<div class="title__text-container">
				<span class="title__text"><?php echo $agency_header["titre"]; ?></span>
			</div>
			<?php
			if ($agency_header["image"]):
			?>
				<div class="title__image-container"><img src="<?php echo $agency_header["image"]["url"]; ?>" alt="<?php echo $agency_header["image"]["alt"]; ?>" class="title__image" /></div>
			<?php
			endif;
			?>
		</h2>

		<?php
		if (!empty($presentation)):
		?>
			<div class="agency__presentation-container">
				<div class="agency__presentation">
					<?php
					echo $presentation;
					?>
				</div>
			</div>
		<?php
		endif;
		?>
	</div>
<?php endif; ?>