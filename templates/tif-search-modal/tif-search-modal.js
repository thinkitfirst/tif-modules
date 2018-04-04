var $ = jQuery.noConflict(true);

$(document).ready(function() {

	// Don't want to interfere with anything on the site, if this module is not being used!
	if ($('#tif-search-modal').length)
	{
		$('.search-field').on('input', function(e) {
			$(this).closest('form').prev('.underline').text($(this).val());
		});

		$('#tif-search-modal').on('shown.bs.modal', function() {
			$('#searchform').find('.search-field').focus();
		});
	}

});
