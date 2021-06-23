<?php

//Get All Styles
function ch_get_styles(){
    wp_register_style('ch_custom_style', get_theme_file_uri().'/static/custom_style.css');

    wp_enqueue_style('ch_custom_style');
}

add_action('wp_enqueue_scripts', 'ch_get_styles');

//Theme Support
function simple_theme_setup(){
    //Featured Image Support
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'simple_theme_setup');

//Exerpt Length
function set_excerpt_length(){
    return 5;
}

add_filter('excerpt_length', 'set_excerpt_length');