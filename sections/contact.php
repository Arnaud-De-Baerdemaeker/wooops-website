<?php
	$contact_header = get_field("contact_header");
	$contact_introduction = get_field("contact_introduction");
	if ($contact_header && $contact_introduction): ?>
		<div id="contact_us" class="contact">
			<h2 class="contact__title">
				<span class="title__text"><?php echo $contact_header["title"]; ?></span>
				<span class="title__image-container"><img src="<?php echo $contact_header["image"]["url"]; ?>" alt="<?php echo $contact_header["image"]["alt"]; ?>" class="title__image" /></span>
			</h2>

			<div class="contact__content-container">
				<div class="contact__introduction">
					<p class="contact__text"><?php echo $contact_introduction["text"]; ?></p>
				</div>
				<?php the_content(); ?>
			</div>
		</div>
	<?php endif;
?>