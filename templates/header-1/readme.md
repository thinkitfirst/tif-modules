# Description
Header with top menu and main menu.

# Data Structures

# Usuage Example

```php

$args = array(
	// Exclude 'topline' if this menu is not needed/used
	'topline' => array(
		'location' => 'topline-menu', // If location is defined, will use the menu location, otherwise will use links
		'links' => array(), // Adds ability to enter menu links manually
		'depth' => 1, // How many levels should this menu sink down to (default: 1)
		'container_class' => 'd-none', // Any additional classes needed for the menu container
		// The before/after keys below are optional ofcourse and both share the same options.
		/*
		Provides the ability to either hook in a filter for outputing any content needed either before or after the topline menu, 
		either with defined 'filters' found in the themes functions.php file (filter name => default value), or with 'content' (basic html or whatever)
		If you don't require these elements, than you don't even have to include these keys in the topline array.
		*/
		'before' => array(
			'class' => 't-thin', // Class for the object
			'filters' => array('custom_topline_content' => ''), // Uses as many filters you need to output the content in the element, with the default value set to an empty string.
		),
		'after' => array(
			'class' => 'row',
			'content' => '<p class="col-24 col-sm-12">Some content in here.</p><p class="col-24 col-sm-12">Some more content in here.</p>'
		)
	), 
	'main_menu' => array(
		'logo' => array(
			'image' => get_stylesheet_directory_uri() . '/images/ceo-logo.svg', 
			'classes' => array('default-top'), 
			'width' => 155, 
			'height' => 101
		),
		'location' => 'primary-menu', // Menu Location Name, if this is empty, or does not exist, links will be used instead.
		'links' => array(), // Adds ability to enter menu links manually
		'depth' => 1,
		'container_class' => '',
		'before' => array(
			'class' => '',
			'content' => '<div>Content in here that will go before the main menu, if needed.</div>'
		),
		'after' => array(
			'class' => 'my-class',
			'filters' array('custom_before_main_menu', '')
		)
	)
);

tif_get_template('tif-modules/templates/header-1/header-1.php', $args); 

```

