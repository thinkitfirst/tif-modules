<?php $button = $module->footer_button; ?>
<div class="container-fluid tif-module-callout" <?= $module->show_in_menu ? 'id="cpb_' . removeSpecialChars($module->menu_title) . '"' : '' ?>>
    <div class="container">
        <div class="row">
            <div class="inner tif-pt-80 col-24 <?= $module->size == 'wide' ? 'col-md-24 offset-md-0 col-lg-22 offset-lg-1 col-xl-20 offset-xl-2' : 'col-md-20 offset-md-2' ?>" id="callout_module_<?= uniqid() ?>">
                <div class="row tif-px-10 tif-px-md-0">
                    <div class="card tif-shadow-vivid">
                        <div class="tif-px-20 tif-px-md-75 tif-pt-50">
                            <div class="row">
                                <div class="col-24">
                                    <?php if ($module->text) : ?>
                                        <p class="tif-fs-21 tif-calibre-regular tif-color-cpb-alpha"><?= $module->text ?></h1>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <?php if ($module->display_footer == 'yes') : ?>
                            <div class="card-footer tif-bg-color-cpb-alpha tif-px-0">
                                <div class="tif-px-20 tif-px-md-75">
                                    <div class="row">
                                        <div class="col-24 col-md-16 text-center text-md-left d-flex align-items-center">
                                            <?php if ($module->footer_label) : ?>
                                                <p class="tif-mt-25 tif-mt-md-0 tif-fs-21 tif-calibre-bold tif-color-white tif-mb-md-0"><?= removeP($module->footer_label); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-24 col-md-8 text-center text-md-left">
                                            <?php if ($button) : ?>
                                                <a href="<?= $button['url'] ?>" class="" target="<?= $button['target'] ? $button['target'] : '_self' ?>">
                                                    <p class="tif-cpb-button tif-mb-0"><?= $button['title'] ?></p>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>