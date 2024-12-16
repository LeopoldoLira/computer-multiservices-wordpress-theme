<?php
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

require_once('includes/scripts-styles.php');

if ( ! function_exists('custom_theme_features') ) {

// Register Theme Features
function custom_theme_features()  {

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'image', 'video', 'audio' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );

	// Add theme support for Custom Background
	$background_args = array(
		'default-color'          => 'ffffff',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-background', $background_args );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
}
add_action( 'after_setup_theme', 'custom_theme_features' );

}
define('THEMEROOT', get_stylesheet_directory_uri());
add_theme_support( 'menus' );






function add_active_class_to_menu_item($classes, $item, $args, $depth) {
    // Check if the current item corresponds to the displayed page
    if (in_array('current-menu-item', $classes)) {
        // Add your custom active class name here
        $classes[] = 'active-menu-item';
    }

    return $classes;
}
add_filter('nav_menu_css_class', 'add_active_class_to_menu_item', 10, 4);



function create_post_type() {
    register_post_type( 'servicios',
        array(
            'labels' => array(
                'name' => __( 'Servicios' ),
                'singular_name' => __( 'Servicio' )
            ),
            'public' => true,
            'has_archive' => false,
            'hierarchical' => true,
            'supports' => array( 'title', 'editor', 'page-attributes', 'thumbnail' ),
            'menu_icon'   => 'dashicons-admin-generic'
        )
    );

    register_post_type( 'productos',
    array(
        'labels' => array(
            'name' => __( 'Productos' ),
            'singular_name' => __( 'Producto' )
        ),
        'public' => true,
        'has_archive' => false,
        'hierarchical' => true,
        'supports' => array( 'title', 'editor', 'page-attributes', 'thumbnail', 'tag' ),
        'menu_icon'   => 'dashicons-cart',
        'taxonomies' => array('categories')
    )
);
    flush_rewrite_rules( false ); 
}


add_action( 'init', 'create_post_type' );

add_action('init', 'create_computadoras_de_escritorio_category');

function create_computadoras_de_escritorio_category()
{
    register_taxonomy(
        'custom-categories', // taxonomy 
        'productos', // custom post type
        array(
            'label'             => __('Custom Categories'),
            'hierarchical'      => true,
            'show_ui'           => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => true,
            'show_tagcloud'     => true,
            'public'            => true
        )
    );
}

//Disable Emojis
function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );  
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );  
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'disable_emojis' );


