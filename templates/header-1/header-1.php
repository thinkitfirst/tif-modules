<?php

if (!defined('ABSPATH')) exit; ?>

<div class="full-width header-1">
	<?php if (!empty($topline)): 

	if (!empty($topline['classes']))
		$topline['classes'] = array_filter(array_map('trim', $topline['classes']));
	?>
	<div class="topline<?php echo (!empty($topline['classes']) && !empty($topline['classes']['main']) ? ' ' . $topline['classes']['main'] : ''); ?>">
		<?php do_action('header1_before_after_menu', $topline, 'before', 'topline-before');

		if (!empty($topline['location']) && has_nav_menu($topline['location'])): ?>
		 	<div class="inner-wrapper<?php echo !empty($topline['classes']) && !empty($topline['classes']['container']) ? ' ' . esc_attr($topline['classes']['container']) : ''; ?>">
		 	<?php if (!empty($topline['logo'])): ?>
			<a class="navbar-brand" href="<?php echo site_url(); ?>">
				<img<?php echo !empty($topline['logo']['classes']) ? ' class="' . implode(' ', $topline['logo']['classes']) . '"' : ''; ?> src="<?php echo $topline['logo']['image']; ?>" width="<?php echo trim(str_replace('px', '', $topline['logo']['width'])); ?>" height="<?php echo trim(str_replace('px', '', $topline['logo']['height'])); ?>" alt="<?php bloginfo('name'); ?>" />
			</a>
			<?php endif;
			wp_nav_menu(array(
				'theme_location' => $topline['location'],
				'container' => false,
				'depth' => !empty($topline['depth']) ? (int) $topline['depth'] : 1,
				'menu_id' => $topline['location'],
				'menu_class' => 'topline-menu' . (!empty($topline['classes']) && !empty($topline['classes']['menu']) ? ' ' . $topline['classes']['menu'] : '')
			)); ?>
			</div>
		<?php elseif (isset($topline['links'])): ?>
			<div class="inner-wrapper<?php echo !empty($topline['classes']) && !empty($topline['classes']['container']) ? ' ' . esc_attr($topline['classes']['container']) : ''; ?>">
				<?php if (!empty($topline['logo'])): ?>
				<a class="navbar-brand" href="<?php echo site_url(); ?>">
					<img<?php echo !empty($topline['logo']['classes']) ? ' class="' . implode(' ', $topline['logo']['classes']) . '"' : ''; ?> src="<?php echo $topline['logo']['image']; ?>" width="<?php echo trim(str_replace('px', '', $topline['logo']['width'])); ?>" height="<?php echo trim(str_replace('px', '', $topline['logo']['height'])); ?>" alt="<?php bloginfo('name'); ?>" />
				</a>
				<?php endif;
				if (!empty($topline['links'])): ?>
				<ul class="topline-menu">
					<?php foreach($topline['links'] as $link): ?>
					<li<?php echo !empty($link['class']) ? ' class="' . esc_attr($link['class']) . '"' : ''; ?>>
						<a href="<?php echo esc_url($link['href']); ?>"<?php echo !empty($link['target']) ? ' target="' . $link['target'] . '"' : ''; ?>><?php echo esc_html($link['title']); ?></a>
					</li>
					<?php endforeach; ?>
				</ul>
				<?php endif; ?>
			</div>
		<?php
		endif;
		do_action('header1_before_after_menu', $topline, 'after', 'topline-after'); ?>
	</div>
	<?php endif; ?>

	<?php if (!empty($main_menu)): 

	if (!empty($main_menu['classes']))
		$main_menu['classes'] = array_filter(array_map('trim', $main_menu['classes']));
	?>

	<nav class="navbar<?php echo (!empty($main_menu['classes']) && !empty($main_menu['classes']['main']) ? ' ' . $main_menu['classes']['main'] : ''); ?>">
		<?php 
		
		do_action('header1_before_after_menu', $main_menu, 'before', 'menu-before');

		// Logo?
		if (!empty($main_menu['logo'])): ?>
		<a class="navbar-brand" href="<?php echo site_url(); ?>">
			<img<?php echo !empty($main_menu['logo']['classes']) ? ' class="' . implode(' ', $main_menu['logo']['classes']) . '"' : ''; ?> src="<?php echo $main_menu['logo']['image']; ?>" width="<?php echo trim(str_replace('px', '', $main_menu['logo']['width'])); ?>" height="<?php echo trim(str_replace('px', '', $main_menu['logo']['height'])); ?>" alt="<?php bloginfo('name'); ?>" />
		</a>
		<?php endif; ?>

		<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<?php 
		if (!empty($main_menu['location']) && has_nav_menu($main_menu['location'])):
			wp_nav_menu(array(
				'theme_location' => $main_menu['location'],
				'menu_class' => 'nav navbar-nav' . (!empty($main_menu['classes']) && !empty($main_menu['classes']['menu']) ? ' ' . $main_menu['classes']['menu'] : ''),
				'menu_id' => $main_menu['location'],
				'depth' => !empty($main_menu['depth']) ? (int) $main_menu['depth'] : 1,
				'container_class' => 'collapse navbar-collapse' . (!empty($main_menu['classes']) && !empty($main_menu['classes']['container']) ? ' ' . $main_menu['classes']['container'] : ''),
				'container_id' => 'mainMenu',
				'walker' => new wp_bootstrap_navwalker()
			));
		elseif (!empty($main_menu['links'])): ?>
			<div id="mainMenu" class="collapse navbar-collapse<?php echo (!empty($main_menu['classes']) && !empty($main_menu['classes']['container']) ? ' ' . $main_menu['classes']['container'] : ''); ?>">
				<ul id="primary-menu" class="nav navbar-nav<?php echo (!empty($main_menu['classes']) && !empty($main_menu['classes']['menu']) ? ' ' . $main_menu['classes']['menu'] : ''); ?>">
					<?php foreach($main_menu['links'] as $link): ?>
					<li<?php echo !empty($link['class']) ? ' class="' . esc_attr($link['class']) . '"' : ''; ?>>
						<a href="<?php echo esc_url($link['href']); ?>"<?php echo !empty($link['target']) ? ' target="' . $link['target'] . '"' : ''; ?>><?php echo esc_html($link['title']); ?></a>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php
		endif;

		do_action('header1_before_after_menu', $main_menu, 'after', 'menu-after'); ?>

	</nav>
	<?php endif; ?>
</div>
