<?php
$contact_header = get_field("contact");
$contact = get_field("contenu");
?>

<?php
if ($contact_header["titre"]):
?>
	<div id="contact" class="contact">
		<h2 class="contact__title">
			<div class="title__text-container">
				<span class="title__text"><?php echo $contact_header["titre"]; ?></span>
			</div>
			<?php
			if($contact_header["image"]):
			?>
				<div class="title__image-container"><img src="<?php echo $contact_header["image"]["url"]; ?>" alt="<?php echo $contact_header["image"]["alt"]; ?>" class="title__image" /></div>
			<?php
			endif;
			?>
		</h2>

		<?php
		if (!empty($contact)):
		?>
			<div class="contact__container">
				<?php
				echo $contact;
				?>
			</div>
		<?php
		endif;
		?>
	</div>
<?php
endif;
?>