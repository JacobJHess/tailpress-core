<?php
function hesslab_enqueue_styles() {
    wp_enqueue_style(
        'tailwind',
        get_template_directory_uri() . '/dist/style.build.css',
        [],
        filemtime(get_template_directory() . '/dist/style.build.css'),
        'all'
    );
}
add_action('wp_enqueue_scripts', 'hesslab_enqueue_styles');
