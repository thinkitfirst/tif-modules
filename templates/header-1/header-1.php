<?php

if (!defined('ABSPATH')) exit;

echo var_dump($brand_logo); 

?>

<div class="full-width header-1">

	<?php 
	if (!empty($topline_location)):
		wp_nav_menu(array(
			'theme_location' => $topline_location,
			'container' => 'div'
		));
	endif;

	if (!empty($main_location)):
		wp_nav_menu(array(
			'theme_location' => $main_location,
			'container' => 'div'
		));
	endif; ?>

</div>
