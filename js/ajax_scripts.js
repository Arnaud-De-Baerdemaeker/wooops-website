// AJAX
(function($) {
	$(document).ready(function() {
		if ($("#more").length > 0) {
			$(".projects__cards-container").after("<button class='projects__load-more'>" + $("#more").attr("value") + "</button>")
			$("#more").remove();
		}
		else if ($("#end").length > 0) {
			$(".projects__cards-container").after("<div class='projects__end'>" + $("#end").attr("value") + "</div");
			$("#end").remove();
		}
		else if ($("#empty").length > 0) {
			$(".projects__cards-container").after("<div class='projects__empty'>" + $("#empty").attr("value") + "</div>");
			$("#empty").remove();
		}

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

					if ($("#more").length > 0) {
						$(".projects__cards-container").after("<button class='projects__load-more'>" + $("#more").attr("value") + "</button>")
						$("#more").remove();

						if ($(".projects__load-more").length > 1) { 
							$(".projects__load-more:not(:first)").remove();
						}

						if ($(".projects__end").length > 0) {
							$(".projects__end").remove();
						}
						else if ($(".projects__empty").length > 0) {
							$(".projects__empty").remove();
						}
					}
					else if ($("#end").length > 0) {
						$(".projects__cards-container").after("<div class='projects__end'>" + $("#end").attr("value") + "</div");
						$("#end").remove();
						$(".projects__end:not(:last)").remove();

						if ($(".projects__load-more").length > 0) {
							$(".projects__load-more").remove();
						}
						else if ($(".projects__empty").length > 0) {
							$(".projects__empty").remove();
						}
					}
					else if ($("#empty").length > 0) {
						$(".projects__cards-container").after("<div class='projects__empty'>" + $("#empty").attr("value") + "</div>");
						$("#empty").remove();
						$(".projects__empty:not(:last)").remove();

						if ($(".projects__load-more").length > 0) {
							$(".projects__load-more").remove();
						}
						else if ($(".projects__end").length > 0) {
							$(".projects__end").remove();
						}
					}
				},
				error: function(error) {
					console.error("Something went wrong", error);
				},
			});
		});

		// Load more posts after click
		let page = 3;
		$(".projects__load-more").on("click touchstart", function(event) {
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
					$(".projects__cards-container").append(result);
					page++;

					if ($("#more").length > 0) {
						$(".projects__cards-container").after("<button class='projects__load-more'>" + $("#more").attr("value") + "</button>")
						$("#more").remove();
						$(".projects__load-more:not(:last)").remove();

						if ($(".projects__end").length > 0) {
							$(".projects__end").remove();
						}
						else if ($(".projects__empty").length > 0) {
							$(".projects__empty").remove();
						}
					}
					else if ($("#end").length > 0) {
						$(".projects__cards-container").after("<div class='projects__end'>" + $("#end").attr("value") + "</div");
						$("#end").remove();

						if ($(".projects__load-more").length > 0) {
							$(".projects__load-more").remove();
						}
						else if ($(".projects__empty").length > 0) {
							$(".projects__empty").remove();
						}
					}
					else if ($("#empty").length > 0) {
						$(".projects__cards-container").after("<div class='projects__empty'>" + $("#empty").attr("value") + "</div>");
						$("#empty").remove();

						if ($(".projects__load-more").length > 0) {
							$(".projects__load-more").remove();
						}
						else if ($(".projects__end").length > 0) {
							$(".projects__end").remove();
						}
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