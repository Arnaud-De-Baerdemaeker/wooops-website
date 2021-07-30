<div id="our_services" class="services">
	<?php
	$offer = get_field("services_provided_title");
	$service_1 = get_field("service_1");
	$service_2 = get_field("service_2");
	$service_3 = get_field("service_3");
	$service_4 = get_field("service_4");
	$s5_title = get_field("s5_title");
	$s6_title = get_field("s6_title");
	?>

	<h2 class="services__title"><?php echo $offer; ?></h2>

	<div class="service1"><!-- S1 -->
		<h3 class="service1__title"><?php echo $service_1["s1_title"]; ?></h3>

		<div class="service1a"><!-- S1a -->
			<div class="service1a__intro">
				<h4 class="service1a__title"><?php echo $service_1["s1a"]["s1a_title"]; ?></h4>
				<p class="service1a__text"><?php echo $service_1["s1a"]["s1a_introduction"]; ?></p>
			</div>
			<div class="service1a__keywords">
				<ul class="service1a__list">
					<li class="service1a__item"><?php echo $service_1["s1a"]["s1a_keywords"]["s1a_keyword_1"]; ?></li>
					<li class="service1a__item"><?php echo $service_1["s1a"]["s1a_keywords"]["s1a_keyword_2"]; ?></li>
					<li class="service1a__item"><?php echo $service_1["s1a"]["s1a_keywords"]["s1a_keyword_3"]; ?></li>
					<li class="service1a__item"><?php echo $service_1["s1a"]["s1a_keywords"]["s1a_keyword_4"]; ?></li>
					<li class="service1a__item"><?php echo $service_1["s1a"]["s1a_keywords"]["s1a_keyword_5"]; ?></li>
					<li class="service1a__item"><?php echo $service_1["s1a"]["s1a_keywords"]["s1a_keyword_6"]; ?></li>
					<li class="service1a__item"><?php echo $service_1["s1a"]["s1a_keywords"]["s1a_keyword_7"]; ?></li>
				</ul>
			</div>
		</div>

		<div class="service1b"><!-- S1b -->
			<div class="service1b__intro">
				<h4 class="service1b__title"><?php echo $service_1["s1b"]["s1b_title"]; ?></h4>
				<p class="service1b__text"><?php echo $service_1["s1b"]["s1b_introduction"]; ?></p>
			</div>
			<div class="service1b__keywords">
				<ul class="service1b__list">
					<li class="service1b__item"><?php echo $service_1["s1b"]["s1b_keywords"]["s1b_keyword_1"]; ?></li>
					<li class="service1b__item"><?php echo $service_1["s1b"]["s1b_keywords"]["s1b_keyword_2"]; ?></li>
					<li class="service1b__item"><?php echo $service_1["s1b"]["s1b_keywords"]["s1b_keyword_3"]; ?></li>
					<li class="service1b__item"><?php echo $service_1["s1b"]["s1b_keywords"]["s1b_keyword_4"]; ?></li>
					<li class="service1b__item"><?php echo $service_1["s1b"]["s1b_keywords"]["s1b_keyword_5"]; ?></li>
					<li class="service1b__item"><?php echo $service_1["s1b"]["s1b_keywords"]["s1b_keyword_6"]; ?></li>
					<li class="service1b__item"><?php echo $service_1["s1b"]["s1b_keywords"]["s1b_keyword_7"]; ?></li>
					<li class="service1b__item"><?php echo $service_1["s1b"]["s1b_keywords"]["s1b_keyword_8"]; ?></li>
					<li class="service1b__item"><?php echo $service_1["s1b"]["s1b_keywords"]["s1b_keyword_9"]; ?></li>
				</ul>
			</div>
		</div>

		<div class="service1c"><!-- S1c -->
			<h4 class="service1c__title"><?php echo $service_1["s1c"]["s1c_title"]; ?></h4>
			<p class="service1c__text"><?php echo $service_1["s1c"]["s1c_introduction"]; ?></p>
		</div>
	</div>

	<div class="service2"><!-- S2 -->
		<h3 class="service2__title"><?php echo $service_2["s2_title"]; ?></h3>
		<ol class="service2__list">
			<li class="service2__item"><?php echo $service_2["s2a_title"]; ?></li>
			<li class="service2__item"><?php echo $service_2["s2b_title"]; ?></li>
			<li class="service2__item"><?php echo $service_2["s2c_title"]; ?></li>
		</ol>
	</div>

	<div class="service3"><!-- S3 -->
		<h3 class="service3__title"><?php echo $service_3["s3_title"]; ?></h3>
		<p class="service3__text"><?php echo $service_3["s3_text"]; ?></p>
	</div>

	<div class="service4"><!-- S4 -->
		<h3 class="service4__title"><?php echo $service_4["s4_title"]; ?></h3>

		<div class="service4a"><!-- S4a -->
			<h4 class="service4a__title"><?php echo $service_4["s4a"]["s4a_title"]; ?></h4>
			<p class="service4a__text"><?php echo $service_4["s4a"]["s4a_text"]; ?></p>
		</div>

		<div class="service4b"><!-- S4b -->
			<h4 class="service4b__title"><?php echo $service_4["s4b"]["s4b_title"]; ?></h4>
			<p class="service4c__text"><?php echo $service_4["s4b"]["s4b_text"]; ?></p>
		</div>

		<div class="service4c"><!-- S4c -->
			<h4 class="service4c__title"><?php echo $service_4["s4c"]["s4c_title"]; ?></h4>
			<p class="service4c__text"><?php echo $service_4["s4c"]["s4c_text"]; ?></p>
		</div>

		<div class="service4d"><!-- S4d -->
			<h4 class="service4d__title"><?php echo $service_4["s4d_title"]; ?></h4>
		</div>
	</div>

	<div class="service5"><!-- S5 -->
		<h3 class="service5__title"><?php echo $s5_title; ?></h3>
	</div>

	<div class="service6"><!-- S6 -->
		<h3 class="service6__title"><?php echo $s6_title; ?></h3>
	</div>
</div>