<footer id="footer" class="footer">
	<?php $footer = get_field("footer"); ?>
	<div class="footer__container">
		<div class="footer__logo">
			<?php if ($footer["logo"]): ?>
				<img src="<?php echo esc_url($footer["logo"]["url"]); ?>" alt="<?php echo esc_attr($footer["logo"]["alt"]); ?>" class="footer__image" />
			<?php endif; ?>
		</div>
		<div class="footer__informations">
			<section class="footer__address">
				<h4 class="footer__title">Adresse</h4>
				<?php if ($footer["address"]): ?>
					<p class="footer__entry"><?php echo $footer["address"]["street_and_number"]; ?></p>
					<p class="footer__entry"><?php echo $footer["address"]["postal_code_and_city"]; ?></p>
					<p class="footer__entry"><?php echo $footer["address"]["country"]; ?></p>
				<?php endif; ?>
			</section>
			<section class="footer__contact">
				<h4 class="footer__title">Contact</h4>
				<?php if ($footer["contact"]): ?>
					<p class="footer__entry"><?php echo $footer["contact"]["phone"]; ?></p>
					<p class="footer__entry"><?php echo $footer["contact"]["e-mail"]; ?></p>
				<?php endif; ?>
			</section>
			<section class="footer__social">
				<h4 class="footer__title">Réseaux sociaux</h4>
			</section>
		</div>
	</div>
	<p class="footer__copyright">2019 - <?php echo date("Y"); ?> | <?php echo $footer["copyright"]; ?></p>
</footer>