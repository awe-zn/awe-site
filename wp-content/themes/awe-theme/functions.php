<?php

function awe_site_setup_theme()
{
    $supports = [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ];
    add_theme_support('html5', $supports);
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    $GLOBALS['content-width'] = 1130;
    load_theme_textdomain('awe_site', get_template_directory() . '/lenguages');
}

function awe_site_enqueue_scripts()
{
    wp_enqueue_style('awe_site-style', get_stylesheet_uri());
}

add_action('after_setup_theme', 'awe_site_setup_theme');
add_action('wp_enqueue_scripts', 'awe_site_enqueue_scripts');

function awe_site_setup_widgets()
{
    register_sidebar([
        'id' => 'sidebar-widgets',
        'name' => __('Sidebar Widgets', 'awe_site'),
        'description' => __('Drag widgets to this sidebar container', 'awe_site'),
        'before_widgets' => '<section id="%1$s" class="widget"> %2$s',
        'after_widgets' => '</section>',
        'before_title' => '<h4 class="widget-title h5">',
        'after_title' => '</h4>'
    ]);
    register_sidebar([
        'id' => 'footer-widgets',
        'name' => __('Footer Widgets', 'awe_site'),
        'description' => __('Drag widgets to this footer container', 'awe_site'),
        'before_widgets' => '<section id="%1$s" class="widget"> %2$s',
        'after_widgets' => '</section>',
        'before_title' => '<h4 class="widget-title h5">',
        'after_title' => '</h4>'
    ]);
};

add_action('widgets_init', 'awe_site_setup_widgets');
