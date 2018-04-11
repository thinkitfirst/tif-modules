

jQuery(document).ready(function($) {

	$('#tif-featherlight-slider').featherlightGallery();
	

	$('.featherlight-link').click(function() {
		$('#tif-featherlight-slider').find('.featherlight-first-slide').trigger('click');    
	});


});