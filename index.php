<?php get_header(); ?>

			<section class="introduction">
				<h2 class="introduction__title">
					<?php $introduction = get_field("introduction");
					$part_1 = $introduction["introduction_text_part_1"];
					$part_2 = $introduction["introduction_text_part_2"];
					if ($introduction): ?>
						<img src="<?php echo esc_url($introduction["introduction_image"]["url"]); ?>" alt="<?php esc_attr($introduction["introduction_image"]["alt"]); ?>" class="introduction__image" />
						<p class="introduction__text">
							<?php echo $part_1["introduction_text_part_1_normal"]; ?>
							<br />
							<span class="introduction__keyword"><?php echo $part_1["introduction_text_part_1_key"] ?></span>
						</p>
						<p class="introduction__text">
							<?php echo $part_2["introduction_text_part_2_normal"]; ?>
							<br />
							<span class="introduction__keyword"><?php echo $part_2["introduction_text_part_2_key"] ?></span>
						</p>
					<?php endif; ?>
				</h2>
			</section>
		</div>

		<?php include("sections/agency.php"); ?>

		<?php include("sections/services.php"); ?>

		<?php wp_footer(); ?>
	</body>
</html>