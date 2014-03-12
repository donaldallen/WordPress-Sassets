<?php

add_action('wp_enqueue_scripts', function() {
    if ( ! is_admin()) {
        // Don't want WordPress's jQuery
        wp_deregister_script('jquery');

        wp_register_script('scripts-js', JS_URI . 'scripts.min.js', array(), '', true);
        wp_register_style('stylesheet', get_stylesheet_directory_uri() . '/style.css', array(), '', 'all');

        wp_enqueue_style('stylesheet');
        wp_enqueue_script('scripts-js');
    }
});