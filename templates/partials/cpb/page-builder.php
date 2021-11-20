<?php 
    if (have_rows('page_builder')) {

        $page_builder = get_field('page_builder');

        foreach ($page_builder as $module) {
            tif_get_template('tif-modules/templates/partials/cpb/modules/'.$module['acf_fc_layout'].'.php' , ['module' => (object) $module]);
        }
    }
?>