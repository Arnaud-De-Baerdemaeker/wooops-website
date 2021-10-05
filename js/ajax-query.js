// AJAX
(function($) {
	$(document).ready(function() {
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
					$(".projects__cards-container").html(result);
				},
				error: function(error) {
					console.error("Something went wrong", error);
				},
			});
		});
	});
})(jQuery);