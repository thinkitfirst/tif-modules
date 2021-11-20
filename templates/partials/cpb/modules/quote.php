<div class="container-fluid tif-module-quote" <?= $module->show_in_menu ? 'id="cpb_'. removeSpecialChars($module->menu_title) .'"' : '' ?> >
  <div class="container">
    <div class="row">
      <div class="inner tif-py-70 col-24 col-md-24 offset-md-0 col-lg-18 offset-lg-3 col-xl-16 offset-xl-4 {{ $module->custom_container_classes ?? '' }}" id="title_content_blocks_module_{{ uniqid() }}">
        <div class="row">
          <div class="col-24 col-md-6 border-left">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quote-icon-new.svg" title="Quote Icon" class="quote-icon tif-mt-md-40 tif-ml-15 tif-ml-md-60 tif-mb-20 tif-mb-md-0">
          </div>
          <div class="col-24 col-md-18 border-left-mobile">
            <p class="tif-fs-21 tif-color-cpb-alpha tif-calibre-regular tif-mb-0 tif-ml-15 tif-ml-md-0"><?= removeP($module->text) ?></p>
            <p class="tif-fs-16 tif-color-cpb-alpha tif-calibre-bold tif-mb-0 tif-ml-15 tif-ml-md-0"><?= removeP($module->name) ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
