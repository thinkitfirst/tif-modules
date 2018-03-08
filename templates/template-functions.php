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