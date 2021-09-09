<?php $agency_header = get_field("agency_header"); ?>

<?php if ($agency_header["title"]): ?>
	<div id="agency" class="agency">
		<h2 class="agency__title">
			<span class="title__text"><?php echo $agency_header["title"]; ?></span>
			<?php if ($agency_header["image"]): ?>
				<span class="title__image-container"><img src="<?php echo $agency_header["image"]["url"]; ?>" alt="<?php echo $agency_header["image"]["alt"]; ?>" class="title__image" /></span>
			<?php endif; ?>
		</h2>
	</div>
<?php endif; ?>