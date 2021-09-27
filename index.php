		<?php get_header();
		include("sections/hero.php"); ?>
		<main>
			<?php
				include("sections/agency.php");
				include("sections/services.php");
				include("sections/projects.php");
				include("sections/contact.php");
				get_footer();
				wp_footer();
			?>
		</main>
	</body>
</html>