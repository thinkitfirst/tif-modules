<?php

if (!defined('ABSPATH')) exit; ?>

<div class="full-width header-1">
	<?php if (!empty($topline)): ?>
	<div class="topline">
		<?php do_action('header1_before_after_menu', $topline, 'before', 'topline-before');
		 if (!empty($topline['location']) && has_nav_menu($topline['location'])):
			wp_nav_menu(array(
				'theme_location' => $topline['location'],
				'container_class' => 'inner-wrapper' . (!empty($topline['container_class']) ? ' ' . esc_attr($topline['container_class']) : ''),
				'depth' => !empty($topline['depth']) ? (int) $topline['depth'] : 1,
				'menu_id' => $topline['location'],
				'menu_class' => 'topline-menu'
			));
		elseif (!empty($topline['links'])): ?>
			<div class="inner-wrapper<?php echo !empty($topline['container_class']) ? ' ' . esc_attr($topline['container_class']) : ''; ?>">
				<ul class="topline-menu">
					<?php foreach($topline['links'] as $link): ?>
					<li<?php echo !empty($link['class']) ? ' class="' . esc_attr($link['class']) . '"' : ''; ?>>
						<a href="<?php echo esc_url($link['href']); ?>"<?php echo !empty($link['target']) ? ' target="' . $link['target'] . '"' : ''; ?>><?php echo esc_html($link['title']); ?></a>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php
		endif; 
		do_action('header1_before_after_menu', $topline, 'after', 'topline-after'); ?>
	</div>
	<?php endif; ?>

	<?php if (!empty($main_menu)): ?>

	<nav class="navbar navbar-expand-lg">
		
		<?php 
		do_action('header1_before_after_menu', $main_menu, 'before', 'menu-before');

		// Logo?
		if (!empty($main_menu['logo'])): ?>
		<a class="navbar-brand" href="<?php echo site_url(); ?>">
			<img<?php echo !empty($main_menu['logo']['classes']) ? ' class="' . implode(' ', $main_menu['logo']['classes']) . '"' : ''; ?> src="<?php echo $main_menu['logo']['image']; ?>" width="<?php echo trim(str_replace('px', '', $main_menu['logo']['width'])); ?>" height="<?php echo trim(str_replace('px', '', $main_menu['logo']['height'])); ?>" alt="<?php bloginfo('name'); ?>" />
		</a>
		<?php endif; ?>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<?php wp_nav_menu(array(
			'theme_location' => $main_menu['location'],
			'menu_class' => 'navbar-nav',
			'menu_id' => $main_menu['location'],
			'depth' => !empty($main_menu['depth']) ? (int) $main_menu['depth'] : 1,
			'container_class' => 'collapse navbar-collapse' . (!empty($main_menu['container_class']) ? ' ' . $main_menu['container_class'] : ''),
			'container_id' => 'mainMenu',
			'walker' => new wp_bootstrap_navwalker()
		)); 
		do_action('header1_before_after_menu', $main_menu, 'after', 'menu-after'); ?>

	</nav>

	<?php endif; ?>

</div>
