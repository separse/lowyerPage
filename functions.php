<?php

 //setups
function alex_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(
        array(
            'main-menu'=>'mainMenu',
            'footer-menu' => 'footerMenu'
        )
    );
}
add_action('after_setup_theme',"alex_setup");

//css&js support
function bonyadfani_scripts() {
    wp_enqueue_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome2',get_template_directory_uri() . '/fontawesome/css/fontawesome.min.css');
    wp_enqueue_style('font-awesome',get_template_directory_uri() . '/fontawesome/css/all.min.css');
    wp_enqueue_style('main-style',get_template_directory_uri() . '/style.css');
    wp_enqueue_style('responsive-style',get_template_directory_uri() . '/responsive.css');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'1',true);
}
add_action('wp_enqueue_scripts','bonyadfani_scripts');

?>