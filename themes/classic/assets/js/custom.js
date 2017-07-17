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

// upload image
function uploadImg(event) {
	event = event ? event : window.event;
	var obj = event.srcElement ? event.srcElement : event.target;
	var $obj = $(obj);
	var id_img = $obj.attr("id").split("-")[1];
	var id_product = $obj.attr("id").split("-")[2];
	var id_attribute = $obj.attr("id").split("-")[3];
	var $fileUploadInput = $(document.getElementById("file_UploadImgInProductComment-" + id_img + "-" + id_product + "-" + id_attribute));
	$fileUploadInput.trigger('click');
}

// show preview image
function showImgPreview(event) {
	event = event ? event : window.event;
	var obj = event.srcElement ? event.srcElement : event.target;
	var $obj = $(obj);
	var id_img = $obj.attr("id").split("-")[1];
	var id_product = $obj.attr("id").split("-")[2];
	var id_attribute = $obj.attr("id").split("-")[3];
	var file = obj.files[0];
	if (!/\.(gif|jpg|jpeg|png|GIF|JPG|PNG)$/.test(file.name)) {  
        return false;  
    } else {
        if(file.size > 2*1024*1024) {       
        	alert("image cannot be larger than 2MB"); 
            return false;
		}
    }

	if (window.FileReader) {
		var reader = new FileReader();
		reader.readAsDataURL(file);
		reader.onload = function(e) {
			document.getElementById("img_UploadImgInProductComment-" + id_img + "-" + id_product + "-" + id_attribute).src = e.target.result;
			document.getElementById("img_UploadImgInProductComment_mobile-" + id_img + "-" + id_product + "-" + id_attribute).src = e.target.result;
		}
	}
}

// upload image
function uploadImg_mobile(event) {
	event = event ? event : window.event;
	var obj = event.srcElement ? event.srcElement : event.target;
	var $obj = $(obj);
	var id_img = $obj.attr("id").split("-")[1];
	var id_product = $obj.attr("id").split("-")[2];
	var id_attribute = $obj.attr("id").split("-")[3];
	var $fileUploadInput_mobile = $(document.getElementById("file_UploadImgInProductComment_mobile-" + id_img + "-" + id_product + "-" + id_attribute));
	$fileUploadInput_mobile.trigger('click');
}

function showFullImage(imgSrc) {
	var $div_fullImage = $(document.getElementById("div-product-comments"));
	var $img_fullImage = $(document.getElementById("img_product_comment"));
	$img_fullImage.attr("src", imgSrc);
	$div_fullImage.css('display', 'block');
}

function dismissFullImage() {
	var $div_fullImage = $(document.getElementById("div-product-comments"));
	$div_fullImage.css('display', 'none');
}
