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

    //Menu Support
    register_nav_menus([
        'primary'   =>  __('Primary Menu')
    ]);
}

add_action('after_setup_theme', 'simple_theme_setup');

//Exerpt Length
function set_excerpt_length(){
    return 5;
}

add_filter('excerpt_length', 'set_excerpt_length');

//Widget Locations
function init_widgets($id){
    //register_sidebar is the function always used for widgets, even if not a sidebar
    register_sidebar([
        'name'          =>  __('Sidebar on Side'),
        'id'            =>  'sidebar',
        'before_widget' =>  '<div class="side-widget">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h3>',
        'after_title'   =>  '</h3>'
    ]);
}

add_action('widgets_init', 'init_widgets');