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

function cpt_noticias() {
    $labels = array(
        'name'                  => _x('Noticias', 'Post type general name'),
        'singular_name'         => _x('Noticia', 'Post type singular name'),
        'menu_name'             => _x('Noticias', 'Admin Menu text'),
        'name_admin_bar'        => _x('Noticia', 'Add New on Toolbar'),
        'add_new'               => __('Adicionar Nova'),
        'add_new_item'          => __('Adicionar Nova Noticia'),
        'new_item'              => __('Nova Noticia'),
        'edit_item'             => __('Editar Noticia'),
        'view_item'             => __('Ver Noticia'),
        'all_items'             => __('Todas as Noticias'),
        'search_items'          => __('Procurar Noticias'),
        'not_found'             => __('Nenhum Noticia encontrada.'),
        'not_found_in_trash'    => __('Nenhum Noticia encontrada na lixeira.'),
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'noticias'),
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'          => true, // ativa o suporte ao Gutenberg
        'menu_icon'             => 'dashicons-businessperson', // Ícone para "noticias"
    );

    register_post_type('noticias', $args);
}

add_action('init', 'cpt_noticias');

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

function custom_breadcrumbs() {
    // Configurações
    $separator = ' >> '; // Separador entre os itens
    $home_title = 'Awe'; // Título do link para a página inicial
    $show_current = true; // Exibir o título da página atual no breadcrumb

    // Início do breadcrumb
    echo '<div class="breadcrumbs">';
    echo '<a href="' . home_url() . '">' . $home_title . '</a>' . $separator;

    // Verifica o tipo de página e constrói o breadcrumb
    if (is_category() || is_single()) {
        // Exibir a categoria do post, se existir
        $category = get_the_category();
        if ($category) {
            echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->name . '</a>' . $separator;
        }
        if (is_single() && $show_current) {
            echo '<span>' . get_the_title() . '</span>';
        }
    } elseif (is_page()) {
        // Exibe as páginas pai, se existir hierarquia de páginas
        global $post;
        if ($post->post_parent) {
            $ancestors = array_reverse(get_post_ancestors($post->ID));
            foreach ($ancestors as $ancestor) {
                echo '<a href="' . get_permalink($ancestor) . '">' . get_the_title($ancestor) . '</a>' . $separator;
            }
        }
        if ($show_current) {
            echo '<span>' . get_the_title() . '</span>';
        }
    } elseif (is_home()) {
        echo '<span>Blog</span>';
    } elseif (is_archive()) {
        echo '<span>' . post_type_archive_title('', false) . '</span>';
    } elseif (is_search()) {
        echo '<span>Resultados da pesquisa para: ' . get_search_query() . '</span>';
    } elseif (is_404()) {
        echo '<span>Página não encontrada</span>';
    }

    echo '</div>';
}

// Remove o prefixo de categoria da URL
add_filter('category_link', function($url) {
    return str_replace('/category/', '/', $url);
});

add_action('init', function() {
    global $wp_rewrite;
    $wp_rewrite->category_base = '';
    $wp_rewrite->flush_rules();
});