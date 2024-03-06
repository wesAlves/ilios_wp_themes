<?php
function your_custom_block_register() {
    wp_register_script(
        'jacaBlock',
        get_template_directory_uri() . '/build/banner.js', // Replace with the actual path to your JavaScript file
        array( 'wp-blocks', 'wp-element', 'wp-components', 'wp-i18n' ),
        filemtime( get_template_directory() . 'build/banner.js' ) // This will auto-increment the version when the file is modified
    );

    register_block_type( 'jaca/melao-block', array(
        'editor_script' => 'jacaBlock',
    ) );
}
add_action( 'init', 'your_custom_block_register' );