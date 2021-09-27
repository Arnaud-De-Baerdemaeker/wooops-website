<?php
	$projects_header = get_field("projects_header");
	$projects = get_field("projects");
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
			<div>
				<?php $length = count($projects);
				for ($i = 0; $i < $length; $i++):
					if ($projects["project_".$i]): ?>
						<div style="color: white">
							<div>
								<?php if ($projects["project_".$i]["desktop_image"]): ?>
									<img src="<?php echo esc_url($projects["project_".$i]["desktop_image"]); ?>" alt="<?php echo esc_attr($projects["project_".$i]["desktop_image"]); ?>">
								<?php endif; ?>
								<?php if ($projects["project_".$i]["mobile_image"]): ?>
									<img src="<?php echo esc_url($projects["project_".$i]["mobile_image"]); ?>" alt="<?php echo esc_attr($projects["project_".$i]["mobile_image"]); ?>">
								<?php endif; ?>
							</div>
							<div>
								<?php if ($projects["project_".$i]["client_name"]): ?>
									<p><?php echo $projects["project_".$i]["client_name"]; ?></p>
								<?php endif;
								if ($projects["project_".$i]["presentation"]): ?>
									<p><?php echo $projects["project_".$i]["presentation"]; ?></p>
								<?php endif;
								if ($projects["project_".$i]["specifications"]): ?>
									<p><?php echo $projects["project_".$i]["specifications"]; ?></p>
								<?php endif;
								if ($projects["project_".$i]["link"]): ?>
									<p>
										<a href="<?php echo esc_url($projects["project_".$i]["link"]); ?>" target="_blank"><?php echo $projects["project_".$i]["link"]; ?></a>
									</p>
								<?php endif; ?>
							</div>
						</div>
					<?php endif;
				endfor; ?>
			</div>
		<?php endif; ?>
	</div>
<?php endif; ?>