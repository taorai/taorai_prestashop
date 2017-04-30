/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */

// order detail page, apply comment of one product to all products
function apply_comment_to_all(event) {
	event = event ? event : window.event;
	var obj = event.srcElement ? event.srcElement : event.target;
	var $obj = $(obj);
	var id_product = $obj.attr("name").split("-")[1];
	var $textarea_target = $(document.getElementById("textarea_comment_product-" + id_product));
	var comment_target = $textarea_target.val().trim();
	var $textarea_all = $(document.getElementsByName("textarea_comment_product"));
	$textarea_all.each(function(index) {
		$($textarea_all[index]).val(comment_target);
	});
}