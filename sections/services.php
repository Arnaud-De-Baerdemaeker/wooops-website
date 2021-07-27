<div id="our_services" class="services">
	<section class="half-part">
		<h3 class="half-part__title"><?php the_field("services_title"); ?></h3>
		<p class="half-part__text"><?php the_field("services_text"); ?></p>
	</section>
	<div class="half-part">
		<!-- <?php $keywords = get_field("services_keywords");
		if (have_rows($keywords)):
			while (have_rows("$keywords")): the_row(); ?>
				<div>
					<?php echo $keywords["services_keyword"]; ?>
				</div>
			<?php endwhile;
		endif; ?> -->
	</div>
</div>