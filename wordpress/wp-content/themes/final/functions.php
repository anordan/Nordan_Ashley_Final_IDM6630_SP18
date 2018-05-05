<?php

function create_product_post_type() {

    $labels = array(
        'name' => _x( 'Products', 'post type general name' )
    );

    $args =array(
        'labels' => $labels,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array( 'tags','category' ),
        'public' => true
    );

    register_post_type( 'product', $args );
}

add_action('init', 'create_product_post_type');

set_post_thumbnail_size( 400, 400 );


add_theme_support('post-thumbnails');

function loadCSS() {
    wp_enqueue_style('theme-style', get_template_directory_uri(). '/css/theme-styles.css');
}

add_action('wp_enqueue_scripts', 'loadCSS');

add_filter('show_admin_bar', '_return_false');

?>