<?php
// loading bootstrap and css styles
function load_scripts(){
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.2', true );
    wp_enqueue_style( 'bootstrap-css','https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array() , '5.3.2', 'all' );
    wp_enqueue_style( 'template', get_template_directory_uri(  ) . '/css/template.css', array(), '1.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'load_scripts');


function theme_config(){
    // registering menu
    register_nav_menus( array(
        'main_menu' => 'Main Menu',
        'footer_menu' => 'Footer Menu',
    ) );
    // settings header size
    $args = array(
        'height' => 225,
        'width' => 1920
    );
    // adding theme supports
    add_theme_support( 'custom-header', $args );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'video', 'image' ) );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo', array('height' => 110, 'width' => 200) );
}

add_action( 'after_setup_theme', 'theme_config', 0);

// working on sidebars
add_action( 'widgets_init', 'theme_sidebars' );

function theme_sidebars(){
    register_sidebar(
        array(
            'name' => 'Home Page Sidebar',
            'id' => 'sidebar-1',
            'description' => 'Sidebar to be used on Home Page',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'sidebar-2',
            'description' => 'Sidebar to be used on Blog Page',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}
?>