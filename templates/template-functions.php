<?php

include_once("template-includes.php");

function tif_template_path($template_name) {
  // Shortcut to access TIF Template paths
  return "inc/templates/$template_name/$template_name.php";
}

// PRIMITIVES

// Normal anchor primitive with href/classes/target
// Added data_toggle/data_target for Bootstrap Modal
function anchor_primitive($href, $classes, $target, $data_toggle, $data_target) {
	$html = "<a href='{$href}' class='{$classes}' target='{$target}' data-toggle='{$data_toggle}' data-target='{$data_target}'></a>";
}

add_filter('filter_classes', 'tif_filter_classes', 10, 1);

function tif_filter_classes($classes)
{
	if (!empty($classes))
	{
		if (is_array($classes))
		{
			$the_classes = array_filter(array_map('trim', $classes));

			if (!empty($the_classes))
			{
				$the_classes = array_unique($the_classes);

				$classes = implode(' ', $the_classes);
			}
		}
		else
			$classes = trim($classes);
	}
	return $classes;
}