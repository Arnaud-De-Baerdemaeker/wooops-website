<?php
$services_header = get_field("services");
$service_1 = get_field("service_1");
$service_2 = get_field("service_2");
$service_3 = get_field("service_3");
$service_4 = get_field("service_4");
$service_5 = get_field("service_5");
$service_6 = get_field("service_6");
$service_7 = get_field("service_7");
?>

<?php
if (!empty($services_header["title"])):
?>
	<div id="services" class="services">
		<h2 class="services__title">
			<div class="title__text-container">
				<span class="title__text"><?php echo $services_header["title"]; ?></span>
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
		if (!empty($service_1)):
		?>
			<div class="service-1"><!-- Service 1 -->
				<?php
				if (!empty($service_1["title"])):
				?>
					<h3 class="service-1__title"><?php echo $service_1["title"]; ?></h3>
				<?php
				endif;
				?>

				<div class="service-1__services-container">
					<?php
					if (!empty($service_1["list"]["service_1-1"])):
					?>
						<div class="service-1-1"><!-- Service 1-1 -->
							<div class="service-1-1__intro">
								<?php
								if (!empty($service_1["list"]["service_1-1"]["title"])):
								?>
									<h4 class="service-1-1__title">
										<?php
										if (!empty($service_1["list"]["service_1-1"]["icon"])):
										?>
											<img src="<?php echo $service_1["list"]["service_1-1"]["icon"]["url"]; ?>" alt="<?php echo $service["list"]["service_1-1"]["icon"]["alt"]; ?>" class="service-1-1__icon" />
										<?php
										endif;
										echo $service_1["list"]["service_1-1"]["title"];
										?>
									</h4>
								<?php
								endif;
								?>
								<p class="service-1-1__text"><?php echo $service_1["list"]["service_1-1"]["introduction"]; ?></p>
							</div>
							<?php
							if (!empty($service_1["list"]["service_1-1"]["keywords"])):
							?>
								<div class="service-1-1__keywords">
									<ul class="service-1-1__list">
										<?php
										$service_1_1_list = count($service_1["list"]["service_1-1"]["keywords"]);
										for ($i = 1; $i <= $service_1_1_list; $i++):
										?>
											<li class="service-1-1__item"><?php echo $service_1["list"]["service_1-1"]["keywords"]["keyword_".$i]; ?></li>
										<?php
										endfor;
										?>
									</ul>
								</div>
							<?php
							endif;
							?>
						</div>
					<?php
					endif;
					?>

					<?php
					if (!empty($service_1["list"]["service_1-2"])):
					?>
						<div class="service-1-2"><!-- Service 1-2 -->
							<div class="service-1-2__intro">
								<?php
								if (!empty($service_1["list"]["service_1-2"]["title"])):
								?>
									<h4 class="service-1-2__title">
										<?php
										if (!empty($service_1["list"]["service_1-2"]["icon"])):
										?>
											<img src="<?php echo $service_1["list"]["service_1-2"]["icon"]["url"]; ?>" alt="<?php echo $service_1["list"]["service_1-2"]["icon"]["alt"]; ?>" class="service-1-2__icon" />
										<?php
										endif;
										echo $service_1["list"]["service_1-2"]["title"];
										?>
									</h4>
								<?php
								endif;
								?>
								<p class="service-1-2__text"><?php echo $service_1["list"]["service_1-2"]["introduction"]; ?></p>
							</div>
							<?php
							if (!empty($service_1["list"]["service_1-2"]["keywords"])):
							?>
								<div class="service-1-2__keywords">
									<ul class="service-1-2__list">
										<?php
										$service_1_2_list = count($service_1["list"]["service_1-2"]["keywords"]);
										for ($i = 1; $i <= $service_1_2_list; $i++):
										?>
											<li class="service-1-2__item"><?php echo $service_1["list"]["service_1-2"]["keywords"]["keyword_".$i]; ?></li>
										<?php
										endfor;
										?>
									</ul>
								</div>
							<?php
							endif;
							?>
						</div>
					<?php
					endif;
					?>

					<?php
					if (!empty($service_1["list"]["service_1-3"])):
					?>
						<div class="service-1-3"><!-- Service 1-3 -->
							<div class="service-1-3__intro">
								<?php
								if (!empty($service_1["list"]["service_1-3"]["title"])):
								?>
									<h4 class="service-1-3__title">
										<?php
										if (!empty($service_1["list"]["service_1-3"]["icon"])):
										?>
											<img src="<?php echo $service_1["list"]["service_1-3"]["icon"]["url"]; ?>" alt="<?php echo $service_1["list"]["service_1-3"]["icon"]["alt"]; ?>" class="service-1-3__icon" />
										<?php
										endif;
										echo $service_1["list"]["service_1-3"]["title"];
										?>
									</h4>
								<?php
								endif;
								?>
								<p class="service-1-3__text"><?php echo $service_1["list"]["service_1-3"]["introduction"]; ?></p>
							</div>
						</div>
					<?php
					endif;
					?>
				</div>
			</div>
		<?php
		endif;
		?>

		<?php
		if (!empty($service_2)):
		?>
			<div class="service-2"><!-- Service 2 -->
				<h3 class="service-2__title"><?php echo $service_2["title"]; ?></h3>
				<?php
				if (!empty($service_2["list"])):
				?>
					<ol class="service-2__list">
						<?php
						$service_2_list = count($service_2["list"]);
						for ($i = 1; $i <= $service_2_list; $i++):
						?>
							<li id="service-2__item-<?php echo $i; ?>" class="service-2__item">
								<?php
								if (!empty($service_2["list"]["service_2-".$i]["icon"])):
								?>
									<img src="<?php echo $service_2["list"]["service_2-".$i]["icon"]["url"] ?>" alt="<?php echo $service_2["list"]["service_2-".$i]["icon"]["alt"] ?>" class="service-2__icon" />
								<?php
								endif;
								echo $service_2["list"]["service_2-".$i]["title"]; ?>
							</li>
						<?php
						endfor;
						?>
					</ol>
				<?php
				endif;
				?>
			</div>
		<?php
		endif;
		?>

		<?php
		if (!empty($service_3)):
		?>
			<div class="service-3"><!-- Service 3 -->
				<h3 class="service-3__title"><?php echo $service_3["title"]; ?></h3>
				<?php
				if (!empty($service_3["text"])):
				?>
					<div class="service-3__text-container">
						<?php
						echo $service_3["text"];
						?>
					</div>
				<?php
				endif;
				?>
			</div>
		<?php
		endif;
		?>

		<?php
		if (!empty($service_4)):
		?>
			<div class="service-4"><!-- Service 4 -->
				<h3 class="service-4__title"><?php echo $service_4["title"]; ?></h3>
				<?php
				if (!empty($service_4["list"])):
				?>
					<div class="service-4__services-container">
						<?php
						if (!empty($service_4["list"]["service_4-1"])):
						?>
							<div class="service-4-1"><!-- Service 4-1 -->
								<?php
								if (!empty($service_4["list"]["service_4-1"]["title"])):
								?>
									<h4 class="service-4-1__title">
										<?php
										if (!empty($service_4["list"]["service_4-1"]["icon"])):
										?>
											<img src="<?php echo $service_4["list"]["service_4-1"]["icon"]["url"]; ?>" alt="<?php echo $service_4["list"]["service_4-1"]["icon"]["alt"]; ?>" class="service-4-1__icon" />
										<?php
										endif;
										echo $service_4["list"]["service_4-1"]["title"];
										?>
									</h4>
								<?php
								endif;
								if (!empty($service_4["list"]["service_4-1"]["paragraphs"])):
									$service_4_1_paragraphs = count($service_4["list"]["service_4-1"]);
									for ($i = 1; $i <= $service_4_1_paragraphs; $i++):
									?>
										<p class="service-4-1__text"><?php echo $service_4["list"]["service_4-1"]["paragraphs"]["paragraph_".$i]; ?></p>
									<?php
									endfor;
								endif;
								?>
							</div>
						<?php
						endif;
						?>

						<?php
						if (!empty($service_4["list"]["service_4-2"])):
						?>
							<div class="service-4-2"><!-- Service 4-2 -->
								<?php
								if (!empty($service_4["list"]["service_4-2"]["title"])):
								?>
									<h4 class="service-4-2__title">
										<?php
										if (!empty($service_4["list"]["service_4-2"]["icon"])):
										?>
											<img src="<?php echo $service_4["list"]["service_4-2"]["icon"]["url"]; ?>" alt="<?php echo $service_4["list"]["service_4-2"]["icon"]["alt"]; ?>" class="service-4-2__icon" />
										<?php
										endif;
										echo $service_4["list"]["service_4-2"]["title"];
										?>
									</h4>
								<?php
								endif;
								?>
								<p class="service-4-2__text"><?php echo $service_4["list"]["service_4-2"]["text"]; ?></p>
							</div>
						<?php
						endif;
						?>

						<?php
						if (!empty($service_4["list"]["service_4-3"])):
						?>
							<div class="service-4-3"><!-- Service 4-3 -->
								<?php
								if (!empty($service_4["list"]["service_4-3"]["title"])):
								?>
									<h4 class="service-4-3__title">
										<?php
										if (!empty($service_4["list"]["service_4-3"]["icon"])):
										?>
											<img src="<?php echo $service_4["list"]["service_4-3"]["icon"]["url"]; ?>" alt="<?php echo $service_4["list"]["service_4-3"]["icon"]["alt"]; ?>" class="service-4-3__icon" />
										<?php
										endif;
										echo $service_4["list"]["service_4-3"]["title"];
										?>
									</h4>
								<?php
								endif;
								if (!empty($service_4["list"]["service_4-3"]["paragraphs"])):
									$service_4_3_paragraphs = count($service_4["list"]["service_4-3"]["paragraphs"]);
									for ($i = 1; $i <= $service_4_3_paragraphs; $i++):
									?>
										<p class="service-4-3__text"><?php echo $service_4["list"]["service_4-3"]["paragraphs"]["paragraph_".$i]; ?></p>
									<?php
									endfor;
								endif;
								?>
							</div>
						<?php
						endif;
						?>

						<?php
						if (!empty($service_4["list"]["service_4-4"])):
						?>
							<div class="service-4-4"><!-- Service 4-4 -->
								<?php
								if(!empty($service_4["list"]["service_4-4"]["title"])):
								?>
									<h4 class="service-4-4__title">
										<?php
										if (!empty($service_4["list"]["service_4-4"]["icon"])):
										?>
											<img src="<?php echo $service_4["list"]["service_4-4"]["icon"]["url"]; ?>" alt="<?php echo $service_4["list"]["service_4-4"]["icon"]["alt"]; ?>" class="service-4-4__icon" />
										<?php
										endif;
										echo $service_4["list"]["service_4-4"]["title"];
										?>
									</h4>
								<?php
								endif;
								?>
							</div>
						<?php
						endif;
						?>
					</div>
				<?php
				endif;
				?>
			</div>
		<?php
		endif;
		?>

		<?php
		if (!empty($service_5)):
		?>
			<div class="service-5"><!-- S5 -->
				<h3 class="service-5__title"><?php echo $service_5["title"]; ?></h3>
			</div>
		<?php
		endif;
		?>

		<?php
		if (!empty($service_6)):
		?>
			<div class="service-6"><!-- S6 -->
				<h3 class="service-6__title"><?php echo $service_6["title"]; ?></h3>
			</div>
		<?php
		endif;
		?>

		<?php
		if (!empty($service_7)):
		?>
			<div class="service-7">
				<h3 class="service-7__title"><?php echo $service_7["title"]; ?></h3>
				<?php
				if (!empty($service_7["keywords"])):
				?>
					<ul class="service-7__list">
						<?php
						$service_7_keywords = count($service_7["keywords"]);
						for ($i = 1; $i <= $service_7_keywords; $i++):
						?>
							<li id="service-7__item-<?php echo $i; ?>" class="service-7__item">
								<?php
								if (!empty($service_7["keywords"]["keyword_".$i]["icon"])):
								?>
									<img src="<?php echo $service_7["keywords"]["keyword_".$i]["icon"]["url"]; ?>" alt="<?php echo $service_7["keywords"]["keyword_".$i]["icon"]["alt"]; ?>" class="service-7__icon" />
								<?php
								endif;
								echo $service_7["keywords"]["keyword_".$i]["title"];
								?>
							</li>
						<?php
						endfor;
						?>
					</ul>
				<?php
				endif;
				?>
			</div>
		<?php
		endif;
		?>
	</div>
<?php
endif;
?>