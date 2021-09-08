<?php $agency_header = get_field("agency_header"); ?>

<div id="our_agency" class="agency">
	<?php if ($agency_header): ?>
		<h2 class="agency__title">
			<span class="title__text"><?php echo $agency_header["title"]; ?></span>
			<span class="title__image-container"><img src="<?php echo $agency_header["image"]["url"]; ?>" alt="<?php echo $agency_header["image"]["alt"]; ?>" class="title__image" /></span>
		</h2>
	<?php endif; ?>
</div>