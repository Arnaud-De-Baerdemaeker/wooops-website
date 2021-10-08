<?php
$headers = get_field("projects");
$tags = get_the_tags();
?>

<?php
if ($headers["title"]):
?>
	<div id="projects" class="projects">
		<h2 class="projects__title">
			<span class="title__text"><?php echo $headers["title"]; ?></span>
			<?php
			if ($headers["image"]):
			?>
				<span class="title__image-container"><img src="<?php echo $headers["image"]["url"]; ?>" alt="<?php echo $headers["image"]["alt"]; ?>" class="title__image" /></span>
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
		<!-- /FILTER PROJECTS -->

		<?php
		$get_projects = new WP_Query([
			"post_type" => "projects",
			"posts_per_page" => 6, // Show only the 6 posts corresponding the parameters
			"orderby" => "menu_order",
			"order" => "desc",
		]);

		// LIST OF PROJECTS
		if ($get_projects->have_posts()) {
		?>
			<div id="original-cards-container" class="projects__cards-container">
				<?php
				while ($get_projects->have_posts()): $get_projects->the_post();
					get_template_part("sections/content-projets");
				endwhile;
				?>
			</div>
			<?php
			if ($get_projects->max_num_pages > 1) {
			?>
				<button id="original-load-more" class="projects__load-more">Afficher plus de projets</button>
			<?php
			}
			else {
			?>
				<div id="original-no-more" class="projects__no-more">Plus d'autres projets à afficher</div>
			<?php
			}
			wp_reset_postdata();
		}
		else {
		?>
			<div id="original-no-entry" class="projects__no-entry">Aucun projet correspondant à ce mot-clef...</div>
		<?php
		}
		?>
		<!-- /LIST OF PROJECTS -->
	</div>
<?php
endif;
?>