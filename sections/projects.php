<?php
	$projects_header = get_field("projects_header");
	$projects = get_field("projects");
	$length = count($projects);
?>

<?php if ($projects_header["title"]): ?>
	<div id="projects" class="projects">
		<h2 class="projects__title">
			<span class="title__text"><?php echo $projects_header["title"]; ?></span>
			<?php if ($projects_header["image"]): ?>
				<span class="title__image-container"><img src="<?php echo esc_url($projects_header["image"]["url"]); ?>" alt="<?php echo esc_attr($projects_header["image"]["alt"]); ?>" class="title__image" /></span>
			<?php endif; ?>
		</h2>

		<?php if ($projects): ?>
			<?php for ($i = 0; $i < $length; $i++):
				if ($projects["project_".$i]): ?>
					<div class="projects__cards" style="color: white">
						<div class="projects__thumbnails">
							<?php if ($projects["project_".$i]["desktop_image"]): ?>
								<img src="<?php echo esc_url($projects["project_".$i]["desktop_image"]["url"]); ?>" alt="<?php echo esc_attr($projects["project_".$i]["desktop_image"]["alt"]); ?>" class="thumbnail__desktop">
							<?php endif; ?>
							<?php if ($projects["project_".$i]["mobile_image"]): ?>
								<img src="<?php echo esc_url($projects["project_".$i]["mobile_image"]["url"]); ?>" alt="<?php echo esc_attr($projects["project_".$i]["mobile_image"]["alt"]); ?>" class="thumbnail__mobile">
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
							if ($projects["project_".$i]["link"]): ?>
								<p class="projects__website">
									<a href="<?php echo esc_url($projects["project_".$i]["link"]); ?>" class="project__link" target="_blank"><?php echo $projects["project_".$i]["link"]; ?></a>
								</p>
							<?php endif; ?>
						</div>
					</div>
				<?php endif;
			endfor;
		endif; ?>
	</div>
<?php endif; ?>