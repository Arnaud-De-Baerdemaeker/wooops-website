<?php
	$headers = get_field("projects");
	$tags = get_the_tags();
?>

<?php if ($headers["title"]): ?>
	<div id="projects" class="projects">
		<h2 class="projects__title">
			<span class="title__text"><?php echo $headers["title"]; ?></span>
			<?php if ($headers["image"]): ?>
				<span class="title__image-container"><img src="<?php echo $headers["image"]["url"]; ?>" alt="<?php echo $headers["image"]["alt"]; ?>" class="title__image" /></span>
			<?php endif; ?>
		</h2>

		<!-- FILTER PROJECTS -->
		<?php if ($tags): ?>
			<div class="projects__all-tags-container">
				<ul class="projects__all-tags-list">
					<li>
						<button id="all" class="projects__all-tags active">Tous les projets</button>
					</li>
					<?php foreach ($tags as $tag): ?>
						<li>
							<button id="<?php echo $tag->slug; ?>" class="projects__all-tags"><?php echo $tag->name; ?></button>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>
		<!-- /FILTER PROJECTS -->

		<?php $get_projects = new WP_Query([
			"post_type" => "projects",
			"posts_per_page" => 6,
			"orderby" => "menu_order",
			"order" => "desc",
		]);
		
		// LIST OF PROJECTS
		if ($get_projects->have_posts()): ?>
			<div id ="projects__cards-container" class="projects__cards-container">
				<?php while ($get_projects->have_posts()): $get_projects->the_post();
					get_template_part("sections/content-projets");
				endwhile;
				wp_reset_postdata(); ?>
			</div>
			<button class="projects__load-more">Afficher plus de projets</button>
		<?php endif; ?>
		<!-- /LIST OF PROJECTS -->
	</div>
<?php endif; ?>