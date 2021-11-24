// AJAX
(function($) {
	$(document).ready(function() {
		let page = 3;

		if ($("#more").length > 0) {
			$(".projects__cards-container").after("<button class='projects__more'>" + $("#more").attr("value") + "</button>")
			$("#more").remove();
		}
		else if ($("#end").length > 0) {
			//$(".projects__cards-container").after("<div class='projects__end'>" + $("#end").attr("value") + "</div");
			$("#end").remove();
		}
		else if ($("#empty").length > 0) {
			$(".projects__cards-container").after("<div class='projects__empty'>" + $("#empty").attr("value") + "</div>");
			$("#empty").remove();
		}

		// FILTER POSTS PER SELECTED TAG
		$(".projects__all-tags").on("click", function(event) {
			event.preventDefault();

			$(".projects__all-tags").removeClass("active");
			$(this).addClass("active");

			$.ajax({
				type: "POST",
				url: wp_ajax.ajax_url,
				data: {
					post_type: "projects",
					action: "filter_projects",
					tag: $(this).attr("id")
				},
				success: function(result) {
					page = 3;

					if ($(".projects__cards-container").length > 0) {
						if ($(".projects__cards-container").html().length > 0) {
							$(".projects__cards-container").empty().append(result);
						}
						else {
							$(".projects__cards-container").append(result);
						}
					}
					else {
						return;
					}

					if ($("#more").length > 0) {
						$(".projects__cards-container").after("<button class='projects__more'>" + $("#more").attr("value") + "</button>");
						$("#more").hide();

						if ($(".projects__more").length > 1) {
							$(".projects__more:not(:last)").remove();
							$(".projects__more").show();
						}

						if ($(".projects__end").length > 0) {
							$(".projects__end").hide();
						}
						
						if ($(".projects__empty").length > 0) {
							$(".projects__empty").hide();
						}
					}
					else if ($("#end").length > 0) {
						//$(".projects__cards-container").after("<div class='projects__end'>" + $("#end").attr("value") + "</div");
						$("#end").remove();

						if ($(".projects__end").length > 1) {
							$(".projects__end:not(:last)").remove();
							$(".projects__end").show();
						}

						if ($(".projects__more").length > 0) {
							$(".projects__more").hide();
						}
						
						if ($(".projects__empty").length > 0) {
							$(".projects__empty").hide();
						}
					}
					else if ($("#empty").length > 0) {
						$(".projects__cards-container").after("<div class='projects__empty'>" + $("#empty").attr("value") + "</div>");
						$("#empty").hide();

						if ($(".projects__empty").length > 1) {
							$(".projects__empty:not(:last)").remove();
							$(".projects__empty").show();
						}

						if ($(".projects__more").length > 0) {
							$(".projects__more").hide();
						}
						
						if ($(".projects__end").length > 0) {
							$(".projects__end").hide();
						}
					}
				},
				error: function(error) {
					console.error("Something went wrong", error);
				},
			});
		});

		// LOAD MORE POSTS AFTER CLICK
		$(".projects__more").on("click", function(event) {
			event.preventDefault();

			$.ajax({
				type: "POST",
				url: wp_ajax.ajax_url,
				data: {
					post_type: "projects",
					action: "load_more_projects",
					page: page
				},
				success: function(result) {
					$(".projects__cards-container").append(result);
					page++;

					if ($("#end").length > 0) {
						//$(".projects__cards-container").after("<div class='projects__end'>" + $("#end").attr("value") + "</div");
						$(".projects__more").hide();
						$("#end").remove();

						if ($(".projects__end").length > 1) {
							$(".projects__end:not(:last)").remove();
							$(".projects__end").show();
						}
					}
					else if ($("#more").length > 0) {
						$(".projects__cards-container").after("<button class='projects__more'>" + $("#more").attr("value") + "</button>")
						$("#more").remove();

						if ($(".projects__more").length > 1) {
							$(".projects__more:not(:last)").remove();
							$(".projects__more").show();
						}
					}
				},
				error: function(error) {
					console.error("Something went wrong", error);
				},
			});
		});
	});
})(jQuery);