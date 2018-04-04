<?php
  // Location: ./tif-search-modal/functions.php


add_filter('get_search_form', 'tif_search_modal_get_search_form', 10, 1);

// Going to use our supplied searchform.php file instead of wordpress supplied one!
function tif_search_modal_get_search_form($form)
{
	ob_start();
	tif_get_template('tif-modules/templates/tif-search-modal/searchform.php', array());
	$form = ob_get_clean();

	return $form;
}

function tif_search_modal_scripts()
{
	wp_enqueue_script('tif-search-modal-script', get_stylesheet_directory_uri() . '/tif-modules/templates/tif-search-modal/tif-search-modal.js', array('jquery'), '1.0');
}

add_action('wp_enqueue_scripts', 'tif_search_modal_scripts');
