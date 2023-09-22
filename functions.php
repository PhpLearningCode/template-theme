<?php
// loading bootstrap and css styles
function load_scripts(){
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.2', true );
    wp_enqueue_style( 'bootstrap-css','https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array() , '5.3.2', 'all' );
    wp_enqueue_style( 'template', get_template_directory_uri(  ) . '/css/template.css', array(), '1.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'load_scripts');

// registering menu
register_nav_menus( array(
    'main_menu' => 'Main Menu',
) );


?>