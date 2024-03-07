<?php

function ilios_files () {

    wp_enqueue_script("ilios_main_scripts", get_theme_file_uri('/build/main.js'),  NULL, '1.0.0', true);
//    wp_enqueue_style("ilios_main_style", get_theme_file_uri('/build/styles.css'));
}

add_action("wp_enqueue_scripts", "ilios_files");