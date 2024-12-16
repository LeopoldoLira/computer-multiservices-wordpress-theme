<?php



function theme_styles(){
    // wp_register_style('main_stylesheet', get_stylesheet_uri(), '', '1.0', 'all');
    // wp_register_style('normalize',THEMEROOT . '/assets/css/normalize.css', '', '1.0', 'all');
    // wp_enqueue_style('normalize');
    // wp_enqueue_style('main_stylesheet');

    wp_register_style('main_stylesheet', get_stylesheet_directory_uri() . '/assets/styles/css/main.min.css', '', '1.0', 'all');
    wp_enqueue_style('main_stylesheet');
}

add_action('wp_enqueue_scripts','theme_styles');


// function theme_scripts(){
//     wp_register_script('main_script', THEMEROOT . '/assets/js/index.min.js', '', '1.0', true);
//     wp_enqueue_script('main_script');
// }

// add_action('wp_enqueue_scripts','theme_scripts');



?>