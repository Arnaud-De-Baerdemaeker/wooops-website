<?php
	$projects_header = get_field("projects_header");
	$projects = get_field("projects");
	$projects_quantity = count($projects);
?>

<?php if ($projects_header["title"]): ?>
	<div id="projects" class="projects">
		<h2 class="projects__title">
			<span class="title__text"><?php echo $projects_header["title"]; ?></span>
			<?php if ($projects_header["image"]): ?>
				<span class="title__image-container"><img src="<?php echo $projects_header["image"]["url"]; ?>" alt="<?php echo $projects_header["image"]["alt"]; ?>" class="title__image" /></span>
			<?php endif; ?>
		</h2>

		<?php if ($projects): ?>
			<?php for ($i = 0; $i < $projects_quantity; $i++):
				if ($projects["project_".$i]): ?>
					<div class="projects__cards">
						<div class="projects__thumbnails">
							<?php if ($projects["project_".$i]["desktop_image"]): ?>
								<img src="<?php echo $projects["project_".$i]["desktop_image"]["url"]; ?>" alt="<?php echo $projects["project_".$i]["desktop_image"]["alt"]; ?>" class="thumbnail__desktop">
							<?php endif; ?>
							<?php if ($projects["project_".$i]["mobile_image"]): ?>
								<img src="<?php echo $projects["project_".$i]["mobile_image"]["url"]; ?>" alt="<?php echo $projects["project_".$i]["mobile_image"]["alt"]; ?>" class="thumbnail__mobile">
							<?php endif; ?>
						</div>
						<div class="projects__informations">
							<?php if ($projects["project_".$i]["client_name"]): ?>
								<p class="projects__client-name"><?php echo $projects["project_".$i]["client_name"]; ?></p>
							<?php endif;
							if ($projects["project_".$i]["presentation"]): ?>
								<p class="projects__presentation"><?php echo $projects["project_".$i]["presentation"]; ?></p>
							<?php endif;
							if ($projects["project_".$i]["specifications"]): ?>
								<p class="projects__specifications"><?php echo $projects["project_".$i]["specifications"]; ?></p>
							<?php endif;
							if ($projects["project_".$i]["tags"]): ?>
								<ol>
									<?php $tags_quantity = count($projects["project_".$i]["tags"]);
									for ($j = 0; $j < $tags_quantity; $j++): ?>
										<li><?php echo $projects["project_".$i]["tags"]["tag_".$j]; ?></li>
									<?php endfor; ?>
								</ol>
							<?php endif;
							if ($projects["project_".$i]["link"]): ?>
								<a href="<?php echo $projects["project_".$i]["link"]; ?>" class="projects__link" target="_blank">Visiter</a>
							<?php endif; ?>
						</div>
					</div>
				<?php endif;
			endfor;
		endif; ?>
	</div>
<?php endif; ?>