<?php 
    $imageVideo = get_field('cpb_header_image_video');
	$button = get_field('cpb_header_button');
	$smallTitle = get_field('cpb_header_small_title');
	$title = get_field('cpb_header_title');
	$caption = get_field('cpb_header_caption');
?>
<div class="full-width <?= $imageVideo == 'image' ? 'cpb-bg-image' : 'cpb-bg-video' ?>" id="cpb_header" <?= $imageVideo == 'image' ? 'style="background-image:url('.get_field('cpb_header_image').');"' : '' ?>>
	<div class="container-fluid">
		<div class="inner col-24 offset-sm-3 col-sm-18 offset-md-1 col-md-22 offset-lg-3 col-lg-18 tif-pt-130 tif-pb-75 tif-pt-md-160 tif-pb-md-160">
			<div class="row">
				<div class="content col-24 text-center">
					<?php if ($smallTitle): ?>
						<p class="small-title tif-fs-16 tif-color-cpb-charlie tif-calibre-bold"><?= $smallTitle; ?></p>
					<?php endif; ?>

					<?php if ($title): ?>
						<h1 class="title tif-color-white tif-fw-bold tif-brix tif-mt-70 tif-mt-md-40"><?= removeP($title); ?></h1>
					<?php endif; ?>

					<?php if ($caption): ?>
						<p class="caption tif-color-white tif-calibre-medium tif-mt-45 tif-mt-md-15"><?= removeP($caption); ?></p>
					<?php endif; ?>

                    <?php if ($button): ?>
						<div class="tif-mt-85">
							<a href="<?= $button['url'] ?>" class="" target="<?= $button['target'] ? $button['target'] : '_self' ?>">
								<p class="tif-cpb-button"><?= $button['title'] ?></p>
							</a>
						</div>
                    <?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>