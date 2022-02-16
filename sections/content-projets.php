<?php
$tags = get_the_tags();
$title = get_the_title();
$desktop_image = get_field("image_daffichage_de_bureau");
$mobile_image = get_field("image_de_mobile");
//$presentation = get_field("presentation");
$tags = get_field("tags");
$link = get_field("lien") ? get_field("lien") : "#";
?>

<article class="projects__cards">
	<a href="<?php echo $link; ?>" class="projects__link" target="_blank">
		<h5 class="projects__client-name"><?php echo $title; ?></h5>
		<div class="projects__thumbnails">
			<img src="<?php echo $desktop_image["sizes"]["medium"]; ?>" alt="<?php echo $desktop_image["alt"]; ?>" class="thumbnail__desktop">
			<img src="<?php echo $mobile_image["sizes"]["medium"]; ?>" alt="<?php echo $mobile_image["alt"]; ?>" class="thumbnail__mobile">
		</div>
		<div class="projects__informations">
			<!-- <p class="projects__presentation"><?php //echo $presentation; ?></p> -->
			<?php
			if (!empty($tags)):
			?>
				<ul class="projects__post-tags-container">
					<?php
					foreach ($tags as $tag):
					?>
						<li class="projects__post-tags"><?php echo $tag->name; ?></li>
					<?php
					endforeach;
					?>
				</ul>
			<?php
			endif;
			?>
		</div>
	</a>
</article>