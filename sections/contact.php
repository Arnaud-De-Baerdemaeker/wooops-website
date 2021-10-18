<?php
	$contact_header = get_field("contact_header");
	$contact_introduction = get_field("contact_introduction");
?>

<?php if ($contact_header["title"]): ?>
	<div id="contact" class="contact">
		<h2 class="contact__title">
			<span class="title__text"><?php echo $contact_header["title"]; ?></span>
			<?php if($contact_header["image"]): ?>
				<div class="title__image-container"><img src="<?php echo $contact_header["image"]["url"]; ?>" alt="<?php echo $contact_header["image"]["alt"]; ?>" class="title__image" /></div>
			<?php endif; ?>
		</h2>

		<?php if ($contact_introduction): ?>
			<div class="contact__content-container">
				<div class="contact__introduction">
					<p class="contact__text"><?php echo $contact_introduction["text"]; ?></p>
				</div>
				<?php echo $contact_introduction["form"]; ?>
			</div>
		<?php endif;
	endif; ?>
</div>