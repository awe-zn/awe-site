<?php

/** SUPORTE LOGO CUSTOMIZADA */

function ihub_setup() {
    // Suporte para logo personalizada
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    ));
    
}
add_action('after_setup_theme', 'ihub_setup');


function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
        )
    );
}
add_action('init', 'register_my_menus');



/** criando um metabox para identificar uma noticia como sendo destacada */
function add_featured_metabox() {
    add_meta_box(
        'featured_news', // ID da metabox
        'Notícia Destacada', // Título da metabox
        'featured_metabox_callback', // Função de callback
        'post', // Tipo de post ao qual a metabox será adicionada (por exemplo, 'post' para posts)
        'side', // Contexto (side, normal, advanced)
        'high' // Prioridade (high, core, default, low)
    );
}
add_action('add_meta_boxes', 'add_featured_metabox');

function featured_metabox_callback($post) {
    // Recupera o valor atual do campo 'is_featured'
    $value = get_post_meta($post->ID, '_is_featured', true);
    ?>
    <label for="is_featured">
        <input type="checkbox" name="is_featured" id="is_featured" value="1" <?php checked($value, '1'); ?> />
        Marcar como notícia destacada
    </label>
    <?php
}

function save_featured_metabox($post_id) {
    // Verifica se o campo está presente no envio do formulário
    if (isset($_POST['is_featured'])) {
        update_post_meta($post_id, '_is_featured', '1');
    } else {
        delete_post_meta($post_id, '_is_featured');
    }
}
add_action('save_post', 'save_featured_metabox');


/** incluindo imagem destacada na publicação */
function theme_setup() {
    // Suporte a imagens destacadas
    add_theme_support('post-thumbnails');

    // Suporte a imagens destacadas para um Custom Post Type (opcional)
    add_post_type_support('your_custom_post_type', 'thumbnail');
}
add_action('after_setup_theme', 'theme_setup');



/*** Registrando o postype de projetos */

function create_projeto_cpt() {
    $labels = array(
        'name' => 'Projetos',
        'singular_name' => 'Projeto',
        'menu_name' => 'Projetos',
        'name_admin_bar' => 'Projeto',
        'add_new' => 'Adicionar Novo',
        'add_new_item' => 'Adicionar Novo Projeto',
        'new_item' => 'Novo Projeto',
        'edit_item' => 'Editar Projeto',
        'view_item' => 'Ver Projeto',
        'all_items' => 'Todos os Projetos',
        'search_items' => 'Buscar Projetos',
        'not_found' => 'Nenhum projeto encontrado',
        'not_found_in_trash' => 'Nenhum projeto encontrado na lixeira',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'projetos'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'taxonomies' => array('category'), // Associa o CPT às categorias
        'menu_icon' => 'dashicons-portfolio',
    );

    register_post_type('projeto', $args);
}
add_action('init', 'create_projeto_cpt');


/** Incluindo os especialistas */
function create_especialista_cpt() {
    $labels = array(
        'name' => 'Especialistas',
        'singular_name' => 'Especialista',
        'menu_name' => 'Especialistas',
        'name_admin_bar' => 'Especialista',
        'add_new' => 'Adicionar Novo',
        'add_new_item' => 'Adicionar Novo Especialista',
        'new_item' => 'Novo Especialista',
        'edit_item' => 'Editar Especialista',
        'view_item' => 'Ver Especialista',
        'all_items' => 'Todos os Especialistas',
        'search_items' => 'Buscar Especialistas',
        'not_found' => 'Nenhum especialista encontrado',
        'not_found_in_trash' => 'Nenhum especialista encontrado na lixeira',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'especialistas'), // Define a URL base para o CPT
        'capability_type' => 'post',
        'has_archive' => true, // Habilita a URL de arquivo
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'thumbnail'),
        'menu_icon' => 'dashicons-admin-users',
    );

    register_post_type('especialista', $args);
}
add_action('init', 'create_especialista_cpt');


/** */
// Adicionar metaboxes para Especialista
function especialista_add_metaboxes() {
    add_meta_box(
        'especialista_info', // ID da metabox
        'Informações do Especialista', // Título da metabox
        'especialista_info_callback', // Função de callback
        'especialista', // Tipo de post
        'normal', // Contexto
        'high' // Prioridade
    );
}
add_action('add_meta_boxes', 'especialista_add_metaboxes');

// Callback para exibir os campos personalizados
function especialista_info_callback($post) {
    // Recupera os valores dos campos, se já tiverem sido salvos
    $nome = get_post_meta($post->ID, '_especialista_nome', true);
    $area = get_post_meta($post->ID, '_especialista_area', true);

    // Campo Nome
    echo '<label for="especialista_nome">Nome:</label>';
    echo '<input type="text" id="especialista_nome" name="especialista_nome" value="' . esc_attr($nome) . '" class="widefat" />';

    // Campo Área
    echo '<label for="especialista_area" style="margin-top: 15px;">Área:</label>';
    echo '<input type="text" id="especialista_area" name="especialista_area" value="' . esc_attr($area) . '" class="widefat" />';
}

// Salvar os dados dos campos personalizados
function especialista_save_postdata($post_id) {
    // Verifica se o campo está presente no envio do formulário
    if (array_key_exists('especialista_nome', $_POST)) {
        update_post_meta($post_id, '_especialista_nome', sanitize_text_field($_POST['especialista_nome']));
    }
    if (array_key_exists('especialista_area', $_POST)) {
        update_post_meta($post_id, '_especialista_area', sanitize_text_field($_POST['especialista_area']));
    }
}
add_action('save_post', 'especialista_save_postdata');


/** inserindo parceiros */

function create_parceiros_cpt() {
    $labels = array(
        'name' => 'Parceiros',
        'singular_name' => 'Parceiro',
        'menu_name' => 'Parceiros',
        'name_admin_bar' => 'Parceiro',
        'add_new' => 'Adicionar Novo',
        'add_new_item' => 'Adicionar Novo Parceiro',
        'new_item' => 'Novo Parceiro',
        'edit_item' => 'Editar Parceiro',
        'view_item' => 'Ver Parceiro',
        'all_items' => 'Todos os Parceiros',
        'search_items' => 'Buscar Parceiros',
        'not_found' => 'Nenhum parceiro encontrado',
        'not_found_in_trash' => 'Nenhum parceiro encontrado na lixeira',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'parceiros'), // Define a URL base para o CPT
        'capability_type' => 'post',
        'has_archive' => true, // Habilita a URL de arquivo
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'thumbnail'), // Suporta título e imagem destacada
        'menu_icon' => 'dashicons-images-alt2',
    );

    register_post_type('parceiro', $args);
}
add_action('init', 'create_parceiros_cpt');

// Adiciona a meta box para o campo "Link"
function parceiro_add_custom_meta_box() {
    add_meta_box(
        'parceiro_link_meta_box',       // ID da meta box
        'Link do Parceiro',              // Título da meta box
        'parceiro_link_meta_box_html',   // Função callback para exibir o HTML da meta box
        'parceiro',                      // Post type (CPT)
        'side',                          // Contexto (onde será exibido, por exemplo, 'side', 'normal')
        'default'                        // Prioridade
    );
}
add_action('add_meta_boxes', 'parceiro_add_custom_meta_box');

// Função que exibe o campo da meta box
function parceiro_link_meta_box_html($post) {
    $value = get_post_meta($post->ID, '_parceiro_link', true);
    ?>
    <label for="parceiro_link_field">URL do Parceiro:</label>
    <input type="url" id="parceiro_link_field" name="parceiro_link_field" value="<?php echo esc_attr($value); ?>" size="25" />
    <?php
}

// Salva o valor do campo "Link" quando o post é salvo
function parceiro_save_meta_box_data($post_id) {
    // Verifica se o campo foi preenchido
    if (array_key_exists('parceiro_link_field', $_POST)) {
        // Salva o valor do campo no banco de dados
        update_post_meta(
            $post_id,
            '_parceiro_link',
            esc_url($_POST['parceiro_link_field'])
        );
    }
}
add_action('save_post', 'parceiro_save_meta_box_data');


/** Gerenciando os links das redes */
function smihub_register_settings() {
    // Registrar configurações
    register_setting('smihub_social_options', 'smihub_linkedin');
    register_setting('smihub_social_options', 'smihub_twitter');
    register_setting('smihub_social_options', 'smihub_instagram');
    register_setting('smihub_social_options', 'smihub_youtube');
    register_setting('smihub_social_options', 'smihub_maps');

    // Adicionar uma página de opções
    add_options_page(
        'Configurações de Redes Sociais', // Título da página
        'Redes Sociais', // Título do menu
        'manage_options', // Capacidade necessária
        'smihub_social_options', // Slug do menu
        'smihub_social_options_page' // Função de callback para renderizar a página
    );
}
add_action('admin_menu', 'smihub_register_settings');

function smihub_social_options_page() {
    ?>
    <div class="wrap">
        <h1>Configurações de Redes Sociais</h1>
        <form method="post" action="options.php">
            <?php
            // Output security fields
            settings_fields('smihub_social_options');
            
            // Output setting sections and their fields
            do_settings_sections('smihub_social_options');

            // Output save settings button
            ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">LinkedIn</th>
                    <td><input type="url" name="smihub_linkedin" value="<?php echo esc_url(get_option('smihub_linkedin')); ?>" placeholder="Digite o link para acesso" class="regular-text" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Twitter</th>
                    <td><input type="url" name="smihub_twitter" value="<?php echo esc_url(get_option('smihub_twitter')); ?>" placeholder="Digite o link para acesso" class="regular-text" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Instagram</th>
                    <td><input type="url" name="smihub_instagram" value="<?php echo esc_url(get_option('smihub_instagram')); ?>" placeholder="Digite o link para acesso" class="regular-text" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">YouTube</th>
                    <td><input type="url" name="smihub_youtube" value="<?php echo esc_url(get_option('smihub_youtube')); ?>" placeholder="Digite o link para acesso" class="regular-text" /></td>
                </tr>                
                <tr valign="top">
                    <th scope="row">Google Maps</th>
                    <td><input type="url" name="smihub_maps" value="<?php echo esc_url(get_option('smihub_maps')); ?>" placeholder="Digite o link para acesso" class="regular-text" /></td>
                </tr>
            </table>
            <?php
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

/** ================================= */
/** CARREGANDO A TRADUÇÃO DE STRINGS */

function ihub_load_textdomain() {
    load_theme_textdomain('ihub-theme', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'ihub_load_textdomain');
