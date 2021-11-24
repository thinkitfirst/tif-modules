<div class="<?= $module->background_color; ?>">
    <div class="container-fluid tif-module-start" <?= $module->show_in_menu ? 'id="cpb_' . removeSpecialChars($module->menu_title) . '"' : '' ?>>
        <div class="container">
            <div class="row">
                <div class="inner tif-pt-80 col-24 col-md-24 offset-md-0 col-lg-22 offset-lg-1 col-xl-20 offset-xl-2" id="start_module_<?= uniqid() ?>">
                    <div class="row">
                        <div class="col-24 <?= $module->alignment == 'center' ? 'text-center' : 'text-left' ?>">
                            <?php if ($module->small_title): ?>
                                <p class="tif-mb-40 tif-mb-md-30 tif-fs-16 tif-calibre-bold tif-color-cpb-charlie"><?= $module->small_title ?></p>
                            <?php endif; ?>
                            <?php if ($module->title): ?>
                                <h1 class="tif-brix tif-color-cpb-alpha"><?= $module->title ?></h1>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>