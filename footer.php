<?php
$footer = get_field("pied_de_page");
?>

<footer id="footer" class="footer">
	<div class="footer__container">
		<div class="footer__logo">
			<?php
			if ($footer["logo"]):
			?>
				<img src="<?php echo esc_url($footer["logo"]["url"]); ?>" alt="<?php echo esc_attr($footer["logo"]["alt"]); ?>" class="footer__image" />
			<?php
			endif;
			?>
		</div>
		<div class="footer__informations">
			<section class="footer__address">
				<h4 class="footer__title">Adresse</h4>
				<?php
				if ($footer["adresse"]):
				?>
					<p class="footer__entry"><?php echo $footer["adresse"]["rue_et_numero"]; ?></p>
					<p class="footer__entry"><?php echo $footer["adresse"]["code_postal_et_ville"]; ?></p>
					<p class="footer__entry"><?php echo $footer["adresse"]["pays"]; ?></p>
				<?php
				endif;
				?>
			</section>
			<section class="footer__contact">
				<h4 class="footer__title">Contact</h4>
				<?php
				if ($footer["contact"]):
				?>
					<p class="footer__entry"><?php echo $footer["contact"]["telephone"]; ?></p>
					<p class="footer__entry"><?php echo $footer["contact"]["e-mail"]; ?></p>
				<?php
				endif;
				?>
			</section>
			<section class="footer__social">
				<h4 class="footer__title">Réseaux sociaux</h4>
			</section>
		</div>
	</div>
	<p class="footer__copyright">2019 - <?php echo date("Y"); ?> | <?php echo $footer["copyright"]; ?></p>
</footer>