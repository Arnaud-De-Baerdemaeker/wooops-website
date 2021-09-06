<?php $contact = get_field("contact");
if ($contact): ?>
	<div id="contact_us" class="contact">
		<h2 class="contact__title">
			<span class="title__text"><?php echo $contact["title"]; ?></span>
			<span class="title__image-container"><img src="<?php echo $contact["image"]["url"]; ?>" alt="<?php echo $contact["image"]["alt"]; ?>" class="title__image" /></span>
		</h2>
		
		<div class="contact__content-container">
			<div class="contact__introduction">
				<p class="contact__text"><?php echo $contact["text"]; ?></p>
			</div>
			<?php the_content(); ?>
		</div>
	</div>
<?php endif; ?>