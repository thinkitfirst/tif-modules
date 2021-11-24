<div class="container-fluid tif-module-text" <?= $module->show_in_menu ? 'id="cpb_'. removeSpecialChars($module->menu_title) .'"' : '' ?> >
  <div class="container">
    <div class="row">
      <div class="inner tif-py-70 col-24 col-md-24 offset-md-0 col-lg-22 offset-lg-1 col-xl-20 offset-xl-2" id="text_module_<?= uniqid() ?>">
        <div class="row">
          <div class="col-24 <?= $module->alignment == 'center' ? 'text-center' : 'text-left' ?>">
            <?= $module->text ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
