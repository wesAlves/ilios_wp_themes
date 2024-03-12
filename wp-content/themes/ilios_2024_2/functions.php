<?php

function ilios_files()
{

    wp_enqueue_script("ilios_main_scripts", get_theme_file_uri('/build/main.js'), NULL, '1.0.0', true);
//    wp_enqueue_style("ilios_main_style", get_theme_file_uri('/build/styles.css'));
}

add_action("wp_enqueue_scripts", "ilios_files");


function ilios_features()
{
    add_theme_support("title");
    register_nav_menu('mainMenu', "Main Menu");
    register_nav_menu('bottomMenu', "Bottom Menu");
    add_theme_support("post-thumbnails");

}

add_action("after_setup_theme", "ilios_features");

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );