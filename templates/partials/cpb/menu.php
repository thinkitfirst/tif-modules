<?php $button = get_field('cpb_menu_button'); ?>
<nav class="navbar navbar-expand-sm sticky-top navbar-light bg-light cpb-menu tif-mt-0 tif-pt-0 tif-pb-0">
    <div class="container-fluid">
        <div class=""><img src="<?= get_field('cpb_menu_icon'); ?>" class="img-fluid"></div>
        <div class="dropdown d-md-none">
            <span class="dropdown-toggle tif-fs-16 tif-calibre-bold tif-color-cpb-alpha" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php if (have_rows('page_builder')) : ?>
                    <?php $page_builder = get_field('page_builder'); ?>
                    <?php foreach ($page_builder as $module) : ?>
                        <?php if ($module['show_in_menu'] == 1) : ?>
                            <?= $module['menu_title']; ?>
                        <?php endif; break;?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </span>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="cpb_navbar">
            <ul class="navbar-nav dropdown">
                <?php if (have_rows('page_builder')) : ?>
                    <?php $page_builder = get_field('page_builder'); ?>
                    <?php foreach ($page_builder as $module) : ?>
                        <?php if ($module['show_in_menu'] == 1) : ?>
                            <li class="nav-item">
                                <a href="#cpb_<?= removeSpecialChars($module['menu_title']); ?>" class="tif-pb-40 tif-pt-40 tif-color-black text-decoration-none nav-link"><?= $module['menu_title']; ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
        <?php if ($button) : ?>
            <a href="<?= $button['url'] ?>" class="" target="<?= $button['target'] ? $button['target'] : '_self' ?>">
                <p class="tif-cpb-button tif-mt-25"><?= $button['title'] ?></p>
            </a>
        <?php endif; ?>
    </div>
</nav>