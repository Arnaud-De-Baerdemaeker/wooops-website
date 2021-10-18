<?php
	$headers = get_field("projects");
	$tags = get_the_tags();
	$title = get_the_title();
	$desktop_image = get_field("desktop_image");
	$mobile_image = get_field("mobile_image");
	$presentation = get_field("presentation");
	$specifications = get_field("specifications");
	$tags = get_field("tags");
	$link = get_field("link");
?>

<div class="projects__cards">
	<?php if (!empty($title)): ?>
		<p class="projects__client-name"><?php echo $title; ?></p>
	<?php endif; ?>
	<div class="projects__thumbnails">
		<?php if (!empty($desktop_image["url"])): ?>
			<img src="<?php echo $desktop_image["url"]; ?>" alt="<?php echo $desktop_image["alt"]; ?>" class="thumbnail__desktop">
		<?php endif;
		if (!empty($mobile_image["url"])): ?>
			<img src="<?php echo $mobile_image["url"]; ?>" alt="<?php echo $mobile_image["alt"]; ?>" class="thumbnail__mobile">
		<?php endif; ?>
	</div>
	<div class="projects__informations">
		<?php // if (!empty($presentation): ?>
			<!-- <p class="projects__presentation"><?php //echo $presentation; ?></p> -->
		<?php //endif;
		// if (!empty($specifications)): ?>
			<!-- <p class="projects__specifications"><?php //echo $specifications; ?></p> -->
		<?php //endif;
		if (!empty($tags)): ?>
			<ul class="projects__post-tags-container">
				<?php foreach ($tags as $tag): ?>
					<li class="projects__post-tags"><?php echo $tag->name; ?></li>
				<?php endforeach; ?>
			</ul>
		<?php endif;
		if (!empty($link)): ?>
			<a href="<?php echo $link; ?>" class="projects__link" target="_blank">Visiter</a>
		<?php endif; ?>
	</div>
</div>