/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */

// order detail page, apply comment of one product to all products
function apply_comment_to_all(event) {
	event = event ? event : window.event;
	var obj = event.srcElement ? event.srcElement : event.target;
	var $obj = $(obj);
	var id_product = $obj.attr("id").split("-")[1];
	var id_attribute = $obj.attr("id").split("-")[2];
	var $textarea_target = $(document.getElementById("textarea_comment_product-" + id_product + "-" + id_attribute));
	var comment_target = $textarea_target.val().trim();
	var $textarea_all = $(document.getElementsByName("textarea_comment_product[]"));
	$textarea_all.each(function(index) {
		$($textarea_all[index]).val(comment_target);
	});
}

// order detail page, apply comment of one product to all products, mobile version
function apply_comment_to_all_mobile(event) {
	event = event ? event : window.event;
	var obj = event.srcElement ? event.srcElement : event.target;
	var $obj = $(obj);
	var id_product = $obj.attr("id").split("-")[1];
	var id_attribute = $obj.attr("id").split("-")[2];
	var $textarea_target = $(document.getElementById("textarea_comment_product_mobile-" + id_product + "-" + id_attribute));
	var comment_target = $textarea_target.val().trim();
	var $textarea_all = $(document.getElementsByName("textarea_comment_product[]"));
	$textarea_all.each(function(index) {
		$($textarea_all[index]).val(comment_target);
	});
}

// display / hide wire payment info in order detail page
function toggleWirePaymentDetail(toggleFlag) {
	var $toggleOn = $(document.getElementById("toggle-display-payment-details"));
	var $toggleOff = $(document.getElementById("toggle-hide-payment-details"));
	var $divPaymentInfo = $(document.getElementById("div-payment-detail"));

	$toggleOn.css('display', toggleFlag == 0 ? 'block' : 'none');
	$toggleOff.css('display', toggleFlag == 0 ? 'none' : 'block');
	$divPaymentInfo.css('display', toggleFlag == 0 ? 'none' : 'block');
}