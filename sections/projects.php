<?php
	$projects_header = get_field("projects_header");
	$projects = get_field("projects");
	$tags = get_the_tags();
?>

<?php if ($projects_header["title"]): ?>
	<div id="projects" class="projects">
		<h2 class="projects__title">
			<span class="title__text"><?php echo $projects_header["title"]; ?></span>
			<?php if ($projects_header["image"]): ?>
				<span class="title__image-container"><img src="<?php echo $projects_header["image"]["url"]; ?>" alt="<?php echo $projects_header["image"]["alt"]; ?>" class="title__image" /></span>
			<?php endif; ?>
		</h2>

		<?php if ($tags): ?>
			<div class="projects__all-tags-container">
				<ul class="projects__all-tags-list">
					<?php foreach ($tags as $tag): ?>
						<li>
							<button class="projects__all-tags"><?php echo $tag->name; ?></button>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>

		<?php if ($projects): ?>
			<div class="projects__cards-container">
				<?php foreach ($projects as $project):
					if ($project): ?>
						<div class="projects__cards">
							<?php if ($project["client_name"]): ?>
								<p class="projects__client-name"><?php echo $project["client_name"]; ?></p>
							<?php endif; ?>
							<div class="projects__thumbnails">
								<?php if ($project["desktop_image"]): ?>
									<img src="<?php echo $project["desktop_image"]["url"]; ?>" alt="<?php echo $project["desktop_image"]["alt"]; ?>" class="thumbnail__desktop">
								<?php endif; ?>
								<?php if ($project["mobile_image"]): ?>
									<img src="<?php echo $project["mobile_image"]["url"]; ?>" alt="<?php echo $project["mobile_image"]["alt"]; ?>" class="thumbnail__mobile">
								<?php endif; ?>
							</div>
							<div class="projects__informations">
								<?php if ($project["presentation"]): ?>
									<p class="projects__presentation"><?php echo $project["presentation"]; ?></p>
								<?php endif;
								// if ($project["specifications"]): ?>
									<!-- <p class="projects__specifications"><?php //echo $project["specifications"]; ?></p> -->
								<?php //endif;
								if ($project["tags"]): ?>
									<ul class="projects__post-tags-container">
										<?php foreach ($project["tags"] as $tag): ?>
											<li class="projects__post-tags"><?php echo $tag->name; ?></li>
										<?php endforeach; ?>
									</ul>
								<?php endif;
								if ($project["link"]): ?>
									<a href="<?php echo $project["link"]; ?>" class="projects__link" target="_blank">Visiter</a>
								<?php endif; ?>
							</div>
						</div>
					<?php endif;
				endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
<?php endif; ?>