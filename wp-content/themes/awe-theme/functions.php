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
add_action('after_setup_theme', 'awe_site_setup_theme');

function awe_site_enqueue_style()
{
    // wp_enqueue_style('awe_site-style', get_stylesheet_uri());
    wp_enqueue_style(
        'meu-tema-style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_template_directory() . '/style.css') // Gera uma versão com base na última modificação do arquivo
    );
}

add_action('wp_enqueue_scripts', 'awe_site_enqueue_style');

function awe_site_scripts() {
    wp_enqueue_script(
        'meu-script',
        get_template_directory_uri() . '/assets/js/index.js',
        array('jquery'),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'awe_site_scripts');


// function awe_site_setup_widgets()
// {
//     register_sidebar([
//         'id' => 'sidebar-widgets',
//         'name' => __('Sidebar Widgets', 'awe_site'),
//         'description' => __('Drag widgets to this sidebar container', 'awe_site'),
//         'before_widgets' => '<section id="%1$s" class="widget"> %2$s',
//         'after_widgets' => '</section>',
//         'before_title' => '<h4 class="widget-title h5">',
//         'after_title' => '</h4>'
//     ]);
//     register_sidebar([
//         'id' => 'footer-widgets',
//         'name' => __('Footer Widgets', 'awe_site'),
//         'description' => __('Drag widgets to this footer container', 'awe_site'),
//         'before_widgets' => '<section id="%1$s" class="widget"> %2$s',
//         'after_widgets' => '</section>',
//         'before_title' => '<h4 class="widget-title h5">',
//         'after_title' => '</h4>'
//     ]);
// };

// add_action('widgets_init', 'awe_site_setup_widgets');

// custom post type

function cpt_mentores() {
    $labels = array(
        'name'                  => _x('Mentores', 'Post type general name'),
        'singular_name'         => _x('Mentor', 'Post type singular name'),
        'menu_name'             => _x('Mentores', 'Admin Menu text'),
        'name_admin_bar'        => _x('Mentor', 'Add New on Toolbar'),
        'add_new'               => __('Adicionar Novo'),
        'add_new_item'          => __('Adicionar Novo mentor'),
        'new_item'              => __('Novo Mentor'),
        'edit_item'             => __('Editar Mentor'),
        'view_item'             => __('Ver Mentor'),
        'all_items'             => __('Todos os Mentores'),
        'search_items'          => __('Procurar Mentores'),
        'not_found'             => __('Nenhum mentor encontrado.'),
        'not_found_in_trash'    => __('Nenhum mentor encontrado na lixeira.'),
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'Mentores'),
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'          => true, // ativa o suporte ao Gutenberg
        'menu_icon'             => 'dashicons-businessperson', // Ícone para "Mentores"
    );

    register_post_type('mentores', $args);
}

add_action('init', 'cpt_mentores');

function cpt_projetos() {
    $labels = array(
        'name'                  => _x('Projetos', 'Post type general name'),
        'singular_name'         => _x('Projeto', 'Post type singular name'),
        'menu_name'             => _x('Projetos', 'Admin Menu text'),
        'name_admin_bar'        => _x('Projeto', 'Add New on Toolbar'),
        'add_new'               => __('Adicionar Novo'),
        'add_new_item'          => __('Adicionar Novo Projeto'),
        'new_item'              => __('Novo Projeto'),
        'edit_item'             => __('Editar Projeto'),
        'view_item'             => __('Ver Projeto'),
        'all_items'             => __('Todos os Projetos'),
        'search_items'          => __('Procurar Projetos'),
        'not_found'             => __('Nenhum Projeto encontrado.'),
        'not_found_in_trash'    => __('Nenhum Projeto encontrado na lixeira.'),
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'projetos'),
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'          => true, // ativa o suporte ao Gutenberg
        'menu_icon'             => 'dashicons-businessperson', // Ícone para "Especialistas"
    );

    register_post_type('projetos', $args);
}

add_action('init', 'cpt_projetos');
