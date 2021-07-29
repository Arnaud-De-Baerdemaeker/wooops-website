<footer id="footer" class="footer">
	<div class="footer__informations">
		<div class="footer__logo">
			<?php $logo = get_field("footer_logo");
			if ($logo): ?>
				<img src="<?php echo esc_url($logo["url"]); ?>" alt="<?php echo esc_attr($logo["alt"]); ?>" class="footer__image" />
			<?php endif; ?>
		</div>
		<div class="footer__contact-infos">
			<section class="footer__address">
				<h4 class="footer__title">Adresse</h4>
				<?php $address = get_field("footer_address");
				if ($address): ?>
					<p class="footer__entry"><?php echo $address["street_and_number"]; ?></p>
					<p class="footer__entry"><?php echo $address["postal_code_and_city"]; ?></p>
					<p class="footer__entry"><?php echo $address["country"]; ?></p>
				<?php endif; ?>
			</section>
			<section class="footer__contact">
				<h4 class="footer__title">Contact</h4>
				<?php $contact = get_field("footer_contact");
				if ($contact): ?>
					<p class="footer__entry"><?php echo $contact["phone"]; ?></p>
					<p class="footer__entry"><?php echo $contact["e-mail"]; ?></p>
				<?php endif; ?>
			</section>
			<section class="footer__social">
				<h4 class="footer__title">Réseaux sociaux</h4>
			</section>
		</div>
	</div>
	<div class="footer__copyright"><?php echo date("Y"); ?></div>
</footer>