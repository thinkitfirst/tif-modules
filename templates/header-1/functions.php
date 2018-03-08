<?php
  // Location: ./header-1/functions.php


add_action('before_topline_menu', 'tif_before_topline_menu', 10, 1);

function tif_before_topline_menu($topline)
{
	if (!empty($topline['before']))
	{
		echo '
		<div class="topline-before', (!empty($topline['before']['class']) ? ' ' . $topline['before']['class'] : ''), '">';

		if (!empty($topline['before']['filters']))
		{
			foreach($topline['before']['filters'] as $filter_name => $default_content)
				echo apply_filters($filter_name, $default_content, $topline);
		}
		else if (!empty($topline['before']['content']))
			echo apply_filters('the_content', $topline['before']['content']);

		echo '
		</div>';
	}
}


add_action('after_topline_menu', 'tif_after_topline_menu', 10, 1);

function tif_after_topline_menu($topline)
{
	if (!empty($topline['after']))
	{
		echo '
		<div class="topline-after', (!empty($topline['after']['class']) ? ' ' . $topline['after']['class'] : ''), '">';

		if (!empty($topline['after']['filters']))
		{
			foreach($topline['after']['filters'] as $filter_name => $default_content)
				echo apply_filters($filter_name, $default_content, $topline);
		}
		else if (!empty($topline['after']['content']))
			echo apply_filters('the_content', $topline['after']['content']);

		echo '
		</div>';
	}
}

