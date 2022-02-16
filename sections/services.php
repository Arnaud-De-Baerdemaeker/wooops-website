<?php
$services_header = get_field("services");
$websites = get_field("creation_et_maintenance_de_sites_web_&_e-commerce");
$developpments = get_field("developpements_specifiques");
$analytics = get_field("mise_en_place_doutils_analytics_-_dashboarding");
$marketing = get_field("marketing_digital");
$strategy = get_field("strategie_digitale_&_conseils");
$formations = get_field("accompagnement_&_formations");
$communication = get_field("communication");
?>

<?php
if (!empty($services_header["titre"])):
?>
	<div id="services" class="services">
		<h2 class="services__title">
			<div class="title__text-container">
				<span class="title__text"><?php echo $services_header["titre"]; ?></span>
			</div>
			<?php
			if (!empty($services_header["image"])):
			?>
				<div class="title__image-container"><img src="<?php echo $services_header["image"]["url"]; ?>" alt="<?php echo $services_header["image"]["alt"]; ?>" class="title__image" /></div>
			<?php
			endif;
			?>
		</h2>

		<?php
		if (!empty($websites) || !empty($developpments) || !empty($analytics) || !empty($marketing) || !empty($strategy) || !empty($formations) || !empty($communication)):
		?>
			<div class="services__offer">
				<div class="services__section">
					<h3 class="services__subtitle"><?php echo $websites["intitule"]; ?></h3>

					<div class="services__container">
						<div class="services__card">
							<h4 class="services__card-title">
								<img src="<?php echo $websites["site_internet"]["icone"]["url"]; ?>" alt="<?php echo $websites["site_internet"]["icone"]["alt"]; ?>" class="services__icon" />
								<?php echo $websites["site_internet"]["titre"]; ?>
							</h4>
							<div class="services__description">
								<?php echo $websites["site_internet"]["description"]; ?>
							</div>
						</div>

						<div class="services__card">
							<h4 class="services__card-title">
								<img src="<?php echo $websites["site_e-commerce"]["icone"]["url"]; ?>" alt="<?php echo $websites["site_e-commerce"]["icone"]["alt"]; ?>" class="services__icon" />
								<?php echo $websites["site_e-commerce"]["titre"]; ?>
							</h4>
							<div class="services__description">
								<?php echo $websites["site_e-commerce"]["description"]; ?>
							</div>
						</div>

						<div class="services__card">
							<h4 class="services__card-title">
								<img src="<?php echo $websites["maintenance"]["icone"]["url"]; ?>" alt="<?php echo $websites["maintenance"]["icone"]["alt"]; ?>" class="services__icon" />
								<?php echo $websites["maintenance"]["titre"]; ?>
							</h4>
							<div class="services__description">
								<?php echo $websites["maintenance"]["description"]; ?>
							</div>
						</div>
					</div>
				</div>

				<div class="services__section">
					<h3 class="services__subtitle"><?php echo $developpments["intitule"]; ?></h3>

					<div class="services__container">
						<div class="services__card--icon-title">
							<h4 class="services__card-title">
								<img src="<?php echo $developpments["creation_et_maintenance_dapplications"]["icone"]["url"]; ?>" alt="<?php echo $developpments["creation_et_maintenance_dapplications"]["icone"]["alt"]; ?>" class="services__icon" />
								<?php echo $developpments["creation_et_maintenance_dapplications"]["titre"]; ?>
							</h4>
							<?php
							if (!empty($developpments["creation_et_maintenance_dapplications"]["description"])):
							?>
								<div class="services__description">
									<?php echo $developpments["creation_et_maintenance_dapplications"]["description"]; ?>
								</div>
							<?php
							endif;
							?>
						</div>

						<div class="services__card--icon-title">
							<h4 class="services__card-title">
								<img src="<?php echo $developpments["api_webservices"]["icone"]["url"]; ?>" alt="<?php echo $developpments["creation_et_maintenance_dapplications"]["icone"]["alt"]; ?>" class="services__icon" />
								<?php echo $developpments["api_webservices"]["titre"]; ?>
							</h4>
							<?php
							if (!empty($developpments["api_webservices"]["description"])):
							?>
								<div class="services__description">
									<?php echo $developpments["api_webservices"]["description"]; ?>
								</div>
							<?php
							endif;
							?>
						</div>

						<div class="services__card--icon-title">
							<h4 class="services__card-title">
								<img src="<?php echo $developpments["lien_erp"]["icone"]["url"]; ?>" alt="<?php echo $developpments["creation_et_maintenance_dapplications"]["icone"]["alt"]; ?>" class="services__icon" />
								<?php echo $developpments["lien_erp"]["titre"]; ?>
							</h4>
							<?php
							if (!empty($developpments["lien_erp"]["description"])):
							?>
								<div class="services__description">
									<?php echo $developpments["lien_erp"]["description"]; ?>
								</div>
							<?php
							endif;
							?>
						</div>
					</div>
				</div>

				<div class="services__section">
					<h3 class="services__subtitle"><?php echo $analytics["intitule"]; ?></h3>

					<div class="services__card--description">
						<?php echo $analytics["description"]; ?>
					</div>
				</div>

				<div class="services__section">
					<h3 class="services__subtitle"><?php echo $marketing["intitule"]; ?></h3>

					<div class="services__container">
						<div class="services__card">
							<h4 class="services__card-title">
								<img src="<?php echo $marketing["seo"]["icone"]["url"]; ?>" alt="<?php echo $marketing["seo"]["icone"]["alt"]; ?>" class="services__icon" />
								<?php echo $marketing["seo"]["titre"]; ?>
							</h4>
							<?php
							if (!empty($marketing["seo"]["description"])):
							?>
								<div class="services__description">
									<?php echo $marketing["seo"]["description"]; ?>
								</div>
							<?php
							endif;
							?>
						</div>

						<div class="services__card">
							<h4 class="services__card-title">
								<img src="<?php echo $marketing["sea"]["icone"]["url"]; ?>" alt="<?php echo $marketing["sea"]["icone"]["alt"]; ?>" class="services__icon" />
								<?php echo $marketing["sea"]["titre"]; ?>
							</h4>
							<?php
							if (!empty($marketing["sea"]["description"])):
							?>
								<div class="services__description">
									<?php echo $marketing["sea"]["description"]; ?>
								</div>
							<?php
							endif;
							?>
						</div>

						<div class="services__card">
							<h4 class="services__card-title">
								<img src="<?php echo $marketing["campagnes_reseaux_sociaux"]["icone"]["url"]; ?>" alt="<?php echo $marketing["campagnes_reseaux_sociaux"]["icone"]["alt"]; ?>" class="services__icon" />
								<?php echo $marketing["campagnes_reseaux_sociaux"]["titre"]; ?>
							</h4>
							<?php
							if (!empty($marketing["campagnes_reseaux_sociaux"]["description"])):
							?>
								<div class="services__description">
									<?php echo $marketing["campagnes_reseaux_sociaux"]["description"]; ?>
								</div>
							<?php
							endif;
							?>
						</div>

						<div class="services__card">
							<h4 class="services__card-title">
								<img src="<?php echo $marketing["emailing"]["icone"]["url"]; ?>" alt="<?php echo $marketing["emailing"]["icone"]["alt"]; ?>" class="services__icon" />
								<?php echo $marketing["emailing"]["titre"]; ?>
							</h4>
							<?php
							if (!empty($marketing["emailing"]["description"])):
							?>
								<div class="services__description">
									<?php echo $marketing["emailing"]["description"]; ?>
								</div>
							<?php
							endif;
							?>
						</div>
					</div>
				</div>

				<div class="services__section">
					<h3 class="services__subtitle"><?php echo $strategy["intitule"]; ?></h3>

					<div class="services__card--description">
						<?php echo $strategy["description"]; ?>
					</div>
				</div>

				<div class="services__section">
					<h3 class="services__subtitle"><?php echo $formations["intitule"]; ?></h3>

					<div class="services__container">
						<div class="services__card--bigger">
							<h4 class="services__card-title">
								<?php
								if (!empty($formations["formations_et_ateliers_thematiques"]["icone"])):
								?>
									<img src="<?php echo $formations["formations_et_ateliers_thematiques"]["icone"]["url"]; ?>" alt="<?php echo $formations["formations_et_ateliers_thematiques"]["icone"]["alt"]; ?>" class="services__icon" />
								<?php
								endif;
								echo $formations["formations_et_ateliers_thematiques"]["titre"];
								?>
							</h4>
							<div class="services__description">
								<?php echo $formations["formations_et_ateliers_thematiques"]["description"]; ?>
							</div>
						</div>

						<div class="services__card--bigger">
							<h4 class="services__card-title">
								<?php
								if (!empty($formations["creation_de_sites_wordpress_woocommerce_a_quatre_mains"]["icone"])):
								?>
									<img src="<?php echo $formations["creation_de_sites_wordpress_woocommerce_a_quatre_mains"]["icone"]["url"]; ?>" alt="<?php echo $formations["creation_de_sites_wordpress_woocommerce_a_quatre_mains"]["icone"]["alt"]; ?>" class="services__icon" />
								<?php
								endif;
								echo $formations["creation_de_sites_wordpress_woocommerce_a_quatre_mains"]["titre"];
								?>
							</h4>
							<div class="services__description">
								<?php echo $formations["creation_de_sites_wordpress_woocommerce_a_quatre_mains"]["description"]; ?>
							</div>
						</div>
					</div>
				</div>

				<div class="services__section">
					<h3 class="services__subtitle"><?php echo $communication["intitule"]; ?></h3>

					<div class="services__container">
						<div class="services__card--icon-title">
							<h4 class="services__card-title">
								<img src="<?php echo $communication["site_internet"]["icone"]["url"]; ?>" alt="<?php echo $communication["site_internet"]["icone"]["alt"]; ?>" class="services__icon" />
								<?php echo $communication["site_internet"]["titre"]; ?>
							</h4>
						</div>

						<div class="services__card--icon-title">
							<h4 class="services__card-title">
								<img src="<?php echo $communication["seo"]["icone"]["url"]; ?>" alt="<?php echo $communication["seo"]["icone"]["alt"]; ?>" class="services__icon" />
								<?php echo $communication["seo"]["titre"]; ?>
							</h4>
						</div>

						<div class="services__card--icon-title">
							<h4 class="services__card-title">
								<img src="<?php echo $communication["sea"]["icone"]["url"]; ?>" alt="<?php echo $communication["sea"]["icone"]["alt"]; ?>" class="services__icon" />
								<?php echo $communication["sea"]["titre"]; ?>
							</h4>
						</div>

						<div class="services__card--icon-title">
							<h4 class="services__card-title">
								<img src="<?php echo $communication["facebook"]["icone"]["url"]; ?>" alt="<?php echo $communication["facebook"]["icone"]["alt"]; ?>" class="services__icon" />
								<?php echo $communication["facebook"]["titre"]; ?>
							</h4>
						</div>

						<div class="services__card--icon-title">
							<h4 class="services__card-title">
								<img src="<?php echo $communication["linkedin"]["icone"]["url"]; ?>" alt="<?php echo $communication["linkedin"]["icone"]["alt"]; ?>" class="services__icon" />
								<?php echo $communication["linkedin"]["titre"]; ?>
							</h4>
						</div>

						<div class="services__card--icon-title">
							<h4 class="services__card-title">
								<img src="<?php echo $communication["prospection_mail"]["icone"]["url"]; ?>" alt="<?php echo $communication["prospection_mail"]["icone"]["alt"]; ?>" class="services__icon" />
								<?php echo $communication["prospection_mail"]["titre"]; ?>
							</h4>
						</div>
					</div>
				</div>
			</div>
		<?php
		endif;
		?>
	</div>
<?php
endif;
?>