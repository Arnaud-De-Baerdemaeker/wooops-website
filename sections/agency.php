<?php $agency_header = get_field("agency"); ?>

<?php if ($agency_header["title"]): ?>
	<div id="agency" class="agency">
		<h2 class="agency__title">
			<div class="title__text-container">
				<span class="title__text"><?php echo $agency_header["title"]; ?></span>
			</div>
			<?php
			if ($agency_header["image"]):
			?>
				<div class="title__image-container"><img src="<?php echo $agency_header["image"]["url"]; ?>" alt="<?php echo $agency_header["image"]["alt"]; ?>" class="title__image" /></div>
			<?php
			endif;
			?>
		</h2>
	</div>
<?php endif; ?>