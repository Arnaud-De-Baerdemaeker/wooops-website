<div id="our_services" class="services">
	<?php
	$offer = get_field("services_provided_title");
	$service_1 = get_field("service_1");
	$service_2 = get_field("service_2");
	$service_3 = get_field("service_3");
	$service_4 = get_field("service_4");
	$s5_title = get_field("s5_title");
	$s6_title = get_field("s6_title");
	$communication = get_field("communication");
	?>

	<?php if ($offer): ?>
		<h2 class="services__title"><?php echo $offer; ?></h2>
	<?php endif; ?>

	<?php if ($service_1): ?>
		<div class="service1"><!-- S1 -->
			<?php if ($service_1["title"]): ?>
				<h3 class="service1__title"><?php echo $service_1["title"]; ?></h3>
			<?php endif; ?>

			<?php if ($service_1["service_1a"]): ?>
				<div class="service1a"><!-- S1a -->
					<div class="service1a__intro">
						<h4 class="service1a__title"><?php echo $service_1["service_1a"]["title"]; ?></h4>
						<p class="service1a__text"><?php echo $service_1["service_1a"]["introduction"]; ?></p>
					</div>
					<div class="service1a__keywords">
						<ul class="service1a__list">
							<li class="service1a__item"><?php echo $service_1["service_1a"]["keywords"]["keyword_1"]; ?></li>
							<li class="service1a__item"><?php echo $service_1["service_1a"]["keywords"]["keyword_2"]; ?></li>
							<li class="service1a__item"><?php echo $service_1["service_1a"]["keywords"]["keyword_3"]; ?></li>
							<li class="service1a__item"><?php echo $service_1["service_1a"]["keywords"]["keyword_4"]; ?></li>
							<li class="service1a__item"><?php echo $service_1["service_1a"]["keywords"]["keyword_5"]; ?></li>
							<li class="service1a__item"><?php echo $service_1["service_1a"]["keywords"]["keyword_6"]; ?></li>
							<li class="service1a__item"><?php echo $service_1["service_1a"]["keywords"]["keyword_7"]; ?></li>
						</ul>
					</div>
				</div>
			<?php endif; ?>

			<?php if ($service_1["service_1b"]): ?>
				<div class="service1b"><!-- S1b -->
					<div class="service1b__intro">
						<h4 class="service1b__title"><?php echo $service_1["service_1b"]["title"]; ?></h4>
						<p class="service1b__text"><?php echo $service_1["service_1b"]["introduction"]; ?></p>
					</div>
					<div class="service1b__keywords">
						<ul class="service1b__list">
							<li class="service1b__item"><?php echo $service_1["service_1b"]["keywords"]["keyword_1"]; ?></li>
							<li class="service1b__item"><?php echo $service_1["service_1b"]["keywords"]["keyword_2"]; ?></li>
							<li class="service1b__item"><?php echo $service_1["service_1b"]["keywords"]["keyword_3"]; ?></li>
							<li class="service1b__item"><?php echo $service_1["service_1b"]["keywords"]["keyword_4"]; ?></li>
							<li class="service1b__item"><?php echo $service_1["service_1b"]["keywords"]["keyword_5"]; ?></li>
							<li class="service1b__item"><?php echo $service_1["service_1b"]["keywords"]["keyword_6"]; ?></li>
							<li class="service1b__item"><?php echo $service_1["service_1b"]["keywords"]["keyword_7"]; ?></li>
							<li class="service1b__item"><?php echo $service_1["service_1b"]["keywords"]["keyword_8"]; ?></li>
							<li class="service1b__item"><?php echo $service_1["service_1b"]["keywords"]["keyword_9"]; ?></li>
						</ul>
					</div>
				</div>
			<?php endif; ?>

			<?php if ($service_1["service_1c"]): ?>
				<div class="service1c"><!-- S1c -->
					<h4 class="service1c__title"><?php echo $service_1["service_1c"]["title"]; ?></h4>
					<p class="service1c__text"><?php echo $service_1["service_1c"]["introduction"]; ?></p>
				</div>
			<?php endif; ?>
		</div>
	<?php endif; ?>

	<?php if ($service_2): ?>
		<div class="service2"><!-- S2 -->
			<h3 class="service2__title"><?php echo $service_2["title"]; ?></h3>
			<ol class="service2__list">
				<li class="service2__item"><?php echo $service_2["service_2a_title"]; ?></li>
				<li class="service2__item"><?php echo $service_2["service_2b_title"]; ?></li>
				<li class="service2__item"><?php echo $service_2["service_2c_title"]; ?></li>
			</ol>
		</div>
	<?php endif; ?>

	<?php if ($service_3): ?>
		<div class="service3"><!-- S3 -->
			<h3 class="service3__title"><?php echo $service_3["title"]; ?></h3>
			<p class="service3__text"><?php echo $service_3["paragraphs"]["paragraph_1"]; ?></p>
			<p class="service3__text"><?php echo $service_3["paragraphs"]["paragraph_2"]; ?></p>
		</div>
	<?php endif; ?>

	<?php if ($service_4): ?>
		<div class="service4"><!-- S4 -->
			<h3 class="service4__title"><?php echo $service_4["title"]; ?></h3>

			<?php if ($service_4["service_4a"]): ?>
				<div class="service4a"><!-- S4a -->
					<h4 class="service4a__title"><?php echo $service_4["service_4a"]["title"]; ?></h4>
					<p class="service4a__text"><?php echo $service_4["service_4a"]["paragraphs"]["paragraph_1"]; ?></p>
					<p class="service4a__text"><?php echo $service_4["service_4a"]["paragraphs"]["paragraph_2"]; ?></p>
				</div>
			<?php endif; ?>

			<?php if ($service_4["service_4b"]): ?>
				<div class="service4b"><!-- S4b -->
					<h4 class="service4b__title"><?php echo $service_4["service_4b"]["title"]; ?></h4>
					<p class="service4c__text"><?php echo $service_4["service_4b"]["text"]; ?></p>
				</div>
			<?php endif; ?>

			<?php if ($service_4["service_4c"]): ?>
				<div class="service4c"><!-- S4c -->
					<h4 class="service4c__title"><?php echo $service_4["service_4c"]["title"]; ?></h4>
					<p class="service4c__text"><?php echo $service_4["service_4c"]["paragraphs"]["paragraph_1"]; ?></p>
					<p class="service4c__text"><?php echo $service_4["service_4c"]["paragraphs"]["paragraph_2"]; ?></p>
				</div>
			<?php endif; ?>

			<?php if ($service_4["service_4d_title"]): ?>
				<div class="service4d"><!-- S4d -->
					<h4 class="service4d__title"><?php echo $service_4["service_4d_title"]; ?></h4>
				</div>
			<?php endif; ?>
		</div>
	<?php endif; ?>

	<?php if ($s5_title): ?>
		<div class="service5"><!-- S5 -->
			<h3 class="service5__title"><?php echo $s5_title; ?></h3>
		</div>
	<?php endif; ?>

	<?php if ($s6_title): ?>
		<div class="service6"><!-- S6 -->
			<h3 class="service6__title"><?php echo $s6_title; ?></h3>
		</div>
	<?php endif; ?>
</div>