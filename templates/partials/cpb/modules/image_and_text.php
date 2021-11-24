<?php $button = $module->button; ?>
<div class="container-fluid tif-module-image-and-text" <?= $module->show_in_menu ? 'id="cpb_' . removeSpecialChars($module->menu_title) . '"' : '' ?>>
    <div class="container">
        <div class="row">
            <div class="inner tif-pt-80 col-24 col-md-24 offset-md-0 col-lg-22 offset-lg-1 col-xl-20 offset-xl-2" id="image_and_text_module_<?= uniqid() ?>">
                <div class="row">
                    <div class="col-24 col-md-12 <?= $module->image_position == "right" ? 'order-2 order-md-1' : 'order-2' ?>">
                        <div class="<?= $module->image_position == "left" ? 'tif-ml-60' : '' ?>">
                            <?php if($module->content_type == 'text'): ?>
                                <?php if ($module->text) : ?>
                                    <p class="tif-fs-21 tif-calibre-regular tif-color-cpb-alpha"><?= $module->text ?></h1>
                                <?php endif; ?>
                            <?php else: ?>
                                <?php foreach($module->agenda as $agenda): ?>
                                    <div class="tif-mb-20">
                                        <span class="tif-fs-21 tif-calibre-bold tif-color-cpb-bravo tif-mr-15"><?= $agenda['date'] ?></span>
                                        <span class="tif-fs-21 tif-calibre-bold tif-color-cpb-alpha"><?= $agenda['text'] ?></span>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>

                            <?php if ($button) : ?>
                                <div class="tif-mt-20">
                                    <a href="<?= $button['url'] ?>" class="" target="<?= $button['target'] ? $button['target'] : '_self' ?>">
                                        <p class="tif-cpb-button"><?= $button['title'] ?></p>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-24 col-md-12 <?= $module->image_position == "right" ? 'order-1 order-md-2' : 'order-1' ?>">
                        <img src="<?= $module->image ?>" class="img-border img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>