<?php
    function load_stylesheets() {
        wp_register_style('style', get_template_directory_uri() . './style.css', array(), false, 'all');
        wp_enqueue_style('style');
    }

    add_theme_support('menu');
?>