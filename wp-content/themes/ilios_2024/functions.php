<?php

function ilios_files()
{
    wp_enqueue_style('ilios_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('ilios_extra_styles', get_theme_file_uri('/build/index.css'));
}