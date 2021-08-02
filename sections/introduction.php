	<section class="introduction">
		<h2 class="introduction__title">
			<?php $introduction = get_field("introduction");
			if ($introduction): ?>
				<img src="<?php echo esc_url($introduction["image"]["url"]); ?>" alt="<?php esc_attr($introduction["image"]["alt"]); ?>" class="introduction__image" />
				<p class="introduction__text">
					<?php echo $introduction["text_part_1"]["normal_text"]; ?>
					<br />
					<span class="introduction__keyword"><?php echo $introduction["text_part_1"]["keyword"]; ?></span>
				</p>
				<p class="introduction__text">
					<?php echo $introduction["text_part_2"]["normal_text"]; ?>
					<br />
					<span class="introduction__keyword"><?php echo $introduction["text_part_2"]["keyword"]; ?></span>
				</p>
			<?php endif; ?>
		</h2>
	</section>
</div>