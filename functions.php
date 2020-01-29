<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'script_theme');
add_action('after_setup_theme', 'theme_register_nav_menu');

function theme_register_nav_menu()
{
    // register_nav_menu('menu', 'Меню в шапке');
    add_theme_support('title-tag');
}

function style_theme()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('html', get_template_directory_uri().'about.php');
    wp_enqueue_style('normalize', get_template_directory_uri().'/assets/css/normalize.css');
    wp_enqueue_style('carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css');
    wp_enqueue_style('owltheme', get_template_directory_uri().'/assets/css/owl.theme.default.min.css');
}

function script_theme()
{
    wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js');
    wp_enqueue_script('jquery', get_template_directory_uri().'/assets/js/jquery-3.4.1.min.js');
    wp_enqueue_script('carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js');
}
