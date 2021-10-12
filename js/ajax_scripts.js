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
					if ($(".projects__cards-container").length > 0) { // Check if the container exists
						if ($(".projects__cards-container").html().length > 0) { // Check if the container has content
							$(".projects__cards-container").empty().append(result); // If yes, then replace its content with the new one
						}
						else { // If no, put the content in it
							$(".projects__cards-container").append(result);
						}
					}
					else {
						return;
					}

					if ($(".projects__message").length > 0) { // Check if the message button already exists
						$(".projects__message").empty(); // If yes, empty the element
						$(".projects__message").text($(".projects__new-message").text()); // Add the text from the new element in the first one
						$(".projects__new-message").remove(); // Remove the new element
					}
				},
				error: function(error) {
					console.error("Something went wrong", error);
				},
			});
		});

		// Load more posts after click
		let page = 3;
		$("button:contains('Afficher plus de projets')").on("click touchstart", function(event) {
			event.preventDefault();

			$.ajax({
				type: "POST",
				url: wp_ajax.ajax_url,
				data: {
					post_type: "projects",
					action: "load_more_projects",
					tag: $(this).attr("id"), // Get the tag slug from element clicked
					page: page
				},
				success: function(result) {
					console.log(page);
					$(".projects__cards-container").append(result);
					page++;

					if ($(".projects__message").length > 0) { // Check if the message button already exists
						$(".projects__message").empty(); // If yes, empty the element
						$(".projects__message").text($(".projects__new-message").text()); // Add the text from the new element in the first one
						$(".projects__new-message").remove(); // Remove the new element
					}
				},
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