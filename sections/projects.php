<?php
$header = get_field("projects");
$tags = get_the_tags();
?>

<?php
if ($header["title"]):
?>
	<div id="projects" class="projects">
		<h2 class="projects__title">
			<div class="title__text-container">
				<span class="title__text"><?php echo $header["title"]; ?></span>
			</div>
			<?php
			if ($header["image"]):
			?>
				<div class="title__image-container"><img src="<?php echo $header["image"]["url"]; ?>" alt="<?php echo $header["image"]["alt"]; ?>" class="title__image" /></div>
			<?php
			endif;
			?>
		</h2>

		<!-- FILTER PROJECTS -->
		<?php
		if ($tags):
		?>
			<div class="projects__all-tags-container">
				<button class="projects__select-tag">Choisir un mot-clef</button>
				<ul class="projects__all-tags-list">
					<li>
						<button id="all" class="projects__all-tags active">Tous les projets</button>
					</li>
					<?php
					foreach ($tags as $tag):
					?>
						<li>
							<button id="<?php echo $tag->slug; ?>" class="projects__all-tags"><?php echo $tag->name; ?></button>
						</li>
					<?php
					endforeach;
					?>
				</ul>
			</div>
		<?php
		endif;
		?>

		<!-- LIST OF PROJECTS -->
		<?php
		$get_projects = new WP_Query([
			"post_type" => "projects",
			"posts_per_page" => 6, // Show only the 6 posts corresponding the parameters
			"orderby" => "menu_order",
			"order" => "desc",
			"paged" => 1
		]);
		?>

		<div class="projects__cards-container">
			<?php
			if ($get_projects->have_posts()) {
				while ($get_projects->have_posts()): $get_projects->the_post();
					get_template_part("sections/content-projets");
				endwhile;
			}
			?>
		</div>

		<?php
		if ($get_projects->max_num_pages > 1) {
		?>
			<span id="more" value="Afficher plus de projets" hidden></span>
		<?php
		}
		else if ($get_projects->max_num_pages == 0) {
		?>
			<span id="end" value="Plus d'autres projets à afficher" hidden></span>
		<?php
		}
		else {
		?>
			<span id="empty" value="Aucun projet correspondant à ce mot-clef..." hidden></span>
		<?php
		}
		wp_reset_postdata();
		?>
	</div>
<?php
endif;
?>