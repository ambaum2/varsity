jQuery.noConflict();
	jQuery(document).ready(function() {
		jQuery('#frontpageMasthead').animate({
			background

		});
	});
	
	function switchSrc(index,srcFrom,srcTo) {
		src = jQuery(index).children("img").attr('src');
		src = src.replace(srcFrom,srcTo);
		return src;
	}