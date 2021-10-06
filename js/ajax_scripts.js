// AJAX
(function($) {
	$(document).ready(function() {
		// Filter posts per selected tag
		$(".projects__all-tags").on("click touchstart", function(event) {
			event.preventDefault();

			$(".projects__all-tags").removeClass("active");
			$(this).addClass("active");

			$.ajax({
				type: "POST",
				url: wp_ajax.ajax_url,
				data: {
					post_type: "projects",
					action: "filter_projects",
					tag: $(this).attr("id"), // Get the tag slug from element clicked
				},
				success: function(result) {
					$("#projects__cards-container").html(result);
					
					const element_exists = $(".projects__no-entry").length; // Checks if element exists

					if (element_exists >= 1) {
						$("#projects__cards-container").removeClass();
						$("#projects__cards-container").addClass("projects__cards-container--no-results");
						$(".projects__no-more").hide();
					}
					else {
						$("#projects__cards-container").removeClass();
						$("#projects__cards-container").addClass("projects__cards-container");
						$(".projects__no-more").show();
					}
				},
				error: function(error) {
					console.error("Something went wrong", error);
				},
			});
		});

		// Load more posts after click
		$(".projects__load-more").on("click touchstart", function(event) {
			event.preventDefault();

			$.ajax({
				type: "POST",
				url: wp_ajax.ajax_url,
				data: {
					post_types: "projets",
					action: "load_more_projects",
					tag: $(this).attr("id"), // Get the tag slug from element clicked
				},
				success: function(result) {},
				error: function(error) {
					console.error("Something went wrong", error);
				},
			});
		});
	});
})(jQuery);