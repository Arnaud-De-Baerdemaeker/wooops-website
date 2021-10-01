// AJAX QUERIES
// (function($) {
// 	$(document).ready(function() {
// 		$(document).on("click", ".projects__all-tags", function(e) {
// 			e.preventDefault();
//             var category = $(this).data("category");

//             $.ajax({
//                 url: wp_ajax.ajax_url,
//                 data: {
//                     action: "filter",
//                     category: category
//                 },
//                 type: "post",
//                 success: function(result) {
//                     console.warn(result);
//                 }
//             });
// 		});
// 	});
// })(jQuery);