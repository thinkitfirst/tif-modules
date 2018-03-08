<?php

if (!defined('ABSPATH')) exit;

?>

<div class="full-width header-1">
	<?php if (!empty($topline)): ?>
	<div class="topline">
		<?php do_action('before_topline_menu', $topline);
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
		do_action('after_topline_menu', $topline); ?>
	</div>
	<?php endif; ?>

	<?php if (!empty($main_location) && has_nav_menu($main_location)): ?>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		
		<?php if (!empty($logo)): ?>
		<a class="navbar-brand" href="<?php echo site_url(); ?>">
			<img<?php echo !empty($logo['classes']) ? ' class="' . implode(' ', $logo['classes']) . '"' : ''; ?> src="<?php echo $logo['image']; ?>" width="<?php echo trim(str_replace('px', '', $logo['width'])); ?>" height="<?php echo trim(str_replace('px', '', $logo['height'])); ?>" alt="<?php bloginfo('name'); ?>" />
		</a>
		<?php endif; ?>


		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<?php wp_nav_menu(array(
			'theme_location' => $main_location,
			'menu_class' => 'navbar-nav',
			'menu_id' => $main_location,
			'depth' => 2,
			'container_class' => 'collapse navbar-collapse',
			'container_id' => 'mainMenu',
			'walker' => new wp_bootstrap_navwalker()
		)); ?>


		<?php /* MARKUP NEEDED for BS4 Menu
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Dropdown
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Disabled</a>
				</li>
			</ul>

		*/ ?>



			<?php 
			/*
			// Example of adding search bar...
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
			*/ 
			?>
		<?php /*
		</div> */ ?>

	</nav>

	<?php endif; ?>

</div>
