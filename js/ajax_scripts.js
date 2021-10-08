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
					if ($("#clone-cards-container").length > 0) {
						$("#clone-cards-container").replaceWith(result);

						if ($("#original-cards-container").length > 0) {
							$("#original-cards-container").remove();
						}
						else {
							$("#original-cards-container").show();
						}

						if ($("#clone-no-more").length > 0) {
							$("#clone-no-more").remove();
						}

						if ($("#clone-no-entry").length > 0) {
							$("#clone-no-entry").remove();
						}

						if ($("#clone-load-more").length > 0) {
							$("#clone-load-more").remove();
						}
					}
					else {
						$(".projects__all-tags-container").after(result);
						$("#original-cards-container").remove();
						$("#original-load-more").remove();
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

		// Control keywords dropdown menu on click
		const screen_width = $(window).width();

		if (screen_width < 1000) {
			$(".projects__all-tags-list").addClass("hide");

			$(".projects__select-tag").on("click touchstart", function() {
				if ($(".projects__all-tags-list").hasClass("hide")) {
					$(".projects__all-tags-list").removeClass("hide");

					$(".projects__all-tags").on("click touchstart", function() {
						$(".projects__all-tags-list").addClass("hide");
					})
				}
				else {
					$(".projects__all-tags-list").addClass("hide");
				}
			});
		}
		else {
			$(".projects__select-tag").hide();
		}
	});
})(jQuery);