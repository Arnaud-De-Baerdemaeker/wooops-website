<footer id="footer">
	<div>
		<div>
			<?php $logo = get_field("footer_logo");
			if ($logo): ?>
				<img src="<?php echo esc_url($logo["url"]); ?>" alt="<?php echo esc_attr($logo["alt"]); ?>" class="" />
			<?php endif; ?>
		</div>
		<div>
			<section>
				<h4>Adresse</h4>
				<?php $address = get_field("footer_address");
				if ($address): ?>
					<p><?php echo $address["street_and_number"]; ?></p>
					<p><?php echo $address["postal_code_and_city"]; ?></p>
					<p><?php echo $address["country"]; ?></p>
				<?php endif; ?>
			</section>
			<section>
				<h4>Contact</h4>
				<?php $contact = get_field("footer_contact");
				if ($contact): ?>
					<p><?php echo $contact["phone"]; ?></p>
					<p><?php echo $contact["e-mail"]; ?></p>
				<?php endif; ?>
			</section>
			<section>
				<h4>Réseaux sociaux</h4>
			</section>
		</div>
	</div>
	<div></div>
</footer>