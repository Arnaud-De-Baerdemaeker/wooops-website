<?php $agency = get_field("agency");
if ($agency): ?>
	<div id="our_agency" class="agency">
		<section class="half-part">
			<?php if ($agency["agency_title"]): ?>
				<h3 class="half-part__title"><?php echo $agency["agency_title"]; ?></h3>
			<?php endif; ?>
			<?php if ($agency["agency_text"]): ?>
				<p class="half-part__text"><?php echo $agency["agency_text"]; ?></p>
			<?php endif; ?>
		</section>
		<div class="half-part"></div>
	</div>
<?php endif; ?>