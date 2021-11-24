<?php $button = $module->button; ?>
<div class="container-fluid tif-module-infographic" <?= $module->show_in_menu ? 'id="cpb_' . removeSpecialChars($module->menu_title) . '"' : '' ?>>
    <div class="container">
        <div class="row">
            <div class="inner tif-pt-80 col-24" id="infographic_module_<?= uniqid() ?>">
                <div class="row">
                    <?php if ($module->values) : ?>
                        <?php foreach ($module->values as $key => $value) : ?>
                            <div class="col-12 col-md-6 <?= $key > 1 ? 'tif-mt-35 tif-mt-md-0' : '' ?>">
                                <div class="row">
                                    <div class="col-24 col-md-12 col-auto-lg text-center">
                                        <p class="tif-fs-75 tif-calibre-bold tif-color-cpb-bravo tif-mr-15"><?= $value['value'] ?></p>
                                    </div>
                                    <div class="col-24 col-md-12 col-lg text-center">
                                        <p class="tif-fs-21 tif-calibre-bold tif-color-cpb-alpha"><?= $value['label'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>